/*
 *   Author - ROOTBYPASS
 *   CARDİNG | HACKİNG | SECURİTY
 *   This İs OWNER !
 */

$(document).ready(function () {


    var site = window.site_url;
    var wp_rest = window.wp_rest;

    var now = 20;
    var click = 0;
    var paged = 1;
    var pre_post_id = null;
    var pre_post_con = '';


    $('.article-list').css('opacity', '1');
    $('.cat-real').attr('style', 'display:inline-block');


    var antd = new Vue({
        el: '#grid-cell',
        data() {
            return {
                m: window.index_m,
                site_url: window.site_url,

                exclude_option: window.cate_exclude_option,
                cate_exclude: window.cate_exclude,
                exclude_params: '',

                cates_exclude: window.cates_exclude,
                cate_exclude_params: '',
                cate_exclude_option: window.cates_exclude_option,

                pages: window.index_p,

                preview_comment_open: window.preview_comment_open,

                posts: null,
                posts_id_sticky: '0',
                cates: null,
                tages: null,
                loading: true,
                loading_cates: true,
                loading_tages: true,
                errored: true,
                loading_css: 'loading-line',
                comments_html: '<div id="new_comments" style="margin-top:40px"></div>'
            }
        },
        mounted() {


            if (this.cate_exclude == 'true') {
                this.exclude_params = '?exclude=' + this.exclude_option;
            }

            if (this.cates_exclude == 'true') {
                this.cate_exclude_params = '&categories_exclude=' + this.cate_exclude_option;
            }


            axios.get(this.site_url + '/wp-json/wp/v2/categories' + this.exclude_params)
                .then(response => {
                    this.cates = response.data;
                })
                .then(() => {
                    this.loading_cates = false;


                    axios.get(this.site_url + '/wp-json/wp/v2/tags?order=desc&per_page=15')
                        .then(response => {
                            this.tages = response.data;
                        }).then(() => {
                            this.loading_tages = false;
                        });

                });

                

            axios.get(this.site_url + '/wp-json/wp/v2/posts?sticky=1&'+ this.cate_exclude_params)
                .then(res_sticky => {
                    this.posts = res_sticky.data;

                    for(var s = 0;s< this.posts.length; ++s){
                        this.posts_id_sticky += (',' + this.posts[s].id); 
                    }

                    axios.get(this.site_url + '/wp-json/wp/v2/posts?sticky=0&exclude='+ this.posts_id_sticky +'&per_page=' + this.pages + '&page=' + paged + this.cate_exclude_params)
                    .then(res_normal => {

                        this.posts = this.posts.concat(res_normal.data);
                    })
                })
                .catch(e => {
                    this.errored = false;
                    alert('Makale yüklenemedi, sözde statik doğru yapılandırılmamış olabilir, lütfen bkz.: https://www.wpdaxue.com/wordpress-rewriterule.html Yapılandırmak için.');
                })
                .then(() => {
                    this.loading = false;
                    paged++;

                    $(window).scroll(function () {
                        var scrollTop = $(window).scrollTop();
                        var scrollHeight = $('.bottom').offset().top - 800;
                        if (scrollTop >= scrollHeight) {
                            if (click == 0) {
                                $('#scoll_new_list').click();
                                click++;
                            }
                        }
                    });

                    //检查是否存在下一页
                    axios.get(this.site_url + '/wp-json/wp/v2/posts?per_page=' + this.pages + '&page=' + paged + this.cate_exclude_params)
                    .then(response => {
                        if (!response.data.length || response.data.length == 0) {
                            this.loading_css = '';
                            $('#view-text').html('-&nbsp;Bütün makaleler&nbsp;-');
                            $('.bottom h5').html('Başka makale yok O__O "…').css({
                                'background': '#fff',
                                'color': '#999'
                            });
                        }
                    }).catch(e => {
                        this.loading_css = '';
                        $('#view-text').html('-&nbsp;Bütün makaleler&nbsp;-');
                        $('.bottom h5').html('Başka makale yok O__O "…').css({
                            'background': '#fff',
                            'color': '#999'
                        });
                    })

                })

        },
        methods: { //定义方法
            new_page: function () { //加载下一页文章列表
                $('#view-text').html('-&nbsp;Yükleniyor&nbsp;-');
                axios.get(this.site_url + '/wp-json/wp/v2/posts?sticky=0&exclude='+ this.posts_id_sticky + '&per_page=' + this.pages + '&page=' + paged + this.cate_exclude_params)
                    .then(response => {
                        if (!!response.data.length && response.data.length !== 0) {
                            $('#view-text').html('-&nbsp;makale listesi&nbsp;-');
                            this.posts.push.apply(this.posts, response.data);
                            click = 0;
                            paged++;
                        } else {
                            this.loading_css = '';
                            $('#view-text').html('-&nbsp;Bütün makaleler&nbsp;-');
                            $('.bottom h5').html('Başka makale yok O__O "…').css({
                                'background': '#fff',
                                'color': '#999'
                            });
                        }
                    }).catch(e => {
                        this.loading_css = '';
                        $('#view-text').html('-&nbsp;Bütün makaleler&nbsp;-');
                        $('.bottom h5').html('Başka makale yok O__O "…').css({
                            'background': '#fff',
                            'color': '#999'
                        });
                    })
            },
            preview: function (postId) {
                var previewingPost = $('.article-list-item .preview-p');
                if (!!previewingPost.length) {
                    var previewingPostItemEl = previewingPost.parent('.article-list-item');
                    previewingPostItemEl.find('.list-show-btn').html('Bir bakışta tam metin');
                    previewingPostItemEl.find('.article-list-content').html(pre_post_con).removeClass('preview-p');
                    pre_post_con = '';
                    this.comments_html = '<div id="new_comments" style="margin-top:40px"></div>';
                    if (postId === pre_post_id) {
                        return;
                    }
                }
                pre_post_con = $('#' + postId).html();
                $('#' + postId).html('<div uk-spinner></div><h7 class="loading-text">Yükleniyor...</h7>');
                axios.get(this.site_url + '/wp-json/wp/v2/posts/' + postId)
                    .then(response => {
                        if (response.data.length !== 0) {
                            axios.get(this.site_url + '/wp-json/wp/v2/comments?post=' + postId)
                                .then(comments => {
                                    if (response.data.comment_status == 'open' && this.preview_comment_open) {

                                        for (var c = 0; c < comments.data.length; ++c) {
                                            this.comments_html += '<div class="quick-div"><div><img class="quick-img" src="' + comments.data[c].author_avatar_urls['48'] + '"></div><div><p class="quick-name">' + comments.data[c].author_name + '<em class="quick-date">' + comments.data[c].date + '</em></p>' + comments.data[c].content.rendered + '</div></div>';
                                        }
                                        this.comments_html += '<div class="quick-div" style="margin-top: 15px;padding-bottom: 0px;"><div style="flex:1;border-right: 1px solid #eee;"><input type="text" placeholder="Takma ad" id="comment_form_name" class="quick-form"></div><div style="flex:1;margin-left: 10px;"><input type="email" placeholder="E-Posta" id="comment_form_email" class="quick-form"></div></div><div class="quick-div" style="padding: 4px;"><textarea placeholder="bir şey söyle..." id="comment_form_content" class="quick-form-textarea"></textarea></div><button class="quick-btn" onclick="send_comment(' + postId + ')">Yorum Gönder</button>';
                                    }


                                    $('#btn' + postId).html('Kısa Bilgileri Daralt');

                                    if (!!this.m) {
                                        var show_con = response.data.md_content;
                                        show_con = md.render(show_con);
                                    } else {
                                        var show_con = response.data.content.rendered;
                                    }

                                    $('#' + postId).addClass('preview-p').html(
                                        show_con +
                                        this.comments_html
                                    );
                                    pre_post_id = postId;
                                    document.querySelectorAll('pre code').forEach((block) => {
                                        hljs.highlightBlock(block);
                                    });
                                })
                        } else {
                            $('#' + postId).html('Burada hiçbir şey yok ..');
                        }
                    });
            }
        }
    });


})
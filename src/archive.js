$(document).ready(function() {

    var click = 0;
    var paged = 1;
    var incate = window.cate_id;
    var name = window.cate_name;
    var des = window.cate_des;


    $('.article-list').css('opacity', '1');
    $('.top1').html(name);
    $('.top2').html(des);
    $('.cat-real').attr('style', 'display:inline-block');


    new Vue({
        el: '#grid-cell',
        data() {
            return {

                site_url : window.site_url,

                exclude_option: window.cate_exclude_option,
                cate_exclude: window.cate_exclude,
                exclude_params: '',

                pages: window.index_p,
                cate_fre: window.cate_fre,
                cate_wor: window.cate_fre,

                posts: null,
                posts_id_sticky: '0',
                cates: null,
                des: null,
                loading: true, //v-if判断显示占位符
                loading_des: true,
                errored: true,
                loading_css: 'loading-line'
            }
        },
        mounted() {

            if(this.cate_exclude == 'true'){
                this.exclude_params = '?exclude=' + this.exclude_option;
            }


            axios.get(this.site_url + '/wp-json/wp/v2/categories' + this.exclude_params)
                .then(response => {
                    this.des = response.data;
                }).then(() => {
                    this.loading_des = false;
                });




            axios.get(this.site_url + '/wp-json/wp/v2/posts?sticky=1&categories=' + incate)
                .then(res_sticky => {
                    this.posts = res_sticky.data;


                    for(var s = 0;s< this.posts.length; ++s){
                        this.posts_id_sticky += (',' + this.posts[s].id); 
                    }

                    axios.get(this.site_url + '/wp-json/wp/v2/posts?sticky=0&categories=' + incate + '&exclude='+ this.posts_id_sticky + '&per_page=' + this.pages + '&page=' + paged)
                    .then(res_normal => {

                        this.posts = this.posts.concat(res_normal.data);
                    })
                })
                .catch(e => {
                    this.errored = false
                })
                .then(() => {
                    this.loading = false;
                    paged++;

                    $(window).scroll(function() {
                        var scrollTop = $(window).scrollTop();
                        var scrollHeight = $('.bottom').offset().top - 500;
                        if (scrollTop >= scrollHeight) {
                            if (click == 0) {
                                $('#scoll_new_list').click();
                                click++;
                            }
                        }
                    });

                })
        },
        methods: {
            new_page: function() {
                $('#view-text').html('-&nbsp;Yükleniyor&nbsp;-');
                axios.get(this.site_url + '/wp-json/wp/v2/posts?sticky=0&exclude='+ this.posts_id_sticky + '&per_page=' + this.pages + '&page=' + paged + '&categories=' + incate)
                    .then(response => {
                        if (!!response.data.length && response.data.length !== 0) {
                            $('#view-text').html('-&nbsp;Makale Listesi&nbsp;-');
                            this.posts.push.apply(this.posts, response.data);
                            click = 0;
                            paged++;
                        } else {
                            this.loading_css = '';
                            $('#view-text').html('-&nbsp;Bütün Makaleler&nbsp;-');
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
            }
        },
        filters: {
            link_page: function(cate_id) {
                if (cate_id == this.cate_fre) {
                    return 'ilave ';
                } else if (cate_id == this.cate_wor) {
                    return 'içinde oluşturuldu ';
                } else {
                    return '';
                }
            },
            link_style: function(cate_id) {
                if (cate_id == this.cate_fre || cate_id == this.cate_wor) {
                    return 'display: flex;';
                } else {
                    return '';
                }
            }
        }
    });


})
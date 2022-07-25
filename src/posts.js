window.onload = function(){


    $('.grid-centered').css({'max-width':'660px','padding': '0px 20px','margin-top': '80px'});
    $('.article-list').css('opacity','1');
    $('#header-div').css('opacity', '1');
    $('#header_info').css('opacity', '1');
    $('.cat-real').attr('style','display:inline-block');


    
    new Vue({
        el : '#grid-cell',
        data() {
            return {
                site_url : window.site_url,
                flag: false,
                posts: null,
                loading: true,
                loading_des: false,
                last_year: 0,
                posts_array: [],
            }
        },
        mounted () {
            //获取文章列表
            axios.get(this.site_url + '/wp-json/wp/v2/posts?per_page='+ window.post_count)
             .then(response => {
                 this.posts = response.data;
             })
             .then(() => {
                 var k = -1;
                 var i = 0;
                 for(i=0;i<(this.posts).length;i++){
                     if( ((this.posts[i].date.split('T'))[0].split('-'))[0] !== this.last_year ){
                         this.posts_array[k += 1] = [];
                         this.posts_array[k]['posts'] = [];
                         this.posts_array[k]['year'] = parseInt(((this.posts[i].date.split('T'))[0].split('-'))[0]);
                         this.posts_array[k]['posts'][(this.posts_array[k]['posts']).length] = this.posts[i];
                         this.last_year = ((this.posts[i].date.split('T'))[0].split('-'))[0];
                     }else{
                        this.posts_array[k]['posts'][(this.posts_array[k]['posts']).length] = this.posts[i];
                     }
                 }
                 this.loading = false;
            })
        }
    });
    
    
}
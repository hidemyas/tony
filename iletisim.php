<?php
/*
Template Name: İletişim
*/
get_header(); ?>
<?php setPostViews($post->ID); ?>

<article class="article reveal">
    <div id="load">
        <header class="article-header">
            <span class="badge badge-pill badge-danger single-badge"><a href="<?php echo site_url() ?>" style="text-decoration:none"><i class="czs-read-l" style="margin-right:5px;"></i>Blog sayfası</a></span>

            <h2 class="single-h2" style="height: 50px;width: 100%;background: rgba(238, 238, 238, 0.81);color:rgba(238, 238, 238, 0.81)"></h2>
            <div class="article-list-footer" style="height: 25px;background: rgb(246, 247, 248);width: 80%;margin-top: 15px;color:rgb(246, 247, 248)">
            </div>
            <div class="single-line"></div>
        </header>


        <form action="" id="myForm">
            <input type="text" name="isim" value="isim">
            <input type="text" name="soyisim" value="soyisim">
            <input type="radio" name="radyo" value="cevap 1">
            <input type="radio" name="radyo" value="cevap 2">
            <input type="checkbox" name="kutu" value="cevap 1">
            <input type="checkbox" name="kutu" value="cevap 2">
            <textarea name="mesaj" id="" cols="30" rows="10">Mesajımı</textarea>
            <button type="submit">Gönder</button>
        </form>

        <div class="article-comments" id="article-comments">
            <?php if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        </div>
    </div>
</article>

<script>
window.site_url = '<?php echo site_url() ?>';
window.post_id = <?php echo $post->ID; ?>;
</script>

<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/js/page.js"></script>






















<?php get_footer(); ?>
<?php
get_header();
if (!get_option('king_fre_cate')) $f = '99999';
else $f = get_option('king_fre_cate');
if (!get_option('king_wor_cate')) $w = '66666';
else $w = get_option('king_wor_cate');
if (!get_option('markdown-it')) $m = 0;
elseif (get_option('markdown-it') == 'kapat') $m = 0;
else $m = 1;
if (!get_option('king_read')) {
    $color = 0;
} elseif (get_option('king_read') == 'kapat') {
    $color = 0;
} else {
    $color = 'rgb(55, 151, 254)';
}
if (get_option('king_display_author') == 'kapat') $a = 'false';
else $a = 'true';
if (get_option('king_markdown_tex') == 'kapat') $tex = true;
else $tex = false;
?>

<div class="single-left" :style="exist_index ? '' : 'margin-top:-15px'">
    <?php if (get_option('king_single_index') && get_option('king_single_index') == 'aç') { ?>
        <div class="index-div">
            <div style="padding:0px 25px">
                <h4 style="font-weight: 600;margin: 0px;"><i class="czs-choose-list-l"></i> makale dizini</h4>
            </div>
            <ul id="article-index" class="index-ul">
                <li></li>
                <li class="content-loading-line-5">
                <li class="content-loading-line-4">
                <li class="content-loading-line-3">
                <li class="content-loading-line-2">
            </ul>
        </div>
    <?php } ?>
    <template v-if="!loading">
        <div class="index-div-next" v-if="!!post_prenext.prev && post_prenext.prev[0] !== null && post_prenext.prev[2] !== <?php echo $w; ?> && post_prenext.prev[2] !== <?php echo $f; ?>">
            <h4><i class="czs-hande-vertical"></i> Önceki makale</h4>
            <p><a :href="post_prenext.prev[0]" v-html="post_prenext.prev[1]"></a></p>
        </div>
        <div class="index-div-next" v-if="!!post_prenext.next && post_prenext.next[0] !== null && post_prenext.next[2] !== <?php echo $w; ?> && post_prenext.next[2] !== <?php echo $f; ?>">
            <h4><i class="czs-hand-horizontal"></i> Sonraki makale</h4>
            <p><a :href="post_prenext.next[0]" v-html="post_prenext.next[1]"></a></p>
        </div>
    </template>
</div>




<?php setPostViews(get_the_ID()); ?>

<div class="reading-bar" style="background:<?php echo $color; ?>"></div>
<article class="article reveal">
    <div id="load">

        <div class="article-header">
			<?php the_post_thumbnail('thumbnail-large');?>
            <span class="badge badge-pill badge-danger single-badge"><a href="<?php echo site_url() ?>" style="text-decoration:none"><i class="czs-read-l" style="margin-right:5px;"></i><?php echo get_bloginfo('name') ?></a></span>
            <span class="badge badge-pill badge-danger single-badge" style="margin-left: 10px;"><a :href="cate_url" style="text-decoration: none;color: #888;letter-spacing: .5px;" v-html="cate">Kategoriler</a></span>

            <h2 class="single-h2" style="height: 50px;width: 100%;background: rgba(238, 238, 238, 0.81);color:rgba(238, 238, 238, 0.81)">
            </h2>
            <div class="article-list-footer" style="height: 25px;background: rgb(246, 247, 248);width: 80%;margin-top: 15px;color:rgb(246, 247, 248)">
            </div>
            <div class="single-line"></div>
        </div>

        <div class="article-content">
        <?php if (!post_password_required()) { ?>
            <p class="content-loading-line"></p>
            <p class="content-loading-line"></p>
            <p class="content-loading-line"></p>
            <p class="content-loading-line"></p>
            <p class="content-loading-line"></p>
            <p class="content-loading-line"></p>
            <p class="content-loading-line"></p>
            <p class="content-loading-line"></p>
            <p class="content-loading-line"></p>
        </div>
        <?php } else {
            the_content();
        } ?>

        <div style="text-align: left;margin: 60px 0px 40px 8px;border-radius: 6px;" v-if="!!post_tags.length">
            <ul class="post_tags" style="margin: 0;padding: 0px;width: 100%;padding-bottom: 15px;">
                <li class="cat-real" style="display: inline-block;color: rgb(102, 102, 102);font-size: 1.1rem;font-weight: 600;margin: 0px;letter-spacing: 1px;"><a style="background-color: #e7f3ff;color: #2f94fe;padding: 3px 12px 4px 12px;border-radius: 4px;font-size: .9rem;">İlgili etiketler</a></li>
                <li class="cat-real" style="display: inline-block;" v-for="tag in post_tags">
                    <a :href="tag.url" target="_blank" v-html="tag.name" style="font-size: .9rem;border-radius: 4px;padding: 3px 10px 4px 10px;"></a>
                </li>
            </ul>
        </div>

        <div class="article-comments" id="article-comments">
            <?php 
                if (comments_open() || get_comments_number()){
                    comments_template();
                }
            ?>
        </div>


    </div>
</article>


<link rel="stylesheet" href="https://cdn.staticfile.org/KaTeX/0.11.1/katex.min.css" />
<link rel="stylesheet" href="https://static.ouorz.com/texmath.css" />
<script type="text/javascript" src="https://cdn.staticfile.org/markdown-it/10.0.0/markdown-it.min.js"></script>
<script type="text/javascript" src="https://cdn.staticfile.org/KaTeX/0.11.1/katex.min.js"></script>
<script type="text/javascript" src="https://static.ouorz.com/texmath.js"></script>

<script>
    window.index_m = '<?php if ($m) echo 'true'; else echo 'false'; ?>';
    window.site_url = '<?php echo site_url() ?>';
    window.post_id = <?php echo get_the_ID(); ?>;
    window.pwd = '<?php if (post_password_required()) echo 'true'; ?>';
    window.color = '<?php if ($color) echo 'true' ?>';
    window.display_author = <?php echo $a; ?>;
</script>

<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/js/single.js"></script>



<?php get_footer(); ?>
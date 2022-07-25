<?php


if (get_option('king_icp_display') && !!is_home() && get_option('king_icp_display_bottom') !== '开启') {
    $icpDisplay = true;
    echo '
        <div class="icp-div">
            <a href="http://www.beian.miit.gov.cn/" target="_blank">' . get_option('king_icp_display') . '</a>
        </div>
    ';
}
if (get_option('king_icp_display_bottom') == '开启' && !!is_home() && get_option('king_icp_display')) {


    $icpDisplayBottom = true;
} else {
    $icpDisplayBottom = false;
}
echo '
    <footer class="footer reveal" style="' . (wp_is_mobile() ? 'display:none;' : '') . '">
        <p>Copyright &copy; ' . date('Y') . ' ' . get_bloginfo('name') . ' · RootByPass | Elit  <i class="czs-heart tonys-love"></i>' . ($icpDisplayBottom ? (' | ' . get_option('king_icp_display')) : '') . '</p>
    </footer>
';
?>


<script type="text/javascript">
    $(document).ready(function() {
        $.goup({
            trigger: 100,
            bottomOffset: 30,
            locationOffset: 30,
        });
    });
</script>



<script src="https://static.ouorz.com/bootstrap.min.js"></script>

<?php wp_footer(); ?>


</div>
</div>
</main>
</body>

</html>


<?php
if (is_admin()) {
    $options = array(

        array(
            'title' => 'site ayarları',
            'id'    => 'one',
            'type'  => 'panelstart'
        ),
        array(
            'name' => 'Gezinme çubuğu ekran menüsü',
            'id' => 'king_nav_display',
            'type' => 'text',
            'op_des' => 'Blogun üst kısmındaki "Hakkımda"nın sol tarafında görüntülenecek menünün adı (özel => menü eklenirken belirlenen menü adı), boş ise arka planda menü kümesi çalışmayacaktır. görüntülenmek'
        ),
        array(
            'name' => 'üst ekran menüsü',
            'id' => 'king_nav_display_top',
            'type' => 'text',
            'op_des' => 'Blogun üst kısmındaki "Blog Adı" altında görüntülenmesi gereken menü adı.Boşsa, mevcut makalelerin tüm kategorileri görüntülenecektir.'
        ),
        array(
            'name' => 'Listenin tek sayfasındaki makale sayısı',
            'id' => 'king_per_page',
            'type' => 'number',
            'op_des' => 'Blogdaki makale listesiyle birlikte her sayfayı sonsuz olarak yüklemeden önce kaç makale görüntülenecek?'
        ),
        array(
            'name' => 'Site Başkanı Anahtar Kelimeleri',
            'id' => 'king_gjc',
            'type' => 'text',
            'op_des' => "Bu blogun İngilizce'de virgül \",\" ile ayrılmış anahtar kelimeleri blogun baş kısmına eklenecektir.",
        ),
        array(
            'name' => 'Site Açıklaması',
            'id' => 'king_ms',
            'type' => 'textarea',
            'op_des' => 'Blog başlığı bölümüne ve ana sayfanın üst kısmındaki adın altına eklenecek olan bu blogun açıklaması'
        ),
        array(
            'name' => 'site başlığı açıklaması',
            'id' => 'king_title_ms',
            'type' => 'textarea',
            'op_des' => 'Bu blogun başlık açıklaması, blog ana sayfasının en üstüne eklenecek (bu öğeyi doldurursanız, site açıklaması yerine en üstte görüntülenecek ve başlık açıklaması site açıklaması olarak kalacak)'
        ),
        array(
            'name' => 'Site ICO Simgesi',
            'id' => 'king_ico',
            'type' => 'text',
            'op_des' => 'Bu blog için favicon simgesine bağlantı'
        ),
        array(
            'name' => 'site logosu simgesi',
            'id' => 'king_logo',
            'type' => 'text',
            'op_des' => 'Bu blog için logo simgesi bağlantı adresi'
        ),
        array(
            'name' => 'Site Logo Simgesi Ana Sayfa Üst Ekran',
            'id' => 'king_logo_header',
            'type' => 'select',
            'op_des' => 'Sitenin ana sayfasının üst kısmındaki adın yanında bir avatarın gösterilip gösterilmeyeceği',
            'options' => array('kapat','aç')
        ),
        array(
            'name' => 'Site ICP kayıt numarası',
            'id' => 'king_icp_display',
            'type' => 'text',
            'op_des' => 'Bu sitenin SİP kayıt numarası sitenin sol alt köşesinde gösterilecektir, boş ise görüntülenmeyecektir.'
        ),
        array(
            'name' => 'Kayıt numarasını altta göster',
            'id' => 'king_icp_display_bottom',
            'type' => 'select',
            'op_des' => 'Görüntülenecek sitenin alt alanına kayıt numarası eklenip eklenmeyeceği, yan ekran kapatılacaktır.',
            'options' => array('kapat', 'aç')
        ),
        array(
            'name' => 'web yöneticisi istatistikleri',
            'id' => 'king_zztj',
            'type' => 'textarea',
            'op_des' => 'Komut dosyası etiketini içeren web yöneticisi istatistik kodu, blogun baş bölümüne eklenecektir.'
        ),
        array(
            'type'  => 'panelend' //标签段的结束
        ),


        array(
            'title' => 'İçerik ayarları', //标签显示的文字
            'id'    => 'two', //标签的ID
            'type'  => 'panelstart' //顶部标签的类型
        ),


        array(
            'name' => 'Ana sayfa hızlı önizleme yorum alanı',
            'id' => 'king_preview_comment',
            'type' => 'select',
            'op_des' => 'Ana sayfadaki hızlı önizleme makalesinde yorum alanını görüntüleme işlevinin etkinleştirilip etkinleştirilmeyeceğini',
            'options' => array('kapat', 'aç')
        ),

        array(
            'name' => 'Makale listesi yazar bilgi ekranı',
            'id' => 'king_display_author',
            'type' => 'select',
            'op_des' => 'Makalelerde ve makale listelerinde yazar adlarının gösterilip gösterilmeyeceği',
            'options' => array('kapat', 'aç')
        ),

        array(
            'name' => 'Makale listesi zaman formatı',
            'id' => 'king_date_format',
            'type' => 'select',
            'op_des' => 'AA-GG-YY gibi makale listesinde görüntülenen tarih formatı',
            'options' => array('Y-m-d', 'm/d/Y', 'd/m/Y', 'Y yıl n ay j gün')
        ),

        array(
            'name' => 'Makale dizini dizini',
            'id' => 'king_single_index',
            'type' => 'select',
            'op_des' => 'Makalenin sol tarafında görüntülenen başlık dizininin etkinleştirilip etkinleştirilmeyeceğini',
            'options' => array('kapat', 'aç')
        ),

        array(
            'name' => 'Makale okuma ilerlemesi',
            'id' => 'king_read',
            'type' => 'select',
            'op_des' => 'Makale içeriği sayfasının üst kısmında görüntülenen okuma ilerleme çubuğunun etkinleştirilip etkinleştirilmeyeceğini',
            'options' => array('kapat', 'aç')
        ),

        array(
            'name' => 'Makale İşaretleme Analizi',
            'id' => 'markdown-it',
            'type' => 'select',
            'op_des' => 'Makale sayfasındaki MarkDown içeriğinin otomatik olarak ayrıştırılıp ayrıştırılmayacağı (içerik yazmak için "metin/kod düzenleme" modunu kullanmalıdır)',
            'options' => array('kapat', 'aç')
        ),

        array(
            'name' => 'Ana Sayfa Kategorileri Hariç Tut',
            'id' => 'king_index_exclude',
            'type' => 'text',
            'op_des' => 'Sitenin ana sayfasında gösterilmeyen, virgülle ayrılmış kategori kimlikleri'
        ),

        array(
            'name' => 'Üst çubuk hariç tutma kategorileri',
            'id' => 'king_index_cate_exclude',
            'type' => 'text',
            'op_des' => '(Üst ekran menüsü doldurulmamışsa) Sitenin üst çubuğunda görüntülenmeyen, virgülle ayrılmış kategori kimlikleri'
        ),
        array(
            'name' => 'Özel bir makale listesi stili görüntüleyen bir kategori',
            'id' => 'king_cate_cate',
            'type' => 'number',
            'op_des' => 'Kategori kimliğini doldurun, kategori, vurgulanan kategori adı ve ilk etiket olarak makale listesinde görüntülenecektir.'
        ),
        array(
            'name' => 'Etiket olmadığında yer tutucu içerik',
            'id' => 'king_cate_cate_ph',
            'type' => 'text',
            'op_des' => '(Önceki öğe doldurulmuşsa) kategori etiketinin kategorisinde ilk etiket olmadığında yer tutucu içeriği'
        ),
        array(
            'name' => 'Dostu bağlantı sınıflandırması',
            'id' => 'king_fre_cate',
            'type' => 'number',
            'op_des' => 'Kategori kimliğini doldurun, bağlantı kategorisi farklı stillerdeki makalelerin bir listesini görüntüler, bir makale yayınlama şeklinde bir bağlantı ekler, biçim: başlık=>başlık, açıklama=>makale içeriği, resim=>özellikli resim , link=>özel alan bağlantısı (Klasik düzenleyici ile makaleyi düzenlerken kutuyu doldurmak için bağlantıyı kullanabilirsiniz)'
        ),
        array(
            'name' => 'Portföy sınıflandırması',
            'id' => 'king_wor_cate',
            'type' => 'number',
            'op_des' => 'Kategori kimliğini doldurun, portföy kategorisi, bağlantı ile aynı makale listesi stilini ve farklı açıklamayı gösterecektir.'
        ),
        array(
            'type'  => 'panelend' //标签段的结束
        ),



        array(
            'title' => 'Navigasyon ayarları', //标签显示的文字
            'id'    => 'three', //标签的ID
            'type'  => 'panelstart' //顶部标签的类型
        ),

        array(
            'name' => '"Hakkımda" bağlantısı',
            'id' => 'king_abt_url',
            'type' => 'text',
            'op_des' => 'Gezinti çubuğunda görüntülenen Hakkımda bağlantısı'
        ),
        array(
            'name' => '"Hakkımda" metni',
            'id' => 'king_about_text',
            'type' => 'text',
            'op_des' => 'Gezinme çubuğunda görüntülenen "Hakkımda" metnini değiştirin'
        ),
        array(
            'name' => 'Gezinme çubuğu ikinci düğme bağlantısı',
            'id' => 'king_nav_pu',
            'type' => 'text',
            'op_des' => '(Gezinme çubuğu menüsü doldurulmamışsa) gezinme çubuğunda görüntülenen ikinci düğme bağlantısı'
        ),
        array(
            'name' => 'Gezinme çubuğundaki ikinci düğmenin içeriği',
            'id' => 'king_nav_pn',
            'type' => 'text',
            'op_des' => '(Gezinme çubuğu menüsü doldurulmamışsa) gezinme çubuğunda görüntülenen ikinci düğme içeriği'
        ),

        array(
            'type'  => 'panelend'
        ),

    );
    function git_add_theme_options_page()
    {
        global $options;
        if ($_GET['page'] == basename(__FILE__)) {
            if ('update' == $_REQUEST['action']) {
                foreach ($options as $value) {
                    if (isset($_REQUEST[$value['id']])) {
                        update_option($value['id'], $_REQUEST[$value['id']]);
                    } else {
                        delete_option($value['id']);
                    }
                }
                update_option('git_options_setup', true);
                header('Location: themes.php?page=setting.php&update=true');
                die;
            } else if ('reset' == $_REQUEST['action']) {
                foreach ($options as $value) {
                    delete_option($value['id']);
                }
                delete_option('git_options_setup');
                header('Location: themes.php?page=setting.php&reset=true');
                die;
            }
        }
        add_theme_page('Tema ayarları', 'Tema ayarları', 'edit_theme_options', basename(__FILE__), 'git_options_page');
    }
    add_action('admin_menu', 'git_add_theme_options_page');

    function git_options_page()
    {
        global $options;
        $optionsSetup = get_option('git_options_setup') != '';
        if ($_REQUEST['update']) echo '<div class="updated" style="margin-top:15px"><p><strong>Ayarlar kaydedildi</strong></p></div>';
        if ($_REQUEST['reset']) echo '<div class="updated" style="margin-top:15px"><p><strong>Ayarlar sıfırlandı</strong></p></div>';
        ?>

        <div class="wrap" style="width: 47%;margin: 10vh auto;">
            <h1 style="font-weight: 600;font-size: 2.5rem;">ROOTBYPASS Tema Ayarları</h1>
            <div style="background: #f7f8f9;padding: 5px 20px;box-shadow: rgba(0, 0, 0, 0.08) 0px 1px 2px !important;border-radius: 4px;margin: 20px 0;">
                <?php admin_show_category(); ?>
            </div>

            <form method="post" style="box-shadow: rgba(0, 0, 0, 0.08) 0px 1px 2px !important;background: #f7f8f9;padding: 10px 20px;border-radius:4px">
                <h2 class="nav-tab-wrapper" style="border:none">
                    <?php
                    $panelIndex = 0;
                    foreach ($options as $value) {
                        if ($panelIndex !== 0) {
                            $margin = 'margin-left:10px';
                        }
                        if ($value['type'] == 'panelstart') echo '<a href="#' . $value['id'] . '" class="nav-tab' . ($panelIndex == 0 ? ' nav-tab-active' : '') . '" style="border: none;background: #fff;border-radius: 4px;padding: 5px 15px;margin: 0px;box-shadow: rgba(0, 0, 0, 0.08) 0px 1px 2px !important;' . $margin . '">' . $value['title'] . '</a>';
                        $panelIndex++;
                    }
                    ?>
                </h2>
                <?php
                $panelIndex = 0;
                foreach ($options as $value) {
                    switch ($value['type']) {
                        case 'panelstart':
                            echo '<div class="panel" id="' . $value['id'] . '" ' . ($panelIndex == 0 ? ' style="display:block"' : '') . '><table class="form-table">';
                            $panelIndex++;
                            break;
                        case 'panelend':
                            echo '</table></div>';
                            break;
                        case 'subtitle':
                            echo '<tr><th colspan="2"><h3>' . $value['title'] . '</h3></th></tr>';
                            break;
                        case 'text':
                            ?>
                        <tr>
                            <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
                            <td>
                                <label>
                                    <input name="<?php echo $value['id']; ?>" class="regular-text" id="<?php echo $value['id']; ?>" type='text' value="<?php if ($optionsSetup || get_option($value['id']) != '') {
                                                                                                                                                            echo stripslashes(get_option($value['id']));
                                                                                                                                                        } else {
                                                                                                                                                            echo $value['std'];
                                                                                                                                                        } ?>" />
                                    <span class="description"><?php echo $value['desc']; ?></span>
                                </label>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>
                        <?php
                        break;
                    case 'number':
                        ?>
                        <tr>
                            <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
                            <td>
                                <label>
                                    <input name="<?php echo $value['id']; ?>" class="small-text" id="<?php echo $value['id']; ?>" type="number" value="<?php if ($optionsSetup || get_option($value['id']) != '') {
                                                                                                                                                            echo get_option($value['id']);
                                                                                                                                                        } else {
                                                                                                                                                            echo $value['std'];
                                                                                                                                                        } ?>" />
                                    <span class="description"><?php echo $value['desc']; ?></span>
                                </label>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>
                        <?php
                        break;
                    case 'password':
                        ?>
                        <tr>
                            <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
                            <td>
                                <label>
                                    <input name="<?php echo $value['id']; ?>" class="regular-text" id="<?php echo $value['id']; ?>" type="password" value="<?php if ($optionsSetup || get_option($value['id']) != '') {
                                                                                                                                                                echo get_option($value['id']);
                                                                                                                                                            } else {
                                                                                                                                                                echo $value['std'];
                                                                                                                                                            } ?>" />
                                    <span class="description"><?php echo $value['desc']; ?></span>
                                </label>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>
                        <?php
                        break;
                    case 'textarea':
                        ?>
                        <tr>
                            <th><?php echo $value['name']; ?></th>
                            <td>
                                <p><label for="<?php echo $value['id']; ?>"><?php echo $value['desc']; ?></label></p>
                                <p><textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" rows="5" cols="50" class="large-text code"><?php if ($optionsSetup || get_option($value['id']) != '') {
                                                                                                                                                                echo stripslashes(get_option($value['id']));
                                                                                                                                                            } else {
                                                                                                                                                                echo $value['std'];
                                                                                                                                                            } ?></textarea></p>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>
                        <?php
                        break;
                    case 'select':
                        ?>
                        <tr>
                            <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
                            <td>
                                <label>
                                    <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                                        <?php foreach ($value['options'] as $option) : ?>
                                            <option value="<?php echo $option; ?>" <?php selected(get_option($value['id']), $option); ?>>
                                                <?php echo $option; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="description"><?php echo $value['desc']; ?></span>
                                </label>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>

                        <?php
                        break;
                    case 'radio':
                        ?>
                        <tr>
                            <th><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></th>
                            <td>
                                <?php foreach ($value['options'] as $name => $option) : ?>
                                    <label>
                                        <input type="radio" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="<?php echo $option; ?>" <?php checked(get_option($value['id']), $option); ?>>
                                        <?php echo $name; ?>
                                    </label>
                                <?php endforeach; ?>
                                <p><span class="description"><?php echo $value['desc']; ?></span></p>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>

                        <?php
                        break;
                    case 'checkbox':
                        ?>
                        <tr>
                            <th><?php echo $value['name']; ?></th>
                            <td>
                                <label>
                                    <input type='checkbox' name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="1" <?php echo checked(get_option($value['id']), 1); ?> />
                                    <span><?php echo $value['desc']; ?></span>
                                </label>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>

                        <?php
                        break;
                    case 'checkboxs':
                        ?>
                        <tr>
                            <th><?php echo $value['name']; ?></th>
                            <td>
                                <?php $checkboxsValue = get_option($value['id']);
                                if (!is_array($checkboxsValue)) $checkboxsValue = array();
                                foreach ($value['options'] as $id => $title) : ?>
                                    <label>
                                        <input type="checkbox" name="<?php echo $value['id']; ?>[]" id="<?php echo $value['id']; ?>[]" value="<?php echo $id; ?>" <?php checked(in_array($id, $checkboxsValue), true); ?>>
                                        <?php echo $title; ?>
                                    </label>
                                <?php endforeach; ?>
                                <span class="description"><?php echo $value['desc']; ?></span>
                                <p style="color: #999;margin-left: 3px;letter-spacing: .5px;"><?php echo $value['op_des'] ?></p>
                            </td>
                        </tr>
                        <?php
                        break;
                }
            }
            ?>

                <p class="submit">
                    <input name="submit" type="submit" class="button button-primary" value="KAYDET" />
                    <input type="hidden" name="action" value="update" />
                </p>
            </form>
            <form method="post" style="position: absolute;margin-top: -76px;margin-left: 110px;">
                <p>
                    <input name="reset" type="submit" class="button button-secondary" value="TÜM AYARLARI RESETLE" onclick="return confirm('Tüm Ayarlar Silinecek ？ ');" />
                    <input type="hidden" name="action" value="reset" />
                </p>
            </form>
        </div>
        <style>
            .panel {
                display: none
            }

            .panel h3 {
                margin: 0;
                font-size: 1.2em
            }

            #panel_update ul {
                list-style-type: disc
            }

            .nav-tab-wrapper {
                clear: both
            }

            .nav-tab {
                position: relative
            }

            .nav-tab i:before {
                position: absolute;
                top: -10px;
                right: -8px;
                display: inline-block;
                padding: 2px;
                border-radius: 50%;
                background: #e14d43;
                color: #fff;
                content: "\f463";
                vertical-align: text-bottom;
                font: 400 18px/1 dashicons;
                speak: none
            }

            #theme-options-search {
                display: none;
                float: right;
                margin-top: -34px;
                width: 280px;
                font-weight: 300;
                font-size: 16px;
                line-height: 1.5
            }

            .updated+#theme-options-search {
                margin-top: -91px
            }

            .wrap.searching .nav-tab-wrapper a,
            .wrap.searching .panel tr,
            #attrselector {
                display: none
            }

            .wrap.searching .panel {
                display: block !important
            }

            #attrselector[attrselector*=ok] {
                display: block
            }
        </style>
        <style id="theme-options-filter"></style>
        <div id="attrselector" attrselector="ok"></div>
        <script>
            jQuery(function($) {
                $(".nav-tab").click(function() {
                    $(this).addClass("nav-tab-active").siblings().removeClass("nav-tab-active");
                    $(".panel").hide();
                    $($(this).attr("href")).show();
                    return false;
                });

                var themeOptionsFilter = $("#theme-options-filter");
                themeOptionsFilter.text("ok");
                if ($("#attrselector").is(":visible") && themeOptionsFilter.text() != "") {
                    $(".panel tr").each(function(el) {
                        $(this).attr("data-searchtext", $(this).text().replace(/\r|\n/g, '').replace(/ +/g, ' ').toLowerCase());
                    });

                    var wrap = $(".wrap");
                    $("#theme-options-search").show().on("input propertychange", function() {
                        var text = $(this).val().replace(/^ +| +$/, "").toLowerCase();
                        if (text != "") {
                            wrap.addClass("searching");
                            themeOptionsFilter.text(".wrap.searching .panel tr[data-searchtext*='" + text + "']{display:block}");
                        } else {
                            wrap.removeClass("searching");
                            themeOptionsFilter.text("");
                        };
                    });
                };
            });
        </script>
    <?php
}
global $pagenow;
if (is_admin() && isset($_GET['activated']) && $pagenow == 'setting.php') {
        wp_redirect(admin_url('themes.php?page=functions.php'));
        exit;
    }
function git_enqueue_pointer_script_style($hook_suffix)
{
    $enqueue_pointer_script_style = false;
    $dismissed_pointers = explode(',', get_user_meta(get_current_user_id(), 'dismissed_wp_pointers', true));
    if (!in_array('git_options_pointer', $dismissed_pointers)) {
        $enqueue_pointer_script_style = true;
        add_action('admin_print_footer_scripts', 'git_pointer_print_scripts');
    }
    if ($enqueue_pointer_script_style) {
        wp_enqueue_style('wp-pointer');
        wp_enqueue_script('wp-pointer');
    }
}
add_action('admin_enqueue_scripts', 'git_enqueue_pointer_script_style');
function git_pointer_print_scripts()
{
    ?>
        <script>
            jQuery(document).ready(function($) {
                var $menuAppearance = $("#menu-appearance");
                $menuAppearance.pointer({
                    content: '<h3>en önemli adım</h3><p>Bu temayı kullandığınız için teşekkür ederiz, ziyaretçi deneyimini sağlamak için lütfen önce gerekli ayarları yapın<br/><ul><li>1.Bu temayı doğru kullanmak için varsayılan olmayan bir kalıcı bağlantı yapısı kullanmalısınız (önerilen/%post_id%.html)</li><li>2. Lütfen buna bakın <a target="_blank" href="https://www.wpdaxue.com/wordpress-rewriterule.html">Bağlantı Yönergeleri</a>Sözde statik, temanın makaleleri düzgün bir şekilde yüklemesi için sunucuda düzgün şekilde yapılandırıldı</li></ul></p>',
                    position: {
                        edge: "left",
                        align: "center"
                    },
                    close: function() {
                        $.post(ajaxurl, {
                            pointer: "git_options_pointer",
                            action: "dismiss-wp-pointer"
                        });
                    }
                }).pointer("open").pointer("widget").find("a").eq(0).click(function() {
                    var href = $(this).attr("href");
                    $menuAppearance.pointer("close");
                    setTimeout(function() {
                        location.href = href;
                    }, 700);
                    return false;
                });

                $(window).on("resize scroll", function() {
                    $menuAppearance.pointer("reposition");
                });
                $("#collapse-menu").click(function() {
                    $menuAppearance.pointer("reposition");
                });
            });
        </script>

    <?php
}

/* 主题检测更新部分 */
function theme_check_update($hook_suffix)
{
    add_action('admin_print_footer_scripts', 'theme_update_notice');
    wp_enqueue_style('wp-pointer');
    wp_enqueue_script('wp-pointer');
}
add_action('admin_enqueue_scripts', 'theme_check_update');

function theme_update_notice()
{
    $tony = wp_get_theme();
    ?>
        <script>
            jQuery(document).ready(function($) {
                var v = <?php echo $tony->get('Version'); ?>;
                $.ajax({
                    url: 'https://blog.ouorz.com/check_update.html?v=' + v,
                    type: "POST",
                    cache: false,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        if (data.status == true) {
                            show(data.version, data.download);
                        }
                    }
                });

                var show = function(new_v, d_url) {
                    var $menuAppearance = $("#menu-appearance");
                    $menuAppearance.pointer({
                        content: '<h3>güncelleme istemi</h3><p> ROOTBYPASS Tema şimdi güncellendi V' + new_v + '，Önemli güncellemeler içerebilir</p>',
                        position: {
                            edge: "left",
                            align: "center"
                        },
                        close: function() {
                            $.post(ajaxurl, {
                                pointer: "git_options_pointer",
                                action: "dismiss-wp-pointer"
                            });
                        }
                    }).pointer("open").pointer("widget").find("a").eq(0).click(function() {
                        var href = $(this).attr("href");
                        $menuAppearance.pointer("close");
                        setTimeout(function() {
                            location.href = href;
                        }, 700);
                        return false;
                    });

                    $(window).on("resize scroll", function() {
                        $menuAppearance.pointer("reposition");
                    });
                    $("#collapse-menu").click(function() {
                        $menuAppearance.pointer("reposition");
                    });
                }
            });
        </script>

    <?php
}

}
?>
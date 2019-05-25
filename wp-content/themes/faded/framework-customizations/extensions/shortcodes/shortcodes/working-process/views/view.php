<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @working section progress 
 */

$working_pro = array();
if ($atts['working_pro'] != '')
{
   $working_pro = $atts['working_pro'];
}
?>
<div class="row row-1">
    <div class="col-sm-12 col-lg-10 col-lg-offset-1">
        <div class="row row-2">
            <?php
            if (is_array($working_pro) && count($working_pro) > 0)
            {
                $st=1;
                foreach ($working_pro as $wpro) 
                {
                    $wk_img = '';
                    if ($wpro['wk_img'] != '' && $wpro['wk_img']['attachment_id'] != '') {
                        $getImg = wp_get_attachment_image_src($wpro['wk_img']['attachment_id'], 'full');
                        if (isset($getImg[0]) && $getImg[0] != '') {
                            $wk_img = $getImg[0];
                        }
                    }
                    $count = '';
                    if ($wpro['count'] != '') {
                        $count = $wpro['count'];
                    }
                    $title = '';
                    if ($wpro['title'] != '') {
                        $title = $wpro['title'];
                    }
                    $title_color = '';
                    if ($wpro['title_color'] != '') {
                        $title_color = 'color: ' . $wpro['title_color'] . ';';
                    }
                    $title_font_size = '';
                    if ($wpro['title_font_size'] != '') {
                        $title_font_size = 'font-size: ' . $wpro['title_font_size'] . 'px;';
                    }
                    $content = '';
                    if ($wpro['content'] != '') {
                        $content = $wpro['content'];
                    }
                    $cnt_font_size = '';
                    if ($wpro['cnt_font_size'] != '') {
                        $cnt_font_size = 'font-size: ' . $wpro['cnt_font_size'] . 'px;';
                    }
                    $cnt_color = '';
                    if ($wpro['cnt_color'] != '') {
                        $cnt_color = 'color: ' . $wpro['cnt_color'] . ';';
                    }
                    $margin_top = '';
                    if ($wpro['margin_top'] != '') {
                        $margin_top = 'margin-top: ' . $wpro['margin_top'] . 'px; ';
                    }
                    $margin_bottom = '';
                    if ($wpro['margin_bottom'] != '') {
                        $margin_bottom = 'margin-bottom: ' . $wpro['margin_bottom'] . 'px; ';
                    }
                    $allwed_tag=array(
                        'a'=>array(
                          'href'=>array(),
                           'title'=>array()
                        ),
                        'br'=>array(),
                        'span'=>array()
                    );
                    ?>    
                    <div class="col-sm-4 step-<?php echo esc_attr($st); ?>" style="<?php echo esc_attr($margin_top) . esc_attr($margin_bottom); ?>">
                        <img src="<?php echo esc_attr($wk_img); ?>" alt="step-1" class="animate delay-a">
                        <div class="step-desc">
                            <span><?php echo esc_html($count); ?></span>
                            <h4 style="<?php echo esc_attr($title_color) . esc_attr($title_font_size); ?>"><?php echo esc_html($title); ?></h4>
                            <hr>
                            <p style="<?php echo esc_attr($cnt_font_size) . esc_attr($cnt_color); ?>"><?php echo wp_kses($content, $allwed_tag); ?></p>
                        </div>
                    </div>
                    <?php
                    $st++;
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
if (!defined('FW')) {
    die('Forbidden');
}
/*
 * Over View Shortcode
 */
$is_icon_img_slector='';
if($atts['is_icon_img_slector'] != ''){
    $is_icon_img_slector=$atts['is_icon_img_slector'];
}

$icon_item='';
if($is_icon_img_slector['icon_item'] != ''){
    $icon_item=$is_icon_img_slector['icon_item'];
}

$ovr_img='';
if($is_icon_img_slector[1]['ovr_img'] != '' && $is_icon_img_slector[1]['ovr_img']['attachment_id'] != ''){
    $getImg = wp_get_attachment_image_src($is_icon_img_slector[1]['ovr_img']['attachment_id'], 'full');
    if (isset($getImg[0]) && $getImg[0] != '') {
        $ovr_img = $getImg[0];
    }
}
$ovi_icon='';
if($is_icon_img_slector[2]['ovi_icon'] != ''){
    $ovi_icon=$is_icon_img_slector[2]['ovi_icon'];
}
$icon_color='';
if($is_icon_img_slector[2]['icon_color'] != ''){
    $icon_color='color:'.$is_icon_img_slector[2]['icon_color'].';';
}

$title = '';
if ($atts['title'] != '') {
    $title = $atts['title'];
}

$title_color = '';
if ($atts['title_color'] != '') {
    $title_color = 'color: ' . $atts['title_color'] . ';';
}
$font_size = '';
if ($atts['font_size'] != '') {
    $font_size = 'font-size: ' . $atts['font_size'] . 'px;';
}
$title_font_weight = '';
if ($atts['title_font_weight'] != '') {
    $title_font_weight = 'font-weight: ' . $atts['title_font_weight'] . 'px;';
}
$title_align = '';
if ($atts['title_align'] != '') {
    $title_align = 'text-align: ' . $atts['title_align'] . ' !important; ';
}
$content = '';
if ($atts['content'] != '') {
    $content = $atts['content'];
}
$cnt_color = '';
if ($atts['cnt_color'] != '') {
    $cnt_color = 'color: ' . $atts['cnt_color'] . ';';
}
$cnt_align = '';
if ($atts['cnt_align'] != '') {
    $cnt_align = 'text-align: ' . $atts['cnt_align'] . ' !important; ';
}
$margin_top = '';
if ($atts['margin_top'] != '') {
    $margin_top = 'margin-top: ' . $atts['margin_top'] . 'px; ';
}
$margin_bottom = '';
if ($atts['margin_bottom'] != '') {
    $margin_bottom = 'margin-bottom: ' . $atts['margin_bottom'] . 'px; ';
}
?>

<div class="warpper-outer">
    <div class="wrapper ovi-item animate" style="<?php echo esc_attr($margin_top) . esc_attr($margin_bottom); ?>">
        <div class="wrapper-img">
            <?php
            if($icon_item != 1):   
            ?>
            <span class="overview-img <?php echo esc_attr($ovi_icon); ?>" style="<?php echo esc_attr($icon_color); ?>"></span>
            <?php
            else:
            ?>
            <img class="img-responsive" src="<?php echo esc_attr($ovr_img); ?>" alt="over-view" />
            <?php
            endif;
            ?>
        </div>
        <hr>
        <?php
        $allowed_html = array(
            'a' => array(
                'href' => array(),
                'title' => array()
            ),
            'br' => array(),
            'span' => array()
        );
        ?>
        <h5 style="<?php echo esc_attr($title_color) . esc_attr($font_size) . esc_attr($title_font_weight) . esc_attr($title_align); ?>"><?php echo esc_html($title); ?></h5>
        <p style="<?php echo esc_attr($cnt_color) . esc_attr($cnt_align); ?>"><?php echo wp_kses($content, $allowed_html) ?></p>
    </div>
</div>

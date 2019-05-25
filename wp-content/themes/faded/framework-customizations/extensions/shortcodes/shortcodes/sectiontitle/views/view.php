<?php
if (!defined('FW')) {
    die('Forbidden');
}
/*
  section Title View
 */
$section_title = '';
if ($atts['section_title'] != '') {
    $section_title = $atts['section_title'];
}

$title_color = '';
if ($atts['title_color'] != '') {
    $title_color = 'color: ' . $atts['title_color'] . '; ';
}

$title_font_size = '';
if ($atts['title_font_size'] != '') {
    $title_font_size = 'font-size: ' . $atts['title_font_size'] . 'px; ';
}
$title_line_height = '';
if ($atts['title_line_height'] != '') {
    $title_line_height = 'line-height: ' . $atts['title_line_height'] . 'px; ';
}

$text_align = '';
if ($atts['text_align'] != '') {
    $text_align = 'text-align: ' . $atts['text_align'] . '!important; ';
}
$margin_bottom = '';
if ($atts['margin_bottom'] != '') {
    $margin_bottom = 'margin-bottom:' . $atts['margin_bottom'] . 'px ; ';
}
$hr_img='';
if($atts['hr_img'] !='' && $atts['hr_img']['attachment_id'] !=''){
    $Img = wp_get_attachment_image_src($atts['hr_img']['attachment_id'], 'full');
    if (isset($Img[0]) && $Img[0] != '')
    {
        $hr_img ='background-image:url('.$Img[0].');';
    }
}
$section_subtitle = '';
if ($atts['section_subtitle'] != '') {
    $section_subtitle = $atts['section_subtitle'];
}

$sub_title_color = '';
if ($atts['sub_title_color'] != '') {
    $sub_title_color = 'color: ' . $atts['sub_title_color'] . '; ';
}

$sub_font_size = '';
if ($atts['sub_font_size'] != '') {
    $sub_font_size = 'font-size: ' . $atts['sub_font_size'] . 'px; ';
}

$sub_margin_bottom = '';
if ($atts['sub_margin_bottom'] != '') {
    $sub_margin_bottom = 'margin-bottom: ' . $atts['sub_margin_bottom'] . 'px !important; ';
}

?>
<!--style default-->
<h2 class="sec-title" style="<?php echo esc_attr($title_color) . esc_attr($title_line_height) . esc_attr($title_font_size) . esc_attr($margin_bottom) . esc_attr($text_align); ?>">
    <?php echo esc_html($section_title); ?>
</h2>
<div class="hr" style="<?php echo esc_attr($hr_img); ?>"></div>
<?php if ($section_subtitle != ''): ?>    
    <p class="subheader" style="<?php echo esc_attr($sub_title_color) . esc_attr($sub_font_size) . esc_attr($sub_margin_bottom); ?>">
        <?php echo esc_html($section_subtitle); ?>
    </p>
<?php endif; ?>





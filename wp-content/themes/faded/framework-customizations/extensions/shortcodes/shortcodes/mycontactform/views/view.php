<?php
if (!defined('FW')) {
    die('Forbidden');
}
/* Faded Contact form process */

$title = '';
if ($atts['title'] != '') {
    $title = $atts['title'];
}
$title_font_size = '';
if ($atts['title_font_size'] != '') {
    $title_font_size = 'font-size: ' . $atts['title_font_size'] . 'px; ';
}
$title_color = '';
if ($atts['title_color'] != '') {
    $title_color = 'color: ' . $atts['title_color'] . '; ';
}
$title_font_weight = '';
if ($atts['title_font_weight'] != '') {
    $title_font_weight = 'font-weight: ' . $atts['title_font_weight'] . '; ';
}
$title_line_height = '';
if ($atts['title_line_height'] != '') {
    $title_line_height = 'line-height: ' . $atts['title_line_height'] . 'px; ';
}
$contact_shorcode = '';
if ($atts['contact_shorcode'] != '') {
    $contact_shorcode = $atts['contact_shorcode'];
}
?> 
<!-- contact form two -->
<h3 class="conForm_heading" style="<?php echo esc_attr($title_font_size) . esc_attr($title_color) . esc_attr($title_font_weight) . esc_attr($title_line_height); ?>"><?php echo esc_html($title); ?></h3>
<?php 
    echo do_shortcode($contact_shorcode); 
?> 



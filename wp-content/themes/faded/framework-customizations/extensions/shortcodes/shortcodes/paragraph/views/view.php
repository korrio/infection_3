<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
* paragraph view  
*/
$para_text = '';
if ($atts['para_text'] != '') {
	$para_text =  $atts['para_text'];
}
$para_font_size = '';
if ( $atts['para_font_size'] != '') {
	$para_font_size =  'font-size: '.$atts['para_font_size'].'px; ';
}
$para_color = '';
if ( isset($atts['para_color']) && $atts['para_color'] != '') {
    $para_color =  'color: '.$atts['para_color'].'; ';
}
$text_align = '';
if ( $atts['text_align'] != '') {
	$text_align =  'text-align: '.$atts['text_align'].'; ';
}
$font_weight = '';
if ( $atts['font_weight'] != '') {
	$font_weight =  'font-weight: '.$atts['font_weight'].'; ';
}
$text_transform = '';
if ( $atts['text_transform'] != '') {
	$text_transform =  'text-transform: '.$atts['text_transform'].'; ';
}
$margin_top = '';
if ( $atts['margin_top'] != '') {
	$margin_top =  'margin-top: '.$atts['margin_top'].'px; ';
}
$margin_bottom = '';
if ( $atts['margin_bottom'] != '') {
	$margin_bottom =  'margin-bottom: '.$atts['margin_bottom'].'px; ';
}
$tag_allow=array(
    'a'=>array(
        'href'=>array(),
        'title'=>array(),
    ),
    'br'=>array(),
    'span'=>array()
);
?>
<p class="subheader" style="<?php echo esc_attr($para_font_size).  esc_attr($para_color).  esc_attr($text_align).  esc_attr($font_weight).  esc_attr($text_transform) .esc_attr($margin_bottom). esc_attr($margin_top); ?>"><?php echo wp_kses($para_text,$tag_allow) ?></p>

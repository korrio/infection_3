<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/*
* Heading view  
*/

$heading_text = '';
if ($atts['heading_text'] != '') {
	$heading_text =  $atts['heading_text'];
}

$font_size = '';
if ( $atts['font_size'] != '') {
	$font_size =  'font-size: '.$atts['font_size'].'px; ';
}

$heading_color = '';
if ( isset($atts['heading_color']) && $atts['heading_color'] != '') {
	$heading_color =  'color: '.$atts['heading_color'].'; ';
}

$font_weight = '';
if ( $atts['font_weight'] != '') {
	$font_weight =  'font-weight: '.$atts['font_weight'].'; ';
}

$text_align = '';
if ( $atts['text_align'] != '') {
	$text_align =  'text-align: '.$atts['text_align'].'; ';
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
<h4 class="mediumHead" style="<?php echo esc_attr($margin_bottom). esc_attr($margin_top). esc_attr($font_size). esc_attr($font_weight). esc_attr($text_transform). esc_attr($text_align) . esc_attr($heading_color); ?>"><?php echo wp_kses($heading_text, $tag_allow); ?></h4>   

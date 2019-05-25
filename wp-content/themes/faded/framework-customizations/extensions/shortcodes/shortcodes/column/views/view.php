<?php if (!defined('FW')) die('Forbidden');

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');

if ( ! empty( $atts['custom_class'] ) ) {
    $class .= ' '.$atts['custom_class'];
}

if($atts['col_resonsive'] != '')
{
    $class .= ' '.$atts['col_resonsive'].' ';
}

if($atts['col_offset'] != '')
{
    $class .= ' '.$atts['col_offset'].' ';
}

$text_align = '';
if (!empty($atts['text_align'])) {
    $text_align = 'text-align: ' . $atts['text_align'] . '!important; ';
}

$background_color = '';
if ( ! empty( $atts['background_color'] ) ) {
    $background_color = 'background-color: ' . $atts['background_color'] . '; ';
}

$padding_top = '';
if ( ! empty( $atts['padding_top'] )) {
    $padding_top = 'padding-top:' . $atts['padding_top'] . 'px; ';
}

$padding_left = '';
if ($atts['padding_left'] != '') {
    $padding_left = 'padding-left:' . $atts['padding_left'] . 'px; ';
}

$padding_right = '';
if ( $atts['padding_right'] != '') {
    $padding_right = 'padding-right:' . $atts['padding_right'] . 'px; ';
}

$padding_bottom = '';
if ( ! empty( $atts['padding_bottom'] )) {
    $padding_bottom = 'padding-bottom:' . $atts['padding_bottom'] . 'px; ';
}

$text_color = '';
if ( ! empty( $atts['text_color'] )) {
    $text_color = 'color: ' . $atts['text_color'] . ' !important; ';
}

$border_left = '';
if ( ! empty( $atts['border_left'] )) {
    $border_left = 'border-left: ' . $atts['border_left'] . '; ';
}

$border_top = '';
if ( ! empty( $atts['border_top'] )) {
    $border_top = 'border-top: ' . $atts['border_top'] . '; ';
}

$border_right = '';
if ( ! empty( $atts['border_right'] )) {
    $border_right = 'border-right: ' . $atts['border_right'] . '; ';
}

$border_bottom = '';
if ( ! empty( $atts['border_bottom'] )) {
    $border_bottom = 'border-bottom: ' . $atts['border_bottom'] . '; ';
}

$column_style = ($background_color || $text_align || $padding_top || $padding_left || $padding_right || $padding_bottom || $text_color || $border_left || $border_top || $border_right || $border_bottom)
        ? ' '. $background_color . $text_align . $padding_top . $padding_left . $padding_right . $padding_bottom . $text_color . $border_left . $border_top . $border_right . $border_bottom . ' ' 
        : '';

?>
<div class="<?php echo esc_attr($class); ?>" style="<?php echo esc_attr($column_style); ?>">
	<?php echo do_shortcode($content); ?>
</div>

<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
if (empty($atts['image'])) {
    return;
}

$width = ( is_numeric($atts['width']) && ( $atts['width'] > 0 ) ) ? $atts['width'] : '';
$height = ( is_numeric($atts['height']) && ( $atts['height'] > 0 ) ) ? $atts['height'] : '';
if (!empty($width) && !empty($height)) {
    $image = fw_resize($atts['image']['attachment_id'], $width, $height, true);
} else {
    $thum = wp_get_attachment_image_src($atts['image']['attachment_id'], 'full');
    $image = $thum[0];
}
$image_alingment = 'center';
if ($atts['image_alingment'] != '') {
    $image_alingment = 'text-align: ' . $atts['image_alingment'] . '; ';
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
<div class="wrapper-img" style="<?php echo esc_attr($image_alingment) . esc_attr($margin_top) . esc_attr($margin_bottom); ?>">
    <img class="animate delay-c" src="<?php echo esc_url($image) ?>" alt="" style="width: <?php echo esc_attr($width); ?>px; height:<?php echo esc_attr($height); ?>px;"/>
</div>


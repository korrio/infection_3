<?php
if (!defined('FW'))
{
    die('Forbidden');
}
/*
 * view process of button
 */
$btn_style = '';
if ($atts['btn_style'] != '')
{
    $btn_style = $atts['btn_style'];
}
$button_text = '';
if ($atts['button_text'] != '')
{
    $button_text = $atts['button_text'];
}
$button_text_color='';
if($atts['button_text_color'] != '')
{
	$button_text_color='color: '.$atts['button_text_color'].';';	
}
$button_text_size='';
if($atts['button_text_size'] != '')
{
	$button_text_size='font-size: '.$atts['button_text_size'].'px;';
}
$button_text_weight='';
if($atts['button_text_weight'] != '')
{
	$button_text_weight='font-weight: '.$atts['button_text_weight'].'; ';
}
$button_img = array();
if (is_array($atts['button_img']) && $atts['button_img']['attachment_id'] != '')
{
    $thum       = wp_get_attachment_image_src($atts['button_img']['attachment_id'], 'full');
    $button_img = $thum[0];
}
$button_link = '';
if ($atts['button_link'] != '')
{
    $button_link = $atts['button_link'];
}
if ($btn_style == 2)
{
    ?>
		<a class="faded_text_btn" style="<?php echo esc_attr($button_text_color) . esc_attr($button_text_size) . esc_attr($button_text_weight); ?>" target="_blank" href="<?php echo esc_url($button_link); ?>"><?php echo esc_html($button_text); ?></a>
    <?php
}
else
{
    ?>   
		<a target="_blank" href="<?php echo esc_url($button_link); ?>"><img src="<?php echo esc_url($button_img); ?>" alt="app"></a>     
    <?php
}

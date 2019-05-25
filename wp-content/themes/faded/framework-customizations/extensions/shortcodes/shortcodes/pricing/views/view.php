<?php
if (!defined('FW')) {
    die('Forbidden');
}

$is_best_value = 2;
if ($atts['is_best_value'] != '') {
    $is_best_value = $atts['is_best_value'];
}
$plan_name = 'Personal';
if ($atts['plan_name'] != '') {
    $plan_name = $atts['plan_name'];
}
$plan_text_color = '';
if ($atts['plan_text_color'] != '') {
    $plan_text_color = 'color: ' . $atts['plan_text_color'] . '!important;';
}
$price_icon = '';
if ($atts['price_icon'] != '') {
    $price_icon = $atts['price_icon'];
}
$price_icon_color = '';
if ($atts['price_icon_color'] != '') {
    $price_icon_color = 'color: ' . $atts['price_icon_color'] . '!important;';
}
$currency = '$';
if ($atts['currency'] != '') {
    $currency = $atts['currency'];
}
$price = '0.00';
if ($atts['price'] != '') {
    $price = $atts['price'];
}
$price_text_color = '';
if ($atts['price_text_color'] != '') {
    $price_text_color = 'color: ' . $atts['price_text_color'] . '!important;';
}
$period = 'mon';
if ($atts['period'] != '') {
    $period = $atts['period'];
}
$price_list = array();
if ($atts['price_list'] != '') {
    $price_list = $atts['price_list'];
}
$label = '';
if ($atts['label'] != '') {
    $label = $atts['label'];
}
$label_color='';
if($atts['label_color'] != '')
{
    $label_color='color: '.$atts['label_color'].';';
}
$label_bg_color='';
if($atts['label_bg_color'] != '')
{
    $label_bg_color='background: '.$atts['label_bg_color'].';';
}
$label_bg_gradient='';
if(isset($atts['label_bg_gradient']) && $atts['label_bg_gradient'] != '')
{   
    $label_bg_gradient='background: -moz-linear-gradient('.'0deg'.','.$atts['label_bg_gradient']['primary'].' 0%,'.$atts['label_bg_gradient']['secondary'].' 100%) !important;';
    $label_bg_gradient.='background: -webkit-linear-gradient('.'0deg'.','.$atts['label_bg_gradient']['primary'].' 0%,'.$atts['label_bg_gradient']['secondary'].' 100%) !important;';
    $label_bg_gradient.='background: -ms-linear-gradient('.'0deg'.','.$atts['label_bg_gradient']['primary'].' 0%,'.$atts['label_bg_gradient']['secondary'].' 100%) !important;';
}
$link = '#';
if ($atts['link'] != '') {
    $link = $atts['link'];
}
?>
<div class="col- <?php echo ($is_best_value == 1) ? 'highlighted' : ''; ?>">
    <div class="wrapper animate delay-a">
        <h3 style="<?php echo esc_attr($plan_text_color); ?>"><?php echo esc_html($plan_name); ?></h3>
        <span style="<?php echo esc_attr($price_icon_color); ?>" class="pricing-img <?php echo esc_attr($price_icon); ?>"></span>
        <hr>
        <?php 
            $tag_allowed=array(
                'a' => array(
                    'href' => array(),
                    'title' => array()
                ),
                'br' => array(),
                'p'=>array()
            );
            if(is_array($price_list) && $price_list != 0)
            {    
                foreach($price_list as $plist)
                {
                  echo '<p>'.wp_kses($plist['content'],$tag_allowed).'</p>';
                }
            }
        ?>
        <h1 style="<?php echo esc_attr($price_text_color); ?>">
            <span class="curency"><?php echo esc_html($currency); ?></span>
            <?php echo esc_html($price); ?>
            <span class="price_mon"><?php echo esc_html__('/ ', 'faded').$period; ?></span>
        </h1>
        <hr>
        <a style="<?php echo esc_attr($label_color) . esc_attr($label_bg_color) . esc_attr($label_bg_gradient); ?>" href="<?php echo esc_url($link); ?>"><span><?php echo esc_html($label); ?></span></a>
    </div>
</div>

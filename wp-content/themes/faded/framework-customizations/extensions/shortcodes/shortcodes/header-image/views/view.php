<?php
if (!defined('FW'))
{
    die('Forbidden');
}

/**
 * @var Header image $atts
 */
$is_horizon_image = '';
if ($atts['is_horizon_image'] != '')
{
    $is_horizon_image = 'horizontal horzTicker';
}
$image_header_title = '';
if ($atts['image_header_title'] != '')
{
    $image_header_title = $atts['image_header_title'];
}
$image_header_font_size = '';
if ($atts['image_header_font_size'] != '')
{
    $image_header_font_size = 'font-size: ' . $atts['image_header_font_size'] . 'px; ';
}
$image_header_color = '';
if ($atts['image_header_color'] != '')
{
    $image_header_color = 'color: ' . $atts['image_header_color'] . ';';
}
$image_header_font_weight = '';
if ($atts['image_header_font_weight'] != '')
{
    $image_header_font_weight = 'font-weight: ' . $atts['image_header_font_weight'] . ';';
}
$image_header_sub_title = '';
if ($atts['image_header_sub_title'] != '')
{
    $image_header_sub_title = $atts['image_header_sub_title'];
}
$image_header_sub_font_size = '';
if ($atts['image_header_sub_font_size'] != '')
{
    $image_header_sub_font_size = 'font-size: ' . $atts['image_header_sub_font_size'] . 'px;';
}
$image_header_sub_color = '';
if ($atts['image_header_sub_color'] != '')
{
    $image_header_sub_color = 'color: ' . $atts['image_header_sub_color'] . ';';
}
$image_header_buttons = array();
if ($atts['image_header_buttons'] != '')
{
    $image_header_buttons = $atts['image_header_buttons'];
}
$image_header_side_img = array();
if ($atts['image_header_side_img'] != '')
{
    $image_header_side_img = $atts['image_header_side_img'];
}
$image_backend = '';
if ($atts['image_backend'] != '')
{
    $image_backend = $atts['image_backend'];
    $thumImg1 = wp_get_attachment_image_src($atts['image_backend']['attachment_id'], 'full');
    if (isset($thumImg1[0]) && $thumImg1[0] != '')
    {
        $image_backend = $thumImg1[0];
    }
}
$imTag = array(
    'a' => array(
        'href' => array(),
        'title' => array(),
    ),
    'br' => array(),
    'span' => array(),
);
?>
<style type="text/css">
    .image-home{
        background: url(<?php echo esc_attr($image_backend); ?>) no-repeat scroll center 0 !important;
        background-size: cover !important;
    }
</style>
<header class="<?php
if (isset($is_horizon_image) && $is_horizon_image != '')
{
    echo esc_attr($is_horizon_image);
}
else
{
    echo esc_attr('slider-area');
}
?> image-home">
    <div class="slider-caption fade">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-header-txt">
                    <h1 style="<?php echo esc_attr($image_header_font_size) . esc_attr($image_header_color) . esc_attr($image_header_font_weight); ?>"><?php echo wp_kses($image_header_title, $imTag); ?></h1>
                    <p style="<?php echo esc_attr($image_header_sub_font_size) . esc_attr($image_header_sub_color); ?>"><?php echo esc_html($image_header_sub_title); ?></p>
                    <?php
                    if (is_array($image_header_buttons) && isset($image_header_buttons) && $image_header_buttons != '')
                    {
                        $imgs = 1;
                        foreach ($image_header_buttons as $imLoop)
                        {
                            if ($imgs == 1)
                            {
                                $class = 'btn-white';
                            }
                            else
                            {
                                $class = 'btn-transparent';
                            }
                            $image_header_button_label = '';
                            if ($imLoop['image_header_button_label'] != '')
                            {
                                $image_header_button_label = $imLoop['image_header_button_label'];
                            }
                            $image_header_button_link = '';
                            if ($imLoop['image_header_button_link'] != '')
                            {
                                $image_header_button_link = $imLoop['image_header_button_link'];
                            }
                            ?>
                            <a class="<?php echo esc_attr($class); ?>" href="<?php echo esc_url($image_header_button_link); ?>"><?php echo esc_html($image_header_button_label); ?></a>
                            <?php
                            $imgs++;
                        }
                    }
                    ?>
                </div>
                <div class="col-sm-5 col-header-img">
                    <?php
                    if (is_array($image_header_side_img) && isset($image_header_side_img) && $image_header_side_img != '')
                    {
                        $ss = 1;
                        foreach ($image_header_side_img as $ihsi)
                        {
                            if ($ss == 1 && $ss != '')
                            {
                                $img_class = 'img-header-lg';
                            }
                            else
                            {
                                $img_class = 'img-header-sm';
                            }
                            $image_side_img = '';
                            if ($ihsi['image_side_img'] != '' && $ihsi['image_side_img']['attachment_id'] != '')
                            {
                                $thumImg = wp_get_attachment_image_src($ihsi['image_side_img']['attachment_id'], 'full');
                                if (isset($thumImg[0]) && $thumImg[0] != '')
                                {
                                    $image_side_img = $thumImg[0];
                                }
                            }
                            ?>
                            <img src="<?php echo esc_url($image_side_img); ?>" alt="header-img" class="<?php echo esc_attr($img_class); ?>">
                            <?php
                            $ss++;
                        }
                    }
                    ?>                   
                </div>
            </div>
        </div>
    </div>
</header>


<?php
if (!defined('FW'))
{
    die('Forbidden');
}

/**
 * @var Slider $atts
 */

$is_horizon_slider = '';
if ($atts['is_horizon_slider'] != '')
{
    $is_horizon_slider = 'horizontal-slide';
}
$slider_header_title = '';
if ($atts['slider_header_title'] != '')
{
    $slider_header_title = $atts['slider_header_title'];
}
$slider_header_font_size = '';
if ($atts['slider_header_font_size'] != '')
{
    $slider_header_font_size = 'font-size: ' . $atts['slider_header_font_size'] . 'px;';
}
$slider_header_color = '';
if ($atts['slider_header_color'] != '')
{
    $slider_header_color = 'color: ' . $atts['slider_header_color'] . ';';
}
$slider_header_font_weight = '';
if ($atts['slider_header_font_weight'] != '')
{
    $slider_header_font_weight = 'font-weight: ' . $atts['slider_header_font_weight'] . ';';
}
$slider_header_sub_title = '';
if ($atts['slider_header_sub_title'] != '')
{
    $slider_header_sub_title = $atts['slider_header_sub_title'];
}
$slider_header_sub_font_size = '';
if ($atts['slider_header_sub_font_size'] != '')
{
    $slider_header_sub_font_size = 'font-size: ' . $atts['slider_header_sub_font_size'] . 'px; ';
}
$slider_header_sub_color = '';
if ($atts['slider_header_sub_color'] != '')
{
    $slider_header_sub_color = 'color: ' . $atts['slider_header_sub_color'] . ';';
}
$slider_header_buttons = array();
if ($atts['slider_header_buttons'] != '')
{
    $slider_header_buttons = $atts['slider_header_buttons'];
}
$slider_header_side_img = array();
if ($atts['slider_header_side_img'] != '')
{
    $slider_header_side_img = $atts['slider_header_side_img'];
}
$slider_backend_img = array();
if ($atts['slider_backend_img'] != '')
{
    $slider_backend_img = $atts['slider_backend_img'];
}
$stag = array(
    'a' => array(
        'href' => array(),
        'title' => array(),
    ),
    'br' => array(),
    'span' => array()
);
?>
<!--Start slider area-->
<section class="slider-area <?php
if (isset($is_horizon_slider) && !empty($is_horizon_slider))
{
    echo esc_attr($is_horizon_slider);
} else
{
    echo esc_attr('vertical');
}
?>">
    <div class="slider-caption">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-header-txt">
                    <h1 style="<?php echo esc_attr($slider_header_font_size) . esc_attr($slider_header_color) . esc_attr($slider_header_font_weight); ?>"><?php echo wp_kses($slider_header_title, $stag) ?></h1>
                    <p style="<?php echo esc_attr($slider_header_sub_font_size) . esc_attr($slider_header_sub_color); ?>"><?php echo esc_html($slider_header_sub_title); ?></p>
                    <?php
                    if (is_array($slider_header_buttons) && isset($slider_header_buttons) && !empty($slider_header_buttons))
                    {
                        $s = 1;
                        foreach ($slider_header_buttons as $shbtn)
                        {
                            if ($s == 1)
                            {
                                $class = 'btn-white';
                            } else
                            {
                                $class = 'btn-transparent';
                            }
                            $slid_header_button_label = '';
                            if ($shbtn['slid_header_button_label'] != '')
                            {
                                $slid_header_button_label = $shbtn['slid_header_button_label'];
                            }
                            $slid_header_button_link = '';
                            if ($shbtn['slid_header_button_link'] != '')
                            {
                                $slid_header_button_link = $shbtn['slid_header_button_link'];
                            }
                            ?>
                            <a class="<?php echo esc_attr($class); ?>" href="<?php echo esc_url($slid_header_button_link); ?>"><?php echo esc_html($slid_header_button_label); ?></a>                           
                            <?php
                            $s++;
                        }
                    }
                    ?>
                </div>
                <div class="col-sm-5 col-header-img">
                    <?php
                    if (is_array($slider_header_side_img) && isset($slider_header_side_img) && $slider_header_side_img != '')
                    {
                        $ss = 1;
                        foreach ($slider_header_side_img as $shsld)
                        {
                            if ($ss == 1 && $ss != '')
                            {
                                $img_class = 'img-header-lg';
                            } else
                            {
                                $img_class = 'img-header-sm';
                            }
                            $slide_head_side_img = '';
                            if ($shsld['slide_head_side_img'] != '' && $shsld['slide_head_side_img']['attachment_id'] != '')
                            {
                                $thumImg = wp_get_attachment_image_src($shsld['slide_head_side_img']['attachment_id'], 'full');
                                if (isset($thumImg[0]) && $thumImg[0] != '')
                                {
                                    $slide_head_side_img = $thumImg[0];
                                }
                            }
                            ?>
                            <img src="<?php echo esc_url($slide_head_side_img); ?>" alt="header-img" class="<?php echo esc_attr($img_class); ?>">
                            <?php
                            $ss++;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <ul class="cb-slideshow">
        <?php
        if (is_array($slider_backend_img) && isset($slider_backend_img) && $slider_backend_img != '')
        {
            $sld = 1;
            foreach ($slider_backend_img as $sbimg)
            {

                $slider_back_img = '';
                if ($sbimg['slider_back_img'] != '' && $sbimg['slider_back_img']['attachment_id'] != '')
                {
                    $thumImg = wp_get_attachment_image_src($sbimg['slider_back_img']['attachment_id'], 'full');
                    if (isset($thumImg[0]) && $thumImg[0] != '')
                    {
                        $slider_back_img = $thumImg[0];
                    }
                }
                $slider_animation = '';
                if ($sbimg['slider_animation'] != '')
                {
                    $slider_animation = $sbimg['slider_animation'];
                }
                ?>
                <li class="slideshowPic pic-<?php echo esc_attr($sld); ?>"></li>
                <style type="text/css">
                    .cb-slideshow li.pic-<?php echo esc_attr($sld); ?>
                    {                   
                        background:url(<?php echo esc_attr($slider_back_img); ?>);
                        animation-delay:<?php echo esc_attr($slider_animation.'s'); ?>;
                    }
                </style>
                <?php
                $sld++;
            }
        }
        ?>
    </ul>
</section>
<!--End slider area-->


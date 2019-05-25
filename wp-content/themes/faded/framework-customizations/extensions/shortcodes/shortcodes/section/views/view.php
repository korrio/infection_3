<?php
if (!defined('FW'))
{
    die('Forbidden');
}

$section_template = array();
if ($atts['section_template'] != '')
{
    $section_template = $atts['section_template'];
}

$section_types = '';
if (isset($section_template['section_types']) && $section_template['section_types'] != '')
{
    $section_types = $section_template['section_types'];
}

$is_horizontal = '';
if (isset($atts['is_horizontal']) && $atts['is_horizontal'])
{
    $is_horizontal = 'horizontal';
}
$backgroud_gradient = '';
if (isset($atts['backgroud_gradient']) && $atts['backgroud_gradient'] != '')
{
    $backgroud_gradient = 'background: -moz-linear-gradient(' . '0deg' . ',' . $atts['backgroud_gradient']['primary'] . ' 0%,' . $atts['backgroud_gradient']['secondary'] . ' 100%) !important;';
    $backgroud_gradient .= 'background: -webkit-linear-gradient(' . '0deg' . ',' . $atts['backgroud_gradient']['primary'] . ' 0%,' . $atts['backgroud_gradient']['secondary'] . ' 100%) !important;';
    $backgroud_gradient .= 'background: -ms-linear-gradient(' . '0deg' . ',' . $atts['backgroud_gradient']['primary'] . ' 0%,' . $atts['backgroud_gradient']['secondary'] . ' 100%) !important;';
}

$background_color = '';
if (isset($atts['background_color']) && $atts['background_color'] != '')
{
    $background_color = 'background: ' . $atts['background_color'] . '!important;';
}

$background_image = '';
if (!empty($atts['background_image']) && !empty($atts['background_image']['attachment_id']))
{
    $getImg = wp_get_attachment_image_src($atts['background_image']['attachment_id'], 'full');
    if (isset($getImg[0]) && $getImg[0] != '')
    {
        $background_image = 'background-image:url(' . $getImg[0] . '); ';
    }
}
$background_repeat = 'no-repeat';
if ($atts['background_repeat'] != '')
{
    $background_repeat = 'background-repeat: ' . $atts['background_repeat'] . ';';
}
$background_size = '';
if ($atts['background_size'] != '')
{
    $background_size = 'background-size: ' . $atts['background_size'] . ';';
}
$background_position = '';
if ($atts['background_position'] != '')
{
    $background_position = 'background-position: ' . $atts['background_position'] . ';';
}
$padding_top = '';
if ($atts['padding_top'] != '')
{
    $padding_top = 'padding-top: ' . $atts['padding_top'] . 'px;';
}
$padding_bottom = '';
if ($atts['padding_bottom'] != '')
{
    $padding_bottom = 'padding-bottom: ' . $atts['padding_bottom'] . 'px;';
}
$margin_top = '';
if ($atts['margin_top'] != '')
{
    $margin_top = 'margin-top: ' . $atts['margin_top'] . 'px;';
}
$margin_bottom = '';
if ($atts['margin_bottom'] != '')
{
    $margin_bottom = 'margin-bottom: ' . $atts['margin_bottom'] . 'px;';
}
$custom_class = '';
if ($atts['custom_class'] != '')
{
    $custom_class = $atts['custom_class'];
}


$row_id         = '';
if($atts['row_id'] != ''){
    $row_id = $atts['row_id'];
}



$section_mange = ($backgroud_gradient || $background_color || $padding_top || $padding_bottom || $margin_top || $margin_bottom ) ? 'style="' . esc_attr($backgroud_gradient) . esc_attr($background_color) . esc_attr($padding_top) . esc_attr($padding_bottom) . esc_attr($margin_top) . esc_attr($margin_bottom) . '"' : '';
switch ($section_types)
{
    case 1:
        ?>
        <!--overview-->
        <section id="<?php echo esc_attr($row_id); ?>" class="sec-overview bg-white overview-area <?php echo esc_attr($is_horizontal) . esc_attr($custom_class); ?>" <?php echo ($section_mange); ?>>
            <div class="bg-img" style="<?php echo esc_attr($background_image) . esc_attr($background_repeat) . esc_attr($background_size) . esc_attr($background_position); ?>"></div>
            <div class="container">
                <?php echo do_shortcode($content); ?>
            </div> 
        </section>
        <?php
        break;
    case 2:
        ?>
        <!--steps-->
        <section id="<?php echo esc_attr($row_id); ?>" class="sec-steps bg-gradient-vertical steps-area <?php echo esc_attr($is_horizontal) . esc_attr($custom_class); ?>" <?php echo ($section_mange); ?>>
            <div class="bg-img" style="<?php echo esc_attr($background_image) . esc_attr($background_repeat) . esc_attr($background_size) . esc_attr($background_position); ?>"></div>
            <div class="container">
                <?php echo do_shortcode($content); ?>
            </div> 
        </section>
        <?php
        break;
    case 3:
        ?>
        <!--features-->
        <section id="<?php echo esc_attr($row_id); ?>" class="sec-features bg-grey feature-area <?php echo esc_attr($is_horizontal) . esc_attr($custom_class); ?>" <?php echo ($section_mange); ?>>
            <div class="bg-img" style="<?php echo esc_attr($background_image) . esc_attr($background_repeat) . esc_attr($background_size) . esc_attr($background_position); ?>"></div>
            <div class="container">
                <?php echo do_shortcode($content); ?>
            </div> 
        </section>
        <?php
        break;
    case 4:
        ?>
        <!--screen-short-->
        <section id="<?php echo esc_attr($row_id); ?>" class="sec-screenshots bg-white <?php echo esc_attr($is_horizontal) . esc_attr($custom_class); ?>" <?php echo ($section_mange); ?>>
            <div class="bg-img" style="<?php echo esc_attr($background_image) . esc_attr($background_repeat) . esc_attr($background_size) . esc_attr($background_position); ?>"></div>
            <div class="container">
                <?php echo do_shortcode($content); ?>
            </div> 
        </section>
        <?php
        break;
    case 5:
        ?>
        <!--video-->
        <section id="<?php echo esc_attr($row_id); ?>" class="sec-video bg-gradient-horizontal bg-img <?php echo esc_attr($is_horizontal) . esc_attr($custom_class); ?>"  <?php echo ($section_mange); ?>>
            <div class="bg-img" style="<?php echo esc_attr($background_image) . esc_attr($background_repeat) . esc_attr($background_size) . esc_attr($background_position); ?>"></div>
            <div class="container-fluid">
                <?php echo do_shortcode($content); ?>
            </div> 
        </section>
        <?php
        break;
    case 6:
        ?>
        <!--testimonial-->
        <section id="<?php echo esc_attr($row_id); ?>" class="sec-testimonial bg-white <?php echo esc_attr($is_horizontal) . esc_attr($custom_class); ?>" <?php echo ($section_mange); ?>>
            <div class="bg-img" style="<?php echo esc_attr($background_image) . esc_attr($background_repeat) . esc_attr($background_size) . esc_attr($background_position); ?>"></div>
            <div class="container">
                <?php echo do_shortcode($content); ?>
            </div> 
        </section>
        <?php
        break;
    case 7:
        ?>
        <!--team-->
        <section id="<?php echo esc_attr($row_id); ?>" class="sec-team bg-gradient-horizontal bg-img team-area <?php echo esc_attr($is_horizontal) . esc_attr($custom_class); ?>" <?php echo ($section_mange); ?>>
            <div class="bg-img" style="<?php echo esc_attr($background_image) . esc_attr($background_repeat) . esc_attr($background_size) . esc_attr($background_position); ?>"></div>
            <div class="container">
                <?php echo do_shortcode($content); ?>
            </div> 
        </section>
        <?php
        break;
    case 8:
        ?>
        <!--pricing-->
        <section id="<?php echo esc_attr($row_id); ?>" class="sec-pricing bg-white pricing-area <?php echo esc_attr($is_horizontal) . esc_attr($custom_class); ?>" <?php echo ($section_mange); ?>>
            <div class="bg-img" style="<?php echo esc_attr($background_image) . esc_attr($background_repeat) . esc_attr($background_size) . esc_attr($background_position); ?>"></div>
            <div class="container">
                <?php echo do_shortcode($content); ?>
            </div> 
        </section>
        <?php
        break;
    case 9:
        ?>
        <!--faq-->
        <section id="<?php echo esc_attr($row_id); ?>" class="sec-faq bg-gradient-vertical faq-area <?php echo esc_attr($is_horizontal) . esc_attr($custom_class); ?>" <?php echo ($section_mange); ?>>
            <div class="bg-img" style="<?php echo esc_attr($background_image) . esc_attr($background_repeat) . esc_attr($background_size) . esc_attr($background_position); ?>"></div>
            <div class="container">
                <?php echo do_shortcode($content); ?>
            </div>
        </section>
        <?php
        break;
    case 10:
        ?>
        <!--blog-->
        <section id="<?php echo esc_attr($row_id); ?>" class="sec-blog bg-white bog-area <?php echo esc_attr($is_horizontal) . esc_attr($custom_class); ?>" <?php echo ($section_mange); ?>>
            <div class="bg-img" style="<?php echo esc_attr($background_image) . esc_attr($background_repeat) . esc_attr($background_size) . esc_attr($background_position); ?>"></div>
            <div class="container">
                <?php echo do_shortcode($content); ?>
            </div>
        </section>
        <?php
        break;
    case 11:
        ?>
        <!--get-app-->
        <section id="<?php echo esc_attr($row_id); ?>" class="sec-get-app bg-grey bg-img get-aps-area <?php echo esc_attr($is_horizontal) . esc_attr($custom_class); ?>" <?php echo ($section_mange); ?>>
            <div class="bg-img" style="<?php echo esc_attr($background_image) . esc_attr($background_repeat) . esc_attr($background_size) . esc_attr($background_position); ?>"></div>
            <div class="container">
                <?php echo do_shortcode($content); ?>
            </div>
        </section>
        <?php
        break;
    case 12:
        ?>
        <!--contact-->
        <section id="<?php echo esc_attr($row_id); ?>" class="sec-contact bg-img contact-area <?php echo esc_attr($custom_class); ?>" <?php echo ($section_mange); ?>>
            <div class="bg-img" style="<?php echo esc_attr($background_image) . esc_attr($background_repeat) . esc_attr($background_size) . esc_attr($background_position); ?>"></div>
            <div class="container">
                <?php echo do_shortcode($content); ?>
            </div>
        </section>
        <?php
        break;
    default:
        ?>
        <!--default-->
        <div class="defatult_section <?php echo esc_attr($custom_class); ?>" <?php echo ($section_mange); ?>>
            <div class="container-fluid">
                <?php echo do_shortcode($content); ?>
            </div>
        </div>
    <?php
}
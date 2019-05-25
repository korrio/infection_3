<?php
if (!defined('FW')) {
    die('Forbidden');
}
/*
 * Heading view  
 */

$is_horiz_header='';
if($atts['is_horiz_header'] != '')
{
    $is_horiz_header = 'horizontal';
}    
$header_title = '';
if ($atts['header_title'] != '') {
    $header_title = $atts['header_title'];
}

$header_font_size = '';
if ($atts['header_font_size'] != '') {
    $header_font_size = 'font-size: ' . $atts['header_font_size'] . 'px; ';
}

$header_color = '';
if (isset($atts['header_color']) && $atts['header_color'] != '') {
    $header_color = 'color: ' . $atts['header_color'] . '; ';
}

$header_font_weight = '';
if ($atts['header_font_weight'] != '') {
    $header_font_weight = 'font-weight: ' . $atts['header_font_weight'] . '; ';
}
$header_sub_title = '';
if ($atts['header_sub_title'] != '') {
    $header_sub_title = $atts['header_sub_title'];
}
$header_sub_font_size = '';
if ($atts['header_sub_font_size'] != '') {
    $header_sub_font_size = 'font-size: ' . $atts['header_sub_font_size'] . 'px; ';
}
$header_sub_color = '';
if (isset($atts['header_sub_color']) && $atts['header_sub_color'] != '') {
    $header_sub_color = 'color: ' . $atts['header_sub_color'] . '; ';
}

$header_buttons = array();
if($atts['header_buttons'] != ''){
    $header_buttons = $atts['header_buttons'];
}
$header_side_img = array();
if($atts['header_side_img'] != ''){
    $header_side_img = $atts['header_side_img'];
}
$margin_top = '';
if ($atts['margin_top'] != '') {
    $margin_top = 'margin-top: ' . $atts['margin_top'] . 'px; ';
}

$margin_bottom = '';
if ($atts['margin_bottom'] != '') {
    $margin_bottom = 'margin-bottom: ' . $atts['margin_bottom'] . 'px; ';
}
$tag_allow = array(
    'a' => array(
        'href' => array(),
        'title' => array(),
    ),
    'br' => array(),
    'span' => array()
);
?>
<header id="home" class="header-home <?php echo esc_attr($is_horiz_header); ?>" style="<?php echo esc_attr($margin_top) . esc_attr($margin_bottom); ?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-header-txt lr-padding">
                <h1 class="animate display-none" style="<?php echo esc_attr($header_font_size) . esc_attr($header_color) . esc_attr($header_font_weight); ?>"><?php echo wp_kses($header_title, $tag_allow); ?></h1>
                <p class="animate delay-a display-none" style="<?php echo esc_attr($header_sub_font_size) . esc_attr($header_sub_color); ?>"><?php echo esc_html($header_sub_title); ?></p>
                <?php
                if (is_array($header_buttons) && $header_buttons != '')
                {
                    $i = 1;
                    foreach ($header_buttons as $hb) 
                    {
                        if ($i == 1) 
                        {
                            $class = 'btn-white delay-b';
                        }
                        else
                        {
                            $class = 'btn-transparent delay-c';
                        }
                        $header_button_label = '';
                        if ($hb['header_button_label'] != '') 
                        {
                            $header_button_label = $hb['header_button_label'];
                        }
                        $header_button_link = '';
                        if ($hb['header_button_link'] != '') 
                        {
                            $header_button_link = $hb['header_button_link'];
                        }
                        ?>
                        <a class="<?php echo esc_attr($class); ?> animate display-none" href="<?php echo esc_url($header_button_link); ?>">
                        <?php echo esc_html($header_button_label); ?>
                        </a>                        
                        <?php
                        $i++;
                    }
                }
                ?>
            </div>
            <div class="col-sm-5 col-md-offset-2 col-md-3 col-header-img right-padding">
                <?php
                if (is_array($header_side_img) && $header_side_img != '')
                {
                    $x=1;
                    foreach ($header_side_img as $hsi) 
                    {
                        if($x == 1 && $x != '')
                        {
                            $img_class='img-header-lg delay-c';
                        }
                        else
                        {
                            $img_class='img-header-sm delay-a';
                        }    
                        $head_side_img = '';
                        if ($hsi['head_side_img'] != '' && $hsi['head_side_img']['attachment_id'] != '') 
                        {
                            $thumImg = wp_get_attachment_image_src($hsi['head_side_img']['attachment_id'], 'full');
                            if (isset($thumImg[0]) && $thumImg[0] != '')
                            {
                                $head_side_img = $thumImg[0];
                            }
                        }
                        ?>
                        <img src="<?php echo esc_url($head_side_img); ?>" alt="header-img" class="<?php echo esc_attr($img_class); ?> animate display-none">
                        <?php
                        $x++;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</header>
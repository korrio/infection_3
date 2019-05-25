<?php
if (!defined('FW'))
{
    die('Forbidden');
}
/*
 * Header Video
 */
$is_horizon_slider = '';
if ($atts['is_horizon_slider'] != '')
{
    $is_horizon_slider = 'horizontal';
}
$video_header_title = '';
if ($atts['video_header_title'] != '')
{
    $video_header_title = $atts['video_header_title'];
}
$video_header_font_size = '';
if ($atts['video_header_font_size'] != '')
{
    $video_header_font_size = 'font-size: ' . $atts['video_header_font_size'] . 'px;';
}
$video_header_color = '';
if ($atts['video_header_color'] != '')
{
    $video_header_color = 'color: ' . $atts['video_header_color'] . '; ';
}
$video_header_font_weight = '';
if ($atts['video_header_font_weight'] != '')
{
    $video_header_font_weight = 'font-weight: ' . $atts['video_header_font_weight'] . '; ';
}
$video_header_sub_title = '';
if ($atts['video_header_sub_title'] != '')
{
    $video_header_sub_title = $atts['video_header_sub_title'];
}
$video_header_sub_font_size = '';
if ($atts['video_header_sub_font_size'] != '')
{
    $video_header_sub_font_size = 'font-size: ' . $atts['video_header_sub_font_size'] . 'px; ';
}
$video_header_sub_color = '';
if ($atts['video_header_sub_color'] != '')
{
    $video_header_sub_color = 'font-size: ' . $atts['video_header_sub_color'] . '; ';
}
$video_header_buttons = array();
if ($atts['video_header_buttons'] != '')
{
    $video_header_buttons = $atts['video_header_buttons'];
}
$video_header_side_img = array();
if ($atts['video_header_side_img'] != '')
{
    $video_header_side_img = $atts['video_header_side_img'];
}
$video_src = '';
if ($atts['video_src'] != '')
{
    $video_src = $atts['video_src'];
}

$server_video_src   = '';
if($atts['server_video_src'] != ''){
    $server_video_src   = $atts['server_video_src'];
}

$vTag = array(
    'a' => array(
        'href' => array(),
        'title' => array(),
    ),
    'span' => array(),
    'br' => array()
);
?>
<!--Start slider area-->
<section class="slider-area <?php
if (isset($is_horizon_slider) && $is_horizon_slider != '')
{
    echo esc_attr($is_horizon_slider);
}
else
{
    echo esc_attr('vertical');
}
?>">
    <div class="home-video">
         <div class="video-background">
            <video id="bgvid" loop="" autoplay="" muted="">
                <source src="image/video/about-us-video.webm" type="video/webm">
                <source src="<?php echo esc_attr($server_video_src)?>" type="video/mp4">
            </video>
        </div>
        <div id="P1" class="player" style="display:block;height:100%; background: rgba(0,0,0,0.5)" data-property="{videoURL:'<?php echo esc_url($video_src);  ?>',containment:'self',showControls:true,startAt:0,mute:true,autoPlay:true,loop:true,opacity:1,showYTLogo:true, optimizeDisplay:true}"></div>
    </div>
    <div class="slider-caption fade">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-header-txt">
                    <h1 style="<?php echo esc_attr($video_header_font_size) . esc_attr($video_header_color) . esc_attr($video_header_font_weight); ?>"><?php echo wp_kses($video_header_title, $vTag) ?></h1>
                    <p style="<?php echo esc_attr($video_header_sub_font_size) . esc_attr($video_header_sub_color); ?>"><?php echo esc_html($video_header_sub_title); ?></p>
                    <?php
                    if (is_array($video_header_buttons) && $video_header_buttons != '')
                    {
                        $v = 1;
                        foreach ($video_header_buttons as $vdh)
                        {
                            if ($v == 1 && $v != '')
                            {
                                $class = 'btn-white';
                            }
                            else
                            {
                                $class = 'btn-transparent';
                            }
                            $video_header_button_label = '';
                            if ($vdh['video_header_button_label'] != '')
                            {
                                $video_header_button_label = $vdh['video_header_button_label'];
                            }
                            $video_header_button_link = '';
                            if ($vdh['video_header_button_link'] != '')
                            {
                                $video_header_button_link = $vdh['video_header_button_link'];
                            }
                            ?>                           
                            <a class="<?php echo esc_attr($class); ?>" href="<?php echo esc_url($video_header_button_link); ?>"><?php echo esc_html($video_header_button_label); ?></a>
                            <?php
                            $v++;
                        }
                    }
                    ?>                    
                </div>
                <div class="col-sm-5 col-header-img">
                    <?php
                    if (is_array($video_header_side_img) && isset($video_header_side_img) && $video_header_side_img != '')
                    {
                        $vimg = 1;
                        foreach ($video_header_side_img as $vhsimg)
                        {

                            if ($vimg == 1 && $vimg != '')
                            {
                                $img_class = 'img-header-lg';
                            }
                            else
                            {
                                $img_class = 'img-header-sm';
                            }
                            $video_head_side_img = '';
                            if ($vhsimg['video_head_side_img'] != '')
                            {
                                $video_head_side_img = '';
                                $thumImg = wp_get_attachment_image_src($vhsimg['video_head_side_img']['attachment_id'], 'full');
                                if (isset($thumImg[0]) && $thumImg[0] != '')
                                {
                                    $video_head_side_img = $thumImg[0];
                                }
                            }
                            ?>
                            <img src="<?php echo esc_url($video_head_side_img); ?>" alt="header-img" class="<?php echo esc_attr($img_class); ?>">
                            <?php
                            $vimg++;
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End slider area-->
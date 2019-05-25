<?php
if (!defined('FW')) {
    die('Forbidden');
}

$video_src = '';
if ($atts['video_src'] !='')
{
   $video_src = $atts['video_src'];
}
$video_icon='';
if($atts['video_icon'] !='')
{
    $video_icon=$atts['video_icon'];
}    
$video_icon_font_size='';
if($atts['video_icon_font_size'] != '')
{
    $video_icon_font_size='font-size:'.$atts['video_icon_font_size'].'px;';
} 
$video_icon_color='';
if($atts['video_icon_color'] != '')
{
    $video_icon_color='color:'.$atts['video_icon_color'].';';
}
$video_icon_border='';
if($atts['video_icon_border'] != '')
{
    $video_icon_border='border:'.$atts['video_icon_border'].';';
}
$video_title='';
if($atts['video_title'] != '')
{
    $video_title=$atts['video_title'];
} 
$video_title_font_size='';
if($atts['video_title_font_size'] != '')
{
    $video_title_font_size='font-size:'.$atts['video_title_font_size'].'px;';
}    
$video_title_color='';
if($atts['video_title_color'] != '')
{
    $video_title_color='color:'.$atts['video_title_color'].';';
}
$video_title_line_height='';
if($atts['video_title_line_height'] != '')
{
    $video_title_line_height='font-weight:'.$atts['video_title_line_height'].';';
}
$video_subtitle='';
if($atts['video_subtitle'] !='')
{
    $video_subtitle=$atts['video_subtitle'];
}    
$video_subtitle_font_size='';
if($atts['video_subtitle_font_size'] != '')
{
    $video_subtitle_font_size='font-size:'.$atts['video_subtitle_font_size'].'px;';
}
$video_subtitle_color='';
if($atts['video_subtitle_color'] != '')
{
    $video_subtitle_color='color:'.$atts['video_subtitle_color'].';';
}
$height = '';
if (!empty($atts['height']))
{
   $height = 'height: ' . $atts['height'] . 'px !important;';
}
$margin_top = '';
if (!empty($atts['margin_top']))
{
   $margin_top = 'margin-top: ' . $atts['margin_top'] . 'px !important;';
}
$margin_bottom = '';
if (!empty($atts['margin_bottom']))
{
   $margin_bottom = 'margin-bottom: ' . $atts['margin_bottom'] . 'px !important;';
}
$video_icons=($video_icon == '') ? 'fa fa-play':$video_icon;
?>

<div class="bg-img" style="<?php echo esc_attr($height); ?>"></div>
<div class="wrapper-video" style="<?php echo esc_attr($margin_top) . esc_attr($margin_bottom); ?>">
    <?php if($video_src != ''):?>
        <a class="youtube-popup" href="<?php echo esc_url($video_src); ?>">
            <i class="<?php echo esc_attr($video_icons); ?>" style="<?php echo esc_attr($video_icon_font_size) . esc_attr($video_icon_color) . esc_attr($video_icon_border); ?>" aria-hidden="true"></i>
        </a>
    <?php endif; ?>
        <h3 style="<?php echo esc_attr($video_title_font_size).  esc_attr($video_title_color).  esc_attr($video_title_line_height); ?>"><?php echo esc_html($video_title); ?></h3>
        <h6 style="<?php echo esc_attr($video_subtitle_font_size) . esc_attr($video_subtitle_color); ?>"><?php echo esc_html($video_subtitle); ?></h6>
</div>
<?php
/**
 * Author: droitthemes
 * @package faded
 * @subpackage faded
 * @since faded 1.0
 **/
$footer_bg='';
$footer_bg_color='';
$footer_title='';
$title_color='';
$title_font_size='';
$footer_subtitle='';
$footer_sub_title_color='';
$footer_sub_font_size='';
$site_info = '&copy; by Faded 2018. All Rights Reserved.';
$mailchimp_key='';
if(defined('FW'))
{   
    $footer_bg=fw_get_db_settings_option('footer_bg','');
    $footer_bg_color=fw_get_db_settings_option('footer_bg_color','');
    $footer_title = fw_get_db_settings_option('footer_title', '');
    $title_color=fw_get_db_settings_option('title_color', '');
    if($title_color !='')
    {   
        $title_color='color: '.$title_color.';';
    }
    $title_font_size=fw_get_db_settings_option('title_font_size', '');
    if($title_font_size != '')
    {
         $title_font_size='font-size: '.$title_font_size.'px;';
    }   
    $footer_subtitle=fw_get_db_settings_option('footer_subtitle', '');
    $footer_sub_title_color=fw_get_db_settings_option('footer_sub_title_color', '');
    if($footer_sub_title_color != '')
    {
         $footer_sub_title_color='color:'.$footer_sub_title_color.';';
    }  
    $footer_sub_font_size=fw_get_db_settings_option('footer_sub_font_size', '');
    if($footer_sub_font_size !='')
    {   
        $footer_sub_font_size='font-size: '.$footer_sub_font_size.'px;';
    }
    $site_info = fw_get_db_settings_option('site_info', '');
    $mailchimp_key = fw_get_db_settings_option('mailchimp_key', '');
    if(isset($footer_bg_color) && $footer_bg_color !='')
    {
        $footer_bg_color='background: '.$footer_bg_color.';';
    }    
    if(isset($footer_bg) && $footer_bg != ''){
        $footer_bg_url='';
        $footer_bg_thum='';
        $thumImg = wp_get_attachment_image_src($footer_bg['attachment_id'], 'full');
        if (isset($thumImg[0]) && $thumImg[0] != '') {
            $footer_bg_url=$thumImg[0];            
            $footer_bg_thum = 'background: rgba(0, 0, 0, 0) url('.esc_url($footer_bg_url).') no-repeat scroll center top';
        }
    }
}
$allowed_html=array(
    'a'=>array(
        'href'=>array(),
        'title'=>array(),
    ),
    'strong'=>array(),
    'span'=>array(),
    'p'=>array()
);
?>
<!-- FOOTER -->
<footer class="bg-img" style="<?php echo esc_attr($footer_bg_color); ?>">
    <div class="bg-img" style="<?php if(isset($footer_bg_thum)  && $footer_bg_thum !='' ){ echo esc_attr($footer_bg_thum); } ?>"></div>
    <?php if(!empty($footer_title) || !empty($footer_subtitle)) : ?>
    <h2 class="sec-title" style="<?php echo esc_attr($title_color) . esc_attr($title_font_size); ?>"><?php echo esc_html($footer_title); ?></h2>
    <div class="hr"></div>
    <p class="subheader" style="<?php echo esc_attr($footer_sub_title_color) . esc_attr($footer_sub_font_size); ?>"><?php echo esc_html($footer_subtitle); ?></p>
    <?php endif; ?>
    <?php if(!empty($mailchimp_key)) : ?>
    <div class="subscription">
        <?php echo do_shortcode($mailchimp_key); ?>
    </div>
    <?php endif; ?>
    <h5 class="footer"><?php echo wp_kses($site_info, $allowed_html); ?></h5>
</footer>
<!-- END FOOTER -->
<a href="#" class="scrollup"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
<?php wp_footer(); ?>
</body>
</html>

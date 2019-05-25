<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Faded
 * @subpackage Faded
 * @since Faded 1.0
 */
get_header();
global $post;
$pID = $post->ID;
$single_post_title='';
$is_single_breadcrumb='';
$share_status='';
$share_buttons='';
$get_app_footer=array();
$get_app_item= '2';
$is_horizontal_header='';
if(defined('FW'))
{
    $single_post_title = fw_get_db_settings_option('single_post_title','');
    $is_single_breadcrumb = fw_get_db_settings_option('is_single_breadcrumb',2);
    $share_status = fw_get_db_settings_option('share_status',2);
    $share_buttons = fw_get_db_settings_option('share_buttons','');
    $get_app_footer = fw_get_db_settings_option('get_app_footer',array());
    if(is_array($get_app_footer) && $get_app_footer != '')
    {
        $get_app_item= $get_app_footer['get_app_item'];
    }
    
    $is_horizontal_header = fw_get_db_settings_option('is_horizontal_header','');
    if(isset($is_horizontal_header) && $is_horizontal_header != '')
    {
        $is_horizontal_header='horizontal';
    }   
}     
$page_for_posts = get_option( 'page_for_posts' );
?>
<!-- HEADER -->
<header id="post-<?php the_ID(); ?>"  class="blog-detail <?php echo esc_attr($is_horizontal_header); ?>">
<div <?php post_class(); ?>></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="sec-title"><?php echo esc_html($single_post_title); ?></h1>
                <?php if($is_single_breadcrumb == 1): ?>
                <h5 class="breadcrumb">
                    <span><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__("Home","faded"); ?></a></span>                    
                    <?php if($page_for_posts != '' && $page_for_posts > 0 ): ?>
                    <span class="inner-bread"><a href="<?php echo get_the_permalink($page_for_posts); ?>"><?php echo substr(get_the_title(),0,20).'...'; ?></a></span>
                    <?php endif; ?>
                </h5>
                 <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER -->
<!-- BLOG POST -->
<section id="blog-post"  class="sec-blog-post bg-white single-unit">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="blog-post">
                    <?php
                    if(have_posts()):
                        while(have_posts()): the_post();
                            $video_src = '';
                            $audio_src = '';
                            if(defined('FW'))
                            {
                                $video_src = fw_get_db_post_option(get_the_ID(), 'video_src', '');
                                $audio_src = fw_get_db_post_option(get_the_ID(), 'audio_src', '');
                            }
                            $post_format = get_post_format(get_the_ID());
                            ?>
                            <div class="blog-post-header">
                                <?php
                                if($post_format == 'video' && $video_src != '')
                                {
                                    ?>
                                    <div class="blog_video">
                                        <iframe src="<?php echo esc_url($video_src); ?>"></iframe>
                                    </div>
                                    <?php
                                    
                                }
                                elseif($post_format == 'audio' && $audio_src != '')
                                {
                                    ?>
                                    <div class="blog_audio">
                                        <iframe src="<?php echo esc_url($audio_src); ?>"></iframe>
                                    </div>    
                                    <?php
                                }   
                                else
                                {
                                 if(has_post_thumbnail())
                                 {
                                    echo get_the_post_thumbnail(get_the_ID(), 'faded_blogDetails', array( 'class' => 'img-responsive' ));
                                 }                                     
                                }
                                ?>
                                    <h3 class="blog-title"><?php echo get_the_title(); ?></h3>
                                    <h6 class="meta"><i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo get_the_time("F d, Y"); ?></h6>
                            </div>
                            <div class="blog-post-body">
                                <?php echo the_content(); ?>
                                <div class="blog-share">
                                    <div class="col-sm-6">
                                        <?php if(!empty($share_status)) : ?>
                                        <?php if($share_status != 2): ?>
                                            <span><?php echo esc_html__("Share it","faded"); ?></span>
                                            <?php if(is_array($share_buttons) && in_array(2, $share_buttons)): ?>                            
                                                <a href="https://www.facebook.com/share.php?u=<?php echo get_the_permalink($pID); ?>&title=<?php echo get_the_title($pID); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <?php endif; ?>                                
                                            <?php if(is_array($share_buttons) && in_array(4, $share_buttons)): ?>
                                                <a href="http://pinterest.com/pin/create/bookmarklet/?url=<?php echo get_the_permalink($pID); ?>&<?php echo get_the_title($pID); ?>" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                                            <?php endif; ?>  
                                            <?php if(is_array($share_buttons) && in_array(1, $share_buttons)):  ?>
                                                <a href="http://twitter.com/intent/tweet?status=<?php echo get_the_title($pID); ?>+<?php echo get_the_permalink($pID); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                            <?php endif; ?>
                                            <?php if(is_array($share_buttons) && in_array(5, $share_buttons)): ?>
                                                <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_the_permalink($pID); ?>&title=<?php echo get_the_title($pID); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                                            <?php endif; ?> 
                                            <?php if(is_array($share_buttons) && in_array(3, $share_buttons)): ?>
                                                <a href="https://plus.google.com/share?url=<?php echo get_the_permalink($pID); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <?php endif; ?>
                                            <?php if(is_array($share_buttons) && in_array(6, $share_buttons)): ?>
                                                <a href="https://reddit.com/submit?url=<?php echo get_the_permalink($pID); ?>&title=<?php echo get_the_title($pID); ?>" target="_blank"><i class="fa fa-reddit" aria-hidden="true"></i></a>                                
                                            <?php endif; ?> 
                                        <?php endif; ?>
                                        <?php endif;?>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="singPagination">
                                            <?php previous_post_link( '%link', '<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Preview post', true, ' ', 'category' ); ?>
                                            <?php next_post_link( '%link', 'Next post <i class="fa fa-long-arrow-right" aria-hidden="true"></i>', TRUE, '', 'category' ); ?>                                    
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <?php
                        endwhile;
                    else:
                        get_template_part('template-parts/content', 'none');
                    endif;
                    ?>
                </div>                
                <div class="blog-comment">
                    <?php
                    if ( comments_open() || get_comments_number() ) 
                    {
                        comments_template();
                    }
                    ?>
                </div>
            </div><!-- col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 -->
        </div>
    </div>
</section>
<!-- END GET APP -->
<?php if($get_app_item != 2): ?>
<!-- GET APP -->
<section id="get-app" class="sec-get-app bg-grey bg-img">
    <?php
    $get_app_bg='';
    $getapp_heading='';
    $getapp_param='';
    $getapp_dwnload='';
    $get_app_right_bg='';
    if(defined('FW'))
    {
        if(isset($get_app_footer[1]['get_app_bg']) && $get_app_footer[1]['get_app_bg']  != '' && $get_app_footer[1]['get_app_bg']['attachment_id'] != '')
        {
            $thumImg = wp_get_attachment_image_src($get_app_footer[1]['get_app_bg']['attachment_id'], 'full');
            if (isset($thumImg[0]) && $thumImg[0] != '') {
                $get_app_bg = $thumImg[0];
                $get_app_bg_url = 'background: rgba(0, 0, 0, 0) url('.esc_url($get_app_bg).') no-repeat scroll center top';
            }
        }        
        if(isset($get_app_footer[1]['getapp_heading']) && $get_app_footer[1]['getapp_heading'] != '')
        {
            $getapp_heading=$get_app_footer[1]['getapp_heading'];
        }          
        if(isset($get_app_footer[1]['getapp_param']) && $get_app_footer[1]['getapp_param'] != '')
        {
            $getapp_param=$get_app_footer[1]['getapp_param'];
        }         
        if(isset($get_app_footer[1]['getapp_dwnload']) && $get_app_footer[1]['getapp_dwnload'] != '')
        {
            $getapp_dwnload=$get_app_footer[1]['getapp_dwnload'];
        }  
        if(isset($get_app_footer[1]['get_app_right_bg']) && $get_app_footer[1]['get_app_right_bg'] != '' && $get_app_footer[1]['get_app_right_bg']['attachment_id'] != '')
        {
            $thumImg = wp_get_attachment_image_src($get_app_footer[1]['get_app_right_bg']['attachment_id'], 'full');
            if (isset($thumImg[0]) && $thumImg[0] != '') 
            {
                $get_app_right_bg = $thumImg[0];
            }
        }   
    }
    $allow_tag=array(
        'a'=>array(
          'href'=>array(),
            'title'=>array()
        ),
        'span'=>array(),
    );
    ?>
    <div class="bg-img" style="<?php if(isset($get_app_bg_url) && $get_app_bg_url != ''){ echo esc_attr($get_app_bg_url); } ?>"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <h2 class="sec-title"><?php echo esc_html($getapp_heading); ?></h2>
                <div class="hr"></div>
                <p class="subheader"><?php echo wp_kses($getapp_param,$allow_tag ); ?></p>
                <h4><?php echo esc_html($getapp_dwnload); ?></h4>
               <?php
                $get_app_buttons='';
                if(isset($get_app_footer[1]['get_app_buttons']) && $get_app_footer[1]['get_app_buttons'] != '')
                {
                    $get_app_buttons=$get_app_footer[1]['get_app_buttons'];
                    if(is_array($get_app_buttons) && $get_app_buttons !=0)
                    {
                        foreach($get_app_buttons as $gab)
                        {
                            $button_label='';
                            if($gab['button_label'] != '' && $gab['button_label']['attachment_id'] != '')
                            {
                                $thumImgb = wp_get_attachment_image_src($gab['button_label']['attachment_id'], 'full');
                                if (isset($thumImgb[0]) && $thumImgb[0] != '')
                                {
                                    $button_label = $thumImgb[0];
                                }
                            }
                            $button_link='';
                            if($gab['button_link'] != '')
                            {
                                $button_link = $gab['button_link'];
                            }    
                            ?>
                            <a href="<?php echo esc_url($button_link); ?>"><img src="<?php echo esc_url($button_label); ?>" alt=""></a>
                            <?php
                        }
                    }
                }  
               ?>
            </div>
            <div class="col-sm-5"><img class="get-app-mockup animate delay-c" src="<?php echo esc_url($get_app_right_bg); ?>" alt=""></div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- END GET APP -->
<?php get_footer(); ?>

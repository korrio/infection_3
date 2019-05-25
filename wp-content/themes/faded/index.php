<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Faded
 * @subpackage Faded
 * @since Faded 1.0
 */

get_header();
$blog_post_title='';
$is_blog_breadcrumb=2;
$blog_breadcum_title='';
$blog_get_app_footer=array();
$blog_get_app_item='';
$is_horizontal_header='';
$horizontal='';
if(defined('FW'))
{
    $blog_post_title = fw_get_db_settings_option('blog_post_title','');
    $is_blog_breadcrumb = fw_get_db_settings_option('is_blog_breadcrumb',2);
    $blog_breadcum_title = fw_get_db_settings_option('blog_breadcum_title',2);
    $blog_get_app_footer = fw_get_db_settings_option('blog_get_app_footer',array());
    if(is_array($blog_get_app_footer) && $blog_get_app_footer != '')
    {
        $blog_get_app_item = $blog_get_app_footer['blog_get_app_item'];
    }
    $is_horizontal_header = fw_get_db_settings_option('is_horizontal_header','');
    if(isset($is_horizontal_header) && $is_horizontal_header != '')
    {
        $is_horizontal_header='horizontal';
    }    
}
?>
<!-- HEADER -->
<header class="blog-list <?php echo esc_attr($is_horizontal_header); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="sec-title"><?php echo esc_html($blog_post_title); ?></h1>
                <?php if($is_blog_breadcrumb == 1): ?>
                    <h5 class="breadcrumb">
                        <span><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__("Home","faded"); ?></a></span>                    
                        <span class="blog-in"><?php echo esc_html($blog_breadcum_title); ?></span>
                    </h5>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER -->
<!-- BLOG -->
<section id="blog-list" class="sec-blog-list bg-white <?php echo esc_attr($is_horizontal_header); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <div class="row" id="masonry">
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
                        <div class="col-md-6 col-xs-12">
                            <div class="thumbnail-blog animate">
                                <?php
                                if($post_format == 'video' && $video_src !='')
                                {
                                    ?>
                                    <div class="blog_video">
                                        <iframe src="<?php echo esc_url($video_src); ?>"></iframe>
                                    </div>
                                    <?php
                                }
                                else if($post_format == 'audio' && $audio_src != '')
                                {
                                    ?>
                                    <div class="blog_audio">
                                        <iframe src="<?php echo esc_url($audio_src); ?>"></iframe>
                                    </div>
                                    <?php
                                }
                                else if(is_sticky())
                                {
                                    ?>
                                        <div class="is_sticky">
                                            <h6><?php echo esc_html__("Featured","faded");  ?></h6>
                                        </div>
                                    <?php
                                }
                                else
                                {
                                    if(has_post_thumbnail()){?>
                                        <div class="thumbnail-img">
                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'faded_latest_blog'); ?>
                                        </div>
                                    <?php }
                                }
                                $tag_allow=array(
                                    'a'=>array(
                                        'href'=>array(),
                                        'title'=>array(),
                                    ),
                                    'br'=>array(),
                                    'span'=>array()
                                );
                                ?>
                                <a href="<?php echo get_the_permalink(); ?>"><h5><?php echo get_the_title(); ?></h5></a>
                                <h6><?php echo get_the_time("F d, Y"); ?></h6>
                                <p><?php echo substr(wp_kses(get_the_content(),$tag_allow), 0, 134).' ...'; ?></p>
                                <a href="<?php echo get_the_permalink(); ?>"><?php echo esc_html__('Read more','faded'); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>

                <?php
                else:
                    get_template_part('template-parts/content', 'none');
                endif;
                ?>
                </div>
                <div class="pagination">
                        <?php echo faded_post_pageing_nav();  ?>
                </div>
            </div>
            <section class="section_widget_area">
                <div class="col-md-4 col-sm-5">
                    <?php
                    if(is_active_sidebar('sidebar-1'))
                    {
                        dynamic_sidebar('sidebar-1');
                    }
                    ?>
                </div>
            </section>
        </div>       
    </div>
</section>
<!-- END BLOG -->

<!-- GET APP -->
<?php if($blog_get_app_item != 1): ?>
<?php else: ?>
<section id="get-app" class="sec-get-app bg-grey bg-img">
    <?php
    $blog_get_app_bg='';
    $blog_getapp_heading='';
    $blog_getapp_param='';
    $blog_getapp_dwnload='';
    $blog_get_app_right_bg='';
    if(defined('FW'))
    {
        if(isset($blog_get_app_footer[1]['blog_get_app_bg']) && $blog_get_app_footer[1]['blog_get_app_bg'] != '' && $blog_get_app_footer[1]['blog_get_app_bg']['attachment_id'] != '')
        {
            $thumImg = wp_get_attachment_image_src($blog_get_app_footer[1]['blog_get_app_bg']['attachment_id'], 'full');
            if (isset($thumImg[0]) && $thumImg[0] != '') 
            {
                    $blog_get_app_bg = $thumImg[0];
                    $blog_get_app_url = 'background: rgba(0, 0, 0, 0) url('.esc_url($blog_get_app_bg).') no-repeat scroll center top';
            }
        }
        if(isset($blog_get_app_footer[1]['blog_getapp_heading']) && $blog_get_app_footer[1]['blog_getapp_heading'] != '')
        {
            $blog_getapp_heading=$blog_get_app_footer[1]['blog_getapp_heading'];
        } 
        if(isset($blog_get_app_footer[1]['blog_getapp_param']) && $blog_get_app_footer[1]['blog_getapp_param'] != '')
        {
            $blog_getapp_param=$blog_get_app_footer[1]['blog_getapp_param'];
        }  
        if(isset($blog_get_app_footer[1]['blog_getapp_dwnload']) && $blog_get_app_footer[1]['blog_getapp_dwnload'] != '')
        {
            $blog_getapp_dwnload=$blog_get_app_footer[1]['blog_getapp_dwnload'];
        }	
        if(isset($blog_get_app_footer[1]['blog_get_app_right_bg']) && $blog_get_app_footer[1]['blog_get_app_right_bg'] != '' && $blog_get_app_footer[1]['blog_get_app_right_bg']['attachment_id'] != '')
        {
            $thumImg = wp_get_attachment_image_src($blog_get_app_footer[1]['blog_get_app_right_bg']['attachment_id'], 'full');
            if (isset($thumImg[0]) && $thumImg[0] != '')
            {
                    $blog_get_app_right_bg = $thumImg[0];
            }
        }
    }	
    $tag_allow=array(
        'a'=>array(
            'href'=>array(),
            'title'=>array()
        ),
        'span'=>array(),
        'br'=>array(),
    );
    ?>
    <div class="bg-img" style="<?php if(isset($blog_get_app_url) && $blog_get_app_url != 0){ echo esc_attr($blog_get_app_url);} ?>"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <h2 class="sec-title"><?php echo esc_html($blog_getapp_heading); ?></h2>
                <div class="hr"></div>
                <p class="subheader"><?php echo wp_kses($blog_getapp_param, $tag_allow); ?></p>
                <h4><?php echo esc_html($blog_getapp_dwnload); ?></h4>
                <?php 
				$blog_get_app_buttons='';  					
                if(isset($blog_get_app_footer[1]['blog_get_app_buttons']) && $blog_get_app_footer[1]['blog_get_app_buttons'] != '')
                {
                    $blog_get_app_buttons=$blog_get_app_footer[1]['blog_get_app_buttons'];
                    if(is_array($blog_get_app_buttons) && $blog_get_app_buttons !=0)
                    {
                        foreach($blog_get_app_buttons as $gab)
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
            <div class="col-sm-5"><img class="get-app-mockup animate delay-c" src="<?php echo esc_url($blog_get_app_right_bg); ?>" alt=""></div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- END GET APP -->
<?php get_footer(); ?>

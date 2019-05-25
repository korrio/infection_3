<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Faded
 * @subpackage Faded
 * @since Faded 1.0
 */
get_header(); 
$is_blog_breadcrumb=2;
$blog_breadcum_title='';
$is_horizontal_header='';
$horizontal='';
if(defined('FW'))
{    
    $is_blog_breadcrumb = fw_get_db_settings_option('is_blog_breadcrumb',2);
    $blog_breadcum_title = fw_get_db_settings_option('blog_breadcum_title',2);
    $is_horizontal_header = fw_get_db_settings_option('is_horizontal_header','');
    if(isset($is_horizontal_header) && $is_horizontal_header != '')
    {
        $is_horizontal_header='horizontal';
    }    
}
$ar_title = str_replace('Month:', '', get_the_archive_title());
$ar_title = str_replace('Year:', '', $ar_title);
$ar_title = str_replace('Tag:', '', $ar_title);
$ar_title = str_replace('Author:', '', $ar_title);
$ar_title = str_replace('Category:', '', $ar_title);
?>
<!-- HEADER -->
<header class="blog-list <?php echo esc_attr($is_horizontal_header); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="sec-title"><?php echo esc_html($ar_title); ?></h1>
                <?php if($is_blog_breadcrumb == 1): ?>
                    <h5 class="breadcrumb">
                        <span><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__("Home","faded"); ?></a></span>                    
                        <span><?php echo esc_html($blog_breadcum_title); ?></span>
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
                        <div class="col-sm-4">
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
                 <div class="pagination">
                    <?php echo faded_post_pageing_nav();  ?>
                </div> 
                <?php
            else:
                get_template_part('template-parts/content', 'none');
            endif;
            ?>            
        </div>       
    </div>
</section>
<!-- END BLOG -->
<?php get_footer(); ?>

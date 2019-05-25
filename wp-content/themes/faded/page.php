<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Faded
 * @subpackage Faded
 * @since Faded 1.0
 */
get_header();

$bread_crumb_title='';
$page_title='';
$is_horizontal_header='';
$custom_header  = 'yes';
$page_title_content = 'yes';
if(defined('FW'))
{
    $is_horizontal_header = fw_get_db_settings_option('is_horizontal_header','');
    if(isset($is_horizontal_header) && $is_horizontal_header != '')
    {
        $is_horizontal_header='horizontal';
    }  
    $custom_header          = fw_get_db_post_option( get_the_ID(), 'custom-header', array());
    if('yes' === fw_akg('enable', $custom_header, 'yes')){
        $page_title_content     = fw_akg('yes/header_title_and_breadcumbs/enable', $custom_header, '');
        $page_title             = fw_akg('yes/header_title_and_breadcumbs/yes/page_title', $custom_header, '');
        $bread_crumb_title      = fw_akg('yes/header_title_and_breadcumbs/yes/bread_crumb_title', $custom_header, '');
        $is_horizontal_header   = fw_akg('yes/header_title_and_breadcumbs/yes/is_horizontal_header', $custom_header, '');
    }
}

$container_width = 'container';
if ( function_exists( 'fw_ext_page_builder_is_builder_post' ) && true === fw_ext_page_builder_is_builder_post( get_the_ID() ) ) {
 $container_width = 'page-builder-wrap';
}

?>
<?php if('yes' === $page_title_content) : ?>
    <header class="blog-detail <?php echo esc_attr($is_horizontal_header); ?>">
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                       <?php if(isset($page_title) && $page_title != ''): ?>
                           <h1 class="sec-title"><?php echo esc_html($page_title); ?></h1>
                       <?php else: ?>
                           <h1 class="sec-title"><?php echo get_the_title(); ?></h1>
                       <?php endif;?>
                       <h5 class="breadcrumb">
                           <?php if(isset($bread_crumb_title) && $bread_crumb_title != '') : ?>
                               <span class="page_breadcum"><?php echo esc_html($bread_crumb_title); ?></span>
                            <?php else : ?>
                               <?php echo faded_breadcrumbs(); ?>
                            <?php endif;?>
                       </h5>
                   </div>
               </div>
           </div>
   </header>   
 <?php endif; ?>
<div class="site-content <?php echo esc_attr($container_width); ?>">
    <?php
    if (have_posts()):
        while (have_posts()): the_post();
            the_content();
            $defaults = array(
                'before' => '<div class="pagiNation sigPag">',
                'after' => '</div>',
                'link_before' => '<span class="page-numbers">',
                'link_after' => '</span>',
                'next_or_number' => 'number',
                'separator' => ' ',
                'nextpagelink' => esc_html__('Next', 'faded'),
                'previouspagelink' => esc_html__('Prev', 'faded'),
                'pagelink' => '%',
                'echo' => true
            );
            wp_link_pages($defaults);
        endwhile;
    endif;
    ?>
</div>
<section id="blog-post"  class="sec-blog-post bg-white page-unit horizontal">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
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
<?php get_footer(); ?>
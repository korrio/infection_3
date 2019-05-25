<?php
if (!defined('FW')) {
    die('Forbidden');
}
/*
 * Latest Blog
*/
$number_of_post = 4;
if ($atts['number_of_item'] != '') {
    $number_of_post = $atts['number_of_item'];
}
$read_more='';
if($atts['read_more'] != '')
{
    $read_more=$atts['read_more'];
}    
$read_more_color='';
if($atts['read_more_color'] != '')
{
    $read_more_color='color: '.$atts['read_more_color'].';';
} 
$btn_label='';
if($atts['btn_label'] != '')
{
    $btn_label=$atts['btn_label'];
}    
$btn_label_color='';
if($atts['btn_label_color'] != '')
{
    $btn_label_color='color: '.$atts['btn_label_color'].';';
}    
$btn_label_bg_color='';
if($atts['btn_label_bg_color'] != '')
{
    $btn_label_bg_color='background: '.$atts['btn_label_bg_color'].';';
}    
$btn_label_bg_gradient='';
if(isset($atts['btn_label_bg_gradient']) && $atts['btn_label_bg_gradient'] != '')
{   
    $btn_label_bg_gradient='background: -moz-linear-gradient('.'0deg'.','.$atts['btn_label_bg_gradient']['primary'].' 0%,'.$atts['btn_label_bg_gradient']['secondary'].' 100%);';
    $btn_label_bg_gradient.='background: -webkit-linear-gradient('.'0deg'.','.$atts['btn_label_bg_gradient']['primary'].' 0%,'.$atts['btn_label_bg_gradient']['secondary'].' 100%);';
    $btn_label_bg_gradient.='background: -ms-linear-gradient('.'0deg'.','.$atts['btn_label_bg_gradient']['primary'].' 0%,'.$atts['btn_label_bg_gradient']['secondary'].' 100%);';
}
$btn_link='';
if($atts['btn_link'] != '')
{
    $btn_link=$atts['btn_link'];
}    
global $post;

    $blog_array = array(
        'post_type' => array('post'),
        'post_status' => array('publish'),
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => $number_of_post
    );
    $lpost = new WP_Query($blog_array);
    echo '<div class="row">';
    if ($lpost->have_posts()) 
    {
        while ($lpost->have_posts())
        {
            $lpost->the_post();
            ?>
            <div class="col-sm-4">
                <div class="thumbnail-blog animate ">
                    <div class="thumbnail-img">
                        <?php 
                        if(has_post_thumbnail())
                        {
                            echo get_the_post_thumbnail($post->ID,'faded_latest_blog');
                        }
                        else
                        {
                            echo '<img src="http://placehold.it/370x209" alt="lblog">';
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
                    </div>
                    <a href="<?php echo get_the_permalink(); ?>"><h5><?php echo get_the_title(); ?></h5></a>
                    <h6><?php echo get_the_time('F d, Y'); ?></h6>
                    <p><?php echo substr(wp_kses(get_the_content(),$tag_allow), 0, 134).' ...'; ?></p>
                    <a style="<?php echo esc_attr($read_more_color); ?>" href="<?php echo get_the_permalink(); ?>"><?php echo esc_html($read_more); ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <?php
        }
    }
    wp_reset_postdata();
    echo '</div>';
    ?>
<a class="go_blog" style="<?php echo esc_attr($btn_label_bg_color) . esc_attr($btn_label_bg_gradient); ?>" href="<?php echo esc_url($btn_link); ?>"><span style="<?php echo esc_attr($btn_label_color); ?>"><?php echo esc_html($btn_label); ?></span></a>




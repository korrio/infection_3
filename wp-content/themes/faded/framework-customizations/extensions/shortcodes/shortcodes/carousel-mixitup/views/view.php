<?php
if (!defined('FW')) {
    die('Forbidden');
}

/*
 * Shortcode of screenshot
 */

$post_per_page = '';
if ($atts['post_per_page'] != '') {
    $post_per_page = $atts['post_per_page'];
}
?>
<div class="filter-btns">
    <?php
    $filter_cat = array(
        'orderby' => 'ID',
        'order' => 'DESC',
        'hide_empty' => 0,
        'hierarchical' => 1,
        'taxonomy' => 'scr_cat'
    );
    $filt_cat = get_categories($filter_cat);
    if(is_array($filt_cat) && $filt_cat != '')
    {
        ?>
            <a class="filter filter-btn active" data-filter="all"><?php echo esc_html__("All","faded"); ?></a>
        <?php
            foreach($filt_cat as $ftc)
            {
                ?>
                    <a class="filter filter-btn" data-filter="<?php echo '.'.  esc_attr($ftc->slug); ?>"><?php echo esc_html($ftc->name); ?></a>
                <?php
            }
    }
    ?>
</div>
<div id="Container" class="row">
    <div class="screenshots owl-carousel" dir="ltr" id="owl-demo-a">
        <?php
            global $post;
            $screenM = array(
            'post_type' => array('screenshot'),
            'post_status' => array('publish'),
            'posts_per_page' => $post_per_page,
            'orderby' => 'date',
            'order' => 'DESC',
            );
            $getScr = new WP_Query($screenM);           
            if($getScr->have_posts())
            {                
                while($getScr->have_posts())
                {
                   $getScr->the_post();
                   $terms = get_the_terms(get_the_ID(), 'scr_cat');
                    $classes = '';
                    if (is_array($terms))
                    {
                        foreach ($terms as $term) 
                        {
                            $classes .= ' ' . $term->slug . ' ';
                        }
                    }
                    $popup_img='';
                    $Img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                    if (isset($Img[0]) && $Img[0] != '')
                    {
                        $popup_img =$Img[0];
                    }
                    ?>
                    <a href="<?php echo esc_url($popup_img); ?>" class="screenshot mix <?php echo esc_attr($classes); ?>">
                    <?php
                    if (has_post_thumbnail()) 
                    {
                        echo get_the_post_thumbnail(get_the_ID(), 'faded_screenshot');
                    }
                    ?>
                    </a>
                    <?php
                }
                wp_reset_postdata();
            }
        ?>
    </div>
</div>


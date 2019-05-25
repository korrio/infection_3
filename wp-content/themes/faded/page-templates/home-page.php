<?php
/*
* Template Name: Home one page
**/

get_header();

$main_page_id = get_option('page_on_front');

if ( ( $menu_locations = get_nav_menu_locations() ) && $menu_locations['primary-menu'] ) 
{
	
    $menu = wp_get_nav_menu_object( $menu_locations['primary-menu'] );
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $menu_items_include = array();
    foreach($menu_items as $item) 
    {
        if($item->object == 'page')
            $menu_items_include[] = $item->object_id;
    }    
    $main_query = new WP_Query( array( 'post_type' => 'page', 'post__in' => $menu_items_include, 'posts_per_page' => count($menu_items_include), 'orderby' => 'post__in' ) );

} // menu defined
else
{
	
   	$args = array(
            'post_type' => 'page',
            'order' => 'ASC',
            'orderby' => 'menu_order',
            'posts_per_page' => '-1'
	);
  
    $main_query = new WP_Query($args);
	
}
$display_menu = true;
if($main_query->have_posts())
{
    $divCount = 1;
    
    while ($main_query->have_posts())
    {
        $main_query->the_post();
        
        global $post;
        $post_name = $post->post_name;
        $post_id = get_the_ID();
        if( $post_id != $main_page_id )
        {
            echo '<div id="'.$post_id.'">';
                the_content();
            echo '</div>';
        }
        $divCount++;
    }
}
wp_reset_postdata();

get_footer();
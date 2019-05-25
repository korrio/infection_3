<?php

/* protected */

if (defined('FW'))
{

    function _filter_styler_fw_ext_backups_demos($demos)
    {
        $demos_array = array(
            'faded_one_angle_color' => array(
                'title' => __('Faded One Angle Color', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_oneangle_color.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
            'faded_one_horiz_color' => array(
                'title' => __('Faded One Color Horizontal', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_one_color_horizontal.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
            'faded_multi_angle_color' => array(
                'title' => __('Faded Multi Angle Color', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_multi_angle_color.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
            'faded_multi_horiz_color' => array(
                'title' => __('Faded Multi Color Horizontal', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_multi_color_horizontal.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),			
			
		'faded_one_angle_img' => array(
                'title' => __('Faded One Angle Image', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_one_angle_image.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
            'faded_one_horiz_img' => array(
                'title' => __('Faded One Horizontal Image', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_one_horizontal_img.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
            'faded_multi_angle_img' => array(
                'title' => __('Faded Multi Angle Image', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_multi_angle_img.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
            'faded_multi_horiz_img' => array(
                'title' => __('Faded Multi Horizontal Image', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_multi_horizontal_img.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
		'faded_one_angle_slider' => array(
                'title' => __('Faded One Angle Slider', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_one_angle_slider.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
		'faded_one_horiz_slider' => array(
                'title' => __('Faded One Horizontal Slider', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_one_horizontal_slider.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
		'faded_multi_angle_slider' => array(
                'title' => __('Faded Multi Angle Slider', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_multi_angle_slider.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
		'faded_multi_horiz_slider' => array(
                'title' => __('Faded Multi Horizontal Slider', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_multi_horizontal_slider.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
		'faded_one_angle_video' => array(
                'title' => __('Faded One Angle Video', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_one_angle_video.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
		'faded_one_horiz_video' => array(
                'title' => __('Faded One Horizontal Video', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_one_horizontal_video.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
		'faded_multi_angle_video' => array(
                'title' => __('Faded Multi Angle Video', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_multi_angle_video.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
		'faded_multi_horiz_video' => array(
                'title' => __('Faded Multi Horizontal Video', 'faded'),
                'screenshot' => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_multi_horizontal_video.png',
                'preview_link' => 'http://droitthemes.com/wp/faded',
            ),
            'faded_rtl_supports' => array(
                'title'         => __('Faded RTL Version', 'faded'),
                'screenshot'    => 'http://droitthemes.com/wp/demo-content/faded/screen/faded_rtl_supports.png',
                'preview_link'  => 'http://droitthemes.com/wp/faded',
            )
        );

        $download_url = 'http://droitthemes.com/wp/demo-content/faded/';

        foreach ($demos_array as $id => $data)
        {
            $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
                'url' => $download_url,
                'file_id' => $id,
            ));
            $demo->set_title($data['title']);
            $demo->set_screenshot($data['screenshot']);
            $demo->set_preview_link($data['preview_link']);

            $demos[$demo->get_id()] = $demo;

            unset($demo);
        }

        return $demos;
    }

    add_filter('fw:ext:backups-demo:demos', '_filter_styler_fw_ext_backups_demos');
}



/*
 * GOOGLE FONT from theme  options
 * since 1.0
 */

if ( !function_exists( '_action_faded_process_google_fonts' ) ) {

    function _action_faded_process_google_fonts() {
        $include_from_google = array();
        $google_fonts		 = fw_get_google_fonts();

        $body_font          = fw_get_db_settings_option( 'body_font' );
        $heading_title      = fw_get_db_settings_option('heading_title');
        $heading_subtitle   = fw_get_db_settings_option('heading_subtitle');
        $post_meta          = fw_get_db_settings_option('post_meta');  
        $menu_font        = fw_get_db_settings_option('menu_fonts');

        if ( isset( $google_fonts[ $body_font[ 'family' ] ] ) ) {
            $include_from_google[ $body_font[ 'family' ] ] = $google_fonts[ $body_font[ 'family' ] ];
        }
        if (isset($google_fonts[$heading_title['family']])) {
            $include_from_google[$heading_title['family']] = $google_fonts[$heading_title['family']];
        }
        if (isset($google_fonts[$heading_subtitle['family']])) {
            $include_from_google[$heading_subtitle['family']] = $google_fonts[$heading_subtitle['family']];
        }
        if (isset($google_fonts[$post_meta['family']])) {
            $include_from_google[$post_meta['family']] = $google_fonts[$post_meta['family']];
        }
        if (isset($google_fonts[$menu_font['family']])){
            $include_from_google[$menu_font['family']]  = $google_fonts[$menu_font['family']];
        }
        $google_fonts_links = faded_get_remote_fonts( $include_from_google );
        // set a option in db for save google fonts link
        update_option( 'fw_theme_google_fonts_link', $google_fonts_links );
    }

    add_action( 'fw_settings_form_saved', '_action_faded_process_google_fonts', 999, 2 );
}

if ( !function_exists( 'faded_get_remote_fonts' ) ) :

    function faded_get_remote_fonts( $include_from_google ) {
        /**
         * Get remote fonts
         * @param array $include_from_google
         */
        if ( !sizeof( $include_from_google ) ) {
            return '';
        }

        $family = "";

        foreach ( $include_from_google as $font => $styles ) {
            $family .= str_replace( ' ', '+', $font ) . ':' . implode( ',', $styles[ 'variants' ] ) . '|';
        }

        $family = substr( $family, 0, - 1 );

        return $family;
    }

endif;


if ( !function_exists( '_action_faded_print_google_fonts_link' ) ) :

    function _action_faded_print_google_fonts_link() {
        /**
         * enque google fonts link
         */
        $font_url			 = '';
        $google_fonts_family = get_option( 'fw_theme_google_fonts_link', '' );
        if ( $google_fonts_family != '' && defined( 'FW' ) ) {
            $family = $google_fonts_family;
        } else {
            $family = "Lato:400,300,300italic,400italic,500,700,700italic";
        }

        /*
          Translators: If there are characters in your language that are not supported
          by chosen font(s), translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== esc_html_x( 'on', 'Google font: on or off', 'faded' ) ) {
            $font_url = add_query_arg( 'family', $family . '&subset=latin,latin-ext', "https://fonts.googleapis.com/css" );
        }

        wp_enqueue_style( 'faded', $font_url, array(), '' );
    }

    add_action( 'wp_enqueue_scripts', '_action_faded_print_google_fonts_link' );
endif;

//end goole font



function faded_breadcrumbs($class = '') {

    // Settings
    $separator	 = '&gt;';
    $breadcrums_id	 = 'breadcrumbs';
    $breadcrums_class	 = 'breadcrumb ' . $class;
    $home_title	 = esc_html__('Home', 'faded');

    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy	 = 'product_cat';

    // Get the query & post information
    global $post;

    // Do not display on the homepage
    if ( !is_front_page() ) {

        // Build the breadcrums
        echo '<ol id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';

        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . esc_url(get_home_url()) . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        if ( is_author() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            $custom_tax_name = get_the_author_meta('display_name');
            echo '<li class="item-current item-archive"><span class="bread-current bread-archive">' . $custom_tax_name . '</span></li>';
        } else if (class_exists( 'WooCommerce' ) && is_product()) {
            echo '<li class="item-current item-archive"><span class="bread-current bread-archive">' . get_the_title('') . '</span></li>';
        } else if (class_exists( 'WooCommerce' ) && is_woocommerce()) {
            echo '<li class="item-current item-archive"><span class="bread-current bread-archive">' . woocommerce_page_title('') . '</span></li>';
        } else if (class_exists( 'bbPress' ) && is_bbpress()) {
            echo '<li class="item-current item-archive"><span class="bread-current bread-archive">' . get_the_title() . '</span></li>';

        } else if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {

            echo '<li class="item-current item-archive"><span class="bread-current bread-archive">' . get_the_archive_title() . '</span></li>';

        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';

            }

            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><span class="bread-current bread-archive">' . $custom_tax_name . '</span></li>';

        } else if ( is_single() ) {

            // If post is a custom post type
            $post_type = get_post_type();

            // If it is a custom post type display name and link
            if($post_type != 'post') {

                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);

                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';

            }

            // Get post category info
            $category = get_the_category();

            if(!empty($category)) {

                // Get last category post is in
                $all_category = array_values($category);
                $last_category = end($all_category);

                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);

                // Loop through parent categories and store in variable $cat_display
                $cat_display    = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                }

            }

            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {

                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id	 = $taxonomy_terms[0]->term_id;
                $cat_nicename	 = $taxonomy_terms[0]->slug;
                $cat_link	 = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name	 = $taxonomy_terms[0]->name;

            }

            // Check if the post is in a category
            if(!empty($last_category)) {
                echo ($cat_display);
                echo '<li class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</span></li>';

                // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {

                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="item-current item-' . $post->ID . ' active">' . get_the_title() . '</li>';

            } else {

                echo '<li class="item-current item-' . $post->ID . ' active">' . get_the_title() . '</li>';

            }

        } else if ( is_category() ) {

            // Category page
            echo '<li class="item-current item-cat"><span class="bread-current bread-cat">' . single_cat_title('', false) . '</span></li>';

        } else if ( is_home() ) {
            echo '<li class="active item-cat"><span class="bread-current bread-cat">' . wp_title('', false) . '</span></li>';

        } else if ( is_page() ) {

            // Standard page
            if( $post->post_parent ){

                // If child page, get parents
                $anc = get_post_ancestors( $post->ID );

                // Get parents in the right order
                $anc = array_reverse($anc);
                $parents = '';
                // Parent page loop
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                }

                // Display parent pages
                echo ($parents);

                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><span title="' . get_the_title() . '"> ' . get_the_title() . '</span></li>';

            } else {

                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</span></li>';

            }

        } else if ( is_tag() ) {

            // Tag page

            // Get tag information
            $term_id	 = get_query_var('tag_id');
            $taxonomy	 = 'post_tag';
            $args	 = 'include=' . $term_id;
            $terms	 = get_terms( $taxonomy, $args );
            $get_term_id	 = $terms[0]->term_id;
            $get_term_slug	 = $terms[0]->slug;
            $get_term_name	 = $terms[0]->name;

            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><span class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</span></li>';

        } elseif ( is_day() ) {

            // Day archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';

            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><span class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</span></li>';

        } else if ( is_month() ) {

            // Month Archive

            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';

            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><span class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</span></li>';

        } else if ( is_year() ) {

            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><span class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</span></li>';

        } else if ( is_author() ) {

            // Auhor archive

            // Get the author information
            global $author;
            $userdata = get_userdata( $author );

            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><span class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</span></li>';

        } else if ( get_query_var('paged') ) {

            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><span class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.esc_html__('Page','faded') . ' ' . get_query_var('paged') . '</span></li>';

        } elseif ( is_404() ) {

            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }

        echo '</ol>';

    }

}
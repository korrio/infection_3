<?php

/**
 * Author: droitthemes
 * @package faded
 * @subpackage faded
 * @since faded 1.0
 */
/* * ****************
  Color: Setting
 * ***************** */

//Title
function faded_title_color() {
    if (!defined('FW'))
        return;
    $title_color = fw_get_db_settings_option('ftitle_color', '');
    if ($title_color != '') {
        echo '<style type="text/css">'
        . 'section.bg-white h2,section.bg-grey h2,footer h2,'
        . 'section h2,section.sec-overview .warpper-outer h5,'
        . '.sec-features h5,.sec-video .wrapper-video h3,'
        . '.sec-testimonial .media .media-body h6,.sec-blog .thumbnail-blog a > h5,'
        . '.sec-blog-list .thumbnail-blog a > h5,.sec-get-app h4,.sec-contact .contact h3,'
        . '.sec-contact .conForm_heading,nav.bg-solid .btn-getnow,nav.bg-solid .navbar-collapse .navbar-right > li > a,'
        . '.sec-blog-post .blog-post .blog-post-header .blog-title,header.blog-list h1,'
        . 'header.blog-detail h1,nav.bg-solid .navbar-header .navbar-brand,'
        . 'nav.bg-solid .navbar-collapse .navbar-right li.menu-item-has-children::after,'
        . 'nav.bg-solid .navbar-collapse .navbar-right li.menu-item-has-children .dropdown-menu li a:hover,'
        . '.sec-pricing [class^="col-"] .wrapper h3,.sec-pricing [class^="col-"] .wrapper h3, '
        . '.sec-pricing [class^="col-"] .wrapper h1,.sec-team .wrapper h5,'
        . '.sec-steps .row.row-2 [class^="col-"] .step-desc h4{'
        . 'color: ' . esc_html($title_color) . '!important;'
        . '}'
        . 'nav.bg-solid .navbar-collapse .navbar-right > li.active > a{'
        . 'border-bottom:2px solid ' . esc_html($title_color) . '!important;'
        . '}'
        . 'nav.bg-solid .btn-getnow{'
        . 'border: 1.5px solid' . esc_html($title_color) . '!important;'
        . '}'
        . 'nav.bg-solid .navbar-collapse .navbar-right > li > a:hover{'
        . 'border-bottom: 2px solid' . esc_html($title_color) . '!important;'
        . '}'
        . '</style>';
    }
}

add_action('wp_print_styles', 'faded_title_color');

//sticky menu color
//faded_sticky_menu
function faded_sticky_menu_color() {
    if (!defined('FW'))
        return;
    $faded_stymenu_color = fw_get_db_settings_option('faded_sticky_menu', '');
    if ($faded_stymenu_color != '') {
        echo '<style type="text/css">'
        . 'nav.bg-solid,nav.bg-solid .navbar-collapse .navbar-right > li.active > a,nav.bg-solid .navbar-collapse .navbar-right > li > a{'
        . 'color: ' . esc_html($faded_stymenu_color) . '!important;'
        . '};'
        . '</style>';
    }
    $faded_tmenu_color = fw_get_db_settings_option('faded_top_menu_color', '');
    if ($faded_tmenu_color != '') {
        echo '<style type="text/css">'
        . 'nav .btn-getnow,nav .btn-getnow:hover{'
        . 'border-color: ' . esc_html($faded_tmenu_color) . '!important;'
        . '};'
        . 'nav .navbar-collapse .navbar-right > li > a:hover,nav .navbar-collapse .navbar-right > li.active > a{'
        . 'border-bottom: ' . esc_html($faded_tmenu_color) . '!important;'
        . '};'
        . 'nav .navbar-collapse .navbar-right > li > a,nav .btn-getnow:hover{'
        . 'color: ' . esc_html($faded_tmenu_color) . '!important;'
        . '};'
        . '</style>';
    }
}

add_action('wp_print_styles', 'faded_sticky_menu_color');

//Primary 
function faded_main_color() {
    if (!defined('FW'))
        return;
    $primary_color = fw_get_db_settings_option('primary_color', '');
    if ($primary_color != '') {
        echo '<style type="text/css">'
        . 'section.sec-overview .warpper-outer span.overview-img,'
        . '.sec-features .ficons,.sec-screenshots .filter-btn.active,'
        . '.sec-screenshots .filter-btn,'
        . '.sec-testimonial .media .media-body .fa-quote-left,'
        . '.sec-blog .thumbnail-blog p + a,'
        . ' .sec-blog-list .thumbnail-blog p + a,'
        . '.sec-blog .container a.go_blog,'
        . '.sec-blog-post .blog-post .blog-post-body blockquote p i,'
        . '.sec-blog-post .blog-post .blog-post-body blockquote,'
        . '.sec-blog-list .container a.go_blog,.sec-pricing [class^="col-"] .wrapper a,'
        . '.sec-pricing [class^="col-"] .wrapper .pricing-img{'
        . 'color: ' . esc_html($primary_color) . '!important;'
        . '}'
        . 'section.sec-overview .warpper-outer hr,'
        . '.sec-features .ficons,'
        . '.sec-screenshots .filter-btn.active,'
        . '.sec-screenshots .screenshots .screenshot::before,'
        . '.sec-screenshots .screenshots .owl-controls .owl-pagination .owl-page,'
        . 'section.bg-gradient-horizontal,'
        . '.sec-testimonial .owl-controls .owl-pagination .owl-page,'
        . '.sec-blog .container a.go_blog,'
        . 'section.bg-gradient-vertical,'
        . '.sec-blog-list .container a.go_blog,'
        . '.sec-contact,footer,.sec-contact form,header,'
        . '.sec-blog-list .pagination a::after,.sec-blog-post .blog-submit form button,'
        . '.sec-blog-list .pagination span.current::after,.sec-get-app a::after,.scrollup,'
        . '.sec-pricing [class^="col-"] .wrapper a,.sec-team .wrapper a i{'
        . 'background-color:' . esc_html($primary_color) . '!important;'
        . 'background-image: none !important;'
        . '}'
        . '.sec-blog-post .blog-post .blog-post-body blockquote{'
        . 'border-left:2px solid ' . esc_html($primary_color) . '!important;'
        . '}'
        . '</style>';
    }
}

add_action('wp_print_styles', 'faded_main_color');

//Background Gradient
function faded_primary_gradient() {
    if (!defined('FW'))
        return;
    $primary_color_grd = fw_get_db_settings_option('primary_color_grd', '');
    $prmColor = '';
    if (isset($primary_color_grd['primary']) && $primary_color_grd['primary'] != '') {
        $prmColor = $primary_color_grd['primary'];
    }
    $secndColor = '';
    if (isset($primary_color_grd['secondary']) && $primary_color_grd['secondary'] != '') {
        $secndColor = $primary_color_grd['secondary'];
    }
    if ($prmColor != '' && $secndColor != '') {
        echo '<style type="text/css">'
        . 'header,section.bg-gradient-horizontal,section.sec-overview .warpper-outer hr,'
        . '.sec-features .ficons,section#screenshots .filter-btn.active,'
        . '.sec-screenshots .screenshots .screenshot::before,'
        . '.sec-screenshots .screenshots .owl-controls .owl-pagination .owl-page,'
        . '.sec-team .wrapper a i,.sec-pricing [class^="col-"] .wrapper a,'
        . '.sec-blog .container a.go_blog, .sec-blog-list .container a.go_blog,nav.bg-solid .btn-getnow:hover,'
        . '.sec-blog-list .pagination a::after,.sec-blog-list .pagination span.current::after,'
        . '.sec-testimonial .owl-controls .owl-pagination .owl-page,.sec-get-app a::after,'
        . '.sec-blog-post .blog-submit form button{'
        . 'background:-moz-linear-gradient(' . '0deg' . ',' . $prmColor . ' 0%,' . $secndColor . ' 100%) !important;'
        . 'background:-webkit-linear-gradient(' . '0deg' . ',' . $prmColor . ' 0%,' . $secndColor . ' 100%) !important;'
        . 'background:-ms-linear-gradient(' . '0deg' . ',' . $prmColor . ' 0%,' . $secndColor . ' 100%) !important;'
        . '}'
        . 'section.bg-gradient-vertical{'
        . 'background:-moz-linear-gradient(' . '90deg' . ',' . $prmColor . ' 0%,' . $secndColor . ' 100%) !important;'
        . 'background:-webkit-linear-gradient(' . '90deg' . ',' . $prmColor . ' 0%,' . $secndColor . ' 100%) !important;'
        . 'background:-ms-linear-gradient(' . '90deg' . ',' . $prmColor . ' 0%,' . $secndColor . ' 100%) !important;'
        . '}'
        . '</style>';
    }
}

add_action('wp_print_styles', 'faded_primary_gradient');

// loader background color
function faded_loarder_bg_color(){
    if(!defined('FW'))
        return;
    $loader_color   = fw_get_db_settings_option('loarder_bg_color', '#4776e6');
    if($loader_color != ''){
        echo '<style type="text/css">'
            . '.loading{'
            . 'background-color: ' . esc_html($loader_color) . '!important;'
            . '}'
            . '</style>';
    }
}
add_action('wp_print_styles', 'faded_loarder_bg_color');

//body color
function faded_body_custom_color() {
    if (!defined('FW'))
        return;
    $body_colors = fw_get_db_settings_option('body_colors', '');
    if ($body_colors != '') {
        echo '<style type="text/css">'
        . 'section.bg-white .subheader, section.bg-grey .subheader,'
        . 'footer .subheader, section .subheader,section.sec-overview .warpper-outer p,.sec-features p,'
        . '.sec-testimonial .media .media-body p,.sec-video .wrapper-video h6,.sec-blog .thumbnail-blog p,'
        . '.sec-blog-list .thumbnail-blog p,.sec-steps .row.row-2 [class^="col-"] .step-desc p{'
        . 'color: ' . esc_html($body_colors) . '!important;'
        . '}'
        . '</style>';
    }
}

add_action('wp_print_styles', 'faded_body_custom_color');


function faded_action_xs_hook_css() {
    if (defined('FW')) {

        /* Global Fonts Settings */
        $global_title = fw_get_db_settings_option('heading_title');
        if ($global_title != '') {
            $global_title_family = $global_title['family'];
            $global_title_style = $global_title['style'];

            if ($global_title_style === 'regular') {
                $global_title_style = '400';
            }
            if ($global_title_style == 'italic') {
                $global_title_style = '400italic';
            }
            $global_title_font_style = ( strpos($global_title_style, 'italic') ) ? 'font-style: italic;' : '';
            $global_title_font_weight = 'font-weight: ' . intval($global_title_style) . ';';
        }


        $global_subtitle = fw_get_db_settings_option('heading_subtitle');
        //fw_print($global);
        if ($global_subtitle != '') {
            $global_subtitle_family = $global_subtitle['family'];
            $global_subtitle_style = $global_subtitle['style'];

            if ($global_subtitle_style === 'regular') {
                $global_subtitle_style = '400';
            }
            if ($global_subtitle_style == 'italic') {
                $global_subtitle_style = '400italic';
            }
            $global_subtitle_font_style = ( strpos($global_subtitle_style, 'italic') ) ? 'font-style: italic;' : '';
            $global_subtitle_font_weight = 'font-weight: ' . intval($global_subtitle_style) . ';';
        }
        
        $global_post_meta   = fw_get_db_settings_option('post_meta');
        if($global_post_meta != ''){
            $global_post_meta_family    = $global_post_meta['family'];
            $global_post_meta_style     = $global_post_meta['style'];
            $global_post_meta_font_size = $global_post_meta['size'];
            
            if($global_post_meta_style === 'regular') {
                $global_post_meta_style = '400';                
            }
            if($global_post_meta_style == 'italic'){
                $global_post_meta_style = '400italic';
            }
            $global_post_meta_font_style    = ( strpos($global_post_meta_style, 'italic') ) ? 'font-style: italic;' : '';
            $global_post_meta_weight        = 'font-weight:' . intval($global_post_meta_style) . ';';
            $global_post_meta_f_size        = 'font-size: ' . intval($global_post_meta_font_size) . 'px;'; 
        }
        
        $global_menu_fonts   = fw_get_db_settings_option('menu_fonts');
        if ($global_menu_fonts != '') {
            $global_menu_family     = $global_menu_fonts['family'];
            $global_menu_style      = $global_menu_fonts['style'];
            $global_menu_font_size  = $global_menu_fonts['size'];

            if ($global_menu_style === 'regular') {
                $global_menu_style = '400';
            }
            if ($global_menu_style == 'italic') {
                $global_menu_style = '400italic';
            }
            $global_menu_font_style         = ( strpos($global_menu_style, 'italic') ) ? 'font-style: italic;' : '';
            $global_menu_font_weight        = 'font-weight: ' . intval($global_menu_style) . ';';
            $global_menu_font_size_option   = 'font-size: '  . intval($global_menu_font_size) . 'px; ';
        }

        $global_body_font = fw_get_db_settings_option('body_font');
        if ($global_body_font != '') {
            $global_body_font_family = $global_body_font['family'];
            $global_body_font_style = $global_body_font['style'];

            if ($global_body_font_style === 'regular') {
                $global_body_font_style = '400';
            }
            if ($global_body_font_style == 'italic') {
                $global_body_font_style = '400italic';
            }
            $global_body_font_font_style = ( strpos($global_body_font_style, 'italic') ) ? 'font-style: italic;' : '';
            $global_body_font_font_weight = 'font-weight: ' . intval($global_body_font_style) . ';';
        }



//        fw_print($bg_color);
        $output = ""
            . "nav .navbar-collapse .navbar-right > li > a, nav .navbar-collapse .navbar-right li.menu-item-has-children .dropdown-menu li a, .dropdown-menu>li>a{font-family: '$global_menu_family'; $global_menu_font_style $global_menu_font_weight $global_menu_font_size_option }"
            . "header.blog-list h1, header.blog-detail h1, .sec-blog .thumbnail-blog a > h5, .sec-blog-list .thumbnail-blog a > h5, header h1, section.bg-white h2, section.bg-grey h2, .sec-video .wrapper-video h3, .sec-team h2{font-family: '$global_title_family'; $global_title_font_style $global_title_font_weight}"
            . ".section.sec-overview .warpper-outer h5, .sec-steps .row.row-2 [class^=\"col-\"] .step-desc h4, .sec-features h5, .sec-team .wrapper h5, .sec-contact .conForm_heading{font-family: '$global_subtitle_family' ! important; $global_subtitle_font_style $global_subtitle_font_weight}"
            . ".sec-blog .thumbnail-blog h6, .sec-blog-list .thumbnail-blog h6, .sec-blog-post .blog-post .blog-post-header .meta{font-family: '$global_post_meta_family'; $global_post_meta_font_style $global_post_meta_weight $global_post_meta_f_size}"
            . "body, .sec-blog .thumbnail-blog p + a, .sec-blog-list .thumbnail-blog p + a{font-family: '$global_body_font_family'; $global_body_font_font_style $global_body_font_font_weight}"
            ;
        wp_enqueue_style(
            'custom-style',
            FADED_CSS . '/custom_script.css'
        );
        wp_add_inline_style('custom-style', $output);
    }
}



add_action('wp_enqueue_scripts', 'faded_action_xs_hook_css', 90);





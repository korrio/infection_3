<?php
/**
 * Author: droitthemes
 * @package faded
 * @subpackage faded
 * @since faded 1.5.3
 */
/* * *******************************************
  Faded only works in WordPress 4.4 or later.
 * ****************************************** */
if (version_compare($GLOBALS['wp_version'], '4.4-alpha', '<')) {
    require get_template_directory() . '/inc/back-compat.php';
}

define('FADED_CSS', get_template_directory_uri() . '/assets/css');
/* * *******************************************
  Faded ThemeSetup
 * ****************************************** */
if (!function_exists('faded_setup')) :

    function faded_setup() {
        //load textdomain
        load_theme_textdomain('faded', get_template_directory() . '/languages');
        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');
        //hard-coded <title> tag in the document head, and expect WordPress to
        add_theme_support('title-tag');
        //Enable support for Post Thumbnails on posts and pages.
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 9999);
        add_image_size('faded_screenshot', 270, 481, true);
        add_image_size('faded_testimonial', 188, 240, true);
        add_image_size('faded_team', 270, 330, true);
        add_image_size('faded_latest_blog', 370, 209, true);
        add_image_size('faded_blogDetails', 770, 450, true);
        add_image_size('faded_comment', 100, 100, true);
        add_image_size('faded_outer_logo', 112, 43, true);
        add_image_size('faded_inner_logo', 112, 43, true);
        // This theme uses wp_nav_menu() in two locations.
        register_nav_menus(array(
            'primary-menu' => __('Primary Menu', 'faded'),
        ));
        //Switch default core markup for search form, comment form, and comments 
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list'));
        //Enable support for Post Formats. 
        add_theme_support('post-formats', array('audio', 'video'));
        //This theme styles the visual editor to resemble the theme style,
        add_editor_style(array('theme-assets/css/editor-style.css', faded_fonts_url()));
        // Indicate widget sidebars can use selective refresh in the Customizer.
        add_theme_support('customize-selective-refresh-widgets');
    }

endif; // faded_setup
add_action('after_setup_theme', 'faded_setup');

/* * *******************************************
  @global int $content_width
 * ****************************************** */

function faded_content_width() {
    $GLOBALS['content_width'] = apply_filters('faded_content_width', 1170);
}

add_action('after_setup_theme', 'faded_content_width', 0);


/* * *******************************************
Custom Headers
 * ****************************************** */
add_theme_support( 'custom-header' );

/* * *******************************************
Custom Backgrounds
 * ****************************************** */
add_theme_support( 'custom-background' );
/* * *******************************************
  Registers a custom widget
 * ****************************************** */
$Widgets_dtTheme = array('recent');
/* * *******************************************
  Registers Menu
 * ****************************************** */
if (!function_exists('faded_nav_Walker::start_el')) {

    class faded_nav_Walker extends Walker_Nav_Menu {

        function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {

            global $wp_query;

            $indent = ( $depth ) ? str_repeat("\t", $depth) : '';

            $class_names = $value = '';

            $classes = empty($item->classes) ? array() : (array) $item->classes;
            $classes[] = 'menu-item-' . $item->ID;

            // add submenu class if current item is a top menu item
            $menu_link_class = '"';
            $bIsTopMenuItem = false;
            if (in_array("menu-item-has-children", $classes)) {
                $menu_link_class = ' "';
                $bIsTopMenuItem = true;
            }

            if ((in_array("current-menu-item", $classes)) || (in_array("current_page_item", $classes))) {

                $classes[] = 'active';
            }

            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));


            $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
            $id = $id ? ' id="' . esc_attr($id) . '"' : '';

            $atts = array();
            $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
            $atts['target'] = !empty($item->target) ? $item->target : '';
            $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';

            $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

            $attributes = '';
            foreach ($atts as $attr => $value) {
                if (!empty($value)) {
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            if ($item->object == 'page') {
                $page_post = get_post($item->object_id);
                $menu_status = 'yes';
                $section_status = 'no';
                if (defined('FW')) {
                    $menu_status = fw_get_db_post_option($item->object_id, 'menu_status', 'yes');
                    $section_status = fw_get_db_post_option($item->object_id, 'section_status', 'no');
                }
                $main_page_id = get_option('page_on_front');
                if ($menu_status == 'yes' || ( $page_post->ID == $main_page_id )) {
                    if ($section_status == 'no') {
                        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
                    } else {
                        if (is_front_page())
                            $attributes .= ' href="#' . $item->object_id . '"';
                        else
                            $attributes .= ' href="' . home_url() . '#' . $item->object_id . '"';
                    }
                    $item_output = $args->before;

                    if ($section_status == 'yes' && is_front_page()) {
                            $item_output .= '<a class="collapse_menu1' . $menu_link_class . ' ' . $attributes . '>';
                    } else {
                        $item_output .= '<a class="external' . $menu_link_class . ' ' . $attributes . '>';
                    }
                    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
                    $item_output .= '</a>';
                    $item_output .= $args->after;

                    if ($section_status == 'yes' || ($page_post->ID == $main_page_id)) {
                        if (is_front_page()):
                            if (($page_post->ID != $main_page_id)):
                                $class_names = $class_names ? ' class="scroll ' . esc_attr($class_names) . '"' : '';
                            else:
                                $class_names = $class_names ? ' class=" ' . esc_attr($class_names) . '"' : '';
                            endif;
                        endif;
                    } else {
                        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
                    }
                    $output .= $indent . '<li' . $id . $value . $class_names . '>';
                    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
                }
            } else {
                $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

                $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

                $item_output = $args->before;
                $item_output .= '<a class="externala' . $menu_link_class . ' ' . $attributes . '>';

                $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
                $item_output .= '</a>';
                $item_output .= $args->after;
                $output .= $indent . '<li' . $id . $value . $class_names . '>';
                $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
            }
        }

        

        function start_lvl( &$output, $depth = 0, $args = array() ) {
        // Depth-dependent classes.
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu dropMenu',
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );

        // Build HTML for output.
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }
    
        function end_el(&$output, $item, $depth = 0, $args = array()) {
            if ($item->object == 'page') {
                $disable_menu = (get_post_meta($item->object_id, "fw_option:menu_status", true) == 'yes');
                if (!$disable_menu) {
                    $output .= "</li>\n";
                }
            } else {
                $output .= "</li>\n";
            }
        }

    }

}
/* * *******************************************
  Registers a widget area
 * ****************************************** */

function faded_widgets_init() {
    faded_RegisterWidget(array(
        'sidebar-1' => array('name' => esc_html__('Blog Sidebar', 'faded'), 'description' => esc_html__('Blog sidebar, Only for blog pages.', 'faded')),
        'sidebar-2' => array('name' => esc_html__('Page Sidebar', 'faded'), 'description' => esc_html__('Page sidebar, Only for Pages.', 'faded'))
            ), array(
        'before_widget' => '<aside id="%1$s" class="widget %2$s wow fadeInUp" data-wow-duration="700ms" data-wow-delay="300ms">',
        'after_widget' => "</aside>",
        'before_title' => '<h3 class="widgetTitle">',
        'after_title' => '</h3>',
    ));
}

add_action('widgets_init', 'faded_widgets_init');

/* * *******************************************
  Faded Comment Listing
 * ****************************************** */

function faded_comment_listing($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li>
        <div class="comment">
            <div class="media comment-box">
                <div class="media-left">
                    <?php echo get_avatar( $comment, 100 ); ?>
                </div>
                <div class="media-body">
                    <h5 class="comment-name"><a href="<?php echo esc_url($comment->url); ?>"><?php echo esc_html($comment->comment_author); ?></a><span class="comment-time">
                            <?php printf( _x( '%s ago', '%s = human-readable time difference', 'faded' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) ); ?>
                        </span></h5>
                    <p class="comment-text"><?php comment_text(); ?></p>
                    <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <?php
    }

    /**
     * Handles JavaScript detection.
     *
     * Adds a `js` class to the root `<html>` element when JavaScript is detected.
     *
     * @since faded 1.0
     */
    function faded_javascript_detection() {
        echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
    }

    add_action('wp_head', 'faded_javascript_detection', 0);

    /*     * *******************************************
      Enqueues scripts and styles.
     * ****************************************** */
    require get_template_directory() . '/theme-assets/dt_assets.php';

    /*     * *******************************************
      Adds custom classes to the array of body classes.
     * ****************************************** */

    function faded_body_classes($classes) {
        // Adds a class of custom-background-image to sites with a custom background image.
        if (get_background_image()) {
            $classes[] = 'custom-background-image';
        }

        // Adds a class of group-blog to sites with more than 1 published author.
        if (is_multi_author()) {
            $classes[] = 'group-blog';
        }

        // Adds a class of no-sidebar to sites without active sidebar.
        if (!is_active_sidebar('sidebar-1')) {
            $classes[] = 'no-sidebar';
        }

        // Adds a class of hfeed to non-singular pages.
        if (!is_singular()) {
            $classes[] = 'hfeed';
        }

        return $classes;
    }

    add_filter('body_class', 'faded_body_classes');

    /*     * *******************************************
      Custom template tags for this theme.
     * ****************************************** */
    require get_template_directory() . '/inc/template-tags.php';
    /*     * *******************************************
      Demo Content for this theme.
     * ****************************************** */
    require get_template_directory() . '/inc/hook.php';

    /*     * *******************************************
      Modifies tag cloud widget
     * ****************************************** */

    function faded_widget_tag_cloud_args($args) {
        $args['largest'] = 1;
        $args['smallest'] = 1;
        $args['unit'] = 'em';
        return $args;
    }

    add_filter('widget_tag_cloud_args', 'faded_widget_tag_cloud_args');
    
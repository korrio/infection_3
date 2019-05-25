<?php

/**
 * Author: droitthemes
 * @package faded
 * @subpackage faded
 * @since faded 1.0
 * */

/* * *******************************************
Faded Making or Create Widgets
 * ****************************************** */
if (isset($Widgets_dtTheme) && !empty($Widgets_dtTheme)) 
{
    foreach ($Widgets_dtTheme as $widget) 
    {
        require DT_THEMEDESK_DIR . '/widgets/dt_' . $widget . '_widget.php';
    }
}
/* * *******************************************
Faded Load Widgets
 * ****************************************** */
function faded_RegisterWidget($areas, $dtload_params = array()) 
{
    if (empty($dtload_params))
    {
        $dtload_params = array(
            'before_widget' => '<div id="%1$s" class="box widget-container %2$s"><div class="box-wrapper">',
            'after_widget' => "</div></div>",
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        );
    }
    foreach ($areas as $id => $area)
    {
        $params = array_merge($dtload_params, $area, array('id' => $id));
        register_sidebar($params);
    }
}

/* * *******************************************
Faded Shortcode Widget
 * ****************************************** */
add_filter('widget_text', 'do_shortcode');

/* * *******************************************
faded Gmap
 * ****************************************** */
function faded_gmap()
{
    $gmap_apikey='';
    if(defined('FW'))
    {
        $gmap_apikey = fw_get_db_settings_option('gmap_apikey','');
    }
    $url="https://maps.googleapis.com/maps/api/js?key=".$gmap_apikey;
    echo '<script src="'.$url.'"></script>';
}
add_action('wp_footer','faded_gmap');

/*********************************************
faded User Custom Avater
********************************************/
add_action( 'show_user_profile', 'faded_user_avater' );
add_action( 'edit_user_profile', 'faded_user_avater' );

function faded_user_avater( $user )
{
    ?>
        <table class="form-table">
            <tr>
                <th><h3>User Avatar</h3></th>
                <td>
                    <?php
                        $avater_src = get_the_author_meta( 'user_avatar', $user->ID );
                        $user_av_ID = get_the_author_meta( 'user_av_ID', $user->ID );
                        if($avater_src != '')
                        {
                            $av_src = $avater_src;
                            $vpostion = 'block';
                        }
                        else
                        {
                            $av_src = '';
                            $vpostion = 'none';
                        }
                    ?>
                    <img class="user_logo upImg" src="<?php echo esc_url($av_src); ?>" height="100" width="100" style="display: <?php echo esc_attr($vpostion); ?>;"/>
                    <div class="clear"></div>
                    <input type="text" name="user_avatar" value="<?php echo esc_url($av_src); ?>" class="regular-text user_avater_url" />
                    <input type="hidden" name="user_av_ID" value="<?php echo esc_attr($user_av_ID); ?>" id="user_av_ID"/>
                    <a href="#" class="upload_avi_id button">Upload</a>
                </td>
            </tr>
            
        </table>
    <?php
}

add_action( 'personal_options_update', 'faded_user_avatar_src' );
add_action( 'edit_user_profile_update', 'faded_user_avatar_src' );

function faded_user_avatar_src( $user_id )
{
    update_user_meta( $user_id,'user_avatar', sanitize_text_field( $_POST['user_avatar'] ) );
    update_user_meta( $user_id,'user_av_ID', sanitize_text_field( $_POST['user_av_ID'] ) );
}
/*********************************************
faded framework saving hook
********************************************/
function faded_post_per_page_setup()
{
    $number_of_blog = fw_get_db_settings_option('posts_per_page', 10);
    if($number_of_blog != '')
    {
        update_option('posts_per_page', $number_of_blog);
    }
}
add_action('fw_settings_form_saved', 'faded_post_per_page_setup', 999, 2);

/*********************************************
faded header 
********************************************/
require_once DT_THEMEDESK_DIR.'/header/dt_header.php';


/*********************************************
faded Tgm Activation 
********************************************/
require_once DT_THEMEDESK_DIR.'/tgm_activation/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'faded_plugin_activation' );
if(!function_exists('faded_plugin_activation'))
{
    function faded_plugin_activation()
    {
        $plugins = array(
            array(
                'name'      => 'Unyson',
                'slug'      => 'unyson',
                'required'  => TRUE,
            ),
            array(
                'name'      => 'MailChimp for WordPress',
                'slug'      => 'mailchimp-for-wp',
                'required'  => TRUE,
            ),
            array(
                'name'      => 'Contact Form 7',
                'slug'      => 'contact-form-7',
                'required'  => TRUE,
            ),
			array(
                'name'      => 'Yoast SEO',
                'slug'      => 'wordpress-seo',
                'required'  => TRUE,
            ),
            array(
                'name'               => 'Faded Helper', 
                'slug'               => 'faded_theme_helper', 
                'source'             => 'http://droitthemes.com/wp/faded/plugin/faded_theme_helper.zip',
                'required'           => TRUE, 
                'version'            => '', 
                'force_activation'   => false, 
                'force_deactivation' => false, 
                'external_url'       => '',
            )            
        );

        $config = array(
                'default_path' => '',                      
                'menu'         => 'tgmpa-install-plugins', 
                'has_notices'  => true,                    
                'dismissable'  => true,                    
                'dismiss_msg'  => '',                      
                'is_automatic' => false,                   
                'message'      => '',                      
                'strings'      => array(
                    'page_title'                      => esc_html__( 'Install Required Plugins', 'faded' ),
                    'menu_title'                      => esc_html__( 'Install Plugins', 'faded' ),
                    'installing'                      => __( 'Installing Plugin: %s', 'faded' ), 
                    'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'faded' ),
                    'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'faded' ), // %1$s = plugin name(s).
                    'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'faded' ), // %1$s = plugin name(s).
                    'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'faded' ), // %1$s = plugin name(s).
                    'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'faded' ), // %1$s = plugin name(s).
                    'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'faded' ), // %1$s = plugin name(s).
                    'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'faded' ), // %1$s = plugin name(s).
                    'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'faded' ), // %1$s = plugin name(s).
                    'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'faded' ), // %1$s = plugin name(s).
                    'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'faded' ),
                    'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'faded' ),
                    'return'                          => esc_html__( 'Return to Required Plugins Installer', 'faded' ),
                    'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'faded' ),
                    'complete'                        => __( 'All plugins installed and activated successfully. %s', 'faded' ), 
                    'nag_type'                        => 'updated' 
                )
            );

            tgmpa( $plugins, $config );
        }
}
/*********************************************
faded theme save options 
********************************************/
require_once DT_THEMEDESK_DIR.'/theme_save_option.php';
require_once DT_THEMEDESK_DIR.'/theme_color_option.php';

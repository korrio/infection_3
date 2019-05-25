<?php

$parse_uri = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
require_once(ABSPATH . 'wp-admin/includes/file.php');

if (defined('FW')) 
{
    function faded_custom_css_generator() 
    {
        $custom_css = fw_get_db_settings_option('custom_css', '');
        if ($custom_css != '') {
            $css_file = 'custom.css';
            $css = $custom_css;

            WP_Filesystem();
            global $wp_filesystem;
            if (!$wp_filesystem->put_contents(get_template_directory() . '/theme-assets/css/' . $css_file, $css, FS_CHMOD_FILE)) {
                echo 'Generating CSS error!';
            }
        } else {
            $css_file = 'custom.css';
            $css = '';

            WP_Filesystem();
            global $wp_filesystem;
            if (!$wp_filesystem->put_contents(get_template_directory() . '/theme-assets/css/' . $css_file, $css, FS_CHMOD_FILE)) {
                echo 'Generating CSS error!';
            }
        }
    }
    add_action('fw_settings_form_saved', 'faded_custom_css_generator', 999, 2);    
}
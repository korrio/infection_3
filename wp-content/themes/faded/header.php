<?php
/**
 * Author: droitthemes
 * @package faded
 * @subpackage faded
 * @since faded 1.0
 * */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if (is_singular() && pings_open(get_queried_object())) : ?>
            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php endif; ?>
		<?php            
		$fd_favicon = array('url' => '');
		if(defined('FW'))
		{
			$fd_favicon = fw_get_db_settings_option('favicon', array('url'=>''));
		}
		if(isset($fd_favicon['url']) && $fd_favicon['url'] != ''):
		?>
		<link rel="icon"  type="image/png" href="<?php echo esc_url($fd_favicon['url']); ?>">
		<?php
		else:
		?>
		<link rel="icon"  type="image/png" href="<?php echo DT_ASSETS_IMAGES_URL.'/Favicon_app.png'; ?>">
		<?php 
		endif;
		?>      
        <?php wp_head(); ?>
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50" <?php body_class(); ?>>
        <!--Loader-->
        <?php 
            if(function_exists('faded_preloader'))
            {
                faded_preloader();
            }
        ?> 
        <!-- MAIN NAV -->
        <?php 
            if(function_exists('faded_header_generator'))
            {
                faded_header_generator();
            }
        ?>       
        <!-- END MAIN NAV -->
    

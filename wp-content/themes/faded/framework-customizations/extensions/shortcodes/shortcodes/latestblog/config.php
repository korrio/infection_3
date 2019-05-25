<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Latest Blog', 'faded' ),
	'description' => esc_html__( 'Show your latest blog.', 'faded' ),
	'tab'         => esc_html__( 'Content Elements', 'faded' ),
);
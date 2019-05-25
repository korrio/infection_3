<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Team Member', 'faded' ),
	'description' => esc_html__( 'Add a Team Member', 'faded' ),
	'tab'         => esc_html__( 'Content Elements', 'faded' ),
	'popup_size'  => 'medium'
);
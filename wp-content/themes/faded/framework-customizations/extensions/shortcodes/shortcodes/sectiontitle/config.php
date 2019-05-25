<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => esc_html__( 'Section Title', 'faded' ),
	'description' => esc_html__( 'Add your section title.', 'faded' ),
	'tab'         => esc_html__( 'Content Elements', 'faded' ),
);

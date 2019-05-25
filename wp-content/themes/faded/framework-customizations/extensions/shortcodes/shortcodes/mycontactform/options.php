<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
        'title' => array(
            'type'   => 'text',
            'label'  => esc_html__( 'Title', 'faded' ),
            'desc'   => esc_html__( 'Insert your contact title', 'faded' )
	),
	'title_font_size' => array(
            'type'   => 'text',
            'label'  => esc_html__( 'Title Font Size', 'faded' ),
            'desc'   => esc_html__( 'Default title font size is 18px. Insert just numeric value. Don\'t need to insert "px".', 'faded' )
	),
	'title_color' => array(
            'label' => esc_html__('Title Color', 'faded'),
            'desc'  => esc_html__('Insert your title color. Default color is #fff.', 'faded'),
            'type'  => 'color-picker',
            'value' => ''
	),
        'title_font_weight'     => array(
            'label'   => esc_html__( 'Title Font Weight', 'faded' ),
            'type'    => 'short-select',
            'value'   => '700',
            'desc'    => esc_html__( 'Select your title font weight.', 'faded' ),
            'choices' => array(
                    '100' => '100',
                    '300' => '300',
                    '400' => '400',
                    '700' => '700'
            ),
        ),
        'title_line_height' => array(
		'type'   => 'text',
		'label'  => esc_html__( 'Title Line Height', 'faded' ),
		'desc'   => esc_html__( 'Default title line height is 0.8px. Insert just numeric value. Don\'t need to insert "px".', 'faded' )
	),    
        'contact_shorcode'       => array(
		'label'   => esc_html__( 'Shortcode', 'faded' ),
		'type'    => 'text',
		'desc'    => esc_html__( 'Insert your custom contact form shortcode.', 'faded' ),
                'value'   => ''
	),
            
);
<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(        
        'heading_text' => array(
		'type'   => 'text',
		'label'  => esc_html__( 'Your Heading', 'faded' ),
		'desc'   => esc_html__( 'Insert your heading text.', 'faded' )
	),
        'font_size' => array(
		'type'   => 'text',
		'label'  => esc_html__( 'Font Size', 'faded' ),
		'desc'   => esc_html__( 'Default font size is 24px. Insert just numeric value. Don\'t need to insert "px".', 'faded' )
	),
        'heading_color' => array(
		'label' => esc_html__('Heading Color', 'faded'),
		'desc'  => esc_html__('Insert your Heading color. Default color is #303030.', 'faded'),
		'type'  => 'color-picker',
                'value' => ''
	),
        'text_align'              => array(
		'label'   => esc_html__( 'Heading Alignment', 'faded' ),
		'type'    => 'short-select',
		'value'   => 'left',
		'desc'    => esc_html__( 'Select your heading alignment.', 'faded' ),
		'choices' => array(
			'left' => 'Left Align',
			'center' => 'Center Align',
			'right' => 'Right Align'
		)
	),
        'font_weight'     => array(
		'label'   => esc_html__( 'Font Weight', 'faded' ),
		'type'    => 'short-select',
		'value'   => '700',
		'desc'    => esc_html__( 'Select your heading font weight.', 'faded' ),
		'choices' => array(
			'100' => '100',
			'300' => '300',
			'400' => '400',
			'700' => '700'
		)
	),
        'text_transform'              => array(
		'label'   => esc_html__( 'Text Transform', 'faded' ),
		'type'    => 'short-select',
		'value'   => 'none',
		'desc'    => esc_html__( 'Select your heading text transform.', 'faded' ),
		'choices' => array(
			'uppercase' => 'Uppercase',
			'capitalize' => 'Capitalize',
			'lowercase' => 'lowercase',
			'none' => 'None',
		)
	),
        'margin_top' => array(
		'type'   => 'text',
		'label'  => esc_html__( 'Margin Top', 'faded' ),
		'desc'   => esc_html__( 'Default Margin Top is 0px. Insert just numeric value. Don\'t need to insert "px".', 'faded' )
	),
        'margin_bottom' => array(
		'type'   => 'text',
		'label'  => esc_html__( 'Margin Bottom', 'faded' ),
		'desc'   => esc_html__( 'Default margin bottom is 0px. Insert just numeric value. Don\'t need to insert "px".', 'faded' )
	),
);

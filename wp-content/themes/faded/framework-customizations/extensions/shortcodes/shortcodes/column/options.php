<?php if (!defined('FW')) { die('Forbidden');}

$options = array(
    'col_resonsive' => array(
        'label'   => esc_html__('Responsive Media', 'faded'),
        'desc'    => esc_html__('Select columon for responsiveness in tab device.', 'faded'),
        'type'    => 'select',
        'choices' => array(
                'col-sm-12'   => esc_html__('None', 'faded'),
                'col-sm-1'   => esc_html__('Col-sm-1', 'faded'),
                'col-sm-2'   => esc_html__('Col-sm-2', 'faded'),
                'col-sm-3'   => esc_html__('Col-sm-3', 'faded'),
                'col-sm-4'   => esc_html__('Col-sm-4', 'faded'),
                'col-sm-5'   => esc_html__('Col-sm-5', 'faded'),
                'col-sm-6'   => esc_html__('Col-sm-6', 'faded'),
                'col-sm-7'   => esc_html__('Col-sm-7', 'faded'),
                'col-sm-8'   => esc_html__('Col-sm-8', 'faded'),
                'col-sm-9'   => esc_html__('Col-sm-9', 'faded'),
                'col-sm-10'   => esc_html__('Col-sm-10', 'faded'),
                'col-sm-11'   => esc_html__('Col-sm-11', 'faded'),
                'col-sm-12'   => esc_html__('Col-sm-12', 'faded'),
        )
    ),
    'col_offset' => array(
        'label'   => esc_html__('Column Offset', 'faded'),
        'desc'    => esc_html__('Select Column Offset.', 'faded'),
        'type'    => 'select',
        'choices' => array(
                ''   => esc_html__('None', 'faded'),
                'col-lg-offset-1'   => esc_html__('Col-lg-Offset-1', 'faded'),
                'col-lg-offset-2'   => esc_html__('Col-lg-Offset-2', 'faded'),
                'col-lg-offset-3'   => esc_html__('Col-lg-Offset-3', 'faded'),
                'col-lg-offset-4'   => esc_html__('Col-lg-Offset-4', 'faded'),
                'col-lg-offset-5'   => esc_html__('Col-lg-Offset-5', 'faded'),
                'col-md-offset-1'   => esc_html__('Col-md-Offset-1', 'faded'),
                'col-md-offset-2'   => esc_html__('Col-md-Offset-2', 'faded'),
                'col-md-offset-3'   => esc_html__('Col-md-Offset-3', 'faded'),
                'col-md-offset-4'   => esc_html__('Col-md-Offset-4', 'faded'),
                'col-md-offset-5'   => esc_html__('Col-md-Offset-5', 'faded'),
                'col-sm-offset-1'   => esc_html__('Col-sm-Offset-1', 'faded'),
                'col-sm-offset-2'   => esc_html__('Col-sm-Offset-2', 'faded'),
                'col-sm-offset-3'   => esc_html__('Col-sm-Offset-3', 'faded'),
                'col-sm-offset-4'   => esc_html__('Col-sm-Offset-4', 'faded'),
                'col-sm-offset-5'   => esc_html__('Col-sm-Offset-5', 'faded'),
        )
    ),
    'background_color' => array(
        'label' => esc_html__('Background Color', 'faded'),
        'desc'  => esc_html__('Please select the background color. Default color is #fff.', 'faded'),
        'type'  => 'color-picker',
        'value' => ''
    ),
    'text_color' => array(
        'label' => esc_html__('Text Color', 'faded'),
        'desc'  => esc_html__('Please select the text color. Default color is #ccc.', 'faded'),
        'type'  => 'color-picker',
        'value' => ''
    ),
    'text_align'              => array(
            'label'   => esc_html__( 'Title Alignment', 'faded' ),
            'type'    => 'short-select',
            'value'   => 'center',
            'desc'    => esc_html__( 'Select your section title & sub Title alignment.', 'faded' ),
            'choices' => array(
                    'left' => 'Left Align',
                    'center' => 'Center Align',
                    'right' => 'Right Align'
            )
    ),
    
    'padding_top' => array(
        'label' => esc_html__('Padding Top', 'faded'),
        'desc'  => esc_html__('Insert your column padding top. Default Padding 0. Don\'t need to wirite px.', 'faded'),
        'type'  => 'text',
    ),
    'padding_left' => array(
        'label' => esc_html__('Padding Left', 'faded'),
        'desc'  => esc_html__('Insert your column padding left. Default Padding 15px. Don\'t need to wirite px.', 'faded'),
        'type'  => 'text',
    ),
    'padding_right' => array(
        'label' => esc_html__('Padding Right', 'faded'),
        'desc'  => esc_html__('Insert your column padding right. Default Padding 15px. Don\'t need to wirite px.', 'faded'),
        'type'  => 'text',
    ),
    
    'padding_bottom' => array(
        'label' => esc_html__('Padding Bottom', 'faded'),
        'desc'  => esc_html__('Insert your column padding bottom. Default Padding 0. Don\'t need to wirite px.', 'faded'),
        'type'  => 'text',
    ),
    'border_left' => array(
        'label' => esc_html__('Border Left', 'faded'),
        'desc'  => esc_html__('Insert border left if you want. e.g. "1px solid #fff"', 'faded'),
        'type'  => 'text',
    ),
    'border_top' => array(
        'label' => esc_html__('Border Top', 'faded'),
        'desc'  => esc_html__('Insert border top if you want. e.g. "1px solid #fff"', 'faded'),
        'type'  => 'text',
    ),
    'border_right' => array(
        'label' => esc_html__('Border Right', 'faded'),
        'desc'  => esc_html__('Insert border right if you want. e.g. "1px solid #fff"', 'faded'),
        'type'  => 'text',
    ),
    'border_bottom' => array(
        'label' => esc_html__('Border Bottom', 'faded'),
        'desc'  => esc_html__('Insert border bottom if you want. e.g. "1px solid #fff"', 'faded'),
        'type'  => 'text',
    ),
    'custom_class' => array(
        'label' => esc_html__('Custom Class', 'faded'),
        'desc'  => esc_html__('Insert class for custom css.', 'faded'),
        'type'  => 'text',
    ),
);
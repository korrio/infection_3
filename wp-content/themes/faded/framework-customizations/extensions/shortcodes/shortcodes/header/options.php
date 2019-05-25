<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'is_horiz_header' => array(
            'label'=> esc_html__('Is Horizontal', 'faded'),
            'type'=> 'switch',
    ),
    'header_title' => array(
        'type' => 'wp-editor',
        'label' => esc_html__('Header Title', 'faded'),
        'desc' => esc_html__('Insert your header text.', 'faded')
    ),
    'header_font_size' => array(
        'type' => 'text',
        'label' => esc_html__('Font Size', 'faded'),
        'desc' => esc_html__('Default font size is 60px. Insert just numeric value. Don\'t need to insert "px".', 'faded')
    ),
    'header_color' => array(
        'label' => esc_html__('Header Color', 'faded'),
        'desc' => esc_html__('Insert your Heading color. Default color is #fff.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    
    'header_font_weight' => array(
        'label' => esc_html__('Font Weight', 'faded'),
        'type' => 'short-select',
        'value' => '200',
        'desc' => esc_html__('Select your heading font weight.', 'faded'),
        'choices' => array(
            '100' => '100',
            '200' => '200',
            '400' => '400',
            '700' => '700'
        )
    ),
    'header_sub_title' => array(
        'type' => 'textarea',
        'label' => esc_html__('Header Sub Title', 'faded'),
        'desc' => esc_html__('Insert your header sub title text.', 'faded')
    ),
    'header_sub_font_size' => array(
        'type' => 'text',
        'label' => esc_html__('Sub Font Size', 'faded'),
        'desc' => esc_html__('Default Sub font size is 18px. Insert just numeric value. Don\'t need to insert "px".', 'faded')
    ),
    'header_sub_color' => array(
        'label' => esc_html__('Header Sub Color', 'faded'),
        'desc' => esc_html__('Insert your heading sub color. Default color is #fff.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'header_buttons' => array(
        'label' => esc_html__('Buttons', 'faded'),
        'popup-title' => esc_html__('Add/Edit Buttons', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your Buttons.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=header_title}}',
        'popup-options' => array(
            'header_title' => array(
                'label' => esc_html__('Button title', 'faded'),
                'desc' => esc_html__('Insert your button label title', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'header_button_label' => array(
                'label' => esc_html__('Button Label', 'faded'),
                'desc' => esc_html__('Insert your button label text', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'header_button_link' => array(
                'label' => esc_html__('Button Link', 'faded'),
                'desc' => esc_html__('Please insert your desiget link', 'faded'),
                'type' => 'text',
                'value' => '#'
            )
        ),
    ),
    'header_side_img' => array(
        'label' => esc_html__('Header Side Image', 'faded'),
        'popup-title' => esc_html__('Add/Edit Buttons', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your Buttons.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=image_title}}',
        'popup-options' => array(
            'image_title' => array(
                'label' => esc_html__('Image Title', 'faded'),
                'desc' => esc_html__('Insert your button image title', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'head_side_img' => array(
                'label' => esc_html__('Image', 'faded'),
                'desc' => esc_html__('Insert your header right side image', 'faded'),
                'type' => 'upload',
                'value' => ''
            ),
        ),
    ),
    'margin_top' => array(
        'type' => 'text',
        'label' => esc_html__('Margin Top', 'faded'),
        'desc' => esc_html__('Default Margin Top is 0px. Insert just numeric value. Don\'t need to insert "px".', 'faded')
    ),
    'margin_bottom' => array(
        'type' => 'text',
        'label' => esc_html__('Margin Bottom', 'faded'),
        'desc' => esc_html__('Default margin bottom is 0px. Insert just numeric value. Don\'t need to insert "px".', 'faded')
    ),
);

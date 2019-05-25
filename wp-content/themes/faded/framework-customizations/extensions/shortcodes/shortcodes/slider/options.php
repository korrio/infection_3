<?php

if (!defined('FW'))
{
    die('Forbidden');
}
$options = array(
    'is_horizon_slider' => array(
        'label' => esc_html__('Is Horizontal', 'faded'),
        'type' => 'switch',
    ),
    'slider_header_title' => array(
        'type' => 'wp-editor',
        'label' => esc_html__('Slider Header Title', 'faded'),
        'desc' => esc_html__('Insert your header text.', 'faded')
    ),
    'slider_header_font_size' => array(
        'type' => 'text',
        'label' => esc_html__('Slider Font Size', 'faded'),
        'desc' => esc_html__('Default Slider font size is 60px. Insert just numeric value. Don\'t need to insert "px".', 'faded')
    ),
    'slider_header_color' => array(
        'label' => esc_html__('Slider Text Color', 'faded'),
        'desc' => esc_html__('Insert your slider text color. Default color is #fff.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'slider_header_font_weight' => array(
        'label' => esc_html__('Slider Font Weight', 'faded'),
        'type' => 'short-select',
        'value' => '200',
        'desc' => esc_html__('Select your slider font weight.', 'faded'),
        'choices' => array(
            '100' => '100',
            '200' => '200',
            '400' => '400',
            '700' => '700'
        )
    ),
    'slider_header_sub_title' => array(
        'type' => 'textarea',
        'label' => esc_html__('Slider Sub Title', 'faded'),
        'desc' => esc_html__('Insert your slider sub title text.', 'faded')
    ),
    'slider_header_sub_font_size' => array(
        'type' => 'text',
        'label' => esc_html__('Slider Sub Font Size', 'faded'),
        'desc' => esc_html__('Default slider Sub font size is 18px. Insert just numeric value. Don\'t need to insert "px".', 'faded')
    ),
    'slider_header_sub_color' => array(
        'label' => esc_html__('Slider Sub Color', 'faded'),
        'desc' => esc_html__('Insert your slider sub color. Default color is #fff.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'slider_header_buttons' => array(
        'label' => esc_html__('Slider Buttons', 'faded'),
        'popup-title' => esc_html__('Add/Edit Buttons', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your slider Buttons.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=slid_header_title}}',
        'popup-options' => array(
            'slid_header_title' => array(
                'label' => esc_html__('Button title', 'faded'),
                'desc' => esc_html__('Insert your button label title', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'slid_header_button_label' => array(
                'label' => esc_html__('Button Label', 'faded'),
                'desc' => esc_html__('Insert your button label text', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'slid_header_button_link' => array(
                'label' => esc_html__('Button Link', 'faded'),
                'desc' => esc_html__('Please insert your desiget link', 'faded'),
                'type' => 'text',
                'value' => '#'
            )
        ),
    ),
    'slider_header_side_img' => array(
        'label' => esc_html__('Slider front Side Image', 'faded'),
        'popup-title' => esc_html__('Add/Edit Buttons', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your Slide side image.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=slide_image_title}}',
        'popup-options' => array(
            'slide_image_title' => array(
                'label' => esc_html__('Image Title', 'faded'),
                'desc' => esc_html__('Insert your button image title', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'slide_head_side_img' => array(
                'label' => esc_html__('Image', 'faded'),
                'desc' => esc_html__('Insert your slider header right side image', 'faded'),
                'type' => 'upload',
                'value' => ''
            ),
        ),
    ),
    'slider_backend_img' => array(
        'label' => esc_html__('Slider background Image', 'faded'),
        'popup-title' => esc_html__('Add/Edit Image', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your Slider image.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=slider_back_title}}',
        'popup-options' => array(
            'slider_back_title' => array(
                'label' => esc_html__('Image Title', 'faded'),
                'desc' => esc_html__('Insert your slider image title', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'slider_back_img' => array(
                'label' => esc_html__('Image', 'faded'),
                'desc' => esc_html__('Insert your slider header right side image', 'faded'),
                'type' => 'upload',
                'value' => ''
            ),
            'slider_animation' => array(
                'label' => esc_html__('Slider animation', 'faded'),
                'desc' => esc_html__('Insert your slider animation, Example 1,6,12,18', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
        ),
    )
);

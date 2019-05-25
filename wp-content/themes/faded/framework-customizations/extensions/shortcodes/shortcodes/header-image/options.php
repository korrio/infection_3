<?php

if (!defined('FW'))
{
    die('Forbidden');
}
/**
  Header Image
 * */
$options = array(
    'is_horizon_image' => array(
        'label' => esc_html__('Is Horizontal', 'faded'),
        'type' => 'switch',
    ),
    'image_header_title' => array(
        'type' => 'wp-editor',
        'label' => esc_html__('Image Header Title', 'faded'),
        'desc' => esc_html__('Insert your Image header text.', 'faded')
    ),
    'image_header_font_size' => array(
        'type' => 'text',
        'label' => esc_html__('Image Font Size', 'faded'),
        'desc' => esc_html__('Default Image font size is 60px. Insert just numeric value. Don\'t need to insert "px".', 'faded')
    ),
    'image_header_color' => array(
        'label' => esc_html__('Image Text Color', 'faded'),
        'desc' => esc_html__('Insert your slider text color. Default color is #fff.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'image_header_font_weight' => array(
        'label' => esc_html__('Image Font Weight', 'faded'),
        'type' => 'short-select',
        'value' => '200',
        'desc' => esc_html__('Select your Image font weight.', 'faded'),
        'choices' => array(
            '100' => '100',
            '200' => '200',
            '400' => '400',
            '700' => '700'
        )
    ),
    'image_header_sub_title' => array(
        'type' => 'textarea',
        'label' => esc_html__('Image Sub Title', 'faded'),
        'desc' => esc_html__('Insert your Image sub title text.', 'faded')
    ),
    'image_header_sub_font_size' => array(
        'type' => 'text',
        'label' => esc_html__('Image Sub Font Size', 'faded'),
        'desc' => esc_html__('Default image sub font size is 18px. Insert just numeric value. Don\'t need to insert "px".', 'faded')
    ),
    'image_header_sub_color' => array(
        'label' => esc_html__('Image Sub Color', 'faded'),
        'desc' => esc_html__('Insert your Image sub color. Default color is #fff.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'image_header_buttons' => array(
        'label' => esc_html__('Image Buttons', 'faded'),
        'popup-title' => esc_html__('Add/Edit image Buttons', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your image.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=image_header_title}}',
        'popup-options' => array(
            'image_header_title' => array(
                'label' => esc_html__('Button title', 'faded'),
                'desc' => esc_html__('Insert your button label title', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'image_header_button_label' => array(
                'label' => esc_html__('Button Label', 'faded'),
                'desc' => esc_html__('Insert your button label text', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'image_header_button_link' => array(
                'label' => esc_html__('Button Link', 'faded'),
                'desc' => esc_html__('Please insert your desiget link', 'faded'),
                'type' => 'text',
                'value' => '#'
            )
        ),
    ),
    'image_header_side_img' => array(
        'label' => esc_html__('Image front Side Image', 'faded'),
        'popup-title' => esc_html__('Add/Edit Image', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your image side image.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=image_title}}',
        'popup-options' => array(
            'image_title' => array(
                'label' => esc_html__('Image Title', 'faded'),
                'desc' => esc_html__('Insert your button image title', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'image_side_img' => array(
                'label' => esc_html__('Image', 'faded'),
                'desc' => esc_html__('Insert your slider header right side image', 'faded'),
                'type' => 'upload',
                'value' => ''
            ),
        ),
    ),
    'image_backend' => array(
        'type' => 'upload',
        'label' => esc_html__('Choose Image', 'faded'),
        'desc' => esc_html__('Insert upload a new, or choose an existing image from your media library.', 'faded')
    ),
);

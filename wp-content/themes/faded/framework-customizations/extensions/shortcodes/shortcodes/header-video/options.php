<?php

if (!defined('FW'))
{
    die('Forbidden');
}
/*
 * Header Video
 */

$options = array(
    'is_horizon_slider' => array(
        'label' => esc_html__('Is Horizontal', 'faded'),
        'type' => 'switch',
    ),
    'video_header_title' => array(
        'type' => 'wp-editor',
        'label' => esc_html__('Video Header Title', 'faded'),
        'desc' => esc_html__('Insert your Video header text.', 'faded')
    ),
    'video_header_font_size' => array(
        'type' => 'text',
        'label' => esc_html__('Video Font Size', 'faded'),
        'desc' => esc_html__('Default Video font size is 60px. Insert just numeric value. Don\'t need to insert "px".', 'faded')
    ),
    'video_header_color' => array(
        'label' => esc_html__('Video Text Color', 'faded'),
        'desc' => esc_html__('Insert your video text color. Default color is #fff.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'video_header_font_weight' => array(
        'label' => esc_html__('Video Font Weight', 'faded'),
        'type' => 'short-select',
        'value' => '200',
        'desc' => esc_html__('Select your Video font weight.', 'faded'),
        'choices' => array(
            '100' => '100',
            '200' => '200',
            '400' => '400',
            '700' => '700'
        )
    ),
    'video_header_sub_title' => array(
        'type' => 'textarea',
        'label' => esc_html__('Video Sub Title', 'faded'),
        'desc' => esc_html__('Insert your video sub title text.', 'faded')
    ),
    'video_header_sub_font_size' => array(
        'type' => 'text',
        'label' => esc_html__('Video Sub Font Size', 'faded'),
        'desc' => esc_html__('Default video Sub font size is 18px. Insert just numeric value. Don\'t need to insert "px".', 'faded')
    ),
    'video_header_sub_color' => array(
        'label' => esc_html__('Video Sub Color', 'faded'),
        'desc' => esc_html__('Insert your video sub color. Default color is #fff.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'video_header_buttons' => array(
        'label' => esc_html__('Video Buttons', 'faded'),
        'popup-title' => esc_html__('Add/Edit Video', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your video Buttons.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=video_header_title}}',
        'popup-options' => array(
            'video_header_title' => array(
                'label' => esc_html__('Button title', 'faded'),
                'desc' => esc_html__('Insert your button label title', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'video_header_button_label' => array(
                'label' => esc_html__('Button Label', 'faded'),
                'desc' => esc_html__('Insert your button label text', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'video_header_button_link' => array(
                'label' => esc_html__('Button Link', 'faded'),
                'desc' => esc_html__('Please insert your desiget link', 'faded'),
                'type' => 'text',
                'value' => '#'
            )
        ),
    ),
    'video_header_side_img' => array(
        'label' => esc_html__('Slider front video image', 'faded'),
        'popup-title' => esc_html__('Add/Edit Buttons', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your video side image.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=video_image_title}}',
        'popup-options' => array(
            'video_image_title' => array(
                'label' => esc_html__('Image Title', 'faded'),
                'desc' => esc_html__('Insert your button image title', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'video_head_side_img' => array(
                'label' => esc_html__('Image', 'faded'),
                'desc' => esc_html__('Insert your slider header right side image', 'faded'),
                'type' => 'upload',
                'value' => ''
            ),
        ),
    ),
    'video_src' => array(
        'type' => 'text',
        'label' => esc_html__('Youtube Video SRC', 'faded'),
        'desc' => esc_html__('Insert video src.', 'faded')
    ),
    'server_video_src' => array(
        'type' => 'text',
        'label' => esc_html__('Server Video SRC', 'faded'),
        'desc' => esc_html__('Insert video src.', 'faded'),
        'value' => 'http://droitlab.com/maksud/about-us-video.mp4',
    )
);

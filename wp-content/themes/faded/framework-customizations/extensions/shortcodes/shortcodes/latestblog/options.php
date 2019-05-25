<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'number_of_item' => array(
        'label' => esc_html__('Number of item', 'faded'),
        'type' => 'text',
        'value' => 4,
        'desc' => esc_html__('How many item you want to show?', 'faded'),
    ),
    'read_more' => array(
        'label' => esc_html__('Read More', 'faded'),
        'type' => 'text',
        'desc' => esc_html__('Insert your read more text.', 'faded'),
        'value' => 'Read More'
    ),
    'read_more_color' => array(
        'label' => esc_html__('Read More Text Color', 'faded'),
        'desc' => esc_html__('Insert your read more text color. Default color is #8e54e9.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'btn_label' => array(
        'label' => esc_html__('Blog Button', 'faded'),
        'type' => 'text',
        'desc' => esc_html__('Insert your blog button label.', 'faded'),
        'value' => 'Go to blog'
    ),
    'btn_label_color' => array(
        'label' => esc_html__('Button Text Color', 'faded'),
        'desc' => esc_html__('Insert your button label text color. Default color is #8e54e9.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'btn_label_bg_color' => array(
        'label' => esc_html__('Button Label Bg Color', 'faded'),
        'desc' => esc_html__('Insert your button label bg color. Default color is #8e54e9.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'btn_label_bg_gradient' => array(
        'label' => esc_html__( 'Button Label Bg Gradient', 'faded' ),
        'type'  => 'gradient',
        'value' => array(
                'primary'   => '',
                'secondary' => '#8e54e9'
        ),
        'desc'  => esc_html__( 'Please select your button label backgound gradient color','faded' ),            
    ),
    'btn_link' => array(
        'label' => esc_html__('Button Link', 'faded'),
        'type' => 'text',
        'desc' => esc_html__('Insert your blog button link.', 'faded'),
        'value' => '#'
    )
);

<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'type' => 'upload',
        'label' => esc_html__('Choose Image', 'faded'),
        'desc' => esc_html__('Either upload a new, or choose an existing image from your media library.', 'faded')
    ),
    'image_alingment' => array(
        'label' => esc_html__('Alignment', 'faded'),
        'type' => 'short-select',
        'value' => 'center',
        'desc' => esc_html__('Select your image title alignment.', 'faded'),
        'choices' => array(
            'left' => 'Left Align',
            'center' => 'Center Align',
            'right' => 'Right Align'
        )
    ),
    'margin' => array(
        'type' => 'group',
        'options' => array(
            'margin_top' => array(
                'type' => 'text',
                'label' => esc_html__('Margin Top', 'faded'),
                'desc' => esc_html__('Set image margin top.', 'faded'),
                'value' => ''
            ),
            'margin_bottom' => array(
                'type' => 'text',
                'label' => esc_html__('Margin Botton', 'faded'),
                'desc' => esc_html__('Set image margin bottom', 'faded'),
                'value' => ''
            )
        )
    ),
    'size' => array(
        'type' => 'group',
        'options' => array(
            'width' => array(
                'type' => 'text',
                'label' => esc_html__('Width', 'faded'),
                'desc' => esc_html__('Set image width', 'faded'),
                'value' => ''
            ),
            'height' => array(
                'type' => 'text',
                'label' => esc_html__('Height', 'faded'),
                'desc' => esc_html__('Set image height', 'faded'),
                'value' => ''
            )
        )
    )    
);


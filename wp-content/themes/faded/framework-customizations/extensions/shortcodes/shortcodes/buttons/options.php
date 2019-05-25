<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'btn_style' => array(
        'label' => esc_html__('Style', 'faded'),
        'type' => 'short-select',
        'value' => '1',
        'desc' => esc_html__('Select your button style.', 'faded'),
        'choices' => array(
            '1' => 'Style One Image',
            '2' => 'Style Two Text',            
        ),
    ),
    'button_img' => array(
        'label' => esc_html__('Choose Image', 'faded'),
        'desc' => esc_html__('add button image', 'faded'),
        'type' => 'upload'
    ),
    'button_text' => array(
        'label' => esc_html__('Button Text', 'faded'),
        'desc' => esc_html__('add button Text, What you went', 'faded'),
        'type' => 'text'
    ),
	'button_text_color' => array(
        'label' => esc_html__('Button Text Color', 'faded'),
        'desc' => esc_html__('Enter button text color. Default color is #fff.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'button_text_size' => array(
        'label' => esc_html__('Button Text Font Size', 'faded'),
        'desc' => esc_html__('Enter button text Font size. Default font size 14px. Don\'t need to insert "px".', 'faded'),
        'type' => 'text',
        'value' => ''
    ),
	'button_text_weight' => array(
        'label' => esc_html__('Button Font Weight', 'faded'),
        'desc' => esc_html__('Enter button font weight. Default font weight 400', 'faded'),
        'type' => 'text',
        'value' => ''
    ),
    'button_link' => array(
        'label' => esc_html__('Button Link', 'faded'),
        'desc' => esc_html__('add button link', 'faded'),
        'type' => 'text'
    )
);
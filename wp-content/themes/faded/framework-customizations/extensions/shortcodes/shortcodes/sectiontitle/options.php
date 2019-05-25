<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(    
    'section_title' => array(
        'type' => 'text',
        'label' => esc_html__('Section Title Text', 'faded'),
        'desc' => esc_html__('Insert your section title text here.', 'faded')
    ),
    'title_color' => array(
        'label' => esc_html__('Title Color', 'faded'),
        'desc' => esc_html__('Insert your section title color. Default color is #000.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'title_font_size' => array(
        'label' => esc_html__('Font Size', 'faded'),
        'desc' => esc_html__('Insert your section title Font size. Default font size 46px. Don\'t need to insert "px".', 'faded'),
        'type' => 'text',
        'value' => ''
    ),
    'title_line_height' => array(
        'label' => esc_html__('Line Height', 'faded'),
        'desc' => esc_html__('Insert your section Line Height. Default font size 36px. Don\'t need to insert "px". ', 'faded'),
        'type' => 'text',
        'value' => ''
    ),
    'hr_img' => array(
        'label' => esc_html__('Horizontal Image', 'faded'),
        'desc' => esc_html__('Please chose horizontal image, which is replace under section title image', 'faded'),
        'type' => 'upload',
    ),
    'margin_bottom' => array(
        'type' => 'text',
        'label' => esc_html__('Margin Bottom', 'faded'),
        'desc' => esc_html__('Default margin bottom is 58px. Insert just numeric value. Don\'t need to insert "px".', 'faded')
    ),
    'text_align' => array(
        'label' => esc_html__('Title Alignment', 'faded'),
        'type' => 'short-select',
        'value' => 'center',
        'desc' => esc_html__('Select your section title & sub Title alignment.', 'faded'),
        'choices' => array(
            'left' => 'Left Align',
            'center' => 'Center Align',
            'right' => 'Right Align'
        )
    ),
    'section_subtitle' => array(
        'type' => 'textarea',
        'label' => esc_html__('Sub Title', 'faded'),
        'desc' => esc_html__('Insert your section Sub title text here.', 'faded')
    ),
    'sub_title_color' => array(
        'label' => esc_html__('Sub Title Color', 'faded'),
        'desc' => esc_html__('Insert your section sub title color. Default color is #b89841.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'sub_font_size' => array(
        'label' => esc_html__('Font Size', 'faded'),
        'desc' => esc_html__('Insert your section sub title Font size. Default font size 16px. Don\'t need to insert "px".', 'faded'),
        'type' => 'text',
        'value' => ''
    ),
    'sub_margin_bottom' => array(
        'type' => 'text',
        'label' => esc_html__('Margin Bottom', 'faded'),
        'desc' => esc_html__('Insert section sub title margin bottom. Default margin bottom is 30px. Don\'t need to insert "px".', 'faded')
    ),
);

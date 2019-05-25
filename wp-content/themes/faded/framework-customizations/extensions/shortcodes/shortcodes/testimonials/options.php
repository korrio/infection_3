<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'testimonials' => array(
        'label' => esc_html__('Testimonials', 'faded'),
        'popup-title' => esc_html__('Add/Edit Testimonial', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your Testimonials.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=author_name}}',
        'popup-options' => array(
            'testi_img' => array(
                'label' => esc_html__('Image', 'faded'),
                'desc' => esc_html__('Upload Image.', 'faded'),
                'type' => 'upload',
            ),
            'testi_icon' => array(
                'type' => 'icon',
                'label' => esc_html__('Choose an Icon', 'faded'),
                'set' => 'dt_icon_set',
            ),
            'testi_icon_color' => array(
                'label' => esc_html__('Icon Font Color', 'faded'),
                'desc' => esc_html__('Insert your icon font color. Default color is #4776e6.', 'faded'),
                'type' => 'color-picker',
                'value' => ''
            ),
            'content' => array(
                'label' => esc_html__('Content', 'faded'),
                'desc' => esc_html__('Enter the testimonial content here', 'faded'),
                'type' => 'textarea',
                'teeny' => true
            ),
            'cnt_font_color' => array(
                'label' => esc_html__('content Font Color', 'faded'),
                'desc' => esc_html__('Insert your content font color. Default color is #666666.', 'faded'),
                'type' => 'color-picker',
                'value' => ''
            ),
            'author_name' => array(
                'label' => esc_html__('Client Name', 'faded'),
                'desc' => esc_html__('Enter the Name of the Person who is write content', 'faded'),
                'type' => 'text'
            ),
            'author_font_size' => array(
                'label' => esc_html__('Author Font Size', 'faded'),
                'desc' => esc_html__('Insert your author name font size. Default font size 14px. Don\'t need to insert "px".', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'aut_font_color' => array(
                'label' => esc_html__('Client Font Color', 'faded'),
                'desc' => esc_html__('Insert your author font color. Default color is #666666.', 'faded'),
                'type' => 'color-picker',
                'value' => ''
            )
        )
    )
);

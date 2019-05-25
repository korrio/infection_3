<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'section_template' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'section_types' => array(
                'label' => esc_html__('Section Template', 'faded'),
                'type' => 'select',
                'choices' => array(
                    '0'=>   esc_html__('Default','faded'),
                    '1' => esc_html__('Overview Section', 'faded'),
                    '2' => esc_html__('Step Work Section', 'faded'),
                    '3' => esc_html__('Features Section', 'faded'),
                    '4' => esc_html__('Screenshots Section', 'faded'),
                    '5' => esc_html__('Video Section', 'faded'),
                    '6' => esc_html__('Testimonial Section', 'faded'),
                    '7' => esc_html__('Team Section', 'faded'),
                    '8' => esc_html__('Pricing Section', 'faded'),
                    '9' => esc_html__('Faq Section', 'faded'),
                    '10' => esc_html__('Blog Section', 'faded'),
                    '11' => esc_html__('Get App Section', 'faded'),
                    '12' => esc_html__('Contact Section', 'faded'),
                ),
                'desc' => esc_html__('Select template for this section', 'faded')
            )
        ),
        'show_borders' => false,
    ),
    'is_horizontal' => array(
            'label'        => esc_html__('Section horizontal', 'faded'),
            'type'         => 'switch',
            'desc' =>'Select if you wish to use angled or horizontal layout. YES means horizontal, while NO means angled.'
    ),
    'backgroud_gradient' => array(
        'label' => esc_html__( 'Background Gradient', 'faded' ),
        'type'  => 'gradient',
        'value' => array(
                'primary'   => '',
                'secondary' => '#8e54e9'
        ),
        'desc'  => esc_html__( 'Select background gradient colors if you want to use gradient colors on background.','faded' ),            
    ),
    'background_color' => array(
        'label' => esc_html__('Background Solid Color', 'faded'),
        'desc' => esc_html__('Select background color if you want to use single color on background.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'background_image' => array(
        'label' => esc_html__('Background Image', 'faded'),
        'desc' => esc_html__('Select background image if you want to use image on background', 'faded'),
        'type' => 'upload',
    ),
    'background_repeat' => array(
        'label' => esc_html__('Background Repeat (For Image Background)', 'faded'),
        'type' => 'short-select',
        'value' => 'no-repeat',
        'desc' => esc_html__('Select if you want to repeat background image.', 'faded'),
        'choices' => array(
            'no-repeat' => 'No Repeat',
            'repeat' => 'Repeat'
        ),
    ),
    'background_size' => array(
        'label' => esc_html__('Background Size', 'faded'),
        'type' => 'short-select',
        'value' => '',
        'desc' => esc_html__('Select Background size.', 'faded'),
        'choices' => array(
            '' => 'Auto',
            'cover' => 'Cover',
            '100% 100%' => '100% 100%'
        ),
    ),
    'background_position' => array(
        'label' => esc_html__('Background Position', 'faded'),
        'type' => 'short-select',
        'value' => '',
        'desc' => esc_html__('Select Background Position.', 'faded'),
        'choices' => array(
            '' => 'None',
            'left top' => 'left top',
            'left center' => 'left center',
            'left bottom' => 'left bottom',
            'right top' => 'right top',
            'right center' => 'right center',
            'right bottom' => 'right bottom',
            'center top' => 'center top',
            'center center' => 'center center',
            'center bottom' => 'center bottom'
        ),
    ),    
    'padding_top' => array(
        'label' => esc_html__('Padding Top', 'faded'),
        'desc' => esc_html__('Don\'t include "px" in your string. e.g "100"', 'faded'),
        'type' => 'text',
    ),
    'padding_bottom' => array(
        'label' => esc_html__('Padding Bottom', 'faded'),
        'desc' => esc_html__('No need to include "px" in your string. e.g "100"', 'faded'),
        'type' => 'text',
    ),
    'margin_top' => array(
        'label' => esc_html__('Margin Top', 'faded'),
        'desc' => esc_html__('No need to include "px" in your string. e.g "100"', 'faded'),
        'type' => 'text',
    ),
    'margin_bottom' => array(
        'label' => esc_html__('Margin Bottom', 'faded'),
        'desc' => esc_html__('No need to include "px" in your string. e.g "100"', 'faded'),
        'type' => 'text',
    ),
    'custom_class' => array(
        'label' => esc_html__('Custom Class', 'faded'),
        'desc' => esc_html__('Insert custom class name for extra css if you need.', 'faded'),
        'type' => 'text',
    ),
    'row_id'        => array(
        'type'      => 'text',
        'label'     => esc_html__('Section ID', 'faded'),
        'desc'      => esc_html__('ID attribute for element', 'faded')
    )
);

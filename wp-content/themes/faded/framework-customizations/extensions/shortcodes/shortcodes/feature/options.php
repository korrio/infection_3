<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'feature_img' => array(
        'label' => esc_html__('Feature Image', 'faded'),
        'desc' => esc_html__('Please chose feature image', 'faded'),
        'type' => 'upload',
    ),
    'feature' => array(
        'label' => esc_html__('Feature Items', 'faded'),
        'popup-title' => esc_html__('Add/Edit Feature Item', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your working items.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=title}}',
        'popup-options' => array(
            'icon' => array(
                'type' => 'icon',
                'label' => esc_html__('Choose an Icon', 'faded'),
                'set' => 'dt_icon_set',
            ),    
            'icon_gradient' => array(
                'label' => esc_html__('Icon Gradient', 'faded'),
                'type' => 'gradient',
                'value' => array(
                    'primary' => '',
                    'secondary' => '#ffffff'
                ),
                'desc' => esc_html__('Insert your icon gradient color.', 'faded'),

            ),
            'title' => array(
                'type' => 'text',
                'label' => esc_html__('Title', 'faded'),
            ),
            'title_color' => array(
                'label' => esc_html__('Title Color', 'faded'),
                'desc' => esc_html__('Insert your title color. Default color is #000.', 'faded'),
                'type' => 'color-picker',
                'value' => ''
            ),
            'title_font_size' => array(
                'label' => esc_html__('Font Size', 'faded'),
                'desc' => esc_html__('Insert your title font size. Default font size 24px. Don\'t need to insert "px".', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'title_font_weight' => array(
                'label' => esc_html__('Title Font Weight', 'faded'),
                'type' => 'short-select',
                'value' => '400',
                'desc' => esc_html__('Select your title font weight.', 'faded'),
                'choices' => array(
                    '100' => '100',
                    '300' => '300',
                    '400' => '400',
                    '700' => '700'
                )
            ),
            'content' => array(
                'type' => 'textarea',
                'label' => esc_html__('Content', 'faded'),
                'desc' => esc_html__('Enter the desired content', 'faded'),
                'reinit' => true,
            ),
            'cnt_color' => array(
                'label' => esc_html__('Content Color', 'faded'),
                'desc' => esc_html__('Insert your content color. Default color is #000.', 'faded'),
                'type' => 'color-picker',
                'value' => ''
            ),
            'cnt_font_size' => array(
                'label' => esc_html__('Content Font Size', 'faded'),
                'desc' => esc_html__('Insert your content font size. Default font size 14px. Don\'t need to insert "px".', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'text_align' => array(
                'label' => esc_html__('Alignment', 'faded'),
                'type' => 'short-select',
                'value' => 'center',
                'desc' => esc_html__('Select your feature box text aliginment', 'faded'),
                'choices' => array(
                    'left' => 'Left Alignment',
                    'center' => 'Center Alignment',
                    'right' => 'Right Alignment'
                ),
            ),
            'margin_top' => array(
                'type' => 'text',
                'label' => esc_html__('Margin Top', 'faded'),
                'desc' => esc_html__('Do you need margin in top. Please insert a number. Default margin 0.', 'faded')
            ),
            'margin_bottom' => array(
                'type' => 'text',
                'label' => esc_html__('Margin Bottom', 'faded'),
                'desc' => esc_html__('Do you need margin in Bottom. Please insert a number. Default margin 40px.', 'faded')
            ),
        ),    
    )
);

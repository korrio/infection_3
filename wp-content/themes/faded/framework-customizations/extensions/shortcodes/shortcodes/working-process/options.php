<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'working_pro' => array(
        'label' => esc_html__('Working Level', 'faded'),
        'popup-title' => esc_html__('Add/Edit Funfacts', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your working items.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=title}}',
        'popup-options' => array(
            'wk_img' => array(
                'label' => esc_html__('Work Image', 'faded'),
                'desc' => esc_html__('Please chose work image', 'faded'),
                'type' => 'upload',
            ),
            'count' => array(
                'type' => 'text',
                'label' => esc_html__('Count Number', 'faded'),
                'desc' => esc_html__('Enter Count Number', 'faded'),
            ),
            'title' => array(
                'type' => 'text',
                'label' => esc_html__('Title', 'faded'),
                'desc' => esc_html__('Insert your desire title', 'faded'),
                
            ),
            'title_color' => array(
                'label' => esc_html__('Title Color', 'faded'),
                'desc' => esc_html__('Insert your title color. Default color is #000.', 'faded'),
                'type' => 'color-picker',
                'value' => ''
            ),
            'title_font_size' => array(
                'label' => esc_html__('Font Size', 'faded'),
                'desc' => esc_html__('Insert your title Font size. Default font size 24px. Don\'t need to insert "px".', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'content' => array(
                'type' => 'textarea',
                'label' => esc_html__('Content', 'faded'),
                'desc' => esc_html__('Enter the usefull content', 'faded'),
            ),
            'cnt_font_size' => array(
                'label' => esc_html__('Content Font Size', 'faded'),
                'desc' => esc_html__('Insert your content Font size. Default font size 14px. Don\'t need to insert "px".', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'cnt_color' => array(
                'label' => esc_html__('Content Color', 'faded'),
                'desc' => esc_html__('Insert your content color. Default color is #000.', 'faded'),
                'type' => 'color-picker',
                'value' => ''
            ),
            'margin_top' => array(
                'type' => 'text',
                'label' => esc_html__('Margin Top', 'faded'),
                'desc' => esc_html__('Do you need margin in top. Please insert a number. Default margin 0.', 'faded')
            ),
            'margin_bottom' => array(
                'type' => 'text',
                'label' => esc_html__('Margin Bottom', 'faded'),
                'desc' => esc_html__('Do you need margin in Bottom. Please insert a number. Default margin 0px.', 'faded')
            ),
        )
    )
);

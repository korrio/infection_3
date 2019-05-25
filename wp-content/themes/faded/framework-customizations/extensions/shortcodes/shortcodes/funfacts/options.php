<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'is_icon_img_slector' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'icon_item' => array(
                'label' => esc_html__('Icon/Image', 'faded'),
                'type' => 'switch',
                'right-choice' => array(
                    'value' => '1',
                    'label' => esc_html__('Image', 'faded')
                ),
                'left-choice' => array(
                    'value' => '2',
                    'label' => esc_html__('Icon', 'faded')
                ),
                'value' => 'yes',
                'desc' => esc_html__('Please select your desiger element image or icon?', 'faded'),                
            )
        ),
        'choices' => array(
            '1' => array(
                'ovr_img' => array(
                    'label' => esc_html__('Overview Image', 'faded'),
                    'desc' => esc_html__('Upload your overview image with 40x64 resulation.', 'faded'),
                    'type' => 'upload',
                )
                
            ),
            
            '2' => array(
                'ovi_icon' => array(
                    'type' => 'icon',
                    'label' => esc_html__('Choose an Icon', 'faded'),
                    'set' => 'dt_icon_set',
                ),
                'icon_color' => array(
                    'label' => esc_html__('Icon Color', 'faded'),
                    'desc' => esc_html__('Insert your icon color. Default color is #4776e6.', 'faded'),
                    'type' => 'color-picker',
                    'value' => ''
                )
            )
        ),
        'show_borders' => false,
    ),
    
    'title' => array(
        'type' => 'text',
        'label' => esc_html__('Title', 'faded'),
    ),
    'title_color' => array(
        'label' => esc_html__('Title Color', 'faded'),
        'desc' => esc_html__('Insert your title color. Default color is #fff.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'font_size' => array(
        'label' => esc_html__('Title Font Size', 'faded'),
        'desc' => esc_html__('Insert your title Font size. Default font size 18px. Don\'t need to insert "px".', 'faded'),
        'type' => 'text',
        'value' => ''
    ),
    'title_font_weight' => array(
        'label' => esc_html__('Title Font Weight', 'faded'),
        'type' => 'short-select',
        'value' => '700',
        'desc' => esc_html__('Select your amount font weight.', 'faded'),
        'choices' => array(
            '100' => '100',
            '300' => '300',
            '400' => '400',
            '700' => '700'
        )
    ),
    'title_align' => array(
        'label' => esc_html__('Title Align', 'faded'),
        'type' => 'short-select',
        'value' => 'center',
        'desc' => esc_html__('Select your Title alignment.', 'faded'),
        'choices' => array(
            'left' => 'Left Align',
            'center' => 'Center Align',
            'right' => 'Right Align'
        ),
    ),
    'content' => array(
        'type' => 'textarea',
        'label' => esc_html__('Content', 'faded'),
        'desc' => esc_html__('Enter the usefull content', 'faded'),
    ),
    'cnt_color' => array(
        'label' => esc_html__('Content Color', 'faded'),
        'desc' => esc_html__('Insert your content color. Default color is #000.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'cnt_align' => array(
        'label' => esc_html__('Content Align', 'faded'),
        'type' => 'short-select',
        'value' => 'center',
        'desc' => esc_html__('Select your Content alignment.', 'faded'),
        'choices' => array(
            'left' => 'Left Align',
            'center' => 'Center Align',
            'right' => 'Right Align'
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
        'desc' => esc_html__('Do you need margin in Bottom. Please insert a number. Default margin 60px.', 'faded')
    )
);

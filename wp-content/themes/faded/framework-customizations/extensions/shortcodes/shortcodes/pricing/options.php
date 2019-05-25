<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'is_best_value' => array(
        'label' => esc_html__('Is Best Value', 'faded'),
        'type' => 'switch',
        'right-choice' => array(
            'value' => '1',
            'label' => esc_html__('Yes', 'faded')
        ),
        'left-choice' => array(
            'value' => '2',
            'label' => esc_html__('No', 'faded')
        ),
        'value' => '2',
        'desc' => esc_html__('Do you want to make this table Best value? If is it then please select "Yes".', 'faded'),
    ),
    'plan_name' => array(
        'label' => esc_html__('Plan Name', 'faded'),
        'type' => 'text',
        'desc' => esc_html__('Insert your plan name.', 'faded')
    ),
    'plan_text_color' => array(
        'label' => esc_html__('plan Font Color', 'faded'),
        'desc' => esc_html__('Insert your plan font color. Default color is #8e54e9.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'price_icon' => array(
        'type' => 'icon',
        'label' => esc_html__('Choose an Icon', 'faded'),
        'set' => 'dt_icon_set',
    ),
    'price_icon_color' => array(
        'label' => esc_html__('Icon Font Color', 'faded'),
        'desc' => esc_html__('Insert your icon font color. Default color is #8e54e9.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'currency' => array(
        'label' => esc_html__('Currency', 'faded'),
        'type' => 'text',
        'desc' => esc_html__('Insert your currency.', 'faded')
    ),
    'price' => array(
        'label' => esc_html__('Price', 'faded'),
        'type' => 'text',
        'desc' => esc_html__('Insert your Price amount.', 'faded')
    ),
    'price_text_color' => array(
        'label' => esc_html__('Price Font Color', 'faded'),
        'desc' => esc_html__('Insert your price font color. Default color is #8e54e9.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'period' => array(
        'label' => esc_html__('Price Period', 'faded'),
        'type' => 'text',
        'desc' => esc_html__('Insert your Price period.', 'faded')
    ),
    'price_list' => array(
        'label' => esc_html__('Table List Item', 'faded'),
        'popup-title' => esc_html__('Add/Edit List Item', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your price table list item.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=content}}',
        'popup-options' => array(
            'content' => array(
                'label' => esc_html__('List Item', 'faded'),
                'desc' => esc_html__('Enter list item text here', 'faded'),
                'type' => 'textarea',
                'teeny' => true
            ),
        )
    ),
    'label' => array(
        'label' => esc_html__('Choose Plan', 'faded'),
        'type' => 'text',
        'desc' => esc_html__('Insert your Price button label.', 'faded'),
        'value' => 'Order now'
    ),
    'label_color' => array(
        'label' => esc_html__('Label Text Color', 'faded'),
        'desc' => esc_html__('Insert your label text color. Default color is #8e54e9.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'label_bg_color' => array(
        'label' => esc_html__('Label Bg Color', 'faded'),
        'desc' => esc_html__('Insert your label bg color. Default color is #8e54e9.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'label_bg_gradient' => array(
        'label' => esc_html__( 'Label Bg Gradient', 'faded' ),
        'type'  => 'gradient',
        'value' => array(
                'primary'   => '',
                'secondary' => '#8e54e9'
        ),
        'desc'  => esc_html__( 'Please select your label backgound gradient color','faded' ),            
    ),
    'link' => array(
        'label' => esc_html__('Button Link', 'faded'),
        'type' => 'text',
        'desc' => esc_html__('Insert your Price button link.', 'faded'),
        'value' => '#'
    )
);

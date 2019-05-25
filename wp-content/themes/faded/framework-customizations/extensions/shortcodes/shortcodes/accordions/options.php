<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'accordion' => array(
        'type' => 'addable-popup',
        'label' => esc_html__('Accordion', 'faded'),
        'popup-title' => esc_html__('Add/Edit Tab', 'faded'),
        'desc' => esc_html__('Create your Accordion', 'faded'),
        'template' => '{{=acc_title}}',
        'popup-options' => array(
            'acc_title' => array(
                'type' => 'text',
                'label' => esc_html__('Accordion Title', 'faded')
            ),
            'acc_title_color' => array(
                'label' => esc_html__('Accordion title Color', 'faded'),
                'desc' => esc_html__('Insert your accordion title color', 'faded'),
                'type' => 'color-picker',
                'value' => ''
            ),
            'acc_content' => array(
                'label' => esc_html__('Content', 'faded'),
                'type' => 'wp-editor',
                'value' => '',
                'desc' => esc_html__('Insert your accordion content here.', 'faded'),
                'reinit' => true,
            ),
            'acc_content_color' => array(
                'label' => esc_html__('Accordion Content Color', 'faded'),
                'desc' => esc_html__('Insert your accordion content color', 'faded'),
                'type' => 'color-picker',
                'value' => ''
            ),
        ),
    )
);

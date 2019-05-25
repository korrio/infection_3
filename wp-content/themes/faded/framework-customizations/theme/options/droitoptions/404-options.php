<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    '404' => array(
        'title' => esc_html__('404 Settings', 'faded'),
        'type' => 'tab',
        'options' => array(
            'general-box' => array(
                'title' => esc_html__('404 Settings', 'faded'),
                'type' => 'box',
                'options' => array(
                    'four_heading' => array(
                        'label' => esc_html__('Heading', 'faded'),
                        'type' => 'text',
                        'value' => '404',
                        'desc' => esc_html__('404 heading text.', 'faded')
                    ),
                    'four_content' => array(
                        'label' => esc_html__('Content', 'faded'),
                        'type' => 'wp-editor',
                        'value' => 'The page you were looking for could not be found',
                        'desc' => esc_html__('Enter 404 page description text.', 'faded'),
                        'reinit' => true,
                    ),
                    'four_button_label' => array(
                        'label' => esc_html__('Button Label', 'faded'),
                        'desc' => esc_html__('Enter button label', 'faded'),
                        'type' => 'text',
                        'value' => 'Go To the home page'
                    ),
                    'four_button_link' => array(
                        'label' => esc_html__('Button Link', 'faded'),
                        'desc' => esc_html__('Enter link URL related to the button', 'faded'),
                        'type' => 'text',
                        'value' => '#'
                    )
                )
            ),
        )
    )
);

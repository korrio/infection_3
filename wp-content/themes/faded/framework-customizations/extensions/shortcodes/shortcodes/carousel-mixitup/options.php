<?php

if (!defined('FW')) {
    die('Forbidden');
}

/* options process */
$options = array(
    'post_per_page' => array(
        'label' => esc_html__('Number of Blog', 'faded'),
        'type' => 'text',
        'value' => '4',
        'desc' => esc_html__('How many blog do you want to show?', 'faded'),
    )
);

<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'api_settings' => array(
        'type' => 'tab',
        'title' => esc_html__('Api Settings', 'faded'),
        'options' => array(
            'gmap_key' => array(
                'title' => esc_html__('Gmap', 'faded'),
                'type' => 'tab',
                'options' => array(
                    'gmap_apikey' => array(
                        'type' => 'text',
                        'value' => 'AIzaSyBumN1FxU0vF8HVI_qy9yFlwcZ4Wop_RtY',
                        'label' => esc_html__(' Google Map Key', 'faded'),
                        'desc' => esc_html__('Enter Google Map API key. Default:key AIzaSyBumN1FxU0vF8HVI_qy9yFlwcZ4Wop_RtY', 'faded'),
                    )
                )
            ),
            'mailchimp' => array(
                'title' => esc_html__('Mail Chimp', 'faded'),
                'type' => 'tab',
                'options' => array(
                    'mailchimp_key' => array(
                        'type' => 'text',
                        'value' => '',
                        'label' => esc_html__('Mailchimp Shortcode', 'faded'),
                        'desc' => esc_html__('Enter your mailchimp shortcode here', 'faded'),
                    )
                )
            ),
        )
    )
);



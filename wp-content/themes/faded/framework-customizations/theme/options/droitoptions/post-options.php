<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'post_audio' => array(
        'title' => esc_html__('Audio', 'faded'),
        'type' => 'tab',
        'options' => array(
            'audio-box' => array(
                'title' => esc_html__('Audio', 'faded'),
                'type' => 'box',
                'options' => array(
                    'audio_src' => array(
                        'type' => 'textarea',
                        'label' => esc_html__('Audio Embed', 'faded'),
                        'desc' => 'Insert your audio iframe src here.',
                    ),
                )
            ),
        )
    ),
    'video' => array(
        'title' => esc_html__('Video', 'faded'),
        'type' => 'tab',
        'options' => array(
            'video-box' => array(
                'title' => esc_html__('Video', 'faded'),
                'type' => 'box',
                'options' => array(
                    'video_src' => array(
                        'type' => 'textarea',
                        'label' => esc_html__('Video Embed', 'faded'),
                        'desc' => 'Insert your video iframe src here.',
                    ),
                )
            ),
        )
    )
);

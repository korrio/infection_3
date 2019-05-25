<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'height' => array(
        'type' => 'text',
        'label' => esc_html__('Height', 'faded'),
        'desc' => esc_html__('Insert video height. Don\'t need to inser "PX". Default height trangle:940 and horizontal:768 of px.', 'faded')
    ),
    'video_src' => array(
        'type' => 'text',
        'label' => esc_html__('Video SRC', 'faded'),
        'desc' => esc_html__('Insert video src.', 'faded')
    ),
    'video_icon' => array(
        'type' => 'icon',
        'label' => esc_html__('Choose a video Icon', 'faded'),
        'set' => 'dt_icon_set',
    ),
    'video_icon_font_size' => array(
        'label' => esc_html__('Video Icon Font Size', 'faded'),
        'desc' => esc_html__('Insert your video icon font size. Default font size 36px. Don\'t need to insert "px".', 'faded'),
        'type' => 'text',
        'value' => ''
    ),
    'video_icon_border' => array(
        'label' => esc_html__('Video Icon border', 'faded'),
        'desc' => esc_html__('Insert your video icon border size, Default 2px solid #fff', 'faded'),
        'type' => 'text',
        'value' => ''
    ),
    'video_icon_color' => array(
        'label' => esc_html__('Video Icon Color', 'faded'),
        'desc' => esc_html__('Insert your icon color. Default color is #fff.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    
    'video_title' => array(
        'type' => 'text',
        'label' => esc_html__('Video Title', 'faded'),
        'desc' => esc_html__('Insert your video title here.', 'faded')
    ),
    'video_title_font_size' => array(
        'label' => esc_html__('Video Font Size', 'faded'),
        'desc' => esc_html__('Insert your video title font size. Default font size 48px. Don\'t need to insert "px".', 'faded'),
        'type' => 'text',
        'value' => ''
    ),
    'video_title_color' => array(
        'label' => esc_html__('Vidoe Title Color', 'faded'),
        'desc' => esc_html__('Insert your video title color. Default color is #fff.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'video_title_line_height' => array(
        'label' => esc_html__('Video Title Line Height', 'faded'),
        'desc' => esc_html__('Insert your video Line Height. Default line height 500', 'faded'),
        'type' => 'text',
        'value' => ''
    ),
    'video_subtitle' => array(
        'type' => 'text',
        'label' => esc_html__('Video Sub Title', 'faded'),
        'desc' => esc_html__('Insert your video sub title here.', 'faded')
    ),
    'video_subtitle_font_size' => array(
        'label' => esc_html__('Video Sub Title Font Size', 'faded'),
        'desc' => esc_html__('Insert your video sub title font size. Default font size 18px. Don\'t need to insert "px".', 'faded'),
        'type' => 'text',
        'value' => ''
    ),
    'video_subtitle_color' => array(
        'label' => esc_html__('Vidoe Sub Title Color', 'faded'),
        'desc' => esc_html__('Insert your video Sub title color. Default color is #fff.', 'faded'),
        'type' => 'color-picker',
        'value' => ''
    ),
    'margin_top' => array(
        'type' => 'text',
        'label' => esc_html__('Margin Top', 'faded'),
        'desc' => esc_html__('Insert video Margin top. Don\'t need to inser "PX". Default margin top is 0px.', 'faded')
    ),
    'margin_bottom' => array(
        'type' => 'text',
        'label' => esc_html__('Margin Bottom', 'faded'),
        'desc' => esc_html__('Insert video Margin bottom. Don\'t need to inser "PX". Default margin bottom is 0px.', 'faded')
    ),
);

<?php

if (!defined('FW'))
{
    die('Forbidden');
}
/*
 * color settings
 */
$options = array(
    'colorandstyle' => array(
        'title' => esc_html__('Color Style', 'faded'),
        'type' => 'tab',
        'options' => array(
            'colorandstyle-box' => array(
                'title' => esc_html__('Custom Color', 'faded'),
                'type' => 'box',
                'options' => array(
                    'custom_css' => array(
                        'label' => esc_html__('Custom CSS', 'faded'),
                        'type' => 'textarea',
                        'value' => ''
                    )
                )
            ),
            'faded_top_menu_color' => array(
                'label' => esc_html__('Top Menu Color', 'faded'),
                'type' => 'color-picker',
                'value' => '',
                'desc' => esc_html__('Choose top menu color. Default color is #fff.', 'faded'),
            ),
            'faded_sticky_menu' => array(
                'label' => esc_html__('Top Sticky Menu Color', 'faded'),
                'type' => 'color-picker',
                'value' => '',
                'desc' => esc_html__('Choose sticky menu color. Default color is #4776e6.', 'faded'),
            ),
            'primary_color' => array(
                'label' => esc_html__('Primary Solid Color', 'faded'),
                'type' => 'color-picker',
                'value' => '',
                'desc' => esc_html__('Choose primary color. Default color is #4776e6.', 'faded'),
            ),
            'primary_color_grd' => array(
                'label' => esc_html__('Primary Gradient Color', 'faded'),
                'type' => 'gradient',
                'value' => array(
                    'primary' => '',
                    'secondary' => '#8e54e9'
                ),
                'desc' => esc_html__('Choose primary gradient color', 'faded'),
            ),
            'ftitle_color' => array(
                'label' => esc_html__('Title Color', 'faded'),
                'type' => 'color-picker',
                'value' => '',
                'desc' => esc_html__('Choose Title color. Default color is #303030.', 'faded'),
            ),
            'body_colors' => array(
                'label' => esc_html__('Body Color', 'faded'),
                'type' => 'color-picker',
                'value' => '',
                'desc' => esc_html__('Choose body color. Default color is #606060', 'faded'),
            )
        )
    )
);

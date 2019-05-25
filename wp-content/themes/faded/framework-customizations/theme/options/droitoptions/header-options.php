<?php

if (!defined('FW'))
{
    die('Forbidden');
}
$options = array(
    'header' => array(
        'title' => esc_html__('Header Options', 'faded'),
        'type' => 'tab',
        'options' => array(
            'general-box' => array(
                'title' => esc_html__('Header Options', 'faded'),
                'type' => 'box',
                'options' => array(
                    'favicon' => array(
                        'label' => esc_html__('Favicon', 'faded'),
                        'desc' => esc_html__('Upload your favicon image', 'faded'),
                        'type' => 'upload'
                    ),
                    'header_menu' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'header_types' => array(
                                'label' => esc_html__('Select Menu', 'faded'),
                                'type' => 'select',
                                'choices' => array(
                                    '1' => esc_html__('One-page', 'faded'),
                                    '2' => esc_html__('Multi-page', 'faded'),
                                ),
                                'desc' => esc_html__('Please select menu depending on where you want to build a one-page or multi-page website', 'faded')
                            )
                        ),
                        'show_borders' => false,
                    ),
                    'is_getnow_btn' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'is_getnow_item' => array(
                                'label' => esc_html__('Is Get Now Button', 'faded'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => '1',
                                    'label' => esc_html__('Yes', 'faded')
                                ),
                                'left-choice' => array(
                                    'value' => '2',
                                    'label' => esc_html__('No', 'faded')
                                ),
                                'value' => '1',
                                'desc' => esc_html__('If you want to show "Get Now Button" option, please turn on this option and enter your contents', 'faded'),
                            )
                        ),
                        'choices' => array(
                            '1' => array(
                                'getnow_btntext' => array(
                                    'label' => esc_html__('Get Now Text', 'faded'),
                                    'type' => 'text',
                                    'value' => 'Get Now',
                                    'desc' => esc_html__('"Get now" text', 'faded'),
                                ),
                                'getnow_btnlink_url' => array(
                                    'label' => esc_html__('Get Now URL', 'faded'),
                                    'type' => 'text',
                                    'value' => '#',
                                    'desc' => esc_html__('Get now button url', 'faded'),
                                ),
                            ),
                        ),
                        'show_borders' => false,
                    ),
                    'is_horizontal_header' => array(
                        'label' => esc_html__('Header horizontal', 'faded'),
                        'type' => 'switch',
                        'desc' => 'Do you want to show header horizontal?'
                    ),
                    'falogo_options' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'value' => array(
                            'falogo' => '1',
                        ),
                        'picker' => array(
                            'falogo' => array(
                                'label' => esc_html__('Logo Options', 'faded'),
                                'type' => 'radio',
                                'choices' => array(
                                    '1' => esc_html__('Text Logo', 'faded'),
                                    '2' => esc_html__('Image Logo', 'faded')
                                ),
                                'desc' => esc_html__('Select your logo type.', 'faded'),
                            )
                        ),
                        'choices' => array(
                            '1' => array(
                                'falogo_text' => array(
                                    'type' => 'text',
                                    'label' => esc_html__('Logo Text', 'faded'),
                                    'value' => 'Faded'
                                ),
                                'falogo_color' => array(
                                    'label' => esc_html__('Logo Color', 'faded'),
                                    'type' => 'color-picker',
                                    'value' => '',
                                    'desc' => esc_html__('Choose your logo color. Default color is #FFFFFF.', 'faded'),
                                ),
                            ),
                            '2' => array(
                                'fa_outer_logo_img' => array(
                                    'label' => esc_html__('Main Logo', 'faded'),
                                    'desc' => esc_html__('Upload your main logo here.', 'faded'),
                                    'type' => 'upload',
                                ),
                                'fa_inner_logo_img' => array(
                                    'label' => esc_html__('Sticky Logo', 'faded'),
                                    'desc' => esc_html__('Upload your sticky logo here.', 'faded'),
                                    'type' => 'upload',
                                ),
                                'falogo_width' => array(
                                    'label'    => esc_html__('Logo Width', 'faded'),
                                    'desc'     => esc_html__('Insert your logo Width. Please don\'t insert px', 'faded'),
                                    'type'      => 'short-text',
                                    'help'      => esc_html__('Recommend logo width is: 112px', 'faded'),
                                ),
                                'falogo_height' => array(
                                    'label' => esc_html__('Logo Height', 'faded'),
                                    'desc' => esc_html__('Insert your logo height. Please don\'t insert px', 'faded'),
                                    'type' => 'short-text',
                                    'help'  => esc_html__('Recommended logo height is: 43px', 'faded'),
                                    'value' => '',
                                ),
                                'falogo_padding' => array(
                                    'label' => esc_html__('Logo Padding Top', 'faded'),
                                    'desc' => esc_html__('Insert your logo padding top. Default padding is 0px, Please don\'t insert px', 'faded'),
                                    'type' => 'short-text',
                                ),
                                'falogo_padding_bottom' => array(
                                    'label'         => esc_html__('Logo Padding Bottom', 'faded'),
                                    'desc'          => esc_html__('Insert your logo padding bottom. Default padding is 0px, Please don\'t insert px', 'faded'),
                                    'type'          => 'short-text',
                                ),
                                'falogo_padding_left'   => array(
                                    'label'         => esc_html__('Logo Padding Left', 'faded'),
                                    'desc'          => esc_html__('Insert your logo padding left. Default padding is 0px, Please don\'t insert px', 'faded'),
                                    'type'          => 'short-text',
                                ),
                                'falogo_padding_right'   => array(
                                    'label'             => esc_html__('Logo Padding Right', 'faded'),
                                    'desc'              => esc_html__('Insert your logo padding left. Default padding is 0px, Please don\'t insert px', 'faded'),
                                    'type'              => 'short-text',
                                )
                            ),
                        ),
                        'show_borders' => false,
                    )
                )
            ),
        )
    )
);

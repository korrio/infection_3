<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'loader' => array(
        'title' => esc_html__('Loader Settings', 'faded'),
        'type' => 'tab',
        'options' => array(
            'loader-box' => array(
                'title' => esc_html__('Loader Settings', 'faded'),
                'type' => 'box',
                'options' => array(
                    'loader_status' => array(
                        'label' => esc_html__('Loader Status', 'faded'),
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
                        'desc' => esc_html__('Do you want to show preloader?', 'faded'),
                    ),
                    'loaders' => array(
                        'label' => esc_html__('Loader Picker', 'faded'),
                        'type' => 'image-picker',
                        'value' => '1',
                        'desc' => esc_html__('Select your loader please.', 'faded'),
                        'choices' => array(
                            '1' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/1.png'
                                ),
                                'large' => array(),
                            ),
                            '2' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/2.png'
                                ),
                                'large' => array(),
                            ),
                            '3' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/3.png'
                                ),
                                'large' => array(),
                            ),
                            '4' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/4.png'
                                ),
                                'large' => array(),
                            ),
                            '5' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/5.png'
                                ),
                                'large' => array(),
                            ),
                            '6' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/6.png'
                                ),
                                'large' => array(),
                            ),
                            '7' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/7.png'
                                ),
                                'large' => array(),
                            ),
                            '8' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/8.png'
                                ),
                                'large' => array(),
                            ),
                            '9' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/9.png'
                                ),
                                'large' => array(),
                            ),
                            '10' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/10.png'
                                ),
                                'large' => array(),
                            ),
                            '11' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/11.png'
                                ),
                                'large' => array(),
                            ),
                            '12' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/12.png'
                                ),
                                'large' => array(),
                            ),
                            '13' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/13.png'
                                ),
                                'large' => array(),
                            ),
                            '14' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/14.png'
                                ),
                                'large' => array(),
                            ),
                            '15' => array(
                                'small' => array(
                                    'height' => 150,
                                    'src' => get_template_directory_uri() . '/theme-assets/images/option/loaders/15.png'
                                ),
                                'large' => array(),
                            )
                        ),
                    ),
                    'loarder_bg_color'  => array(
                        'type'          => 'color-picker',
                        'label'         => esc_html__('Loader Backgroud Color', 'faded'),
                        'desc'          => esc_html__('Loader Background color', 'faded'),
                    ),
                )
            ),
        )
    )
);

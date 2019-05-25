<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'blog' => array(
        'title' => esc_html__('Blog Settings', 'faded'),
        'type' => 'tab',
        'options' => array(
            'blog-box' => array(
                'title' => esc_html__('Blog Settings', 'faded'),
                'type' => 'box',
                'options' => array(
                    'blog_post_title' => array(
                        'label' => esc_html__('Blog Title', 'faded'),
                        'type' => 'text',
                        'value' => 'Blog list',
                        'desc' => esc_html__('Set title of your blog section (for one-page layout) or blog page (for multi-page layout)', 'faded'),
                    ),
                    'is_blog_breadcrumb' => array(
                        'label' => esc_html__('Breadcrumb Setting', 'faded'),
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
                        'desc' => esc_html__('Do you want to show breadcrumb?', 'faded'),
                    ),
                    'blog_breadcum_title' => array(
                        'type' => 'text',
                        'label' => esc_html__('Blog Breadcrumb Title', 'faded'),
                        'value' => '',
                        'desc' => esc_html__('Insert blog breadcumb title', 'faded')
                    ),                    
                    'posts_per_page' => array(
                        'label' => esc_html__('Post Per Page', 'faded'),
                        'type' => 'slider',
                        'value' => 6,
                        'desc' => esc_html__('How many post do you want to show in blog page?', 'faded'),
                    ),
                    'blog_get_app_footer' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'blog_get_app_item' => array(
                                'label' => esc_html__('Get App Settings', 'faded'),
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
                                'desc' => esc_html__('If you want to show "Get App" option, please turn on this option and setup your contents', 'faded'),
                            )
                        ),
                        'choices' => array(
                            '1' => array(
                                'blog_get_app_bg' => array(
                                    'label' => esc_html__('Get App Section BG', 'faded'),
                                    'desc' => esc_html__('Upload "Get App" section background image if you want.', 'faded'),
                                    'type' => 'upload',
                                ),
                                'blog_getapp_heading' => array(
                                    'label' => esc_html__('Get App Heading', 'faded'),
                                    'type' => 'text',
                                    'value' => 'Get app now',
                                    'desc' => esc_html__('"Get App" heading title', 'faded'),
                                ),
                                'blog_getapp_param' => array(
                                    'label' => esc_html__('Get App Content', 'faded'),
                                    'type' => 'textarea',
                                    'desc' => esc_html__('Enter "Get App" content', 'faded'),
                                ),
                                'blog_getapp_dwnload' => array(
                                    'label' => esc_html__('Download Buttons Title', 'faded'),
                                    'type' => 'text',
                                    'value' => 'Download Form',
                                    'desc' => esc_html__('Enter title for app download buttons from various stores', 'faded'),
                                ),
                                'blog_get_app_buttons' => array(
                                    'label' => esc_html__('Buttons', 'faded'),
                                    'popup-title' => esc_html__('Add/Edit Buttons', 'faded'),
                                    'desc' => esc_html__('Here you can add, remove and edit your Buttons.', 'faded'),
                                    'type' => 'addable-popup',
                                    'template' => '{{=head_title}}',
                                    'popup-options' => array(
                                        'head_title' => array(
                                            'label' => esc_html__('Button title', 'faded'),
                                            'desc' => esc_html__('Enter button title', 'faded'),
                                            'type' => 'text',
                                            'value' => ''
                                        ),
                                        'button_label' => array(
                                            'label' => esc_html__('Button Image', 'faded'),
                                            'desc' => esc_html__('Enter button image', 'faded'),
                                            'type' => 'upload',
                                            'value' => ''
                                        ),
                                        'button_link' => array(
                                            'label' => esc_html__('Button Link', 'faded'),
                                            'desc' => esc_html__('Enter link URL related to the button', 'faded'),
                                            'type' => 'text',
                                            'value' => '#'
                                        )
                                    ),
                                ),
                                'blog_get_app_right_bg' => array(
                                    'label' => esc_html__('Get Right Side Img', 'faded'),
                                    'desc' => esc_html__('Upload right side image for "Get App" section', 'faded'),
                                    'type' => 'upload',
                                ),
                            ),
                        ),
                        'show_borders' => false,
                    ),
                ),
            ),
        )
    )
);

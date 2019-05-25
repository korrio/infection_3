<?php

if (!defined('FW'))
{
    die('Forbidden');
}

$options = array(
    'pagegeneral' => array(
        'title' => esc_html__('Section Settings', 'faded'),
        'type' => 'tab',
        'options' => array(
            'pagegeneral-box' => array(
                'title' => esc_html__('Section Settings', 'faded'),
                'type' => 'box',
                'options' => array(
                    'section_status' => array(
                        'label' => esc_html__('Section or Page?', 'faded'),
                        'type' => 'switch',
                        'right-choice' => array(
                            'value' => 'yes',
                            'label' => esc_html__('Section', 'faded')
                        ),
                        'left-choice' => array(
                            'value' => 'no',
                            'label' => esc_html__('Page', 'faded')
                        ),
                        'value' => 'no',
                        'desc' => esc_html__('Do you want to make this page as a section in the home page? Change the status.', 'faded'),
                    ),
                    'menu_status' => array(
                        'label' => esc_html__('From Menu', 'faded'),
                        'type' => 'switch',
                        'right-choice' => array(
                            'value' => 'yes',
                            'label' => esc_html__('Enable', 'faded')
                        ),
                        'left-choice' => array(
                            'value' => 'no',
                            'label' => esc_html__('Disable', 'faded')
                        ),
                        'value' => 'yes',
                        'desc' => esc_html__('Do you want to enable(showing) or disable(not showing) this page from menu? Change the status.', 'faded'),
                    )
                )
            ),
        )
    ),
    'pagesettings'          => array(
        'title'             => esc_html__('Page Settings', 'faded'),
        'type'              => 'tab',
        'options'           => array(
            'pagesettings-box'        => array(
                'title'               => false,
                'type'                => 'tab',
                'options'             => array(
                    'custom-header'   => array(
                        'type'        => 'multi-picker',
                        'label'       => false,
                        'desc'        => false,
                        'picker'      => array(
                            'enable'    => array(
                                'label'     => esc_html__('Customize', 'faded'),
                                'type'      => 'switch',
                                'right-choice'  => array(
                                    'value'     => 'yes',
                                    'label'     => esc_html__('Enable', 'faded'),
                                ),
                                'left-choice'   => array(
                                    'value'     => 'no',
                                    'label'     => esc_html__('Disable', 'faded'),
                                ),
                                'value'       => 'yes',
                            )
                        ),
                        'choices'       => array(
                            'yes'       => array(
                                'header_title_and_breadcumbs' => array(
                                    'type'          => 'multi-picker',
                                    'label'         => false,
                                    'desc'          => false,
                                    'picker'        => array(
                                        'enable'     => array(
                                            'help'          => esc_html__('You can show and hide page title and breadcrumbs here', 'faded'),
                                            'type'          => 'switch',
                                            'label'         => esc_html__('Header title', 'faded'),
                                            'desc'         => esc_html__('Do you want to show page title and breadcumbs?', 'faded'),
                                            'left-choice'   => array(
                                                'value'     => 'yes',
                                                'label'     => esc_html__('Enable', 'faded'),
                                            ),
                                            'right-choice'  => array(
                                                'value'     => 'no',
                                                'label'     => esc_html__('Disable', 'faded'),
                                            ) 
                                        )
                                    ),
                                    'choices'       => array(
                                        'yes'       => array(
                                            'bread_crumb_title' => array(
                                                'label' => esc_html__('Breadcrumb section', 'faded'),
                                                'desc' => esc_html__('Please insert your breadcum title here', 'faded'),
                                                'type' => 'text',
                                                'value' => ''
                                            ),
                                            'page_title' => array(
                                                'type' => 'text',
                                                'label' => esc_html__('Custom Page Title', 'faded'),
                                                'value' => '',
                                                'desc' => esc_html__('You can insert a custom page title here for title section. ', 'faded')
                                            ),  
                                            'is_horizontal_header' => array(
                                                'label' => esc_html__('Header horizontal', 'faded'),
                                                'type' => 'switch',
                                                'desc' => esc_html__('Do you want to show header horizontal?', 'faded'),
                                                'left-choice'   => array(
                                                    'value'     => 'horizontal',
                                                    'label'     => esc_html__('Horizontal', 'faded'),
                                                ),
                                                'right-choice'  => array(
                                                    'value'     => 'vertical',
                                                    'label'     => esc_html__('Angle', 'faded'),
                                                )
                                            ),
                                        )
                                    )
                                ),

                            ),

                        )
                    ),
                )
            )
        )
    ),
);

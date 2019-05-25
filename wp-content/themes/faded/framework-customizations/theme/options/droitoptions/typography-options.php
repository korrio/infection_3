<?php if(!defined('FW')){
    die('Forbidden');
}

$options        = array(
    'fonts'     => array(
        'title'     => esc_html__('Typography', 'faded'),
        'type'      => 'tab',
        'options'   => array(
            'font_settings'     => array(
                'title'         => false,
                'type'          => 'box',
                'options'       => array(
                    'styling_settings' => array(
                        'title' => esc_html__('Typography Settings', 'faded'),
                        'type' => 'tab',
                        'options' => array(
                            'header-styling-box' => array(
                                'title' => false,
                                'type'  => 'box',
                                'options' => array(
                                    'typography-global' => array(
                                        'title' => esc_html__('Global Typography', 'faded'),
                                        'type'  => 'box',
                                        'options' => array(
                                            'menu_fonts'     => array(
                                                'label'     => esc_html__('Menu Font', 'faded'),
                                                'type'      => 'typography',
                                                'value'     => array(
                                                    'family'    => 'Roboto',
                                                    'style'     => '300',
                                                    'size'      => 14,
                                                ),
                                                'components'    => array(
                                                    'family'    => true,
                                                    'size'      => true,
                                                    'color'     => false,
                                                ),
                                                'default'       => esc_html__('this is default menu font', 'faded'),
                                            ),
                                            'heading_title' => array(
                                                'label' => esc_html__('Headling Title ', 'faded'),
                                                'type' => 'typography',
                                                'value' => array(
                                                    'family' => 'Roboto',
                                                    'style' => '700',
                                                ),
                                                'components' => array(
                                                    'family' => true,
                                                    'size' => false,
                                                    'color' => false
                                                ),
                                                'desc' => esc_html__('Main Heading Title. you can create heading from shortcode <b>special heading</b>.', 'faded'),
                                            ),
                                            'heading_subtitle' => array(
                                                'label' => esc_html__('Sub Heading Title', 'faded'),
                                                'type' => 'typography',
                                                'value' => array(
                                                    'family' => 'Roboto',
                                                    'style' => '700',
                                                ),
                                                'components' => array(
                                                    'family' => true,
                                                    'size' => false,
                                                    'color' => false
                                                ),
                                                'desc' => esc_html__('Main Heading sub Title. you can create heading from shortcode <b>special heading</b>.', 'faded'),
                                            ),
                                            'post_meta'         => array(
                                                'label'         => esc_html__('Post Meta', 'faded'),
                                                'type'          => 'typography',
                                                'value'         => array(
                                                    'family'        => 'Roboto',
                                                    'style'         => '700',
                                                    'size'          => 14,
                                                ),
                                                'components'        => array(
                                                    'family'        => true,
                                                    'size'          => true,
                                                    'color'         => false,
                                                ),
                                                'desc'          => esc_html__('Post meta style', 'faded'),
                                            ),
                                            'body_font' => array(
                                                'label' => esc_html__('Body Font', 'faded'),
                                                'type' => 'typography',
                                                'value' => array(
                                                    'family' => 'Roboto',
                                                    'style' => '300',
                                                ),
                                                'components' => array(
                                                    'family' => true,
                                                    'size' => false,
                                                    'color' => false
                                                ),
                                                'desc' => esc_html__('this is default body font .', 'faded'),
                                            ),

                                        ),
                                    ),
                                )
                            ),
                        ),
                    ),
                )
            )
        )
    )
);
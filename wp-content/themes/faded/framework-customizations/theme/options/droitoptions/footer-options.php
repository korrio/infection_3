<?php

if (!defined('FW')) {
    die('Forbidden');
}
$options = array(
    'footer' => array(
        'title' => esc_html__('Footer Settings', 'faded'),
        'type' => 'tab',
        'options' => array(
            'general-box' => array(
                'title' => esc_html__('Footer Settings', 'faded'),
                'type' => 'box',
                'options' => array(
                    'footer_bg' => array(
                        'label' => esc_html__('Background', 'faded'),
                        'desc' => esc_html__('Upload footer section background image if you want.', 'faded'),
                        'type' => 'upload',
                    ),
					'footer_bg_color' => array(
                        'label' => esc_html__('Background Color', 'faded'),
                        'desc' => esc_html__('Select bg color of footer. Default color is #4776e6.', 'faded'),
                        'type' => 'color-picker',
                        'value' => ''
                    ),
                    'footer_title' => array(
                        'type' => 'text',
                        'label' => esc_html__('Footer Title', 'faded'),
                        'desc' => esc_html__('Enter footer title.', 'faded')
                    ),
                    'title_color' => array(
                        'label' => esc_html__('Title Color', 'faded'),
                        'desc' => esc_html__('Select color of footer title. Default color is #000.', 'faded'),
                        'type' => 'color-picker',
                        'value' => ''
                    ),
                    'title_font_size' => array(
                        'label' => esc_html__('Title Font Size', 'faded'),
                        'desc' => esc_html__('Select footer title font size. No need to insert "px". Default font size is 46px.', 'faded'),
                        'type' => 'text',
                        'value' => ''
                    ),
                    'footer_subtitle' => array(
                        'type' => 'textarea',
                        'label' => esc_html__('Footer Text', 'faded'),
                        'desc' => esc_html__('Enter footer text.', 'faded')
                    ),
                    'footer_sub_title_color' => array(
                        'label' => esc_html__('Text Color', 'faded'),
                        'desc' => esc_html__('Enter footer text color. Default color is #b89841.', 'faded'),
                        'type' => 'color-picker',
                        'value' => ''
                    ),
                    'footer_sub_font_size' => array(
                        'label' => esc_html__('Text Font Size', 'faded'),
                        'desc' => esc_html__('Enter font size of  footer text. No need to insert "px". Default font size is 16px.', 'faded'),
                        'type' => 'text',
                        'value' => ''
                    ),
                    'site_info' => array(
                        'label' => esc_html__('Copyright Info', 'faded'),
                        'type' => 'wp-editor',
                        'value' => 'Copyright &copy; by <strong>Faded</strong> 2018. All right reserved.',
                        'desc' => esc_html__('Insert Copyright Info.', 'faded'),
                        'reinit' => true,
                    ),
                )
            ),
        )
    )
);

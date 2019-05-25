<?php

if (!defined('FW')) {
    die('Forbidden');
}

/* option processing */

$options = array(
    'sec_title' => array(
        'label' => esc_html__('Contact Title', 'faded'),
        'desc' => esc_html__('Insert contact title here.', 'faded'),
        'type' => 'text',
    ),
    'sec_desc' => array(
        'label' => esc_html__('Contact content', 'faded'),
        'desc' => esc_html__('Insert contact desc here.', 'faded'),
        'type' => 'textarea',
    ),
    'info_widget' => array(
        'label' => esc_html__('Info Widget', 'faded'),
        'popup-title' => esc_html__('Add/Edit Info Widget', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your Info Widgets. You can display 2, 3 or 4 widget.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=title}}',
        'popup-options' => array(
            'info_icon' => array(
                'type' => 'icon',
                'label' => esc_html__('Choose an Icon', 'faded'),
                'set' => 'dt_icon_set',
            ),
            'title' => array(
                'label' => esc_html__('Widget Title', 'faded'),
                'desc' => esc_html__('Insert widget title here.', 'faded'),
                'type' => 'text',
            ),
            'content' => array(
                'label' => esc_html__('Widget Content', 'faded'),
                'type' => 'textarea',
                'value' => '',
                'desc' => esc_html__('Insert your widget content.', 'faded'),
                'reinit' => true,
            ),
        )
    ),
    'is_social' => array(
        'label' => esc_html__('Social Info', 'faded'),
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
        'desc' => esc_html__('Do you want to show contact social icon bellow contact form? If is it then please select "Yes".', 'faded'),
    ),
    'contact_social' => array(
        'label' => esc_html__('Social Profile', 'faded'),
        'type' => 'addable-popup',
        'desc' => esc_html__('Insert your necessary social profile name', 'faded'),
        'template' => '{{=con_icon_name}}',
        'popup-options' => array(
            'con_icon_name' => array(
                'label' => esc_html__('Social Profile Name', 'faded'),
                'desc' => esc_html__('Insert your profile name', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'con_social_icon' => array(
                'label' => esc_html__('Social Icons', 'faded'),
                'desc' => esc_html__('Insert your Social icon.', 'faded'),
                'type' => 'icon',
                'set' => 'dt_icon_set'
            ),
            'con_social_icon_color' => array(
                'label' => esc_html__('Social Icon Color', 'faded'),
                'desc' => esc_html__('Insert your social icon color', 'faded'),
                'type' => 'color-picker',
                'value' => ''
            ),
            'con_social_link' => array(
                'label' => esc_html__('Social Link', 'faded'),
                'desc' => esc_html__('Insert your Social link.', 'faded'),
                'type' => 'text',
            )
        )
    )
);

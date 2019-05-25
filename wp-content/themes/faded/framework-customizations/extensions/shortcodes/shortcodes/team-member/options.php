<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'members' => array(
        'label' => esc_html__('Team Members', 'faded'),
        'popup-title' => esc_html__('Add/Edit Team Members', 'faded'),
        'desc' => esc_html__('Here you can add, remove and edit your Team Members.', 'faded'),
        'type' => 'addable-popup',
        'template' => '{{=name}}',
        'popup-options' => array(
            'image_team' => array(
                'label' => esc_html__('Member Image', 'faded'),
                'desc' => esc_html__('Either upload a new, or choose an existing image from your media library', 'faded'),
                'type' => 'upload'
            ),
            'name' => array(
                'label' => esc_html__('Member Name', 'faded'),
                'desc' => esc_html__('Name of the person', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'name_font_size' => array(
                'label' => esc_html__('Name Font Size', 'faded'),
                'desc' => esc_html__('Insert your name font size. Default font size 18px. Don\'t need to insert "px".', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'name_color' => array(
                'label' => esc_html__('Name Text Color', 'faded'),
                'desc' => esc_html__('Insert your name text color. Default color is #606060.', 'faded'),
                'type' => 'color-picker',
                'value' => ''
            ),
            'job' => array(
                'label' => esc_html__('Job Title', 'faded'),
                'desc' => esc_html__('Job title of the person.', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'job_font_size' => array(
                'label' => esc_html__('Job Font Size', 'faded'),
                'desc' => esc_html__('Insert your job font size. Default font size 14px. Don\'t need to insert "px".', 'faded'),
                'type' => 'text',
                'value' => ''
            ),
            'job_title_color' => array(
                'label' => esc_html__('Job Text Color', 'faded'),
                'desc' => esc_html__('Insert your job text color. Default color is #606060.', 'faded'),
                'type' => 'color-picker',
                'value' => ''
            ),
            'is_social' => array(
                'label' => esc_html__('Social On/Off', 'faded'),
                'type' => 'switch',
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => esc_html__('Yes', 'faded')
                ),
                'left-choice' => array(
                    'value' => 'no',
                    'label' => esc_html__('No', 'faded')
                ),
                'value' => 'yes',
                'desc' => esc_html__('If you want to show your social link, please select yes', 'faded'),
            ),
            'team_social' => array(
                'label' => esc_html__('Social Profile', 'faded'),
                'type' => 'addable-popup',
                'desc' => esc_html__('Insert your necessary social profile name', 'faded'),
                'template' => '{{=icon_name}}',
                'popup-options' => array(
                    'icon_name' => array(
                        'label' => esc_html__('Social Profile Name', 'faded'),
                        'desc' => esc_html__('Insert your profile name', 'faded'),
                        'type' => 'text',
                        'value' => ''
                    ),
                    'social_icon' => array(
                        'label' => esc_html__('Social Icons', 'faded'),
                        'desc' => esc_html__('Insert your Social icon.', 'faded'),
                        'type' => 'icon',
                        'set' => 'dt_icon_set'
                    ),
                    'social_link' => array(
                        'label' => esc_html__('Social Link', 'faded'),
                        'desc' => esc_html__('Insert your Social link.', 'faded'),
                        'type' => 'text',
                    )
                )
            )
        )
    )
);

<?php

/*
 * Child Theme Functions
 */

function faded_child_theme_enqueue_styles()
{

    $parent_style = 'faded-style'; // This is 'faded-style' for the faded theme.

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('faed-child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style), wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'faded_child_theme_enqueue_styles');

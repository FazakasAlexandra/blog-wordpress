<?php

function enqueueTestStyles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueueTestStyles');

/* function loadjs()
{
    wp_register_script('customScript', get_template_directory_uri() . '/js/script.js', '', 1, true);
    wp_enqueue_script('customScript');

}

add_action('wp_enqueue_scripts', 'loadjs'); */

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);

/* register_nav_menus(
    array(
        'top-menu' =>__('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu','theme'),
    ),
);
 */
<?php
function my_custom_theme_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add support for Block Patterns
    add_theme_support('block-patterns');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
    ));
}
add_action('after_setup_theme', 'my_custom_theme_setup');

function my_custom_theme_scripts() {
    wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
    wp_enqueue_script('my-custom-theme-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');

<?php
    function demo_theme_assets() {
        wp_enqueue_style('demo-style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'demo_theme_assets');

    function demo_theme_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_theme_support('editor-styles');
    add_theme_support('align-wide');
    add_editor_style('editor-style.css');

    register_nav_menus(array(
        'left-menu'   => __('Left Menu', 'demo-theme'),
        'footer-menu' => __('Footer Menu', 'demo-theme'),
    ));
    }
    add_action('after_setup_theme', 'demo_theme_setup');;



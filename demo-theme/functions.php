<?php
    function demo_theme_assets() {
        wp_enqueue_style('demo-style', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'demo_theme_assets');
    function demo_theme_setup() {
    register_nav_menus(array(
        'left-menu'  => __('Left Menu', 'demo-theme'),
        'footer-menu' => __('Footer Menu', 'demo-theme')
    ));
}
    add_action('after_setup_theme', 'demo_theme_setup');


<?php
function noah_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('menus');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('responsive-embeds');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'noah-theme'),
    ));
}
add_action('after_setup_theme', 'noah_theme_setup');

function noah_theme_scripts() {
    wp_enqueue_style('noah-theme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('noah-theme-assets', get_template_directory_uri() . '/assets/css/theme.css', array(), '1.0.0');
    wp_enqueue_script('noah-theme-script', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'noah_theme_scripts');

function noah_theme_register_elementor_locations() {
    if (function_exists('elementor_theme_do_location')) {
        add_theme_support('elementor');
    }
}
add_action('after_setup_theme', 'noah_theme_register_elementor_locations');

function noah_theme_menu_classes($classes, $item, $args) {
    if ($args->theme_location === 'primary') {
        $classes[] = 'menu-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'noah_theme_menu_classes', 10, 3);

function noah_theme_body_classes($classes) {
    if (function_exists('elementor_theme_do_location')) {
        $classes[] = 'elementor-enabled';
    }
    return $classes;
}
add_filter('body_class', 'noah_theme_body_classes');

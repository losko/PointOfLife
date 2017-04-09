<?php
/*
 * Included Scripts
 */
function bootstrap_script_enqueue() {

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/losko.css', array(), '1.0.0', 'all');

    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/losko.js', array(), '1.0.0', true );

    wp_enqueue_script('jquery-js', get_template_directory_uri().'/js/jquery.min.js', array(), '1.12.4', true);

    wp_enqueue_script('bootstrap-scripts', get_template_directory_uri().'/js/bootstrap.min.js', array(), '3.3.7', true);

}

add_action('wp_enqueue_scripts', 'bootstrap_script_enqueue');
/*
 * Activated Menus
 */
function losko_theme_setup (){

    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'losko_theme_setup');

/*
 * Theme Support Functions
 */

add_theme_support('custom-background');

$args = array(
    'flex-width'    => true,
    'width'         => 1,
    'flex-height'    => true,
    'height'        => 1,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);

add_theme_support('custom-header', $args);
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

/*
 * Sidebar Function
 */

function losko_widget_setup() {
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standart Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        )
    );
}
add_action('widgets_init','losko_widget_setup');
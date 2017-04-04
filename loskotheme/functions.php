<?php

function bootstrap_script_enqueue() {

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/losko.css', array(), '1.0.0', 'all');

    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/losko.js', array(), '1.0.0', true );

    wp_enqueue_script('bootstrap-scripts', get_template_directory_uri().'/js/bootstrap.min.js', array(), '3.3.7', true);

    wp_enqueue_script('jquery-js', get_template_directory_uri().'/js/jquery.min.js', array(), '1.12.4', true);

}
add_action('wp_enqueue_scripts', 'bootstrap_script_enqueue');

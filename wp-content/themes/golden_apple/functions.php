<?php

function load_stylesheets(){
   

   
   

    wp_register_style('slick', get_template_directory_uri() . '/app/libs/slick-1.8.1/slick/slick.css', array(), 1, 'all');
    wp_enqueue_style('slick');

    wp_register_style('slick_theme', get_template_directory_uri() . '/app/libs/slick-1.8.1/slick/slick-theme.css', array(), 1, 'all');
    wp_enqueue_style('slick_theme');

    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');

    wp_register_style('preloader', get_template_directory_uri() . '/app/scss/preloader.css', array(), 1, 'all');
    wp_enqueue_style('preloader');

    wp_register_style('main', get_template_directory_uri() . '/app/scss/main.css', array(), 1, 'all');
    wp_enqueue_style('main');

   

    wp_register_style('sport', get_template_directory_uri() . '/app/scss/sport.css', array(), 1, 'all');
    wp_enqueue_style('sport');

    wp_register_style('sport_type', get_template_directory_uri() . '/app/scss/sport_type.css', array(), 1, 'all');
    wp_enqueue_style('sport_type');

    wp_register_style('med', get_template_directory_uri() . '/app/scss/media.css', array(), 1, 'all');
    wp_enqueue_style('med');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function addjs(){

    wp_register_script('preloader', get_template_directory_uri() . '/app/js/preloader.js',array(),1,1,1);
    wp_enqueue_script('preloader');

    wp_register_script('slickmin', get_template_directory_uri() . '/app/libs/slick-1.8.1/slick/slick.min.js',array(),1,1,1);
    wp_enqueue_script('slickmin');

    wp_register_script('slick', get_template_directory_uri() . '/app/js/slick.js',array(),1,1,1);
    wp_enqueue_script('slick');

    wp_register_script('action', get_template_directory_uri() . '/app/js/action.js',array(),1,1,1);
    wp_enqueue_script('action');

    wp_register_script('animation', get_template_directory_uri() . '/app/js/animation.js',array(),1,1,1);
    wp_enqueue_script('animation');

    wp_register_script('sport', get_template_directory_uri() . '/app/js/sport_anim.js',array(),1,1,1);
    wp_enqueue_script('sport');

    wp_register_script('custom', get_template_directory_uri() . '/custom.js',array(),1,1,1);
    wp_enqueue_script('custom');
}
add_action( 'wp_enqueue_scripts', 'addjs');
add_theme_support('post-thumbnails');
add_image_size('sales',900,600,true);
add_image_size('additional',700,269,true);
add_image_size('trainer',500,500,true);














    



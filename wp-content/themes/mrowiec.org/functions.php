<?php
    // ---- configuration ----------------------------------
    global $_POST_TYPE; 

    $_POST_TYPE = array();
    $_POST_TYPE['portfolio'] = 'portfolio';
    $_POST_TYPE['photo'] = 'photo';
    $_POST_TYPE['blog'] = 'blog';


    function theme_css() {
        wp_enqueue_style( 'basic', get_template_directory_uri() . '/css/basic.css' );
        wp_enqueue_style( 'bxSlider', get_template_directory_uri() . '/css/jquery.bxslider.css' );
        wp_enqueue_style( 'colorbox', get_template_directory_uri() . '/css/colorbox.css' );
        wp_enqueue_style( 'font-ralewy', 'http://fonts.googleapis.com/css?family=Raleway' );
    }
    function theme_script() {
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js');
        wp_enqueue_script( 'bxSlider', get_template_directory_uri() . '/js/jquery.bxslider.min.js');
        wp_enqueue_script( 'colorbox', get_template_directory_uri() . '/js/jquery.colorbox-min.js');
        wp_enqueue_script( 'isotope-perfectmasonry', get_template_directory_uri() . '/js/jquery.isotope.perfectmasonry.js');
        wp_enqueue_script( 'basic', get_template_directory_uri() . '/js/basic.js');
    }

    add_action( 'wp_enqueue_scripts', 'theme_css' );
    add_action( 'wp_enqueue_scripts', 'theme_script' );

    add_theme_support( 'menu' );



<?php

add_action(
  'wp_enqueue_scripts',
  function () {
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('googleapis', 'https://fonts.googleapis.com');
    wp_enqueue_style('gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style('oswald', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');
    wp_enqueue_style('simplebox', get_template_directory_uri() . '/assets/simplebox.css');
    wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js' );
    
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'),'null', true);
    // wp_enqueue_script('simplebox_util.js', get_template_directory_uri() . '/assets/simplebox_util.js', array('jquery'),'null', true);
    // wp_enqueue_script('simplebox.js', get_template_directory_uri() . '/assets/simplebox.js', array('jquery'),'null', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'),'null', true);
  });

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '300' );

?>
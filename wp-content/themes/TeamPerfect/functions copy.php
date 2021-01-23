<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );
function google_fonts() {
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

// Load in our CSS
function TPrestaurant_enqueue_styles() {
  wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all' );
      wp_enqueue_style('bootstrap');


        wp_register_style('magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), false, 'all' );
        wp_enqueue_style('magnific');

 
        wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), false, 'all' );
        wp_enqueue_style('main');

}
add_action( 'wp_enqueue_scripts', 'TPrestaurant_enqueue_styles' );

// Load in our JS
function TPrestaurant_enqueue_scripts() {

  wp_enqueue_script( 'theme-js', get_stylesheet_directory_uri() . '/assets/js/theme.js', [], time(), true );

}
add_action( 'wp_enqueue_scripts', 'TPrestaurant_enqueue_scripts' );


// Register Menu Locations
register_nav_menus( [
  'main-menu' => esc_html__( 'Main Menu', 'TPrestaurant' ),
]);
/**
* Register Custom Navigation Walker
*/
function register_navwalker(){
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// Widgets 

add_theme_support( 'widgets' );

//Widgets footer 

function register_widget_areas() {

    register_sidebar( array(
      'name'          => 'Footer area one',
      'id'            => 'footer_area_one',
      'description'   => 'This widget area description',
      'before_widget' => '<section class="footer-area footer-area-one">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ));
  
    register_sidebar( array(
      'name'          => 'Footer area two',
      'id'            => 'footer_area_two',
      'description'   => 'This widget area description',
      'before_widget' => '<section class="footer-area footer-area-two">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ));
  
    register_sidebar( array(
      'name'          => 'Footer area three',
      'id'            => 'footer_area_three',
      'description'   => 'This widget area description',
      'before_widget' => '<section class="footer-area footer-area-three">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ));
  
    register_sidebar( array(
      'name'          => 'Footer area four',
      'id'            => 'footer_area_four',
      'description'   => 'This widget area description',
      'before_widget' => '<section class="footer-area footer-area-three">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ));
  
  }
  
  add_action( 'widgets_init', 'register_widget_areas' );














?>

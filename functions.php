<?php 

/*
 Theme function file
*/

// =====================================================================================
function wplearning_scripts() {
    wp_enqueue_style( 'load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' );
    wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
    wp_enqueue_style( 'dashicons');
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'wplearning-browse', get_template_directory_uri() . '/assets/js/browser.min.js');
    wp_enqueue_script( 'wplearning-breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js');
    wp_enqueue_script( 'wplearning-util', get_template_directory_uri() . '/assets/js/util.js');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'wplearning_scripts');

// =====================================================================================

function wplearning_theme_setup(){
    add_theme_support('custom-logo');

    add_theme_support('title-tag');
    
    add_theme_support( 'post-thumbnails' );
    
    add_image_size('home-featured', 276, 244, array('center', 'center'));

    add_image_size('single-post', 580, 272, array('center', 'center'));
        
    add_image_size('author-image', 65, 65, array('center', 'center')); 

    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary' => __('Primary Menu', 'wplearning'),
    ) );
}
add_action('after_setup_theme', 'wplearning_theme_setup');

// =====================================================================================

// Add Sidebar or Widgets
function wplearning_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'wplearning' ),
        'id'            => 'main-sidebar',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<section id="%1$s" class="box %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Home Banner', 'wplearning' ),
        'id'            => 'home-banner',
        'description'   => 'Banner Area on Homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Home Services', 'wplearning' ),
        'id'            => 'home-services',
        'description'   => 'Services Area on Homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer widgets 1', 'wplearning' ),
        'id'            => 'footer-widgets-1',
        'description'   => 'Footer Widgets 1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Footer widgets 2', 'wplearning' ),
        'id'            => 'footer-widgets-2',
        'description'   => 'Footer Widgets 2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Footer widgets 3', 'wplearning' ),
        'id'            => 'footer-widgets-3',
        'description'   => 'Footer Widgets 3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );
}

add_action('widgets_init', 'wplearning_widgets_init');
// =================================================================

// Portfoilio

require get_template_directory() .'/inc/portfolio.php';
require get_template_directory() .'/inc/plugins/kirki/kirki.php';
require get_template_directory() .'/inc/kirki-config.php';


// =================================================================


    



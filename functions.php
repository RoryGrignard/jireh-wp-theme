<?php

//Load Google font
function load_google_font() {    
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700', [], null); 
}   
add_action( 'wp_enqueue_scripts', 'load_google_font' );

//Load styles
function load_css() {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', array(), '5.2.0', 'all');
    wp_register_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css', array(), '1.9.1', 'all');
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootstrap-icons');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

//Load scripts<link rel="stylesheet" href="">
function load_js() {
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', array(), '5.2.0', true);
    wp_register_script( 'gsap-core', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), '3.10.4', true );
    wp_register_script( 'gsap-scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js', array(), '3.10.4', true );
    wp_register_script( 'gsap-scroll-to', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollToPlugin.min.js', array(), '3.10.4', true );
    wp_register_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

    wp_enqueue_script('bootstrap');
    wp_enqueue_script('gsap-core');
    wp_enqueue_script('gsap-scroll-trigger');
    wp_enqueue_script('gsap-scroll-to');
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'load_js');

//Theme options
add_theme_support('menus');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//Menus
register_nav_menus(
    array(
        'header-menu' => 'Header menu',
        'footer-menu' =>  'Footer menu'
    )
);

//Custom image sizes
add_image_size( 'component-hero-full-height', 1920, 860, true);
add_image_size( 'component-hero', 1920, 300, true);
add_image_size( 'single-hero', 610, 343, true);
add_image_size( 'archive-card', 510, 287, true);

//Register sidebars
function my_sidebars() {
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_title' => '<h4 class="sidebar__title">',
            'after-title' => '</h4>'
        )
    );
}
add_action('widgets_init', 'my_sidebars');

//FAQ post type
function faq_post_type() {

    $args = array(
        'labels' => array(
            'name' => 'FAQs',
            'singular_name' => 'FAQ'
        ),
        'menu_icon' => 'dashicons-info',
        //heirarchical = true ? page : post
        'heirarchical' => true,
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    );

    register_post_type('faq', $args);
}
add_action('init', 'faq_post_type');

//FAQ taxonomy
function faq_taxonomy() {

    $args = array(
        'labels' => array(
            'name' => 'Solar FAQs',
            'singular_name' => 'Solar FAQ'
        ),
        'public' => true,
        //heirarchical = true ? category : tag
        'heirarchical' => true,
    );

    register_taxonomy( 'solar', array('faq'), $args);

}
add_action('init', 'faq_taxonomy');

 //Add Next Page/Page Break Button to WYSIWYG
 add_filter( 'mce_buttons', 'my_add_next_page_button', 1, 2 ); // 1st row
 
 function my_add_next_page_button( $buttons, $id ){
     /* only add this for content editor */
     if ( 'content' != $id ) return $buttons;
     /* add next page after more tag button */
     array_splice( $buttons, 13, 0, 'wp_page' );
     return $buttons;
 }
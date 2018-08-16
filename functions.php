<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

register_sidebar(array(
    'name' => 'Footer Widget 1',
    'id'        => 'footer-1',
    'description' => 'First footer widget area',
    'before_widget' => '<div id="footer-widget1">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
    
    register_sidebar(array(
    'name' => 'Footer Widget 2',
    'id'        => 'footer-2',
    'description' => 'Second footer widget area',
    'before_widget' => '<div id="footer-widget2">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
    
    register_sidebar(array(
    'name' => 'Footer Widget 3',
    'id'        => 'footer-3',
    'description' => 'Third footer widget area',
    'before_widget' => '<div id="footer-widget3">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
?>
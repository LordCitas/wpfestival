<?php
/**
 * Dual Figma functions and definitions
 */

function dual_figma_scripts() {
    // Google Fonts
    wp_enqueue_style('dual-figma-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800;900&family=Roboto:wght@400;500;700&display=swap', array(), null);
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
    
    // Theme Stylesheet
    wp_enqueue_style('dual-figma-style', get_stylesheet_uri(), array('bootstrap'), wp_get_theme()->get('Version'));

    // Bootstrap JS
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
}
add_action('wp_enqueue_scripts', 'dual_figma_scripts');

function dual_figma_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'dual_figma_setup');

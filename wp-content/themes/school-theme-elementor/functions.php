<?php
/**
 * SchoolTheme Elementor functions and definitions
 *
 * @package SchoolTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

function school_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Custom Logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Register Navigation Menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Navigation', 'school-theme' ),
        'footer'  => esc_html__( 'Footer Navigation', 'school-theme' ),
    ) );

    // HTML5 Support
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Elementor Compatibility Support
    add_theme_support( 'elementor' );
}
add_action( 'after_setup_theme', 'school_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function school_theme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'school-theme-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Enqueue Tailwind CDN for rapid utility styling in templates & Elementor HTML widgets
    wp_enqueue_script( 'tailwindcss', 'https://cdn.tailwindcss.com', array(), '3.4.0', false );
}
add_action( 'wp_enqueue_scripts', 'school_theme_scripts' );

/**
 * Register Elementor Locations (Header, Footer, Single, Archive) for Elementor Pro
 */
function school_theme_register_elementor_locations( $elementor_theme_manager ) {
    $elementor_theme_manager->register_all_core_location();
}
add_action( 'elementor/theme/register_locations', 'school_theme_register_elementor_locations' );

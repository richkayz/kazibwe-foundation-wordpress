<?php
/**
 * Kazibwe Foundation School theme functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup.
 */
function kfs_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 250,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    add_theme_support( 'responsive-embeds' );

    register_nav_menus( array(
        'primary' => __( 'Main Navigation', 'kazibwe-foundation' ),
    ) );
}
add_action( 'after_setup_theme', 'kfs_theme_setup' );

/**
 * Elementor uses this width as its default content width.
 * Individual Elementor sections can still use full width.
 */
function kfs_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'kfs_content_width', 1200 );
}
add_action( 'after_setup_theme', 'kfs_content_width', 0 );

/**
 * Load the theme stylesheet and optional JavaScript.
 */
function kfs_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style(
        'kfs-main-style',
        get_stylesheet_uri(),
        array(),
        $theme_version
    );

    $script_path = get_template_directory() . '/assets/js/main.js';

    if ( file_exists( $script_path ) ) {
        wp_enqueue_script(
            'kfs-main-script',
            get_template_directory_uri() . '/assets/js/main.js',
            array(),
            $theme_version,
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'kfs_enqueue_assets' );

/**
 * Check whether the current page has been built with Elementor.
 * The PHP layout remains as a fallback until Elementor content is saved.
 */
function kfs_has_elementor_content() {
    if ( ! is_singular() ) {
        return false;
    }

    $post_id = get_queried_object_id();

    if ( ! $post_id ) {
        return false;
    }

    $edit_mode = get_post_meta( $post_id, '_elementor_edit_mode', true );
    $elementor_data = get_post_meta( $post_id, '_elementor_data', true );

    return ( 'builder' === $edit_mode && ! empty( $elementor_data ) );
}

/**
 * Render Elementor page content when the page has been built with Elementor.
 * Returns true when Elementor content was rendered.
 */
function kfs_render_elementor_content() {
    if ( ! kfs_has_elementor_content() ) {
        return false;
    }

    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content();
        }
    }

    return true;
}

/**
 * Elementor compatibility: allow Elementor Pro Theme Builder to take over
 * header/footer locations only when the relevant location is assigned.
 */
function kfs_register_elementor_locations( $elementor_theme_manager ) {
    if ( method_exists( $elementor_theme_manager, 'register_all_core_location' ) ) {
        $elementor_theme_manager->register_all_core_location();
    }
}
add_action( 'elementor/theme/register_locations', 'kfs_register_elementor_locations' );

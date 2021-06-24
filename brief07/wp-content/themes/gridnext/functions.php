<?php
/**
* GridNext functions and definitions.
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

define( 'GRIDNEXT_PROURL', 'https://themesdna.com/gridnext-pro-wordpress-theme/' );
define( 'GRIDNEXT_CONTACTURL', 'https://themesdna.com/contact/' );
define( 'GRIDNEXT_THEMEOPTIONSDIR', get_template_directory() . '/theme-framework/admin' );

// Add new constant that returns true if WooCommerce is active
define( 'GRIDNEXT_WOOCOMMERCE_ACTIVE', class_exists( 'WooCommerce' ) );

require_once( GRIDNEXT_THEMEOPTIONSDIR . '/customizer.php' );

/**
 * This function return a value of given theme option name from database.
 *
 * @since 1.0.0
 *
 * @param string $option Theme option to return.
 * @return mixed The value of theme option.
 */
function gridnext_get_option($option) {
    $gridnext_options = get_option('gridnext_options');
    if ((is_array($gridnext_options)) && (array_key_exists($option, $gridnext_options))) {
        return $gridnext_options[$option];
    }
    else {
        return '';
    }
}

function gridnext_is_option_set($option) {
    $gridnext_options = get_option('gridnext_options');
    if ((is_array($gridnext_options)) && (array_key_exists($option, $gridnext_options))) {
        return true;
    } else {
        return false;
    }
}

if ( ! function_exists( 'gridnext_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gridnext_setup() {
    
    global $wp_version;

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on GridNext, use a find and replace
     * to change 'gridnext' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'gridnext', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'gridnext-1200w-autoh-image', 1200, 9999, false );
        add_image_size( 'gridnext-1200w-660h-image', 1200, 660, true );
        add_image_size( 'gridnext-920w-autoh-image', 920, 9999, false );
        add_image_size( 'gridnext-920w-500h-image', 920, 500, true );
        add_image_size( 'gridnext-672w-autoh-image', 672, 9999, false );
        add_image_size( 'gridnext-672w-360h-image', 672, 360, true );
        add_image_size( 'gridnext-360w-autoh-image', 360, 9999, false );
        add_image_size( 'gridnext-360w-540h-image', 360, 540, true );
        add_image_size( 'gridnext-360w-480h-image', 360, 480, true );
        add_image_size( 'gridnext-360w-360h-image', 360, 360, true );
        add_image_size( 'gridnext-360w-270h-image', 360, 270, true );
        add_image_size( 'gridnext-360w-216h-image', 360, 216, true );
        add_image_size( 'gridnext-360w-180h-image', 360, 180, true );
        add_image_size( 'gridnext-100w-100h-image', 100, 100, true );
    }

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
    'primary' => esc_html__('Primary Menu', 'gridnext'),
    'secondary' => esc_html__('Secondary Menu', 'gridnext')
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    $markup = array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' );
    add_theme_support( 'html5', $markup );

    add_theme_support( 'custom-logo', array(
        'height'      => 37,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    // Support for Custom Header
    add_theme_support( 'custom-header', apply_filters( 'gridnext_custom_header_args', array(
    'default-image'          => '',
    'default-text-color'     => 'ffffff',
    'width'                  => 1920,
    'height'                 => 400,
    'flex-width'            => true,
    'flex-height'            => true,
    'wp-head-callback'       => 'gridnext_header_style',
    'uploads'                => true,
    ) ) );

    // Set up the WordPress core custom background feature.
    $background_args = array(
            'default-color'          => '191919',
            'default-image'          => '',
            'default-repeat'         => 'repeat',
            'default-position-x'     => 'left',
            'default-position-y'     => 'top',
            'default-size'     => 'auto',
            'default-attachment'     => 'fixed',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => 'admin_head_callback_func',
            'admin-preview-callback' => 'admin_preview_callback_func',
    );
    add_theme_support( 'custom-background', apply_filters( 'gridnext_custom_background_args', $background_args) );
    
    // Support for Custom Editor Style
    add_editor_style( 'css/editor-style.css' );

}
endif;
add_action( 'after_setup_theme', 'gridnext_setup' );

require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/layout-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/widgets-init.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/share-buttons.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/social-buttons.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/post-author-bio-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/postmeta-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/posts-navigation.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/menu-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/header-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/css-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/other-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/action-hooks.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/media-functions.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/functions/enqueue-scripts.php' );
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/custom.php' );
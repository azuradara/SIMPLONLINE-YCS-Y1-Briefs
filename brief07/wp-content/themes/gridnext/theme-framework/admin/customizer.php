<?php
/**
* GridNext Theme Customizer.
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! class_exists( 'WP_Customize_Control' ) ) {return NULL;}

require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/classes/class-customize-static-text-control.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/classes/class-customize-button-control.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/classes/class-customize-submit-control.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/classes/class-customize-recommended-plugins.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */

require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/getting-started.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/menu-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/header-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/posts-grid-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/singular-post-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/navigation-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/singular-page-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/social-profiles.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/share-buttons-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/footer-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/search-404-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/other-options.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/recommended-plugins.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/upgrade-to-pro.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */
require_once( trailingslashit( get_template_directory() ) . 'theme-framework/admin/options/sanitize-callbacks.php' ); /* phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound */

function gridnext_register_theme_customizer( $wp_customize ) {

    if(method_exists('WP_Customize_Manager', 'add_panel')):
    $wp_customize->add_panel('gridnext_main_options_panel', array( 'title' => esc_html__('Theme Options', 'gridnext'), 'priority' => 10, ));
    endif;

    $wp_customize->get_section( 'title_tagline' )->panel = 'gridnext_main_options_panel';
    $wp_customize->get_section( 'title_tagline' )->priority = 20;
    $wp_customize->get_section( 'header_image' )->panel = 'gridnext_main_options_panel';
    $wp_customize->get_section( 'header_image' )->priority = 26;
    $wp_customize->get_section( 'background_image' )->panel = 'gridnext_main_options_panel';
    $wp_customize->get_section( 'background_image' )->priority = 27;
    $wp_customize->get_section( 'colors' )->panel = 'gridnext_main_options_panel';
    $wp_customize->get_section( 'colors' )->priority = 40;
      
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
    $wp_customize->get_control( 'background_color' )->description = esc_html__('To change Background Color, need to remove background image first:- go to Appearance : Customize : Theme Options : Background Image', 'gridnext');

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector'        => '.gridnext-site-title a',
            'render_callback' => 'gridnext_customize_partial_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector'        => '.gridnext-site-description',
            'render_callback' => 'gridnext_customize_partial_blogdescription',
        ) );
    }

    gridnext_getting_started($wp_customize);
    gridnext_menu_options($wp_customize);
    gridnext_header_options($wp_customize);
    gridnext_posts_grid_options($wp_customize);
    gridnext_post_options($wp_customize);
    gridnext_navigation_options($wp_customize);
    gridnext_page_options($wp_customize);
    gridnext_social_profiles($wp_customize);
    gridnext_share_buttons_options($wp_customize);
    gridnext_footer_options($wp_customize);
    gridnext_search_404_options($wp_customize);
    gridnext_other_options($wp_customize);
    gridnext_recomm_plugin_options($wp_customize);
    gridnext_upgrade_to_pro($wp_customize);

}

add_action( 'customize_register', 'gridnext_register_theme_customizer' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function gridnext_customize_partial_blogname() {
    bloginfo( 'name' );
}
/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function gridnext_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

function gridnext_customizer_js_scripts() {
    wp_enqueue_script('gridnext-theme-customizer-js', get_template_directory_uri() . '/theme-framework/admin/js/customizer.js', array( 'jquery', 'customize-preview' ), NULL, true);
}
add_action( 'customize_preview_init', 'gridnext_customizer_js_scripts' );
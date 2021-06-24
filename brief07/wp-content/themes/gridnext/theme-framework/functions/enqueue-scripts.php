<?php
/**
* Enqueue scripts and styles
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_scripts() {
    wp_enqueue_style('gridnext-maincss', get_stylesheet_uri(), array(), NULL);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), NULL );
    wp_enqueue_style('gridnext-webfont', '//fonts.googleapis.com/css?family=Oswald:400,700|Frank+Ruhl+Libre:400,700|Pridi:400,700|Patua+One&amp;display=swap', array(), NULL);

    $gridnext_fitvids_active = FALSE;
    if ( gridnext_is_fitvids_active() ) {
        $gridnext_fitvids_active = TRUE;
    }
    if ( $gridnext_fitvids_active ) {
        wp_enqueue_script('fitvids', get_template_directory_uri() .'/assets/js/jquery.fitvids.min.js', array( 'jquery' ), NULL, true);
    }

    $gridnext_primary_menu_active = FALSE;
    if ( gridnext_is_primary_menu_active() ) {
        $gridnext_primary_menu_active = TRUE;
    }
    $gridnext_secondary_menu_active = FALSE;
    if ( gridnext_is_secondary_menu_active() ) {
        $gridnext_secondary_menu_active = TRUE;
    }

    $gridnext_sticky_header_active = TRUE;

    $gridnext_sticky_sidebar_active = TRUE;
    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $gridnext_sticky_sidebar_active = FALSE;
    }
    if ( is_404() ) {
        $gridnext_sticky_sidebar_active = FALSE;
    }
    if ( $gridnext_sticky_sidebar_active ) {
        wp_enqueue_script('ResizeSensor', get_template_directory_uri() .'/assets/js/ResizeSensor.min.js', array( 'jquery' ), NULL, true);
        wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() .'/assets/js/theia-sticky-sidebar.min.js', array( 'jquery' ), NULL, true);
    }

    wp_enqueue_script('gridnext-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), NULL, true );
    wp_enqueue_script('gridnext-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), NULL, true );
    wp_enqueue_script('gridnext-customjs', get_template_directory_uri() .'/assets/js/custom.js', array( 'jquery', 'imagesloaded' ), NULL, true);

    wp_localize_script( 'gridnext-customjs', 'gridnext_ajax_object',
        array(
            'ajaxurl' => esc_url_raw( admin_url( 'admin-ajax.php' ) ),
            'primary_menu_active' => $gridnext_primary_menu_active,
            'secondary_menu_active' => $gridnext_secondary_menu_active,
            'sticky_header_active' => $gridnext_sticky_header_active,
            'sticky_sidebar_active' => $gridnext_sticky_sidebar_active,
            'fitvids_active' => $gridnext_fitvids_active,
        )
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script('gridnext-html5shiv-js', get_template_directory_uri() .'/assets/js/html5shiv.js', array('jquery'), NULL, true);

    wp_localize_script('gridnext-html5shiv-js','gridnext_custom_script_vars',array(
        'elements_name' => esc_html__('abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video', 'gridnext'),
    ));
}
add_action( 'wp_enqueue_scripts', 'gridnext_scripts' );

/**
 * Enqueue IE compatible scripts and styles.
 */
function gridnext_ie_scripts() {
    wp_enqueue_script( 'respond', get_template_directory_uri(). '/assets/js/respond.min.js', array(), NULL, false );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'gridnext_ie_scripts' );

/**
 * Enqueue customizer styles.
 */
function gridnext_enqueue_customizer_styles() {
    wp_enqueue_style( 'gridnext-customizer-styles', get_template_directory_uri() . '/theme-framework/admin/css/customizer-style.css', array(), NULL );
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), NULL );
}
add_action( 'customize_controls_enqueue_scripts', 'gridnext_enqueue_customizer_styles' );
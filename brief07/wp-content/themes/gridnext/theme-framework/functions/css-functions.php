<?php
/**
* Css Classes Functions
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Category ids in post class
function gridnext_category_id_class($classes) {
    global $post;
    foreach((get_the_category($post->ID)) as $category) {
        $classes[] = 'wpcat-' . $category->cat_ID . '-id';
    }
    return apply_filters( 'gridnext_category_id_class', $classes );
}
add_filter('post_class', 'gridnext_category_id_class');


// Adds custom classes to the array of body classes.
function gridnext_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'gridnext-group-blog';
    }

    $classes[] = 'gridnext-theme-is-active';

    if ( get_header_image() ) {
        $classes[] = 'gridnext-header-image-active';
    }

    if ( has_custom_logo() ) {
        $classes[] = 'gridnext-custom-logo-active';
    }

    $classes[] = 'gridnext-layout-type-boxed';

    $classes[] = 'gridnext-masonry-inactive';

    $classes[] = 'gridnext-flexbox-grid';

    if ( !(is_singular()) ) {
        if ( gridnext_get_option('featured_nongrid_media_under_post_title') ) {
            $classes[] = 'gridnext-nongrid-media-under-title';
        }
    }

    if( is_single() ) {
        if ( gridnext_get_option('featured_media_under_post_title') ) {
            $classes[] = 'gridnext-single-media-under-title';
        }
    }
    if( is_page() ) {
        if ( gridnext_get_option('featured_media_under_page_title') ) {
            $classes[] = 'gridnext-single-media-under-title';
        }
    }

    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $classes[] = 'gridnext-layout-full-width';
    }

    if ( is_404() ) {
        $classes[] = 'gridnext-layout-full-width';
    }

    $classes[] = 'gridnext-header-full-active';

    if ( gridnext_get_option('hide_tagline') ) {
        $classes[] = 'gridnext-tagline-inactive';
    }

    if ( gridnext_is_primary_menu_active() ) {
        $classes[] = 'gridnext-primary-menu-active';
    } else {
        $classes[] = 'gridnext-primary-menu-inactive';
    }
    $classes[] = 'gridnext-primary-mobile-menu-active';

    if ( gridnext_is_secondary_menu_active() ) {
        $classes[] = 'gridnext-secondary-menu-active';
    } else {
        $classes[] = 'gridnext-secondary-menu-inactive';
    }
    $classes[] = 'gridnext-secondary-mobile-menu-active';

    $classes[] = 'gridnext-secondary-menu-before-header';


    if ( gridnext_is_social_buttons_active() ) {
        $classes[] = 'gridnext-social-buttons-active';
    } else {
        $classes[] = 'gridnext-social-buttons-inactive';
    }

    $classes[] = 'gridnext-table-css-active';

    return apply_filters( 'gridnext_body_classes', $classes );
}
add_filter( 'body_class', 'gridnext_body_classes' );
<?php
/**
* More Custom Functions
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_read_more_text() {
   $readmoretext = esc_html__( 'Continue Reading', 'gridnext' );
    if ( gridnext_get_option('read_more_text') ) {
            $readmoretext = gridnext_get_option('read_more_text');
    }
   return apply_filters( 'gridnext_read_more_text', $readmoretext );
}

// Change excerpt length
function gridnext_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 17;
    if ( gridnext_get_option('read_more_length') ) {
        $read_more_length = gridnext_get_option('read_more_length');
    }
    return apply_filters( 'gridnext_excerpt_length', $read_more_length );
}
add_filter('excerpt_length', 'gridnext_excerpt_length');

// Change excerpt more word
function gridnext_excerpt_more($more) {
    if ( is_admin() ) {
        return $more;
    }
    return apply_filters( 'gridnext_excerpt_more', '...' );
}
add_filter('excerpt_more', 'gridnext_excerpt_more');


if ( ! function_exists( 'wp_body_open' ) ) :
    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
     */
    function wp_body_open() { // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedFunctionFound
        /**
         * Triggered after the opening <body> tag.
         */
        do_action( 'wp_body_open' ); // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound
    }
endif;
<?php
/**
* Posts navigation functions
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'gridnext_wp_pagenavi' ) ) :
function gridnext_wp_pagenavi() {
    ?>
    <nav class="navigation posts-navigation gridnext-clearfix" role="navigation">
        <?php wp_pagenavi(); ?>
    </nav><!-- .navigation -->
    <?php
}
endif;

if ( ! function_exists( 'gridnext_posts_navigation' ) ) :
function gridnext_posts_navigation() {
    if ( !(gridnext_get_option('hide_posts_navigation')) ) {
        if ( function_exists( 'wp_pagenavi' ) ) {
            gridnext_wp_pagenavi();
        } else {
            if ( gridnext_get_option('posts_navigation_type') === 'normalnavi' ) {
                the_posts_navigation(array('prev_text' => esc_html__( 'Older posts', 'gridnext' ), 'next_text' => esc_html__( 'Newer posts', 'gridnext' )));
            } else {
                the_posts_pagination(array('mid_size' => 2, 'prev_text' => esc_html__( '&larr; Newer posts', 'gridnext' ), 'next_text' => esc_html__( 'Older posts &rarr;', 'gridnext' )));
            }
        }
    }
}
endif;

if ( ! function_exists( 'gridnext_post_navigation' ) ) :
function gridnext_post_navigation() {
    global $post;
    if ( !(gridnext_get_option('hide_post_navigation')) ) {
            the_post_navigation(array('prev_text' => esc_html__( '%title &rarr;', 'gridnext' ), 'next_text' => esc_html__( '&larr; %title', 'gridnext' )));
    }
}
endif;
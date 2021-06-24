<?php
/**
* Custom Hooks
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_before_header() {
    do_action('gridnext_before_header');
}

function gridnext_after_header() {
    do_action('gridnext_after_header');
}

function gridnext_before_main_content() {
    do_action('gridnext_before_main_content');
}
add_action('gridnext_before_main_content', 'gridnext_top_widgets', 20 );
add_action('gridnext_before_main_content', 'gridnext_top_left_right_widgets', 40 );

function gridnext_after_main_content() {
    do_action('gridnext_after_main_content');
}
add_action('gridnext_after_main_content', 'gridnext_bottom_widgets', 10 );

function gridnext_sidebar_one() {
    do_action('gridnext_sidebar_one');
}
add_action('gridnext_sidebar_one', 'gridnext_sidebar_one_widgets', 10 );

function gridnext_sidebar_two() {
    do_action('gridnext_sidebar_two');
}
add_action('gridnext_sidebar_two', 'gridnext_sidebar_two_widgets', 10 );

function gridnext_before_single_post() {
    do_action('gridnext_before_single_post');
}

function gridnext_before_single_post_title() {
    do_action('gridnext_before_single_post_title');
}

function gridnext_after_single_post_title() {
    do_action('gridnext_after_single_post_title');
}

function gridnext_top_single_post_content() {
    do_action('gridnext_top_single_post_content');
}

function gridnext_bottom_single_post_content() {
    do_action('gridnext_bottom_single_post_content');
}

function gridnext_after_single_post_content() {
    do_action('gridnext_after_single_post_content');
}

function gridnext_after_single_post() {
    do_action('gridnext_after_single_post');
}

function gridnext_before_single_page() {
    do_action('gridnext_before_single_page');
}

function gridnext_before_single_page_title() {
    do_action('gridnext_before_single_page_title');
}

function gridnext_after_single_page_title() {
    do_action('gridnext_after_single_page_title');
}

function gridnext_after_single_page_content() {
    do_action('gridnext_after_single_page_content');
}

function gridnext_after_single_page() {
    do_action('gridnext_after_single_page');
}

function gridnext_before_comments() {
    do_action('gridnext_before_comments');
}

function gridnext_after_comments() {
    do_action('gridnext_after_comments');
}

function gridnext_before_footer() {
    do_action('gridnext_before_footer');
}

function gridnext_after_footer() {
    do_action('gridnext_after_footer');
}

function gridnext_before_nongrid_post_title() {
    do_action('gridnext_before_nongrid_post_title');
}

function gridnext_after_nongrid_post_title() {
    do_action('gridnext_after_nongrid_post_title');
}
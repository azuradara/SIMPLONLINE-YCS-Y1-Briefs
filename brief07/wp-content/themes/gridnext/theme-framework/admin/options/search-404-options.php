<?php
/**
* 404 options
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_search_404_options($wp_customize) {

    $wp_customize->add_section( 'gridnext_section_search_404', array( 'title' => esc_html__( 'Search and 404 Pages Options', 'gridnext' ), 'panel' => 'gridnext_main_options_panel', 'priority' => 340 ) );

    $wp_customize->add_setting( 'gridnext_options[no_search_heading]', array( 'default' => esc_html__( 'Nothing Found', 'gridnext' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_html', ) );

    $wp_customize->add_control( 'gridnext_no_search_heading_control', array( 'label' => esc_html__( 'No Search Results Heading', 'gridnext' ), 'description' => esc_html__( 'Enter a heading to display when no search results are found.', 'gridnext' ), 'section' => 'gridnext_section_search_404', 'settings' => 'gridnext_options[no_search_heading]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[no_search_results]', array( 'default' => esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'gridnext' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_html', ) );

    $wp_customize->add_control( 'gridnext_no_search_results_control', array( 'label' => esc_html__( 'No Search Results Message', 'gridnext' ), 'description' => esc_html__( 'Enter a message to display when no search results are found.', 'gridnext' ), 'section' => 'gridnext_section_search_404', 'settings' => 'gridnext_options[no_search_results]', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'gridnext_options[error_404_heading]', array( 'default' => esc_html__( 'Oops! That page can not be found.', 'gridnext' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_html', ) );

    $wp_customize->add_control( 'gridnext_error_404_heading_control', array( 'label' => esc_html__( '404 Error Page Heading', 'gridnext' ), 'description' => esc_html__( 'Enter the heading for the 404 error page.', 'gridnext' ), 'section' => 'gridnext_section_search_404', 'settings' => 'gridnext_options[error_404_heading]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridnext_options[error_404_message]', array( 'default' => esc_html__( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gridnext' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_html', ) );

    $wp_customize->add_control( 'gridnext_error_404_message_control', array( 'label' => esc_html__( 'Error 404 Message', 'gridnext' ), 'description' => esc_html__( 'Enter a message to display on the 404 error page.', 'gridnext' ), 'section' => 'gridnext_section_search_404', 'settings' => 'gridnext_options[error_404_message]', 'type' => 'textarea', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_404_search]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_404_search_control', array( 'label' => esc_html__( 'Hide Search Box from 404 Page', 'gridnext' ), 'section' => 'gridnext_section_search_404', 'settings' => 'gridnext_options[hide_404_search]', 'type' => 'checkbox', ) );

}
<?php
/**
* Header options
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_header_options($wp_customize) {

    // Header
    $wp_customize->add_section( 'gridnext_section_header', array( 'title' => esc_html__( 'Header Options', 'gridnext' ), 'panel' => 'gridnext_main_options_panel', 'priority' => 120 ) );

    $wp_customize->add_setting( 'gridnext_options[hide_tagline]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_tagline_control', array( 'label' => esc_html__( 'Hide Tagline', 'gridnext' ), 'section' => 'gridnext_section_header', 'settings' => 'gridnext_options[hide_tagline]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_header_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_header_content_control', array( 'label' => esc_html__( 'Hide Header Content', 'gridnext' ), 'section' => 'gridnext_section_header', 'settings' => 'gridnext_options[hide_header_content]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridnext_options[hide_header_image]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_header_image_control', array( 'label' => esc_html__( 'Hide Header Image from Everywhere', 'gridnext' ), 'section' => 'header_image', 'settings' => 'gridnext_options[hide_header_image]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridnext_options[remove_header_image_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_remove_header_image_link_control', array( 'label' => esc_html__( 'Remove Link from Header Image', 'gridnext' ), 'section' => 'header_image', 'settings' => 'gridnext_options[remove_header_image_link]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridnext_options[hide_header_image_details]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_header_image_details_control', array( 'label' => esc_html__( 'Hide both Title and Description from Header Image', 'gridnext' ), 'section' => 'header_image', 'settings' => 'gridnext_options[hide_header_image_details]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_header_image_description]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_header_image_description_control', array( 'label' => esc_html__( 'Hide Description from Header Image', 'gridnext' ), 'section' => 'header_image', 'settings' => 'gridnext_options[hide_header_image_description]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridnext_options[header_image_custom_text]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_header_image_custom_text_control', array( 'label' => esc_html__( 'Add Custom Title/Custom Description to Header Image', 'gridnext' ), 'section' => 'header_image', 'settings' => 'gridnext_options[header_image_custom_text]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[header_image_custom_title]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_html', ) );

    $wp_customize->add_control( 'gridnext_header_image_custom_title_control', array( 'label' => esc_html__( 'Header Image Custom Title', 'gridnext' ), 'section' => 'header_image', 'settings' => 'gridnext_options[header_image_custom_title]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridnext_options[header_image_custom_description]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_html', ) );

    $wp_customize->add_control( 'gridnext_header_image_custom_description_control', array( 'label' => esc_html__( 'Header Image Custom Description', 'gridnext' ), 'section' => 'header_image', 'settings' => 'gridnext_options[header_image_custom_description]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridnext_options[header_image_destination]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridnext_header_image_destination_control', array( 'label' => esc_html__( 'Header Image Destination URL', 'gridnext' ), 'description' => esc_html__( 'Enter the URL a visitor should go when he/she click on the header image. If you did not enter a URL below, header image will be linked to the homepage of your website.', 'gridnext' ), 'section' => 'header_image', 'settings' => 'gridnext_options[header_image_destination]', 'type' => 'text' ) );

}
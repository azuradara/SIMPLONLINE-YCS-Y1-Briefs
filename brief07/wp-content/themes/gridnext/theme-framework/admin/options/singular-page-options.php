<?php
/**
* Page options
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_page_options($wp_customize) {

    $wp_customize->add_section( 'gridnext_section_page', array( 'title' => esc_html__( 'Page Options', 'gridnext' ), 'panel' => 'gridnext_main_options_panel', 'priority' => 190 ) );

    $wp_customize->add_setting( 'gridnext_options[thumbnail_link_page]', array( 'default' => 'yes', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_yes_no' ) );

    $wp_customize->add_control( 'gridnext_thumbnail_link_page_control', array( 'label' => esc_html__( 'Featured Image Link', 'gridnext' ), 'description' => esc_html__('Do you want the featured image in a page to be linked to its page?', 'gridnext'), 'section' => 'gridnext_section_page', 'settings' => 'gridnext_options[thumbnail_link_page]', 'type' => 'select', 'choices' => array( 'yes' => esc_html__('Yes', 'gridnext'), 'no' => esc_html__('No', 'gridnext') ) ) );

    $wp_customize->add_setting( 'gridnext_options[hide_page_thumbnail]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_page_thumbnail_control', array( 'label' => esc_html__( 'Hide Featured Image from Single Page', 'gridnext' ), 'section' => 'gridnext_section_page', 'settings' => 'gridnext_options[hide_page_thumbnail]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[featured_media_under_page_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_featured_media_under_page_title_control', array( 'label' => esc_html__( 'Move Featured Image to Bottom of Page Title', 'gridnext' ), 'section' => 'gridnext_section_page', 'settings' => 'gridnext_options[featured_media_under_page_title]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_page_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_page_title_control', array( 'label' => esc_html__( 'Hide Page Header from Single Page', 'gridnext' ), 'section' => 'gridnext_section_page', 'settings' => 'gridnext_options[hide_page_title]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[remove_page_title_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_remove_page_title_link_control', array( 'label' => esc_html__( 'Remove Link from Single Page Title', 'gridnext' ), 'section' => 'gridnext_section_page', 'settings' => 'gridnext_options[remove_page_title_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_page_date]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_page_date_control', array( 'label' => esc_html__( 'Hide Posted Date from Single Page', 'gridnext' ), 'section' => 'gridnext_section_page', 'settings' => 'gridnext_options[hide_page_date]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_page_author]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_page_author_control', array( 'label' => esc_html__( 'Hide Page Author from Single Page', 'gridnext' ), 'section' => 'gridnext_section_page', 'settings' => 'gridnext_options[hide_page_author]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_page_comments]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_page_comments_control', array( 'label' => esc_html__( 'Hide Comment Link from Single Page', 'gridnext' ), 'section' => 'gridnext_section_page', 'settings' => 'gridnext_options[hide_page_comments]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_page_edit]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_page_edit_control', array( 'label' => esc_html__( 'Hide Edit Link from Single Page', 'gridnext' ), 'section' => 'gridnext_section_page', 'settings' => 'gridnext_options[hide_page_edit]', 'type' => 'checkbox', ) );

}
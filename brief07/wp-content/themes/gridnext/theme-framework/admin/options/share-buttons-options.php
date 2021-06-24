<?php
/**
* Share Button options
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_share_buttons_options($wp_customize) {

    $wp_customize->add_section( 'gridnext_section_share', array( 'title' => esc_html__( 'Share Buttons Options', 'gridnext' ), 'panel' => 'gridnext_main_options_panel', 'priority' => 260 ) );

    $wp_customize->add_setting( 'gridnext_options[hide_share_buttons_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_share_buttons_home_control', array( 'label' => esc_html__( 'Hide Share Buttons from Posts Summaries', 'gridnext' ), 'section' => 'gridnext_section_share', 'settings' => 'gridnext_options[hide_share_buttons_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_share_text_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_share_text_home_control', array( 'label' => esc_html__( 'Hide Share Text from Posts Summaries', 'gridnext' ), 'section' => 'gridnext_section_share', 'settings' => 'gridnext_options[hide_share_text_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[share_text_home]', array( 'default' => esc_html__( 'Share:', 'gridnext' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_html', ) );

    $wp_customize->add_control( 'gridnext_share_text_home_control', array( 'label' => esc_html__( 'Share Text for Posts Summaries', 'gridnext' ), 'section' => 'gridnext_section_share', 'settings' => 'gridnext_options[share_text_home]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_share_twitter_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_share_twitter_home_control', array( 'label' => esc_html__( 'Hide Twitter Share Button from Posts Summaries', 'gridnext' ), 'section' => 'gridnext_section_share', 'settings' => 'gridnext_options[hide_share_twitter_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_share_facebook_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_share_facebook_home_control', array( 'label' => esc_html__( 'Hide Facebook Share Button from Posts Summaries', 'gridnext' ), 'section' => 'gridnext_section_share', 'settings' => 'gridnext_options[hide_share_facebook_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_share_pinterest_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_share_pinterest_home_control', array( 'label' => esc_html__( 'Hide Pinterest Share Button from Posts Summaries', 'gridnext' ), 'section' => 'gridnext_section_share', 'settings' => 'gridnext_options[hide_share_pinterest_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_share_linkedin_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_share_linkedin_home_control', array( 'label' => esc_html__( 'Hide Linkedin Share Button from Posts Summaries', 'gridnext' ), 'section' => 'gridnext_section_share', 'settings' => 'gridnext_options[hide_share_linkedin_home]', 'type' => 'checkbox', ) );

}
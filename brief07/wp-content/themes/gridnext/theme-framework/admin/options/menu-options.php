<?php
/**
* Menu options
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_menu_options($wp_customize) {

    $wp_customize->add_section( 'gridnext_section_menu_options', array( 'title' => esc_html__( 'Menu Options', 'gridnext' ), 'panel' => 'gridnext_main_options_panel', 'priority' => 100 ) );

    $wp_customize->add_setting( 'gridnext_options[primary_menu_text]', array( 'default' => esc_html__( 'Menu', 'gridnext' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridnext_primary_menu_text_control', array( 'label' => esc_html__( 'Primary Menu Mobile Text', 'gridnext' ), 'section' => 'gridnext_section_menu_options', 'settings' => 'gridnext_options[primary_menu_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridnext_options[disable_primary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_disable_primary_menu_control', array( 'label' => esc_html__( 'Disable Primary Menu', 'gridnext' ), 'section' => 'gridnext_section_menu_options', 'settings' => 'gridnext_options[disable_primary_menu]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[secondary_menu_text]', array( 'default' => esc_html__( 'Menu', 'gridnext' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridnext_secondary_menu_text_control', array( 'label' => esc_html__( 'Secondary Menu Mobile Text', 'gridnext' ), 'section' => 'gridnext_section_menu_options', 'settings' => 'gridnext_options[secondary_menu_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridnext_options[disable_menu_social_bar]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_disable_menu_social_bar_control', array( 'label' => esc_html__( 'Disable Secondary Menu + Social Area', 'gridnext' ), 'description' => esc_html__('If you checked this option, secondary menu and all buttons will disappear. There is no any effect from these options: "Disable Secondary Menu", "Hide Social Area", "Hide Search Button", "Show Login/Logout Button", "Show Random Post Button".', 'gridnext'), 'section' => 'gridnext_section_menu_options', 'settings' => 'gridnext_options[disable_menu_social_bar]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[disable_secondary_menu]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_disable_secondary_menu_control', array( 'label' => esc_html__( 'Disable Secondary Menu', 'gridnext' ), 'description' => esc_html__('This option has no effect if you have checked the option: "Disable Secondary Menu + Social Area".', 'gridnext'), 'section' => 'gridnext_section_menu_options', 'settings' => 'gridnext_options[disable_secondary_menu]', 'type' => 'checkbox', ) );

}
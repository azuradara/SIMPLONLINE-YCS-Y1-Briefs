<?php
/**
* Footer options
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_footer_options($wp_customize) {

    $wp_customize->add_section( 'gridnext_section_footer', array( 'title' => esc_html__( 'Footer Options', 'gridnext' ), 'panel' => 'gridnext_main_options_panel', 'priority' => 280 ) );

    $wp_customize->add_setting( 'gridnext_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_html', ) );

    $wp_customize->add_control( 'gridnext_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'gridnext' ), 'section' => 'gridnext_section_footer', 'settings' => 'gridnext_options[footer_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'gridnext' ), 'section' => 'gridnext_section_footer', 'settings' => 'gridnext_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

}
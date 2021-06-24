<?php
/**
* Other options
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_other_options($wp_customize) {

    $wp_customize->add_section( 'gridnext_section_other_options', array( 'title' => esc_html__( 'Other Options', 'gridnext' ), 'panel' => 'gridnext_main_options_panel', 'priority' => 600 ) );

    $wp_customize->add_setting( 'gridnext_options[disable_fitvids]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_disable_fitvids_control', array( 'label' => esc_html__( 'Disable FitVids.JS', 'gridnext' ), 'description' => esc_html__( 'You can disable fitvids.js script if you are not using videos on your website or if you do not want fluid width videos in your post content.', 'gridnext' ), 'section' => 'gridnext_section_other_options', 'settings' => 'gridnext_options[disable_fitvids]', 'type' => 'checkbox', ) );

}
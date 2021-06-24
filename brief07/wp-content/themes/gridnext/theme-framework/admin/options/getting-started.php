<?php
/**
* Getting started options
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_getting_started($wp_customize) {

    $wp_customize->add_section( 'gridnext_section_getting_started', array( 'title' => esc_html__( 'Getting Started', 'gridnext' ), 'description' => esc_html__( 'Thanks for your interest in GridNext! If you have any questions or run into any trouble, please visit us the following links. We will get you fixed up!', 'gridnext' ), 'panel' => 'gridnext_main_options_panel', 'priority' => 5, ) );

    $wp_customize->add_setting( 'gridnext_options[documentation]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new GridNext_Customize_Button_Control( $wp_customize, 'gridnext_documentation_control', array( 'label' => esc_html__( 'Documentation', 'gridnext' ), 'section' => 'gridnext_section_getting_started', 'settings' => 'gridnext_options[documentation]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => esc_url( 'https://themesdna.com/gridnext-wordpress-theme/' ), 'button_target' => '_blank', ) ) );

    $wp_customize->add_setting( 'gridnext_options[contact]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new GridNext_Customize_Button_Control( $wp_customize, 'gridnext_contact_control', array( 'label' => esc_html__( 'Contact Us', 'gridnext' ), 'section' => 'gridnext_section_getting_started', 'settings' => 'gridnext_options[contact]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => esc_url( 'https://themesdna.com/contact/' ), 'button_target' => '_blank', ) ) );

}
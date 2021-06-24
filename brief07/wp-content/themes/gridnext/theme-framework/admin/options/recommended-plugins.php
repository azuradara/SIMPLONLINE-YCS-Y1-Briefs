<?php
/**
* Recommended plugins options
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_recomm_plugin_options($wp_customize) {

    // Customizer Section: Recommended Plugins
    $wp_customize->add_section( 'gridnext_section_recommended_plugins', array( 'title' => esc_html__( 'Recommended Plugins', 'gridnext' ), 'panel' => 'gridnext_main_options_panel', 'priority' => 620 ));

    $wp_customize->add_setting( 'gridnext_options[recommended_plugins]', array( 'type' => 'option', 'capability' => 'install_plugins', 'sanitize_callback' => '__return_false' ) );

    $wp_customize->add_control( new GridNext_Customize_Recommended_Plugins( $wp_customize, 'gridnext_recommended_plugins_control', array( 'label' => esc_html__( 'Recommended Plugins', 'gridnext' ), 'section' => 'gridnext_section_recommended_plugins', 'settings' => 'gridnext_options[recommended_plugins]', 'type' => 'gridnext-recommended-wpplugins', 'capability' => 'install_plugins' ) ) );

}
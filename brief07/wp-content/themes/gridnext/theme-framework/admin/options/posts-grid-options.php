<?php
/**
* Posts Grid options
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridnext_posts_grid_options($wp_customize) {

    $wp_customize->add_section( 'gridnext_section_posts_grid', array( 'title' => esc_html__( 'Posts Grid Options', 'gridnext' ), 'panel' => 'gridnext_main_options_panel', 'priority' => 160 ) );

    $wp_customize->add_setting( 'gridnext_options[hide_posts_heading]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_posts_heading_control', array( 'label' => esc_html__( 'Hide HomePage Posts Heading', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[hide_posts_heading]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[posts_heading]', array( 'default' => esc_html__( 'Recent Posts', 'gridnext' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridnext_posts_heading_control', array( 'label' => esc_html__( 'HomePage Posts Heading', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[posts_heading]', 'type' => 'text', ) );


    $wp_customize->add_setting( 'gridnext_options[hide_thumbnail_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_thumbnail_home_control', array( 'label' => esc_html__( 'Hide Thumbnails of Featured Images from Posts Grid', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[hide_thumbnail_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_default_thumbnail]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_default_thumbnail_control', array( 'label' => esc_html__( 'Hide Default Thumbnail Image', 'gridnext' ), 'description' => esc_html__( 'The default thumbnail image is shown when there is no featured image is set.', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[hide_default_thumbnail]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[thumbnail_link_home]', array( 'default' => 'yes', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_yes_no' ) );

    $wp_customize->add_control( 'gridnext_thumbnail_link_home_control', array( 'label' => esc_html__( 'Thumbnails Links', 'gridnext' ), 'description' => esc_html__('Do you want thumbnails in the posts grid to be linked to their posts?', 'gridnext'), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[thumbnail_link_home]', 'type' => 'select', 'choices' => array( 'yes' => esc_html__('Yes', 'gridnext'), 'no' => esc_html__('No', 'gridnext') ) ) );


    $wp_customize->add_setting( 'gridnext_options[hide_post_title_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_post_title_home_control', array( 'label' => esc_html__( 'Hide Post Headers from Posts Grid', 'gridnext' ), 'description' => esc_html__('If you check this option, it will hide post titles and post author images(if author images are enabled).', 'gridnext'), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[hide_post_title_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[post_title_link_home]', array( 'default' => 'yes', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_yes_no' ) );

    $wp_customize->add_control( 'gridnext_post_title_link_home_control', array( 'label' => esc_html__( 'Posts Titles Links', 'gridnext' ), 'description' => esc_html__('Do you want post titles in the posts grid to be linked to their posts?', 'gridnext'), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[post_title_link_home]', 'type' => 'select', 'choices' => array( 'yes' => esc_html__('Yes', 'gridnext'), 'no' => esc_html__('No', 'gridnext') ) ) );


    $wp_customize->add_setting( 'gridnext_options[show_post_author_image_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_show_post_author_image_home_control', array( 'label' => esc_html__( 'Show Post Author Images on Posts Grid', 'gridnext' ), 'description' => esc_html__('This option has no effect if you have checked the option: "Hide Post Headers from Posts Grid".', 'gridnext'), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[show_post_author_image_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[author_image_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_author_image_link_control', array( 'label' => esc_html__( 'Link Author Image to Author Posts URL', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[author_image_link]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridnext_options[hide_post_author_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_post_author_home_control', array( 'label' => esc_html__( 'Hide Post Author Names from Posts Grid', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[hide_post_author_home]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridnext_options[hide_posted_date_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_posted_date_home_control', array( 'label' => esc_html__( 'Hide Posted Dates from Posts Grid', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[hide_posted_date_home]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridnext_options[hide_comments_link_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_comments_link_home_control', array( 'label' => esc_html__( 'Hide Comment Links from Posts Grid', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[hide_comments_link_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[comments_count_full_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_comments_count_full_home_control', array( 'label' => esc_html__( 'Display Comment Texts instead of Comments Counts on Posts Grid', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[comments_count_full_home]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridnext_options[hide_post_snippet]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_post_snippet_control', array( 'label' => esc_html__( 'Hide Post Snippets from Posts Grid', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[hide_post_snippet]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[read_more_length]', array( 'default' => 17, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_read_more_length' ) );

    $wp_customize->add_control( 'gridnext_read_more_length_control', array( 'label' => esc_html__( 'Auto Post Summary Length', 'gridnext' ), 'description' => esc_html__('Enter the number of words need to display in the post summary. Default is 20 words.', 'gridnext'), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[read_more_length]', 'type' => 'text' ) );


    $wp_customize->add_setting( 'gridnext_options[hide_read_more_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_read_more_button_control', array( 'label' => esc_html__( 'Hide Read More Buttons from Posts Grid', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[hide_read_more_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[read_more_text]', array( 'default' => esc_html__( 'Continue Reading', 'gridnext' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'gridnext_read_more_text_control', array( 'label' => esc_html__( 'Read More Text', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[read_more_text]', 'type' => 'text', ) );


    $wp_customize->add_setting( 'gridnext_options[hide_post_categories_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_post_categories_home_control', array( 'label' => esc_html__( 'Hide Post Categories from Posts Grid', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[hide_post_categories_home]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridnext_options[hide_post_tags_home]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_hide_post_tags_home_control', array( 'label' => esc_html__( 'Hide Post Tags from Posts Grid', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[hide_post_tags_home]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridnext_options[disable_posts_grid]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_disable_posts_grid_control', array( 'label' => esc_html__( 'Activate Non-Grid Posts', 'gridnext' ), 'description' => __( 'Check this option if you want to disable posts grid and display posts in normal way.', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[disable_posts_grid]', 'type' => 'checkbox', ) );


    $wp_customize->add_setting( 'gridnext_options[featured_nongrid_media_under_post_title]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridnext_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridnext_featured_nongrid_media_under_post_title_control', array( 'label' => esc_html__( 'Move Featured Image to Bottom of Non-Grid Post Title', 'gridnext' ), 'section' => 'gridnext_section_posts_grid', 'settings' => 'gridnext_options[featured_nongrid_media_under_post_title]', 'type' => 'checkbox', ) );

}
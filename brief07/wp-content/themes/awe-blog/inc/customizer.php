<?php
/**
 * Awe Blog Theme Customizer
 *
 * @package awe_blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function awe_blog_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    $awe_blog_options = awe_blog_theme_options();

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', [
            'selector' => '.site-title a',
            'render_callback' => 'awe_blog_customize_partial_blogname',
        ]);
        $wp_customize->selective_refresh->add_partial('blogdescription', [
            'selector' => '.site-description',
            'render_callback' => 'awe_blog_customize_partial_blogdescription',
        ]);
    }

    $wp_customize->add_panel('theme_options', [
        'title' => esc_html__('Theme Options', 'awe-blog'),
        'priority' => 2,
    ]);

    /* Header Section */
    $wp_customize->add_section('header_section', [
        'title' => esc_html__('Header Section', 'awe-blog'),
        'panel' => 'theme_options',
        'capability' => 'edit_theme_options',
    ]);

    $wp_customize->add_setting('awe_blog_theme_options[facebook]', [
        'default' => $awe_blog_options['facebook'],
        'sanitize_callback' => 'esc_url_raw',
        'type'              => 'option',
    ]);
    $wp_customize->add_control('awe_blog_theme_options[facebook]', [
        'label' => esc_html__('Facebook Link', 'awe-blog'),
        'type' => 'url',
        'section' => 'header_section',
        'settings' => 'awe_blog_theme_options[facebook]',
    ]);

    $wp_customize->add_setting('awe_blog_theme_options[twitter]', [
        'default' => $awe_blog_options['twitter'],
        'sanitize_callback' => 'esc_url_raw',
        'type'              => 'option',
    ]);
    $wp_customize->add_control('awe_blog_theme_options[twitter]', [
        'label' => esc_html__('Twitter Link', 'awe-blog'),
        'type' => 'url',
        'section' => 'header_section',
        'settings' => 'awe_blog_theme_options[twitter]',
    ]);


    $wp_customize->add_setting('awe_blog_theme_options[search_show]', [
        'type' => 'option',
        'default' => true,
        'default' => $awe_blog_options['search_show'],
        'sanitize_callback' => 'awe_blog_sanitize_checkbox',
    ]);
    $wp_customize->add_control(
        'awe_blog_theme_options[search_show]',
        [
            'label' => esc_html__('Show Search', 'awe-blog'),
            'type' => 'Checkbox',
            'priority' => 1,
            'section' => 'header_section',
        ]
    );

    /* Banner Section */

    $wp_customize->add_section('banner_section', [
        'title' => esc_html__('Banner Section', 'awe-blog'),
        'panel' => 'theme_options',
        'capability' => 'edit_theme_options',
    ]);

    $wp_customize->add_setting(
        'awe_blog_theme_options[awe_blog_slider_category]',
        [
            'type' => 'option',
            'sanitize_callback' => 'awe_blog_sanitize_select',
            'default' => $awe_blog_options['awe_blog_slider_category'],
        ]
    );

    $wp_customize->add_control(
        'awe_blog_theme_options[awe_blog_slider_category]',
        [
            'section' => 'banner_section',
            'type' => 'select',
            'choices' => awe_blog_get_categories_select(),
            'label' => esc_html__(
                'Select Category to show Slider Posts',
                'awe-blog'
            ),
            'description' => esc_html__(
                'Max 2 Posts will be shown from the selected Category in Free Version',
                'awe-blog'
            ),
            'settings' => 'awe_blog_theme_options[awe_blog_slider_category]',
            'priority' => 1,
        ]
    );
    //radio box sanitization function
    function awe_blog_sanitize_radio( $input, $setting ){

        //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
        $input = sanitize_key($input);

        //get the list of possible radio box options
        $choices = $setting->manager->get_control( $setting->id )->choices;

        //return input if valid or return default option
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

    }
    $wp_customize->add_section('below_banner_section', [
        'title' => esc_html__('Below Banner Section', 'awe-blog'),
        'panel' => 'theme_options',
        'capability' => 'edit_theme_options',
    ]);
    $wp_customize->add_setting(
        'awe_blog_theme_options[below_banner_category]',
        [
            'type' => 'option',
            'sanitize_callback' => 'awe_blog_sanitize_select',
            'default' => $awe_blog_options['below_banner_category'],
        ]
    );

    $wp_customize->add_control(
        'awe_blog_theme_options[below_banner_category]',
        [
            'section' => 'below_banner_section',
            'type' => 'select',
            'choices' => awe_blog_get_categories_select(),
            'label' => esc_html__('Select Category to show Posts', 'awe-blog'),
            'description' => esc_html__(
                'Max 4 Posts will be shown from the selected Category in Free Version',
                'awe-blog'
            ),
            'settings' => 'awe_blog_theme_options[below_banner_category]',
            'priority' => 1,
        ]
    );
    $wp_customize->add_setting( 'awe_blog_theme_options[image_type]', array(
        'capability' => 'edit_theme_options',
        'default' => 'fourcol',
        'sanitize_callback' => 'awe_blog_sanitize_radio',
        'default' => '1',
        'type' => 'option',
        ) );
    
        $wp_customize->add_control( 'awe_blog_theme_options[image_type]', array(
        'type' => 'radio',
        'section' => 'below_banner_section', 
        'label' =>esc_attr( __('Image Layout', 'awe-blog') ),
        'choices' => array(
            '1' => esc_attr( __('Long Image', 'awe-blog') ),
            '2' => esc_attr( __('Rectangle Image', 'awe-blog') ),
        ),
        ) );
    function awe_blog_sanitize_checkbox($input)
    {
        if (true === $input) {
            return 1;
        } else {
            return 0;
        }
    }

    $wp_customize->add_section('three_post_section', [
        'title' => esc_html__('Three Featured Posts Section ', 'awe-blog'),
        'panel' => 'theme_options',
        'capability' => 'edit_theme_options',
    ]);

    $wp_customize->add_setting(
        'awe_blog_theme_options[three_post_section_show]',
        [
            'type' => 'option',
            'default' => true,
            'default' => $awe_blog_options['three_post_section_show'],
            'sanitize_callback' => 'awe_blog_sanitize_checkbox',
        ]
    );

    $wp_customize->add_control(
        'awe_blog_theme_options[three_post_section_show]',
        [
            'label' => esc_html__('Show Section', 'awe-blog'),
            'type' => 'Checkbox',
            'priority' => 1,
            'section' => 'three_post_section',
        ]
    );
    $wp_customize->add_setting('awe_blog_theme_options[postid1]', [
        'type' => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('postid1', [
        'label' => esc_html__('Enter Post Id for First Post', 'awe-blog'),
        'type' => 'text',
        'section' => 'three_post_section',
        'settings' => 'awe_blog_theme_options[postid1]',
    ]);

    $wp_customize->add_setting('awe_blog_theme_options[postid2]', [
        'type' => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('postid2', [
        'label' => esc_html__('Enter Post Id for Second Post', 'awe-blog'),
        'type' => 'text',
        'section' => 'three_post_section',
        'settings' => 'awe_blog_theme_options[postid2]',
    ]);

    $wp_customize->add_setting('awe_blog_theme_options[postid3]', [
        'type' => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('postid3', [
        'label' => esc_html__('Enter Post Id for Third Post', 'awe-blog'),
        'type' => 'text',
        'section' => 'three_post_section',
        'settings' => 'awe_blog_theme_options[postid3]',
    ]);


    /* Blog Section */

    $wp_customize->add_section('blog_sidebar_section', [
        'title' => esc_html__('Siedbar Blog Section', 'awe-blog'),
        'panel' => 'theme_options',
        'capability' => 'edit_theme_options',
    ]);

    $wp_customize->add_setting(
        'awe_blog_theme_options[sidebar_blog_category]',
        [
            'default' => $awe_blog_options['sidebar_blog_category'],
            'type' => 'option',
            'sanitize_callback' => 'awe_blog_sanitize_select',
            'capability' => 'edit_theme_options',
        ]
    );

    $wp_customize->add_control(
        new awe_blog_Dropdown_Customize_Control(
            $wp_customize,
            'awe_blog_theme_options[sidebar_blog_category]',
            [
                'label' => esc_html__('Select Blog Posts Category', 'awe-blog'),
                'section' => 'blog_sidebar_section',
                'choices' => awe_blog_get_categories_select(),
                'settings' => 'awe_blog_theme_options[sidebar_blog_category]',
            ]
        )
    );


    /* Blog Section */

    $wp_customize->add_section('prefooter_section', [
        'title' => esc_html__('Prefooter Section', 'awe-blog'),
        'panel' => 'theme_options',
        'capability' => 'edit_theme_options',
    ]);

    $wp_customize->add_setting('awe_blog_theme_options[show_prefooter]', [
        'type' => 'option',
        'default' => true,
        'default' => $awe_blog_options['show_prefooter'],
        'sanitize_callback' => 'awe_blog_sanitize_checkbox',
    ]);

    $wp_customize->add_control('awe_blog_theme_options[show_prefooter]', [
        'label' => esc_html__('Show Prefooter Section', 'awe-blog'),
        'type' => 'Checkbox',
        'priority' => 1,
        'section' => 'prefooter_section',
    ]);
}
add_action('customize_register', 'awe_blog_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function awe_blog_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function awe_blog_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function awe_blog_customize_preview_js()
{
    wp_enqueue_script(
        'awe-blog-customizer',
        get_template_directory_uri() . '/js/customizer.js',
        ['customize-preview'],
        '20151215',
        true
    );
}
add_action('customize_preview_init', 'awe_blog_customize_preview_js');

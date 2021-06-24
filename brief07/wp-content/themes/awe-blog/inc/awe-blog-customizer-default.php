<?php
if (!function_exists('awe_blog_theme_options')) :
    function awe_blog_theme_options()
    {
        $defaults = array(

            'facebook' => '',
            'search_show' => 1,
            'twitter' => '',

            'awe_blog_slider_category' => '',
            
            'image_type' => '1',

            'below_banner_category' => '',

            'three_post_section_show' => 1,
            

            'postid1' => '',
            'postid2' => '',
            'postid3' => '',


            'sidebar_blog_category' => '',
            'show_prefooter' => 1,



        );

        $options = get_option('awe_blog_theme_options', $defaults);

        //Parse defaults again - see comments
        $options = wp_parse_args($options, $defaults);

        return $options;
    }
endif;

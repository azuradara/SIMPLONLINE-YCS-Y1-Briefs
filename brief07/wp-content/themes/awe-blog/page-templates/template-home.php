<?php
/**
 *
 * Template Name: Frontpage

 *
 * @package Awe Blog
 */

$awe_blog_options = awe_blog_theme_options();
$three_post_section_show = $awe_blog_options['three_post_section_show'];

get_header();

get_template_part('template-parts/homepage/banner', 'section');

get_template_part('template-parts/homepage/below-banner', 'section');

if($three_post_section_show==1){
get_template_part('template-parts/homepage/three-posts', 'section');
}

get_template_part('template-parts/homepage/blog', 'section');


get_footer();

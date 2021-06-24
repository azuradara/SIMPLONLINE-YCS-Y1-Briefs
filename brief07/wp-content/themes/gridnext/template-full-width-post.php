<?php
/**
* The template for displaying full-width post.
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*
* Template Name: Full Width, no sidebar
* Template Post Type: post
*/

get_header(); ?>

<div class="gridnext-main-wrapper gridnext-clearfix" id="gridnext-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="gridnext-main-wrapper-inside gridnext-clearfix">

<?php gridnext_before_main_content(); ?>

<div class="gridnext-posts-wrapper" id="gridnext-posts-wrapper">

<?php while (have_posts()) : the_post();

    get_template_part( 'template-parts/content-single', get_post_format() );

    gridnext_post_navigation();

    gridnext_post_bottom_widgets();

    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;

endwhile; ?>

<div class="clear"></div>
</div><!--/#gridnext-posts-wrapper -->

<?php gridnext_after_main_content(); ?>

</div>
</div>
</div><!-- /#gridnext-main-wrapper -->

<?php get_footer(); ?>
<?php
/**
* The template for displaying search results pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="gridnext-main-wrapper gridnext-clearfix" id="gridnext-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="gridnext-main-wrapper-inside gridnext-clearfix">

<?php gridnext_before_main_content(); ?>

<div class="gridnext-posts-wrapper" id="gridnext-posts-wrapper">

<div class="gridnext-page-header-outside">
<header class="gridnext-page-header">
<div class="gridnext-page-header-inside">
<h1 class="page-title"><?php /* translators: %s: search query. */ printf( esc_html__( 'Search Results for: %s', 'gridnext' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</div>
</header>
</div>

<div class="gridnext-posts-content">

<?php if (have_posts()) : ?>

    <?php if ( !(gridnext_get_option('disable_posts_grid')) ) { ?>

    <div class="gridnext-posts gridnext-posts-grid">
    <?php $gridnext_post_counter=1; while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content-grid' ); ?>

    <?php $gridnext_post_counter++; endwhile; ?>
    </div>

    <?php } else { ?>

    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'template-parts/content-nongrid' ); ?>
    <?php endwhile; ?>

    <?php } ?>
    <div class="clear"></div>

    <?php gridnext_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>

</div><!--/#gridnext-posts-wrapper -->

<?php gridnext_after_main_content(); ?>

</div>
</div>
</div><!-- /#gridnext-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
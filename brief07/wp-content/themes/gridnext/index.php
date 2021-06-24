<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

<?php if ( !(gridnext_get_option('hide_posts_heading')) ) { ?>
<?php if(is_home() && !is_paged()) { ?>
<?php if ( gridnext_get_option('posts_heading') ) : ?>
<div class="gridnext-posts-header"><h2 class="gridnext-posts-heading"><span class="gridnext-posts-heading-inside"><?php echo esc_html( gridnext_get_option('posts_heading') ); ?></span></h2></div>
<?php else : ?>
<div class="gridnext-posts-header"><h2 class="gridnext-posts-heading"><span class="gridnext-posts-heading-inside"><?php esc_html_e( 'Recent Posts', 'gridnext' ); ?></span></h2></div>
<?php endif; ?>
<?php } ?>
<?php } ?>

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
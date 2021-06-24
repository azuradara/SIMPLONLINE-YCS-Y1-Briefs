<?php
/**
* The template for displaying 404 pages (not found).
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class='gridnext-main-wrapper gridnext-clearfix' id='gridnext-main-wrapper' itemscope='itemscope' itemtype='http://schema.org/Blog' role='main'>
<div class='theiaStickySidebar'>
<div class="gridnext-main-wrapper-inside gridnext-clearfix">

<div class='gridnext-posts-wrapper' id='gridnext-posts-wrapper'>

<div class='gridnext-posts gridnext-box'>
<div class="gridnext-box-inside">

<div class="gridnext-page-header-outside">
<header class="gridnext-page-header">
<div class="gridnext-page-header-inside">
    <?php if ( gridnext_get_option('error_404_heading') ) : ?>
    <h1 class="page-title"><?php echo esc_html( gridnext_get_option('error_404_heading') ); ?></h1>
    <?php else : ?>
    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can not be found.', 'gridnext' ); ?></h1>
    <?php endif; ?>
</div>
</header><!-- .gridnext-page-header -->
</div>

<div class='gridnext-posts-content'>

    <?php if ( gridnext_get_option('error_404_message') ) : ?>
    <p><?php echo wp_kses_post( force_balance_tags( gridnext_get_option('error_404_message') ) ); ?></p>
    <?php else : ?>
    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gridnext' ); ?></p>
    <?php endif; ?>

    <?php if ( !(gridnext_get_option('hide_404_search')) ) { ?><?php get_search_form(); ?><?php } ?>

</div>

</div>
</div>

</div><!--/#gridnext-posts-wrapper -->

<?php gridnext_404_widgets(); ?>

</div>
</div>
</div><!-- /#gridnext-main-wrapper -->

<?php get_footer(); ?>
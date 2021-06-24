<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php $gridnext_grid_post_content = get_the_content(); ?>
<div id="post-<?php the_ID(); ?>" class="gridnext-grid-post gridnext-4-col">
<div class="gridnext-grid-post-inside">

    <?php gridnext_media_content_grid(); ?>

    <?php if ( !(gridnext_get_option('hide_post_title_home')) ) { ?>
    <?php if ( gridnext_get_option('post_title_link_home') == 'no' ) { ?>
        <div class="gridnext-grid-post-header gridnext-grid-post-block gridnext-clearfix"><?php if ( gridnext_get_option('show_post_author_image_home') ) { ?><?php echo wp_kses_post( gridnext_author_image() ); ?><?php } ?><?php the_title( '<h3 class="gridnext-grid-post-title">', '</h3>' ); ?></div>
    <?php } else { ?>
        <div class="gridnext-grid-post-header gridnext-grid-post-block gridnext-clearfix"><?php if ( gridnext_get_option('show_post_author_image_home') ) { ?><?php echo wp_kses_post( gridnext_author_image() ); ?><?php } ?><?php the_title( sprintf( '<h3 class="gridnext-grid-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?></div>
    <?php } ?>
    <?php } ?>

    <?php gridnext_grid_header_meta(); ?>

    <?php if ( !(gridnext_get_option('hide_post_snippet')) ) { ?>
    <?php if ( !empty( $gridnext_grid_post_content ) ) { ?><div class="gridnext-grid-post-snippet gridnext-grid-post-block"><div class="gridnext-grid-post-snippet-inside"><?php the_excerpt(); ?></div></div><?php } ?>
    <?php } ?>

    <?php if ( !(gridnext_get_option('hide_read_more_button')) ) { ?><div class="gridnext-grid-post-readmore gridnext-grid-post-block"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( gridnext_read_more_text() ); ?><span class="gridnext-sr-only"> <?php echo wp_kses_post( get_the_title() ); ?></span></a></div><?php } ?>

    <?php gridnext_grid_footer_meta(); ?>

    <?php if ( !(gridnext_get_option('hide_share_buttons_home')) ) { echo wp_kses_post( force_balance_tags( gridnext_small_share_buttons() ) ); } ?>

</div>
</div>
<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package GridNext WordPress Theme
* @copyright Copyright (C) 2021 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div>

</div><!--/#gridnext-content-wrapper -->
</div><!--/#gridnext-wrapper -->

<?php gridnext_bottom_wide_widgets(); ?>

<?php gridnext_before_footer(); ?>

<?php if ( !(gridnext_hide_footer_widgets()) ) { ?>
<?php if ( is_active_sidebar( 'gridnext-footer-1' ) || is_active_sidebar( 'gridnext-footer-2' ) || is_active_sidebar( 'gridnext-footer-3' ) || is_active_sidebar( 'gridnext-footer-4' ) || is_active_sidebar( 'gridnext-footer-5' ) || is_active_sidebar( 'gridnext-top-footer' ) || is_active_sidebar( 'gridnext-bottom-footer' ) ) : ?>
<div class="gridnext-outer-wrapper">
<div class='gridnext-clearfix' id='gridnext-footer-blocks' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='gridnext-container gridnext-clearfix'>

<?php if ( is_active_sidebar( 'gridnext-top-footer' ) ) : ?>
<div class='gridnext-clearfix'>
<div class='gridnext-top-footer-block'>
<?php dynamic_sidebar( 'gridnext-top-footer' ); ?>
</div>
</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'gridnext-footer-1' ) || is_active_sidebar( 'gridnext-footer-2' ) || is_active_sidebar( 'gridnext-footer-3' ) || is_active_sidebar( 'gridnext-footer-4' ) || is_active_sidebar( 'gridnext-footer-5' ) ) : ?>
<div class='gridnext-footer-block-cols gridnext-clearfix'>

<div class="gridnext-footer-block-col gridnext-footer-5-col" id="gridnext-footer-block-1">
<?php dynamic_sidebar( 'gridnext-footer-1' ); ?>
</div>

<div class="gridnext-footer-block-col gridnext-footer-5-col" id="gridnext-footer-block-2">
<?php dynamic_sidebar( 'gridnext-footer-2' ); ?>
</div>

<div class="gridnext-footer-block-col gridnext-footer-5-col" id="gridnext-footer-block-3">
<?php dynamic_sidebar( 'gridnext-footer-3' ); ?>
</div>

<div class="gridnext-footer-block-col gridnext-footer-5-col" id="gridnext-footer-block-4">
<?php dynamic_sidebar( 'gridnext-footer-4' ); ?>
</div>

<div class="gridnext-footer-block-col gridnext-footer-5-col" id="gridnext-footer-block-5">
<?php dynamic_sidebar( 'gridnext-footer-5' ); ?>
</div>

</div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'gridnext-bottom-footer' ) ) : ?>
<div class='gridnext-clearfix'>
<div class='gridnext-bottom-footer-block'>
<?php dynamic_sidebar( 'gridnext-bottom-footer' ); ?>
</div>
</div>
<?php endif; ?>

</div>
</div><!--/#gridnext-footer-blocks-->
</div>
<?php endif; ?>
<?php } ?>

<?php gridnext_after_footer(); ?>

<div class="gridnext-outer-wrapper">
<div class='gridnext-clearfix' id='gridnext-copyright-area'>
<div class='gridnext-copyright-area-inside gridnext-container'>
<div class='gridnext-copyright-area-inside-content gridnext-clearfix'>
<?php if ( gridnext_get_option('footer_text') ) : ?>
  <p class='gridnext-copyright'><?php echo esc_html(gridnext_get_option('footer_text')); ?></p>
<?php else : ?>
  <p class='gridnext-copyright'><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'gridnext' ), esc_html(date_i18n(__('Y','gridnext'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<?php endif; ?>
<p class='gridnext-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'gridnext' ), 'ThemesDNA.com' ); ?></a></p>
</div>
</div>
</div><!--/#gridnext-copyright-area -->
</div>

<button class="gridnext-scroll-top" title="<?php esc_attr_e('Scroll to Top','gridnext'); ?>"><i class="fas fa-arrow-up" aria-hidden="true"></i><span class="gridnext-sr-only"><?php esc_html_e('Scroll to Top', 'gridnext'); ?></span></button>

<?php wp_footer(); ?>
</body>
</html>
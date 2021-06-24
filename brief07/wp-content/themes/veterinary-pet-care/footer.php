<?php
/**
 * The template for displaying the footer.
 * @package Veterinary Pet Care
 */
?>
<?php if( get_theme_mod( 'veterinary_pet_care_hide_scroll',true) != '') { ?>
  <?php $veterinary_pet_care_scroll_align = get_theme_mod( 'veterinary_pet_care_back_to_top','Right');
  if($veterinary_pet_care_scroll_align == 'Left'){ ?>
    <a href="#content" class="back-to-top scroll-left text-center"><?php esc_html_e('Top', 'veterinary-pet-care'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'veterinary-pet-care'); ?></span></a>
  <?php }else if($veterinary_pet_care_scroll_align == 'Center'){ ?>
    <a href="#content" class="back-to-top scroll-center text-center"><?php esc_html_e('Top', 'veterinary-pet-care'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'veterinary-pet-care'); ?></span></a>
  <?php }else{ ?>
    <a href="#content" class="back-to-top scroll-right text-center"><?php esc_html_e('Top', 'veterinary-pet-care'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'veterinary-pet-care'); ?></span></a>
  <?php }?>
<?php }?>
<footer role="contentinfo" id="footer">
  <?php //Set widget areas classes based on user choice
    $veterinary_pet_care_footer_columns = get_theme_mod('veterinary_pet_care_footer_widget', '4');
    if ($veterinary_pet_care_footer_columns == '3') {
      $cols = 'col-lg-4 col-md-4';
    } elseif ($veterinary_pet_care_footer_columns == '4') {
      $cols = 'col-lg-3 col-md-3';
    } elseif ($veterinary_pet_care_footer_columns == '2') {
      $cols = 'col-lg-6 col-md-6';
    } else {
      $cols = 'col-lg-12 col-md-12';
    }
  ?>
  <?php
  if ( is_active_sidebar( 'footer-1' ) ||
    is_active_sidebar( 'footer-2' ) ||
    is_active_sidebar( 'footer-3' ) ||
    is_active_sidebar( 'footer-4' ) ) :
  ?>
  <div class="footerinner">
    <div class="container">
      <div class="row">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-1'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-2'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-3'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-4'); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="inner">
    <div class="copyright">
      <div class="container">
        <p><?php veterinary_pet_care_credit_link(); ?> <?php echo esc_html(get_theme_mod('veterinary_pet_care_text',__('By Themesglance','veterinary-pet-care'))); ?></p>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
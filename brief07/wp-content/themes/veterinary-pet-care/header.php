<?php
/**
 * The Header for our theme.
 * @package Veterinary Pet Care
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>
  
  <?php if(get_theme_mod('veterinary_pet_care_preloader',true)){ ?>
    <?php if(get_theme_mod( 'veterinary_pet_care_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
        <span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'veterinary_pet_care_preloader_type') == 'Circle') {?>    
      <div class="preloader text-center">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
  <?php }?>
  
  <header role="banner">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'veterinary-pet-care' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'veterinary-pet-care' ); ?></span></a>
    <div id="header">
      <div class="top-bar text-md-left text-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-5">
              <div class="logo p-2">
                <?php if ( has_custom_logo() ) : ?>
                  <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                  <?php $blog_info = get_bloginfo( 'name' ); ?>
                  <?php if ( ! empty( $blog_info ) ) : ?>
                    <?php if( get_theme_mod('veterinary_pet_care_show_site_title',true) != ''){ ?>
                      <?php if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                      <?php else : ?>
                        <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                      <?php endif; ?>
                  <?php }?>
                <?php endif; ?>
                <?php if( get_theme_mod('veterinary_pet_care_show_tagline',true) != ''){ ?>
                  <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) :
                  ?>
                    <p class="site-description m-0">
                      <?php echo esc_html($description); ?>
                    </p>
                  <?php endif; ?>
                <?php }?>
              </div>
            </div>
            <div class="<?php if(get_theme_mod('veterinary_pet_care_show_search',true)) { ?>col-lg-1 offset-lg-3 offset-md-2 col-md-1 col-6" <?php } else { ?>col-lg-1 offset-lg-4 offset-md-3 col-md-1<?php } ?>">
              <?php if(class_exists('woocommerce')){ ?>
                <li class="cart_box">
                  <span class="cart-value"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></span>
                </li>
                <span class="cart_no">
                  <a class="cart-contents" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'shopping cart','veterinary-pet-care' ); ?>"><img role="img" src="<?php echo esc_url(get_template_directory_uri().'/images/gift.png'); ?>" alt="<?php esc_attr_e('shopping cart','veterinary-pet-care'); ?>"></a>
                </span>
              <?php }else { echo '<h6>'.esc_html('Please Install Woocommerce Plugin','veterinary-pet-care').'<h6>'; }?>
            </div>
            <?php if(get_theme_mod('veterinary_pet_care_show_search',true) ){ ?>
              <div class="search-box col-lg-1 col-md-1 col-6 pl-0">
                <div class="wrap"><?php get_search_form(); ?></div>
              </div>
            <?php }?>
            <div class="col-lg-2 col-md-3 pl-0">
              <div class="request text-center">
                <?php if ( get_theme_mod('veterinary_pet_care_request_link','') != "" ) {?>
                  <a href="<?php echo esc_url(get_theme_mod('veterinary_pet_care_request_link','')); ?>"><?php echo esc_html(get_theme_mod('veterinary_pet_care_request_text','')); ?> <span class="screen-reader-text"><?php esc_html_e('Get Appointment','veterinary-pet-care'); ?></span></a>
                <?php }?>
              </div>
            </div>
          </div>
        </div>  
      </div>
      <?php if (has_nav_menu('primary')){ ?>
        <div class="toggle-menu responsive-menu p-2">
          <button role="tab"><i class="fas fa-bars mr-2"></i><?php esc_html_e('Menu','veterinary-pet-care'); ?><span class="screen-reader-text"><?php esc_html_e('Menu','veterinary-pet-care'); ?></span></button>
        </div>
      <?php }?>
      <div class="container">
        <div id="sidelong-menu" class="nav side-nav">
          <nav id="primary-site-navigation" class="nav-menu <?php if( get_theme_mod( 'veterinary_pet_care_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'veterinary-pet-care' ); ?>">
            <?php if (has_nav_menu('primary')){ 
              wp_nav_menu( array( 
                'theme_location' => 'primary',
                'container_class' => 'main-menu-navigation clearfix' ,
                'menu_class' => 'clearfix',
                'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                'fallback_cb' => 'wp_page_menu',
              ) ); 
            } ?>
            <a href="javascript:void(0)" class="closebtn responsive-menu"><?php esc_html_e('Close Menu','veterinary-pet-care'); ?><i class="fas fa-times-circle m-3"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','veterinary-pet-care'); ?></span></a>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <?php if(get_theme_mod('veterinary_pet_care_post_featured_image') == 'banner' ){
    if( is_singular() ) {?>
      <div id="page-site-header">
        <div class='page-header'> 
          <?php the_title( '<h1>', '</h1>' ); ?>
        </div>
      </div>
    <?php }
  }?>
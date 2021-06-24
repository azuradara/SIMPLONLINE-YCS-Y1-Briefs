<?php
/**
 * Template Name: Custom home page
 */
get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action('veterinary_pet_care_above_slider_section'); ?>

  <?php if( get_theme_mod('veterinary_pet_care_slider_hide_show') != ''){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('veterinary_pet_care_slider_speed',3000)); ?>"> 
        <?php $veterinary_pet_care_content_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'veterinary_pet_care_slidersettings_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $veterinary_pet_care_content_pages[] = $mod;
            }
          }
          if( !empty($veterinary_pet_care_content_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $veterinary_pet_care_content_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php the_post_thumbnail(); ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <?php if ( get_theme_mod('veterinary_pet_care_slider_title',true) != '' ) {?>
                  <h1><?php the_title(); ?></h1> 
                <?php }?>
                <?php if ( get_theme_mod('veterinary_pet_care_slider_content',true) != '' ) {?>
                  <p><?php $veterinary_pet_care_excerpt = get_the_excerpt(); echo esc_html( veterinary_pet_care_string_limit_words( $veterinary_pet_care_excerpt, esc_attr(get_theme_mod('veterinary_pet_care_slider_excerpt','25')))); ?></p>
                <?php }?>
                <?php if ( get_theme_mod('veterinary_pet_care_slider_button_label','READ MORE') != '' && get_theme_mod('veterinary_pet_care_slider_button',true) != '') {?>
                  <div class ="read-more mt-md-4">
                    <a href="<?php the_permalink(); ?>"><?php echo esc_html( get_theme_mod('veterinary_pet_care_slider_button_label',__('READ MORE','veterinary-pet-care')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('veterinary_pet_care_slider_button_label',__('READ MORE','veterinary-pet-care')) ); ?></span></a>
                  </div>
                <?php }?>                    
              </div>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php if( get_theme_mod('veterinary_pet_care_slider_indicator',true) != ''){ ?>
          <ol class="carousel-indicators">
            <?php for($i=0;$i<count($veterinary_pet_care_content_pages);$i++) { ?>
              <li data-target="#carouselExampleIndicators" data-slide-to="<?php esc_attr($i); ?>" <?php if($i==0) { ?>class="active"<?php } ?>></li>
            <?php } ?>
          </ol>
        <?php }?>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon pt-2 px-3" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e('Previous','veterinary-pet-care'); ?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon pt-2 px-3" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e('Next','veterinary-pet-care'); ?></span>
        </a>
      </div>
      <div class="clearfix"></div>
    </section> 
  <?php }?>

  <?php do_action('veterinary_pet_care_below_slider_section'); ?>

  <?php if( get_theme_mod('veterinary_pet_care_services_title') != '' || get_theme_mod('veterinary_pet_care_services_category') != ''){ ?>
    <section id="our-services" class="py-5">
      <div class="container">
        <?php if( get_theme_mod('veterinary_pet_care_services_title') != ''){ ?>
          <h2 class="text-center"><i class="fas fa-paw pr-2"></i><?php echo esc_html(get_theme_mod('veterinary_pet_care_services_title','')); ?></h2>
          <hr class="service-title-border mt-0 mx-auto b-3">
        <?php }?>
        <div class="row">
          <?php 
          $veterinary_pet_care_catData=  get_theme_mod('veterinary_pet_care_services_category');
          if($veterinary_pet_care_catData){
          $veterinary_pet_care_page_query = new WP_Query(array( 'category_name' => esc_html( $veterinary_pet_care_catData ,'veterinary-pet-care')));?>
            <?php while( $veterinary_pet_care_page_query->have_posts() ) : $veterinary_pet_care_page_query->the_post(); ?>
              <div class="col-lg-6 col-md-6">
                <div class="service-content p-3 my-2">
                  <div class="row">
                    <div class="col-lg-4 col-md-4">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="col-lg-8 col-md-8">
                      <h3 class="py-1"><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h3>
                      <hr class="service-border mt-0">
                      <p class="m-0"><?php $veterinary_pet_care_excerpt = get_the_excerpt(); echo esc_html( veterinary_pet_care_string_limit_words( $veterinary_pet_care_excerpt,8 ) ); ?></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile;
            wp_reset_postdata();
          } ?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action('veterinary_pet_care_after_service_section'); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>
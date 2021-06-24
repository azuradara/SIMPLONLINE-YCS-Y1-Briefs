<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awe_blog
 */

$awe_blog_options = awe_blog_theme_options();
$facebook = $awe_blog_options['facebook'];
$twitter = $awe_blog_options['twitter'];
$search_show = $awe_blog_options['search_show'];

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e(
     'Skip to content',
     'awe-blog'
 ); ?></a>


<div class="main-wrap">
	<header id="masthead" class="site-header">
		<div class="header-top">
			<div class="container">
	             <div class="row">

					<div class="site-branding">
						<?php the_custom_logo(); ?>
						<div class="logo-wrap">

						<?php
      if (is_front_page() && is_home()): ?>
							<h2 class="site-title"><a href="<?php echo esc_url(
           home_url('/')
       ); ?>" rel="home"><?php bloginfo('name'); ?></a></h2>
							<?php else: ?>
							<h2 class="site-title"><a href="<?php echo esc_url(
           home_url('/')
       ); ?>" rel="home"><?php bloginfo('name'); ?></a></h2>
							<?php endif;
      $awe_blog_description = get_bloginfo('description', 'display');
      if ($awe_blog_description || is_customize_preview()): ?>
							<p class="site-description"><?php echo $awe_blog_description;
          // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
          ?></p>
						<?php endif;
      ?>
						</div>
					</div><!-- .site-branding -->

					<div class="collapse navbar-collapse" id="navbar-collapse">
		            	<nav id="site-navigation" class="main-navigation clearfix">
		             <?php if (has_nav_menu('primary')) { ?>
		                <?php wp_nav_menu([
                      'theme_location' => 'primary',
                      'container' => '',
                      'menu_class' => 'nav navbar-nav navbar-center nav-menu',
                      'menu_id' => 'menu-main',
                      'walker' => new awe_blog_nav_walker(),
                      'fallback_cb' => 'awe_blog_nav_walker::fallback',
                  ]); ?>
		            	</nav>
		                <?php } else { ?>
		                    <nav id="site-navigation" class="main-navigation clearfix">
		                        <?php wp_page_menu([
                              'menu_class' => 'menu',
                              'menu_id' => 'menuid',
                          ]); ?>
		                    </nav>
		                <?php } ?>

		            </div><!-- End navbar-collapse -->

					<div class="navbar-right">
				        <div class="header-social">
				        	
							<ul> <?php
       if (!empty($facebook)) {
           echo '<a class="social-btn facebook" href="' .
               esc_url($facebook) .
               '"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
       }

       if ($twitter) {
           echo '<a class="social-btn twitter" href="' .
               esc_url($twitter) .
               '"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
       }

       ?>
			                </ul>
						</div>

						<?php if ($search_show): ?>
							<div class="header-search">
							<?php get_search_form(); ?>
							</div>
						<?php endif; ?>
					</div>


		            
				</div>
			</div>
		</div>



		<div class="bottom-header">
			<div class="container">
				<div class="row">
            <!-- Collect the nav links, forms, and other content for toggling -->
	            


	        	</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div class="header-mobile">
		<div class="site-branding">
			<?php the_custom_logo(); ?>
			<div class="logo-wrap">

			<?php
   if (is_front_page() && is_home()): ?>
				<h2 class="site-title"><a href="<?php echo esc_url(
        home_url('/')
    ); ?>" rel="home"><?php bloginfo('name'); ?></a></h2>
				<?php else: ?>
				<h2 class="site-title"><a href="<?php echo esc_url(
        home_url('/')
    ); ?>" rel="home"><?php bloginfo('name'); ?></a></h2>
				<?php endif;
   $awe_blog_description = get_bloginfo('description', 'display');
   if ($awe_blog_description || is_customize_preview()): ?>
				<p class="site-description"><?php echo $awe_blog_description;
       ?></p>
			<?php endif;
   ?>
			</div>
		</div><!-- .site-branding -->


		<div class="mobile-wrap">
	        <div class="header-social">

				<ul> <?php
    if ($facebook) {
        echo '<a class="social-btn facebook" href="' .
            esc_url($facebook) .
            '"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
    }

    if ($twitter) {
        echo '<a class="social-btn twitter" href="' .
            esc_url($twitter) .
            '"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
    }

    ?>
	            </ul>
			</div>

	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
	                data-target="#navbar-collapse1" aria-expanded="false">
	            <span class="sr-only"><?php echo esc_html__(
                 'Toggle navigation',
                 'awe-blog'
             ); ?></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbar-collapse1">

	         <?php if (has_nav_menu('primary')) { ?>
	            <?php wp_nav_menu([
                 'theme_location' => 'primary',
                 'container' => '',
                 'menu_class' => 'nav navbar-nav navbar-center',
                 'menu_id' => 'menu-main',
                 'walker' => new awe_blog_nav_walker(),
                 'fallback_cb' => 'awe_blog_nav_walker::fallback',
             ]); ?>
	            <?php } else { ?>
	                <nav id="site-navigation" class="main-navigation clearfix">
	                    <?php wp_page_menu([
                         'menu_class' => 'menu',
                         'menu_id' => 'menuid',
                     ]); ?>
	                </nav>
	            <?php } ?>

				<div class="header-search-form">
					<?php if ($search_show) {
         echo get_search_form();
     } ?>
		        </div>

		    
	        </div><!-- End navbar-collapse -->
	    </div>
	</div>
	<!-- /main-wrap -->

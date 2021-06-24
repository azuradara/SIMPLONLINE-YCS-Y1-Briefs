<?php
/**
 * The template for displaying search forms in Veterinary Pet Care
 * @package Veterinary Pet Care
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'veterinary-pet-care' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr( get_theme_mod('veterinary_pet_care_search_placeholder', __('Search', 'veterinary-pet-care')) ); ?>" value="<?php the_search_query(); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'veterinary-pet-care' ); ?>">
</form>
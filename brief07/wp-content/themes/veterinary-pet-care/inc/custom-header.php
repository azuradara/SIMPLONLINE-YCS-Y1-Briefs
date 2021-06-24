<?php
/**
 * @package Veterinary Pet Care
 * @subpackage veterinary-pet-care
 * Setup the WordPress core custom header feature.
 *
 * @uses veterinary_pet_care_header_style()
*/

function veterinary_pet_care_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'veterinary_pet_care_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'veterinary_pet_care_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'veterinary_pet_care_custom_header_setup' );

if ( ! function_exists( 'veterinary_pet_care_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see veterinary_pet_care_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'veterinary_pet_care_header_style' );
function veterinary_pet_care_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$veterinary_pet_care_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'veterinary-pet-care-basic-style', $veterinary_pet_care_custom_css );
	endif;
}
endif; //veterinary_pet_care_header_style
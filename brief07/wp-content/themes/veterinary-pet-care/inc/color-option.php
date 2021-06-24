<?php
	
	$veterinary_pet_care_first_theme_color = get_theme_mod('veterinary_pet_care_first_theme_color');
	$veterinary_pet_care_second_theme_color = get_theme_mod('veterinary_pet_care_second_theme_color');

	$veterinary_pet_care_custom_css = '';

	if($veterinary_pet_care_first_theme_color != false){
		$veterinary_pet_care_custom_css .=' #footer input[type="submit"], input[type="submit"], .nav-menu ul ul a, #header, .read-more a:hover, .post-info, h1.page-title, h1.search-title, .blogbtn a, #footer .social_widget i:hover, .inner, .footerinner .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit, #sidebar .social_widget i , #sidebar h3, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, .pagination a:hover, .pagination .current, span.meta-nav, a.button, .tags a:hover, #comments a.comment-reply-link, .back-to-top, .woocommerce-product-search button, .woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{';
			$veterinary_pet_care_custom_css .='background-color: '.esc_attr($veterinary_pet_care_first_theme_color).';';
		$veterinary_pet_care_custom_css .='}';
	}
	if($veterinary_pet_care_first_theme_color != false){
		$veterinary_pet_care_custom_css .='.woocommerce .widget_shopping_cart .buttons a:hover, .woocommerce.widget_shopping_cart .buttons a:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover{';
			$veterinary_pet_care_custom_css .='background-color: '.esc_attr($veterinary_pet_care_first_theme_color).' !important;';
		$veterinary_pet_care_custom_css .='}';
	}
	if($veterinary_pet_care_first_theme_color != false){
		$veterinary_pet_care_custom_css .=' .nav-menu ul li a:active, .nav-menu ul li a:hover, a,  .nav-menu ul ul a:hover, input.search-field, .blog-sec h2 a, #our-services i, #footer .social_widget i, .woocommerce-message::before, #sidebar .widget_calendar caption, #sidebar .social_widget i:hover, #sidebar .tagcloud a, .title-box h1, #wrapper h1, span.post-title, .tags a i, .comment-meta.commentmetadata a, #wrapper .related-posts h2.related-posts-main-title, #wrapper .related-posts h3 a, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span{';
			$veterinary_pet_care_custom_css .='color: '.esc_attr($veterinary_pet_care_first_theme_color).';';
		$veterinary_pet_care_custom_css .='}';
	}
	if($veterinary_pet_care_first_theme_color != false){
		$veterinary_pet_care_custom_css .=' .serach_inner form.search-form, input.search-field, .blog-sec, #our-services hr.service-border, #our-services hr.service-title-border, .footerinner .tagcloud a:hover, .woocommerce-message, #sidebar aside, #sidebar .social_widget, #sidebar .social_widget i, .pagination a:hover, .pagination .current, .tags a:hover, .nav-menu ul ul, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span{';
			$veterinary_pet_care_custom_css .='border-color: '.esc_attr($veterinary_pet_care_first_theme_color).';';
		$veterinary_pet_care_custom_css .='}';
	}
	if($veterinary_pet_care_first_theme_color != false){
		$veterinary_pet_care_custom_css .=' .back-to-top::before{';
			$veterinary_pet_care_custom_css .='border-bottom-color: '.esc_attr($veterinary_pet_care_first_theme_color).';';
		$veterinary_pet_care_custom_css .='}';
	}
	if($veterinary_pet_care_first_theme_color != false){
		$veterinary_pet_care_custom_css .=' .nav-menu ul ul a:hover{';
			$veterinary_pet_care_custom_css .='border-left-color: '.esc_attr($veterinary_pet_care_first_theme_color).';';
		$veterinary_pet_care_custom_css .='}';
	}
	if($veterinary_pet_care_first_theme_color != false){
		$veterinary_pet_care_custom_css .=' 
		@media screen and (min-width: 720px) and (max-width:768px) {
			.page-template-custom-front-page #header {';
			$veterinary_pet_care_custom_css .='background-color: '.esc_attr($veterinary_pet_care_first_theme_color).';';
		$veterinary_pet_care_custom_css .='} }';
	}
	if($veterinary_pet_care_first_theme_color != false){
		$veterinary_pet_care_custom_css .=' 
		@media screen and (max-width: 720px) {
			.page-template-custom-front-page #header {';
			$veterinary_pet_care_custom_css .='background-color: '.esc_attr($veterinary_pet_care_first_theme_color).';';
		$veterinary_pet_care_custom_css .='} }';
	}

	if($veterinary_pet_care_second_theme_color != false){
		$veterinary_pet_care_custom_css .='  .bradcrumbs span, body, .nav-menu ul, .nav-menu ul ul a:hover, input.search-field, #slider, #footer .social_widget i, #footer, #sidebar .social_widget i:hover , #sidebar input[type="search"], #sidebar .tagcloud a{';
			$veterinary_pet_care_custom_css .='background-color: '.esc_attr($veterinary_pet_care_second_theme_color).';';
		$veterinary_pet_care_custom_css .='}';
	}
	if($veterinary_pet_care_second_theme_color != false){
		$veterinary_pet_care_custom_css .=' input[type="submit"], #header .logo h1 a, #header .logo p.site-title a, #header .logo p, .request a, .read-more a:hover, .read-more a, #slider .carousel-control-next-icon, #slider .carousel-control-prev-icon, .post-info i, .post-info span, .post-info a, h1.page-title, h1.search-title, .blogbtn a, #footer .social_widget i:hover , #footer h3, #footer .copyright.text-center p, .copyright a, .footerinner ul li a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt#sidebar .social_widget i, a.rsswidget, #sidebar h3, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, .pagination a:hover, .pagination .current, .footerinner .tagcloud a {';
			$veterinary_pet_care_custom_css .='color: '.esc_attr($veterinary_pet_care_second_theme_color).';';
		$veterinary_pet_care_custom_css .='}';
	}
	if($veterinary_pet_care_second_theme_color != false){
		$veterinary_pet_care_custom_css .=' .request a, .search-image, .footerinner .tagcloud a{';
			$veterinary_pet_care_custom_css .='border-color: '.esc_attr($veterinary_pet_care_second_theme_color).';';
		$veterinary_pet_care_custom_css .='}';
	}
	if($veterinary_pet_care_second_theme_color != false){
		$veterinary_pet_care_custom_css .=' 
		@media screen and (max-width: 1000px) {
			.nav-menu ul li a:hover{';
			$veterinary_pet_care_custom_css .='border-left-color: '.esc_attr($veterinary_pet_care_second_theme_color).';';
		$veterinary_pet_care_custom_css .='} }';
	}
	if($veterinary_pet_care_second_theme_color != false){
		$veterinary_pet_care_custom_css .=' 
		@media screen and (max-width: 1000px) {
			.nav-menu ul li a:hover{';
			$veterinary_pet_care_custom_css .='color: '.esc_attr($veterinary_pet_care_second_theme_color).' !important;';
		$veterinary_pet_care_custom_css .='} }';
	}

	// Layout Options
	$veterinary_pet_care_theme_layout = get_theme_mod( 'veterinary_pet_care_theme_layout_options','Default Theme');
    if($veterinary_pet_care_theme_layout == 'Default Theme'){
		$veterinary_pet_care_custom_css .='body{';
			$veterinary_pet_care_custom_css .='max-width: 100%;';
		$veterinary_pet_care_custom_css .='}';
	}else if($veterinary_pet_care_theme_layout == 'Container Theme'){
		$veterinary_pet_care_custom_css .='body{';
			$veterinary_pet_care_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$veterinary_pet_care_custom_css .='}';
		$veterinary_pet_care_custom_css .='.page-template-custom-front-page #header{';
			$veterinary_pet_care_custom_css .='right:0;';
		$veterinary_pet_care_custom_css .='}';
		$veterinary_pet_care_custom_css .='
		@media screen and (max-width: 720px){
			.wrap:focus input[type="search"], .wrap input[type="search"]:focus{';
				$veterinary_pet_care_custom_css .='width:215px';
		$veterinary_pet_care_custom_css .='} }';
	}else if($veterinary_pet_care_theme_layout == 'Box Container Theme'){
		$veterinary_pet_care_custom_css .='body, .top-bar{';
			$veterinary_pet_care_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$veterinary_pet_care_custom_css .='}';
		$veterinary_pet_care_custom_css .='.request a{';
			$veterinary_pet_care_custom_css .='padding:10px;';
		$veterinary_pet_care_custom_css .='}';
		$veterinary_pet_care_custom_css .='.page-template-custom-front-page #header{';
			$veterinary_pet_care_custom_css .='right:0;';
		$veterinary_pet_care_custom_css .='}';
		$veterinary_pet_care_custom_css .='#primary-site-navigation{';
			$veterinary_pet_care_custom_css .='padding: 0 15px;';
		$veterinary_pet_care_custom_css .='}';
		$veterinary_pet_care_custom_css .='
		@media screen and (max-width: 1024px){
			#primary-site-navigation, .top-bar{';
			$veterinary_pet_care_custom_css .='padding: 0;';
		$veterinary_pet_care_custom_css .='} }';
		$veterinary_pet_care_custom_css .='
		@media screen and (max-width: 1024px){
			.request a{';
			$veterinary_pet_care_custom_css .='padding: 12px 10px;';
		$veterinary_pet_care_custom_css .='} }';
		$veterinary_pet_care_custom_css .='
		@media screen and (max-width: 720px){
			.wrap:focus input[type="search"], .wrap input[type="search"]:focus{';
				$veterinary_pet_care_custom_css .='width:215px';
		$veterinary_pet_care_custom_css .='} }';
	}


	/*------------------ Slider Opacity -------------------*/

	$veterinary_pet_care_slider_layout = get_theme_mod( 'veterinary_pet_care_slider_opacity','0.7');
	if($veterinary_pet_care_slider_layout == '0'){
		$veterinary_pet_care_custom_css .='#slider img{';
			$veterinary_pet_care_custom_css .='opacity:0';
		$veterinary_pet_care_custom_css .='}';
	}else if($veterinary_pet_care_slider_layout == '0.1'){
		$veterinary_pet_care_custom_css .='#slider img{';
			$veterinary_pet_care_custom_css .='opacity:0.1';
		$veterinary_pet_care_custom_css .='}';
	}else if($veterinary_pet_care_slider_layout == '0.2'){
		$veterinary_pet_care_custom_css .='#slider img{';
			$veterinary_pet_care_custom_css .='opacity:0.2';
		$veterinary_pet_care_custom_css .='}';
	}else if($veterinary_pet_care_slider_layout == '0.3'){
		$veterinary_pet_care_custom_css .='#slider img{';
			$veterinary_pet_care_custom_css .='opacity:0.3';
		$veterinary_pet_care_custom_css .='}';
	}else if($veterinary_pet_care_slider_layout == '0.4'){
		$veterinary_pet_care_custom_css .='#slider img{';
			$veterinary_pet_care_custom_css .='opacity:0.4';
		$veterinary_pet_care_custom_css .='}';
	}else if($veterinary_pet_care_slider_layout == '0.5'){
		$veterinary_pet_care_custom_css .='#slider img{';
			$veterinary_pet_care_custom_css .='opacity:0.5';
		$veterinary_pet_care_custom_css .='}';
	}else if($veterinary_pet_care_slider_layout == '0.6'){
		$veterinary_pet_care_custom_css .='#slider img{';
			$veterinary_pet_care_custom_css .='opacity:0.6';
		$veterinary_pet_care_custom_css .='}';
	}else if($veterinary_pet_care_slider_layout == '0.7'){
		$veterinary_pet_care_custom_css .='#slider img{';
			$veterinary_pet_care_custom_css .='opacity:0.7';
		$veterinary_pet_care_custom_css .='}';
	}else if($veterinary_pet_care_slider_layout == '0.8'){
		$veterinary_pet_care_custom_css .='#slider img{';
			$veterinary_pet_care_custom_css .='opacity:0.8';
		$veterinary_pet_care_custom_css .='}';
	}else if($veterinary_pet_care_slider_layout == '0.9'){
		$veterinary_pet_care_custom_css .='#slider img{';
			$veterinary_pet_care_custom_css .='opacity:0.9';
		$veterinary_pet_care_custom_css .='}';
	}

	/*------------Slider Content Layout --------------*/

	$veterinary_pet_care_slider_layout = get_theme_mod( 'veterinary_pet_care_slider_alignment_option','Center Align');
    if($veterinary_pet_care_slider_layout == 'Left Align'){
		$veterinary_pet_care_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$veterinary_pet_care_custom_css .='text-align:left;';
		$veterinary_pet_care_custom_css .='}';
		$veterinary_pet_care_custom_css .='#slider .carousel-caption{';
		$veterinary_pet_care_custom_css .='left:15%; right:30%;';
		$veterinary_pet_care_custom_css .='}';
	}else if($veterinary_pet_care_slider_layout == 'Center Align'){
		$veterinary_pet_care_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$veterinary_pet_care_custom_css .='text-align:center;';
		$veterinary_pet_care_custom_css .='}';
		$veterinary_pet_care_custom_css .='#slider .carousel-caption{';
		$veterinary_pet_care_custom_css .='left:25%; right:25%;';
		$veterinary_pet_care_custom_css .='}';
	}else if($veterinary_pet_care_slider_layout == 'Right Align'){
		$veterinary_pet_care_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$veterinary_pet_care_custom_css .='text-align:right;';
		$veterinary_pet_care_custom_css .='}';
		$veterinary_pet_care_custom_css .='#slider .carousel-caption{';
		$veterinary_pet_care_custom_css .='left:35%; right:15%;';
		$veterinary_pet_care_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$veterinary_pet_care_preloader_color = get_theme_mod('veterinary_pet_care_preloader_color');

	if($veterinary_pet_care_preloader_color != false){
		$veterinary_pet_care_custom_css .=' .tg-loader{';
			$veterinary_pet_care_custom_css .='border-color: '.esc_attr($veterinary_pet_care_preloader_color).';';
		$veterinary_pet_care_custom_css .='} ';
		$veterinary_pet_care_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$veterinary_pet_care_custom_css .='background-color: '.esc_attr($veterinary_pet_care_preloader_color).';';
		$veterinary_pet_care_custom_css .='} ';
	}

	$veterinary_pet_care_preloader_bg_color = get_theme_mod('veterinary_pet_care_preloader_bg_color');

	if($veterinary_pet_care_preloader_bg_color != false){
		$veterinary_pet_care_custom_css .=' #overlayer, .preloader{';
			$veterinary_pet_care_custom_css .='background-color: '.esc_attr($veterinary_pet_care_preloader_bg_color).';';
		$veterinary_pet_care_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$veterinary_pet_care_top_button_padding = get_theme_mod('veterinary_pet_care_top_button_padding');
	$veterinary_pet_care_bottom_button_padding = get_theme_mod('veterinary_pet_care_bottom_button_padding');
	$veterinary_pet_care_left_button_padding = get_theme_mod('veterinary_pet_care_left_button_padding');
	$veterinary_pet_care_right_button_padding = get_theme_mod('veterinary_pet_care_right_button_padding');
	if($veterinary_pet_care_top_button_padding != false || $veterinary_pet_care_bottom_button_padding != false || $veterinary_pet_care_left_button_padding != false || $veterinary_pet_care_right_button_padding != false){
		$veterinary_pet_care_custom_css .='.read-more a, .blogbtn a, #comments input[type="submit"].submit{';
			$veterinary_pet_care_custom_css .='padding-top: '.esc_attr($veterinary_pet_care_top_button_padding).'px; padding-bottom: '.esc_attr($veterinary_pet_care_bottom_button_padding).'px; padding-left: '.esc_attr($veterinary_pet_care_left_button_padding).'px; padding-right: '.esc_attr($veterinary_pet_care_right_button_padding).'px; display:inline-block;';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_button_border_radius = get_theme_mod('veterinary_pet_care_button_border_radius');
	$veterinary_pet_care_custom_css .='.read-more a, .blogbtn a, #comments input[type="submit"].submit{';
		$veterinary_pet_care_custom_css .='border-radius: '.esc_attr($veterinary_pet_care_button_border_radius).'px;';
	$veterinary_pet_care_custom_css .='}';

	/*----------- Copyright css -----*/
	$veterinary_pet_care_copyright_top_padding = get_theme_mod('veterinary_pet_care_top_copyright_padding');
	$veterinary_pet_care_copyright_bottom_padding = get_theme_mod('veterinary_pet_care_bottom_copyright_padding');
	if($veterinary_pet_care_copyright_top_padding != false || $veterinary_pet_care_copyright_bottom_padding != false){
		$veterinary_pet_care_custom_css .='.inner{';
			$veterinary_pet_care_custom_css .='padding-top: '.esc_attr($veterinary_pet_care_copyright_top_padding).'px; padding-bottom: '.esc_attr($veterinary_pet_care_copyright_bottom_padding).'px; ';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_copyright_alignment = get_theme_mod('veterinary_pet_care_copyright_alignment', 'center');
	if($veterinary_pet_care_copyright_alignment == 'center' ){
		$veterinary_pet_care_custom_css .='#footer .copyright p{';
			$veterinary_pet_care_custom_css .='text-align: '. $veterinary_pet_care_copyright_alignment .';';
		$veterinary_pet_care_custom_css .='}';
	}elseif($veterinary_pet_care_copyright_alignment == 'left' ){
		$veterinary_pet_care_custom_css .='#footer .copyright p{';
			$veterinary_pet_care_custom_css .=' text-align: '. $veterinary_pet_care_copyright_alignment .';';
		$veterinary_pet_care_custom_css .='}';
	}elseif($veterinary_pet_care_copyright_alignment == 'right' ){
		$veterinary_pet_care_custom_css .='#footer .copyright p{';
			$veterinary_pet_care_custom_css .='text-align: '. $veterinary_pet_care_copyright_alignment .';';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_copyright_font_size = get_theme_mod('veterinary_pet_care_copyright_font_size');
	$veterinary_pet_care_custom_css .='#footer .copyright p{';
		$veterinary_pet_care_custom_css .='font-size: '.esc_attr($veterinary_pet_care_copyright_font_size).'px;';
	$veterinary_pet_care_custom_css .='}';

	/*------ Slider Show/Hide ------*/
	$veterinary_pet_care_slider = get_theme_mod('veterinary_pet_care_slider_hide_show');
	if($veterinary_pet_care_slider == false ){
		$veterinary_pet_care_custom_css .='.page-template-custom-front-page #header{';
			$veterinary_pet_care_custom_css .='position: static; background-color:'.esc_attr($veterinary_pet_care_first_theme_color).'; padding: 10px 0;';
		$veterinary_pet_care_custom_css .='}';
	}

	/*------ Topbar padding ------*/
	$veterinary_pet_care_top_topbar_padding = get_theme_mod('veterinary_pet_care_top_topbar_padding');
	$veterinary_pet_care_bottom_topbar_padding = get_theme_mod('veterinary_pet_care_bottom_topbar_padding');
	if($veterinary_pet_care_top_topbar_padding != false || $veterinary_pet_care_bottom_topbar_padding != false){
		$veterinary_pet_care_custom_css .='.top-bar{';
			$veterinary_pet_care_custom_css .='padding-top: '.esc_attr($veterinary_pet_care_top_topbar_padding).'px; padding-bottom: '.esc_attr($veterinary_pet_care_bottom_topbar_padding).'px; ';
		$veterinary_pet_care_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$veterinary_pet_care_product_border = get_theme_mod('veterinary_pet_care_product_border',false);

	if($veterinary_pet_care_product_border == true){
		$veterinary_pet_care_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$veterinary_pet_care_custom_css .='border: 1px solid '.esc_attr($veterinary_pet_care_first_theme_color).';';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_product_top = get_theme_mod('veterinary_pet_care_product_top_padding');
	$veterinary_pet_care_product_bottom = get_theme_mod('veterinary_pet_care_product_bottom_padding');
	$veterinary_pet_care_product_left = get_theme_mod('veterinary_pet_care_product_left_padding');
	$veterinary_pet_care_product_right = get_theme_mod('veterinary_pet_care_product_right_padding');
	if($veterinary_pet_care_product_top != false || $veterinary_pet_care_product_bottom != false || $veterinary_pet_care_product_left != false || $veterinary_pet_care_product_right != false){
		$veterinary_pet_care_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$veterinary_pet_care_custom_css .='padding-top: '.esc_attr($veterinary_pet_care_product_top).'px; padding-bottom: '.esc_attr($veterinary_pet_care_product_bottom).'px; padding-left: '.esc_attr($veterinary_pet_care_product_left).'px; padding-right: '.esc_attr($veterinary_pet_care_product_right).'px;';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_product_border_radius = get_theme_mod('veterinary_pet_care_product_border_radius');
	if($veterinary_pet_care_product_border_radius != false){
		$veterinary_pet_care_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$veterinary_pet_care_custom_css .='border-radius: '.esc_attr($veterinary_pet_care_product_border_radius).'px;';
		$veterinary_pet_care_custom_css .='}';
	}

	/*----- WooCommerce button css --------*/
	$veterinary_pet_care_product_button_top = get_theme_mod('veterinary_pet_care_product_button_top_padding',10);
	$veterinary_pet_care_product_button_bottom = get_theme_mod('veterinary_pet_care_product_button_bottom_padding',10);
	$veterinary_pet_care_product_button_left = get_theme_mod('veterinary_pet_care_product_button_left_padding',15);
	$veterinary_pet_care_product_button_right = get_theme_mod('veterinary_pet_care_product_button_right_padding',15);
	if($veterinary_pet_care_product_button_top != false || $veterinary_pet_care_product_button_bottom != false || $veterinary_pet_care_product_button_left != false || $veterinary_pet_care_product_button_right != false){
		$veterinary_pet_care_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$veterinary_pet_care_custom_css .='padding-top: '.esc_attr($veterinary_pet_care_product_button_top).'px; padding-bottom: '.esc_attr($veterinary_pet_care_product_button_bottom).'px; padding-left: '.esc_attr($veterinary_pet_care_product_button_left).'px; padding-right: '.esc_attr($veterinary_pet_care_product_button_right).'px;';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_product_button_border_radius = get_theme_mod('veterinary_pet_care_product_button_border_radius');
	if($veterinary_pet_care_product_button_border_radius != false){
		$veterinary_pet_care_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
			$veterinary_pet_care_custom_css .='border-radius: '.esc_attr($veterinary_pet_care_product_button_border_radius).'px;';
		$veterinary_pet_care_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$veterinary_pet_care_product_sale_top = get_theme_mod('veterinary_pet_care_product_sale_top_padding');
	$veterinary_pet_care_product_sale_bottom = get_theme_mod('veterinary_pet_care_product_sale_bottom_padding');
	$veterinary_pet_care_product_sale_left = get_theme_mod('veterinary_pet_care_product_sale_left_padding');
	$veterinary_pet_care_product_sale_right = get_theme_mod('veterinary_pet_care_product_sale_right_padding');
	if($veterinary_pet_care_product_sale_top != false || $veterinary_pet_care_product_sale_bottom != false || $veterinary_pet_care_product_sale_left != false || $veterinary_pet_care_product_sale_right != false){
		$veterinary_pet_care_custom_css .='.woocommerce span.onsale {';
			$veterinary_pet_care_custom_css .='padding-top: '.esc_attr($veterinary_pet_care_product_sale_top).'px; padding-bottom: '.esc_attr($veterinary_pet_care_product_sale_bottom).'px; padding-left: '.esc_attr($veterinary_pet_care_product_sale_left).'px; padding-right: '.esc_attr($veterinary_pet_care_product_sale_right).'px;';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_product_sale_border_radius = get_theme_mod('veterinary_pet_care_product_sale_border_radius',50);
	if($veterinary_pet_care_product_sale_border_radius != false){
		$veterinary_pet_care_custom_css .='.woocommerce span.onsale {';
			$veterinary_pet_care_custom_css .='border-radius: '.esc_attr($veterinary_pet_care_product_sale_border_radius).'px;';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_menu_case = get_theme_mod('veterinary_pet_care_product_sale_position', 'Right');
	if($veterinary_pet_care_menu_case == 'Right' ){
		$veterinary_pet_care_custom_css .='.woocommerce ul.products li.product .onsale{';
			$veterinary_pet_care_custom_css .=' left:auto; right:0;';
		$veterinary_pet_care_custom_css .='}';
	}elseif($veterinary_pet_care_menu_case == 'Left' ){
		$veterinary_pet_care_custom_css .='.woocommerce ul.products li.product .onsale{';
			$veterinary_pet_care_custom_css .=' left:-10px; right:auto;';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_product_sale_font_size = get_theme_mod('veterinary_pet_care_product_sale_font_size',13);
	$veterinary_pet_care_custom_css .='.woocommerce span.onsale {';
		$veterinary_pet_care_custom_css .='font-size: '.esc_attr($veterinary_pet_care_product_sale_font_size).'px;';
	$veterinary_pet_care_custom_css .='}';

	/*---- Slider Image overlay -----*/
	$veterinary_pet_care_slider_image_overlay = get_theme_mod('veterinary_pet_care_slider_image_overlay',true);
	if($veterinary_pet_care_slider_image_overlay == false){
		$veterinary_pet_care_custom_css .='#slider img {';
			$veterinary_pet_care_custom_css .='opacity: 1;';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_slider_overlay_color = get_theme_mod('veterinary_pet_care_slider_overlay_color');
	if($veterinary_pet_care_slider_overlay_color != false){
		$veterinary_pet_care_custom_css .='#slider  {';
			$veterinary_pet_care_custom_css .='background-color: '.esc_attr($veterinary_pet_care_slider_overlay_color).';';
		$veterinary_pet_care_custom_css .='}';
	}

	/*---- Comment form ----*/
	$veterinary_pet_care_comment_width = get_theme_mod('veterinary_pet_care_comment_width', '100');
	$veterinary_pet_care_custom_css .='#comments textarea{';
		$veterinary_pet_care_custom_css .=' width:'.esc_attr($veterinary_pet_care_comment_width).'%;';
	$veterinary_pet_care_custom_css .='}';

	$veterinary_pet_care_comment_submit_text = get_theme_mod('veterinary_pet_care_comment_submit_text', 'Post Comment');
	if($veterinary_pet_care_comment_submit_text == ''){
		$veterinary_pet_care_custom_css .='#comments p.form-submit {';
			$veterinary_pet_care_custom_css .='display: none;';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_comment_title = get_theme_mod('veterinary_pet_care_comment_title', 'Leave a Reply');
	if($veterinary_pet_care_comment_title == ''){
		$veterinary_pet_care_custom_css .='#comments h2#reply-title {';
			$veterinary_pet_care_custom_css .='display: none;';
		$veterinary_pet_care_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$veterinary_pet_care_footer_bg_color = get_theme_mod('veterinary_pet_care_footer_bg_color');
	if($veterinary_pet_care_footer_bg_color != false){
		$veterinary_pet_care_custom_css .='.footerinner{';
			$veterinary_pet_care_custom_css .='background-color: '.esc_attr($veterinary_pet_care_footer_bg_color).';';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_footer_bg_image = get_theme_mod('veterinary_pet_care_footer_bg_image');
	if($veterinary_pet_care_footer_bg_image != false){
		$veterinary_pet_care_custom_css .='.footerinner{';
			$veterinary_pet_care_custom_css .='background: url('.esc_attr($veterinary_pet_care_footer_bg_image).');';
		$veterinary_pet_care_custom_css .='}';
	}

	/*----- Featured image css -----*/
	$veterinary_pet_care_feature_image_border_radius = get_theme_mod('veterinary_pet_care_feature_image_border_radius');
	if($veterinary_pet_care_feature_image_border_radius != false){
		$veterinary_pet_care_custom_css .='.blog-sec img{';
			$veterinary_pet_care_custom_css .='border-radius: '.esc_attr($veterinary_pet_care_feature_image_border_radius).'px;';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_feature_image_shadow = get_theme_mod('veterinary_pet_care_feature_image_shadow');
	if($veterinary_pet_care_feature_image_shadow != false){
		$veterinary_pet_care_custom_css .='.blog-sec img{';
			$veterinary_pet_care_custom_css .='box-shadow: '.esc_attr($veterinary_pet_care_feature_image_shadow).'px '.esc_attr($veterinary_pet_care_feature_image_shadow).'px '.esc_attr($veterinary_pet_care_feature_image_shadow).'px #aaa;';
		$veterinary_pet_care_custom_css .='}';
	}

	/*------ Sticky header padding ------------*/
	$veterinary_pet_care_top_sticky_header_padding = get_theme_mod('veterinary_pet_care_top_sticky_header_padding');
	$veterinary_pet_care_bottom_sticky_header_padding = get_theme_mod('veterinary_pet_care_bottom_sticky_header_padding');
	$veterinary_pet_care_custom_css .=' .fixed-header{';
		$veterinary_pet_care_custom_css .=' padding-top: '.esc_attr($veterinary_pet_care_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($veterinary_pet_care_bottom_sticky_header_padding).'px';
	$veterinary_pet_care_custom_css .='}';

	/*------ Related products ---------*/
	$veterinary_pet_care_related_products = get_theme_mod('veterinary_pet_care_single_related_products',true);
	if($veterinary_pet_care_related_products == false){
		$veterinary_pet_care_custom_css .=' .related.products{';
			$veterinary_pet_care_custom_css .='display: none;';
		$veterinary_pet_care_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$veterinary_pet_care_menu_font_size = get_theme_mod('veterinary_pet_care_menu_font_size',14);
	if($veterinary_pet_care_menu_font_size != false){
		$veterinary_pet_care_custom_css .='.nav-menu li a{';
			$veterinary_pet_care_custom_css .='font-size: '.esc_attr($veterinary_pet_care_menu_font_size).'px;';
		$veterinary_pet_care_custom_css .='}';
	}

	$veterinary_pet_care_menu_case = get_theme_mod('veterinary_pet_care_menu_case', 'uppercase');
	if($veterinary_pet_care_menu_case == 'uppercase' ){
		$veterinary_pet_care_custom_css .='.nav-menu li a{';
			$veterinary_pet_care_custom_css .=' text-transform: uppercase;';
		$veterinary_pet_care_custom_css .='}';
	}elseif($veterinary_pet_care_menu_case == 'capitalize' ){
		$veterinary_pet_care_custom_css .='.nav-menu li a{';
			$veterinary_pet_care_custom_css .=' text-transform: capitalize;';
		$veterinary_pet_care_custom_css .='}';
	}

	// Featured image header
	$header_image_url = veterinary_pet_care_banner_image( $image_url = '' );
	$veterinary_pet_care_custom_css .='#page-site-header{';
		$veterinary_pet_care_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$veterinary_pet_care_custom_css .='}';

	$veterinary_pet_care_post_featured_image = get_theme_mod('veterinary_pet_care_post_featured_image', 'in-content');
	if($veterinary_pet_care_post_featured_image == 'banner' ){
		$veterinary_pet_care_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img{';
			$veterinary_pet_care_custom_css .=' display: none;';
		$veterinary_pet_care_custom_css .='}';
		$veterinary_pet_care_custom_css .='.page-template-custom-front-page #page-site-header{';
			$veterinary_pet_care_custom_css .=' display: none;';
		$veterinary_pet_care_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$veterinary_pet_care_shop_page_navigation = get_theme_mod('veterinary_pet_care_shop_page_navigation',true);
	if ($veterinary_pet_care_shop_page_navigation == false) {
		$veterinary_pet_care_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$veterinary_pet_care_custom_css .='display: none;';
		$veterinary_pet_care_custom_css .='}';
	}

	/*---- Slider Height ------*/
	$veterinary_pet_care_slider_height = get_theme_mod('veterinary_pet_care_slider_height');
	$veterinary_pet_care_custom_css .='#slider img{';
		$veterinary_pet_care_custom_css .='height: '.esc_attr($veterinary_pet_care_slider_height).'px;';
	$veterinary_pet_care_custom_css .='}';
	$veterinary_pet_care_custom_css .='@media screen and (max-width: 768px){
		#slider img{';
		$veterinary_pet_care_custom_css .='height: auto;';
	$veterinary_pet_care_custom_css .='} }';
<?php
/**
 * Veterinary Pet Care Theme Customizer
 * @package Veterinary Pet Care
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function veterinary_pet_care_customize_register( $wp_customize ) {	

	class Veterinary_Pet_Care_WP_Customize_Range_Control extends WP_Customize_Control{
	    public $type = 'custom_range';
	    public function enqueue(){
	        wp_enqueue_script(
	            'cs-range-control',
	            false,
	            true
	        );
	    }
	    public function render_content(){?>
	        <label>
	            <?php if ( ! empty( $this->label )) : ?>
	                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	            <?php endif; ?>
	            <div class="cs-range-value"><?php echo esc_html($this->value()); ?></div>
	            <input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
	            <?php if ( ! empty( $this->description )) : ?>
	                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	            <?php endif; ?>
	        </label>
        <?php }
	}

	//add home page setting pannel
	$wp_customize->add_panel( 'veterinary_pet_care_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'veterinary-pet-care' ),
	    'description' => __( 'Description of what this panel does.', 'veterinary-pet-care' ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'veterinary_pet_care_theme_color_option', array( 
		'panel' => 'veterinary_pet_care_panel_id', 
		'title' => esc_html__( 'Global Color Settings', 'veterinary-pet-care' ) 
	) );

  	$wp_customize->add_setting( 'veterinary_pet_care_first_theme_color', array(
	    'default' => '#a45a37',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_first_theme_color', array(
  		'label' => 'Color Option 1',
	    'description' => __('One can change complete theme global color settings on just one click.', 'veterinary-pet-care'),
	    'section' => 'veterinary_pet_care_theme_color_option',
	    'settings' => 'veterinary_pet_care_first_theme_color',
  	)));

  	$wp_customize->add_setting( 'veterinary_pet_care_second_theme_color', array(
	    'default' => '#fff6ea',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_second_theme_color', array(
  		'label' => 'Color Option 2',
	    'description' => __('One can change complete theme global color settings on just one click.', 'veterinary-pet-care'),
	    'section' => 'veterinary_pet_care_theme_color_option',
	    'settings' => 'veterinary_pet_care_second_theme_color',
  	)));

	// font array
	$veterinary_pet_care_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	//Typography
	$wp_customize->add_section( 'veterinary_pet_care_typography', array(
    	'title'   => __( 'Typography', 'veterinary-pet-care' ),
		'priority'   => 30,
		'panel' => 'veterinary_pet_care_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'veterinary_pet_care_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_paragraph_color', array(
		'label' => __('Paragraph Color', 'veterinary-pet-care'),
		'section' => 'veterinary_pet_care_typography',
		'settings' => 'veterinary_pet_care_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('veterinary_pet_care_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'veterinary_pet_care_paragraph_font_family', array(
	    'section'  => 'veterinary_pet_care_typography',
	    'label'    => __( 'Paragraph Fonts','veterinary-pet-care'),
	    'type'     => 'select',
	    'choices'  => $veterinary_pet_care_font_array,
	));

	$wp_customize->add_setting('veterinary_pet_care_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('veterinary_pet_care_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_typography',
		'setting'	=> 'veterinary_pet_care_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'veterinary_pet_care_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_atag_color', array(
		'label' => __('"a" Tag Color', 'veterinary-pet-care'),
		'section' => 'veterinary_pet_care_typography',
		'settings' => 'veterinary_pet_care_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('veterinary_pet_care_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'veterinary_pet_care_atag_font_family', array(
	    'section'  => 'veterinary_pet_care_typography',
	    'label'    => __( '"a" Tag Fonts','veterinary-pet-care'),
	    'type'     => 'select',
	    'choices'  => $veterinary_pet_care_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'veterinary_pet_care_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_li_color', array(
		'label' => __('"li" Tag Color', 'veterinary-pet-care'),
		'section' => 'veterinary_pet_care_typography',
		'settings' => 'veterinary_pet_care_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('veterinary_pet_care_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'veterinary_pet_care_li_font_family', array(
	    'section'  => 'veterinary_pet_care_typography',
	    'label'    => __( '"li" Tag Fonts','veterinary-pet-care'),
	    'type'     => 'select',
	    'choices'  => $veterinary_pet_care_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'veterinary_pet_care_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_h1_color', array(
		'label' => __('H1 Color', 'veterinary-pet-care'),
		'section' => 'veterinary_pet_care_typography',
		'settings' => 'veterinary_pet_care_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('veterinary_pet_care_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'veterinary_pet_care_h1_font_family', array(
	    'section'  => 'veterinary_pet_care_typography',
	    'label'    => __( 'H1 Fonts','veterinary-pet-care'),
	    'type'     => 'select',
	    'choices'  => $veterinary_pet_care_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('veterinary_pet_care_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('veterinary_pet_care_h1_font_size',array(
		'label'	=> __('H1 Font Size','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_typography',
		'setting'	=> 'veterinary_pet_care_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'veterinary_pet_care_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_h2_color', array(
		'label' => __('h2 Color', 'veterinary-pet-care'),
		'section' => 'veterinary_pet_care_typography',
		'settings' => 'veterinary_pet_care_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('veterinary_pet_care_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'veterinary_pet_care_h2_font_family', array(
	    'section'  => 'veterinary_pet_care_typography',
	    'label'    => __( 'h2 Fonts','veterinary-pet-care'),
	    'type'     => 'select',
	    'choices'  => $veterinary_pet_care_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('veterinary_pet_care_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('veterinary_pet_care_h2_font_size',array(
		'label'	=> __('h2 Font Size','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_typography',
		'setting'	=> 'veterinary_pet_care_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'veterinary_pet_care_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_h3_color', array(
		'label' => __('h3 Color', 'veterinary-pet-care'),
		'section' => 'veterinary_pet_care_typography',
		'settings' => 'veterinary_pet_care_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('veterinary_pet_care_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'veterinary_pet_care_h3_font_family', array(
	    'section'  => 'veterinary_pet_care_typography',
	    'label'    => __( 'h3 Fonts','veterinary-pet-care'),
	    'type'     => 'select',
	    'choices'  => $veterinary_pet_care_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('veterinary_pet_care_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('veterinary_pet_care_h3_font_size',array(
		'label'	=> __('h3 Font Size','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_typography',
		'setting'	=> 'veterinary_pet_care_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'veterinary_pet_care_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_h4_color', array(
		'label' => __('h4 Color', 'veterinary-pet-care'),
		'section' => 'veterinary_pet_care_typography',
		'settings' => 'veterinary_pet_care_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('veterinary_pet_care_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'veterinary_pet_care_h4_font_family', array(
	    'section'  => 'veterinary_pet_care_typography',
	    'label'    => __( 'h4 Fonts','veterinary-pet-care'),
	    'type'     => 'select',
	    'choices'  => $veterinary_pet_care_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('veterinary_pet_care_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('veterinary_pet_care_h4_font_size',array(
		'label'	=> __('h4 Font Size','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_typography',
		'setting'	=> 'veterinary_pet_care_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'veterinary_pet_care_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_h5_color', array(
		'label' => __('h5 Color', 'veterinary-pet-care'),
		'section' => 'veterinary_pet_care_typography',
		'settings' => 'veterinary_pet_care_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('veterinary_pet_care_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'veterinary_pet_care_h5_font_family', array(
	    'section'  => 'veterinary_pet_care_typography',
	    'label'    => __( 'h5 Fonts','veterinary-pet-care'),
	    'type'     => 'select',
	    'choices'  => $veterinary_pet_care_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('veterinary_pet_care_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('veterinary_pet_care_h5_font_size',array(
		'label'	=> __('h5 Font Size','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_typography',
		'setting'	=> 'veterinary_pet_care_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'veterinary_pet_care_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_h6_color', array(
		'label' => __('h6 Color', 'veterinary-pet-care'),
		'section' => 'veterinary_pet_care_typography',
		'settings' => 'veterinary_pet_care_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('veterinary_pet_care_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control(
	    'veterinary_pet_care_h6_font_family', array(
	    'section'  => 'veterinary_pet_care_typography',
	    'label'    => __( 'h6 Fonts','veterinary-pet-care'),
	    'type'     => 'select',
	    'choices'  => $veterinary_pet_care_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('veterinary_pet_care_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('veterinary_pet_care_h6_font_size',array(
		'label'	=> __('h6 Font Size','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_typography',
		'setting'	=> 'veterinary_pet_care_h6_font_size',
		'type'	=> 'text'
	));

	//Topbar section
	$wp_customize->add_section('veterinary_pet_care_topbar_icon',array(
		'title'	=> __('Topbar Section','veterinary-pet-care'),
		'description'	=> __('Add Header Content here','veterinary-pet-care'),
		'priority'	=> null,
		'panel' => 'veterinary_pet_care_panel_id',
	));

    $wp_customize->add_setting('veterinary_pet_care_topbar_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('veterinary_pet_care_topbar_padding',array(
		'label'	=> esc_html__('Topbar Padding','veterinary-pet-care'),
		'section'=> 'veterinary_pet_care_topbar_icon',
	));

    $wp_customize->add_setting('veterinary_pet_care_top_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_top_topbar_padding',array(
		'description'	=> __('Top','veterinary-pet-care'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'veterinary_pet_care_topbar_icon',
		'type'=> 'number',
	));

	$wp_customize->add_setting('veterinary_pet_care_bottom_topbar_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_bottom_topbar_padding',array(
		'description'	=> __('Bottom','veterinary-pet-care'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'veterinary_pet_care_topbar_icon',
		'type'=> 'number',
	));

	$wp_customize->add_setting('veterinary_pet_care_sticky_header',array(
       'default' => '',
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Stick header on Desktop','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_topbar_icon'
    ));

    $wp_customize->add_setting('veterinary_pet_care_sticky_header_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('veterinary_pet_care_sticky_header_padding',array(
		'label'	=> __('Sticky Header Padding','veterinary-pet-care'),
		'section'=> 'veterinary_pet_care_topbar_icon',
		'type' => 'hidden',
	));

    $wp_customize->add_setting('veterinary_pet_care_top_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_top_sticky_header_padding',array(
		'description'	=> __('Top','veterinary-pet-care'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'veterinary_pet_care_topbar_icon',
		'type'=> 'number'
	));

	$wp_customize->add_setting('veterinary_pet_care_bottom_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_bottom_sticky_header_padding',array(
		'description'	=> __('Bottom','veterinary-pet-care'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'veterinary_pet_care_topbar_icon',
		'type'=> 'number'
	));

	$wp_customize->add_setting('veterinary_pet_care_show_search',array(
       'default' => 'true',
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_show_search',array(
       'type' => 'checkbox',
       'label' => __('Show/Hide Search','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_topbar_icon'
    ));

    $wp_customize->add_setting('veterinary_pet_care_search_placeholder',array(
       'default' => __('Search','veterinary-pet-care'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('veterinary_pet_care_search_placeholder',array(
       'type' => 'text',
       'label' => __('Search Placeholder text','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_topbar_icon'
    ));

	$wp_customize->add_setting('veterinary_pet_care_request_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('veterinary_pet_care_request_text',array(
		'label'	=> __('Add Appointment Text','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_topbar_icon',
		'setting'	=> 'veterinary_pet_care_request_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('veterinary_pet_care_request_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('veterinary_pet_care_request_link',array(
		'label'	=> __('Add Appointment Link','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_topbar_icon',
		'setting'	=> 'veterinary_pet_care_request_link',
		'type'		=> 'url'
	));

	$wp_customize->add_section('veterinary_pet_care_header',array(
		'title'	=> __('Header','veterinary-pet-care'),
		'priority'	=> null,
		'panel' => 'veterinary_pet_care_panel_id',
	));

	$wp_customize->add_setting('veterinary_pet_care_menu_case',array(
        'default' => 'uppercase',
        'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control('veterinary_pet_care_menu_case',array(
        'type' => 'select',
        'label' => __('Menu Case','veterinary-pet-care'),
        'section' => 'veterinary_pet_care_header',
        'choices' => array(
            'uppercase' => __('Uppercase','veterinary-pet-care'),
            'capitalize' => __('Capitalize','veterinary-pet-care'),
        ),
	) );

	$wp_customize->add_setting( 'veterinary_pet_care_menu_font_size', array(
		'default'=> '14',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Veterinary_Pet_Care_WP_Customize_Range_Control( $wp_customize, 'veterinary_pet_care_menu_font_size', array(
        'label'  => __('Menu Font Size','veterinary-pet-care'),
        'section'  => 'veterinary_pet_care_header',
        'description' => __('Measurement is in pixel.','veterinary-pet-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	//Slider section
  	$wp_customize->add_section('veterinary_pet_care_slidersettings',array(
	    'title' => __('Slider Section','veterinary-pet-care'),
	    'description' => '',
	    'priority'  => null,
	    'panel' => 'veterinary_pet_care_panel_id',
	)); 

	$wp_customize->add_setting('veterinary_pet_care_slider_hide_show',array(
	  'default' => false,
	  'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
	));
	$wp_customize->add_control('veterinary_pet_care_slider_hide_show',array(
	  'type' => 'checkbox',
	  'label' => __('Show / Hide slider','veterinary-pet-care'),
	  'section' => 'veterinary_pet_care_slidersettings',
	));

	$wp_customize->add_setting('veterinary_pet_care_slider_indicator',array(
        'default' => true,
        'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
	));
	$wp_customize->add_control('veterinary_pet_care_slider_indicator',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Indicators','veterinary-pet-care'),
      	'section' => 'veterinary_pet_care_slidersettings'
	));

	$wp_customize->add_setting('veterinary_pet_care_slider_title',array(
        'default' => true,
        'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
	));
	$wp_customize->add_control('veterinary_pet_care_slider_title',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Title','veterinary-pet-care'),
      	'section' => 'veterinary_pet_care_slidersettings'
	));

	$wp_customize->add_setting('veterinary_pet_care_slider_content',array(
        'default' => true,
        'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
	));
	$wp_customize->add_control('veterinary_pet_care_slider_content',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Content','veterinary-pet-care'),
      	'section' => 'veterinary_pet_care_slidersettings'
	));

	$wp_customize->add_setting('veterinary_pet_care_slider_button',array(
        'default' => true,
        'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
	));
	$wp_customize->add_control('veterinary_pet_care_slider_button',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Button','veterinary-pet-care'),
      	'section' => 'veterinary_pet_care_slidersettings'
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'veterinary_pet_care_slidersettings_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'veterinary_pet_care_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'veterinary_pet_care_slidersettings_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'veterinary-pet-care' ),
			'section'  => 'veterinary_pet_care_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting( 'veterinary_pet_care_slider_speed', array(
		'default'              => 3000,
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	) );
	$wp_customize->add_control( 'veterinary_pet_care_slider_speed', array(
		'label'       => esc_html__( 'Slider Speed','veterinary-pet-care' ),
		'section'     => 'veterinary_pet_care_slidersettings',
		'type'        => 'number',
		'settings'    => 'veterinary_pet_care_slider_speed',
		'input_attrs' => array(
			'step'             => 500,
			'min'              => 500,
			'max'              => 5000,
		),
	) );

	//content Alignment
    $wp_customize->add_setting('veterinary_pet_care_slider_alignment_option',array(
    'default' => 'Center Align',
        'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control('veterinary_pet_care_slider_alignment_option',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','veterinary-pet-care'),
        'section' => 'veterinary_pet_care_slidersettings',
        'choices' => array(
            'Center Align' => __('Center Align','veterinary-pet-care'),
            'Left Align' => __('Left Align','veterinary-pet-care'),
            'Right Align' => __('Right Align','veterinary-pet-care'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'veterinary_pet_care_slider_excerpt', array(
		'default'              => 25,
		'sanitize_callback'    => 'veterinary_pet_care_sanitize_float',
	) );
	$wp_customize->add_control( 'veterinary_pet_care_slider_excerpt', array(
		'label'       => esc_html__( 'Slider Excerpt length','veterinary-pet-care' ),
		'section'     => 'veterinary_pet_care_slidersettings',
		'type'        => 'number',
		'settings'    => 'veterinary_pet_care_slider_excerpt',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('veterinary_pet_care_slider_image_overlay',array(
        'default' => true,
        'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
	));
	$wp_customize->add_control('veterinary_pet_care_slider_image_overlay',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Slider Image Overlay','veterinary-pet-care'),
      	'section' => 'veterinary_pet_care_slidersettings',
	));

	$wp_customize->add_setting( 'veterinary_pet_care_slider_overlay_color', array(
	    'default' => '#000',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_slider_overlay_color', array(
	    'label' => __('Slider Overlay Color', 'veterinary-pet-care'),
	    'section' => 'veterinary_pet_care_slidersettings',
  	)));

	//Opacity
	$wp_customize->add_setting('veterinary_pet_care_slider_opacity',array(
      'default'              => 0.7,
      'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control( 'veterinary_pet_care_slider_opacity', array(
		'label'       => esc_html__( 'Slider Image Opacity','veterinary-pet-care' ),
		'section'     => 'veterinary_pet_care_slidersettings',
		'type'        => 'select',
		'settings'    => 'veterinary_pet_care_slider_opacity',
		'choices' => array(
	      '0' =>  esc_attr('0','veterinary-pet-care'),
	      '0.1' =>  esc_attr('0.1','veterinary-pet-care'),
	      '0.2' =>  esc_attr('0.2','veterinary-pet-care'),
	      '0.3' =>  esc_attr('0.3','veterinary-pet-care'),
	      '0.4' =>  esc_attr('0.4','veterinary-pet-care'),
	      '0.5' =>  esc_attr('0.5','veterinary-pet-care'),
	      '0.6' =>  esc_attr('0.6','veterinary-pet-care'),
	      '0.7' =>  esc_attr('0.7','veterinary-pet-care'),
	      '0.8' =>  esc_attr('0.8','veterinary-pet-care'),
	      '0.9' =>  esc_attr('0.9','veterinary-pet-care')
	  ),
	));

	$wp_customize->add_setting( 'veterinary_pet_care_slider_button_label', array(
		'default' => __('READ MORE','veterinary-pet-care'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'veterinary_pet_care_slider_button_label', array(
		'label' => esc_html__( 'Slider Button Label','veterinary-pet-care' ),
		'section'     => 'veterinary_pet_care_slidersettings',
		'type'        => 'text',
		'settings'    => 'veterinary_pet_care_slider_button_label'
	) );

	$wp_customize->add_setting( 'veterinary_pet_care_slider_height', array(
		'default'          => '',
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	) );
	$wp_customize->add_control( 'veterinary_pet_care_slider_height', array(
		'label'       => esc_html__( 'Slider Height','veterinary-pet-care' ),
		'section'     => 'veterinary_pet_care_slidersettings',
		'type'        => 'number',
		'description' => __('Measurement is in pixel.','veterinary-pet-care'),
		'input_attrs' => array(
			'step' => 1,
			'min'  => 500,
			'max'  => 1000,
		),
	) );

	//About Section
	$wp_customize->add_section('veterinary_pet_care_services',array(
		'title'	=> __('Services Section','veterinary-pet-care'),
		'description'	=> __('Add Slider sections below.','veterinary-pet-care'),
		'panel' => 'veterinary_pet_care_panel_id',
	));

	$wp_customize->add_setting('veterinary_pet_care_services_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('veterinary_pet_care_services_title',array(
		'label'	=> __('Section Title','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_services',
		'type'		=> 'text'
	));

	$categories = get_categories();
		$cat_posts = array();
			$i = 0;
			$cat_posts[]='Select';	
		foreach($categories as $category){
			if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('veterinary_pet_care_services_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'veterinary_pet_care_sanitize_choices',
	));
	$wp_customize->add_control('veterinary_pet_care_services_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display Latest Post','veterinary-pet-care'),
		'description'=> __('Size of image should be 80 x 80 ','veterinary-pet-care'),
		'section' => 'veterinary_pet_care_services',
	));

	//layout setting
	$wp_customize->add_section( 'veterinary_pet_care_theme_layout', array(
    	'title'      => __( 'Blog Settings', 'veterinary-pet-care' ), 
		'priority'   => null,
		'panel' => 'veterinary_pet_care_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('veterinary_pet_care_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	) );
	$wp_customize->add_control(new Veterinary_Pet_Care_Image_Radio_Control($wp_customize, 'veterinary_pet_care_layout', array(
        'type' => 'radio',
        'label' => esc_html__('Select Sidebar layout', 'veterinary-pet-care'),
        'section' => 'veterinary_pet_care_theme_layout',
        'settings' => 'veterinary_pet_care_layout',
        'choices' => array(
            'Right Sidebar' => esc_url(get_template_directory_uri()) . '/images/layout3.png',
            'Left Sidebar' => esc_url(get_template_directory_uri()) . '/images/layout2.png',
            'One Column' => esc_url(get_template_directory_uri()) . '/images/layout1.png',
            'Three Columns' => esc_url(get_template_directory_uri()) . '/images/layout4.png',
            'Four Columns' => esc_url(get_template_directory_uri()) . '/images/layout5.png',
            'Grid Layout' => esc_url(get_template_directory_uri()) . '/images/layout6.png'
   	))));

   	$wp_customize->add_setting('veterinary_pet_care_metafields_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_theme_layout'
    ));

    $wp_customize->add_setting('veterinary_pet_care_metafields_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_theme_layout'
    ));

    $wp_customize->add_setting('veterinary_pet_care_metafields_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_theme_layout'
    ));

    $wp_customize->add_setting('veterinary_pet_care_post_navigation',array(
       'default' => 'true',
       'sanitize_callback' => 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_post_navigation',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Post Navigation','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_theme_layout'
    ));

    $wp_customize->add_setting('veterinary_pet_care_blog_post_content',array(
    	'default' => 'Excerpt Content',
        'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control('veterinary_pet_care_blog_post_content',array(
        'type' => 'radio',
        'label' => __('Blog Post Content Type','veterinary-pet-care'),
        'section' => 'veterinary_pet_care_theme_layout',
        'choices' => array(
            'No Content' => __('No Content','veterinary-pet-care'),
            'Full Content' => __('Full Content','veterinary-pet-care'),
            'Excerpt Content' => __('Excerpt Content','veterinary-pet-care'),
        ),
	) );

    $wp_customize->add_setting( 'veterinary_pet_care_post_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	) );
	$wp_customize->add_control( 'veterinary_pet_care_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Excerpt Number (Max 50)','veterinary-pet-care' ),
		'section'     => 'veterinary_pet_care_theme_layout',
		'type'        => 'number',
		'settings'    => 'veterinary_pet_care_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
		'active_callback' => 'veterinary_pet_care_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'veterinary_pet_care_button_excerpt_suffix', array(
		'default'   => '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'veterinary_pet_care_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','veterinary-pet-care' ),
		'section'     => 'veterinary_pet_care_theme_layout',
		'type'        => 'text',
		'settings'    => 'veterinary_pet_care_button_excerpt_suffix',
		'active_callback' => 'veterinary_pet_care_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'veterinary_pet_care_feature_image_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Veterinary_Pet_Care_WP_Customize_Range_Control( $wp_customize, 'veterinary_pet_care_feature_image_border_radius', array(
        'label'  => __('Featured Image Border Radius','veterinary-pet-care'),
        'section'  => 'veterinary_pet_care_theme_layout',
        'description' => __('Measurement is in pixel.','veterinary-pet-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'veterinary_pet_care_feature_image_shadow', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Veterinary_Pet_Care_WP_Customize_Range_Control( $wp_customize, 'veterinary_pet_care_feature_image_shadow', array(
        'label' => __('Featured Image Shadow','veterinary-pet-care'),
        'section'  => 'veterinary_pet_care_theme_layout',
        'description' => __('Measurement is in pixel.','veterinary-pet-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

    $wp_customize->add_setting( 'veterinary_pet_care_pagination_type', array(
        'default'			=> 'page-numbers',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'veterinary_pet_care_pagination_type', array(
        'section' => 'veterinary_pet_care_theme_layout',
        'type' => 'select',
        'label' => __( 'Blog Pagination Style', 'veterinary-pet-care' ),
        'choices'		=> array(
            'page-numbers'  => __( 'Number', 'veterinary-pet-care' ),
            'next-prev' => __( 'Next/Prev', 'veterinary-pet-care' ),
    )));

    $wp_customize->add_setting('veterinary_pet_care_blog_nav_position',array(
        'default' => 'bottom',
        'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
    ));
	$wp_customize->add_control('veterinary_pet_care_blog_nav_position', array(
        'type' => 'select',
        'label' => __( 'Blog Post Navigation Position', 'veterinary-pet-care' ),
        'section' => 'veterinary_pet_care_theme_layout',
        'choices' => array(
            'top' => __('Top','veterinary-pet-care'),
            'bottom' => __('Bottom','veterinary-pet-care'),
            'both' => __('Both','veterinary-pet-care')
        ),
    ));

	$wp_customize->add_section( 'veterinary_pet_care_single_post_settings', array(
		'title' => __( 'Single Post Options', 'veterinary-pet-care' ),
		'panel' => 'veterinary_pet_care_panel_id',
	));

	$wp_customize->add_setting('veterinary_pet_care_single_post_breadcrumb',array(
       'default' => 'true',
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_single_post_breadcrumb',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Breadcrumb','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_single_post_settings'
    ));

	$wp_customize->add_setting('veterinary_pet_care_single_post_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_single_post_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Date','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_single_post_settings'
    ));

    $wp_customize->add_setting('veterinary_pet_care_single_post_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_single_post_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Author','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_single_post_settings'
    ));

    $wp_customize->add_setting('veterinary_pet_care_single_post_comment_no',array(
       'default' => 'true',
       'sanitize_callback' => 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_single_post_comment_no',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Comment Number','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_single_post_settings'
    ));

	$wp_customize->add_setting('veterinary_pet_care_metafields_tags',array(
       'default' => 'true',
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_metafields_tags',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Tags','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_single_post_settings'
    ));

    $wp_customize->add_setting('veterinary_pet_care_single_post_image',array(
       'default' => 'true',
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_single_post_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Featured Image','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_single_post_settings'
    ));

    $wp_customize->add_setting( 'veterinary_pet_care_post_featured_image', array(
        'default' => 'in-content',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'veterinary_pet_care_post_featured_image', array(
        'section' => 'veterinary_pet_care_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Featured Image Display Type', 'veterinary-pet-care' ),
        'choices'		=> array(
            'banner'  => __('as Banner Image', 'veterinary-pet-care'),
            'in-content' => __( 'as Featured Image', 'veterinary-pet-care' ),
    )));

    $wp_customize->add_setting('veterinary_pet_care_single_post_nav',array(
       'default' => 'true',
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_single_post_nav',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Navigation','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_single_post_settings'
    ));

    $wp_customize->add_setting( 'veterinary_pet_care_single_post_prev_nav_text', array(
		'default' => __('Previous','veterinary-pet-care'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'veterinary_pet_care_single_post_prev_nav_text', array(
		'label' => esc_html__( 'Single Post Previous Nav text','veterinary-pet-care' ),
		'section'     => 'veterinary_pet_care_single_post_settings',
		'type'        => 'text',
		'settings'    => 'veterinary_pet_care_single_post_prev_nav_text'
	) );

	$wp_customize->add_setting( 'veterinary_pet_care_single_post_next_nav_text', array(
		'default' => __('Next','veterinary-pet-care'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'veterinary_pet_care_single_post_next_nav_text', array(
		'label' => esc_html__( 'Single Post Next Nav text','veterinary-pet-care' ),
		'section'     => 'veterinary_pet_care_single_post_settings',
		'type'        => 'text',
		'settings'    => 'veterinary_pet_care_single_post_next_nav_text'
	) );

    $wp_customize->add_setting('veterinary_pet_care_single_post_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_single_post_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post comment','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_single_post_settings'
    ));

	$wp_customize->add_setting( 'veterinary_pet_care_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Veterinary_Pet_Care_WP_Customize_Range_Control( $wp_customize, 'veterinary_pet_care_comment_width', array(
        'label'  => __('Comment textarea width','veterinary-pet-care'),
        'section'  => 'veterinary_pet_care_single_post_settings',
        'description' => __('Measurement is in %.','veterinary-pet-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 100,
        ),
    )));

    $wp_customize->add_setting('veterinary_pet_care_comment_title',array(
       'default' => __('Leave a Reply','veterinary-pet-care'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('veterinary_pet_care_comment_title',array(
       'type' => 'text',
       'label' => __('Comment form Title','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_single_post_settings'
    ));

    $wp_customize->add_setting('veterinary_pet_care_comment_submit_text',array(
       'default' => __('Post Comment','veterinary-pet-care'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('veterinary_pet_care_comment_submit_text',array(
       'type' => 'text',
       'label' => __('Comment Submit Button Label','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_single_post_settings'
    ));

	$wp_customize->add_setting('veterinary_pet_care_related_posts',array(
       'default' => true,
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_related_posts',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Posts','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_single_post_settings'
    ));

    $wp_customize->add_setting('veterinary_pet_care_related_posts_title',array(
       'default' => __('You May Also Like','veterinary-pet-care'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('veterinary_pet_care_related_posts_title',array(
       'type' => 'text',
       'label' => __('Related Posts Title','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_single_post_settings'
    ));

    $wp_customize->add_setting( 'veterinary_pet_care_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	) );
	$wp_customize->add_control( 'veterinary_pet_care_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','veterinary-pet-care' ),
		'section' => 'veterinary_pet_care_single_post_settings',
		'type' => 'number',
		'settings' => 'veterinary_pet_care_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

    $wp_customize->add_setting( 'veterinary_pet_care_post_shown_by', array(
        'default' => 'categories',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control( 'veterinary_pet_care_post_shown_by', array(
        'section' => 'veterinary_pet_care_single_post_settings',
        'type' => 'radio',
        'label' => __( 'Related Posts must be shown:', 'veterinary-pet-care' ),
        'choices'		=> array(
            'categories' => __('By Categories', 'veterinary-pet-care'),
            'tags' => __( 'By Tags', 'veterinary-pet-care' ),
    )));

	// Button option
	$wp_customize->add_section( 'veterinary_pet_care_button_options', array(
		'title' =>  __( 'Button Options', 'veterinary-pet-care' ),
		'panel' => 'veterinary_pet_care_panel_id',
	));

    $wp_customize->add_setting( 'veterinary_pet_care_blog_button_text', array(
		'default'   => __('Read Full','veterinary-pet-care'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'veterinary_pet_care_blog_button_text', array(
		'label'       => esc_html__( 'Blog Post Button Label','veterinary-pet-care' ),
		'section'     => 'veterinary_pet_care_button_options',
		'type'        => 'text',
		'settings'    => 'veterinary_pet_care_blog_button_text'
	) );

	$wp_customize->add_setting('veterinary_pet_care_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('veterinary_pet_care_button_padding',array(
		'label'	=> esc_html__('Button Padding','veterinary-pet-care'),
		'section'=> 'veterinary_pet_care_button_options',
		'active_callback' => 'veterinary_pet_care_button_enabled'
	));

	$wp_customize->add_setting('veterinary_pet_care_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_top_button_padding',array(
		'label'	=> __('Top','veterinary-pet-care'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'veterinary_pet_care_button_options',
		'type'=> 'number',
		'active_callback' => 'veterinary_pet_care_button_enabled'
	));

	$wp_customize->add_setting('veterinary_pet_care_bottom_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_bottom_button_padding',array(
		'label'	=> __('Bottom','veterinary-pet-care'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'veterinary_pet_care_button_options',
		'type'=> 'number',
		'active_callback' => 'veterinary_pet_care_button_enabled'
	));

	$wp_customize->add_setting('veterinary_pet_care_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_left_button_padding',array(
		'label'	=> __('Left','veterinary-pet-care'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'veterinary_pet_care_button_options',
		'type'=> 'number',
		'active_callback' => 'veterinary_pet_care_button_enabled'
	));

	$wp_customize->add_setting('veterinary_pet_care_right_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_right_button_padding',array(
		'label'	=> __('Right','veterinary-pet-care'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'veterinary_pet_care_button_options',
		'type'=> 'number',
		'active_callback' => 'veterinary_pet_care_button_enabled'
	));

	$wp_customize->add_setting( 'veterinary_pet_care_button_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Veterinary_Pet_Care_WP_Customize_Range_Control( $wp_customize, 'veterinary_pet_care_button_border_radius', array(
            'label'  => __('Border Radius','veterinary-pet-care'),
            'section'  => 'veterinary_pet_care_button_options',
            'description' => __('Measurement is in pixel.','veterinary-pet-care'),
            'input_attrs' => array(
                'min' => 0,
                'max' => 50,
            ),
			'active_callback' => 'veterinary_pet_care_button_enabled'
    )));

    //Sidebar setting
	$wp_customize->add_section( 'veterinary_pet_care_sidebar_options', array(
    	'title'   => __( 'Sidebar options', 'veterinary-pet-care' ),
		'priority'   => null,
		'panel' => 'veterinary_pet_care_panel_id'
	) );

	$wp_customize->add_setting('veterinary_pet_care_single_page_layout',array(
        'default' => 'One Column',
        'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
    ));
	$wp_customize->add_control('veterinary_pet_care_single_page_layout', array(
        'type' => 'select',
        'label' => __( 'Single Page Layout', 'veterinary-pet-care' ),
        'section' => 'veterinary_pet_care_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','veterinary-pet-care'),
            'Right Sidebar' => __('Right Sidebar','veterinary-pet-care'),
            'One Column' => __('One Column','veterinary-pet-care')
        ),
    ));

    $wp_customize->add_setting('veterinary_pet_care_single_post_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
    ));
	$wp_customize->add_control('veterinary_pet_care_single_post_layout', array(
        'type' => 'select',
        'label' => __( 'Single Post Layout', 'veterinary-pet-care' ),
        'section' => 'veterinary_pet_care_sidebar_options',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','veterinary-pet-care'),
            'Right Sidebar' => __('Right Sidebar','veterinary-pet-care'),
            'One Column' => __('One Column','veterinary-pet-care')
        ),
    ));

    //Advance Options
	$wp_customize->add_section( 'veterinary_pet_care_advance_options', array(
    	'title' => __( 'Advance Options', 'veterinary-pet-care' ),
		'priority'   => null,
		'panel' => 'veterinary_pet_care_panel_id'
	) );

	$wp_customize->add_setting('veterinary_pet_care_preloader',array(
	   'default' => 'true',
	   'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
	));
	$wp_customize->add_control('veterinary_pet_care_preloader',array(
	   'type' => 'checkbox',
	   'label' => __('Enable / Disable Preloader','veterinary-pet-care'),
	   'section' => 'veterinary_pet_care_advance_options'
	));

	$wp_customize->add_setting( 'veterinary_pet_care_preloader_color', array(
	  'default' => '#333333',
	  'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_preloader_color', array(
		'label' => __('Preloader Color', 'veterinary-pet-care'),
	  'section' => 'veterinary_pet_care_advance_options',
	  'settings' => 'veterinary_pet_care_preloader_color',
	)));

	$wp_customize->add_setting( 'veterinary_pet_care_preloader_bg_color', array(
	  'default' => '#ffffff',
	  'sanitize_callback' => 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'veterinary_pet_care_preloader_bg_color', array(
		'label' => __('Preloader Background Color', 'veterinary-pet-care'),
	    'section' => 'veterinary_pet_care_advance_options',
	    'settings' => 'veterinary_pet_care_preloader_bg_color',
	)));

	$wp_customize->add_setting('veterinary_pet_care_preloader_type',array(
        'default' => 'Square',
        'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control('veterinary_pet_care_preloader_type',array(
        'type' => 'radio',
        'label' => __('Preloader Type','veterinary-pet-care'),
        'section' => 'veterinary_pet_care_advance_options',
        'choices' => array(
            'Square' => __('Square','veterinary-pet-care'),
            'Circle' => __('Circle','veterinary-pet-care'),
        ),
	) );

	$wp_customize->add_setting('veterinary_pet_care_theme_layout_options',array(
	    'default' => 'Default Theme',
	    'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control('veterinary_pet_care_theme_layout_options',array(
	    'type' => 'radio',
	    'label' => __('Theme Layout','veterinary-pet-care'),
	    'section' => 'veterinary_pet_care_advance_options',
	    'choices' => array(
	        'Default Theme' => __('Default Theme','veterinary-pet-care'),
	        'Container Theme' => __('Container Theme','veterinary-pet-care'),
	        'Box Container Theme' => __('Box Container Theme','veterinary-pet-care'),
	    ),
	) );

	//404 Page Option
	$wp_customize->add_section('veterinary_pet_care_404_settings',array(
		'title'	=> __('404 Page & Search Result Settings','veterinary-pet-care'),
		'priority'	=> null,
		'panel' => 'veterinary_pet_care_panel_id',
	));

	$wp_customize->add_setting('veterinary_pet_care_404_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('veterinary_pet_care_404_title',array(
		'label'	=> __('404 Title','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('veterinary_pet_care_404_button_label',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('veterinary_pet_care_404_button_label',array(
		'label'	=> __('404 button Label','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('veterinary_pet_care_search_result_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('veterinary_pet_care_search_result_title',array(
		'label'	=> __('No Search Result Title','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('veterinary_pet_care_search_result_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('veterinary_pet_care_search_result_text',array(
		'label'	=> __('No Search Result Text','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_404_settings',
		'type'		=> 'text'
	));	

	//Woocommerce Options
	$wp_customize->add_section('veterinary_pet_care_woocommerce',array(
		'title'	=> __('WooCommerce Options','veterinary-pet-care'),
		'panel' => 'veterinary_pet_care_panel_id',
	));

	$wp_customize->add_setting('veterinary_pet_care_shop_page_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_shop_page_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Sidebar','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_woocommerce'
    ));

    $wp_customize->add_setting('veterinary_pet_care_shop_page_navigation',array(
       'default' => true,
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_shop_page_navigation',array(
       'type' => 'checkbox',
       'label' => __('Enable Shop Page Pagination','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_woocommerce'
    ));

    $wp_customize->add_setting('veterinary_pet_care_single_product_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_single_product_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Enable Single Product Page Sidebar','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_woocommerce'
    ));

    $wp_customize->add_setting('veterinary_pet_care_single_related_products',array(
       'default' => true,
       'sanitize_callback' => 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_single_related_products',array(
       'type' => 'checkbox',
       'label' => __('Enable Related Products','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_woocommerce'
    ));

    $wp_customize->add_setting('veterinary_pet_care_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_products_per_page',array(
		'label'	=> __('Products Per Page','veterinary-pet-care'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'veterinary_pet_care_woocommerce',
		'type'=> 'number',
	));

	$wp_customize->add_setting('veterinary_pet_care_products_per_row',array(
		'default'=> '3',
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control('veterinary_pet_care_products_per_row',array(
		'label'	=> __('Products Per Row','veterinary-pet-care'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'veterinary_pet_care_woocommerce',
		'type'=> 'select',
	));

	$wp_customize->add_setting('veterinary_pet_care_product_border',array(
       'default' => false,
       'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
    ));
    $wp_customize->add_control('veterinary_pet_care_product_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide product border','veterinary-pet-care'),
       'section' => 'veterinary_pet_care_woocommerce',
    ));

    $wp_customize->add_setting('veterinary_pet_care_product_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('veterinary_pet_care_product_padding',array(
		'label'	=> esc_html__('Product Padding','veterinary-pet-care'),
		'section'=> 'veterinary_pet_care_woocommerce',
	));

	$wp_customize->add_setting( 'veterinary_pet_care_product_top_padding',array(
		'default' => 0,
		'sanitize_callback' => 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_product_top_padding', array(
		'label' => esc_html__( 'Top','veterinary-pet-care' ),
		'type' => 'number',
		'section' => 'veterinary_pet_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('veterinary_pet_care_product_bottom_padding',array(
		'default' => 0,
		'sanitize_callback' => 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_product_bottom_padding', array(
		'label' => esc_html__( 'Bottom','veterinary-pet-care' ),
		'type' => 'number',
		'section' => 'veterinary_pet_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('veterinary_pet_care_product_left_padding',array(
		'default' => 0,
		'sanitize_callback' => 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_product_left_padding', array(
		'label' => esc_html__( 'Left','veterinary-pet-care' ),
		'type' => 'number',
		'section' => 'veterinary_pet_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'veterinary_pet_care_product_right_padding',array(
		'default' => 0,
		'sanitize_callback' => 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_product_right_padding', array(
		'label' => esc_html__( 'Right','veterinary-pet-care' ),
		'type' => 'number',
		'section' => 'veterinary_pet_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'veterinary_pet_care_product_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Veterinary_Pet_Care_WP_Customize_Range_Control( $wp_customize, 'veterinary_pet_care_product_border_radius', array(
        'label'  => __('Product Border Radius','veterinary-pet-care'),
        'section'  => 'veterinary_pet_care_woocommerce',
        'description' => __('Measurement is in pixel.','veterinary-pet-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	$wp_customize->add_setting('veterinary_pet_care_product_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('veterinary_pet_care_product_button_padding',array(
		'label'	=> esc_html__('Product Button Padding','veterinary-pet-care'),
		'section'=> 'veterinary_pet_care_woocommerce',
	));

	$wp_customize->add_setting( 'veterinary_pet_care_product_button_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_product_button_top_padding', array(
		'label' => esc_html__( 'Top','veterinary-pet-care' ),
		'type' => 'number',
		'section' => 'veterinary_pet_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('veterinary_pet_care_product_button_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_product_button_bottom_padding', array(
		'label' => esc_html__( 'Bottom','veterinary-pet-care' ),
		'type' => 'number',
		'section' => 'veterinary_pet_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('veterinary_pet_care_product_button_left_padding',array(
		'default' => 15,
		'sanitize_callback' => 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_product_button_left_padding', array(
		'label' => esc_html__( 'Left','veterinary-pet-care' ),
		'type' => 'number',
		'section' => 'veterinary_pet_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'veterinary_pet_care_product_button_right_padding',array(
		'default' => 15,
		'sanitize_callback' => 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_product_button_right_padding', array(
		'label' => esc_html__( 'Right','veterinary-pet-care' ),
		'type' => 'number',
		'section' => 'veterinary_pet_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'veterinary_pet_care_product_button_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Veterinary_Pet_Care_WP_Customize_Range_Control( $wp_customize, 'veterinary_pet_care_product_button_border_radius', array(
        'label'  => __('Product Button Border Radius','veterinary-pet-care'),
        'section'  => 'veterinary_pet_care_woocommerce',
        'description' => __('Measurement is in pixel.','veterinary-pet-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('veterinary_pet_care_product_sale_position',array(
        'default' => 'Right',
        'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control('veterinary_pet_care_product_sale_position',array(
        'type' => 'radio',
        'label' => __('Product Sale Position','veterinary-pet-care'),
        'section' => 'veterinary_pet_care_woocommerce',
        'choices' => array(
            'Left' => __('Left','veterinary-pet-care'),
            'Right' => __('Right','veterinary-pet-care'),
        ),
	) );

	$wp_customize->add_setting( 'veterinary_pet_care_product_sale_font_size',array(
		'default' => '13',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Veterinary_Pet_Care_WP_Customize_Range_Control( $wp_customize, 'veterinary_pet_care_product_sale_font_size', array(
        'label'  => __('Product Sale Font Size','veterinary-pet-care'),
        'section'  => 'veterinary_pet_care_woocommerce',
        'description' => __('Measurement is in pixel.','veterinary-pet-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

    $wp_customize->add_setting('veterinary_pet_care_product_sale_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('veterinary_pet_care_product_sale_padding',array(
		'label'	=> esc_html__('Product Sale Padding','veterinary-pet-care'),
		'section'=> 'veterinary_pet_care_woocommerce',
	));

	$wp_customize->add_setting( 'veterinary_pet_care_product_sale_top_padding',array(
		'default' => 0,
		'sanitize_callback' => 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_product_sale_top_padding', array(
		'label' => esc_html__( 'Top','veterinary-pet-care' ),
		'type' => 'number',
		'section' => 'veterinary_pet_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('veterinary_pet_care_product_sale_bottom_padding',array(
		'default' => 0,
		'sanitize_callback' => 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_product_sale_bottom_padding', array(
		'label' => esc_html__( 'Bottom','veterinary-pet-care' ),
		'type' => 'number',
		'section' => 'veterinary_pet_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('veterinary_pet_care_product_sale_left_padding',array(
		'default' => 0,
		'sanitize_callback' => 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_product_sale_left_padding', array(
		'label' => esc_html__( 'Left','veterinary-pet-care' ),
		'type' => 'number',
		'section' => 'veterinary_pet_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('veterinary_pet_care_product_sale_right_padding',array(
		'default' => 0,
		'sanitize_callback' => 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_product_sale_right_padding', array(
		'label' => esc_html__( 'Right','veterinary-pet-care' ),
		'type' => 'number',
		'section' => 'veterinary_pet_care_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'veterinary_pet_care_product_sale_border_radius',array(
		'default' => '50',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Veterinary_Pet_Care_WP_Customize_Range_Control( $wp_customize, 'veterinary_pet_care_product_sale_border_radius', array(
        'label'  => __('Product Sale Border Radius','veterinary-pet-care'),
        'section'  => 'veterinary_pet_care_woocommerce',
        'description' => __('Measurement is in pixel.','veterinary-pet-care'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        )
    )));

	//footer text
	$wp_customize->add_section('veterinary_pet_care_footer_section',array(
		'title'	=> __('Footer Section','veterinary-pet-care'),
		'panel' => 'veterinary_pet_care_panel_id'
	));

	$wp_customize->add_setting('veterinary_pet_care_hide_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'veterinary_pet_care_sanitize_checkbox'
	));
	$wp_customize->add_control('veterinary_pet_care_hide_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Back To Top','veterinary-pet-care'),
      	'section' => 'veterinary_pet_care_footer_section',
	));

	$wp_customize->add_setting('veterinary_pet_care_back_to_top',array(
        'default' => 'Right',
        'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control('veterinary_pet_care_back_to_top',array(
        'type' => 'radio',
        'label' => __('Back to Top Alignment','veterinary-pet-care'),
        'section' => 'veterinary_pet_care_footer_section',
        'choices' => array(
            'Left' => __('Left','veterinary-pet-care'),
            'Right' => __('Right','veterinary-pet-care'),
            'Center' => __('Center','veterinary-pet-care'),
        ),
	) );

	$wp_customize->add_setting('veterinary_pet_care_footer_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'veterinary_pet_care_footer_bg_color', array(
		'label' => __('Footer Background Color', 'veterinary-pet-care'),
		'section'  => 'veterinary_pet_care_footer_section',
	)));

	$wp_customize->add_setting('veterinary_pet_care_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'veterinary_pet_care_footer_bg_image',array(
        'label' => __('Footer Background Image','veterinary-pet-care'),
        'section' => 'veterinary_pet_care_footer_section'
	)));

	$wp_customize->add_setting('veterinary_pet_care_footer_widget',array(
        'default'           => '4',
        'sanitize_callback' => 'veterinary_pet_care_sanitize_choices',
    ));
    $wp_customize->add_control('veterinary_pet_care_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer columns', 'veterinary-pet-care'),
        'section'     => 'veterinary_pet_care_footer_section',
        'description' => __('Select the number of footer columns and add your widgets in the footer.', 'veterinary-pet-care'),
        'choices' => array(
            '1'     => __('One column', 'veterinary-pet-care'),
            '2'     => __('Two columns', 'veterinary-pet-care'),
            '3'     => __('Three columns', 'veterinary-pet-care'),
            '4'     => __('Four columns', 'veterinary-pet-care')
        ),
    )); 

    $wp_customize->add_setting('veterinary_pet_care_copyright_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('veterinary_pet_care_copyright_padding',array(
		'label'	=> esc_html__('Copyright Padding','veterinary-pet-care'),
		'section'=> 'veterinary_pet_care_footer_section',
	));

    $wp_customize->add_setting('veterinary_pet_care_top_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_top_copyright_padding',array(
		'description'	=> __('Top','veterinary-pet-care'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'veterinary_pet_care_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('veterinary_pet_care_bottom_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'veterinary_pet_care_sanitize_float'
	));
	$wp_customize->add_control('veterinary_pet_care_bottom_copyright_padding',array(
		'description'	=> __('Bottom','veterinary-pet-care'),
		'input_attrs' => array(
            'step' => 1,
			'min' => 0,
			'max' => 50,
        ),
		'section'=> 'veterinary_pet_care_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('veterinary_pet_care_copyright_alignment',array(
        'default' => 'center',
        'sanitize_callback' => 'veterinary_pet_care_sanitize_choices'
	));
	$wp_customize->add_control('veterinary_pet_care_copyright_alignment',array(
        'type' => 'radio',
        'label' => __('Copyright Alignment','veterinary-pet-care'),
        'section' => 'veterinary_pet_care_footer_section',
        'choices' => array(
            'left' => __('Left','veterinary-pet-care'),
            'right' => __('Right','veterinary-pet-care'),
            'center' => __('Center','veterinary-pet-care'),
        ),
	) );

	$wp_customize->add_setting( 'veterinary_pet_care_copyright_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Veterinary_Pet_Care_WP_Customize_Range_Control( $wp_customize, 'veterinary_pet_care_copyright_font_size', array(
            'label'  => __('Copyright Font Size','veterinary-pet-care'),
            'section'  => 'veterinary_pet_care_footer_section',
            'description' => __('Measurement is in pixel.','veterinary-pet-care'),
            'input_attrs' => array(
                'min' => 0,
                'max' => 50,
            )
    )));
	
	$wp_customize->add_setting('veterinary_pet_care_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('veterinary_pet_care_text',array(
		'label'	=> __('Copyright Text','veterinary-pet-care'),
		'description'	=> __('Add some text for footer like copyright etc.','veterinary-pet-care'),
		'section'	=> 'veterinary_pet_care_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'veterinary_pet_care_customize_register' );	

load_template( ABSPATH . 'wp-includes/class-wp-customize-control.php' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

class Veterinary_Pet_Care_Image_Radio_Control extends WP_Customize_Control {

    public function render_content() {
 
        if (empty($this->choices))
            return;
 
        $name = '_customize-radio-' . $this->id;
        ?>
        <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
        <ul class="controls" id='veterinary-pet-care-img-container'>
            <?php
            foreach ($this->choices as $value => $label) :
                $class = ($this->value() == $value) ? 'veterinary-pet-care-radio-img-selected veterinary-pet-care-radio-img-img' : 'veterinary-pet-care-radio-img-img';
                ?>
                <li style="display: inline;">
                    <label>
                        <input <?php $this->link(); ?>style = 'display:none' type="radio" value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php
                          	$this->link();
                          	checked($this->value(), $value);
                          	?> />
                        <img role="img" src='<?php echo esc_url($label); ?>' class='<?php echo esc_attr($class); ?>' />
                    </label>
                </li>
                <?php
            endforeach;
            ?>
        </ul>
        <?php
    } 
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Veterinary_Pet_Care_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Veterinary_Pet_Care_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Veterinary_Pet_Care_Customize_Section_Pro(
			$manager,
			'veterinary_pet_care_pro_link',
				array(
				'priority'   => 9,
				'title'    => esc_html__( 'Pet Care Pro', 'veterinary-pet-care' ),
				'pro_text' => esc_html__( 'Go Pro', 'veterinary-pet-care' ),
				'pro_url' => esc_url('https://www.themesglance.com/themes/veterinary-pet-wordpress-theme/')					
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'veterinary-pet-care-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'veterinary-pet-care-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!

Veterinary_Pet_Care_Customize::get_instance();
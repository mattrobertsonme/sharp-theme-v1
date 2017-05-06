<?php

    function your_theme_new_customizer_settings($wp_customize) { 
    
    /* Logo */
    $wp_customize->add_setting('your_theme_logo');
    
    // Add a control to upload the logo
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
    array(
    'label' => 'Upload Logo',
    'section' => 'title_tagline',
    'settings' => 'your_theme_logo',
    ) ) );
    
    
    

};


/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('customize_register', 'your_theme_new_customizer_settings');
add_action( 'customize_register', 'prefix_customizer_register' ); 

// Remove Actions

// Add Filters

// Remove Filters

// Shortcodes

function prefix_customizer_register( $wp_customize ) {    
    
    /* -----------------------------------------------------------------------------
        
        PANELS
        
    ----------------------------------------------------------------------------- */
    
    /* This creats a Panel called Theme Options */
	$wp_customize->add_panel( 'panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Options', 'textdomain' ),
	    'description' => __( 'This panel is used to change settings of Sharp Theme v1.', 'textdomain' ),
	) );
    
    /* -----------------------------------------------------------------------------
        
        SECTIONS
        
    ----------------------------------------------------------------------------- */
    
    /* This creates a Section called About */
	$wp_customize->add_section( 'section_about', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'About', 'textdomain' ),
	    'description' => '',
	    'panel' => 'panel_id',
	) );
    
    /* This creates a Section called Call to Action */
    $wp_customize->add_section( 'section_cta', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Call to Action', 'textdomain' ),
	    'description' => 'To hide the call to action bar on your site simply leave the values below empty.',
	    'panel' => 'panel_id',
	) );
    
    /* This creates a Section called Hero */
    $wp_customize->add_section( 'section_hero', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Hero', 'textdomain' ),
	    'description' => 'Greet your users to your homepage with a large image and some welcome text.',
	    'panel' => 'panel_id',
	) );
    
    /* This creates a Section called Image Well */
    $wp_customize->add_section( 'section_well', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Image Well', 'textdomain' ),
	    'description' => 'The Image Well sits above the Footer and below the Call to Action bar. To hide the Image Well leave the values below empty.',
	    'panel' => 'panel_id',
	) );
    
    /* This creates a Section called Social Media */
    $wp_customize->add_section( 'section_social', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Social Media', 'textdomain' ),
	    'description' => '',
	    'panel' => 'panel_id',
	) );
    
    /* -----------------------------------------------------------------------------
        
        SETTINGS & CONTROL
        
    ----------------------------------------------------------------------------- */
    
    /*------------------------------------*\
        SOCIAL
    \*------------------------------------*/
    
    /* This creates a Setting called url_field_id */
    $wp_customize->add_setting( 'social_facebook', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_url',
    ) );
    
    /* This Controls url_field_id */
    $wp_customize->add_control( 'social_facebook', array(
        'type' => 'url',
        'priority' => 10,
        'section' => 'section_social',
        'label' => __( 'Facebook URL', 'textdomain' ),
        'description' => 'Enter your Facebook URL here',
    ) );
    
    /* This creates a Setting called url_field_id */
    $wp_customize->add_setting( 'social_twitter', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_url',
    ) );
    
    /* This Controls url_field_id */
    $wp_customize->add_control( 'social_twitter', array(
        'type' => 'url',
        'priority' => 10,
        'section' => 'section_social',
        'label' => __( 'Twitter URL', 'textdomain' ),
        'description' => 'Enter your Twitter URL here',
    ) );
    
    /* This creates a Setting called url_field_id */
    $wp_customize->add_setting( 'social_youtube', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_url',
    ) );
    
    /* This Controls url_field_id */
    $wp_customize->add_control( 'social_youtube', array(
        'type' => 'url',
        'priority' => 10,
        'section' => 'section_social',
        'label' => __( 'Youtube URL', 'textdomain' ),
        'description' => 'Enter your Youtube URL here',
    ) );
    
    /* This creates a Setting called url_field_id */
    $wp_customize->add_setting( 'social_instagram', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_url',
    ) );
    
    /* This Controls url_field_id */
    $wp_customize->add_control( 'social_instagram', array(
        'type' => 'url',
        'priority' => 10,
        'section' => 'section_social',
        'label' => __( 'Instagram URL', 'textdomain' ),
        'description' => 'Enter your Instagram URL here',
    ) );
    
    /* This creates a Setting called url_field_id */
    $wp_customize->add_setting( 'social_linkedin', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_url',
    ) );
    
    /* This Controls url_field_id */
    $wp_customize->add_control( 'social_linkedin', array(
        'type' => 'url',
        'priority' => 10,
        'section' => 'section_social',
        'label' => __( 'Linked-In URL', 'textdomain' ),
        'description' => 'Enter your Linked-In URL here',
    ) );
    
    /*------------------------------------*\
        IMAGE WELL
    \*------------------------------------*/
    
    $wp_customize->add_setting('well_1');
    $wp_customize->add_setting('well_2');
    $wp_customize->add_setting('well_3');
    $wp_customize->add_setting('well_4');
    $wp_customize->add_setting('well_5');
    $wp_customize->add_setting('well_6');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'well_1', array(
        'label' => 'Well Image #1',
        'section' => 'section_well',
        'settings' => 'well_1',
        'description' => '',
        ) ) );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'well_2', array(
        'label' => 'Well Image #2',
        'section' => 'section_well',
        'settings' => 'well_2',
        'description' => '',
        ) ) );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'well_3', array(
        'label' => 'Well Image #3',
        'section' => 'section_well',
        'settings' => 'well_3',
        'description' => '',
        ) ) );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'well_4', array(
        'label' => 'Well Image #4',
        'section' => 'section_well',
        'settings' => 'well_4',
        'description' => '',
        ) ) );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'well_5', array(
        'label' => 'Well Image #5',
        'section' => 'section_well',
        'settings' => 'well_5',
        'description' => '',
        ) ) );
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'well_6', array(
        'label' => 'Well Image #6',
        'section' => 'section_well',
        'settings' => 'well_6',
        'description' => '',
        ) ) );
    
    /*------------------------------------*\
        HERO
    \*------------------------------------*/
    
    $wp_customize->add_setting( 'hero_text', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_textarea',
    ) );
    
    $wp_customize->add_control( 'hero_text', array(
        'type' => 'textarea',
        'priority' => 10,
        'section' => 'section_hero',
        'label' => __( 'Hero Text', 'textdomain' ),
        'description' => 'Add a custom welcome message to your homepage ',
    ) );
    
    $wp_customize->add_setting('hero_image');
    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_image', array(
        'label' => 'Hero Image',
        'section' => 'section_hero',
        'settings' => 'hero_image',
        'description' => '',
        ) ) );
    
    /*------------------------------------*\
        CALL TO ACTION
    \*------------------------------------*/
    
    $wp_customize->add_setting( 'cta_text', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_textarea',
    ) );
    
    $wp_customize->add_control( 'cta_text', array(
        'type' => 'textarea',
        'priority' => 10,
        'section' => 'section_cta',
        'label' => __( 'Call to Action Text', 'textdomain' ),
        'description' => 'This is the Call to Action bar it appears on every page above the footer. Use it promote content! ',
    ) );
    
    $wp_customize->add_setting( 'cta_button', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_textarea',
    ) );
    
    $wp_customize->add_control( 'cta_button', array(
        'type' => 'textarea',
        'priority' => 20,
        'section' => 'section_cta',
        'label' => __( 'Call to Action Button', 'textdomain' ),
        'description' => 'Keep the button text short and try to make it as appealing as possible.',
    ) );
    
    $wp_customize->add_setting( 'cta_link', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_url',
    ) );
    
    $wp_customize->add_control( 'cta_link', array(
        'type' => 'url',
        'priority' => 30,
        'section' => 'section_cta',
        'label' => __( 'Call to Action Link', 'textdomain' ),
        'description' => 'Enter the link of the URL you want your visitors to see.',
    ) );
    
    /*------------------------------------*\
        ABOUT SECTION
    \*------------------------------------*/
    
    $wp_customize->add_setting( 'textarea_field_id', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_textarea',
    ) );
    
    $wp_customize->add_control( 'textarea_field_id', array(
        'type' => 'textarea',
        'priority' => 10,
        'section' => 'section_about',
        'label' => __( 'About Me', 'textdomain' ),
        'description' => 'The about me box will appear on every page of the website. Keep it short and keep it interesting.',
    ) );

    $wp_customize->add_setting('about_image');

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo', array(
        'label' => 'About Image',
        'section' => 'section_about',
        'settings' => 'about_image',
        'description' => 'This image will appear on every page of the website. Take a picture of yourself and dont forget the smile.',
        ) ) );


    }

?>
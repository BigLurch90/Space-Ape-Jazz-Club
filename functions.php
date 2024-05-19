<?php

add_theme_support( 'post-thumbnails' );


$custom_header_args = array(
    'width' => 1440,
    'flex-width' => true,
    'height' => 1315,
    'flex-height' => true,
    'default-image' => get_template_directory_uri() . '/assets/image/hero-backgraund.jpg'
);
add_theme_support( 'custom-header', $custom_header_args );


$custom_logo_args = array (
    'width' => 800,
    'flex-width' => true,
    'height' => 390,
    'flex-height' => true,
    'unlink_homepage_logo' => true
);
add_theme_support( 'custom-logo', $custom_logo_args );
add_theme_support( 'menus' );

function sajc_enqueue_styles_and_scripts() {

    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), '1.0');

    wp_enqueue_script( 'menu', get_template_directory_uri() . '/src/javascript/menu.js', array(), '1.0', true);
    wp_enqueue_script( 'drink-menu', get_template_directory_uri() . '/src/javascript/drinkMenu.js', array(), '1.0', true);
    wp_enqueue_script( 'site-header', get_template_directory_uri() . '/src/javascript/siteHeader.js', array(), '1.0', true);
    
}

add_action( 'wp_enqueue_scripts', 'sajc_enqueue_styles_and_scripts');

add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Custumaizer for theme
 */

function sajc_customize_register( $wp_customize ) {

    // Create our panels
    
    $wp_customize->add_panel( 'sajc_theme_settings', array(
        'title'          => __('Theme Settings', 'sajc_domain'),
    ) );
            
    // Create our sections
    
    $wp_customize->add_section( 'sajc_contact' , array(
        'title'             => __('Contact info', 'sajc_domain'),
        'panel'             => 'sajc_theme_settings',
    ) );
            
    // Create our settings
    
    //Club name
    $wp_customize->add_setting( 'sajc_club_name' , array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'sajc_club_name_control', array(
        'label'      => __('Club name', 'sajc_domain'),
        'section'    => 'sajc_contact',
        'settings'   => 'sajc_club_name',
        'type'       => 'text',
    ) );
       
    // Club phone number
    $wp_customize->add_setting( 'sajc_club_number' , array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'sajc_club_number_control', array(
        'label'      => __('Club phone nr', 'sajc_domain'),
        'section'    => 'sajc_contact',
        'settings'   => 'sajc_club_number',
        'type'       => 'text',
    ) );

    // Club E-mail        
    $wp_customize->add_setting( 'sajc_club_mail' , array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'sajc_club_mail_control', array(
        'label'      => __('Club E-mail address', 'sajc_domain'),
        'section'    => 'sajc_contact',
        'settings'   => 'sajc_club_mail',
        'type'       => 'text',
    ) );
        
    // Club street
    $wp_customize->add_setting( 'sajc_club_street' , array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'sajc_club_street_control', array(
        'label'      => __('Club street', 'sajc_domain'),
        'section'    => 'sajc_contact',
        'settings'   => 'sajc_club_street',
        'type'       => 'text',
    ) );
            
    // Club city
    $wp_customize->add_setting( 'sajc_club_city' , array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'sajc_club_city_control', array(
        'label'      => __('Club city', 'sajc_domain'),
        'section'    => 'sajc_contact',
        'settings'   => 'sajc_club_city',
        'type'       => 'text',
    ) );
            
    // Club zipcode
    $wp_customize->add_setting( 'sajc_club_zipcode' , array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'sajc_club_zipcode_control', array(
        'label'      => __('Club zipcode', 'sajc_domain'),
        'section'    => 'sajc_contact',
        'settings'   => 'sajc_club_zipcode',
        'type'       => 'text',
    ) );
            
    // Club open 1
    $wp_customize->add_setting( 'sajc_club_open_one' , array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'sajc_club_open_one_control', array(
        'label'      => __('Club open time for monday-thursday', 'sajc_domain'),
        'section'    => 'sajc_contact',
        'settings'   => 'sajc_club_open_one',
        'type'       => 'text',
    ) );
            
    // Club open 2
    $wp_customize->add_setting( 'sajc_club_open_two' , array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'sajc_club_open_two_control', array(
        'label'      => __('Club open time for friday-saturday', 'sajc_domain'),
        'section'    => 'sajc_contact',
        'settings'   => 'sajc_club_open_two',
        'type'       => 'text',
    ) );
            
    // Club open
    $wp_customize->add_setting( 'sajc_club_open_three' , array(
        'type'          => 'theme_mod',
        'transport'     => 'refresh',
    ) );
    $wp_customize->add_control( 'sajc_club_open_three_control', array(
        'label'      => __('Club open time for sunday', 'sajc_domain'),
        'section'    => 'sajc_contact',
        'settings'   => 'sajc_club_open_three',
        'type'       => 'text',
    ) );
            
    }
    add_action( 'customize_register', 'sajc_customize_register' );
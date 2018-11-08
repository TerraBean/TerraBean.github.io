<?php
/**
 * Global Customizer Options
 *
 * @package mastership
 */

// Add Global section
$wp_customize->add_section( 'mastership_global_section', array(
	'title'             => esc_html__( 'Global Setting','mastership' ),
	'description'       => esc_html__( 'Global Setting Options', 'mastership' ),
	'panel'             => 'mastership_theme_options_panel',
) );

// header sticky setting and control.
$wp_customize->add_setting( 'mastership_theme_options[enable_sticky_header]', array(
	'default'           => mastership_theme_option( 'enable_sticky_header' ),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[enable_sticky_header]', array(
	'label'             => esc_html__( 'Make Header Sticky', 'mastership' ),
	'section'           => 'mastership_global_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );

// breadcrumb setting and control.
$wp_customize->add_setting( 'mastership_theme_options[enable_breadcrumb]', array(
	'default'           => mastership_theme_option( 'enable_breadcrumb' ),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[enable_breadcrumb]', array(
	'label'             => esc_html__( 'Enable Breadcrumb', 'mastership' ),
	'section'           => 'mastership_global_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );

// site layout setting and control.
$wp_customize->add_setting( 'mastership_theme_options[site_layout]', array(
	'sanitize_callback'   => 'mastership_sanitize_select',
	'default'             => mastership_theme_option('site_layout'),
) );

$wp_customize->add_control(  new Mastership_Radio_Image_Control ( $wp_customize, 'mastership_theme_options[site_layout]', array(
	'label'               => esc_html__( 'Site Layout', 'mastership' ),
	'section'             => 'mastership_global_section',
	'choices'			  => mastership_site_layout(),
) ) );

// loader setting and control.
$wp_customize->add_setting( 'mastership_theme_options[enable_loader]', array(
	'default'           => mastership_theme_option( 'enable_loader' ),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[enable_loader]', array(
	'label'             => esc_html__( 'Enable Loader', 'mastership' ),
	'section'           => 'mastership_global_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );

// loader type control and setting
$wp_customize->add_setting( 'mastership_theme_options[loader_type]', array(
	'default'          	=> mastership_theme_option('loader_type'),
	'sanitize_callback' => 'mastership_sanitize_select',
) );

$wp_customize->add_control( 'mastership_theme_options[loader_type]', array(
	'label'             => esc_html__( 'Loader Type', 'mastership' ),
	'section'           => 'mastership_global_section',
	'type'				=> 'select',
	'choices'			=> mastership_get_spinner_list(),
) );

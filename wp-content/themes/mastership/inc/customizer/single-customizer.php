<?php
/**
 * Single Post Customizer Options
 *
 * @package mastership
 */

// Add excerpt section
$wp_customize->add_section( 'mastership_single_section', array(
	'title'             => esc_html__( 'Single Post Setting','mastership' ),
	'description'       => esc_html__( 'Single Post Setting Options', 'mastership' ),
	'panel'             => 'mastership_theme_options_panel',
) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'mastership_theme_options[sidebar_single_layout]', array(
	'sanitize_callback'   => 'mastership_sanitize_select',
	'default'             => mastership_theme_option('sidebar_single_layout'),
) );

$wp_customize->add_control(  new Mastership_Radio_Image_Control ( $wp_customize, 'mastership_theme_options[sidebar_single_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'mastership' ),
	'section'             => 'mastership_single_section',
	'choices'			  => mastership_sidebar_position(),
) ) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'mastership_theme_options[show_single_date]', array(
	'default'           => mastership_theme_option( 'show_single_date' ),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[show_single_date]', array(
	'label'             => esc_html__( 'Show Date', 'mastership' ),
	'section'           => 'mastership_single_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'mastership_theme_options[show_single_category]', array(
	'default'           => mastership_theme_option( 'show_single_category' ),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[show_single_category]', array(
	'label'             => esc_html__( 'Show Category', 'mastership' ),
	'section'           => 'mastership_single_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );

// Archive category meta setting and control.
$wp_customize->add_setting( 'mastership_theme_options[show_single_tags]', array(
	'default'           => mastership_theme_option( 'show_single_tags' ),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[show_single_tags]', array(
	'label'             => esc_html__( 'Show Tags', 'mastership' ),
	'section'           => 'mastership_single_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );

// Archive author meta setting and control.
$wp_customize->add_setting( 'mastership_theme_options[show_single_author]', array(
	'default'           => mastership_theme_option( 'show_single_author' ),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[show_single_author]', array(
	'label'             => esc_html__( 'Show Author', 'mastership' ),
	'section'           => 'mastership_single_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );

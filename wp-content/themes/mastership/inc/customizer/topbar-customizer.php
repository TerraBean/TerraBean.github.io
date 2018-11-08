<?php
/**
 * Topbar Customizer Options
 *
 * @package mastership
 */

// Add topbar section
$wp_customize->add_section( 'mastership_topbar_section', array(
	'title'             => esc_html__( 'Top Bar Section','mastership' ),
	'description'       => sprintf( '%1$s <a class="menu_locations" href="#"> %2$s </a> %3$s', esc_html__( 'Note: To show social menu.', 'mastership' ), esc_html__( 'Click Here', 'mastership' ), esc_html__( 'to create menu.', 'mastership' ) ),
	'panel'             => 'mastership_theme_options_panel',
) );

// topbar enable setting and control.
$wp_customize->add_setting( 'mastership_theme_options[enable_topbar]', array(
	'default'           => mastership_theme_option('enable_topbar'),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[enable_topbar]', array(
	'label'             => esc_html__( 'Enable Topbar', 'mastership' ),
	'section'           => 'mastership_topbar_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );

// topbar address control and setting
$wp_customize->add_setting( 'mastership_theme_options[topbar_open_hrs]', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Mastership_Dropdown_Chosen_Control( $wp_customize, 'mastership_theme_options[topbar_open_hrs]', array(
	'label'             => esc_html__( 'Opening Days - Hrs', 'mastership' ),
	'section'           => 'mastership_topbar_section',
	'type'				=> 'text',
) ) );

// topbar phone control and setting
$wp_customize->add_setting( 'mastership_theme_options[topbar_phone]', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Mastership_Dropdown_Chosen_Control( $wp_customize, 'mastership_theme_options[topbar_phone]', array(
	'label'             => esc_html__( 'Phone No', 'mastership' ),
	'section'           => 'mastership_topbar_section',
	'type'				=> 'text',
) ) );

// topbar email control and setting
$wp_customize->add_setting( 'mastership_theme_options[topbar_email]', array(
	'sanitize_callback' => 'sanitize_email',
) );

$wp_customize->add_control( new Mastership_Dropdown_Chosen_Control( $wp_customize, 'mastership_theme_options[topbar_email]', array(
	'label'             => esc_html__( 'Email ID', 'mastership' ),
	'section'           => 'mastership_topbar_section',
	'type'				=> 'email',
) ) );

// topbar social menu enable setting and control.
$wp_customize->add_setting( 'mastership_theme_options[show_social_menu]', array(
	'default'           => mastership_theme_option('show_social_menu'),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[show_social_menu]', array(
	'label'             => esc_html__( 'Show Social Menu', 'mastership' ),
	'section'           => 'mastership_topbar_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );

// topbar search enable setting and control.
$wp_customize->add_setting( 'mastership_theme_options[show_top_search]', array(
	'default'           => mastership_theme_option('show_top_search'),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[show_top_search]', array(
	'label'             => esc_html__( 'Show Search', 'mastership' ),
	'section'           => 'mastership_topbar_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );
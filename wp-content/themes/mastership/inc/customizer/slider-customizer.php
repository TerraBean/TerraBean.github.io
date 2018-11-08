<?php
/**
 * Slider Customizer Options
 *
 * @package mastership
 */

// Add slider section
$wp_customize->add_section( 'mastership_slider_section', array(
	'title'             => esc_html__( 'Slider Section','mastership' ),
	'description'       => esc_html__( 'Slider Setting Options', 'mastership' ),
	'panel'             => 'mastership_theme_options_panel',
) );

// slider menu enable setting and control.
$wp_customize->add_setting( 'mastership_theme_options[enable_slider]', array(
	'default'           => mastership_theme_option('enable_slider'),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[enable_slider]', array(
	'label'             => esc_html__( 'Enable Slider', 'mastership' ),
	'section'           => 'mastership_slider_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );

// slider social menu enable setting and control.
$wp_customize->add_setting( 'mastership_theme_options[slider_entire_site]', array(
	'default'           => mastership_theme_option('slider_entire_site'),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[slider_entire_site]', array(
	'label'             => esc_html__( 'Show Entire Site', 'mastership' ),
	'section'           => 'mastership_slider_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );

// slider arrow control enable setting and control.
$wp_customize->add_setting( 'mastership_theme_options[slider_arrow]', array(
	'default'           => mastership_theme_option('slider_arrow'),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[slider_arrow]', array(
	'label'             => esc_html__( 'Show Arrow Controller', 'mastership' ),
	'section'           => 'mastership_slider_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );

// slider btn label chooser control and setting
$wp_customize->add_setting( 'mastership_theme_options[slider_btn_label]', array(
	'default'          	=> mastership_theme_option('slider_btn_label'),
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'mastership_theme_options[slider_btn_label]', array(
	'label'             => esc_html__( 'Button Label', 'mastership' ),
	'section'           => 'mastership_slider_section',
	'type'				=> 'text',
) );

for ( $i = 1; $i <= 5; $i++ ) :

	// slider pages drop down chooser control and setting
	$wp_customize->add_setting( 'mastership_theme_options[slider_content_page_' . $i . ']', array(
		'sanitize_callback' => 'mastership_sanitize_page_post',
	) );

	$wp_customize->add_control( new Mastership_Dropdown_Chosen_Control( $wp_customize, 'mastership_theme_options[slider_content_page_' . $i . ']', array(
		'label'             => sprintf( esc_html__( 'Select Page %d', 'mastership' ), $i ),
		'section'           => 'mastership_slider_section',
		'choices'			=> mastership_page_choices(),
	) ) );

endfor;
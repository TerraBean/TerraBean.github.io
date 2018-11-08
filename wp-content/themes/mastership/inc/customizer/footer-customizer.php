<?php
/**
 * Footer Customizer Options
 *
 * @package mastership
 */

// Add footer section
$wp_customize->add_section( 'mastership_footer_section', array(
	'title'             => esc_html__( 'Footer Section','mastership' ),
	'description'       => esc_html__( 'Footer Setting Options', 'mastership' ),
	'panel'             => 'mastership_theme_options_panel',
) );

// slide to top enable setting and control.
$wp_customize->add_setting( 'mastership_theme_options[slide_to_top]', array(
	'default'           => mastership_theme_option('slide_to_top'),
	'sanitize_callback' => 'mastership_sanitize_switch',
) );

$wp_customize->add_control( new Mastership_Switch_Control( $wp_customize, 'mastership_theme_options[slide_to_top]', array(
	'label'             => esc_html__( 'Show Slide to Top', 'mastership' ),
	'section'           => 'mastership_footer_section',
	'on_off_label' 		=> mastership_show_options(),
) ) );

// copyright text
$wp_customize->add_setting( 'mastership_theme_options[copyright_text]',
	array(
		'default'       		=> mastership_theme_option('copyright_text'),
		'sanitize_callback'		=> 'mastership_santize_allow_tags',
	)
);
$wp_customize->add_control( 'mastership_theme_options[copyright_text]',
    array(
		'label'      			=> esc_html__( 'Copyright Text', 'mastership' ),
		'section'    			=> 'mastership_footer_section',
		'type'		 			=> 'textarea',
    )
);

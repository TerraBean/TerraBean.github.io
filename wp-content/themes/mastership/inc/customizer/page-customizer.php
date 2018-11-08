<?php
/**
 * Page Customizer Options
 *
 * @package mastership
 */

// Add excerpt section
$wp_customize->add_section( 'mastership_page_section', array(
	'title'             => esc_html__( 'Page Setting','mastership' ),
	'description'       => esc_html__( 'Page Setting Options', 'mastership' ),
	'panel'             => 'mastership_theme_options_panel',
) );

// sidebar layout setting and control.
$wp_customize->add_setting( 'mastership_theme_options[sidebar_page_layout]', array(
	'sanitize_callback'   => 'mastership_sanitize_select',
	'default'             => mastership_theme_option('sidebar_page_layout'),
) );

$wp_customize->add_control(  new Mastership_Radio_Image_Control ( $wp_customize, 'mastership_theme_options[sidebar_page_layout]', array(
	'label'               => esc_html__( 'Sidebar Layout', 'mastership' ),
	'section'             => 'mastership_page_section',
	'choices'			  => mastership_sidebar_position(),
) ) );

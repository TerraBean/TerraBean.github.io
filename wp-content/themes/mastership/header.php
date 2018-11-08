<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mastership
 */

/**
 * mastership_doctype_action hook
 *
 * @hooked mastership_doctype -  10
 *
 */
do_action( 'mastership_doctype_action' );

/**
 * mastership_head_action hook
 *
 * @hooked mastership_head -  10
 *
 */
do_action( 'mastership_head_action' );

/**
 * mastership_body_start_action hook
 *
 * @hooked mastership_body_start -  10
 *
 */
do_action( 'mastership_body_start_action' );
 
/**
 * mastership_page_start_action hook
 *
 * @hooked mastership_page_start -  10
 * @hooked mastership_loader -  20
 *
 */
do_action( 'mastership_page_start_action' );

/**
 * mastership_header_start_action hook
 *
 * @hooked mastership_header_start -  10
 *
 */
do_action( 'mastership_header_start_action' );

/**
 * mastership_site_branding_action hook
 *
 * @hooked mastership_site_branding -  10
 *
 */
do_action( 'mastership_site_branding_action' );

/**
 * mastership_primary_nav_action hook
 *
 * @hooked mastership_primary_nav -  10
 *
 */
do_action( 'mastership_primary_nav_action' );

/**
 * mastership_header_ends_action hook
 *
 * @hooked mastership_header_ends -  10
 *
 */
do_action( 'mastership_header_ends_action' );

/**
 * mastership_site_content_start_action hook
 *
 * @hooked mastership_site_content_start -  10
 *
 */
do_action( 'mastership_site_content_start_action' );

/**
 * mastership_primary_content_action hook
 *
 * @hooked mastership_add_slider_section -  10
 *
 */
do_action( 'mastership_primary_content_action' );
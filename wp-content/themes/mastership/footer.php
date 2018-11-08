<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mastership
 */

/**
 * mastership_site_content_ends_action hook
 *
 * @hooked mastership_site_content_ends -  10
 *
 */
do_action( 'mastership_site_content_ends_action' );

/**
 * mastership_footer_start_action hook
 *
 * @hooked mastership_footer_start -  10
 *
 */
do_action( 'mastership_footer_start_action' );

/**
 * mastership_site_info_action hook
 *
 * @hooked mastership_site_info -  10
 *
 */
do_action( 'mastership_site_info_action' );

/**
 * mastership_footer_ends_action hook
 *
 * @hooked mastership_footer_ends -  10
 * @hooked mastership_slide_to_top -  20
 *
 */
do_action( 'mastership_footer_ends_action' );

/**
 * mastership_page_ends_action hook
 *
 * @hooked mastership_page_ends -  10
 *
 */
do_action( 'mastership_page_ends_action' );

wp_footer();

/**
 * mastership_body_html_ends_action hook
 *
 * @hooked mastership_body_html_ends -  10
 *
 */
do_action( 'mastership_body_html_ends_action' );

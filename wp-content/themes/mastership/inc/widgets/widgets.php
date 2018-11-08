<?php
/**
 * Register Widgets
 *
 * @package mastership
 */

/**
 * Load dynamic logic for the widgets.
 */
function mastership_widget_js( $hook ) {
	if ( 'widgets.php' === $hook ) :
		wp_enqueue_script( 'media-upload' );
	   	wp_enqueue_media();
	   	
		// Choose from select jquery.
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome' . mastership_min() . '.css' );
		wp_enqueue_style( 'simple-iconpicker', get_template_directory_uri() . '/assets/css/simple-iconpicker' . mastership_min() . '.css' );
		wp_enqueue_style( 'mastership-admin-style', get_template_directory_uri() . '/assets/css/admin' . mastership_min() . '.css' );
		wp_enqueue_style( 'jquery-chosen', get_template_directory_uri() . '/assets/css/chosen' . mastership_min() . '.css' );
		wp_enqueue_script( 'jquery-simple-iconpicker', get_template_directory_uri() . '/assets/js/simple-iconpicker' . mastership_min() . '.js', array( 'jquery' ), '', true );
		wp_enqueue_script( 'jquery-chosen', get_template_directory_uri() . '/assets/js/chosen' . mastership_min() . '.js', array( 'jquery' ), '1.4.2', true );
		wp_enqueue_script( 'mastership-admin-script', get_template_directory_uri() . '/assets/js/admin' . mastership_min() . '.js', array( 'jquery', 'jquery-chosen', 'jquery-simple-iconpicker' ), '1.0.0', true );
	endif;

}
add_action( 'admin_enqueue_scripts', 'mastership_widget_js' );

/*
 * Add introduction widget
 */
require get_template_directory() . '/inc/widgets/introduction-widget.php';

/*
 * Add featured widget
 */
require get_template_directory() . '/inc/widgets/featured-widget.php';

/*
 * Add portfolio widget
 */
require get_template_directory() . '/inc/widgets/portfolio-widget.php';

/*
 * Add recent widget
 */
require get_template_directory() . '/inc/widgets/recent-widget.php';

/*
 * Add service widget
 */
require get_template_directory() . '/inc/widgets/service-widget.php';

/*
 * Add short call to action widget
 */
require get_template_directory() . '/inc/widgets/short-cta-widget.php';

/*
 * Add client widget
 */
require get_template_directory() . '/inc/widgets/client-widget.php';

/*
 * Add social widget
 */
require get_template_directory() . '/inc/widgets/social-widget.php';

/**
 * Register widgets
 */
function mastership_register_widgets() {
	
	register_widget( 'Mastership_Introduction_Widget' );
	
	register_widget( 'Mastership_Featured_Widget' );

	register_widget( 'Mastership_Portfolio_Widget' );

	register_widget( 'Mastership_Recent_Widget' );

	register_widget( 'Mastership_Service_Widget' );

	register_widget( 'Mastership_Short_Cta_Widget' );

	register_widget( 'Mastership_Client_Widget' );
	
	register_widget( 'Mastership_Social_Links_Widget' );
}
add_action( 'widgets_init', 'mastership_register_widgets' );
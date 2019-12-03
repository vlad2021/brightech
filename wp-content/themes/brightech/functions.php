<?php
/**
 * Enqueue scripts and styles.
 */
function brightech_scripts() {
	wp_enqueue_style( 'brightech-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_style_add_data( 'brightech-style', 'rtl', 'replace' );

	wp_enqueue_style( 'brightech-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	wp_enqueue_script( 'brightech-custom', get_theme_file_uri( '/js/custom.js' ), array(), '1.1', true );

}
add_action( 'wp_enqueue_scripts', 'brightech_scripts' );


?>
<?php
/**
 * Heisenberg Theme Customizer
 *
 * @package Heisenberg
 * @since Heisenberg 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 *
 * @since Heisenberg 1.0
 */
function heisenberg_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}
add_action( 'customize_register', 'heisenberg_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since Heisenberg 1.0
 */
function heisenberg_customize_preview_js() {
	wp_enqueue_script( 'heisenberg_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20120827', true );
}
add_action( 'customize_preview_init', 'heisenberg_customize_preview_js' );

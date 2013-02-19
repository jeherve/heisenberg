<?php
/**
 * Heisenberg functions and definitions
 *
 * @package Heisenberg
 * @since Heisenberg 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Heisenberg 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 760; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );

if ( ! function_exists( 'heisenberg_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since Heisenberg 1.0
 */
function heisenberg_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Heisenberg, use a find and replace
	 * to change 'heisenberg' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'heisenberg', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 760, 9999 ); // 760px high, the height doesn't matter

	/**
	 * This theme uses wp_nav_menu() in two locations.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'heisenberg' ),
		'footer' => __( 'Footer Menu', 'heisenberg' ),
	) );
	
	/**
	 * Enable support for Custom Backgrounds
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => 'FDFFD7',
		'default-image' => get_template_directory_uri() . '/img/default-bg.png'
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'status', 'link', 'image', 'gallery', 'video' ) );
}
endif; // heisenberg_setup
add_action( 'after_setup_theme', 'heisenberg_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since Heisenberg 1.0
 */
function heisenberg_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Footer Area One', 'heisenberg' ),
		'id' => 'sidebar-1',
		'description' => __( 'An optional widget area for your site footer', 'heisenberg' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area Two', 'heisenberg' ),
		'id' => 'sidebar-2',
		'description' => __( 'An optional widget area for your site footer', 'heisenberg' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area Three', 'heisenberg' ),
		'id' => 'sidebar-3',
		'description' => __( 'An optional widget area for your site footer', 'heisenberg' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'heisenberg_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function heisenberg_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	$protocol = is_ssl() ? 'https' : 'http';
	wp_enqueue_style( 'googlefonts', "$protocol://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Merriweather:400,300,700" );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'heisenberg_scripts' );

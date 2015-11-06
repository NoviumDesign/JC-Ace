<?php
/**
 * jc-ace functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jc-ace
 */

if ( ! function_exists( 'jc_ace_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jc_ace_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on jc-ace, use a find and replace
	 * to change 'jc-ace' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'jc-ace', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'jc-ace' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
}
endif; // jc_ace_setup
add_action( 'after_setup_theme', 'jc_ace_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jc_ace_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jc_ace_content_width', 640 );
}
add_action( 'after_setup_theme', 'jc_ace_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function jc_ace_scripts() {
	wp_enqueue_style( 'jc-ace-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jc-ace-jquery', get_template_directory_uri() . '/js/vendor/jquery-2.1.4.min.js', array(), '2.1.4', true );
  wp_enqueue_script( 'jc-ace-one-page-nav', get_template_directory_uri() . '/js/vendor/jquery.nav.js', array(), '3.0.0', true );
	wp_enqueue_script( 'jc-ace-app', get_template_directory_uri() . '/js/app.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jc_ace_scripts' );

// add custom post types
add_action( 'init', 'create_posttype' );
function create_posttype() {
  register_post_type( 'brands',
    array(
      'labels' => array(
        'name' => __( 'Brands' ),
        'singular_name' => __( 'Brand' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'brands'),
      'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
    )
  );
}

// Change thumb size
update_option( 'thumbnail_size_w', 579 );
update_option( 'thumbnail_size_h', 805 );
update_option( 'thumbnail_crop', 1 );

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

// Show posts of 'post', 'page' and 'movie' post types on home page
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
  if ( is_home() && $query->is_main_query() )
    $query->set( 'post_type', array( 'page', 'brands' ) );
  return $query;
}

// Add support for thumbs
add_theme_support('post-thumbnails');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

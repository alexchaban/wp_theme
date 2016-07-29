<?php
/**
 * scout functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package scout
 */

if ( ! function_exists( 'scout_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function scout_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on scout, use a find and replace
	 * to change 'scout' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'scout', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'scout' ),
		'for_employers' => esc_html__( 'For Employers', 'scout' ),
		'for_search_firms' => esc_html__( 'FOR SEARCH FIRMS', 'scout' ),
		'who_we_are' => esc_html__( 'WHO WE ARE', 'scout' ),
		'learn_whats_possible' => esc_html__( 'LEARN WHAT’S POSSIBLE', 'scout' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'scout_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'scout_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function scout_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'scout_content_width', 640 );
}
add_action( 'after_setup_theme', 'scout_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function scout_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'scout' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'scout' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'scout_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function scout_scripts() {
	// wp_enqueue_style( 'scout-style', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'scout-style', get_template_directory_uri() . '/css/main-dist.css' );
	wp_enqueue_style( 'scout-responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'scout-font', 'https://fonts.googleapis.com/css?family=Raleway:400,300,300italic,400italic,500,600,500italic,600italic,700,700italic,800,800italic%7CLato:400,300,300italic,400italic,700,700italic%7CDroid+Serif:400,400italic,700,700italic' );

	// wp_deregister_script( 'jquery' );
	// wp_enqueue_script( 'scout-jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), '1.11.2', true );
	wp_enqueue_script( 'scout-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'scout-jquery-main', get_template_directory_uri() . '/js/jquery.main.js', array(), '222', true );
	wp_enqueue_script( 'scout-scriptjs', get_template_directory_uri() . '/js/script.js', array(), '0.1', true );

	wp_enqueue_script( 'scout-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'scout_scripts' );

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

add_filter('body_class','browser_body_class');

//excerpt words quantity
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Readmore
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


function browser_body_class($classes = '') {
	global $post;
	
	switch ($post->post_name) {
		case "performance": $classes[] = 'interior2'; break;
		case "ats": $classes[] = 'interior-ats'; break;
		case "careers": $classes[] = 'careers-interior'; break;
		case "ats-guide": $classes[] = 'ats-guide'; break;
		case "perks": $classes[] = 'careers-interior'; break;
		case "whatspossible": $classes[] = 'whatspossible'; break;
		case "customerhub": $classes[] = 'customerhub'; break;
		case "demo": $classes[] = 'demo-page'; break;
		case "case": $classes[] = 'case-studies'; break;
	}
	$classes[] = "sf-overview";
	
	return $classes;
}

require get_template_directory() . '/template-parts/widget1.php';



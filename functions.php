<?php
/**
 * University functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package University
 */
function university_custom_rest() {
	register_rest_field('post', 'authorName', array(
		'get_callback' => function() {return get_the_author();}
	));
	register_rest_field('notes', 'userNoteCount', array(
		'get_callback' => function() {return count_user_posts(get_current_user_id(), 'notes');}
	));
}
add_action('rest_api_init', 'university_custom_rest');
if ( ! function_exists( 'university_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function university_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on University, use a find and replace
		 * to change 'university' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'university', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'university' ),
		) );
		register_nav_menu('footerLocationOne', 'Footer Location One');
		register_nav_menu('footerLocationTwo', 'Footer Location Two');

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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'university_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'university_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function university_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'university_content_width', 640 );
}
add_action( 'after_setup_theme', 'university_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function university_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'university' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'university' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'university_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function university_scripts() {
	wp_enqueue_style( 'university-style', get_stylesheet_uri() );
	wp_enqueue_style('bootstrap-style', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css');
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.slim.min.js');
	wp_enqueue_script('popper-script', '//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
	wp_enqueue_script('bootstrap-script', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js');
	wp_enqueue_script( 'university-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'university-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'university_scripts' );

/**
 * Add items to custom post types
 */

 function university_custom_post_types() {
	register_post_type('Events', array(
		'public' => true,
		'rewrite' => array('slug', 'events'),
		'has_archive' => true,
		'labels' => array(
			'name' => 'Events',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Events',
			'singular_name' => 'Event',
		),
		'supports' => array('title', 'excerpt'),
		'menu_icon' => 'dashicons-calendar'
	));
	register_post_type('Professors', array(
		'public' => true,
		'rewrite' => array('slug', 'professors'),
		'has_archive' => true,
		'labels' => array(
			'name' => 'Professors',
			'add_new_item' => 'Add New Professor',
			'edit_item' => 'Edit Professor',
			'all_items' => 'All Professors',
			'singular_name' => 'Professor',
		),
		'supports' => array('title', 'excerpt', 'thumbnail'),
	));
	register_post_type('Courses', array(
		'public' => true,
		'rewrite' => array('slug', 'courses'),
		'has_archive' => true,
		'labels' => array(
			'name' => 'Courses',
			'add_new_item' => 'Add New Course',
			'edit_item' => 'Edit Course',
			'all_items' => 'All Courses',
			'singular_name' => 'Course',
		),
		'supports' => array('title', 'excerpt'),
	));
	register_post_type('notes', array(
		'capability_type' => 'notes',
		'map_meta_cap' => true,
		'show_in_rest' => true,
		'public' => false,
		'rewrite' => array('slug', 'notes'),
		'has_archive' => true,
		'show_ui' => true,
		'labels' => array(
			'name' => 'Notes',
			'add_new_item' => 'Add New Note',
			'edit_item' => 'Edit Note',
			'all_items' => 'All Notes',
			'singular_name' => 'Note',
		),
		'supports' => array('title', 'excerpt', 'thumbnail'),
		'menu_icon' => 'dashicons-welcome-write-blog',
	));
 }
 add_action('init', 'university_custom_post_types');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//Force note posts to be private
add_filter('wp_insert_post_data', 'make_note_private', 10, 2);
function make_note_private($data, $postarr) {
	if($data['post_type'] == 'note') {
		if(count_user_posts(get_current_user_id(), 'notes') > 4 AND !$postarr['ID']) {
			die("You have reached your note limit.");
		}
		$data['post_content'] = sanitize_textarea_field($data['post_content']);
		$data['post_title'] = sanitize_text_field($data['post_title']);
	}
	if($data['post_type'] == 'note' AND $data['post_status'] != 'trash') {
		$data['post_status'] = "private";
	}
	return $data;
}
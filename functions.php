<?php
/**
 * Indoor Pollution Solutions functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Indoor_Pollution_Solutions
 */

if ( ! function_exists( 'ips_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ips_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Indoor Pollution Solutions, use a find and replace
		 * to change 'ips' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ips', get_template_directory() . '/languages' );

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
		add_image_size( 'home-hero', 2000, 9999, false );
		add_image_size( 'home-main-content-img', 1800, 9999, false );
		add_image_size( 'home-cta-img', 450, 350, true );
		add_image_size( 'home-cert-img', 175, 9999, false );
		add_image_size( 'services-highlight-img', 450, 350, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main Menu', 'ips' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'ips' ),
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
add_action( 'after_setup_theme', 'ips_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ips_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ips_content_width', 640 );
}
add_action( 'after_setup_theme', 'ips_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ips_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ips' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ips' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ips_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ips_scripts() {
	wp_enqueue_style( 'ips-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ips-navigation', get_template_directory_uri() . '/js/min/navigation.min.js', array(), '20151215', true );

	wp_enqueue_script( 'ips-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'ips-object-fit-library', get_template_directory_uri() . '/js/min/ofi.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ips_scripts' );

/**
 * Global Site Information
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Global Website Information',
		'menu_title'	=> 'Site Global Info',
		'menu_slug' 	=> 'global-information',
		'post_id' 	  => 'global-information',
		'capability'	=> 'edit_posts'
	));

	acf_add_options_sub_page(array(
		'menu_title'	=> 'Company Information',
		'menu_slug' 	=> 'company-information',
		'post_id' 	  => 'company-information',
		'parent_slug'	=> 'global-information',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Media Channels',
		'menu_title'	=> 'Social Media',
		'menu_slug' 	=> 'social-media-channels',
		'post_id' 	  => 'social-media-channels',
		'parent_slug'	=> 'global-information',
	));

	acf_add_options_sub_page(array(
		'menu_title'	=> 'Certifications',
		'menu_slug' 	=> 'certifications',
		'post_id' 	  => 'certifications',
		'parent_slug'	=> 'global-information',
	));

	acf_add_options_sub_page(array(
		'menu_title'	=> 'Estimate Callout',
		'menu_slug' 	=> 'estimate-callout',
		'post_id' 	  => 'estimate-callout',
		'parent_slug'	=> 'global-information',
	));

	acf_add_options_sub_page(array(
		'menu_title'	=> 'Footer Copyright',
		'menu_slug' 	=> 'footer-copyright',
		'post_id' 	  => 'footer-copyright',
		'parent_slug'	=> 'global-information',
	));

}

/**
 * Add styles to WYSIWYG
 */
add_filter('mce_buttons_2', 'ips_mce_buttons');
function ips_mce_buttons( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}

add_filter( 'tiny_mce_before_init', 'ips_mce_before_init_insert_formats' );
function ips_mce_before_init_insert_formats( $init_array ) {
	$style_formats = array(
		array(
		'title' => 'Button', // Title to show in dropdown
		'inline' => 'a', // Element to add class to
		'classes' => 'btn' // CSS class to add
		),
		array(
			'title' => 'Double Column List', // Title to show in dropdown
			'selector' => 'ul', // Element to add class to
			'classes' => 'dbl-list' // CSS class to add
		),
	);
	$init_array['style_formats'] = json_encode( $style_formats );
	return $init_array;
}

// Editor styles
add_action( 'admin_init', 'ips_add_editor_styles' );
function ips_add_editor_styles() {
	add_editor_style( 'editor-custom-styles.css' );
}

/**
 * Add arrow icons into registered "main-menu"
 */
add_filter( 'walker_nav_menu_start_el', 'ips_add_arrow', 10, 4);
function ips_add_arrow( $item_output, $item, $depth, $args ){
	if( 'main-menu' == $args->theme_location && $depth == 0 && in_array('menu-item-has-children', $item->classes ) ) {
			$item_output .='<button class="arrow"><span class="screen-reader-text">Toggle Menu</span></button>';
	}
	return $item_output;
}

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

/**
 * Homepage Flexible Content.
 */
require get_template_directory() . '/inc/homepage-flexible-content.php';

/**
 * Homepage Hero.
 */
require get_template_directory() . '/inc/homepage-hero.php';

/**
 * Social Media Menu.
 */
require get_template_directory() . '/inc/social-media-menu.php';

/**
 * Global Certification section.
 */
require get_template_directory() . '/inc/certification-section.php';

/**
 * Services Highlights section.
 */
require get_template_directory() . '/inc/services-highlights.php';


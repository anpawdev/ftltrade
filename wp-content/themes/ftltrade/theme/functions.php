<?php
/**
 * Grafiduo Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ftl_Trade_Starter
 */

if ( ! defined( 'GFTW_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'GFTW_VERSION', '0.1.0' );
}

if ( ! defined( 'GFTW_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `gftw_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'GFTW_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'gftw_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gftw_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Grafiduo Starter, use a find and replace
		 * to change 'ftltrade' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ftltrade', get_template_directory() . '/languages' );

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

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'gftw_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/styles.php';

/**
 * Enqueue the block editor script.
 */
function gftw_enqueue_block_editor_script() {
	wp_enqueue_script(
		'ftltrade-editor',
		get_template_directory_uri() . '/js/block-editor.min.js',
		array(
			'wp-blocks',
			'wp-edit-post',
		),
		GFTW_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'gftw_enqueue_block_editor_script' );

/**
 * Create a JavaScript array containing the Tailwind Typography classes from
 * GFTW_TYPOGRAPHY_CLASSES for use when adding Tailwind Typography support
 * to the block editor.
 */
function gftw_admin_scripts() {
	?>
	<script>
		tailwindTypographyClasses = '<?php echo esc_attr( GFTW_TYPOGRAPHY_CLASSES ); ?>'.split(' ');
	</script>
	<?php
}
add_action( 'admin_print_scripts', 'gftw_admin_scripts' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function gftw_tinymce_add_class( $settings ) {
	$settings['body_class'] = GFTW_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'gftw_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

require get_template_directory() . '/inc/comments-off.php';
require get_template_directory() . '/inc/navs.php';
// require get_template_directory() . '/inc/post-types.php';
// require get_template_directory() . '/inc/taxonomy.php';
require get_template_directory() . '/inc/thumbnails.php';
require get_template_directory() . '/inc/clean.php';
require get_template_directory() . '/inc/utilities.php';

/**
 * Register ACF builder lib
 * @link https://github.com/StoutLogic/acf-builder/
 */
//require get_template_directory() . '/acf-builder/autoload.php';

/**
 * ACF configuration
 * @link https://github.com/Log1x/acf-builder-cheatsheet
 */

acf_add_options_page([
	'page_title' => get_bloginfo('name') . ' Dodatkowe ustawienia',
	'menu_title' => 'Dodatkowe ustawienia',
	'menu_slug'  => 'theme-options',
	'capability' => 'edit_theme_options',
	'position'   => '999',
	'autoload'   => true
]);

add_filter('wpcf7_autop_or_not', '__return_false');
add_filter('pll_the_languages_args', function ($args) {
	$args['display_names_as'] = 'slug';
	return $args;
});
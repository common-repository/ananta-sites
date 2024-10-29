<?php
/**
 * The file that defines the core blocks class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 *
 * @package    Ananta_Sites
 * @subpackage Ananta_Sites/includes
 */

 if (!defined('ABSPATH') ) : exit(); endif; // no direct access allowed

/**
 * Add custom block category
 */
function ananta_blocks_categories($categories)
{
    // Add your custom category at the beginning
    $custom_category = array(
        'slug'  => 'ananta-sites',
        'title' => __('Anant Blocks', 'ananta-sites'),
    );

    // Check if the category already exists and remove it
    $categories = array_filter(
        $categories,
        function ($category) {
            return 'ananta-sites' !== $category['slug'];
        }
    );

    // Merge the custom category at the beginning
    array_unshift($categories, $custom_category);

    return $categories;
}
require ANANTA_SITES_DIR_PATH . 'includes/blocks/compileStyle.php';
// Block Categories
if (version_compare(get_bloginfo('version'), '5.8', '>=')) {
    add_filter('block_categories_all', 'ananta_blocks_categories', PHP_INT_MAX );
} else {
    add_filter('block_categories', 'ananta_blocks_categories', PHP_INT_MAX );
}

/**regidter block scripts*/
add_action( 'enqueue_block_editor_assets', function(){
	wp_enqueue_script(
		'ananta-sites-editor-script',
		ANANTA_SITES_DIR_URL .('build/index.js'),
		[
			'wp-i18n', 
			'wp-element', 
			'wp-blocks', 
			'wp-components', 
			'wp-editor', 
			'wp-data', 
			'wp-plugins',
		]
	); 

	wp_localize_script(
		'ananta-sites-editor-script',
		'js_data',
		array(
			'placeholder_url' => plugins_url( 'assets/images/placeholder.png', __FILE__ ),
		)
	);
} );

add_action( 'init', function(){
	wp_enqueue_style(
		'ananta-sites-editor-style',
		ANANTA_SITES_DIR_URL .('admin/css/editor.css'), [], false, 'all'
	); 
} );

add_action( 'init', function () {
	require ANANTA_SITES_DIR_PATH . 'includes/blocks/defaults.php';

	register_block_type(
		'ananta-sites/post-grid',
		[
			'style' => 'ananta-sites-editor-style',
			'editor-script' => 'ananta-sites-editor-script',
			'attributes' => $defaultValues['ananta/post-grid']['attributes'],
			'render_callback' => 'ananta_post_blog_render_callback'
		]
	);
	register_block_type(
		'ananta-sites/post-blog-2',
		[
			'style' => 'ananta-sites-editor-style',
			'editor-script' => 'ananta-sites-editor-script',
			'attributes' => $defaultValues['ananta/post-blog-2']['attributes'],
			'render_callback' => 'ananta_post_blog_2_render_callback'
		]
	);
	register_block_type(
		'ananta-sites/post-blog-3',
		[
			'style' => 'ananta-sites-editor-style',
			'editor-script' => 'ananta-sites-editor-script',
			'attributes' => $defaultValues['ananta/post-blog-3']['attributes'],
			'render_callback' => 'ananta_post_blog_3_render_callback'
		]
	);
} );

require_once ANANTA_SITES_DIR_PATH."includes/blocks/post-grid/block.php";
require_once ANANTA_SITES_DIR_PATH."includes/blocks/post-blog-2/block.php";
require_once ANANTA_SITES_DIR_PATH."includes/blocks/post-blog-3/block.php";

function ananta_block_assets(){
    // Styles.
	wp_enqueue_style(
		'ananta-blocks-font-awesome-6',
		ANANTA_SITES_DIR_URL .('admin/css/all.min.css'), 
        array(), 
        ANANTA_SITES_VERSION
	);
	wp_enqueue_style(
		'ananta-sites-fonticonpicker-base',
		ANANTA_SITES_DIR_URL .('admin/css/fonticonpicker.base-theme.react.css'), [], false, 'all'
	); 
	wp_enqueue_style(
		'ananta-sites-fonticonpicker-material',
		ANANTA_SITES_DIR_URL .('admin/css/fonticonpicker.material-theme.react.css'), [], false, 'all'
	); 
}


// Hook: Frontend assets.
add_action('enqueue_block_assets', 'ananta_block_assets');
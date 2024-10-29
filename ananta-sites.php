<?php
/**
 * Plugin Name:       Anant Sites 
 * Description:       Anant Sites offers existing Elementor ready-made website with 1-click..
 * Version:           1.0.9
 * Author:            Anantsites
 * Author URI:        https://anantsites.com/
 * License:           GPLv3
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.en.html
 * Text Domain:       ananta-sites
 * Domain Path:       /languages
 * WordPress Available:  yes
 * Requires License:    no
 *
 * @package ananta-sites
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly     
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('ANANTA_SITES_VERSION', ' 1.0.9' );
define('ANANTA_SITES_FILE', __FILE__);
define('ANANTA_SITES_DIR_PATH', plugin_dir_path(ANANTA_SITES_FILE));
define('ANANTA_SITES_DIR_URL', plugin_dir_url(ANANTA_SITES_FILE));
define('ANANTA_SITES_MIN_PHP_VERSION', '5.3');


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ananta-sites-activator.php
 */
function ananta_sites_activate() {
	require_once ANANTA_SITES_DIR_PATH . 'includes/class-ananta-sites-activator.php';
	Ananta_Sites_Activator::activate();
}
require ANANTA_SITES_DIR_PATH . 'includes/function.php';

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ananta-sites-deactivator.php
 */
function ananta_sites_deactivate() {
	require_once ANANTA_SITES_DIR_PATH . 'includes/class-ananta-sites-deactivator.php';
	Ananta_Sites_Deactivator::deactivate();
}

register_activation_hook( ANANTA_SITES_FILE, 'ananta_sites_activate' );
register_deactivation_hook( ANANTA_SITES_FILE, 'ananta_sites_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require ANANTA_SITES_DIR_PATH . 'includes/class-ananta-sites.php';
require ANANTA_SITES_DIR_PATH . 'includes/parsers.php';

if (!class_exists('WP_Importer')) {
    $class_wp_importer = ABSPATH . 'wp-admin/includes/class-wp-importer.php';
    if (file_exists($class_wp_importer)) {
        require_once( $class_wp_importer );
    } else {
        $importer_error = true;
    }
}
require ANANTA_SITES_DIR_PATH . 'includes/class-wp-import.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 */
function ananta_sites_load_plugin() {
	load_plugin_textdomain( 'ananta-sites' );

	require_once plugin_dir_path( __FILE__ ) . '/includes/class-ananta-gutenberg-site-builder.php';

	function ananta_sites_run() {

		Ananta_Gutenberg_Site_builder::instance();
		$plugin = new Ananta_Sites();
		$plugin->run();
	
	}
	ananta_sites_run();
}
add_action( 'plugins_loaded', 'ananta_sites_load_plugin' );

if ( ! function_exists( '_is_elementor_installed' ) ) {

	function _is_elementor_installed() {
		$file_path = 'elementor/elementor.php';
		$installed_plugins = get_plugins();
		return isset( $installed_plugins[ $file_path ] );
	}
}

if ( ! function_exists( '_is_anant_addons_installed' ) ) {

	function _is_anant_addons_installed() {
		$file_path = 'anant-addons-for-elementor/anant-addons-for-elementor.php';
		$installed_plugins = get_plugins();
		return isset( $installed_plugins[ $file_path ] );
	}
}
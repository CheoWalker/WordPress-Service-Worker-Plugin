<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           wordpress_service_worker_plugin
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Plugin Boilerplate
 * Plugin URI:        http://example.com/wordpress-service-worker-plugin-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress dashboard.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wordpress-service-worker-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wordpress-service-worker-plugin-activator.php
 */
function activate_wordpress_service_worker_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-service-worker-plugin-activator.php';
	wordpress_service_worker_plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wordpress-service-worker-plugin-deactivator.php
 */
function deactivate_wordpress_service_worker_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-service-worker-plugin-deactivator.php';
	wordpress_service_worker_plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wordpress_service_worker_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_wordpress_service_worker_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-service-worker-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wordpress_service_worker_plugin() {

	$plugin = new wordpress_service_worker_plugin();
	$plugin->run();

}
run_wordpress_service_worker_plugin();

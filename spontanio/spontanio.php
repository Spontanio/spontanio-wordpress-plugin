<?php

/*
Plugin Name:       Spontanio
Plugin URI:        https://spontan.io
Description:       Free and easy group video chat for your website visitors. Based on the secure, standards-based WebRTC technology. Super easy to get started, with endless possibilities for customization to enhance your brand.
Version:           1.0.0
Author:            Spontanio
Author URI:        https://spontan.io/about
License:           GPLv2 or later
License URI:       https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

if ( ! defined( 'WPINC' ) ) {
	die( 'Access denied.' );
}

define( 'SPONTANIO_PLUGIN', plugin_basename( __FILE__ ) );
define( 'SPONTANIO_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'SPONTANIO_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

require_once SPONTANIO_PLUGIN_PATH . 'includes/SpontanioActivator.php';

/**
 * Activate the plugin.
 */
function spontanio_activate() {
    SpontanioActivator::activate();
}
register_activation_hook( __FILE__, 'spontanio_activate' );

/**
 * Deactivate the plugin.
 */
function spontanio_deactivate() {
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'spontanio_deactivate' );

/**
 * Run the plugin.
 */
require SPONTANIO_PLUGIN_PATH . 'includes/Spontanio.php';
if ( class_exists( 'Spontanio' ) ) {
	Spontanio::run();
}


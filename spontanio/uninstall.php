<?php
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}
require_once plugin_dir_path( __FILE__ ) . 'admin/SpontanioAdmin.php';
if ( class_exists( 'SpontanioAdmin' ) ) {
	SpontanioAdmin::deleteSettings();
}

<?php

/*
Plugin Name: CyberPanel
Plugin URI: https://www.cyberwordpress.com
Description: WordPress Plugin that allows you to manage CyberPanel Remotely.
Version: 1.0
Author: humzayunas, Usman Nasir
Author URI: https://www.cyberwordpress.com
License: GPL2
*/

//defined('ABSPATH') or die("Kindly don't try to hack.");

define( 'CyberPanel_PLUGINDIR', plugin_dir_path( __FILE__ ) );
define('CyberPanel_PLUGINDIR_URL' , plugin_dir_url(__FILE__));

require_once( CyberPanel_PLUGINDIR . '/includes/init.php' );
register_activation_hook( __FILE__, 'on_activation' );
function on_activation() {
	global $wpdb;
	$sql = "CREATE TABLE " . $wpdb->prefix . "cyberpanel_settings (id bigint(20) NOT NULL auto_increment,userName TEXT(50) , token TEXT(500), PRIMARY KEY (id))";
	if ( $wpdb->query( $sql )){
		echo "Plugin Successfully activated";
	}else{
		echo "There was an error";
	}
}
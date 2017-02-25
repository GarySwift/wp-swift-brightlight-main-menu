<?php
/*
Plugin Name: 		WP Swift: BrightLight Admin Menu
Description: 		A WordPress plugin that creates a top level menu item called BrightLight
Version:           	1.0.0
Author:            	Gary Swift
Author URI:        	https://github.com/GarySwift
License:           	MIT License
License URI:       	http://www.opensource.org/licenses/mit-license.php
Text Domain:       	wp-swift-brightlight-main-menu
*/
class WP_Swift_Brightlight_Admin_menu {
    /*
     * Initializes the plugin.
     */
    public function __construct() {
    	add_action( 'admin_menu', array($this, 'brightlight_admin_menu') );
    }

	public function brightlight_admin_menu() {
		// Create top-level menu item
		add_menu_page( 'BrightLight Configuration Page',
		   'BrightLight', 'manage_options',
		   'wp-swift-brightlight-main-menu', array($this, 'brightlight_complex_main'),
		   plugins_url( 'favicon-16x16.png', __FILE__ ) );
		// Create a sub-menu under the top-level menu
		add_submenu_page( 'wp-swift-brightlight-main-menu',
		   'BrightLight Menu Sub-Config Page', 'Sub-Config Page',
		   'manage_options', 'brightlight-sub-menu',
		   array($this, 'brightlight_my_complex_submenu') );
	}
	public function brightlight_complex_main() {

	}
	public function brightlight_my_complex_submenu() {

	}	
}
$wp_swift_brightlight_admin_menu = new WP_Swift_Brightlight_Admin_menu();

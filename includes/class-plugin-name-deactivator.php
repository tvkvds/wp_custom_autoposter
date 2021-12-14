<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 * @author     Your Name <email@example.com>
 */
class Plugin_Name_Deactivator {

	/**
	 * Short Description. 
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		delete_option( 'tvkvds_url_default' );
		delete_option( 'tvkvds_url_custom' );
		delete_option( 'tvkvds_url_option_default' );
		delete_option( 'tvkvds_url_option_custom' );
		delete_option( 'tvkvds_url_name_default' );
		delete_option( 'tvkvds_url_name_custom' );
	}

	

}


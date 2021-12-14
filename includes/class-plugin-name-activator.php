<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 * @author     Your Name <email@example.com>
 */
class Plugin_Name_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		add_option( 'tvkvds_url_default' , 'https://www.foaas.com' );
		add_option( 'tvkvds_url_custom' , '' );
		add_option( 'tvkvds_url_name_default' , 'TVKVDS_autoposter' );
		add_option( 'tvkvds_url_name_custom' , '' );
		add_option( 'tvkvds_url_option_default' , 'dumbledore' );
		add_option( 'tvkvds_url_option_custom' , '' );
	}

}

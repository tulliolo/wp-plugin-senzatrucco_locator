<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/tulliolo
 * @since      1.0.0
 *
 * @package    Senza_Trucco_Locator
 * @subpackage Senza_Trucco_Locator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Senza_Trucco_Locator
 * @subpackage Senza_Trucco_Locator/includes
 * @author     Tullio Loffredo <tulliolo@yahoo.com>
 */
class Senza_Trucco_Locator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'senza-trucco-locator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

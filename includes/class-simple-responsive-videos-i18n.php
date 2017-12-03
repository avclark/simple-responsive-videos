<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://avclark.com
 * @since      1.0.0
 *
 * @package    Simple_Responsive_Videos
 * @subpackage Simple_Responsive_Videos/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Simple_Responsive_Videos
 * @subpackage Simple_Responsive_Videos/includes
 * @author     Adam Clark <adam@avclark.com>
 */
class Simple_Responsive_Videos_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'simple-responsive-videos',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

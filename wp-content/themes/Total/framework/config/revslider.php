<?php
/**
 * RevSlider Config
 *
 * @package Total WordPress Theme
 * @subpackage Configs
 * @version 3.4.0
 */

// Start Class
if ( ! class_exists( 'WPEX_RevSlider_Config' ) ) {

	class WPEX_RevSlider_Config {

		/**
		 * Start things up
		 *
		 * @since 3.4.0
		 */
		public function __construct() {

			global $pagenow;
			if ( $pagenow == 'plugins.php' ) {
				add_action( 'admin_notices', array( $this, 'remove_plugins_page_notices' ), 9999 );
			}

		}

		/**
		 * Remove Revolution Slider plugin notices
		 *
		 * @since 3.4.0
		 */
		public function remove_plugins_page_notices() {
			$plugin_id = 'revslider/revslider.php';

			// Remove plugin page purchase notice
			remove_action( 'after_plugin_row_'. $plugin_id, array( 'RevSliderAdmin', 'show_purchase_notice' ), 10, 3 );

			// Hide update notice if not valid
			if ( 'false' == get_option( 'revslider-valid', 'false' ) ) {
				remove_action( 'after_plugin_row_' . $plugin_id, array( 'RevSliderAdmin', 'show_update_notice' ), 10, 3);
			}

		}


	}

}
new WPEX_RevSlider_Config();
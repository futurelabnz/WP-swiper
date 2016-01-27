<?php

if ( ! class_exists( 'webhatcheryAdminHelp' ) ) {
	class webhatcheryAdminHelp {


		public function themeHelpMenu() {
			add_theme_page( __( 'Theme help', 'webhatchery' ), __( 'Theme help', 'webhatchery' ), 'edit_posts', 'theme_help', array(
				$this,
				'themeHelpPage'
			) );
		}// themeHelpMenu


		public function themeHelpPage() {
			// display page content to view file.
			include get_template_directory() . '/inc/views/webhatcheryAdminHelp_v.php';
		}// themeHelpPage


	}// end class -------------------------------------------------------------------------------
}

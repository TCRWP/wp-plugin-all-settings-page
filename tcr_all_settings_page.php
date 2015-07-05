<?php
	/*
	Plugin Name: TCR All settings page
	Description: Creates an admin page to view all options set in db.
	Version: 1.0.0
	Plugin URI: http://thecellarroom.uk
	Author: The Cellar Room Limited
	Author URI: http://www.thecellarroom.uk
	Copyright (c) 2015 The Cellar Room Limited
	*/

	defined( 'ABSPATH' ) or die();

	/*************************************************************************/

	if ( ! class_exists( 'tcr_all_settings_page' ) ) :

		class tcr_all_settings_page {

			function __construct() {

				add_action('admin_menu', array( $this, 'all_settings_link'));
			}

			function all_settings_link() {

				add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
			}

		}
		new tcr_all_settings_page;

	endif;
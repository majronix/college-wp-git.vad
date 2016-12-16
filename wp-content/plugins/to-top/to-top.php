<?php
/**
 * Plugin Name:       To Top
 * Plugin URI:        https://catchthemes.com/wp-plugins/to-top
 * Description:       To Top plugin allows the visitor as well as admin to easily scroll back to the top of the page, with fully customizable options and ability to use image.
 * Author:            Catch Themes
 * Author URI:        https://catchthemes.com
 * Version:           1.4
 * License:           GNU General Public License, version 3 (GPLv3)
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       to-top
 * Domain Path:       languages
 *
 * Copyright (C) 2012-2016 Catch Themes, (info@catchthemes.com)
 *
 * To Top Plugin is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package To_Top
 * @link catchthemes.com
 * @author Catch Themes
 * @version 1.2
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-to-top-activator.php
 */
function activate_to_top() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-to-top-activator.php';
	To_Top_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-to-top-deactivator.php
 */
function deactivate_to_top() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-to-top-deactivator.php';
	To_Top_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_to_top' );
register_deactivation_hook( __FILE__, 'deactivate_to_top' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-to-top.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0
 */
function run_to_top() {

	$plugin = new To_Top();
	$plugin->run();

}
run_to_top();

/**
 * Returns the options array for Top options
 *
 *  @since    1.0
 */
function to_top_get_options(){
	$to_top_default_options = to_top_default_options();

	return array_merge( $to_top_default_options , get_option( 'to_top_options', $to_top_default_options ) ) ;
}

/**
 * Return array of default options
 *
 * @since     1.0
 * @return    array    default options.
 */
function to_top_default_options( $option = null ) {
	$default_options = array(
		//Basic Settings
		'scroll_offset'				=> '100',
		'icon_opacity'				=> '50',
		'style'						=> 'icon',

		//Icon Settings
		'icon_type'					=> 'dashicons-arrow-up-alt2',
		'icon_color'				=> '#ffffff',
		'icon_bg_color'				=> '#000000',
		'icon_size'					=> '32',
		'border_radius'				=> '5',

		//Image Settings
		'image'						=> plugin_dir_url( __FILE__ ).'admin/images/default.png',
		'image_width'				=> '65',
		'image_alt'					=> '',



		//Advanced Settings
		'location'					=> 'bottom-right',
		'margin_x'					=> '20',
		'margin_y'					=> '20',
		'show_on_admin'				=> 0,
		'enable_autohide'			=> 0,
		'autohide_time'				=> '2',
		'enable_hide_small_device'	=> 0,
		'small_device_max_width'	=> '640',

		//Reset Settings
		'reset'						=> 0,
	);

	if ( null == $option ) {
		return apply_filters( 'to_top_options', $default_options );
	}
	else {
		return $default_options[ $option ];
	}
}
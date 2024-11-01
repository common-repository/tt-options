<?php
/*
	Plugin Name: TT-Options
	Plugin URI: https://wordpress.org/plugins/tt-options/
	Description: This plugin is a simplified theme options where you can save styles, scripts and other codes to the database without having to edit any files on your theme. Makes your theme updates a worry-free! TT-Options provides users with limited theme options the unlimited possibilities to fully customize their website. 
	Version: 1.0.6
	Author: Thesabel Tuto
	Author URI: http://thesabeltuto.blogspot.com
	Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
	License: GPLv2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html

	Copyright  THESABEL UY TUTO, CSNA, MBA  (email : ttutowork@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Define paths and variables
define('TT_OPTIONS_PLUGIN_FILE', __FILE__ );
define('TT_OPTIONS_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('TT_OPTIONS_PLUGIN_URL', plugin_dir_url(__FILE__));

// Global variables
$TT_OPTIONS_PLUGIN_VERSION = '1.0.6';
$TT_OPTIONS_PLUGIN_ADMIN_CSS_VERSION = '1.0.4'; // admin style
$TT_OPTIONS_PLUGIN_ADMIN_JS_VERSION = '1.0.3'; // admin script

// Load Plugin
add_action('init', 'load_TT_OPTIONS_PLUGIN_scripts');

if ( is_admin() ) {
	add_action('init', 'load_TT_OPTIONS_PLUGIN_scripts_in');
} else {
	add_action('wp_head', 'load_TT_OPTIONS_PLUGIN_scripts_out');
}

function load_TT_OPTIONS_PLUGIN_scripts_out() {
	require(TT_OPTIONS_PLUGIN_DIR.'/includes/custom-codes.php');
}

function load_TT_OPTIONS_PLUGIN_scripts_in() {
	wp_register_script('tt-options-admin.js', TT_OPTIONS_PLUGIN_URL.'js/admin.js', '', $GLOBALS['TT_OPTIONS_PLUGIN_ADMIN_JS_VERSION'], false);	
	wp_register_style('tt-options-admin.css',  TT_OPTIONS_PLUGIN_URL.'css/admin.css', '', $GLOBALS['TT_OPTIONS_PLUGIN_ADMIN_CSS_VERSION'], '');
	
    wp_enqueue_script('tt-options-admin.js' );	
	wp_enqueue_style('tt-options-admin.css');
	
	require(TT_OPTIONS_PLUGIN_DIR.'/includes/admin.php');
}

function load_TT_OPTIONS_PLUGIN_scripts() {
	wp_enqueue_script('jquery');
}
?>
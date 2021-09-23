<?php
/*
Plugin Name: PS Voting
Plugin URI: https://n3rds.work/piestingtal_source/beitrags-voting/
Description: Messe die Beliebtheit des Inhalts Deiner Webseite, indem Du Deine Besucher oder Benutzer über diesen Inhalt abstimmen lässt. So ähnlich wie Dein persönliches Digg oder Reddit, und es steckt voller Funktionen!
Version: 2.2.9
Requires at least: 4.9
Text Domain: wdpv
Author: WMS N@W
Author URI: https://n3rds.work

Copyright 2020-2021 WMS N@W (https://n3rds.work)
Author - DerN3rd


This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License (Version 2 - GPLv2) as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
require 'psource/psource-plugin-update/plugin-update-checker.php';
$MyUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://n3rds.work//wp-update-server/?action=get_metadata&slug=ps-voting', 
	__FILE__, 
	'ps-voting' 
);

define ('WDPV_PLUGIN_SELF_DIRNAME', basename(dirname(__FILE__)), );

//Setup proper paths/URLs and load text domains
if (is_multisite() && defined('WPMU_PLUGIN_URL') && defined('WPMU_PLUGIN_DIR') && file_exists(WPMU_PLUGIN_DIR . '/' . basename(__FILE__))) {
	define ('WDPV_PLUGIN_LOCATION', 'mu-plugins', true);
	define ('WDPV_PLUGIN_BASE_DIR', WPMU_PLUGIN_DIR, true);
	define ('WDPV_PLUGIN_URL', str_replace('http://', (@$_SERVER["HTTPS"] == 'on' ? 'https://' : 'http://'), WPMU_PLUGIN_URL), true);
	$textdomain_handler = 'load_muplugin_textdomain';
} else if (defined('WP_PLUGIN_URL') && defined('WP_PLUGIN_DIR') && file_exists(WP_PLUGIN_DIR . '/' . WDPV_PLUGIN_SELF_DIRNAME . '/' . basename(__FILE__))) {
	define ('WDPV_PLUGIN_LOCATION', 'subfolder-plugins',);
	define ('WDPV_PLUGIN_BASE_DIR', WP_PLUGIN_DIR . '/' . WDPV_PLUGIN_SELF_DIRNAME,);
	define ('WDPV_PLUGIN_URL', str_replace('http://', (@$_SERVER["HTTPS"] == 'on' ? 'https://' : 'http://'), WP_PLUGIN_URL) . '/' . WDPV_PLUGIN_SELF_DIRNAME,);
	$textdomain_handler = 'load_plugin_textdomain';
} else if (defined('WP_PLUGIN_URL') && defined('WP_PLUGIN_DIR') && file_exists(WP_PLUGIN_DIR . '/' . basename(__FILE__))) {
	define ('WDPV_PLUGIN_LOCATION', 'plugins', true);
	define ('WDPV_PLUGIN_BASE_DIR', WP_PLUGIN_DIR, true);
	define ('WDPV_PLUGIN_URL', str_replace('http://', (@$_SERVER["HTTPS"] == 'on' ? 'https://' : 'http://'), WP_PLUGIN_URL), true);
	$textdomain_handler = 'load_plugin_textdomain';
} else {
	// No textdomain is loaded because we can't determine the plugin location.
	// No point in trying to add textdomain to string and/or localizing it.
	wp_die(__('Es gab ein Problem beim Bestimmen, wo das Psource Voting-Plugin installiert ist. Bitte erneut installieren.'));
}
$textdomain_handler('wdpv', false, WDPV_PLUGIN_SELF_DIRNAME . '/languages/');

require_once WDPV_PLUGIN_BASE_DIR . '/lib/class_wdpv_installer.php';
Wdpv_Installer::check();

require_once WDPV_PLUGIN_BASE_DIR . '/lib/class_wdpv_options.php';
require_once WDPV_PLUGIN_BASE_DIR . '/lib/class_wdpv_model.php';
require_once WDPV_PLUGIN_BASE_DIR . '/lib/class_wdpv_codec.php';
require_once WDPV_PLUGIN_BASE_DIR . '/lib/class_wdpv_plugins_handler.php';
require_once WDPV_PLUGIN_BASE_DIR . '/lib/wdpv_template_tags.php';

Wdpv_Options::populate();
Wdpv_PluginsHandler::init();

// Widgets
require_once WDPV_PLUGIN_BASE_DIR . '/lib/class_wpdv_widget_voting.php';
//add_action('widgets_init', create_function('', "register_widget('Wdpv_WidgetVoting');"));
add_action('widgets_init', function() {register_widget('Wdpv_WidgetVoting');});
require_once WDPV_PLUGIN_BASE_DIR . '/lib/class_wpdv_widget_popular.php';
//add_action('widgets_init', create_function('', "register_widget('Wdpv_WidgetPopular');"));
add_action('widgets_init', function() {register_widget('Wdpv_WidgetPopular');});
require_once WDPV_PLUGIN_BASE_DIR . '/lib/class_wpdv_widget_network_popular.php';
//add_action('widgets_init', create_function('', "register_widget('Wdpv_WidgetNetworkPopular');"));
add_action('widgets_init', function() {register_widget('Wdpv_WidgetNetworkPopular');});


if (is_admin()) {
	require_once WDPV_PLUGIN_BASE_DIR . '/lib/class_wdpv_admin_form_renderer.php';
	require_once WDPV_PLUGIN_BASE_DIR . '/lib/class_wdpv_admin_pages.php';
	Wdpv_AdminPages::serve();
} else {
	require_once WDPV_PLUGIN_BASE_DIR . '/lib/class_wdpv_public_pages.php';
	Wdpv_PublicPages::serve();
}


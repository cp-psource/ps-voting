<?php
/**
 * Handles options access.
 */
class Wdpv_Options {
    var $timeframes;

    function __construct() {
        $this->timeframes = array(
            'this_week'  => __('Diese Woche', 'wdpv'),
            'last_week'  => __('Letzte Woche', 'wdpv'),
            'this_month' => __('Diesen Monat', 'wdpv'),
            'last_month' => __('Letzten Monat', 'wdpv'),
            'this_year'  => __('Dieses Jahr', 'wdpv'),
            'last_year'  => __('Letztes Jahr', 'wdpv'),
        );
    }

    /**
     * Gets a single option from options storage.
     */
    function get_option($key) {
		$opts = is_multisite() ? get_site_option('wdpv') : get_option('wdpv');
        $opts = get_option('wdpv');
        return isset($opts[$key]) ? $opts[$key] : null; // Überprüft ob der Schlüssel vorhanden ist, bevor darauf zugegriffen wird.
    }

    /**
     * Sets all stored options.
     */
    function set_options($opts) {
        return update_option('wdpv', $opts);
    }

    /**
     * Populates options key for storage.
     *
     * @static
     */
    public static function populate() {
        $site_opts = get_site_option('wdpv');
        $site_opts = is_array($site_opts) ? $site_opts : array();

        $opts = get_option('wdpv');
        $opts = is_array($opts) ? $opts : array();

        $res = array_merge($site_opts, $opts);
        update_option('wdpv', $res);
    }
}
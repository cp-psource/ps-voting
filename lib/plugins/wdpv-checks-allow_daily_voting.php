<?php
/*
Plugin Name: Tägliche Abstimmungen 
Description: Durch aktivieren wird Benutzern erlaubt jeden Tag neu abzustimmen.
Plugin URI: https://n3rds.work/piestingtal_source/beitrags-voting/
Version: 1.0
Author: DerN3rd (WMS N@W)
*/

class Wdpv_Checks_AllowDailyVoting {

	private function __construct () {}

	public static function serve () {
		$me = new Wdpv_Checks_AllowDailyVoting;
		$me->_add_hooks();
	}

	private function _add_hooks () {
		add_filter('wdpv-cookie-expiration_time', array($this, 'reset_cookie_expiration'));
		add_filter('wdpv-sql-where-user_id_check', array($this, 'add_timeframe_condition'));
		add_filter('wdpv-sql-where-user_ip_check', array($this, 'add_timeframe_condition'));
	}

	function reset_cookie_expiration ($time) {
		return time() + 24*3600;
	}

	function add_timeframe_condition ($where) {
		$yesterday = date('Y-m-d', strtotime("-1 days"));
		return "{$where} AND date > '{$yesterday}'";
	}
}

if (is_admin()) Wdpv_Checks_AllowDailyVoting::serve();
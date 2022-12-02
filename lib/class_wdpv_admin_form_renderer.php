<?php
/**
 * Renders form elements for admin settings pages.
 */
class Wdpv_AdminFormRenderer {
	function _get_option () {
		return WP_NETWORK_ADMIN ? get_site_option('wdpv') : get_option('wdpv');
	}

	function _create_checkbox ($name) {
		$opt = $this->_get_option();
		$value = @$opt[$name];
		$disabled = (@$opt['disable_siteadmin_changes'] && !current_user_can('manage_network_options')) ? 'disabled="disabled"' : '';
		return
			"<input {$disabled} type='radio' name='wdpv[{$name}]' id='{$name}-yes' value='1' " . ((int)$value ? 'checked="checked" ' : '') . " /> " .
				"<label for='{$name}-yes'>" . __('Ja', 'wdpv') . "</label>" .
			'<br />' .
			"<input {$disabled} type='radio' name='wdpv[{$name}]' id='{$name}-no' value='0' " . (!(int)$value ? 'checked="checked" ' : '') . " /> " .
				"<label for='{$name}-no'>" . __('Nein', 'wdpv') . "</label>" .
		"";
	}

	function _create_radiobox ($name, $value) {
		$opt = $this->_get_option();
		$checked = (@$opt[$name] == $value) ? true : false;
		return "<input type='radio' name='wdpv[{$name}]' id='{$name}-{$value}' value='{$value}' " . ($checked ? 'checked="checked" ' : '') . " /> ";
	}

	function create_allow_voting_box () {
		echo $this->_create_checkbox ('allow_voting');
	}
	function create_allow_visitor_voting_box () {
		echo $this->_create_checkbox ('allow_visitor_voting');
	}
	function create_use_ip_check_box () {
		echo $this->_create_checkbox ('use_ip_check');
		_e(
			'<p>Standardmäßig werden Besucher auch nach IP verfolgt, um Mehrfachabstimmungen zu vermeiden. Dies kann jedoch in bestimmten Fällen problematisch sein (z. B. mehrere Benutzer hinter einem einzelnen Router).</p>' .
			'<p>Setze dies auf "Nein", wenn Du diese Maßnahme nicht verwenden möchtest.</p>',
			'wdpv'
		);
	}
	function create_show_login_link_box () {
		echo $this->_create_checkbox ('show_login_link');
		_e(
			'<p>Wenn die Besucherabstimmung nicht zulässig ist, wird die Abstimmung standardmäßig überhaupt nicht angezeigt.</p>' .
			'<p>Setze dies auf "Ja", wenn Du stattdessen den Login-Link haben möchtest.</p>',
			'wdpv'
		);
	}
	function create_voting_position_box () {
		$positions = array (
			'top' => __('Vor dem Beitrag', 'wdpv'),
			'bottom' => __('Nach dem Beitrag', 'wdpv'),
			'both' => __('Sowohl vor als auch nach dem Beitrag', 'wdpv'),
			'manual' => __('Positioniere die Box manuell mit einem Shortcode (<strong>[wdpv_vote]</strong>) oder einem Widget', 'wdpv'),
		);
		foreach ($positions as $pos => $label) {
			echo $this->_create_radiobox ('voting_position', $pos);
			echo "<label for='voting_position-{$pos}'>$label</label><br />";
		}
	}
	function create_front_page_voting_box () {
		echo $this->_create_checkbox ('front_page_voting');
		_e(
			'<p>Standardmäßig wird die Abstimmung nur auf einzelnen Seiten angezeigt.</p>' .
			'<p>Setze diese Option auf "Ja", um allen Posts auf der Frontpage eine Abstimmung hinzuzufügen.</p>',
			'wdpv'
		);
	}
	function create_voting_appearance_box () {
		$skins = array (
			'' => __('Standard', 'wdpv'),
			'arrows' => __('Pfeile', 'wdpv'),
			'plusminus' => __('Plus/Minus', 'wdpv'),
			'whitearrow' => __('Weiße Pfeile', 'wdpv'),
			'qa' => __('Q&amp;A Pfeile', 'wdpv'),
			'icomoon' => __('Symbolschriftarten', 'wdpv'),
		);
		foreach ($skins as $skin => $label) {
			echo $this->_create_radiobox ('voting_appearance', $skin);
			echo "<label for='voting_appearance-{$skin}'>$label</label>";
			if ( $skin != 'icomoon' ) {
				
				$path_fragment = $skin ? "{$skin}/" : '';
				echo '<div class="wdpv_preview" style="display:inline-block">' .
					' <img style="margin-left:15px; vertical-align:middle" src="' . WDPV_PLUGIN_URL . '/img/' . $path_fragment . 'up.png" />' .
					' <img style="vertical-align:middle" src="' . WDPV_PLUGIN_URL . '/img/' . $path_fragment . 'down.png" />' .
				'</div>';
			}
			else {
				echo '<div class="wdpv_preview" style="display:inline-block">' .
					'<span style="margin-left:15px;" class="wdpv-icon-thumbs-up"></span>' . 
					'<span class="wdpv-icon-thumbs-down"></span>' . 
				'</div>';
			}

			echo '<br/><br/>';
		}
	}
	function create_voting_positive_box () {
		echo $this->_create_checkbox ('voting_positive');
		_e(
			'<p>Wenn diese Option aktiviert ist, werden negative Stimmen verhindert, indem nur ein positiver Abstimmungslink angezeigt wird.</p>',
			'wdpv'
		);
	}
	function create_disable_siteadmin_changes_box () {
		echo $this->_create_checkbox ('disable_siteadmin_changes');
		_e(
			'<p>Standardmäßig können Seitenadministratoren auf Plugin-Einstellungen zugreifen und Änderungen vornehmen.</p>' .
			'<p>Setze diese Option auf "Ja", um zu verhindern, dass sie Änderungen an den Plugin-Einstellungen vornehmen.</p>',
			'wdpv'
		);
	}

	function create_skip_post_types_box () {
		$post_types = get_post_types(array('public'=>true), 'objects');
		$opt = $this->_get_option();
		$skip_types = is_array(@$opt['skip_post_types']) ? @$opt['skip_post_types'] : array();

		foreach ($post_types as $tid=>$post_type_object) {
			$checked = in_array($tid, $skip_types) ? 'checked="checked"' : '';
			echo
				"<input type='hidden' name='wdpv[skip_post_types][{$tid}]' value='0' />" . // Override for checkbox
				"<input {$checked} type='checkbox' name='wdpv[skip_post_types][{$tid}]' id='skip_post_types-{$tid}' value='{$tid}' /> " .
				"<label for='skip_post_types-{$tid}'>" . ucfirst($post_type_object->labels->name) . "</label>" .
			"<br />";
		}
		_e(
			'<p>Die Abstimmung wird <strong><em>nicht</em></strong> für ausgewählte Beitragstypen angezeigt.</p>',
			'wdpv'
		);
	}

// BuddyPress

	function create_bp_publish_activity_box () {
		echo $this->_create_checkbox ('bp_publish_activity');
		echo '<div><small>' . __('Aktivitäten werden nur für Deine angemeldeten Benutzer aufgezeichnet', 'wdpv') . '</small></div>';
		echo '<div><strong>' . __("Aus dem gesamten Aktivitätsstream ausblenden:", 'wdpv') . '</strong></div>';
		echo $this->_create_checkbox ('bp_publish_activity_local');
		echo '<div><small>' . __('Aufgezeichnete Aktivitäten werden in Deinem gesamten Aktivitätsstrom ausgeblendet', 'wdpv') . '</small></div>';
	}
	function create_bp_profile_votes_box () {
		$opt = $this->_get_option();
		echo $this->_create_checkbox ('bp_profile_votes');
		echo "<br />";

		// Set defaults
		$opt['bp_profile_votes_limit'] = @$opt['bp_profile_votes_limit'] ? $opt['bp_profile_votes_limit'] : 0;
		$opt['bp_profile_votes_period'] = @$opt['bp_profile_votes_period'] ? $opt['bp_profile_votes_period'] : 1;
		$opt['bp_profile_votes_unit'] = @$opt['bp_profile_votes_unit'] ? $opt['bp_profile_votes_unit'] : 'month';

		echo __("Zeige", 'wdpv') . ' ';
		echo '<select name="wdpv[bp_profile_votes_limit]">';
		for ($i=0; $i<=20; $i++) {
			$title = $i ? $i : __('alle', 'wdpv');
			$selected = ($i == @$opt['bp_profile_votes_limit']) ? 'selected="selected"' : '';
			echo "<option value='{$i}' {$selected}>{$title}</option>";
		}
		echo '</select> ';

		echo __('Abstimmung(en) innerhalb der letzten', 'wdpv') . ' ';
		echo '<select name="wdpv[bp_profile_votes_period]">';
		for ($i=1; $i<=24; $i++) {
			$selected = ($i == @$opt['bp_profile_votes_period']) ? 'selected="selected"' : '';
			echo "<option value='{$i}' {$selected}>{$i}</option>";
		}
		echo '</select> ';
		echo '<select name="wdpv[bp_profile_votes_unit]">';
		foreach (array(
			'hour'  => __('Stunde(n)', 'wdpv'),
			'day'   => __('Tag(e)', 'wdpv'),
			'week'  => __('Woche(n)', 'wdpv'),
			'month' => __('Monat(e)', 'wdpv'),
			'year'  => __('Jahr(e)', 'wdpv'),
			) as $unit) {
			$selected = ($unit == @$opt['bp_profile_votes_unit']) ? 'selected="selected"' : '';
			$title = ucfirst($unit) /*. '(n)'*/;
			echo "<option value='{$unit}' {$selected}>{$title}</option>";
		}
		echo '</select> ';

	}

	function create_plugins_box () {
		$all = Wdpv_PluginsHandler::get_all_plugins();
		$active = Wdpv_PluginsHandler::get_active_plugins();
		$sections = array('thead', 'tfoot');

		echo "<table class='widefat'>";
		foreach ($sections as $section) {
			echo "<{$section}>";
			echo '<tr>';
			echo '<th width="30%">' . __('Erweiterung Name', 'wdpv') . '</th>';
			echo '<th>' . __('Erweiterung Beschreibung', 'wdpv') . '</th>';
			echo '</tr>';
			echo "</{$section}>";
		}
		echo "<tbody>";
		foreach ($all as $plugin) {
			$plugin_data = Wdpv_PluginsHandler::get_plugin_info($plugin);
			if (!@$plugin_data['Name']) continue; // Require the name
			$is_active = in_array($plugin, $active);
			echo "<tr>";
			echo "<td width='30%'>";
			echo '<b>' . $plugin_data['Name'] . '</b>';
			echo "<br />";
			echo ($is_active
				?
				'<a href="#deactivate" class="wdpv_deactivate_plugin" wdpv:plugin_id="' . esc_attr($plugin) . '">' . __('Deaktivieren', 'wdpv') . '</a>'
				:
				'<a href="#activate" class="wdpv_activate_plugin" wdpv:plugin_id="' . esc_attr($plugin) . '">' . __('Aktivieren', 'wdpv') . '</a>'
			);
			echo "</td>";
			echo '<td>' .
				$plugin_data['Description'] .
				'<br />' .
				sprintf(__('Version %s', 'wdpv'), $plugin_data['Version']) .
				'&nbsp;|&nbsp;' .
				sprintf(__('von %s', 'wdpv'), '<a href="' . $plugin_data['Plugin URI'] . '">' . $plugin_data['Author'] . '</a>') .
			'</td>';
			echo "</tr>";
		}
		echo "</tbody>";
		echo "</table>";

		echo <<<EOWdpvPluginJs
<script type="text/javascript">
(function ($) {
$(function () {
	$(".wdpv_activate_plugin").on("click", function () {
		var me = $(this);
		var plugin_id = me.attr("wdpv:plugin_id");
		$.post(ajaxurl, {"action": "wdpv_activate_plugin", "plugin": plugin_id}, function (data) {
			window.location = window.location;
		});
		return false;
	});
	$(".wdpv_deactivate_plugin").on("click", function () {
		var me = $(this);
		var plugin_id = me.attr("wdpv:plugin_id");
		$.post(ajaxurl, {"action": "wdpv_deactivate_plugin", "plugin": plugin_id}, function (data) {
			window.location = window.location;
		});
		return false;
	});
});
})(jQuery);
</script>
EOWdpvPluginJs;
	}
}
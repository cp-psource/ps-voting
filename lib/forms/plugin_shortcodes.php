<?php include_once( WDPV_PLUGIN_BASE_DIR . '/lib/forms/plugin_tabs.php'); ?>
<div>
<p><?php _e( 'Unabhängig von den Einstellungen Deiner <em>Abstimmungsbox-Position</em> kannst Du jederzeit die Shortcodes verwenden, um Post-Voting in Deinen Inhalt einzufügen (sofern Du natürlich Post-Voting zulässt).', 'wdpv' ); ?></p>

<p><?php _e( 'Es gibt mehrere Shortcodes, mit denen Du genau steuern kannst, was angezeigt wird.', 'wdpv' ); ?></p>

<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>[wdpv_vote]</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt> <dd><?php _ex( 'Keine', 'Attribute (keine)', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dies ist der Haupt-Abstimmungs-Shortcode. Es werden alle Teile des Abstimmungs-Gadgets angezeigt - Link "NVote up", Link "Vote down" und Ergebnisse.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiel', 'wdpv' ); ?>:</dt>
			<dd><code>[wdpv_vote]</code> - <?php _e( 'zeigt alle Teile des Abstimmungs-Gadgets an - Link "Vote up", Link "Vote down" und Ergebnisse.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Wenn Du keine Abstimmung zulässt, werden nur die Ergebnisse angezeigt.', 'wdpv' ); ?></dd>
</dl>

<p><?php _e('Wenn Du das Erscheinungsbild des Gadgets anpassen möchtest, kannst Du einen oder mehrere der unten aufgeführten Shortcodes verwenden.', 'wdpv' ); ?></p>

<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>[wdpv_vote_up]</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt> <dd><?php _ex( 'Keine', 'Attribute (keine)', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dies zeigt nur den Link "Vote up" an.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiel', 'wdpv' ); ?>:</dt>
			<dd><code>[wdpv_vote_up]</code> - <?php _e( 'zeigt nur den Link "Vote up" an.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Wenn Du keine Abstimmung zulässt, wird nichts angezeigt.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>[wdpv_vote_down]</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt> <dd><?php _ex( 'Keine', 'Attribute (keine)', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dies zeigt nur den Link "Vote down" an.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiel', 'wdpv' ); ?>:</dt>
			<dd><code>[wdpv_vote_down]</code> - <?php _e( 'zeigt nur den Link "Vote down" an.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Wenn Du keine Abstimmung zulässt, wird nichts angezeigt.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>[wdpv_vote_result]</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt> <dd><?php _ex( 'Keine', 'Attribute (keine)', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dies zeigt nur die Abstimmungsergebnisse an.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>[wdpv_vote_result]</code> - <?php _e( 'zeigt nur die Abstimmungsergebnisse an.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Die Ergebnisse werden angezeigt, auch wenn Du keine Abstimmung zulässt.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>[wdpv_popular]</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
			<dd>
				<dl>
					<dt><code>limit</code></dt>
					<dd><?php _e('<em>(optional)</em> Zeige nur so viele Beiträge. Der Standardwert ist 5', 'wdpv' ); ?></dd>
					<dt><code>network</code></dt>
					<dd><?php printf( __('<em>(optional)</em> Beiträge aus dem gesamten Netzwerk anzeigen. Stelle %s ein, wenn Du Beiträge aus dem gesamten Netzwerk anzeigen möchtest.', 'wdpv' ), '<code>yes</code>' ); ?></dd>
				</dl>
			</dd>
		</dl>
	</dd>
	<dd><?php _e('Daraufhin wird die Liste der Beiträge mit der höchsten Stimmenzahl angezeigt.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>[wdpv_popular]</code> - <?php _e( 'zeigt 5 am besten bewertete Beiträge im aktuellen Blog an.', 'wdpv' ); ?></dd>
			<dd><code>[wdpv_popular limit="3"]</code> - <?php _e( 'zeigt 3 am besten bewertete Beiträge im aktuellen Blog an.', 'wdpv' ); ?></dd>
			<dd><code>[wdpv_popular network="yes"]</code> - <?php _e( 'zeigt 5 am besten bewertete Beiträge im gesamten Netzwerk an.', 'wdpv' ); ?></dd>
			<dd><code>[wdpv_popular limit="10" network="yes"]</code> - <?php _e( 'zeigt 10 Beiträge mit der höchsten Bewertung im gesamten Netzwerk an.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Beliebte Beiträge werden angezeigt, auch wenn Du keine Abstimmung zulässt.', 'wdpv' ); ?></dd>
</dl>


<h3><?php _e( 'Vorlagen-Tags', 'wdpv' ); ?></h3>

<p><?php _e( 'Vorlagen-Tags können in Deinen Designs in The Loop verwendet werden, unabhängig von den Einstellungen für die <em>Abstimmungsbox-Position</em>', 'wdpv' ); ?>.</p>

<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_vote()</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
			<dd><?php printf( __( 'Lösche die Floats, %s oder %s. Der Standardwert ist %s', 'wdpv' ), '<code>true</code>', '<code>false</code>', '<code>true</code>' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dies ist das Haupt-Tag für Abstimmungsvorlagen. Es werden alle Teile des Abstimmungs-Gadgets angezeigt - Link "Vote up", Link "Vote down" und Ergebnisse.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_vote(); ?&gt;</code> - <?php _e( 'zeigt alle Teile des Abstimmungs-Gadgets an - Link "Vote up", Link "Vote down" und Ergebnisse.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_vote(false); ?&gt;</code> - <?php _e( 'wie oben, ohne die Floats zu räumen.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Wenn Du keine Abstimmung zulässt, werden nur die Ergebnisse angezeigt.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_vote_up()</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
			<dd><?php printf( __( 'Lösche die Floats, %s oder %s. Der Standardwert ist %s', 'wdpv' ), '<code>true</code>', '<code>false</code>', '<code>true</code>' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dies zeigt nur den Link "Vote up" an.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_vote_up(); ?&gt;</code> - <?php _e( 'zeigt nur den Link "Vote up" an.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_vote_up(false); ?&gt;</code> - <?php _e( 'wie oben, ohne die Floats zu räumen.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Wenn Du keine Abstimmung zulässt, wird nichts angezeigt.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_vote_down()</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
			<dd><?php printf( __( 'Lösche die Floats, %s oder %s. Der Standardwert ist %s', 'wdpv' ), '<code>true</code>', '<code>false</code>', '<code>true</code>' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dies zeigt nur den Link "Vote down" an.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_vote_down(); ?&gt;</code> - <?php _e( 'zeigt nur den Link "Vote down" an.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_vote_down(false); ?&gt;</code> - <?php _e( 'wie oben, ohne die Floats zu räumen.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Wenn Du keine Abstimmung zulässt, wird nichts angezeigt.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_vote_result()</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
			<dd><?php printf( __( 'Lösche die Floats, %s oder %s. Der Standardwert ist %s', 'wdpv' ), '<code>true</code>', '<code>false</code>', '<code>true</code>' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dies zeigt nur die Abstimmungsergebnisse an.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_vote_result(); ?&gt;</code> - <?php _e( 'zeigt nur die Abstimmungsergebnisse an.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_vote_result(false); ?&gt;</code> - <?php _e( 'wie oben, ohne die Floats zu räumen.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Die Ergebnisse werden angezeigt, auch wenn Du keine Abstimmung zulässt.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_popular()</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
			<dd>int <code>limit</code> - <?php _e( '<em>(optional)</em> Zeige nur so viele Beiträge. Der Standardwert ist 5', 'wdpv' ); ?></dd>
			<dd>bool <code>network</code> - <?php _e( '<em>(optional)</em> Beiträge aus dem gesamten Netzwerk anzeigen. Stelle <code>true</code> ein, wenn Du Beiträge aus dem gesamten Netzwerk anzeigen möchtest.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Daraufhin wird die Liste der Beiträge mit der höchsten Stimmenzahl angezeigt.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_popular(); ?&gt;</code> - <?php _e( 'zeigt 5 am besten bewertete Beiträge im aktuellen Blog an.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_popular(3); ?&gt;</code> - <?php _e( 'zeigt 3 am besten bewertete Beiträge im aktuellen Blog an.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_popular(5, true); ?&gt;</code> - <?php _e( 'zeigt 5 am besten bewertete Beiträge im gesamten Netzwerk an.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_popular(10, true); ?&gt;</code> - <?php _e( 'zeigt 10 Beiträge mit der höchsten Bewertung im gesamten Netzwerk an.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Beliebte Beiträge werden angezeigt, auch wenn Du keine Abstimmung zulässt.', 'wdpv' ); ?></dd>
</dl>


<h3><?php _e( 'Benutzerdefinierte Post-Variationen', 'wdpv' ); ?></h3>

<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_get_vote($standalone, $post_id)</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
			<dd>bool <code>standalone</code> - <?php printf( __( 'Lösche die Floats, %s oder %s. Der Standardwert ist %s', 'wdpv' ), '<code>true</code>', '<code>false</code>', '<code>true</code>' ); ?></dd>
			<dd>int <code>post_id</code> - <?php _e( 'Deine Post-ID', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dies ist das Haupt-Tag für Abstimmungsvorlagen. Es werden <em>alle</em> alle Teile des Abstimmungs-Gadgets zurückgegeben - Link "Vote up", Link "Vote down" und Ergebnisse.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_get_vote(); ?&gt;</code> - <?php _e( '<em>wird</em> alle Teile des Abstimmungs-Gadgets zurückgeben - Link "Vote up", Link "Vote down" und Ergebnisse.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote(false); ?&gt;</code> - <?php _e( 'wie oben, ohne die Floats zu räumen.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote(true, 12); ?&gt;</code> - <?php _e( 'gibt alle Teile des Abstimmungs-Gadgets für Deinen Beitrag mit der ID 12 zurück.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Wenn Du keine Abstimmung zulässt, werden nur die Ergebnisse zurückgegeben.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_get_vote_up($standalone, $post_id)</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
			<dd>bool <code>standalone</code> - <?php printf( __( 'Lösche die Floats, %s oder %s. Der Standardwert ist %s', 'wdpv' ), '<code>true</code>', '<code>false</code>', '<code>true</code>' ); ?></dd>
			<dd>int <code>post_id</code> - <?php _e( 'Deine Post ID', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dadurch wird <em>nur</em> nur der Link "Vote up" zurückgegeben.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_get_vote_up(); ?&gt;</code> - <?php _e( 'wird <em>nur</em> nur den Link "Vote up" zurückgeben.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_up(false); ?&gt;</code> - <?php _e( 'wie oben, ohne die Floats zu räumen.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_up(true, 12); ?&gt;</code> - <?php _e( 'wird den Link "Vote up" für Deinen Beitrag mit der ID 12 zurückgeben.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Wenn Du keine Abstimmung zulässt, wird nichts zurückgegeben.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_get_vote_down($standalone, $post_id)</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
			<dd>bool <code>standalone</code> - <?php printf( __( 'Lösche die Floats, %s oder %s. Der Standardwert ist %s', 'wdpv' ), '<code>true</code>', '<code>false</code>', '<code>true</code>' ); ?></dd>
			<dd>int <code>post_id</code> - <?php _e( 'Deine Post ID', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dadurch wird <em>nur der Link "Vote down"</em> zurückgegeben.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_get_vote_down(); ?&gt;</code> - <?php _e( 'wird <em>nur</em> nur den Link "Vote down" zurückgeben.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_down(false); ?&gt;</code> - <?php _e( 'wie oben, ohne die Floats zu räumen.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_down(true, 12); ?&gt;</code> - <?php _e( 'wird den Link "Vote down" für Deinen Beitrag mit der ID 12 zurückgeben.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Wenn Du keine Abstimmung zulässt, wird nichts zurückgegeben.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_get_vote_result($standalone, $post_id)</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
			<dd>bool <code>standalone</code> - <?php printf( __( 'Lösche die Floats, %s oder %s. Der Standardwert ist %s', 'wdpv' ), '<code>true</code>', '<code>false</code>', '<code>true</code>' ); ?></dd>
			<dd>int <code>post_id</code> - <?php _e( 'Deine Post ID', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dadurch werden <em>nur</em> nur die Abstimmungsergebnisse zurückgegeben.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_get_vote_result(); ?&gt;</code> - <?php _e( 'wird <em>nur</em> nur die Abstimmungsergebnisse zurückgeben.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_result(false); ?&gt;</code> - <?php _e( 'wie oben, ohne die Floats zu räumen.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_result(true, 12); ?&gt;</code> - <?php _e( 'gibt Abstimmungsergebnisse für Deinen Beitrag mit der ID 12 zurück.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Die Ergebnisse werden auch dann zurückgegeben, wenn Du keine Abstimmung zulässt.', 'wdpv' ); ?></dd>
</dl>


<h3><?php _e( 'Multisite-Variationen', 'wdpv' ); ?></h3>

<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_get_vote_ms($standalone, $blog_id, $post_id)</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
			<dd>bool <code>standalone</code> - <?php printf( __( 'Lösche die Floats, %s oder %s. Der Standardwert ist %s', 'wdpv' ), '<code>true</code>', '<code>false</code>', '<code>true</code>' ); ?></dd>
			<dd>int <code>blog_id</code> - <?php _e( 'Deine Blog ID', 'wdpv' ); ?></dd>
			<dd>int <code>post_id</code> - <?php _e( 'Deine Post ID', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dies ist das Haupt-Tag für Abstimmungsvorlagen. Es werden <em>alle</em> alle Teile des Abstimmungs-Gadgets zurückgegeben - Link "Vote up", Link "Vote down" und Ergebnisse.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_get_vote_ms(); ?&gt;</code> - <?php _e( '<em>wird</em> alle Teile des Abstimmungs-Gadgets zurückgeben - Link "Vote up", Link "Vote down" und Ergebnisse.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_ms(false); ?&gt;</code> - <?php _e( 'wie oben, ohne die Floats zu räumen.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_ms(true, 4, 12); ?&gt;</code> - <?php _e( 'gibt alle Teile des Abstimmungs-Gadgets für Deinen Beitrag mit der ID 12 aus dem Blog in Deinem Netzwerk mit der ID 4 zurück.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Wenn Du keine Abstimmung zulässt, werden nur die Ergebnisse zurückgegeben.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_get_vote_up_ms($standalone, $blog_id, $post_id)</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
			<dd>bool <code>standalone</code> - <?php printf( __( 'Lösche die Floats, %s oder %s. Der Standardwert ist %s', 'wdpv' ), '<code>true</code>', '<code>false</code>', '<code>true</code>' ); ?></dd>
			<dd>int <code>blog_id</code> - <?php _e( 'Deine Blog ID', 'wdpv' ); ?></dd>
			<dd>int <code>post_id</code> - <?php _e( 'Deine Post ID', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dadurch wird <em>nur</em> nur der Link "Vote up" zurückgegeben.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_get_vote_up(); ?&gt;</code> - <?php _e( 'wird <em>nur</em> nur den Link "Vote up" zurückgeben.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_up(false); ?&gt;</code> - <?php _e( 'wie oben, ohne die Floats zu räumen.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_up(true, 4, 12); ?&gt;</code> - <?php _e( 'wird den Link "Vote up" für Deinen Beitrag mit der ID 12 aus dem Blog in Deinem Netzwerk mit der ID 4 zurückgeben.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Wenn Du keine Abstimmung zulässt, wird nichts zurückgegeben.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_get_vote_down_ms($standalone, $blog_id, $post_id)</code></dt>
	<dd>
			<dl>
				<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
				<dd>bool <code>standalone</code> - <?php printf( __( 'Lösche die Floats, %s oder %s. Der Standardwert ist %s', 'wdpv' ), '<code>true</code>', '<code>false</code>', '<code>true</code>' ); ?></dd>
				<dd>int <code>blog_id</code> - <?php _e( 'Deine Blog-ID', 'wdpv' ); ?></dd>
				<dd>int <code>post_id</code> - <?php _e( 'Deine Post-ID', 'wdpv' ); ?></dd>
			</dl>
		</dd>
	<dd><?php _e('Dadurch wird <em>nur der Link "Abstimmen"</em> zurückgegeben.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_get_vote_down(); ?&gt;</code> - <?php _e( 'wird <em>nur</em> nur den Link "Abstimmen" zurückgeben.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_down(false); ?&gt;</code> - <?php _e( 'wie oben, ohne die Floats zu räumen.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_down(true, 4, 12); ?&gt;</code> - <?php _e( 'wird den Link "Vote down" für Deinen Beitrag mit der ID 12 aus dem Blog in Deinem Netzwerk mit der ID 4 zurückgeben.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Wenn Du keine Abstimmung zulässt, wird nichts zurückgegeben.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_get_vote_result_ms($standalone, $blog_id, $post_id)</code></dt>
	<dd>
			<dl>
				<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
				<dd>bool <code>standalone</code> - <?php printf( __( 'Lösche die Floats, %s oder %s. Der Standardwert ist %s', 'wdpv' ), '<code>true</code>', '<code>false</code>', '<code>true</code>' ); ?></dd>
				<dd>int <code>blog_id</code> - <?php _e( 'Deine Blog-ID', 'wdpv' ); ?></dd>
				<dd>int <code>post_id</code> - <?php _e( 'Deine Post-ID', 'wdpv' ); ?></dd>
			</dl>
		</dd>
	<dd><?php _e('Dadurch werden <em>nur</em> nur die Abstimmungsergebnisse zurückgegeben.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_get_vote_result(); ?&gt;</code> - <?php _e( 'wird <em>nur</em> nur die Abstimmungsergebnisse zurückgeben.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_result(false); ?&gt;</code> - <?php _e( 'wie oben, ohne die Floats zu räumen.', 'wdpv' ); ?></dd>
			<dd><code>&lt;?php wdpv_get_vote_result(true, 4, 12); ?&gt;</code> - <?php _e( 'gibt Abstimmungsergebnisse für Deinen Beitrag mit der ID 12 aus dem Blog in Deinem Netzwerk mit der ID 4 zurück.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Die Ergebnisse werden auch dann zurückgegeben, wenn Du keine Abstimmung zulässt.', 'wdpv' ); ?></dd>
</dl>


<h3><?php _e( 'Periodensensitive Variationen', 'wdpv' ); ?></h3>

<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_get_popular_within($timespan, $limit=5)</code></dt>
	<dd>
			<dl>
				<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
				<dd>string <code>timespan</code> - <?php _e( 'Eine der anerkannten Zeitspannen', 'wdpv' ); ?> - <code>this_week</code>, <code>last_week</code>, <code>this_month</code>, <code>last_month</code>, <code>last_year</code>, <code>this_year</code></dd>
				<dd>int <code>limit</code> - <?php _e( 'Beschränke die zurückgegebenen Ergebnisse auf so viele.', 'wdpv' ); ?></dd>
			</dl>
		</dd>
	<dd><?php _e('Dadurch werden <em>nur</em> nur die Abstimmungsergebnisse innerhalb der ausgewählten Zeitspanne zurückgegeben.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiel', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_get_popular_within('this_week'); ?&gt;</code> - <?php _e( 'wird <em>nur</em> nur die Top 5 der beliebtesten Ergebnisse dieser Woche zurückgeben.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Die Ergebnisse werden auch dann zurückgegeben, wenn Du keine Abstimmung zulässt.', 'wdpv' ); ?></dd>
</dl>
<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_popular_within($timespan, $limit=5)</code></dt>
	<dd>
			<dl>
				<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
				<dd>string <code>timespan</code> - <?php _e( 'Eine der anerkannten Zeitspannen', 'wdpv' ); ?> - <code>this_week</code>, <code>last_week</code>, <code>this_month</code>, <code>last_month</code>, <code>last_year</code>, <code>this_year</code></dd>
				<dd>int <code>limit</code> - <?php _e( 'Beschränke die zurückgegebenen Ergebnisse auf so viele.', 'wdpv' ); ?></dd>
			</dl>
		</dd>
	<dd><?php _e('Dadurch werden die Abstimmungsergebnisse innerhalb der ausgewählten Zeitspanne <em>ausgegeben</em>.', 'wdpv' ); ?></dd>
	<dd>
		<dl>
			<dt class="examples"><?php _e( 'Beispiele', 'wdpv' ); ?>:</dt>
			<dd><code>&lt;?php wdpv_popular_within('this_week'); ?&gt;</code> - <?php _e( 'wird <em>nur</em> nur die Top 5 der beliebtesten Ergebnisse dieser Woche ausgeben.', 'wdpv' ); ?></dd>
		</dl>
	</dd>
</dl>

<h3><?php _e( 'Fortgeschritten', 'wdpv' ); ?></h3>

<dl class="item">
	<dt class="tag"><?php _ex( 'Tag', 'Shortcode Titel', 'wdpv' ); ?>: <code>wdpv_query_within($timespan, $limit=5, $query=array())</code></dt>
	<dd>
		<dl>
			<dt class="attributes"><?php _e( 'Attribute', 'wdpv' ); ?>:</dt>
			<dd>string <code>timespan</code> - <?php _e( 'Eine der anerkannten Zeitspannen', 'wdpv' ); ?> - <code>this_week</code>, <code>last_week</code>, <code>this_month</code>, <code>last_month</code>, <code>last_year</code>, <code>this_year</code></dd>
			<dd>int <code>limit</code> - <?php _e( 'Beschränke die zurückgegebenen Ergebnisse auf so viele.', 'wdpv' ); ?></dd>
			<dd>array <code>query</code> - <?php printf( __( 'Zusätzliche %s Argumente.', 'wdpv' ), '<code>WP_Query</code>' ); ?></dd>
		</dl>
	</dd>
	<dd><?php _e('Dadurch wird eine <code>WP_Query</code>-Instanz erzeugt, die für eine bestimmte Zeitspanne mit den beliebten Posts gefüllt ist.', 'wdpv' ); ?></dd>
	<dd><?php _e( 'Du kannst dann das zurückgegebene Ergebnis verwenden, um benutzerdefinierte Schleifen innerhalb Deines Themes zu erstellen.', 'wdpv' ); ?></dd>
	<dd class="notes"><?php _e( '<strong>Hinweis:</strong> Die Ergebnisse werden auch dann zurückgegeben, wenn Du keine Abstimmung zulässt.', 'wdpv' ); ?></dd>
</dl>

</div>
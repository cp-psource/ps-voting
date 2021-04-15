<?php
/**
 * Shows list of posts with highest number of votes on entire network.
 */
class Wdpv_WidgetNetworkPopular extends WP_Widget {

	//function Wdpv_WidgetNetworkPopular () {
	function __construct () {
		$widget_ops = array('classname' => __CLASS__, 'description' => __('Zeigt eine Liste der Beiträge mit der höchsten Stimmenzahl im gesamten Netzwerk an.', 'wdpv'));
		parent::__construct(__CLASS__, 'Top gewählte Beiträge im Netzwerk', $widget_ops);
	}

	function form ($instance) {
        $defaults = array(
            'title' => '',
            'limit' => 5,
            'voted_timeframe' => 'this_week'
        );

        $instance = wp_parse_args( $instance, $defaults );
		$title = esc_attr($instance['title']);
		$limit = esc_attr($instance['limit']);
		$voted_timeframe = esc_attr($instance['voted_timeframe']);

		// Set defaults
		$limit = $limit ? $limit : 5;

		$html = '<p>';
		$html .= '<label for="' . $this->get_field_id('title') . '">' . __('Titel:', 'wdpv') . '</label>';
		$html .= '<input type="text" name="' . $this->get_field_name('title') . '" id="' . $this->get_field_id('title') . '" class="widefat" value="' . $title . '"/>';
		$html .= '</p>';

		$html .= '<p>';
		$html .= '<label for="' . $this->get_field_id('limit') . '">' . __('Zeige so viele Beiträge:', 'wdpv') . '</label>';
		$html .= '<select name="' . $this->get_field_name('limit') . '" id="' . $this->get_field_id('limit') . '">';
		for ($i=1; $i<20; $i++) {
			$html .= "<option value='{$i}' " . (($i == $limit) ? 'selected="selected"' : '') . ">{$i}</option>";
		}
		$html .= '</select>';
		$html .= '</p>';

		$data = new Wdpv_Options;
		$html .= '<p>';
		$html .= '<label for="' . $this->get_field_id('voted_timeframe') . '">' . __('Abstimmung innerhalb:', 'wdpv') . '</label>';
		$html .= '<select name="' . $this->get_field_name('voted_timeframe') . '" id="' . $this->get_field_id('voted_timeframe') . '">';
		$html .= '<option value="">' . __('Allzeit', 'wdpv') . '</option>';
		foreach ($data->timeframes as $time => $label) {
			$html .= "<option value='{$time}' " . (($time == $voted_timeframe) ? 'selected="selected"' : '') . ">{$label}</option>";
		}
		$html .= '</select>';
		$html .= '</p>';

		echo $html;
	}

	function update ($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['limit'] = strip_tags($new_instance['limit']);
		$instance['voted_timeframe'] = strip_tags($new_instance['voted_timeframe']);

		return $instance;
	}

	function widget ($args, $instance) {
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$limit = (int)@$instance['limit'];
		$limit = $limit ? $limit : 5;

		$data = new Wdpv_Options;
		$voted_timeframe = @$instance['voted_timeframe'];
		if (!in_array($voted_timeframe, array_keys($data->timeframes))) $voted_timeframe = false;

		if (is_main_site()) {
			$model = new Wdpv_Model;
			$posts = $model->get_popular_on_network($limit, $voted_timeframe);

			echo $before_widget;
			if ($title) echo $before_title . $title . $after_title;

			if (is_array($posts)) {
				echo "<ul class='wdpv_popular_posts wdpv_network_popular'>";
				foreach ($posts as $post) {
					$data = get_blog_post($post['blog_id'], $post['post_id']);
                    $permalink = apply_filters( 'post_voting_network_widget_popular_post_permalink', get_blog_permalink( $post['blog_id'], $post['post_id'] ), $data, $post['blog_id'] );
					echo "<li>";
					echo '<a href="' . esc_url( $permalink ) . '">' . apply_filters('the_title', $data->post_title) . '</a> ';
					printf(__('<span class="wdpv_vote_count">(%s Stimmen)</span>', 'wdpv'), $post['total']);
					echo "</li>";
				}
				echo "</ul>";
			}

			echo $after_widget;
		}
	}
}
<?php

	/**
	* WPBakery Norebro Date and time custom type
	*/

	if ( function_exists ( 'vc_add_shortcode_param' ) ) {
		vc_add_shortcode_param( 'norebro_datetime', 'norebro_extra_datetime_settings_field', plugins_url( 'datetime.js' , __FILE__ ) );
	}

	function norebro_extra_datetime_settings_field( $settings, $value ) {
		$year = $month = $day = $hour = $minute = $second = '';
		$value_array = NorebroExtraParser::VC_datetime_to_array( $value );
		ob_start();

?>
		<div class="norebro_extra_datetime_block">
			<input type="hidden" name="<?php echo NorebroExtraFilter::string( $settings['param_name'], 'attr', '' ); ?>" class="wpb_vc_param_value" value="<?php echo NorebroExtraFilter::string( $value, 'attr', '' ); ?>">
			<div class="row">
				<label>
					<div class="title"><?php esc_html_e( 'Year', 'norebro-extra' ); ?></div>
					<input class="year" type="number" data-target="year" value="<?php echo NorebroExtraFilter::string( $value_array['year'], 'attr', '' ); ?>">
				</label>
				<span class="divider">/</span>
				<label>
					<div class="title"><?php esc_html_e( 'Month', 'norebro-extra' ); ?></div>
					<input type="number" max="12" min="1" data-target="month" value="<?php echo NorebroExtraFilter::string( $value_array['month'], 'attr', '' ); ?>">
				</label>
				<span class="divider">/</span>
				<label>
					<div class="title"><?php esc_html_e( 'Day', 'norebro-extra' ); ?></div>
					<input type="number" max="31" min="1" data-target="day" value="<?php echo NorebroExtraFilter::string( $value_array['day'] ); ?>">
				</label>
				<label class="hour">
					<div class="title"><?php esc_html_e( 'Hour', 'norebro-extra' ); ?></div>
					<input type="number" max="23" min="0" data-target="hour" value="<?php echo esc_attr( $value_array['hour'] ); ?>">
				</label>
				<span class="divider">:</span>
				<label>
					<div class="title"><?php esc_html_e( 'Minute', 'norebro-extra' ); ?></div>
					<input type="number" max="59" min="0" data-target="minute" value="<?php echo esc_attr( $value_array['minute'] ); ?>">
				</label>
				<span class="divider">:</span>
				<label>
					<div class="title"><?php esc_html_e( 'Second', 'norebro-extra' ); ?></div>
					<input type="number" max="59" min="0" data-target="second" value="<?php echo esc_attr( $value_array['second'] ); ?>">
				</label>
			</div>
		</div>
<?php

		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
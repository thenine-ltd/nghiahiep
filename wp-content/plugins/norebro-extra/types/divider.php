<?php

	/**
	* WPBakery Norebro Divider custom type
	*/

	if ( function_exists ( 'vc_add_shortcode_param' ) ) {
		vc_add_shortcode_param( 'norebro_divider', 'norebro_extra_divider_settings_field' );
	}
	
	function norebro_extra_divider_settings_field( $settings, $value ) {

		if ( empty( $value ) ) {
			$value = $settings['value'];
		}
		ob_start();

?>
		<div class="norebro_extra_divider_block">
			<?php echo $value; ?>
			<input type="hidden" name="<?php echo esc_attr( $settings['param_name'] ); ?>" class="wpb_vc_param_value ultimate-param-heading <?php echo esc_attr( $settings['param_name'] . ' ' . $settings['type'] ); ?>_field" value="<?php echo esc_attr( $value ); ?>" />
		</div>
<?php

		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
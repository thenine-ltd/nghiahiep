<?php

	/**
	* WPBakery Page Builder Norebro colorpicker type
	*/

	if ( function_exists ( 'vc_add_shortcode_param' ) ) {
		vc_add_shortcode_param( 'norebro_colorpicker', 'norebro_extra_colorpicker_settings_field', plugins_url( 'colorpicker.js' , __FILE__ ) );
	}

	function norebro_extra_colorpicker_settings_field( $settings, $value ) {
		ob_start();
		if ( $value == '' && isset( $settings['value'] ) ) {
			$value = $settings['value'];
		}

		$brand_color = NorebroSettings::get( 'page_brand_color', 'global' );
		if ( !$brand_color ) $brand_color = 'empty';

?>
	<div class="norebro_extra_colorpicker_block">
		<input type="hidden" name="<?php echo NorebroExtraFilter::string( $settings['param_name'], 'attr', '' ); ?>" class="wpb_vc_param_value" value="<?php echo NorebroExtraFilter::string( $value, 'attr', '' ); ?>">
		<div class="color">
			<div class="color-group">
				<input name="colorpicker" class="vc_color-control" type="text" value="<?php echo NorebroExtraFilter::string( $value, 'attr', '' ); ?>">
			</div>
		</div>
		<div class="brand-color">
			<label>
				<input type="checkbox" name="brand-color"<?php if ( $value == 'brand' ) { echo 'checked="checked"'; } ?>>
				<?php esc_html_e( 'Use', 'norebro-extra' ); ?>&nbsp;<a target="_blank" href="<?php echo esc_url( admin_url( 'admin.php?page=theme-general-styling' ) ); ?>"><?php esc_html_e( 'brand color', 'norebro-extra' ); ?></a>
				<div class="brand-color-holder">
					<div class="marker" style="background:<?php echo ( $brand_color != 'empty' ) ? $brand_color : '#ffffff';?>"></div>
					&nbsp;<?php echo $brand_color; ?>
				</div>
			</label>
		</div>
	</div>
<?php

		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
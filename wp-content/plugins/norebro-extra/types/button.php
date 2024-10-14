<?php

	/**
	* WPBakery Norebro button custom type
	*/

	if ( function_exists ( 'vc_add_shortcode_param' ) ) {
		vc_add_shortcode_param( 'norebro_button', 'norebro_extra_button_settings_field', plugins_url( 'button.js' , __FILE__ ) );
	}

	function norebro_extra_button_settings_field( $settings, $value ) {
		parse_str( $value, $value_array );
		if ( $value == '' && $settings['value'] ) {
			parse_str( $settings['value'], $value_array );
		}

		$color = ( $value_array['color'] ) ? NorebroExtraFilter::string( $value_array['color'], 'attr', '' ) : '';
		$hover_color = ( $value_array['hover-color'] ) ? NorebroExtraFilter::string( $value_array['hover-color'], 'attr', '' ) : '';
		$text_color = ( isset( $value_array['text-color'] ) ) ? NorebroExtraFilter::string( $value_array['text-color'], 'attr', '' ) : '';
		$text_hover_color = ( isset( $value_array['text-hover-color'] ) ) ? NorebroExtraFilter::string( $value_array['text-hover-color'], 'attr', '' ) : '';

		ob_start();

?>
		<div class="norebro_extra_button_block row">
			<input type="hidden" name="<?php echo NorebroExtraFilter::string( $settings['param_name'], 'attr', '' ); ?>" class="wpb_vc_param_value" value="<?php echo NorebroExtraFilter::string( $value, 'attr', '' ); ?>">
			<div class="vc_col-lg-4 column type<?php if ( $settings['button_type_disabled'] ) { echo ' disabled" data-disabled="true'; } ?>">
				<label>
					<div class="title"><?php _e( 'Type', 'norebro-extra' ); ?></div>
					<select class="type">
						<option value="default"<?php if ( $value_array['type'] == 'default' ) { echo 'selected="selected"'; } ?>><?php esc_html_e( 'Default', 'norebro-extra' ); ?></option>
						<option value="outline"<?php if ( $value_array['type'] == 'outline' ) { echo 'selected="selected"'; } ?>><?php esc_html_e( 'Outline', 'norebro-extra' ); ?></option>
						<option value="flat"<?php if ( $value_array['type'] == 'flat' ) { echo 'selected'; } ?>><?php esc_html_e( 'Flat', 'norebro-extra' ); ?></option>
						<?php if ( ! $settings['button_link_disabled'] ) : ?>
							<option value="arrow_link"<?php if ( $value_array['type'] == 'arrow_link' ) { echo 'selected="selected"'; } ?>><?php esc_html_e( 'Link', 'norebro-extra' ); ?></option>
						<?php endif; ?>
					</select>
				</label>
			</div>
			<div class="vc_col-lg-4 column size<?php if ( $settings['button_size_disabled'] ) { echo ' disabled" data-disabled="true'; } ?>">
				<label>
					<div class="title"><?php esc_html_e( 'Size', 'norebro-extra' ); ?></div>
					<select class="size">
						<option value="default"<?php if ( $value_array['size'] == 'default' ) { echo 'selected="selected"'; } ?>><?php esc_html_e( 'Default', 'norebro-extra' ); ?></option>
						<option value="small"<?php if ( $value_array['size'] == 'small' ) { echo 'selected="selected"'; } ?>><?php esc_html_e( 'Small', 'norebro-extra' ); ?></option>
						<option value="large"<?php if ( $value_array['size'] == 'large' ) { echo 'selected="selected"'; } ?>><?php esc_html_e( 'Large', 'norebro-extra' ); ?></option>
						<option value="huge"<?php if ( $value_array['size'] == 'huge' ) { echo 'selected="selected"'; } ?>><?php esc_html_e( 'Huge', 'norebro-extra' ); ?></option>
					</select>
				</label>
			</div>
			<div class="vc_col-lg-4 column">
				<div class="left squared button-checkbox<?php if ( $settings['button_squared_disabled'] ) { echo ' disabled" data-disabled="true'; } ?>">
					<label style="margin-right: 1rem;">
						<input type="checkbox" name="squared"<?php if ( $value_array['squared'] ) { echo 'checked="checked"'; } ?>>
						<?php esc_html_e( 'Squared shape?', 'norebro-extra' ); ?>
					</label>
				</div>
				<div class="left fullwidth button-checkbox<?php if ( $settings['button_full_disabled'] ) { echo ' disabled" data-disabled="true'; } ?>">
					<label>
						<input type="checkbox" name="fullwidth"<?php if ( $value_array['fullwidth'] ) { echo 'checked="checked"'; } ?>>
						<?php esc_html_e( 'Set full width?', 'norebro-extra' ); ?>
					</label>
				</div>
			</div>
			<div class="vc_col-lg-4 column button-color">
				<div class="title"><?php esc_html_e( 'Button color', 'norebro-extra' ); ?></div>
				<div class="color-group left<?php if ( $color == 'brand' ) { echo ' disabled'; } ?>">
					<input name="color" class="vc_color-control" type="text" value="<?php echo $color; ?>">
				</div>
				<div class="brand-color left">
					<label>
						<input type="checkbox" name="brand-color"<?php if ( $color == 'brand' ) { echo 'checked="checked"'; } ?>>
						<?php esc_html_e( 'Use', 'norebro-extra' ); ?>&nbsp;<a target="_blank" href="<?php echo esc_url( admin_url('admin.php?page=theme-general-styling' ) ); ?>"><?php esc_html_e( 'brand color', 'norebro-extra' ); ?></a>
					</label>
				</div>
			</div>
			<div class="vc_col-lg-4 column button-hover-color">
				<div class="title"><?php esc_html_e( 'Button color (hover state)', 'norebro-extra' ); ?></div>
				<div class="color-group left<?php if ( $hover_color == 'brand' ) { echo ' disabled'; } ?>">
					<input name="hover-color" class="vc_color-control" type="text" value="<?php echo esc_attr( $hover_color ); ?>">
				</div>
				<div class="brand-color left">
					<label>
						<input type="checkbox" name="brand-hover-color"<?php if ( $hover_color == 'brand' ) { echo 'checked="checked"'; } ?>>
						<?php esc_html_e( 'Use', 'norebro-extra' ); ?>&nbsp;<a target="_blank" href="<?php echo esc_url( admin_url('admin.php?page=theme-general-styling' ) ); ?>"><?php esc_html_e( 'brand color', 'norebro-extra' ); ?></a>
					</label>
				</div>
			</div>
			<div class="vc_col-lg-4 column">
			</div>
			<div class="vc_col-lg-4 column text-color">
				<div class="title"><?php esc_html_e( 'Button text color', 'norebro-extra' ); ?></div>
				<div class="color-group left<?php if ( $text_color == 'brand' ) { echo ' disabled'; } ?>">
					<input name="text-color" class="vc_color-control" type="text" value="<?php echo $text_color; ?>">
				</div>
				<div class="brand-color left">
					<label>
						<input type="checkbox" name="brand-text-color"<?php if ( $text_color == 'brand' ) { echo 'checked="checked"'; } ?>>
						<?php esc_html_e( 'Use', 'norebro-extra' ); ?>&nbsp;<a target="_blank" href="<?php echo esc_url( admin_url('admin.php?page=theme-general-styling' ) ); ?>"><?php esc_html_e( 'brand color', 'norebro-extra' ); ?></a>
					</label>
				</div>
			</div>
			<div class="vc_col-lg-4 column text-hover-color">
				<div class="title"><?php esc_html_e( 'Button text color (hover state)', 'norebro-extra' ); ?></div>
				<div class="color-group left<?php if ( $text_hover_color == 'brand' ) { echo ' disabled'; } ?>">
					<input name="text-hover-color" class="vc_color-control" type="text" value="<?php echo esc_attr( $text_hover_color ); ?>">
				</div>
				<div class="brand-color left">
					<label>
						<input type="checkbox" name="brand-text-hover-color"<?php if ( $text_hover_color == 'brand' ) { echo 'checked="checked"'; } ?>>
						<?php esc_html_e( 'Use', 'norebro-extra' ); ?>&nbsp;<a target="_blank" href="<?php echo esc_url( admin_url('admin.php?page=theme-general-styling' ) ); ?>"><?php esc_html_e( 'brand color', 'norebro-extra' ); ?></a>
					</label>
				</div>
			</div>
			<div class="vc_col-lg-4 column">
			</div>
		</div>
<?php

		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
<?php

	/**
	* WPBakery Norebro Typography custom type
	*/
	if ( function_exists ( 'vc_add_shortcode_param' ) ) {
		vc_add_shortcode_param( 'norebro_typography', 'norebro_extra_typography_settings_field', plugins_url( 'typography.js' , __FILE__ ) );
	}
	
	function norebro_extra_typography_settings_field( $settings, $value ) {
		$font_size = $line_height = $letter_spacing = $weight = $italic = $underline = $use_custom_font = $custom_font = $fonts = '';
		$value_array = NorebroExtraParser::VC_typo_to_array( $value );

		$fonts_type = NorebroSettings::get('font_type', 'global');

		switch ( $fonts_type ) {
			case 'adobe_fonts':
				include NOREBRO_EXTRA_DIR_PATH . 'acf_ext/af_list.php';
				$fonts = $norebro_gf_object;
				break;
			default:
				include NOREBRO_EXTRA_DIR_PATH . 'acf_ext/gf_list.php';
				$fonts = $norebro_gf_object;
				break;
		}

		$uniq = uniqid( 'norebro_vc_check_' );
		ob_start();

?>
	<div class="norebro_extra_typography_block">
		<input type="hidden" name="<?php echo esc_attr( $settings['param_name'] ); ?>" class="wpb_vc_param_value" value="<?php echo esc_attr( $value ); ?>">
		<div class="row">
			<div class="vc_col-lg-3 column">
				<label>
					<div class="title"><?php esc_html_e( 'Font Size', 'norebro-extra' ); ?></div>
					<div class="input-pixeles-wrap" style="display: flex;">
						<input type="text" data-target="font-size" value="<?php echo esc_attr( $value_array['font_size'] ); ?>" style="border-radius: 0.25rem 0 0 0.25rem;">
						<div class="pixels" style="height: 30px; width: 30px; display: flex; align-items: center; justify-content: center; border-radius: 0 0.25rem 0.25rem 0; background: #f7f7f7; border: 1px solid rgba(99, 93, 111, 0.25); border-left: none; box-sizing: border-box;"><?php esc_html_e( 'px', 'norebro-extra' ); ?></div>
					</div>
				</label>
			</div>
			<div class="vc_col-lg-3 column">
				<label>
					<div class="title"><?php esc_html_e( 'Line Height', 'norebro-extra' ); ?></div>
					<div class="input-pixeles-wrap" style="display: flex;">
						<input type="text" data-target="line-height" value="<?php echo esc_attr( $value_array['line_height'] ); ?>" style="border-radius: 0.25rem 0 0 0.25rem;">
						<div class="pixels" style="height: 30px; width: 30px; display: flex; align-items: center; justify-content: center; border-radius: 0 0.25rem 0.25rem 0; background: #f7f7f7; border: 1px solid rgba(99, 93, 111, 0.25); border-left: none; box-sizing: border-box;"><?php esc_html_e( 'px', 'norebro-extra' ); ?></div>
					</div>
				</label>
			</div>
			<div class="vc_col-lg-3 column">
				<label>
					<div class="title"><?php esc_html_e( 'Letter Spacing', 'norebro-extra' ); ?></div>
					<div class="input-pixeles-wrap" style="display: flex;">
						<input type="text" data-target="letter-spacing" value="<?php echo esc_attr( $value_array['letter_spacing'] ); ?>" style="border-radius: 0.25rem 0 0 0.25rem;">
						<div class="pixels" style="height: 30px; width: 30px; display: flex; align-items: center; justify-content: center; border-radius: 0 0.25rem 0.25rem 0; background: #f7f7f7; border: 1px solid rgba(99, 93, 111, 0.25); border-left: none; box-sizing: border-box;"><?php esc_html_e( 'px', 'norebro-extra' ); ?></div>
					</div>
				</label>
			</div>
			<div class="vc_col-lg-3 column">
				<label>
					<div class="title"><?php esc_html_e( 'Font Weight', 'norebro-extra' ); ?></div>
					<div class="input-pixeles-wrap">
						<select data-target="weight">
							<option value="inherit">inherit</option>
						<?php
							$check_point = false;
							if ( $value_array['weight'] ) {
								$check_point = $value_array['weight'];
							}
							for ($i=1; $i <= 9; $i++) {
								$selected = ( $check_point == $i * 100 ) ? ' selected="selected"' : '';
								echo '<option value="' . $i . '00"' . $selected . '>' . $i . '00</option>';
							}
						?>
						</select>
					</div>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="vc_col-lg-3 column">
				<div class="title"><?php esc_html_e( 'Font Style', 'norebro-extra' ); ?></div>
				<div class="input-styles-wrap row">
					<div class="vc_col-lg-6 column">
						<div style="display: flex; align-items: center; margin-bottom: 0.25rem;">
							<input id="<?php echo $uniq . 'n'; ?>" type="checkbox" data-target="normal"<?php if ($value_array['normal']) echo ' checked="checked"'; ?>>
							<label for="<?php echo $uniq . 'n'; ?>">normal</label>
						</div>
						<div style="display: flex; align-items: center;">
							<input id="<?php echo $uniq . 'i'; ?>" type="checkbox" data-target="italic"<?php if ($value_array['italic']) echo ' checked="checked"'; ?>>
							<label for="<?php echo $uniq . 'i'; ?>"><em>italic</em></label>
						</div>
					</div>
					<div class="vc_col-lg-6 column">
						<div style="display: flex; align-items: center; margin-bottom: 0.25rem;">
							<input id="<?php echo $uniq . 'u'; ?>" type="checkbox" data-target="underline"<?php if ($value_array['underline']) echo ' checked="checked"'; ?>>
							<label for="<?php echo $uniq . 'u'; ?>"><u>underline</u></label>
						</div>
						<div style="display: flex; align-items: center;">
							<input id="<?php echo $uniq . 'up'; ?>" type="checkbox" data-target="uppercase"<?php if ($value_array['uppercase']) echo ' checked="checked"'; ?>>
							<label for="<?php echo $uniq . 'up'; ?>">UPPERCASE</label>
						</div>
					</div>
				</div>
			</div>
			<div class="vc_col-lg-3 column">
				<div class="title"><?php esc_html_e( 'Custom Font', 'norebro-extra' ); ?></div>
				<div class="input-styles-wrap">
					<span class="cbrio_custom_check">
						<input id="<?php echo $uniq . 'c'; ?>" type="checkbox" data-target="use-custom-font"<?php if ($value_array['use_custom_font']) echo ' checked="checked"'; ?>> 
						<label for="<?php echo $uniq . 'c'; ?>" class="cbrio_custom_check"><?php _e( 'Custom font', 'norebro-extra'); ?></label>
					</span>
				</div>
			</div>
			<div class="vc_col-lg-3 column custom-font-panel"<?php if ( !$value_array['use_custom_font'] ) echo 'style="display: none;"';?>>
				<div class="title">
					<?php
						if ( $fonts_type == 'google_fonts' ) {
							esc_html_e( 'Google Fonts', 'norebro-extra' );
						} elseif ( $fonts_type == 'adobe_fonts' ) {
							esc_html_e( 'Adobe Typekit Fonts', 'norebro-extra' );
						}
					?>
				</div>
				<div class="input-fonts-wrap">
					<select data-target="custom-font">
						<?php if ( $fonts_type == 'google_fonts' ){ ?>
							<optgroup label="Recommend to use">
								<option value="Poppins:400,700"><?php esc_html_e( 'Poppins', 'norebro-extra' ); ?></option>
								<option value="Rubik:300,300i,400,400i,700,700i"><?php esc_html_e( 'Rubik', 'norebro-extra' ); ?></option>
							</optgroup>
							<option disabled>&mdash;</option>
						<?php } ?>

						<?php foreach ($fonts->items as $font_object) { ?>
							<?php
								$_value = $font_object->family . ':' .implode( ',', $font_object->variants );
							?>
							<option value="<?php echo $_value; ?>"<?php if ($_value == ($value->custom_font ?? false)) echo 'selected="selected"'?>>
								<?php echo ucfirst($font_object->family); ?>
							</option>
						<?php } ?>
					</select>
				</div>
				<?php if ( $fonts_type == 'google_fonts' ) { ?>
					<div class="tip"><?php echo sprintf( __( 'See %s', 'norebro-extra'), '<a href="https://fonts.google.com/" target="_blank">fonts.google.com</a>' ); ?></div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php

		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
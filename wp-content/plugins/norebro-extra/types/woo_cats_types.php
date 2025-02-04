<?php

	/**
	* WPBakery Norebro WooCommerce category type
	*/
	if ( function_exists ( 'vc_add_shortcode_param' ) ) {
		vc_add_shortcode_param( 'norebro_woo_categories_types', 'norebro_woo_categories_types', plugins_url( 'woo_cats_types.js' , __FILE__ ) );
	}
	
	function norebro_woo_categories_types( $settings, $value ) {
		$exploded_value = explode(',', $value);
		$categories = get_terms( array(
			'taxonomy' => 'product_cat',
			'hide_empty' => false,
		) );

		ob_start();

?>
		<div class="norebro_extra_woo_categories_types_block">
			<input type="hidden" name="<?php echo esc_attr( $settings['param_name'] ); ?>" class="wpb_vc_param_value" value="<?php echo esc_attr( $value ); ?>">
			<select multiple="multiple">
				<?php
					foreach ($categories as $key => $category) {
						echo '<option value="' . $category->term_id . '"';
						if ( in_array( $category->term_id, $exploded_value ) ) {
							echo ' selected="selected"';
						}
						echo '>' . $category->name . '</option>';
					}
				?>
			</select>
		</div>
<?php

		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
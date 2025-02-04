<?php 

/**
* WPBakery Norebro Split box inner shortcode
*/

add_shortcode( 'norebro_split_box_inner', 'norebro_split_boxinner_func' );

function norebro_split_box_inner_func( $atts, $content = '' ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$bg_first_color  = isset( $bg_first_color ) ? NorebroExtraFilter::string( $bg_first_color ) : false;
	$bg_second_color = isset( $bg_second_color ) ? NorebroExtraFilter::string( $bg_second_color ) : false;
	$bg_first_image  = isset( $bg_first_image ) ? NorebroExtraFilter::string( wp_get_attachment_url( NorebroExtraFilter::string( $bg_first_image ) ), 'attr' ) : false;
	$bg_second_image = isset( $bg_second_image ) ? NorebroExtraFilter::string( wp_get_attachment_url( NorebroExtraFilter::string( $bg_second_image ) ), 'attr' ) : false;
	$bg_first_size  = isset( $bg_first_size ) ? NorebroExtraFilter::string( $bg_first_size, 'string', '' ) : '';
	$bg_second_size = isset( $bg_second_size ) ? NorebroExtraFilter::string( $bg_second_size, 'string', '' ) : '';
	$bg_first_parallax  = isset( $bg_first_parallax ) ? NorebroExtraFilter::string( $bg_first_parallax, 'string', '' ) : '';
	$bg_second_parallax = isset( $bg_second_parallax ) ? NorebroExtraFilter::string( $bg_second_parallax, 'string', '' ) : '';
	$bg_first_overlay_color = isset( $bg_first_overlay_color ) ? NorebroExtraFilter::string( $bg_first_overlay_color ) : false;
	$bg_second_overlay_color = isset( $bg_second_overlay_color ) ? NorebroExtraFilter::string( $bg_second_overlay_color ) : false;
	$bg_first_parallax_speed = isset( $bg_first_parallax_speed ) ? NorebroExtraFilter::string( $bg_first_parallax_speed, 'attr', '1.0' )  : '1.0';
	$bg_second_parallax_speed = isset( $bg_second_parallax_speed ) ? NorebroExtraFilter::string( $bg_second_parallax_speed, 'attr', '1.0' )  : '1.0';
	
	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';

	// Styling
	$split_box_uniqid = uniqid( 'norebro-custom-' );

	$bg_first_css = '';
	if ( $bg_first_color ) {
		$bg_first_css .= 'background-color:' . $bg_first_color . ';';
	}
	if ( $bg_first_image ) {
		$bg_first_css .= 'background-image:url(' . $bg_first_image . ');';
	}
	if ( $bg_first_size ) {
		$bg_first_css .= 'background-size:' . $bg_first_size . ';';
	}

	$bg_first_after_css = '';
	if ( $bg_first_overlay_color ) {
		$bg_first_after_css .= 'background-color:' . $bg_first_overlay_color . '; ';
	}

	$bg_second_css = '';
	if ( $bg_second_color ) {
		$bg_second_css .= 'background-color:' . $bg_second_color . ';';
	}
	if ( $bg_second_image ) {
		$bg_second_css .= 'background-image:url(' . $bg_second_image . ');';
	}
	if ( $bg_second_size ) {
		$bg_second_css .= 'background-size:' . $bg_second_size . ';';
	}

	$bg_second_after_css = '';
	if ( $bg_second_overlay_color ) {
		$bg_second_after_css .= 'background-color:' . $bg_second_overlay_color . '; ';
	}

	$column_now = 1;

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'split_box_inner__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'split_box_inner__view.php' );
	return ob_get_clean();
}
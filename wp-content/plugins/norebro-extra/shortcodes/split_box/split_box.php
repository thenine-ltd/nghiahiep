<?php 

/**
* WPBakery Norebro Split Box shortcode
*/

add_shortcode( 'norebro_split_box', 'norebro_split_box_func' );

function norebro_split_box_func( $atts, $content = '' ) {
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

	$first_vertical_padding = isset( $first_vertical_padding ) ? NorebroExtraFilter::string( $first_vertical_padding, 'string', '6%' ) : '6%';
	$first_horizontal_padding = isset( $first_horizontal_padding ) ? NorebroExtraFilter::string( $first_horizontal_padding, 'string', '7%' ) : '7%';
	$second_vertical_padding = isset( $second_vertical_padding ) ? NorebroExtraFilter::string( $second_vertical_padding, 'string', '6%' ) : '6%';
	$second_horizontal_padding = isset( $second_horizontal_padding ) ? NorebroExtraFilter::string( $second_horizontal_padding, 'string', '7%' ) : '7%';

	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';

	// Styling
	$split_box_uniqid = uniqid( 'norebro-custom-' );

	$bg_first_css = $wrap_first_css = '';

	if ( $bg_first_color ) {
		$bg_first_css .= 'background-color:' . $bg_first_color . ';';
	}
	if ( $bg_first_image ) {
		$bg_first_css .= 'background-image:url(' . $bg_first_image . ');';
	}
	if ( $bg_first_size ) {
		$bg_first_css .= 'background-size:' . $bg_first_size . ';';
	}

	if ( $first_vertical_padding ) {
		$wrap_first_css .= 'padding-top:' . $first_vertical_padding . '; padding-bottom:' . $first_vertical_padding . ';'; 
	}
	if ( $first_horizontal_padding ) {
		$wrap_first_css .= 'padding-left:' . $first_horizontal_padding . '; padding-right:' . $first_horizontal_padding . ';'; 
	}

	$bg_first_after_css = '';

	if ( $bg_first_overlay_color ) {
		$bg_first_after_css .= 'background-color:' . $bg_first_overlay_color . '; ';
	}

	$bg_second_css = $wrap_second_css = '';
	
	if ( $bg_second_color ) {
		$bg_second_css .= 'background-color:' . $bg_second_color . ';';
	}
	if ( $bg_second_image ) {
		$bg_second_css .= 'background-image:url(' . $bg_second_image . ');';
	}
	if ( $bg_second_size ) {
		$bg_second_css .= 'background-size:' . $bg_second_size . ';';
	}

	if ( $second_vertical_padding ) {
		$wrap_second_css .= 'padding-top:' . $second_vertical_padding . ';padding-bottom:' . $second_vertical_padding . ';'; 
	}
	if ( $second_horizontal_padding ) {
		$wrap_second_css .= 'padding-left:' . $second_horizontal_padding . ';padding-right:' . $second_horizontal_padding . ';'; 
	}

	$bg_second_after_css = '';

	if ( $bg_second_overlay_color ) {
		$bg_second_after_css .= 'background-color:' . $bg_second_overlay_color . ';';
	}

	$column_now = 1;

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'split_box__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'split_box__view.php' );
	return ob_get_clean();
}
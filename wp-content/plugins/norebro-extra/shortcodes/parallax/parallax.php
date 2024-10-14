<?php 

/**
* WPBakery Norebro Paralax shortcode
*/

add_shortcode( 'norebro_parallax', 'norebro_parallax_func' );

function norebro_parallax_func( $atts, $content = '' ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$image = isset( $image ) ? NorebroExtraFilter::string( wp_get_attachment_url( NorebroExtraFilter::string( $image ) ), 'attr' ) : false;
	$size = isset( $size ) ? NorebroExtraFilter::string( $size, 'string', '' ) : '';
	$parallax = isset( $parallax ) ? NorebroExtraFilter::string( $parallax, 'string', 'vertical' ) : 'vertical';
	$parallax_speed = isset( $parallax_speed ) ? NorebroExtraFilter::string( $parallax_speed, 'attr', '1.0' )  : '1.0';
	$use_overlay = isset( $use_overlay ) ? NorebroExtraFilter::boolean( $use_overlay ) : false;
	$overlay_color = isset( $overlay_color ) ? NorebroExtraFilter::string( $overlay_color ) : false;
	$css_class = isset( $css_class ) ? ( ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' ) )  : '';

	// Styling
	$parallax_uniqid = uniqid( 'norebro-custom-' );

	$parallax_css = '';
	$parallax_css .= ( $image ) ? 'background-image:url(\'' . esc_url( $image ) . '\');' : '';
	$parallax_css .= ( $size ) ? 'background-size:' . esc_attr( $size ) . ';' : '';

	$overlay_css = '';
	if ( $use_overlay && $overlay_color ) {
		$overlay_css .= 'background-color:' . $overlay_color . ';';
	}

	// Assembling
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'parallax__style.php' );
	include( plugin_dir_path( __FILE__ ) . 'parallax__view.php' );
	return ob_get_clean();
}
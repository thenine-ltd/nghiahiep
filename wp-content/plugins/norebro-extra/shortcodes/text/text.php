<?php 

/**
* WPBakery Norebro Text shortcode
*/

add_shortcode( 'norebro_text', 'norebro_text_func' );

function norebro_text_func( $atts, $content_html = '' ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$text_typo = isset( $text_typo ) ? NorebroExtraFilter::string( $text_typo ) : false;

	$text_color = ( isset( $text_color ) ) ? NorebroExtraFilter::string( $text_color ) : false;

	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' ) : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false ) : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );
	
	$css_class = isset( $css_class ) ? NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';

	// Handling
	$content_html = wpautop( $content_html );

	// Styling
	$text_uniqid = uniqid( 'norebro-custom-' );

	$text_css = NorebroExtraParser::VC_typo_to_CSS( $text_typo );
	NorebroExtraParser::VC_typo_custom_font( $text_typo );

	$text_css .= NorebroExtraParser::VC_color_to_CSS( $text_color, 'color:{{color}};' );

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'text__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'text__view.php' );
	return ob_get_clean();
}
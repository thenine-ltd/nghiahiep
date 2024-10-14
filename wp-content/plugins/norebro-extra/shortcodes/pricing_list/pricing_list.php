<?php 

/**
* WPBakery Norebro Pricing List shortcode
*/

add_shortcode( 'norebro_pricing_list', 'norebro_pricing_list_func' );

function norebro_pricing_list_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$name = isset( $name ) ? NorebroExtraFilter::string( $name, 'string', '') : '';
	$indigriends = isset( $indigriends ) ? NorebroExtraFilter::string( $indigriends, 'string', '') : '';
	$sale_price = isset( $sale_price ) ? NorebroExtraFilter::string( $sale_price, 'string', '') : '';
	$regular_price = isset( $regular_price ) ? NorebroExtraFilter::string( $regular_price, 'string', '') : '';
	$mark = isset( $new ) ? NorebroExtraFilter::boolean( $new ) : false;

	$name_typo = isset( $name_typo ) ? NorebroExtraFilter::string( $name_typo ) : false;
	$indigriends_typo = isset( $indigriends_typo ) ? NorebroExtraFilter::string( $indigriends_typo ) : false;
	$sale_price_typo = isset( $sale_price_typo ) ? NorebroExtraFilter::string( $sale_price_typo ) : false;
	$regular_price_typo = isset( $regular_price_typo ) ? NorebroExtraFilter::string( $regular_price_typo ) : false;
	$mark_typo = isset( $mark_typo ) ? NorebroExtraFilter::string( $mark_typo ) : false;

	$name_color = isset( $name_color ) ? NorebroExtraFilter::string( $name_color, 'string', false ) : false;
	$indigriends_color = isset( $indigriends_color ) ? NorebroExtraFilter::string( $indigriends_color, 'string', false ) : false;
	$sale_price_color = isset( $sale_price_color ) ? NorebroExtraFilter::string( $sale_price_color, 'string', false ) : false;
	$regular_price_color = isset( $regular_price_color ) ? NorebroExtraFilter::string( $regular_price_color, 'string', false ) : false;
	$border_color = isset( $border_color ) ? NorebroExtraFilter::string( $border_color, 'string', false ) : false;
	$mark_color = isset( $mark_color ) ? NorebroExtraFilter::string( $mark_color, 'string', false ) : false;
	$mark_background_color = isset( $mark_background_color ) ? NorebroExtraFilter::string( $mark_background_color, 'string', false ) : false;

	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' ) : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false ) : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' ) : '';

	// Styling
	$menu_list_uniqid = uniqid( 'norebro-custom-' );

	$name_css = ( $name_color ) ? 'color: ' . $name_color . ';' : '';
	$indigriends_css = ( $indigriends_color ) ? 'color: ' . $indigriends_color . ';' : '';
	$sale_price_css = ( $sale_price_color ) ? 'color: ' . $sale_price_color . ';' : '';
	$regular_price_css = ( $regular_price_color ) ? 'color: ' . $regular_price_color . ';' : '';
	$border_css = ( $border_color ) ? 'border-color: ' . $border_color . ';' : '';
	$mark_css = ( $mark_color ) ? 'color: ' . $mark_color . ';' : '';
	$mark_css .= ( $mark_background_color ) ? 'background-color: ' . $mark_background_color . ';' : '';

	NorebroExtraParser::VC_typo_custom_font( $name_typo );
	NorebroExtraParser::VC_typo_custom_font( $indigriends_typo );
	NorebroExtraParser::VC_typo_custom_font( $sale_price_typo );
	NorebroExtraParser::VC_typo_custom_font( $regular_price_typo );
	NorebroExtraParser::VC_typo_custom_font( $mark_typo );

	$name_css = $name_css . NorebroExtraParser::VC_typo_to_CSS( $name_typo );
	$indigriends_css = $indigriends_css . NorebroExtraParser::VC_typo_to_CSS( $indigriends_typo );
	$sale_price_css = $sale_price_css . NorebroExtraParser::VC_typo_to_CSS( $sale_price_typo );
	$regular_price_css = $regular_price_css . NorebroExtraParser::VC_typo_to_CSS( $regular_price_typo );
	$mark_css = $mark_css . NorebroExtraParser::VC_typo_to_CSS( $mark_typo );

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'pricing_list__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'pricing_list__view.php' );
	return ob_get_clean();
}
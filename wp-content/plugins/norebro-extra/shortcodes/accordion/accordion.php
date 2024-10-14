<?php 

/**
* WPBakery Norebro Accordion shortcode
*/

add_shortcode( 'norebro_accordion', 'norebro_accordion_func' );

function norebro_accordion_func( $atts, $content = null ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$accordion_tabs_type = isset( $accordion_tabs_type ) ? NorebroExtraFilter::string( $accordion_tabs_type, 'string', 'default' ) : 'default';
	$tab_bg_color = isset( $tab_bg_color ) ? NorebroExtraFilter::string( $tab_bg_color ) : false;
	$tab_border_color = isset( $tab_border_color ) ? NorebroExtraFilter::string( $tab_border_color ) : false;
	$tab_color = isset( $tab_color ) ? NorebroExtraFilter::string( $tab_color ) : false;
	$active_color = isset( $active_color ) ? NorebroExtraFilter::string( $active_color ) : false;
	$tab_content_color = isset( $tab_content_color ) ? NorebroExtraFilter::string( $tab_content_color ) : false;

	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' )  : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false )  : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';

	// Styling
	$accordion_uniqid = uniqid( 'norebro-custom-' );

	$accordion_class = ( $accordion_tabs_type == 'outline' ) ? ' outline' : '';

	$tab_css = '';

	$tab_bg_settings = NorebroExtraParser::VC_color_to_CSS( $tab_bg_color, 'background-color:{{color}};' );
	$tab_border_settings = NorebroExtraParser::VC_color_to_CSS( $tab_border_color, 'border-color:{{color}};' );
	$tab_settings = NorebroExtraParser::VC_color_to_CSS( $tab_color, 'color:{{color}};' );
	$tab_content_settings = NorebroExtraParser::VC_color_to_CSS( $tab_content_color, 'color:{{color}};' );
	$active_settings = NorebroExtraParser::VC_color_to_CSS( $active_color, 'color:{{color}};' );

	$tab_css = $tab_settings;
	if ( $accordion_tabs_type == 'outline' ) {
		$tab_css .= $tab_border_settings;
	} else {
		$tab_css .= $tab_bg_settings;
	}

	// Assembling
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'accordion__style.php' );
	include( plugin_dir_path( __FILE__ ) . 'accordion__view.php' );
	return ob_get_clean();
}
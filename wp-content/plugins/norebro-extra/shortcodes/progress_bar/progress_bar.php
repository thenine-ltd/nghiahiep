<?php 

/**
* WPBakery Norebro Progress Bar shortcode
*/

add_shortcode( 'norebro_progress_bar', 'norebro_progress_bar_func' );

function norebro_progress_bar_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$layout = isset( $layout ) ? NorebroExtraFilter::string( $layout, 'string', 'default') : 'default';
	$percent_in_tooltip = ( isset( $percent_in_tooltip ) ) ? NorebroExtraFilter::boolean( $percent_in_tooltip ) : false;
	$name = ( isset( $name ) ) ? NorebroExtraFilter::string( $name, 'string', '' ) : '';
	$percent = ( isset( $percent ) ) ? NorebroExtraFilter::string( $percent, 'string', '100' ) : '100';

	$name_typo = ( isset( $name_typo ) ) ? NorebroExtraFilter::string( $name_typo ) : false;
	$percent_typo = ( isset( $percent_typo ) ) ? NorebroExtraFilter::string( $percent_typo ) : false;

	$label_color = isset( $label_color ) ? NorebroExtraFilter::string( $label_color, 'string', false ) : false;
	$percent_color = isset( $percent_color ) ? NorebroExtraFilter::string( $percent_color, 'string', false ) : false;
	$bar_bg_color = isset( $bar_bg_color ) ? NorebroExtraFilter::string( $bar_bg_color, 'string', false ) : false;
	$bar_line_color = isset( $bar_line_color ) ? NorebroExtraFilter::string( $bar_line_color, 'string', false ) : false;
	$tooltip_color = isset( $tooltip_color ) ? NorebroExtraFilter::string( $tooltip_color, 'string', false ) : false;

	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' )  : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false )  : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );
	
	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' ) : '';

	$percent = intval($percent);
	if ( $percent < 0 || $percent > 100 ) {
		$percent = 100;
	}

	// Styling
	$progress_bar_uniqid = uniqid( 'norebro-custom-' );

	switch ( $layout ) {
		case 'inner':
			$progress_bar_class = ' inner';
			break;
		case 'split':
			$progress_bar_class = ' split';
			break;
		case 'pattern':
			$progress_bar_class = ' pattern';
			break;
		default:
			$progress_bar_class = false;
	}

	$label_settings = NorebroExtraParser::VC_color_to_CSS( $label_color, 'color:{{color}};' );
	$percent_settings = NorebroExtraParser::VC_color_to_CSS( $percent_color, 'color:{{color}};' );
	$bar_bg_settings = NorebroExtraParser::VC_color_to_CSS( $bar_bg_color, 'background-color:{{color}};' );
	$bar_line_settings = NorebroExtraParser::VC_color_to_CSS( $bar_line_color, 'background-color:{{color}};' );
	$tooltip_settings = NorebroExtraParser::VC_color_to_CSS( $tooltip_color, 'background-color:{{color}};' );

	$label_settings .= NorebroExtraParser::VC_typo_to_CSS( $name_typo );
	$percent_settings .= NorebroExtraParser::VC_typo_to_CSS( $percent_typo );

	NorebroExtraParser::VC_typo_custom_font( $percent_typo );
	NorebroExtraParser::VC_typo_custom_font( $name_typo );

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'progress_bar__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'progress_bar__view.php' );
	return ob_get_clean();
}
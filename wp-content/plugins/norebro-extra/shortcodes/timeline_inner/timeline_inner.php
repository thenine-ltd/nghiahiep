<?php 

/**
* WPBakery Norebro Timeline Inner shortcode
*/

add_shortcode( 'norebro_timeline_inner', 'norebro_timeline_inner_func' );

function norebro_timeline_inner_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$boxed = isset( $boxed ) ? NorebroExtraFilter::boolean( $boxed ) : false;
	$title = isset( $title ) ? NorebroExtraFilter::string( $title, 'string', '' ) : '';
	$subtitle = isset( $subtitle ) ? NorebroExtraFilter::string( $subtitle, 'string', '' ) : '';
	//$description = isset( $description ) ? NorebroExtraFilter::string( $description, 'textarea', '' ) : '';
	
	$title_typo = isset( $title_typo ) ? NorebroExtraFilter::string( $title_typo ) : false;
	$subtitle_typo = isset( $subtitle_typo ) ? NorebroExtraFilter::string( $subtitle_typo ) : false;
	$desription_typo = isset( $desription_typo ) ? NorebroExtraFilter::string( $desription_typo ) : false;
	
	$background_color = isset( $background_color ) ? NorebroExtraFilter::string( $background_color ) : 'brand';
	$title_color = isset( $title_color ) ? NorebroExtraFilter::string( $title_color ) : false;
	$subtitle_color = isset( $subtitle_color ) ? NorebroExtraFilter::string( $subtitle_color ) : false;
	$description_color = isset( $description_color ) ? NorebroExtraFilter::string( $description_color ) : false;
	$dot_bg_color = isset( $dot_bg_color ) ? NorebroExtraFilter::string( $dot_bg_color ) : false;
	$dot_border_color = isset( $dot_border_color ) ? NorebroExtraFilter::string( $dot_border_color ) : 'brand';
	$line_color = isset( $line_color ) ? NorebroExtraFilter::string( $line_color ) : false;
	
	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';

	// Styling
	$timeline_uniqid = uniqid( 'norebro-custom-' );

	if ( $boxed ) {
		$css_class .= ' boxed';
	}

	if ( $boxed ) {
		$background_settings = NorebroExtraParser::VC_color_to_CSS( $background_color, 'background-color:{{color}};' );
	} else {
		$background_settings = '';
	}

	$title_settings = NorebroExtraParser::VC_color_to_CSS( $title_color, 'color:{{color}};' );
	$subtitle_settings = NorebroExtraParser::VC_color_to_CSS( $subtitle_color, 'color:{{color}};' );
	$description_settings = NorebroExtraParser::VC_color_to_CSS( $description_color, 'color:{{color}};' );
	$dot_bg_settings = NorebroExtraParser::VC_color_to_CSS( $dot_bg_color, 'background-color:{{color}};' );
	$dot_border_settings = NorebroExtraParser::VC_color_to_CSS( $dot_border_color, 'border-color:{{color}};' );
	$dot_bg_settings .= $dot_border_settings;
	$line_settings = NorebroExtraParser::VC_color_to_CSS( $line_color, 'background-color:{{color}};' );

	$title_settings .= NorebroExtraParser::VC_typo_to_CSS( $title_typo );
	$subtitle_settings .= NorebroExtraParser::VC_typo_to_CSS( $subtitle_typo );
	$description_settings .= NorebroExtraParser::VC_typo_to_CSS( $desription_typo );

	NorebroExtraParser::VC_typo_custom_font( $title_typo );
	NorebroExtraParser::VC_typo_custom_font( $subtitle_typo );
	NorebroExtraParser::VC_typo_custom_font( $desription_typo );

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'timeline_inner__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'timeline_inner__view.php' );
	return ob_get_clean();
}
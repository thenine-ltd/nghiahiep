<?php 

/**
* WPBakery Norebro Heading shortcode
*/

add_shortcode( 'norebro_heading', 'norebro_heading_func' );

function norebro_heading_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$module_type_layout = isset( $module_type_layout ) ? NorebroExtraFilter::string( $module_type_layout, 'string', 'on_middle' ) : 'on_middle';
	$subtitle_type_layout = isset( $subtitle_type_layout ) ? NorebroExtraFilter::string( $subtitle_type_layout, 'string', 'bottom_subtitle' ) : 'bottom_subtitle';
	$divider_visible = isset( $divider_visible ) ? NorebroExtraFilter::boolean( $divider_visible ) : false;
	$heading_type = isset( $heading_type ) ? NorebroExtraFilter::string( $heading_type, 'string', 'h3' ) : 'h3';

	$divider_alignment = isset( $divider_alignment ) ? NorebroExtraFilter::string( $divider_alignment, 'string', 'before_title' ) : 'before_title';

	$title = isset( $title ) ? rawurldecode( base64_decode( $title ) ) : '';
	$title = NorebroExtraFilter::string( $title, 'string', '' );
	$subtitle = isset( $subtitle ) ? rawurldecode( base64_decode( $subtitle ) ) : '';
	$subtitle = NorebroExtraFilter::string( $subtitle, 'string', '' );
	$subtitle_offset = isset( $subtitle_offset ) ? NorebroExtraFilter::string( $subtitle_offset, 'string', '' ) : '';
	$title_typo = isset( $title_typo ) ? NorebroExtraFilter::string( $title_typo ) : false;
	$mobile_title_typo = isset( $mobile_title_typo ) ? NorebroExtraFilter::string( $mobile_title_typo ) : false;
	$subtitle_typo = isset( $subtitle_typo ) ? NorebroExtraFilter::string( $subtitle_typo ) : false;
	$title_color = isset( $title_color ) ? NorebroExtraFilter::string( $title_color ) : false;
	$subtitle_color = isset( $subtitle_color ) ? NorebroExtraFilter::string( $subtitle_color ) : false;
	$divider_color = isset( $divider_color ) ? NorebroExtraFilter::string( $divider_color ) : false;

	$appearance_effect = ( isset( $appearance_effect ) ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' )  : 'none';
	$appearance_duration = ( isset( $appearance_duration ) ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', '' )  : '';
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = ( isset( $css_class ) ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';

	// Styling
	$headings_uniqid = uniqid( 'norebro-custom-' );
	

	$title_settings = NorebroExtraParser::VC_color_to_CSS( $title_color, 'color:{{color}};' );
	$subtitle_settings = NorebroExtraParser::VC_color_to_CSS( $subtitle_color, 'color:{{color}};' );
	$divider_settings = NorebroExtraParser::VC_color_to_CSS( $divider_color, 'background-color:{{color}};' );

	$title_settings_class = '';
	if ( $subtitle_type_layout == 'top_subtitle' ) {
		$title_settings_class .= ' subtitle-top';
	}

	$title_settings .= NorebroExtraParser::VC_typo_to_CSS( $title_typo );
	$mobile_title_settings = NorebroExtraParser::VC_typo_to_CSS( $mobile_title_typo );
	$subtitle_settings .= NorebroExtraParser::VC_typo_to_CSS( $subtitle_typo );

	if ( $subtitle_offset ) {
		$title_settings .= 'margin-top:' . $subtitle_offset . ';margin-bottom:' . $subtitle_offset . ';';
		$subtitle_settings .= 'margin-top:' . $subtitle_offset . ';margin-bottom:' . $subtitle_offset . ';';
	}

	NorebroExtraParser::VC_typo_custom_font( $title_typo );
	NorebroExtraParser::VC_typo_custom_font( $mobile_title_typo );
	NorebroExtraParser::VC_typo_custom_font( $subtitle_typo );

	switch ( $module_type_layout ) {
		case 'on_left':
			$css_class .= ' text-left';
			break;
		case 'on_right':
			$css_class .= ' text-right';
			break;
		case 'on_middle':
		default:
			$css_class .= ' text-center';
			break;
	}

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'heading__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'heading__view.php' );
	return ob_get_clean();
}
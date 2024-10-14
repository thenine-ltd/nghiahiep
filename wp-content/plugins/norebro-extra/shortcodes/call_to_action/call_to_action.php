<?php 

/**
* WPBakery Norebro Call To Action shortcode
*/

add_shortcode( 'norebro_call_to_action', 'norebro_call_to_action_func' );

function norebro_call_to_action_func( $atts ) {
	$title = $subtitle = $without_side_paddings = $icon_use = $icon_position = $icon_type = $icon_as_icon = 
	$icon_as_image = $title_typo = $subtitle_typo = $bg_color = $title_color = $subtitle_color = $readmore_button = 
	$link = $appearance_effect = $appearance_duration = $css_class = NULL;
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$title = rawurldecode( base64_decode( isset( $title ) ? $title : '' ) );
	$title = NorebroExtraFilter::string( $title, 'string', '' );
	$subtitle = rawurldecode( base64_decode( isset( $subtitle ) ? $subtitle : '' ) );
	$subtitle = NorebroExtraFilter::string( $subtitle, 'string', '' );
	$without_side_paddings = NorebroExtraFilter::boolean( $without_side_paddings );

	$icon_use = NorebroExtraFilter::boolean( $icon_use );
	$icon_position = NorebroExtraFilter::string( $icon_position, 'string', 'left' );
	$icon_type = NorebroExtraFilter::string( $icon_type, 'string', 'font_icon' );
	$icon_as_icon = NorebroExtraFilter::string( $icon_as_icon, 'string', '' );
	$icon_as_image = NorebroExtraFilter::string( $icon_as_image, 'string', '' );

	$title_typo = NorebroExtraFilter::string( $title_typo );
	$subtitle_typo = NorebroExtraFilter::string( $subtitle_typo );

	$bg_color = NorebroExtraFilter::string( $bg_color );
	$title_color = NorebroExtraFilter::string( $title_color );
	$subtitle_color = NorebroExtraFilter::string( $subtitle_color );
	$readmore_button = NorebroExtraFilter::string( $readmore_button );

	$link = NorebroExtraParser::VC_link_params( ( $link ) ? $link : '', array( 'caption' => '' ) );

	$appearance_effect = NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' );
	$appearance_duration = NorebroExtraFilter::string( $appearance_duration, 'attr', false );
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = ( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' ) : '';

	// Styling
	$call_to_action_uniqid = uniqid( 'norebro-custom-' );

	if ( $icon_type == 'font_icon' && $icon_as_icon ) {
		$GLOBALS['norebro_icon_fonts'][] = $icon_as_icon;
	}

	$readmore_button = preg_replace( '/\&amp\;/', '&', $readmore_button );
	parse_str( $readmore_button, $button_settings );
	$button_css = NorebroExtraParser::VC_button_to_css( $button_settings );

	$call_to_action_settings = NorebroExtraParser::VC_color_to_CSS( $bg_color, 'background-color:{{color}};' );
	$title_settings = NorebroExtraParser::VC_color_to_CSS( $title_color, 'color:{{color}};' );
	$subtitle_settings = NorebroExtraParser::VC_color_to_CSS( $subtitle_color, 'color:{{color}};' );

	$title_settings .= NorebroExtraParser::VC_typo_to_CSS( $title_typo );
	$subtitle_settings .= NorebroExtraParser::VC_typo_to_CSS( $subtitle_typo );

	NorebroExtraParser::VC_typo_custom_font( $title_typo );
	NorebroExtraParser::VC_typo_custom_font( $subtitle_typo );

	if ( $without_side_paddings ) {
		$call_to_action_settings .= ' padding-left:0;padding-right:0;';
	}

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'call_to_action__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'call_to_action__view.php' );
	return ob_get_clean();
}
<?php

/**
* WPBakery Norebro Cliens logo box shortcode
*/

add_shortcode( 'norebro_clients_logo', 'norebro_clients_logo_func' );

function norebro_clients_logo_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$layout_type = ( isset( $layout_type ) ) ? NorebroExtraFilter::string( $layout_type, 'string', 'default' ) : 'default';
	$link = ( isset( $link ) ) ? NorebroExtraFilter::string( $link ) : false;
	$in_new_tab = ( isset( $in_new_tab ) ) ? NorebroExtraFilter::string( $in_new_tab ) : false;

	$title = ( isset( $title ) ) ? NorebroExtraFilter::string( $title ) : false;
	$description = isset( $description ) ? rawurldecode( base64_decode( $description ) ) : '';
	$description = NorebroExtraFilter::string( $description, 'textarea', '' );
	$image_logo = ( isset( $image_logo ) ) ? NorebroExtraFilter::string( wp_get_attachment_url( NorebroExtraFilter::string( $image_logo ) ), 'attr' ) : false;

	$title_typo = ( isset( $title_typo ) ) ? NorebroExtraFilter::string( $title_typo ) : false;
	$description_typo = ( isset( $description_typo ) ) ? NorebroExtraFilter::string( $description_typo ) : false;

	$overlay_shadow = ( isset( $overlay_shadow ) ) ? NorebroExtraFilter::boolean( $overlay_shadow ) : false;
	$overlay_color = ( isset( $overlay_color ) ) ? NorebroExtraFilter::string( $overlay_color ) : false;
	$title_color = ( isset( $title_color ) ) ? NorebroExtraFilter::string( $title_color ) : false;
	$description_color = ( isset( $description_color ) ) ? NorebroExtraFilter::string( $description_color ) : false;

	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' )  : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false )  : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = ( isset( $css_class ) ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';

	if ( isset( $link_url ) ) {
		$link_url = NorebroExtraParser::VC_link_params( $link_url, array( 'caption' => 'Read More' ) );
	} else {
		$link_url = NorebroExtraParser::VC_link_params( '', array( 'caption' => 'Read More' ) );
	}

	// Styling
	$clients_logo_uniqid = uniqid('norebro-custom-');
	$clients_logo_class = '';

	if ( $layout_type == 'default' ) {
		$clients_logo_class .= ' default';
	}

	if ( $overlay_shadow ) {
		$clients_logo_class .= ' shadow';
	}

	$title_settings = NorebroExtraParser::VC_color_to_CSS( $title_color, 'color:{{color}};' );
	$description_settings = NorebroExtraParser::VC_color_to_CSS( $description_color, 'color:{{color}};' );
	$overlay_settings = NorebroExtraParser::VC_color_to_CSS( $overlay_color, 'background-color:{{color}};' );

	$css_class = $clients_logo_class . $css_class;

	$title_settings .= NorebroExtraParser::VC_typo_to_CSS( $title_typo );
	$description_settings .= NorebroExtraParser::VC_typo_to_CSS( $description_typo );

	NorebroExtraParser::VC_typo_custom_font( $title_typo );
	NorebroExtraParser::VC_typo_custom_font( $description_typo );

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'clients_logo__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'clients_logo__view.php' );
	return ob_get_clean();
}

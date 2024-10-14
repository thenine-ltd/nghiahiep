<?php 

/**
* WPBakery Norebro Message box shortcode
*/

add_shortcode( 'norebro_message_module', 'norebro_message_module_func' );

function norebro_message_module_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$layout = isset( $layout ) ? NorebroExtraFilter::string( $layout, 'string', 'default' ) : 'default';
	$text = isset( $text ) ? rawurldecode( base64_decode( $text ) ) : '';
	$text = NorebroExtraFilter::string( $text, 'string', '' );
	$full_width = isset( $full_width ) ? NorebroExtraFilter::boolean( $full_width, true ) : true;
	$without_close_button = isset( $without_close_button ) ? NorebroExtraFilter::boolean( $without_close_button, false ) : false;
	$text_typo = isset( $text_typo ) ? NorebroExtraFilter::string( $text_typo ) : false;
	$link_typo = isset( $link_typo ) ? NorebroExtraFilter::string( $link_typo ) : false;
	$bg_color = isset( $bg_color ) ? NorebroExtraFilter::string( $bg_color, 'string', false ) : false;
	$text_color = isset( $text_color ) ? NorebroExtraFilter::string( $text_color, 'string', false ) : false;
	$link_color = isset( $link_color ) ? NorebroExtraFilter::string( $link_color, 'string', false ) : false;

	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' ) : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false ) : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' ) : '';

	// Styling
	$message_box_uniqid = uniqid( 'norebro-custom-' );

	$message_box_class = '';
	switch ( $layout ) {
		case 'warning':
			$message_box_class .= ' warning';
			break;
		case 'success':
			$message_box_class .= ' success';
			break;
		case 'primary':
			$message_box_class .= ' primary';
			break;
		case 'danger':
			$message_box_class .= ' error';
			break;
	}

	if ( ! $full_width ) {
		$message_box_class .= ' wauto';
	}

	if ( $without_close_button ) {
		$message_box_class .= ' without-close';
	}

	$link = isset( $link ) ? NorebroExtraParser::VC_link_params( $link, array( 'caption' => __( 'Click me', 'norebro-extra' ) ) ) : false;

	$message_settings = NorebroExtraParser::VC_color_to_CSS( $bg_color, 'background-color:{{color}};' );
	$message_text_settings = NorebroExtraParser::VC_color_to_CSS( $text_color, 'color:{{color}};' );
	$link_settings = NorebroExtraParser::VC_color_to_CSS( $link_color, 'color:{{color}};' );

	$message_settings .= $message_text_settings;

	NorebroExtraParser::VC_typo_custom_font( $text_typo );
	NorebroExtraParser::VC_typo_custom_font( $link_typo );

	$message_css = NorebroExtraParser::VC_typo_to_CSS( $text_typo );
	$link_css = NorebroExtraParser::VC_typo_to_CSS( $link_typo );

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'message_module__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'message_module__view.php' );
	return ob_get_clean();
}
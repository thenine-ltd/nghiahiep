<?php 

/**
* WPBakery Norebro Button shortcode
*/

add_shortcode( 'norebro_button', 'norebro_button_func' );

function norebro_button_func( $atts ) {
	if ( is_array( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$layout = isset( $layout ) ? NorebroExtraFilter::string( $layout, 'string', 'fill') : 'fill';
	$text_on_hover = isset( $text_on_hover ) ? NorebroExtraFilter::boolean( $text_on_hover ) : false;
	$shape_squared = isset( $shape_squared ) ? NorebroExtraFilter::boolean( $shape_squared ) : false;
	$shape_size = isset( $shape_size ) ? NorebroExtraFilter::string( $shape_size, 'string', '' ) : '';
	$shape_position = isset( $shape_position ) ? NorebroExtraFilter::string( $shape_position, 'string', 'center' ) : 'center';
	$title = isset( $title ) ? NorebroExtraFilter::string( $title, 'string', '' ) : '';
	$full_width = isset( $full_width ) ? NorebroExtraFilter::boolean( $full_width ) : false;
	$title_typo = isset( $title_typo ) ? NorebroExtraFilter::string( $title_typo ) : false;
	$icon_use = isset( $icon_use ) ? NorebroExtraFilter::boolean( $icon_use ) : false;
	$icon_position = isset( $icon_position ) ? NorebroExtraFilter::string( $icon_position, 'string', 'left' ) : 'left';
	$icon_type = isset( $icon_type ) ? NorebroExtraFilter::string( $icon_type, 'string', 'font_icon' ) : 'font_icon';
	$icon_as_icon = isset( $icon_as_icon ) ? NorebroExtraFilter::string( $icon_as_icon, 'string', '' ) : '';
	$icon_as_image = isset( $icon_as_image ) ? NorebroExtraFilter::string( $icon_as_image, 'string', '' ) : '';
	$icon_image_atts = NorebroExtraParser::generateImageAttsById( NorebroExtraFilter::string( $icon_as_image ), __( 'Icon', 'norebro-extra' ) );
	
	$color = isset( $color ) ? NorebroExtraFilter::string( $color, 'string', false ) : false;
	$hover_color = isset( $hover_color ) ? NorebroExtraFilter::string( $hover_color, 'string', false ) : false;
	$text_color = isset( $text_color ) ? NorebroExtraFilter::string( $text_color, 'string', false ) : false;
	$hover_text_color = isset( $hover_text_color ) ? NorebroExtraFilter::string( $hover_text_color, 'string', false ) : false;
	
	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' ) : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false ) : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' ) : '';

	$link = NorebroExtraParser::VC_link_params( ( isset( $link ) ) ? $link : '', array( 'caption' => '' ) );

	// Styling
	$button_uniqid = uniqid( 'norebro-custom-' );

	if ( $icon_type == 'font_icon' && $icon_as_icon ) {
		$GLOBALS['norebro_icon_fonts'][] = $icon_as_icon;
	} else if ( $icon_as_image ) {
		$icon_src = wp_get_attachment_image_url( $icon_as_image, 'full' );
	}
	
	$button_class = '';

	if ( $shape_squared ) {
		$button_class .= ' btn-squared';
	}

	if ( $icon_use && $text_on_hover ) {
		$button_class .= ' text-on-hover';
	}

	switch ( $layout ) {
		case 'outline':
			$button_class .= ' btn-outline';
			break;
		case 'flat':
			$button_class .= ' btn-flat';
			break;
		case 'link':
			$button_class .= ' btn-link';
			break;
	}

	switch ( $shape_size ) {
		case 'small':
			$button_class .= ' btn-small';
			break;
		case 'large':
			$button_class .= ' btn-large';
			break;
		case 'huge':
			$button_class .= ' btn-huge';
			break;
	}

	$wrap_class = '';

	switch ( $shape_position ) {
		case 'left':
			$wrap_class .= ' text-left';
			break;
		case 'center':
			$wrap_class .= ' text-center';
			break;
		case 'right':
			$wrap_class .= ' text-right';
			break;
	}

	if ( $full_width ) {
		$button_class .= ' full-width';
	}


	$button_settings_css = $button_settings_css_hover = '';

	switch ( $layout ) {
		case 'outline':
			$button_settings_css .= 'border-color:{{color}};color:{{color}};';
			$button_settings_css_hover .= 'color:#fff;background-color:{{color}};border-color:{{color}};';
			break;
		case 'flat':
			$button_settings_css .= 'color:{{color}};';
			$button_settings_css_hover .= 'color:#fff;background-color:{{color}};border-color:{{color}};';
			break;
		case 'link':
			$button_settings_css .= 'color:{{color}};';
			$button_settings_css_hover .= 'color:{{color}};';
			break;
		default:
			$button_settings_css .= ' background-color:{{color}};border-color:{{color}};';
			$button_settings_css_hover .= 'color:{{color}};background-color:transparent;border-color:{{color}};';
	}

	$button_settings = NorebroExtraParser::VC_color_to_CSS( $color, $button_settings_css );
	$button_hover_settings = NorebroExtraParser::VC_color_to_CSS( 
		( $hover_color ) ? $hover_color : $color, 
		$button_settings_css_hover
	);

	$text_settings = NorebroExtraParser::VC_color_to_CSS( $text_color, 'color:{{color}};' );
	$text_hover_settings = NorebroExtraParser::VC_color_to_CSS( $hover_text_color, 'color:{{color}};' );

	$button_settings .= $text_settings;
	$button_hover_settings .= $text_hover_settings;


	if ( $color && $color != 'brand' && $layout == 'fill' ){
		$button_hover_settings .= 'background:transparent;';
	}

	$button_settings .= NorebroExtraParser::VC_typo_to_CSS( $title_typo );

	NorebroExtraParser::VC_typo_custom_font( $title_typo );

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'button__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'button__view.php' );
	return ob_get_clean();
}
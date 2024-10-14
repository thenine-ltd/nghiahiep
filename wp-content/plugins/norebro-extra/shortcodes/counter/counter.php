<?php 

/**
* WPBakery Norebro Counter shortcode
*/

add_shortcode( 'norebro_counter', 'norebro_counter_func' );

function norebro_counter_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$layout = isset( $layout ) ? NorebroExtraFilter::string( $layout, 'string', 'percent') : 'percent';

	$count_number = isset( $count_number ) ? NorebroExtraFilter::string( str_replace( ' ', '', $count_number ), 'string', '0') : '0';
	$title = isset( $title ) ? NorebroExtraFilter::string( $title, 'string', false) : false;
	$subtitle = isset( $subtitle ) ? NorebroExtraFilter::string( $subtitle, 'string', false) : false;
	$subtitle_position = isset( $subtitle_position ) ? NorebroExtraFilter::string( $subtitle_position, 'string', 'bottom') : 'bottom';

	$icon_position = isset( $icon_position ) ? NorebroExtraFilter::string( $icon_position, 'string', 'left') : 'left';
	$icon_type = isset( $icon_type ) ? NorebroExtraFilter::string( $icon_type, 'string', 'font_icon' ) : 'font_icon';
	$icon_as_icon = isset( $icon_as_icon ) ? NorebroExtraFilter::string( $icon_as_icon, 'string', '' ) : '';
	$icon_as_image = isset( $icon_as_image ) ? NorebroExtraFilter::string( wp_get_attachment_url( NorebroExtraFilter::string( $icon_as_image ) ), 'attr' ) : false;

	$title_typo = isset( $title_typo ) ? NorebroExtraFilter::string( $title_typo ) : false;
	$subtitle_typo = isset( $subtitle_typo ) ? NorebroExtraFilter::string( $subtitle_typo ) : false;
	$count_typo = isset( $count_typo ) ? NorebroExtraFilter::string( $count_typo ) : false;

	$count_color = isset( $count_color ) ? NorebroExtraFilter::string( $count_color, 'string', false ) : false;
	$icon_color = isset( $icon_color ) ? NorebroExtraFilter::string( $icon_color, 'string', false ) : false;
	$title_color = isset( $title_color ) ? NorebroExtraFilter::string( $title_color, 'string', false ) : false;
	$subtitle_color = isset( $subtitle_color ) ? NorebroExtraFilter::string( $subtitle_color, 'attr', false ) : false;

	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' )  : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false )  : false;
	$appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' ) : '';

	// Styling
	$counter_box_uniqid = uniqid( 'norebro-custom-' );
	
	if ( $icon_type == 'font_icon' && $icon_as_icon ) {
		$GLOBALS['norebro_icon_fonts'][] = $icon_as_icon;
	}

	$count_css = NorebroExtraParser::VC_color_to_CSS( $count_color, 'color:{{color}};' );
	$icon_css = NorebroExtraParser::VC_color_to_CSS( $icon_color, 'color:{{color}};' );
	$title_css = NorebroExtraParser::VC_color_to_CSS( $title_color, 'color:{{color}};' );
	$subtitle_css = NorebroExtraParser::VC_color_to_CSS( $subtitle_color, 'color:{{color}};' );

	NorebroExtraParser::VC_typo_custom_font( $title_typo );
	NorebroExtraParser::VC_typo_custom_font( $subtitle_typo );
	NorebroExtraParser::VC_typo_custom_font( $count_typo );

	$title_css = $title_css . NorebroExtraParser::VC_typo_to_CSS( $title_typo );
	$subtitle_css = $subtitle_css . NorebroExtraParser::VC_typo_to_CSS( $subtitle_typo );
	$count_css = $count_css . NorebroExtraParser::VC_typo_to_CSS( $count_typo );

	$title_css = $title_css ? $title_css : false;
	$subtitle_css = $subtitle_css ? $subtitle_css : false;

	// Assembling
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'counter__style.php' );
	include( plugin_dir_path( __FILE__ ) . 'counter__view.php' );
	return ob_get_clean();
}
<?php 

/**
* WPBakery Norebro Accordion Inner shortcode
*/

add_shortcode( 'norebro_accordion_inner', 'norebro_accordion_inner_func' );

function norebro_accordion_inner_func( $atts, $content_html = '' ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$heading = isset( $heading ) ? NorebroExtraFilter::string( $heading, 'string', '' ) : '';
	$with_icon = isset( $with_icon ) ? NorebroExtraFilter::boolean( $with_icon ) : false;
	$icon_as_icon = isset( $icon_as_icon ) ? NorebroExtraFilter::string( $icon_as_icon, 'attr' ) : false;

	$heading_typo = isset( $heading_typo ) ? NorebroExtraFilter::string( $heading_typo ) : false;
	$content_typo = isset( $content_typo ) ? NorebroExtraFilter::string( $content_typo ) : false;

	$heading_text_color = isset( $heading_text_color ) ? NorebroExtraFilter::string( $heading_text_color ) : false;
	$content_color = isset( $content_color ) ? NorebroExtraFilter::string( $content_color ) : false;
	$icon_color = isset( $icon_color ) ? NorebroExtraFilter::string( $icon_color ) : false;
	$heading_fill_color = isset( $heading_fill_color ) ? NorebroExtraFilter::string( $heading_fill_color ) : false;

	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';

	// Handling
	$content_html = wpautop( $content_html );

	// Styling
	$accordion_inner_uniqid = isset( $tab_id ) ? $tab_id : uniqid( 'norebro-custom-' );

	if ( $with_icon && $icon_as_icon ) {
		$GLOBALS['norebro_icon_fonts'][] = $icon_as_icon;
	}

	$heading_css = NorebroExtraParser::VC_typo_to_CSS( $heading_typo ) . NorebroExtraParser::VC_color_to_CSS( $heading_text_color, 'color:{{color}};' );
	$content_css = NorebroExtraParser::VC_typo_to_CSS( $content_typo ) . NorebroExtraParser::VC_color_to_CSS( $content_color, 'color:{{color}};' );
	$icon_css = NorebroExtraParser::VC_color_to_CSS( $icon_color, 'color:{{color}};' );
	$head_fill_css = NorebroExtraParser::VC_color_to_CSS( $heading_fill_color, 'background-color:{{color}};' );

	NorebroExtraParser::VC_typo_custom_font( $heading_typo );
	NorebroExtraParser::VC_typo_custom_font( $content_typo );

	// Assembling
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'accordion_inner__style.php' );
	include( plugin_dir_path( __FILE__ ) . 'accordion_inner__view.php' );
	return ob_get_clean();
}
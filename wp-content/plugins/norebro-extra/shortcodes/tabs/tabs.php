<?php 

/**
* WPBakery Norebro Tabs shortcode
*/

add_shortcode( 'norebro_tabs', 'norebro_tabs_func' );

function norebro_tabs_func( $atts, $content = null ) {
	$tabs_type = $tabs_layout = $tabs_layout_2 = $tabs_alignment = $tabs_title_typo = $bg_color = $content_color = 
	$tab_color = $tab_active_color = $tabs_line_color = $tabs_border_color = 
	$appearance_effect = $appearance_duration = $css_class = NULL;
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$tabs_type = NorebroExtraFilter::string( $tabs_type, 'string', 'default' );
	if ( $tabs_type == 'default' ) {
		$tabs_layout = NorebroExtraFilter::string( $tabs_layout_2, 'string', 'ontop' );
	} else {
		$tabs_layout = NorebroExtraFilter::string( $tabs_layout, 'string', 'ontop' );
	}
	$tabs_alignment = NorebroExtraFilter::string( $tabs_alignment, 'string', 'left' ); 

	$tabs_title_typo = NorebroExtraFilter::string( $tabs_title_typo );
	
	$bg_color = NorebroExtraFilter::string( $bg_color, 'string', 'brand' );
	$content_color = NorebroExtraFilter::string( $content_color );
	$tab_color = NorebroExtraFilter::string( $tab_color );
	$tab_active_color = NorebroExtraFilter::string( $tab_active_color );
	$tabs_line_color = NorebroExtraFilter::string( $tabs_line_color );
	$tabs_border_color = NorebroExtraFilter::string( $tabs_border_color );
	
	$appearance_effect = NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' );
	$appearance_duration = NorebroExtraFilter::string( $appearance_duration, 'attr', false );
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = ( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' ) : '';

	// Styling
	$tabs_uniqid = uniqid( 'norebro-custom-' );

	$tab_box_class = '';
	if ( $tabs_type == 'filled' ) {
		$tab_box_class .= ' filled';
	}
	if ( $tabs_layout == 'onleft' ) {
		$tab_box_class .= ' vertical';
	}

	$tab_box_class .= ' tabs-' . $tabs_alignment;

	$tabs_settings = '';
	if( $tabs_type == 'filled' ) {
		$tabs_settings = NorebroExtraParser::VC_color_to_CSS( $bg_color, 'background-color:{{color}};' );
	}

	$content_settings = NorebroExtraParser::VC_color_to_CSS( $content_color, 'color:{{color}};' );
	$tab_settings = NorebroExtraParser::VC_color_to_CSS( $tab_color, 'color:{{color}};' );
	$tab_active_settings = NorebroExtraParser::VC_color_to_CSS( $tab_active_color, 'color:{{color}};' );
	$tabs_line_settings = NorebroExtraParser::VC_color_to_CSS( $tabs_line_color, 'background-color:{{color}};' );
	$tabs_border_settings = NorebroExtraParser::VC_color_to_CSS( $tabs_border_color, 'border-color:{{color}};' );

	$tab_settings .= NorebroExtraParser::VC_typo_to_CSS( $tabs_title_typo );

	NorebroExtraParser::VC_typo_custom_font( $tabs_title_typo );

	$tab_box_object = (object) array();
	$tab_box_json = json_encode( $tab_box_object );

	// Assembling
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'tabs__style.php' );
	include( plugin_dir_path( __FILE__ ) . 'tabs__view.php' );
	return ob_get_clean();
}
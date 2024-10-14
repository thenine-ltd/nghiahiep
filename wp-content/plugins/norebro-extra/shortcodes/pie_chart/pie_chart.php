<?php 

/**
* WPBakery Norebro Pie Chart shortcode
*/

add_shortcode( 'norebro_pie_chart', 'norebro_pie_chart_func' );

function norebro_pie_chart_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$layout = isset( $layout ) ? NorebroExtraFilter::string( $layout, 'string', 'percent' ) : 'percent';
	$description_position = isset( $description_position ) ? NorebroExtraFilter::string( $description_position, 'string', 'bottom' ) : 'bottom';
	$percent = isset( $percent ) ? NorebroExtraFilter::string( $percent, 'string', '100') : '100';
	$title = isset( $title ) ? NorebroExtraFilter::string( $title, 'string', false) : false;
	$subtitle = isset( $subtitle ) ? NorebroExtraFilter::string( $subtitle, 'string', false) : false;
	$subtitle_position = isset( $subtitle_position ) ? NorebroExtraFilter::string( $subtitle_position, 'string', 'bottom' ) : 'bottom';
	$icon_position = isset( $icon_position ) ? NorebroExtraFilter::string( $icon_position, 'string', 'left' ) : 'left';
	$icon_type = isset( $icon_type ) ? NorebroExtraFilter::string( $icon_type, 'string', 'font_icon' ) : 'font_icon';
	$icon_as_icon = isset( $icon_as_icon ) ? NorebroExtraFilter::string( $icon_as_icon, 'string', '' ) : '';
	$icon_as_image = isset( $icon_as_image ) ? NorebroExtraFilter::string( $icon_as_image, 'string', '' ) : '';
	
	$title_typo = isset( $title_typo ) ? NorebroExtraFilter::string( $title_typo ) : false;
	$subtitle_typo = isset( $subtitle_typo ) ? NorebroExtraFilter::string( $subtitle_typo ) : false;
	$percent_typo = isset( $percent_typo ) ? NorebroExtraFilter::string( $percent_typo ) : false;
	
	$chart_color = isset( $chart_color ) ? NorebroExtraFilter::string( $chart_color, 'string', false ) : false;
	$title_color = isset( $title_color ) ? NorebroExtraFilter::string( $title_color, 'string', false ) : false;
	$subtitle_color = isset( $subtitle_color ) ? NorebroExtraFilter::string( $subtitle_color, 'attr', false ) : false;
	$chart_content_color = isset( $chart_content_color ) ? NorebroExtraFilter::string( $chart_content_color, 'attr', false ) : false;
	
	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' ) : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false ) : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );
	
	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' ) : '';

	// Styling
	$chart_box_uniqid = uniqid( 'norebro-custom-' );
	
	NorebroHelper::add_required_script( 'chart-box' );
	
	if ( $icon_type == 'font_icon' && $icon_as_icon ) {
		$GLOBALS['norebro_icon_fonts'][] = $icon_as_icon;
	}

	$title_settings = NorebroExtraParser::VC_color_to_CSS( $title_color, 'color:{{color}};' );
	$subtitle_settings = NorebroExtraParser::VC_color_to_CSS( $subtitle_color, 'color:{{color}};' );
	$chart_content_settings = NorebroExtraParser::VC_color_to_CSS( $chart_content_color, 'color:{{color}};' );
	
	$chart_content_settings_class = '';
	if ( $layout == "icon" && $icon_as_icon ) {
		$chart_content_settings_class .= ' brand-color';
	}

	if ( $icon_as_image ) {
		$image_src = wp_get_attachment_image( $icon_as_image );
	}


	$title_settings .= NorebroExtraParser::VC_typo_to_CSS( $title_typo );
	$subtitle_settings .= NorebroExtraParser::VC_typo_to_CSS( $subtitle_typo );
	$percent_css = NorebroExtraParser::VC_typo_to_CSS( $percent_typo );

	NorebroExtraParser::VC_typo_custom_font( $title_typo );
	NorebroExtraParser::VC_typo_custom_font( $subtitle_typo );
	NorebroExtraParser::VC_typo_custom_font( $percent_typo );

	$chart_class = '';

	switch ( $description_position ) {
		case 'right':
			$chart_class .= ' chart-right';
			break;
		case 'left':
			$chart_class .= ' chart-left';
			break;
	}

	// Assembling
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'pie_chart__style.php' );
	include( plugin_dir_path( __FILE__ ) . 'pie_chart__view.php' );
	return ob_get_clean();
}
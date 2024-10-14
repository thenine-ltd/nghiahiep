<?php 

/**
* WPBakery Norebro Icon box shortcode
*/

add_shortcode( 'norebro_icon_box', 'norebro_icon_box_func' );

function norebro_icon_box_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$box_type_layout = ( isset( $box_type_layout ) ) ? NorebroExtraFilter::string( $box_type_layout, 'string', 'top_icon' ) : 'top_icon';
	$box_alignment = ( isset( $box_alignment ) ) ? NorebroExtraFilter::string( $box_alignment, 'string', 'center' ) : 'center';
	$title = ( isset( $title ) ) ? NorebroExtraFilter::string( $title, 'string', '' ) : '';
	$subtitle = isset( $subtitle ) ? NorebroExtraFilter::string( $subtitle, 'string', '' ) : '';
	$description = isset( $description ) ? NorebroExtraFilter::string( $description, 'textarea', '' ) : '';
	$content_full = isset( $content_full ) ? NorebroExtraFilter::string( $content_full, 'string', 'full') : 'full';

	$image = ( isset( $image ) ) ? NorebroExtraFilter::string( wp_get_attachment_url( NorebroExtraFilter::string( $image ) ), 'attr' ) : false;
	$icon_type_layout = ( isset( $icon_type_layout ) ) ? NorebroExtraFilter::string( $icon_type_layout, 'string', 'default' ) : 'default';
	$icon_type = ( isset( $icon_type ) ) ? NorebroExtraFilter::string( $icon_type, 'string', 'font_icon' ) : 'font_icon';
	$rounded_icon_shape = ( isset( $rounded_icon_shape ) ) ? NorebroExtraFilter::boolean( $rounded_icon_shape ) : false;
	$icon_as_icon = ( isset( $icon_as_icon ) ) ? NorebroExtraFilter::string( $icon_as_icon, 'attr', '' ) : '';
	$icon_as_image = ( isset( $icon_as_image ) ) ? NorebroExtraFilter::string( wp_get_attachment_url( NorebroExtraFilter::string( $icon_as_image ) ), 'attr' ) : false;
	
	$use_link = ( isset( $use_link ) ) ? NorebroExtraFilter::boolean( $use_link ) : false;
	
	$title_typo = ( isset( $title_typo ) ) ? NorebroExtraFilter::string( $title_typo ) : false;
	$subtitle_typo = ( isset( $subtitle_typo ) ) ? NorebroExtraFilter::string( $subtitle_typo ) : false;
	$description_typo = ( isset( $description_typo ) ) ? NorebroExtraFilter::string( $description_typo ) : false;
	
	$title_color = ( isset( $title_color ) ) ? NorebroExtraFilter::string( $title_color ) : false;
	$subtitle_color = ( isset( $subtitle_color ) ) ? NorebroExtraFilter::string( $subtitle_color ) : false;
	$description_color = ( isset( $description_color ) ) ? NorebroExtraFilter::string( $description_color ) : false;
	$fill_color = ( isset( $fill_color ) ) ? NorebroExtraFilter::string( $fill_color, 'brand' ) : 'brand';
	$border_color = ( isset( $border_color ) ) ? NorebroExtraFilter::string( $border_color, 'brand' ) : 'brand';
	$icon_color = ( isset( $icon_color ) ) ? NorebroExtraFilter::string( $icon_color, 'brand' ) : 'brand';
	$readmore_button = ( isset( $readmore_button ) ) ? NorebroExtraFilter::string( $readmore_button ) : false;
	
	$link_url = NorebroExtraParser::VC_link_params( isset( $link_url ) ? $link_url : '', array( 'caption' => __( 'Read more', 'norebro-extra' ) ) );
	
	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' )  : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false )  : false;
	$appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = ( isset( $css_class ) ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';


	// Styling
	$icon_box_uniqid = uniqid('norebro-custom-');

	if ( $icon_type == 'font_icon' && $icon_as_icon ) {
		$GLOBALS['norebro_icon_fonts'][] = $icon_as_icon;
	}

	$icon_box_class_main = 'icon-box';
	if ( $box_type_layout == 'left_icon' ) {
		$icon_box_class_main .= ' box-left';
	}
	if ( $box_type_layout == 'right_icon' ) {
		$icon_box_class_main .= ' box-right';
	}
	if( $box_type_layout == 'top_icon' ){
		$icon_box_class_main .= ' text-' . $box_alignment;
	}

	$icon_box_class_icon = '';
	switch ( $icon_type_layout ) {
		case 'border':
			$icon_box_class_icon = ' shape-border';
			break;
		case 'double':
			$icon_box_class_icon = ' shape-border-double';
			break;
		case 'fill_and_border':
			$icon_box_class_icon = ' shape-border shape-fill brand-bg-color';
			break;
		case 'only_fill':
			$icon_box_class_icon = ' shape-fill brand-bg-color';
			break;
	}
	if ( $rounded_icon_shape ){
		$icon_box_class_icon .= ' shape-rounded';
	}

	$icon_css = '';
	$icon_css .= NorebroExtraParser::VC_color_to_CSS( $icon_color, 'color:{{color}};' );

	if ( $icon_type_layout == 'fill_and_border' || $icon_type_layout == 'only_fill' ) {
		$icon_css .= NorebroExtraParser::VC_color_to_CSS( $fill_color, 'background-color:{{color}};' );
	}
	if ( $icon_type_layout == 'fill_and_border' || $icon_type_layout == 'border' || $icon_type_layout == 'double' ) {
		$icon_css .= NorebroExtraParser::VC_color_to_CSS( $border_color, 'border-color:{{color}};' );
	}

	
	$title_settings = NorebroExtraParser::VC_color_to_CSS( $title_color, 'color:{{color}};' );
	$title_settings .= NorebroExtraParser::VC_typo_to_CSS( $title_typo );

	$subtitle_settings = NorebroExtraParser::VC_color_to_CSS( $subtitle_color, 'color:{{color}};' );
	$subtitle_settings .= NorebroExtraParser::VC_typo_to_CSS( $subtitle_typo );

	$description_settings = NorebroExtraParser::VC_color_to_CSS( $description_color, 'color:{{color}};' );
	$description_settings .= NorebroExtraParser::VC_typo_to_CSS( $description_typo );
	
	$description_settings_class = '';
	if ( $content_full == 'full' ) {
		$description_settings_class .= ' content-full';
	}

	// Read More button
	$readmore_button = preg_replace( '/\&amp\;/', '&', $readmore_button );
	parse_str( $readmore_button, $button_settings );
	$button_css = NorebroExtraParser::VC_button_to_css( $button_settings );

	NorebroExtraParser::VC_typo_custom_font( $title_typo );
	NorebroExtraParser::VC_typo_custom_font( $subtitle_typo );
	NorebroExtraParser::VC_typo_custom_font( $description_typo );

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'icon_box__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'icon_box__view.php' );
	return ob_get_clean();
}
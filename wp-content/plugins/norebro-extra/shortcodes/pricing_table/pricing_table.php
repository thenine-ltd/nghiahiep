<?php 

/**
* WPBakery Norebro Pricing table shortcode
*/

add_shortcode( 'norebro_pricing_table', 'norebro_pricing_table_func' );

function norebro_pricing_table_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$title = isset( $title ) ? NorebroExtraFilter::string( $title ) : false;
	$subtitle = isset( $subtitle ) ? NorebroExtraFilter::string( $subtitle ) : false;
	$description = isset( $description ) ? NorebroExtraFilter::string( $description, 'textarea', '' ) : '';
	$price = isset( $price ) ? NorebroExtraFilter::string( $price, 'string', '' ) : '';
	$price_currency = isset( $price_currency ) ? NorebroExtraFilter::string( $price_currency ) : false;
	$price_caption = isset( $price_caption ) ? NorebroExtraFilter::string( $price_caption ) : false;
	$features_type = isset( $features_type ) ? NorebroExtraFilter::string( $features_type, 'string', 'default' ) : 'default';
	$features_value = isset( $features_value ) ? json_decode( urldecode( NorebroExtraFilter::string( $features_value ) ) ) : false;
	$add_button = isset( $add_button ) ? NorebroExtraFilter::boolean( $add_button ) : false;

	$title_typo = isset( $title_typo ) ? NorebroExtraFilter::string( $title_typo ) : false;
	$subtitle_typo = isset( $subtitle_typo ) ? NorebroExtraFilter::string( $subtitle_typo ) : false;
	$description_typo = isset( $description_typo ) ? NorebroExtraFilter::string( $description_typo ) : false;
	$price_typo = isset( $price_typo ) ? NorebroExtraFilter::string( $price_typo ) : false;
	$features_title_typo = isset( $features_title_typo ) ? NorebroExtraFilter::string( $features_title_typo ) : false;
	$features_subtitle_typo = isset( $features_subtitle_typo ) ? NorebroExtraFilter::string( $features_subtitle_typo ) : false;

	$bg_color = isset( $bg_color ) ? NorebroExtraFilter::string( $bg_color ) : false;
	$borders_color = isset( $borders_color ) ? NorebroExtraFilter::string( $borders_color ) : false;
	$title_color = isset( $title_color ) ? NorebroExtraFilter::string( $title_color ) : false;
	$subtitle_color = isset( $subtitle_color ) ? NorebroExtraFilter::string( $subtitle_color ) : 'brand';
	$description_color = isset( $description_color ) ? NorebroExtraFilter::string( $description_color ) : false;
	$price_color = isset( $price_color ) ? NorebroExtraFilter::string( $price_color ) : false;
	$price_caption_color = isset( $price_caption_color ) ? NorebroExtraFilter::string( $price_caption_color ) : false;
	$price_caption_bg_color = isset( $price_caption_bg_color ) ? NorebroExtraFilter::string( $price_caption_bg_color ) : false;
	$features_titles_color = isset( $features_titles_color ) ? NorebroExtraFilter::string( $features_titles_color ) : false;
	$features_icons_color = isset( $features_icons_color ) ? NorebroExtraFilter::string( $features_icons_color ) : false;
	$features_disabled_titles_color = isset( $features_disabled_titles_color ) ? NorebroExtraFilter::string( $features_disabled_titles_color ) : false;
	$features_disabled_icons_color = isset( $features_disabled_icons_color ) ? NorebroExtraFilter::string( $features_disabled_icons_color ) : false;
	$readmore_button = isset( $readmore_button ) ? NorebroExtraFilter::string( $readmore_button ) : 'type=outline';
	
	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' )  : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false )  : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';

	if ( isset( $button_link ) ) {
		$button_link = NorebroExtraParser::VC_link_params( $button_link, array( 'caption' => __( 'Read more', 'norebro-extra' ) ) );
	} else {
		$button_link = NorebroExtraParser::VC_link_params( '', array( 'caption' => __( 'Read more', 'norebro-extra' ) ) );
	}

	if ( $features_value ) {
		foreach ($features_value as $feature_key => $feature_value) {
			if ( isset( $feature_value->feature_title ) ) {
				$features_value[$feature_key]->feature_title = NorebroExtraFilter::string( $feature_value->feature_title );
			} else {
				$features_value[$feature_key]->feature_title = false;
			}
			if ( isset( $feature_value->feature_icon ) ) {
				$features_value[$feature_key]->feature_icon = NorebroExtraFilter::string( $feature_value->feature_icon, 'attr' );
			} else {
				$features_value[$feature_key]->feature_icon = false;
			}
		}
	}

	if ( isset( $features_value_type3 ) && $features_value_type3 ) {
		foreach ($features_value_type3 as $feature_key => $feature_value) {
			if ( isset( $feature_value->feature_icon ) ) {
				$features_value_type3[$feature_key]->feature_icon = NorebroExtraFilter::string( $feature_value->feature_icon, 'string', 'yes' );
			} else {
				$features_value_type3[$feature_key]->feature_icon = 'yes';
			}
			$GLOBALS['norebro_icon_fonts'][] = 'my-icon-ui-cross';
		}
	}

	// Styling
	$pricing_table_uniqid = uniqid( 'norebro-custom-' );

	$pricing_table_settings = NorebroExtraParser::VC_color_to_CSS( $bg_color, 'background-color:{{color}};' );
	$borders_settings = NorebroExtraParser::VC_color_to_CSS( $borders_color, 'border-color:{{color}};' );
	$title_settings = NorebroExtraParser::VC_color_to_CSS( $title_color, 'color:{{color}};' );
	$subtitle_settings = NorebroExtraParser::VC_color_to_CSS( $subtitle_color, 'color:{{color}};' );
	$description_settings = NorebroExtraParser::VC_color_to_CSS( $description_color, 'color:{{color}};' );
	$price_settings = NorebroExtraParser::VC_color_to_CSS( $price_color, 'color:{{color}};' );
	$price_caption_settings = NorebroExtraParser::VC_color_to_CSS( $price_caption_color, 'color:{{color}};' );
	$price_caption_bg_settings = NorebroExtraParser::VC_color_to_CSS( $price_caption_bg_color, 'background-color:{{color}};' );
	$price_caption_settings .= $price_caption_bg_settings;
	$features_titles_settings = NorebroExtraParser::VC_color_to_CSS( $features_titles_color, 'color:{{color}};' );
	$features_icons_settings = NorebroExtraParser::VC_color_to_CSS( $features_icons_color, 'color:{{color}};' );
	$features_disabled_titles_settings = NorebroExtraParser::VC_color_to_CSS( $features_disabled_titles_color, 'color:{{color}};' );
	$features_disabled_icons_settings = NorebroExtraParser::VC_color_to_CSS( $features_disabled_icons_color, 'color:{{color}};' );

	// Read more button
	$readmore_button = preg_replace( '/\&amp\;/', '&', $readmore_button );
	parse_str( $readmore_button, $button_settings );
	$button_css = NorebroExtraParser::VC_button_to_css( $button_settings, (bool)( $readmore_button ) );

	$title_settings .= NorebroExtraParser::VC_typo_to_CSS( $title_typo );
	$subtitle_settings .= NorebroExtraParser::VC_typo_to_CSS( $subtitle_typo );
	$description_settings .= NorebroExtraParser::VC_typo_to_CSS( $description_typo );
	$price_settings .= NorebroExtraParser::VC_typo_to_CSS( $price_typo );
	$features_titles_settings .= NorebroExtraParser::VC_typo_to_CSS( $features_title_typo );

	NorebroExtraParser::VC_typo_custom_font( $title_typo );
	NorebroExtraParser::VC_typo_custom_font( $subtitle_typo );
	NorebroExtraParser::VC_typo_custom_font( $description_typo );
	NorebroExtraParser::VC_typo_custom_font( $price_typo );
	NorebroExtraParser::VC_typo_custom_font( $features_title_typo );
	NorebroExtraParser::VC_typo_custom_font( $features_subtitle_typo );

	$icons_collection = array();

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'pricing_table__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'pricing_table__view.php' );
	return ob_get_clean();
}
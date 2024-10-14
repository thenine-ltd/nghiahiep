<?php 

/**
* WPBakery Norebro Countdown shortcode
*/

add_shortcode( 'norebro_countdown', 'norebro_countdown_func' );

function norebro_countdown_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$layout = isset( $layout ) ? NorebroExtraFilter::string( $layout, 'string', 'default') : 'default';
	$countdown_classic = isset( $countdown_classic ) ? NorebroExtraFilter::boolean( $countdown_classic ) : false;
	$rounded_shape = isset( $rounded_shape ) ? NorebroExtraFilter::boolean( $rounded_shape ) : false;
	$countdown_date = isset( $countdown_date ) ? NorebroExtraFilter::string( $countdown_date, 'string', '2019/1/1 0:0:0') : '2019/1/1 0:0:0';

	$numbers_typo = isset( $numbers_typo ) ? NorebroExtraFilter::string( $numbers_typo ) : false;
	$titles_typo = isset( $titles_typo ) ? NorebroExtraFilter::string( $titles_typo ) : false;

	$numbers_color = isset( $numbers_color ) ? NorebroExtraFilter::string( $numbers_color, 'string', false ) : false;
	$titles_color = isset( $titles_color ) ? NorebroExtraFilter::string( $titles_color, 'string', false ) : false;
	$box_color = isset( $box_color ) ? NorebroExtraFilter::string( $box_color, 'string', false ) : false;
	$box_border_color = isset( $box_border_color ) ? NorebroExtraFilter::string( $box_border_color, 'string', false ) : false;
	$divider_dots_color = isset( $divider_dots_color ) ? NorebroExtraFilter::string( $divider_dots_color, 'string', false ) : false;

	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' )  : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false )  : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' ) : '';

	// Styling
	$countdown_box_uniqid = uniqid( 'norebro-custom-' );

	NorebroHelper::add_required_script( 'countdown-box' );

	$countdown_box_class = '';
	if ( $layout == 'boxed' ) {
		$countdown_box_class .= ' countdown-boxed';

		if ( $rounded_shape ) {
			$countdown_box_class .= ' rounded';
		}
	}
	if ( $countdown_classic ) {
		$countdown_box_class .= ' countdown-classic';
	}

	$box_bg_settings = NorebroExtraParser::VC_color_to_CSS( $box_color, 'background-color:{{color}};' );
	$numbers_settings = NorebroExtraParser::VC_color_to_CSS( $numbers_color, 'color:{{color}};' );
	$titles_settings = NorebroExtraParser::VC_color_to_CSS( $titles_color, 'color:{{color}};' );
	$dividers_settings = NorebroExtraParser::VC_color_to_CSS( $divider_dots_color, 'color:{{color}};' );

	NorebroExtraParser::VC_typo_custom_font( $numbers_typo );
	NorebroExtraParser::VC_typo_custom_font( $titles_typo );

	$numbers_settings .= NorebroExtraParser::VC_typo_to_CSS( $numbers_typo );
	$titles_settings .= NorebroExtraParser::VC_typo_to_CSS( $titles_typo );

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'countdown__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'countdown__view.php' );
	return ob_get_clean();
}
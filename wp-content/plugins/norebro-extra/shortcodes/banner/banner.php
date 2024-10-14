<?php 

/**
* WPBakery Norebro Banner shortcode
*/

add_shortcode( 'norebro_banner', 'norebro_banner_func' );

function norebro_banner_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$block_type_layout = isset( $block_type_layout ) ? NorebroExtraFilter::string( $block_type_layout, 'string', 'full' ) : 'full';
	$block_type_full_align = isset( $block_type_full_align ) ? NorebroExtraFilter::string( $block_type_full_align, 'string', 'left' ) : 'left';
	$block_type_inner_align = isset( $block_type_inner_align ) ? NorebroExtraFilter::string( $block_type_inner_align, 'string', 'top_left' ) : 'top_left';
	$block_type_subtitle = isset( $block_type_subtitle ) ? NorebroExtraFilter::string( $block_type_subtitle, 'string', 'after' ) : 'after';
	$inner_padding = isset( $inner_padding ) ? NorebroExtraFilter::string( $inner_padding ) : '30px';
	$title = isset( $title ) ? NorebroExtraFilter::string( $title ) : false;
	$subtitle = isset( $subtitle ) ? NorebroExtraFilter::string( $subtitle ) : false;
	$description = isset( $description ) ? rawurldecode( base64_decode( $description ) ) : '';
	$description = NorebroExtraFilter::string( $description, 'textarea', '' );
	$background_image = isset( $background_image ) ? NorebroExtraFilter::string( wp_get_attachment_url( NorebroExtraFilter::string( $background_image ) ), 'attr' ) : false;
	$use_link = isset( $use_link ) ? NorebroExtraFilter::boolean( $use_link ) : true;

	$readmore_button = isset( $readmore_button ) ? NorebroExtraFilter::string( $readmore_button ) : 'type=outline&size=small';

	$title_typo = isset( $title_typo ) ? NorebroExtraFilter::string( $title_typo ) : false;
	$subtitle_typo = isset( $subtitle_typo ) ? NorebroExtraFilter::string( $subtitle_typo ) : false;
	$description_typo = isset( $description_typo ) ? NorebroExtraFilter::string( $description_typo ) : false;
	$title_color = isset( $title_color ) ? NorebroExtraFilter::string( $title_color ) : false;
	$subtitle_color = isset( $subtitle_color ) ? NorebroExtraFilter::string( $subtitle_color ) : false;
	$description_color = isset( $description_color ) ? NorebroExtraFilter::string( $description_color ) : false;
	$overlay_color = isset( $overlay_color ) ? NorebroExtraFilter::string( $overlay_color ) : false;

	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' )  : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false )  : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );
	
	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';

	$link_url = NorebroExtraParser::VC_link_params( ( isset( $link_url ) ? $link_url : '' ), array( 'caption' => esc_html__( 'Read More', 'norebro-extra' ) ) );

	// Styling
	$banner_box_uniqid = uniqid( 'norebro-custom-' );

	$banner_box_class = 'banner-box';
	switch ( $block_type_layout ) {
		case 'boxed':
			$banner_box_class .= ' boxed';
			break;
		case 'inner':
			$banner_box_class .= ' inner';
			break;
		case 'inner_hover':
			$banner_box_class .= ' inner hover';
			break;
		case 'overlay_title':
			$banner_box_class .= ' overlay-title';
			break;
		case 'hover_title':
			$banner_box_class .= ' overlay-title hover';
			break;
	}
	switch ( $block_type_full_align ) {
		case 'center':
			$banner_box_class .= ' text-center';
			break;
		case 'right':
			$banner_box_class .= ' text-right';
			break;
	}

	$title_css = NorebroExtraParser::VC_typo_to_CSS( $title_typo );
	$title_css .= NorebroExtraParser::VC_color_to_CSS( $title_color, 'color:{{color}};' );

	$subtitle_css 	= NorebroExtraParser::VC_typo_to_CSS( $subtitle_typo );
	$subtitle_css 	.= NorebroExtraParser::VC_color_to_CSS( $subtitle_color, 'color:{{color}};' );

	$description_css = NorebroExtraParser::VC_typo_to_CSS( $description_typo );
	$description_css .= NorebroExtraParser::VC_color_to_CSS( $description_color, 'color:{{color}};' );

	$overlay_css = ( $overlay_color ) ? 'background-color: ' . $overlay_color : ';';
	$inner_padding_css = 'padding:' . $inner_padding . ';';

	$content_css = '';
	if ( $block_type_layout == 'boxed' || $block_type_layout == 'overlay_title' || $block_type_layout == 'hover_title' ) {
		$content_css = 'padding-left:' . $inner_padding .';padding-right:' . $inner_padding . ';';
	}

	$title_wrap_css = '';
	if ( $block_type_layout == 'overlay_title' ) {
		$title_wrap_css = 'padding:' . $inner_padding . ';';
	}
	if ( $block_type_layout == 'hover_title' ) {
		$title_wrap_css = 'padding-bottom:' . $inner_padding . ';';
	}

	$readmore_button = preg_replace( '/\&amp\;/', '&', $readmore_button );
	parse_str( $readmore_button, $button_settings );
	$button_css = NorebroExtraParser::VC_button_to_css( $button_settings );

	if ( $block_type_layout == 'inner' || $block_type_layout == 'inner_hover' ) {
		$button_css['css'] .= 'bottom:' . $inner_padding . ';';
	}

	NorebroExtraParser::VC_typo_custom_font( $title_typo );
	NorebroExtraParser::VC_typo_custom_font( $subtitle_typo );
	NorebroExtraParser::VC_typo_custom_font( $description_typo );

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'banner__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'banner__view.php' );
	return ob_get_clean();
}
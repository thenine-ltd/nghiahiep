<?php 

/**
* WPBakery Norebro Testimonial shortcode
*/

add_shortcode( 'norebro_testimonial', 'norebro_testimonial_func' );

function norebro_testimonial_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$block_type_layout = ( isset( $block_type_layout ) ) ? NorebroExtraFilter::string( $block_type_layout, 'string', 'default' ) : 'default';
	$block_type_alignment_default = isset( $block_type_alignment_default ) ? NorebroExtraFilter::string( $block_type_alignment_default, 'string', 'center' ) : 'center';
	$block_type_alignment_top = isset( $block_type_alignment_top ) ? NorebroExtraFilter::string( $block_type_alignment_top, 'string', 'center' ) : 'center';
	$block_type_alignment_middle = isset( $block_type_alignment_middle ) ? NorebroExtraFilter::string( $block_type_alignment_middle, 'string', 'center' ) : 'center';
	$quote = isset( $quote ) ? NorebroExtraFilter::string( $quote, 'textarea', '' ) : '';
	$author = isset( $author ) ? NorebroExtraFilter::string( $author, 'string', '' ) : '';
	$position = isset( $position ) ? NorebroExtraFilter::string( $position, 'string', '' ) : '';
	$photo = isset( $photo ) ? NorebroExtraFilter::string( wp_get_attachment_url( NorebroExtraFilter::string( $photo ) ), 'attr' ) : false;

	$quote_typo = isset( $quote_typo ) ? NorebroExtraFilter::string( $quote_typo ) : false;
	$author_typo = isset( $author_typo ) ? NorebroExtraFilter::string( $author_typo ) : false;
	$position_typo = isset( $position_typo ) ? NorebroExtraFilter::string( $position_typo ) : false;

	$image_border_color = isset( $image_border_color ) ? NorebroExtraFilter::string( $image_border_color ) : false;
	$quote_color = isset( $quote_color ) ? NorebroExtraFilter::string( $quote_color ) : false;
	$author_color = isset( $author_color ) ? NorebroExtraFilter::string( $author_color ) : false;
	$position_color = isset( $position_color ) ? NorebroExtraFilter::string( $position_color ) : false;

	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' ) : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false ) : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = ( isset( $css_class ) ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';

	$type_class = '';
	switch ( $block_type_layout ) {
		case 'photo_top':
			$type_class .= ' top-avatar';
			if ( $block_type_alignment_top == 'left' ) {
				$type_class .= ' text-left';
			}
			if ( $block_type_alignment_top == 'right' ) {
				$type_class .= ' text-right';
			}
			break;
		case 'photo_middle':
			$type_class .= ' middle-avatar';
			if ( $block_type_alignment_middle == 'left' ) {
				$type_class .= ' text-left';
			}
			if ( $block_type_alignment_middle == 'right' ) {
				$type_class .= ' text-right';
			}
			break;
		default:
			if ( $block_type_alignment_default == 'left' ) {
				$type_class .= ' text-left';
			}
			if ( $block_type_alignment_default == 'right' ) {
				$type_class .= ' text-right';
			}
			break;
	}

	// Styling
	$testimonial_uniqid = uniqid( 'norebro-custom-' );

	$image_settings = NorebroExtraParser::VC_color_to_CSS( $image_border_color, 'border-color:{{color}};' );
	$quote_settings = NorebroExtraParser::VC_color_to_CSS( $quote_color, 'color:{{color}};' );
	$author_settings = NorebroExtraParser::VC_color_to_CSS( $author_color, 'color:{{color}};' );
	$position_settings = NorebroExtraParser::VC_color_to_CSS( $position_color, 'color:{{color}};' );

	$quote_settings .= NorebroExtraParser::VC_typo_to_CSS( $quote_typo );
	$author_settings .= NorebroExtraParser::VC_typo_to_CSS( $author_typo );
	$position_settings .= NorebroExtraParser::VC_typo_to_CSS( $position_typo );

	NorebroExtraParser::VC_typo_custom_font( $quote_typo );
	NorebroExtraParser::VC_typo_custom_font( $author_typo );
	NorebroExtraParser::VC_typo_custom_font( $position_typo );

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'testimonial__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'testimonial__view.php' );
	return ob_get_clean();
}


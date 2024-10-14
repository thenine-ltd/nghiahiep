<?php

/**
* WPBakery Norebro Gallery shortcode
*/

add_shortcode( 'norebro_gallery', 'norebro_gallery_func' );

function norebro_gallery_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$gallery = isset( $content_images ) ? NorebroExtraFilter::string( $content_images, 'string', '' ) : '';


	$images_size = isset( $images_size ) ? NorebroExtraFilter::string( $images_size, 'string', '' ) : 'thumbnail';
	$hide_overlay = isset( $hide_overlay ) ? NorebroExtraFilter::boolean( $hide_overlay ) : false;
	$show_title = isset( $show_title ) ? NorebroExtraFilter::boolean( $show_title ) : false;

	$masonry_grid = isset( $masonry_grid ) ? NorebroExtraFilter::boolean( $masonry_grid ) : false;
	$metro_style = isset( $metro_style ) ? NorebroExtraFilter::boolean( $metro_style ) : false;
	$gap = isset( $gap ) ? ' ' . NorebroExtraFilter::string( $gap, 'attr', '15px' )  : '15px';
	$columns = isset( $columns ) ? NorebroExtraFilter::string( $columns, 'attr', '4-3-2-1' ) : '4-3-2-1';

	$use_pagination = isset( $use_pagination ) ? NorebroExtraFilter::boolean( $use_pagination ) : false;
	$pagination_type = isset( $pagination_type ) ? NorebroExtraFilter::string( $pagination_type, 'attr', 'simple' ) : 'simple';
	$pagination_items_per_page = isset( $pagination_items_per_page ) ? NorebroExtraFilter::string( $pagination_items_per_page, 'string', '6' ) : '6';

	$overlay_color = isset( $overlay_color ) ? NorebroExtraFilter::string( $overlay_color ) : false;
	$title_color = isset( $title_color ) ? NorebroExtraFilter::string( $title_color ) : false;
	$icon_color = isset( $icon_color ) ? NorebroExtraFilter::string( $icon_color ) : false;
	$gallery_bg_color = isset( $gallery_bg_color ) ? NorebroExtraFilter::string( $gallery_bg_color ) : false;
	$gallery_title_color = isset( $gallery_title_color ) ? NorebroExtraFilter::string( $gallery_title_color ) : false;
	$gallery_subtitle_color = isset( $gallery_subtitle_color ) ? NorebroExtraFilter::string( $gallery_subtitle_color ) : false;
	$gallery_buttons_color = isset( $gallery_buttons_color ) ? NorebroExtraFilter::string( $gallery_buttons_color ) : false;
	$slider_nav_bg_color = isset( $slider_nav_bg_color ) ? NorebroExtraFilter::string( $slider_nav_bg_color ) : false;
	$slider_nav_color = isset( $slider_nav_color ) ? NorebroExtraFilter::string( $slider_nav_color ) : false;

	$pagination_color = isset( $pagination_color ) ? NorebroExtraFilter::string( $pagination_color ) : false;
	$pagination_active_color = isset( $pagination_active_color ) ? NorebroExtraFilter::string( $pagination_active_color ) : false;

	$appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' )  : 'none';
	$appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false )  : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';


	$gallery = explode( ',', $gallery );

	$_gallery = array();
	foreach ($gallery as $media_id) {
		$_image_url = wp_get_attachment_image_url($media_id, $images_size);
		$_image_full = wp_get_attachment_image_url($media_id, 'full');
		$_caption = wp_get_attachment_metadata($media_id);
		$_caption = $_caption['image_meta']['caption'];

		$_gallery[] = array(
			'url' => $_image_url,
			'full' => $_image_full,
			'title' => get_the_title($media_id),
			'caption' => $_caption,
			'alt' => get_post_meta( $media_id, '_wp_attachment_image_alt', true)
		);
	}
	$gallery = $_gallery;


	// Styling
	$gallery_uniqid = uniqid( 'norebro-custom-' );
	$images_uniqid = uniqid( 'norebro-custom-images-' );
	$gallery_int_uniqid = uniqid( 'gallery-' );

	$overlay_settings = NorebroExtraParser::VC_color_to_CSS( $overlay_color, 'background-color:{{color}};' );
	$title_settings = NorebroExtraParser::VC_color_to_CSS( $title_color, 'color:{{color}};' );
	$icon_settings = NorebroExtraParser::VC_color_to_CSS( $icon_color, 'color:{{color}};' );
	$gallery_bg_settings = NorebroExtraParser::VC_color_to_CSS( $gallery_bg_color, 'background-color:{{color}};' );
	$gallery_title_settings = NorebroExtraParser::VC_color_to_CSS( $gallery_title_color, 'color:{{color}};' );
	$gallery_subtitle_settings = NorebroExtraParser::VC_color_to_CSS( $gallery_subtitle_color, 'color:{{color}};' );
	$gallery_buttons_settings = NorebroExtraParser::VC_color_to_CSS( $gallery_buttons_color, 'color:{{color}};' );
	$slider_nav_bg_settings = NorebroExtraParser::VC_color_to_CSS( $slider_nav_bg_color, 'background-color:{{color}};' );
	$slider_nav_settings = NorebroExtraParser::VC_color_to_CSS( $slider_nav_color, 'color:{{color}};' );

	$pagination_class = $pagination_css = $pagination_hover_css = '';
	if ( $use_pagination ) {
		$pagination_css = NorebroExtraParser::VC_color_to_CSS( $pagination_color, 'color:{{color}};' );
		$pagination_hover_css = NorebroExtraParser::VC_color_to_CSS( $pagination_active_color, 'color:{{color}};' );
	}

	$gallery_class = 'gallery-wrap';

	$overlay_class = '';

	if ( $hide_overlay ) {
		$overlay_class .= ' hidden';
	}
	else if ( $show_title ) {
		$overlay_class .= ' with-title';
	}

	$column_class = NorebroExtraParser::VC_columns_to_CSS( $columns );
	if ( $metro_style ) {
		$column_class .= ' metro-style';
	}

	$gallery_object = (object) array();
	$gallery_object->navClass = ( $slider_nav_bg_color == 'brand' ) ? 'brand-bg-color-i' : '';
	$gallery_object->navClass .=( $slider_nav_color == 'brand' ) ? ' brand-color-i' : '';
	$gallery_json = json_encode( $gallery_object );
	// $gallery_json .= ' "navClass": "' . (( $slider_nav_bg_color == 'brand' ) ? 'brand-bg-color-i' : '') . ( ( $slider_nav_color == 'brand' ) ? ' brand-color-i' : '' ) . '",';
	// $gallery_json[ strlen( $gallery_json ) - 1 ] = '}';

	$images_css = ( $gap ) ? 'padding:' . $gap . ';' : '';

	// Assembling
	include( plugin_dir_path( __FILE__ ) . 'gallery__style.php' );
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'gallery__view.php' );
	return ob_get_clean();
}

<?php 

/**
* WPBakery Norebro Social Networks shortcode
*/

add_shortcode( 'norebro_social_networks', 'norebro_social_networks_func' );

function norebro_social_networks_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$icon_layout = isset( $icon_layout ) ? NorebroExtraFilter::string( $icon_layout, 'string', 'fill') : 'fill';
	$alignment = isset( $alignment ) ? ' ' . NorebroExtraFilter::string( $alignment, 'string', 'center' ) : 'center';
	$small_shapes = isset( $small_shapes ) ? NorebroExtraFilter::boolean( $small_shapes ) : false;
	$shape_squared = isset( $shape_squared ) ? NorebroExtraFilter::boolean( $shape_squared ) : false;
	$shape_shadow = isset( $shape_shadow ) ? NorebroExtraFilter::boolean( $shape_shadow ) : true;
	$type_links = isset( $type_links ) ? NorebroExtraFilter::string( $type_links, 'string', 'share' ) : 'share';

	$facebook = isset( $facebook ) ? NorebroExtraFilter::boolean( $facebook ) : true;
	$twitter = isset( $twitter ) ? NorebroExtraFilter::boolean( $twitter ) : true;
	$pinterest = isset( $pinterest ) ? NorebroExtraFilter::boolean( $pinterest ) : true;
	$linkedin = isset( $linkedin ) ? NorebroExtraFilter::boolean( $linkedin ) : true;

	$facebook_link_custom = isset( $facebook_link_custom ) ? ' ' . NorebroExtraFilter::string( $facebook_link_custom, 'attr', '' ) : '';
	$twitter_link_custom = isset( $twitter_link_custom ) ? ' ' . NorebroExtraFilter::string( $twitter_link_custom, 'attr', '' ) : '';
	$instagram_link_custom = isset( $instagram_link_custom ) ? ' ' . NorebroExtraFilter::string( $instagram_link_custom, 'attr', '' ) : '';
	$dribbble_link_custom = isset( $dribbble_link_custom ) ? ' ' . NorebroExtraFilter::string( $dribbble_link_custom, 'attr', '' ) : '';
	$pinterest_link_custom = isset( $pinterest_link_custom ) ? ' ' . NorebroExtraFilter::string( $pinterest_link_custom, 'attr', '' ) : '';
	$linkedin_link_custom = isset( $linkedin_link_custom ) ? ' ' . NorebroExtraFilter::string( $linkedin_link_custom, 'attr', '' ) : '';
	$github_link_custom = isset( $github_link_custom ) ? ' ' . NorebroExtraFilter::string( $github_link_custom, 'attr', '' ) : '';
	$dropbox_link_custom = isset( $dropbox_link_custom ) ? ' ' . NorebroExtraFilter::string( $dropbox_link_custom, 'attr', '' ) : '';
	$youtube_link_custom = isset( $youtube_link_custom ) ? ' ' . NorebroExtraFilter::string( $youtube_link_custom, 'attr', '' ) : '';
	$vimeo_link_custom = isset( $vimeo_link_custom ) ? ' ' . NorebroExtraFilter::string( $vimeo_link_custom, 'attr', '' ) : '';
	$behance_link_custom = isset( $behance_link_custom ) ? ' ' . NorebroExtraFilter::string( $behance_link_custom, 'attr', '' ) : '';
	$tumblr_link_custom = isset( $tumblr_link_custom ) ? ' ' . NorebroExtraFilter::string( $tumblr_link_custom, 'attr', '' ) : '';
	$flickr_link_custom = isset( $flickr_link_custom ) ? ' ' . NorebroExtraFilter::string( $flickr_link_custom, 'attr', '' ) : '';
	$reddit_link_custom = isset( $reddit_link_custom ) ? ' ' . NorebroExtraFilter::string( $reddit_link_custom, 'attr', '' ) : '';
	$snapchat_link_custom = isset( $snapchat_link_custom ) ? ' ' . NorebroExtraFilter::string( $snapchat_link_custom, 'attr', '' ) : '';
	$whatsapp_link_custom = isset( $whatsapp_link_custom ) ? ' ' . NorebroExtraFilter::string( $whatsapp_link_custom, 'attr', '' ) : '';
	$quora_link_custom = isset( $quora_link_custom ) ? ' ' . NorebroExtraFilter::string( $quora_link_custom, 'attr', '' ) : '';
	$vine_link_custom = isset( $vine_link_custom ) ? ' ' . NorebroExtraFilter::string( $vine_link_custom, 'attr', '' ) : '';
	$digg_link_custom = isset( $digg_link_custom ) ? ' ' . NorebroExtraFilter::string( $digg_link_custom, 'attr', '' ) : '';
	$tripadvisor_link_custom = isset( $tripadvisor_link_custom ) ? ' ' . NorebroExtraFilter::string( $tripadvisor_link_custom, 'attr', '' ) : '';

	$outline_hover = isset( $outline_hover ) ? NorebroExtraFilter::boolean( $outline_hover ) : false;
	$default_colors = isset( $default_colors ) ? NorebroExtraFilter::boolean( $default_colors ) : true;
	$hover_default_colors = isset( $hover_default_colors ) ? NorebroExtraFilter::boolean( $hover_default_colors ) : false;
	$color = isset( $color ) ? NorebroExtraFilter::string( $color, 'string', false ) : false;
	$icon_color = isset( $icon_color ) ? NorebroExtraFilter::string( $icon_color, 'string', false ) : false;
	$icon_hover_color = isset( $icon_hover_color ) ? NorebroExtraFilter::string( $icon_hover_color, 'string', false ) : false;
	
	$appearance_effect = ( isset( $appearance_effect ) ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' ) : 'none';
	$appearance_duration = ( isset( $appearance_duration ) ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false ) : false;
	if ( $appearance_duration ) $appearance_duration = intval( str_replace( 'ms', '', $appearance_duration ) );

	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' ) : '';
	
	$facebook_link = $twitter_link = $dribbble_link = $pinterest_link = $linkedin_link = $github_link = $instagram_link = $dropbox_link = $youtube_link = $vimeo_link = $behance_link = $tumblr_link = $flickr_link = $reddit_link = $snapchat_link = $whatsapp_link = $quora_link = $vine_link = $digg_link = false;

	if ( $type_links == 'custom' ) {
		$facebook_link = $facebook_link_custom;
		$twitter_link = $twitter_link_custom;
		$dribbble_link = $dribbble_link_custom;
		$pinterest_link = $pinterest_link_custom;
		$linkedin_link = $linkedin_link_custom;
		$github_link = $github_link_custom;
		$instagram_link = $instagram_link_custom;
		$dropbox_link = $dropbox_link_custom;
		$youtube_link = $youtube_link_custom;
		$vimeo_link = $vimeo_link_custom;
		$behance_link = $behance_link_custom;
		$tumblr_link = $tumblr_link_custom;
		$flickr_link = $flickr_link_custom;
		$reddit_link = $reddit_link_custom;
		$snapchat_link = $snapchat_link_custom;
		$whatsapp_link = $whatsapp_link_custom;
		$quora_link = $quora_link_custom;
		$vine_link = $vine_link_custom;
		$digg_link = $digg_link_custom;
		$tripadvisor_link = $tripadvisor_link_custom;
	} else {
		$facebook_link = ( $facebook ) ? 'https://www.facebook.com/sharer/sharer.php?u=' . get_permalink() : '';
		$twitter_link = ( $twitter ) ? 'https://twitter.com/intent/tweet?text=' . get_permalink() : '';
		$pinterest_link = ( $pinterest ) ? 'http://pinterest.com/pin/create/button/?url=' . urlencode( get_permalink() ) . '&description=' . urlencode( 'title' ) : '';
		$linkedin_link = ( $linkedin ) ? 'https://www.linkedin.com/shareArticle?mini=true&url=' . urlencode( get_permalink() ) . '&title=' . urlencode( 'title' ) . '&source=' . urlencode( get_bloginfo( 'name' ) ) : '';
	}

	// Styling
	$social_bar_uniqid = uniqid( 'norebro-custom-' );

	$link_class = '';
	$socialbar_class = ' text-' . trim( $alignment );

	if ( $shape_squared ) {
		$socialbar_class .= ' squared';
	}

	if ( $type_links == 'custom' ) {
		$socialbar_class .= ' new-tab-links';
	}

	switch ( $icon_layout ) {
		case 'outline':
			$socialbar_class .= ' outline';
			break;
		case 'flat':
			$socialbar_class .= ' flat';
			break;
		case 'inline':
		case 'text':
			$socialbar_class .= ' inline';
			$link_class .= ' hover-underline';
			break;
		case 'boxed':
			$socialbar_class .= ' boxed';
			break;
	}

	$links_count = 0;
	if ( $facebook_link ) { 
		$links_count++;
	}
	if ( $twitter_link ) { 
		$links_count++;
	}
	if ( $dribbble_link ) { 
		$links_count++;
	}
	if ( $pinterest_link ) { 
		$links_count++;
	}
	if ( $linkedin_link ) { 
		$links_count++;
	}
	if ( $github_link ) { 
		$links_count++;
	}
	if ( $instagram_link ) { 
		$links_count++;
	}
	if ( $dropbox_link ) { 
		$links_count++;
	}
	if ( $youtube_link ) {
		$links_count++;
	}
	if ( $vimeo_link ) {
		$links_count++;
	}
	if ( $behance_link ) {
		$links_count++;
	}
	if ( $tumblr_link ) {
		$links_count++;
	}
	if ( $flickr_link ) {
		$links_count++;
	}
	if ( $reddit_link ) {
		$links_count++;
	}
	if ( $snapchat_link ) {
		$links_count++;
	}
	if ( $whatsapp_link ) {
		$links_count++;
	}
	if ( $quora_link ) {
		$links_count++;
	}
	if ( $vine_link ) {
		$links_count++;
	}
	if ( $digg_link ) {
		$links_count++;
	}



	$socialbar_class .= ' social-column-' . $links_count;

	if ( $shape_shadow && $icon_layout != 'boxed' ) {
		$socialbar_class .= ' shadow';
	}
	if ( $default_colors ) {
		$socialbar_class .= ' default';
	}
	if ( $hover_default_colors ) {
		$socialbar_class .= ' hover-default';
	}
	if ( $small_shapes ) {
		$socialbar_class .= ' small';
	}
	if ( $outline_hover && $icon_layout == 'flat' ) {
		$socialbar_class .= ' outline-hover';
	}

	$color_css = $color_css_before = $color_css_hover = '';
	if ( $color ) {
		if ( $color != 'brand' ){
			switch ( $icon_layout ) {
				case 'outline':
					$color_css = 'color:{{color}};border-color:{{color}};';
					$color_css_hover = 'background-color:{{color}};color:#fff;';
					break;
				case 'fill':
					$color_css = 'background-color:{{color}};color:#fff;border-color:{{color}};';
					$color_css_hover = 'background-color:transparent;color:{{color}};';
					break;
				case 'flat':
					$color_css = 'color:{{color}};';
					$color_css_hover = 'background-color:{{color}};color:#fff;';
					break;
				case 'boxed':
					$color_css = 'background-color:{{color}}; color:#fff;';
					$color_css_hover = 'color:{{color}};background-color:transparent;';
					break;
				case 'inline':
				case 'text':
					$color_css = 'color:#fff;';
					$color_css_hover = 'color:{{color}};';
					$color_css_before = 'background-color:{{color}};';
					break;
			}
		} else {
			$socialbar_class .= ' brand';
		}
	}

	$color_css = NorebroExtraParser::VC_color_to_CSS( $color, $color_css );
	$color_css_hover = NorebroExtraParser::VC_color_to_CSS( $color, $color_css_hover );
	$icon_color_css = NorebroExtraParser::VC_color_to_CSS( $icon_color, 'color:{{color}};' );
	$icon_hover_color_css = NorebroExtraParser::VC_color_to_CSS( $icon_hover_color, 'color:{{color}};' );

	if ( /*$hide_border &&*/ $icon_layout == 'fill' ) {
		$color_css .= 'border-width:0px;';
	}

	$show_text = false;
	if ( $icon_layout == 'boxed' || $icon_layout == 'inline' || $icon_layout == 'text' ) {
		$show_text = true;
	}

	$show_icon = true;
	if ( $icon_layout == 'text' ) {
		$show_icon = false;
	}

	// Assembling
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'social_networks__style.php' );
	include( plugin_dir_path( __FILE__ ) . 'social_networks__view.php' );
	return ob_get_clean();
}
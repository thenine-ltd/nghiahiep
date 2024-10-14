<?php 

/**
* WPBakery Norebro Team member inner shortcode
*/

add_shortcode( 'norebro_team_member_inner', 'norebro_team_member_inner_func' );

function norebro_team_member_inner_func( $atts ) {
	if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

	// Default values, parsing and filtering
	$name = isset( $name ) ? NorebroExtraFilter::string( $name, 'string', '' ) : '';
	$position = isset( $position ) ? NorebroExtraFilter::string( $position, 'string', '' ) : '';
	$description = isset( $description ) ? NorebroExtraFilter::string( $description, 'textarea', '' ) : '';
	$photo = isset( $photo ) ? NorebroExtraFilter::string( wp_get_attachment_url( NorebroExtraFilter::string( $photo ) ), 'attr' ) : false;
	$member_link = isset( $member_link ) ? NorebroExtraFilter::string( $member_link ) : false;

	$facebook_link = isset( $facebook_link ) ?  NorebroExtraFilter::string( $facebook_link, 'url' ) : false;
	$twitter_link = isset( $twitter_link ) ?  NorebroExtraFilter::string( $twitter_link, 'url' ) : false;
	$instagram_link = isset( $instagram_link ) ?  NorebroExtraFilter::string( $instagram_link, 'url' ) : false;
	$dribbble_link = isset( $dribbble_link ) ?  NorebroExtraFilter::string( $dribbble_link, 'url' ) : false;
	$pinterest_link = isset( $pinterest_link ) ?  NorebroExtraFilter::string( $pinterest_link, 'url' ) : false;
	$linkedin_link = isset( $linkedin_link ) ?  NorebroExtraFilter::string( $linkedin_link, 'url' ) : false;
	$github_link = isset( $github_link ) ?  NorebroExtraFilter::string( $github_link, 'url' ) : false;
	$youtube_link = isset( $youtube_link ) ?  NorebroExtraFilter::string( $youtube_link, 'url' ) : false;
	$vimeo_link = isset( $vimeo_link ) ?  NorebroExtraFilter::string( $vimeo_link, 'url' ) : false;
	$behance_link = isset( $behance_link ) ?  NorebroExtraFilter::string( $behance_link, 'url' ) : false;
	$tumblr_link = isset( $tumblr_link ) ?  NorebroExtraFilter::string( $tumblr_link, 'url' ) : false;
	$flickr_link = isset( $flickr_link ) ?  NorebroExtraFilter::string( $flickr_link, 'url' ) : false;
	$reddit_link = isset( $reddit_link ) ?  NorebroExtraFilter::string( $reddit_link, 'url' ) : false;
	$snapchat_link = isset( $snapchat_link ) ?  NorebroExtraFilter::string( $snapchat_link, 'url' ) : false;
	$whatsapp_link = isset( $whatsapp_link ) ?  NorebroExtraFilter::string( $whatsapp_link, 'url' ) : false;
	$quora_link = isset( $quora_link ) ?  NorebroExtraFilter::string( $quora_link, 'url' ) : false;
	$vine_link = isset( $vine_link ) ?  NorebroExtraFilter::string( $vine_link, 'url' ) : false;
	$digg_link = isset( $digg_link ) ?  NorebroExtraFilter::string( $digg_link, 'url' ) : false;
	$tiktok_link = isset( $tiktok_link ) ?  NorebroExtraFilter::string( $tiktok_link, 'url' ) : false;
	$twitch_link = isset( $twitch_link ) ?  NorebroExtraFilter::string( $twitch_link, 'url' ) : false;
	$mixer_link = isset( $mixer_link ) ?  NorebroExtraFilter::string( $mixer_link, 'url' ) : false;
	$telegram_link = isset( $telegram_link ) ?  NorebroExtraFilter::string( $telegram_link, 'url' ) : false;
	$soundcloud_link = isset( $soundcloud_link ) ?  NorebroExtraFilter::string( $soundcloud_link, 'url' ) : false;
	$spotify_link = isset( $spotify_link ) ?  NorebroExtraFilter::string( $spotify_link, 'url' ) : false;
	$discord_link = isset( $discord_link ) ?  NorebroExtraFilter::string( $discord_link, 'url' ) : false;
	$teamspeak_link = isset( $teamspeak_link ) ?  NorebroExtraFilter::string( $teamspeak_link, 'url' ) : false;
	$kaggle_link = isset( $kaggle_link ) ?  NorebroExtraFilter::string( $kaggle_link, 'url' ) : false;
	$medium_link = isset( $medium_link ) ?  NorebroExtraFilter::string( $medium_link, 'url' ) : false;
	$xing_link = isset( $xing_link ) ?  NorebroExtraFilter::string( $xing_link, 'url' ) : false;
	
	$name_typo = isset( $name_typo ) ? NorebroExtraFilter::string( $name_typo ) : false;
	$position_typo = isset( $position_typo ) ? NorebroExtraFilter::string( $position_typo ) : false;
	$desription_typo = isset( $desription_typo ) ? NorebroExtraFilter::string( $desription_typo ) : false;
	
	$overlay_color = isset( $overlay_color ) ? NorebroExtraFilter::string( $overlay_color ) : false;
	$name_color = isset( $name_color ) ? NorebroExtraFilter::string( $name_color ) : false;
	$position_color = isset( $position_color ) ? NorebroExtraFilter::string( $position_color ) : false;
	$description_color = isset( $description_color ) ? NorebroExtraFilter::string( $description_color ) : false;
	$social_color = isset( $social_color ) ? NorebroExtraFilter::string( $social_color ) : false;
	$social_hover_color = isset( $social_hover_color ) ? NorebroExtraFilter::string( $social_hover_color ) : false;

	$css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' )  : '';

	// Styling
	$team_member_uniqid = uniqid( 'norebro-custom-' );

	$overlay_settings = NorebroExtraParser::VC_color_to_CSS( $overlay_color, 'background:{{color}};' );
	$name_settings = NorebroExtraParser::VC_color_to_CSS( $name_color, 'color:{{color}};' );
	$position_settings = NorebroExtraParser::VC_color_to_CSS( $position_color, 'color:{{color}};' );
	$description_settings = NorebroExtraParser::VC_color_to_CSS( $description_color, 'color:{{color}};' );
	$social_settings = NorebroExtraParser::VC_color_to_CSS( $social_color, 'background-color:{{color}};border-color:{{color}};' );
	$social_hover_settings = NorebroExtraParser::VC_color_to_CSS( $social_hover_color, 'color:{{color}};border-color:{{color}};background:transparent;' );

	if( !$social_hover_settings && $name_color ) {
		$social_hover_settings = 'background:transparent;';
	}

	$social_settings_class = '';
	if ( !$social_color ) {
		$social_settings_class .= ' default';
	}

	$name_settings .= NorebroExtraParser::VC_typo_to_CSS( $name_typo );
	$position_settings .= NorebroExtraParser::VC_typo_to_CSS( $position_typo );
	$description_settings .= NorebroExtraParser::VC_typo_to_CSS( $desription_typo );

	NorebroExtraParser::VC_typo_custom_font( $name_typo );
	NorebroExtraParser::VC_typo_custom_font( $position_typo );
	NorebroExtraParser::VC_typo_custom_font( $desription_typo );

	$social_bar = ( $facebook_link || $twitter_link || $dribbble_link || $pinterest_link || $github_link || $instagram_link || $linkedin_link );

	// Assembling
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'team_member_inner__style.php' );
	include( plugin_dir_path( __FILE__ ) . 'team_member_inner__view.php' );
	return ob_get_clean();
}
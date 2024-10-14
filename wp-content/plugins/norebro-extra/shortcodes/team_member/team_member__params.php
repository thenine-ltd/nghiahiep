<?php

/**
* WPBakery Norebro Team Member shortcode params
*/

vc_map( array(
		'name' => __( 'Team Member', 'norebro-extra' ),
		'description' => __( 'Team member block', 'norebro-extra' ),
		'base' => 'norebro_team_member',
		'category' => __( 'Norebro', 'norebro-extra' ),
		'icon' => plugin_dir_url( __FILE__ ) . 'images/icon.svg',
		'js_view' => 'VcNorebroTeamMemberView',
		'custom_markup' => '{{title}}<div class="vc_norebro_team_member-container">
				<div class="_contain">
					<div class="photo" style="background-image: url(\'' . plugin_dir_url( __FILE__ ) . 'images/sc_gap_user.svg\');"></div>
					<div class="name">%%name%%</div>
					<div class="position"></div>
				</div>
				<div class="lines"><div class="line"></div><div class="line"></div></div>
			</div>',
		'params' => array(
			// General
			array(
				'type' => 'norebro_choose_box',
				'group' => __( 'General', 'norebro-extra' ),
				'heading' => __( 'Team member layout', 'norebro-extra' ),
				'param_name' => 'block_type_layout',
				'value' => array(
					array(
						'icon' => plugin_dir_url( __FILE__ ) . 'images/wpb_params_062.svg',
						'key' => 'full',
						'title' => __( 'Card details', 'norebro-extra' ),
					),
					array(
						'icon' => plugin_dir_url( __FILE__ ) . 'images/wpb_params_063.svg',
						'key' => 'inner',
						'title' => __( 'Inner details', 'norebro-extra' ),
					)
				)
			),
			array(
				'type' => 'attach_image',
				'group' => __( 'General', 'norebro-extra' ),
				'heading' => __( 'Team member photo', 'norebro-extra' ),
				'param_name' => 'photo',
				'description' => __( 'Choose member photo.', 'norebro-extra' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'em',
				'group' => __( 'General', 'norebro-extra' ),
				'heading' => __( 'Team member name', 'norebro-extra' ),
				'param_name' => 'name',
				'description' => __( 'Team member name.', 'norebro-extra' ),
			),
			array(
				'type' => 'textfield',
				'group' => __( 'General', 'norebro-extra' ),
				'heading' => __( 'Team member position', 'norebro-extra' ),
				'param_name' => 'position',
				'description' => __( 'For example, <em>Product manager at Colabr.io</em>.', 'norebro-extra' ),
			),
			array(
				'type' => 'textarea',
				'group' => __( 'General', 'norebro-extra' ),
				'heading' => __( 'About team member', 'norebro-extra' ),
				'param_name' => 'description',
				'description' => __( 'Tell what this remarkable team member in your team.', 'norebro-extra' ),
			),
			array(
				'type' => 'textfield',
				'group' => __( 'General', 'norebro-extra' ),
				'heading' => __( 'Custom link', 'norebro-extra' ),
				'param_name' => 'member_link',
				'description' => __( 'Enter link to team member profile', 'norebro-extra' ),
			),

			// Social links

			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-behance"></i> ' . __( 'Behance', 'norebro-extra' ),
				'param_name' => 'behance_link'
			),
            array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-digg"></i> ' . __( 'Digg', 'norebro-extra' ),
				'param_name' => 'digg_link'
			),
            array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-discord"></i> ' . __( 'Discord', 'norebro-extra' ),
				'param_name' => 'discord_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-dribbble"></i> ' . __( 'Dribbble', 'norebro-extra' ),
				'param_name' => 'dribbble_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-facebook-f"></i> ' . __( 'Facebook', 'norebro-extra' ),
				'param_name' => 'facebook_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-flickr"></i> ' . __( 'Flickr', 'norebro-extra' ),
				'param_name' => 'flickr_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-github"></i> ' . __( 'GitHub', 'norebro-extra' ),
				'param_name' => 'github_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-instagram"></i> ' . __( 'Instagram', 'norebro-extra' ),
				'param_name' => 'instagram_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-kaggle"></i> ' . __( 'Kaggle', 'norebro-extra' ),
				'param_name' => 'kaggle_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-linkedin"></i> ' . __( 'LinkedIn', 'norebro-extra' ),
				'param_name' => 'linkedin_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-medium-m"></i> ' . __( 'Medium', 'norebro-extra' ),
				'param_name' => 'medium_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-mixer"></i> ' . __( 'Mixer', 'norebro-extra' ),
				'param_name' => 'mixer_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-pinterest"></i> ' . __( 'Pinterest', 'norebro-extra' ),
				'param_name' => 'pinterest_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-quora"></i> ' . __( 'Quora', 'norebro-extra' ),
				'param_name' => 'quora_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-reddit"></i> ' . __( 'Reddit', 'norebro-extra' ),
				'param_name' => 'reddit_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-snapchat"></i> ' . __( 'Snapchat', 'norebro-extra' ),
				'param_name' => 'snapchat_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-soundcloud"></i> ' . __( 'SoundCloud', 'norebro-extra' ),
				'param_name' => 'soundcloud_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-spotify"></i> ' . __( 'Spotify', 'norebro-extra' ),
				'param_name' => 'spotify_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-teamspeak"></i> ' . __( 'TeamSpeak', 'norebro-extra' ),
				'param_name' => 'teamspeak_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-telegram-plane"></i> ' . __( 'Telegram', 'norebro-extra' ),
				'param_name' => 'telegram_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-tiktok"></i> ' . __( 'TikTok', 'norebro-extra' ),
				'param_name' => 'tiktok_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-tumblr"></i> ' . __( 'Tumblr', 'norebro-extra' ),
				'param_name' => 'tumblr_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-twitch"></i> ' . __( 'Twitch', 'norebro-extra' ),
				'param_name' => 'twitch_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-x-twitter"></i> ' . __( 'Twitter', 'norebro-extra' ),
				'param_name' => 'twitter_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-vimeo"></i> ' . __( 'Vimeo', 'norebro-extra' ),
				'param_name' => 'vimeo_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-vine"></i> ' . __( 'Vine', 'norebro-extra' ),
				'param_name' => 'vine_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-whatsapp"></i> ' . __( 'Whatsapp', 'norebro-extra' ),
				'param_name' => 'whatsapp_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-xing"></i> ' . __( 'Xing', 'norebro-extra' ),
				'param_name' => 'xing_link'
			),
			array(
				'type' => 'textfield',
				'group' => __( 'Social Links', 'norebro-extra' ),
				'heading' => '<i class="fab fa-youtube"></i> ' . __( 'Youtube', 'norebro-extra' ),
				'param_name' => 'youtube_link'
			),

			// Typography
			array(
				'type' => 'norebro_divider',
				'group' => __( 'Typography', 'norebro-extra' ),
				'param_name' => 'typo_tab_divider_name',
				'value' => __( 'Name', 'norebro-extra' ),
			),
			array(
				'type' => 'norebro_typography',
				'group' => __( 'Typography', 'norebro-extra' ),
				'param_name' => 'name_typo',
			),
			array(
				'type' => 'norebro_divider',
				'group' => __( 'Typography', 'norebro-extra' ),
				'param_name' => 'typo_tab_divider_position',
				'value' => __( 'Position', 'norebro-extra' ),
			),
			array(
				'type' => 'norebro_typography',
				'group' => __( 'Typography', 'norebro-extra' ),
				'param_name' => 'position_typo',
			),
			array(
				'type' => 'norebro_divider',
				'group' => __( 'Typography', 'norebro-extra' ),
				'param_name' => 'typo_tab_divider_description',
				'value' => __( 'Description', 'norebro-extra' ),
			),
			array(
				'type' => 'norebro_typography',
				'group' => __( 'Typography', 'norebro-extra' ),
				'param_name' => 'desription_typo',
			),

			// Styles
			array(
				'type' => 'norebro_divider',
				'group' => __( 'Styles', 'norebro-extra' ),
				'param_name' => 'style_tab_divider_content',
				'value' => __( 'Content', 'norebro-extra' ),
			),
			array(
				'type' => 'norebro_colorpicker',
				'group' => __( 'Styles', 'norebro-extra' ),
				'heading' => __( 'Overlay color', 'norebro-extra' ),
				'param_name' => 'overlay_color',
			),
			array(
				'type' => 'norebro_colorpicker',
				'group' => __( 'Styles', 'norebro-extra' ),
				'heading' => __( 'Name color', 'norebro-extra' ),
				'param_name' => 'name_color',
			),
			array(
				'type' => 'norebro_colorpicker',
				'group' => __( 'Styles', 'norebro-extra' ),
				'heading' => __( 'Position text color', 'norebro-extra' ),
				'param_name' => 'position_color',
			),
			array(
				'type' => 'norebro_colorpicker',
				'group' => __( 'Styles', 'norebro-extra' ),
				'heading' => __( 'Description color', 'norebro-extra' ),
				'param_name' => 'description_color',
			),
			array(
				'type' => 'norebro_colorpicker',
				'group' => __( 'Styles', 'norebro-extra' ),
				'heading' => __( 'Social buttons color', 'norebro-extra' ),
				'param_name' => 'social_color',
			),
			array(
				'type' => 'norebro_colorpicker',
				'group' => __( 'Styles', 'norebro-extra' ),
				'heading' => __( 'Social buttons hover color', 'norebro-extra' ),
				'param_name' => 'social_hover_color',
			),
			array(
				'type' => 'norebro_divider',
				'group' => __( 'Styles', 'norebro-extra' ),
			'param_name' => 'style_tab_divider_other',
			'value' => __( 'Other', 'norebro-extra' ),
		),
		
		// Custom Class
		array(
			'type' => 'textfield',
			'group' => __( 'Styles', 'norebro-extra' ),
			'heading' => __( 'Custom CSS class', 'norebro-extra' ),
			'param_name' => 'css_class',
			'description' => __( 'If you want to add styles to a specific unit, use this field to add CSS class.', 'norebro-extra' ),
		),

		// Appear Effect
		array(
			'type' => 'dropdown',
			'group' => __( 'Appear Effect', 'norebro-extra' ),
			'heading' => __( 'Appear effect', 'norebro-extra' ),
			'param_name' => 'appearance_effect',
			'value' => array(
				__( 'None', 'norebro-extra' ) => 'none',
				__( 'Fade up', 'norebro-extra' ) => 'fade-up',
				__( 'Fade down', 'norebro-extra' ) => 'fade-down',
				__( 'Fade right', 'norebro-extra' ) => 'fade-right',
				__( 'Fade left', 'norebro-extra' ) => 'fade-left',
				__( 'Flip up', 'norebro-extra' ) => 'flip-up',
				__( 'Flip down', 'norebro-extra' ) => 'flip-down',
				__( 'Zoom in', 'norebro-extra' ) => 'zoom-in',
				__( 'Zoom out', 'norebro-extra' ) => 'zoom-out'
			)
		),
		array(
			'type' => 'textfield',
			'group' => __( 'Appear Effect', 'norebro-extra' ),
			'heading' => __( 'Animation duration', 'norebro-extra' ),
			'param_name' => 'appearance_duration',
			'description' => __( 'Duration accept values from 50 to 3000 (ms), with step 50.', 'norebro-extra' ),
		),
	)
) );

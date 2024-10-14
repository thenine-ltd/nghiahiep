<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_59229bda27se2",
        "title" => __( 'Menu Settings', 'norebro' ),
        "private" => true,
        "fields" => [
            [
                "key" => "field_59221bda313bf",
                "label" => __( 'General', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937easfasf15",
                "label" => "",
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => '<p class="message">' . '<span class="dashicons dashicons-editor-help"></span>' . __( 'These settings apply to all the pages of your site. Use local Page Settings to override some options for individual pages.', 'norebro' ) . '</p>',

                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59229bda3374d",
                "label" => __( 'Menu type', 'norebro' ),
                "name" => "global_menu_type",
                "type" => "radio",
                "instructions" => __( 'Choose menu type for all pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "full" => __( 'Extended Menu', 'norebro' ),
                    "hamburger" => __( 'Hamburger Menu', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "full",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59229bda31ауеmod",
                "label" => __( 'Extended Menu', 'norebro' ),
                "name" => "global_extended_menu",
                "type" => "norebro_menu",
                "instructions" => __( 'Choose from already pre-made menus', 'norebro' ) . '&nbsp;<em>( ' . __( 'Appearance', 'norebro' ) . '&nbsp;>&nbsp;' . '<a target="_blank" href="./nav-menus.php">' . __( 'Menus', 'norebro' ) . '</a>)</em>',
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda3374d",
                            "operator" => "!=",
                            "value" => "hamburger"
                        ]
                    ]
                ],
                "required" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59229asf124а11ауеmod",
                "label" => __( 'Hamburger Menu', 'norebro' ),
                "name" => "global_hamburger_menu",
                "type" => "norebro_menu",
                "instructions" => __( 'Choose from already pre-made menus', 'norebro' ) . '&nbsp;<em>( ' . __( 'Appearance', 'norebro' ) . '&nbsp;>&nbsp;' . '<a target="_blank" href="./nav-menus.php">' . __( 'Menus', 'norebro' ) . '</a>)</em>',
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda3374d",
                            "operator" => "!=",
                            "value" => "full"
                        ]
                    ]
                ],
                "required" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59229bda3374dmod2",
                "label" => __( 'Hamburger position', 'norebro' ),
                "name" => "global_menu_hamburger_align",
                "type" => "radio",
                "instructions" => __( 'Choose hamburger menu position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda3374d",
                            "operator" => "==",
                            "value" => "hamburger"
                        ]
                    ]
                ],
                "choices" => [
                    "right" => "Inside Header",
                    "inside_panel" => "Inside Side Panel"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "full",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59229bda317ae_modd",
                "label" => __( 'Overlay menu layout', 'norebro' ),
                "name" => "global_fullscreen_menu_style",
                "type" => "image_option",
                "instructions" => __( 'Choose layout type for overlay menu', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda3374d",
                            "operator" => "==",
                            "value" => "hamburger"
                        ]
                    ]
                ],
                "choices" => [
                    "default" => __( 'Default', 'norebro' ),
                    "simple" => __( 'Simple', 'norebro' ),
                    "centered" => __( 'Centered', 'norebro' ),
                    "split" => __( 'Splited', 'norebro' )
                ],
                "image_option_value" => [
                    [
                        "name" => "default",
                        "description" => "Default",
                        "src" => "nor__listing_22.svg"
                    ],
                    [
                        "name" => "simple",
                        "description" => "Left Side",
                        "src" => "nor__listing_21.svg"
                    ],
                    [
                        "name" => "centered",
                        "description" => "Centered",
                        "src" => "nor__listing_19.svg"
                    ],
                    [
                        "name" => "split",
                        "description" => "Splited",
                        "src" => "nor__listing_20.svg"
                    ]
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "default",
                "layout" => "vertical",
                "return_format" => "value",
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "placeholder" => ""
            ],
            [
                "key" => "field_59229bda32d24",
                "label" => __( 'Overlay menu logo', 'norebro' ),
                "name" => "global_overlay_menu_logo",
                "type" => "clone",
                "instructions" => __( 'Choose overlay menu logo', 'norebro' ),
                "required" => 0,
                "clone" => [
                    "field_5936b2dd92555",
                    "field_5936b35713666",
                    "field_5936b35733221"
                ],
                "display" => "group",
                "layout" => "table",
                "prefix_label" => 0,
                "prefix_name" => 0
            ],
            [
                "key" => "field_59229bda33b33dandmod",
                "label" => __( 'Overlay menu background', 'norebro' ),
                "name" => "global_fullscreen_menu_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose overlay background color', 'norebro' ),
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda3374d",
                            "operator" => "==",
                            "value" => "hamburger"
                        ]
                    ]
                ],
                "required" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59229bda33f44867i7a6",
                "label" => __( 'Overlay menu typography', 'norebro' ),
                "name" => "global_fullscreen_menu_text_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typography styles for fullscreen menu', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda3374d",
                            "operator" => "==",
                            "value" => "hamburger"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_59229bda33f44",
                "label" => __( 'Typography', 'norebro' ),
                "name" => "global_header_menu_text_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typography for header', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_59374453f44415",
                "label" => __( 'Dropdown carets', 'norebro' ),
                "name" => "global_header_dropdown_carets_visibility",
                "type" => "true_false",
                "instructions" => __( 'Show carets on multi level menu', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_59221bd413bf",
                "label" => __( 'Mobile Menu', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937445484415",
                "label" => __( 'Mobile menu position', 'norebro' ),
                "name" => "global_mobile_menu_position",
                "type" => "select",
                "instructions" => __( 'Choose mobile menu position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "left" => __( 'Slide from Left', 'norebro' ),
                    "right" => __( 'Slide from Right', 'norebro' )
                ],
                "default_value" => [
                    "left"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59229bda33b33234fas",
                "label" => __( 'Mobile menu background color', 'norebro' ),
                "name" => "global_mobile_menu_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background overlay color', 'norebro' ),
                "required" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59267bda33b33234fas",
                "label" => __( 'Mobile header menu color', 'norebro' ),
                "name" => "global_mobile_header_menu_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose color for header items', 'norebro' ),
                "required" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59229bda36234d1",
                "label" => __( 'Mobile menu typography', 'norebro' ),
                "name" => "global_mobile_menu_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typography for mobile menu', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_5937445364415",
                "label" => __( 'Search visibility', 'norebro' ),
                "name" => "global_mobile_search_visibility",
                "type" => "true_false",
                "instructions" => __( 'Show search on mobile menu', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_59374453a84415",
                "label" => __( 'Social icons position', 'norebro' ),
                "name" => "global_header_mobile_social_position",
                "type" => "select",
                "instructions" => __( 'Show or hide social icons on mobile menu', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "default" => __( 'Default', 'norebro' ),
                    "inside" => __( 'Inside Overlay Menu', 'norebro' )
                ],
                "default_value" => [
                    "default"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59344453f84415",
                "label" => __( 'Lang switcher position', 'norebro' ),
                "name" => "global_header_mobile_lang_position",
                "type" => "select",
                "instructions" => __( 'Choose WPML lang switcher position on mobile devices', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                 "choices" => [
                    "default" => __( 'Default', 'norebro' ),
                    "inside" => __( 'Inside Overlay Menu', 'norebro' )
                ],
                "default_value" => [
                    "default"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59374443f84415",
                "label" => __( 'Cart icon position', 'norebro' ),
                "name" => "global_header_mobile_cart_position",
                "type" => "select",
                "instructions" => __( 'Choose cart icon position on mobile devices', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                 "choices" => [
                    "default" => __( 'Default', 'norebro' ),
                    "inside" => __( 'Inside Overlay Menu', 'norebro' )
                ],
                "default_value" => [
                    "default"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_5941bd413bs",
                "label" => __( 'One Page Menu', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59229bda3432amods",
                "label" => __( 'One Page Menu', 'norebro' ),
                "name" => "global_header_onepage_mode",
                "type" => "true_false",
                "instructions" => __( 'Enable onepage scroll menu? Handle anchor links as section scroll trigger. Read more in <a target=\"_blank\" href=\"https://docs.clbthemes.com/norebro/knowledge-base/smooth-scroll-menu/\">docs</a>.', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_5941bd413bffss",
                "label" => __( 'WPML', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_592fe13500c38",
                "label" => __( 'WPML language switcher', 'norebro' ),
                "name" => "global_wpml_show_in_header",
                "type" => "true_false",
                "instructions" => __( 'Show WPML language switcher in header', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_59391a1630234",
                "label" => __( 'WPML language switcher type', 'norebro' ),
                "name" => "global_wpml_switcher_type",
                "type" => "select",
                "instructions" => __( 'Choose WPML language switcher type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe13500c38",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "inline" => __( 'Inline', 'norebro' ),
                    "dropdown" => __( 'Dropdown with Icons', 'norebro' )
                ],
                "default_value" => "inline",
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_5941bd413bf",
                "label" => __( 'Other', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_592d43df9e26c",
                "label" => __( 'Search', 'norebro' ),
                "name" => "global_header_hide_search",
                "type" => "true_false",
                "instructions" => __( 'Hide search feature from header?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "ghmsl",
                "label" => __( 'Social links', 'norebro' ),
                "name" => "global_header_menu_social_links",
                "type" => "repeater",
                "instructions" => __( 'Add links to your social network groups (max. 12)', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "collapsed" => "",
                "min" => 0,
                "max" => 12,
                "layout" => "table",
                "button_label" => "+ Add social network",
                "sub_fields" => [
                    [
                        "key" => "snsn",
                        "label" => __( 'Direction', 'norebro' ),
                        "name" => "social_network",
                        "type" => "select",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "wrapper" => [
                            "width" => "",
                            "class" => "",
                            "id" => ""
                        ],
                        "choices" => [
                            "artstation" => __( 'Artstation', 'norebro' ),
                            "behance" => __( 'Behance', 'norebro' ),
                            "deviantart" => __( 'DeviantArt', 'norebro' ),
                            "digg" => __( 'Digg', 'norebro' ),
                            "discord" => __( 'Discord', 'norebro' ),
                            "dribbble" => __( 'Dribbble', 'norebro' ),
                            "facebook" => __( 'Facebook', 'norebro' ),
                            "flickr" => __( 'Flickr', 'norebro' ),
                            "github" => __( 'GitHub', 'norebro' ),
                            "houzz" => __( 'Houzz', 'norebro' ),
                            "instagram" => __( 'Instagram', 'norebro' ),
                            "kaggle" => __( 'Kaggle', 'norebro' ),
                            "linkedin" => __( 'LinkedIn', 'norebro' ),
                            "medium" => __( 'Medium', 'norebro' ),
                            "mixer" => __( 'Mixer', 'norebro' ),
                            "pinterest" => __( 'Pinterest', 'norebro' ),
                            "producthunt" => __( 'Product Hunt', 'norebro' ),
                            "quora" => __( 'Quora', 'norebro' ),
                            "reddit" => __( 'Reddit', 'norebro' ),
                            "snapchat" => __( 'Snapchat', 'norebro' ),
                            "soundcloud" => __( 'SoundCloud', 'norebro' ),
                            "spotify" => __( 'Spotify', 'norebro' ),
                            "teamspeak" => __( 'Teamspeak', 'norebro' ),
                            "telegram" => __( 'Telegram', 'norebro' ),
                            "threads" => __( 'Threads', 'norebro' ),
                            "tiktok" => __( 'TikTok', 'norebro' ),
                            "tumblr" => __( 'Tumblr', 'norebro' ),
                            "twitch" => __( 'Twitch', 'norebro' ),
                            "twitter" => __( 'Twitter', 'norebro' ),
                            "vimeo" => __( 'Vimeo', 'norebro' ),
                            "vine" => __( 'Vine', 'norebro' ),
                            "whatsapp" => __( 'WhatsApp', 'norebro' ),
                            "xing" => __( 'Xing', 'norebro' ),
                            "youtube" => __( 'YouTube', 'norebro' ),
                            "500px" => __( '500px', 'norebro')
                        ],
                        "default_value" => [

                        ],
                        "allow_null" => 0,
                        "multiple" => 0,
                        "ui" => 0,
                        "ajax" => 0,
                        "return_format" => "value",
                        "placeholder" => ""
                    ],
                    [
                        "key" => "snurl",
                        "label" => __( 'URL', 'norebro' ),
                        "name" => "url",
                        "type" => "url",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "wrapper" => [
                            "width" => "",
                            "class" => "",
                            "id" => ""
                        ],
                        "default_value" => "",
                        "placeholder" => ""
                    ],
                    [
                        "key" => "snint",
                        "label" => __( 'In New Tab', 'norebro' ),
                        "name" => "in_new_tab",
                        "type" => "true_false",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "wrapper" => [
                            "width" => "10%",
                            "class" => "",
                            "id" => ""
                        ],
                        "message" => "",
                        "default_value" => 0,
                        "ui" => 1,
                        "ui_on_text" => "Yes",
                        "ui_off_text" => "No"
                    ]
                ]
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-menu"
                ]
            ]
        ],
        "menu_order" => 1,
        "position" => "normal",
        "style" => "default",
        "label_placement" => "left",
        "instruction_placement" => "label",
        "hide_on_screen" => "",
        "active" => 1,
        "description" => ""
    ] );

endif;

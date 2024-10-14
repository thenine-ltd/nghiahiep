<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_592d60af343c5",
        "title" => __( 'General', 'norebro' ),
        "private" => true,
        "fields" => [
            [
                "key" => "field_54224ad4313bf",
                "label" => __( 'Theme Styling', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937e0a52b48cexmod151",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => '<p class="message">' . '<span class="dashicons dashicons-editor-help"></span>' . __( 'These settings apply to all the pages of your site. Use local Page Settings to override some options for individual pages.', 'norebro') . '</p>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_591ac509cfa00",
                "label" => __( 'Brand color', 'norebro' ),
                "name" => "global_page_brand_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose the accent color for your website', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_5937e3a43b38cexmod15",
                "label" => __( 'Links color', 'norebro' ),
                "name" => "global_page_links_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose the color for your website links', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_5937e3a43b3823575",
                "label" => __( 'Buttons color', 'norebro' ),
                "name" => "global_page_buttons_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose the global buttons color for your site', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_5937e3a33b35exmod15",
                "label" => __( 'Borders color', 'norebro' ),
                "name" => "global_page_borders_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose the color for your website borders', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],

            [
                "key" => "field_54229ad4313bf",
                "label" => __( 'Site Identity', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937e0a52b48cexmod151",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => '<p class="message">' . '<span class="dashicons dashicons-editor-help"></span>' . __( 'These settings apply to all the pages of your site. Use local Page Settings to override some options for individual pages.', 'norebro') . '</p>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59229bda32383",
                "label" => __( 'Brand logo', 'norebro' ),
                "name" => "global_logo_type",
                "type" => "radio",
                "instructions" => __( 'Choose logo type for your website', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "sitename" => __( 'Text logo', 'norebro' ),
                    "image" => __( 'Loaded image', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "sitename",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5937e3a52b38cexmod15",
                "label" => __( 'Text logo', 'norebro' ),
                "name" => "global_branding_text_logo",
                "type" => "text",
                "instructions" => __( 'Enter the text for your website logo', 'norebro' ),
                "conditional_logic" => 0
            ],
            [
                "key" => "field_59256ac3f42ec",
                "label" => __( 'Text logo settings', 'norebro' ),
                "name" => "global_header_menu_logo_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typography styles for site name', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda32383",
                            "operator" => "==",
                            "value" => "sitename"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_59229bda32f63",
                "label" => __( 'Logo light variant', 'norebro' ),
                "name" => "global_logo_image",
                "type" => "clone",
                "instructions" => __( 'Upload light-colored variant. Used for fullscreen menu by default', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda32383",
                            "operator" => "==",
                            "value" => "image"
                        ]
                    ]
                ],
                "clone" => [
                    "field_5936b2dd92771",
                    "field_5936b357132bf",
                    "field_5936b371132c0"
                ],
                "display" => "group",
                "layout" => "table",
                "prefix_label" => 0,
                "prefix_name" => 0
            ],
            [
                "key" => "field_5936add283a9a",
                "label" => __( 'Logo dark variant', 'norebro' ),
                "name" => "global_logo_image_dark_variant",
                "type" => "clone",
                "instructions" => __( 'Upload dark-colored variant. Used for scrolled fixed header by default', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda32383",
                            "operator" => "==",
                            "value" => "image"
                        ]
                    ]
                ],
                "clone" => [
                    "field_5936af24f4b7e",
                    "field_5936afd421bba",
                    "field_5936affb21bbb"
                ],
                "display" => "group",
                "layout" => "table",
                "prefix_label" => 0,
                "prefix_name" => 0
            ],
            [
                "key" => "field_5937e1905d075",
                "label" => __( 'Logo by default', 'norebro' ),
                "name" => "global_header_logo_by_default",
                "type" => "radio",
                "instructions" => __( 'Choose default logo variant', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda32383",
                            "operator" => "==",
                            "value" => "image"
                        ]
                    ]
                ],
                "choices" => [
                    "dark_variant" => __( 'Dark variant', 'norebro' ),
                    "light_variant" => __( 'Light variant', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5937e1905d075_fixed",
                "label" => __( 'Logo for sticky header', 'norebro' ),
                "name" => "global_header_logo_when_fixed",
                "type" => "select",
                "instructions" => __( 'Choose logo variant for sticky header', 'norebro' ),
                "required" => 0,
                "choices" => [
                    "dark_variant" => __( 'Dark variant', 'norebro' ),
                    "light_variant" => __( 'Light variant', 'norebro' ),
                    "inherit" => __( 'Default logo variant', 'norebro' ),
                    "custom" => __( 'Custom Image', 'norebro' ),
                    "sitename" => __( 'Text logo', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "dark_variant",
                "layout" => "vertical",
                "return_format" => "value"
            ],
            [
                "key" => "field_5936add283a9a_fix",
                "label" => __( 'Logo image for sticky header', 'norebro' ),
                "name" => "global_logo_image_fixed_variant",
                "type" => "clone",
                "instructions" => __( 'Upload logo variant for sticky header', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5937e1905d075_fixed",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "clone" => [
                    "field_5936af24f4b7e_fix",
                    "field_5936afd421bba_fix",
                    "field_5936affb21bbb_fix"
                ],
                "display" => "group",
                "layout" => "table",
                "prefix_label" => 0,
                "prefix_name" => 0
            ],
            [
                "key" => "field_54224ad4314bf",
                "label" => __( 'Site Preloader', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_591ac509d3e51",
                "label" => __( 'Preloader', 'norebro' ),
                "name" => "global_page_preloader",
                "type" => "true_false",
                "instructions" => __( 'Enable preloader animation', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_59151w509d3e51",
                "label" => __( 'Preloader on mobile', 'norebro' ),
                "name" => "global_page_mobile_preloader",
                "type" => "true_false",
                "instructions" => __( 'Enable preloader animation on mobile devices', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d3e51",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_5937e3a3234324234",
                "label" => __( 'Preloader type', 'norebro' ),
                "name" => "global_preloader_type",
                "type" => "image_option",
                "instructions" => __( 'Choose loading image for website preloader', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d3e51",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => "ball_beat",
                "image_option_value" => [
                    [
                        "name" => "ball_beat",
                        "description" => __( 'Ball Beat', 'norebro' ),
                        "src" => "acf__image_41.svg"
                    ],
                    [
                        "name" => "ball_fall",
                        "description" => __( 'Ball Fall', 'norebro' ),
                        "src" => "acf__image_42.svg"
                    ],
                    [
                        "name" => "ball_scale_pulse",
                        "description" => __( 'Ball Scale Pulse', 'norebro' ),
                        "src" => "acf__image_45.svg"
                    ],
                    [
                        "name" => "ball_scale_ripple",
                        "description" => __( 'Ball Scale Ripple', 'norebro' ),
                        "src" => "acf__image_46.svg"
                    ],
                    [
                        "name" => "ball_clip_rotate",
                        "description" => __( 'Ball Clip Rotate', 'norebro' ),
                        "src" => "acf__image_50.svg"
                    ],
                    [
                        "name" => "line_scale",
                        "description" => __( 'Line Scale', 'norebro' ),
                        "src" => "acf__image_47.svg"
                    ],
                    [
                        "name" => "line_spin_clockwise_fade",
                        "description" => __( 'Line Spin Clockwise Fade', 'norebro' ),
                        "src" => "acf__image_48.svg"
                    ],
                    [
                        "name" => "square_loader",
                        "description" => __( 'Square Loader', 'norebro' ),
                        "src" => "acf__image_49.svg"
                    ],
                    [
                        "name" => "custom_loader",
                        "description" => __( 'Custom', 'norebro' ),
                        "src" => "acf__image_inherited.svg"
                    ]
                ],
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_5rqsf22dd92771",
                "label" => __( 'Custom preloader', 'norebro' ),
                "name" => "global_custom_preloader",
                "type" => "image",
                "instructions" => __( 'Upload your preloader image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d3e51",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "return_format" => "url",
                "preview_size" => "thumbnail",
                "library" => "all",
                "min_width" => "",
                "min_height" => "",
                "min_size" => "",
                "max_width" => "",
                "max_height" => "",
                "max_size" => "",
                "mime_types" => ""
            ],
            [
                "key" => "field_592d5938aee39",
                "label" => __( 'Preloader accent color', 'norebro' ),
                "name" => "global_preloader_shapes_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose color for preloader shape', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d3e51",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_592d4579aee38",
                "label" => __( 'Preloader background color', 'norebro' ),
                "name" => "global_preloader_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Set background color for preloader', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d3e51",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_54224ad4316bf",
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
                "key" => "field_591ac509d3a3e",
                "label" => __( 'Smooth scroll', 'norebro' ),
                "name" => "global_page_smooth_scroll",
                "type" => "true_false",
                "instructions" => __( 'Enable smooth scroll effect on your website', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No",
                "message" => "",
                "default_value" => 0
            ],
            [
                "key" => "field_591ac509d4234",
                "label" => __( 'Scroll to top', 'norebro' ),
                "name" => "global_page_show_arrow",
                "type" => "true_false",
                "instructions" => __( 'Show scroll to top arrow on all pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_591ac509d465a",
                "label" => __( 'Scroll to top color', 'norebro' ),
                "name" => "global_page_arrow_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background color for scroll to top button', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_591ac509d4234",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general"
                ]
            ]
        ],
        "menu_order" => 0,
        "position" => "normal",
        "style" => "default",
        "label_placement" => "left",
        "instruction_placement" => "label",
        "hide_on_screen" => "",
        "active" => 1,
        "description" => ""
    ] );

endif;
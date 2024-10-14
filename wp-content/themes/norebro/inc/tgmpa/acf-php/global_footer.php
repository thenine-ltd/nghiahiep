<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_592fd88fb4838",
        "title" => __( 'Footer', 'norebro' ),
        "private" => true,
        "fields" => [
            [
                "key" => "field_592fdb59946d8",
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
                "key" => "field_5937e0a52b488cexmod60",
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
                "key" => "field_592fd8901e284",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "global_footer_hide",
                "type" => "true_false",
                "instructions" => __( 'Hide footer from all pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_592fd8901ea9a",
                "label" => __( 'Content wrapper', 'norebro' ),
                "name" => "global_footer_is_wrapped",
                "type" => "true_false",
                "instructions" => __( 'Add footer content wrapper to all pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_5940ebca457f2",
                "label" => __( 'Content text color', 'norebro' ),
                "name" => "global_footer_text_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose content text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_592fd8901ca70",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_footer_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose footer background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_592fd8901ce59",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "global_footer_background_image",
                "type" => "image",
                "instructions" => __( 'Upload background image for footer', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "return_format" => "url",
                "preview_size" => "medium",
                "library" => "all",
                "min_width" => "",
                "min_height" => "",
                "min_size" => "",
                "max_width" => "",
                "max_height" => 1200,
                "max_size" => "",
                "mime_types" => ""
            ],
            [
                "key" => "field_592fd8901d26a",
                "label" => __( 'Background size', 'norebro' ),
                "name" => "global_footer_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "auto" => __( 'Auto', 'norebro' ),
                    "cover" => __( 'Cover', 'norebro' ),
                    "contain" => __( 'Contain', 'norebro' ),
                    "100per" => __( '100% 100%', 'norebro' )
                ],
                "default_value" => [
                    "cover"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_592fd8901d6a3",
                "label" => __( 'Background position', 'norebro' ),
                "name" => "global_footer_background_position",
                "type" => "select",
                "instructions" => __( 'Choose background image position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd8901d26a",
                            "operator" => "!=",
                            "value" => "cover"
                        ],
                        [
                            "field" => "field_592fd8901d26a",
                            "operator" => "!=",
                            "value" => "100per"
                        ]
                    ]
                ],
                "choices" => [
                    "center" => __( 'Center', 'norebro' ),
                    "left_top" => __( 'Left Top', 'norebro' ),
                    "left_center" => __( 'Left Center', 'norebro' ),
                    "left_bottom" => __( 'Left Bottom', 'norebro' ),
                    "center_top" => __( 'Center Top', 'norebro' ),
                    "center_bottom" => __( 'Center Bottom', 'norebro' ),
                    "right_top" => __( 'Right Top', 'norebro' ),
                    "right_center" => __( 'Right Center', 'norebro' ),
                    "right_bottom" => __( 'Right Bottom', 'norebro' )
                ],
                "default_value" => [
                    "center_bottom"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_592fd8901da75",
                "label" => __( 'Background repeat', 'norebro' ),
                "name" => "global_footer_background_repeat",
                "type" => "select",
                "instructions" => __( 'Repeat type of background image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd8901d26a",
                            "operator" => "!=",
                            "value" => "cover"
                        ],
                        [
                            "field" => "field_592fd8901d26a",
                            "operator" => "!=",
                            "value" => "100per"
                        ]
                    ]
                ],
                "choices" => [
                    "repeat" => __( 'Repeat', 'norebro' ),
                    "no_repeat" => __( 'No Repeat', 'norebro' ),
                    "repeat_x" => __( 'Repeat by X Only', 'norebro' ),
                    "repeat_y" => __( 'Repeat by Y Only', 'norebro' )
                ],
                "default_value" => [
                    "repeat"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_593916111579e",
                "label" => __( 'Sticky footer', 'norebro' ),
                "name" => "global_footer_is_sticky",
                "type" => "true_false",
                "instructions" => __( 'Set sticky (fixed) footer on all pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_592fdb63946d9",
                "label" => __( 'Copyright Bar', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_592fd8901ee80",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "global_footer_hide_copyright",
                "type" => "true_false",
                "instructions" => __( 'Hide copyright section from all pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_592fd8901d6a1",
                "label" => __( 'Copyright content position', 'norebro' ),
                "name" => "global_footer_copyright_alignment",
                "type" => "select",
                "instructions" => __( 'Choose copyright content position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "left_and_right" => __( 'Left and Right', 'norebro' ),
                    "center" => __( 'Center', 'norebro' )
                ],
                "default_value" => [
                    "left_and_right"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_592fd8901f24bae3",
                "label" => __( 'Copyright content', 'norebro' ),
                "name" => "global_footer_copyright_center",
                "type" => "text",
                "instructions" => __( 'Add some content to copyright section. You can use HTML tags', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd8901d6a1",
                            "operator" => "==",
                            "value" => "center"
                        ]
                    ]
                ],
                "default_value" => "\u00a9 2017, norebro theme by <a href=\"http:\/\/clbthemes.com\" target=\"_blank\">Colabrio<\/a>.",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ],
            [
                "key" => "field_592fd8901f24baes",
                "label" => __( 'Left content item', 'norebro' ),
                "name" => "global_footer_copyright_left",
                "type" => "text",
                "instructions" => __( 'Add some content to copyright section <em>| Use HTML tags</em>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd8901d6a1",
                            "operator" => "==",
                            "value" => "left_and_right"
                        ]
                    ]
                ],
                "default_value" => "\u00a9 2017, norebro theme by <a href=\"http:\/\/clbthemes.com\" target=\"_blank\">Colabrio<\/a>.",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ],
            [
                "key" => "field_592fd8901f24bfee",
                "label" => __( 'Right content item</em>', 'norebro' ),
                "name" => "global_footer_copyright_right",
                "type" => "text",
                "instructions" => __( 'Add some content to copyright section <em>| Use HTML tags</em>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd8901d6a1",
                            "operator" => "==",
                            "value" => "left_and_right"
                        ]
                    ]
                ],
                "default_value" => "All right reserved.",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ],
            [
                "key" => "field_592fd8901fa31",
                "label" => __( 'Copyright text color', 'norebro' ),
                "name" => "global_footer_copyright_text_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose copyright section text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_592fd8901fa32",
                "label" => __( 'Copyright links color', 'norebro' ),
                "name" => "global_footer_copyright_links_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose copyright section links color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_592fd8901f63a",
                "label" => __( 'Copyright background', 'norebro' ),
                "name" => "global_footer_copyright_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose section background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_592fdb17946d7",
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
                "key" => "field_5937a7a521f8sebmod23",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "label" => '<h4>' . __( 'Logo Widget', 'norebro' ) . '</h4>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_592fd8901ba9e",
                "label" => __( 'Brand logo', 'norebro' ),
                "name" => "global_footer_logo_type",
                "type" => "select",
                "instructions" => __( 'Choose footer logo type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Default variant', 'norebro' ),
                    "light_variant" => __( 'Light variant', 'norebro' ),
                    "dark_variant" => __( 'Dark variant', 'norebro' ),
                    "sitename" => __( 'Text logo', 'norebro' ),
                    "custom" => __( 'Custom Image', 'norebro' )
                ],
                "default_value" => [
                    "light_variant"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_592fd8901beb6",
                "label" => __( 'Text logo settings', 'norebro' ),
                "name" => "global_footer_logo_font_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Custom typography settings for site name', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd8901ba9e",
                            "operator" => "==",
                            "value" => "sitename"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_592fd8901c689",
                "label" => __( 'Logo image', 'norebro' ),
                "name" => "global_footer_logo_image",
                "type" => "image",
                "instructions" => __( 'Upload custom image for footer logo', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd8901ba9e",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "return_format" => "url",
                "preview_size" => "thumbnail",
                "library" => "all",
                "min_width" => 10,
                "min_height" => 10,
                "min_size" => "",
                "max_width" => 1600,
                "max_height" => 800,
                "max_size" => 5,
                "mime_types" => ""
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-footer"
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
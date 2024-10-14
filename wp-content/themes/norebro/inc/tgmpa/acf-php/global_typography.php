<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_5946360af343c5",
        "title" => __( 'Typography', 'norebro' ),
        "private" => true,
        "fields" => [
            [
                "key" => "field_542f5ad4313bf",
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
                "key" => "field_593754645mod153",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => '<p class="message">' . '<span class="dashicons dashicons-editor-help"></span>' . __( 'Typography settings apply to all the pages of your site.', 'norebro' ) . '</p>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59229bd23ssaf154235",
                "label" => __( 'Fonts source', 'norebro' ),
                "name" => "global_font_type",
                "type" => "image_option",
                "instructions" => __( 'Choose header template', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "image_option_value" => [
                    [
                        "name" => "google_fonts",
                        "description" => __( 'Google Fonts', 'norebro' ),
                        "src" => "acf__image_google.svg"
                    ],
                    [
                        "name" => "adobe_fonts",
                        "description" => __( 'Adobe Fonts', 'norebro' ),
                        "src" => "acf__image_adobe.svg"
                    ]
                ],
                "default_value" => "google_fonts"
            ],
            [
                "key" => "field_591a34534s9d31f3",
                "label" => __( 'Project ID', 'norebro' ),
                "name" => "global_adobekit_url",
                "type" => "text",
                "instructions" => __( 'Create and paste your <a target=\"_blank\" href=\"https://fonts.adobe.com/\">Adobe Typekit</a> web project ID <em>(e.g. f3g5j8g)</em>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bd23ssaf154235",
                            "operator" => "==",
                            "value" => "adobe_fonts"
                        ]
                    ]
                ],
                "default_value" => "",
                "placeholder" => "Paste your web project ID",
                "prepend" => "",
                "append" => "",
                "maxlength" => 200
            ],
            [
                "key" => "field_5c4ec3e96dbf8",
                "label" => __( 'Typekit web fonts', 'norebro' ),
                "name" => "global_adobekit_fonts",
                "type" => "repeater",
                "instructions" => __( 'Add <a target=\"_blank\" href=\"https://fonts.adobe.com/\">Adobe Typekit</a> web fonts you want to use on your website', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bd23ssaf154235",
                            "operator" => "==",
                            "value" => "adobe_fonts"
                        ]
                    ]
                ],
                "collapsed" => "",
                "min" => 0,
                "max" => 0,
                "layout" => "table",
                "button_label" => __( 'Add Font', 'norebro' ),
                "sub_fields" => [
                    [
                        "key" => "field_5c4ec3f36dbf9",
                        "label" => __( 'Font family <b>(e.g. adobe-caslon-pro)</b>', 'norebro' ),
                        "name" => "font_family",
                        "type" => "text",
                        "instructions" => "",
                        "required" => 1,
                        "conditional_logic" => 0,
                        "wrapper" => [
                            "width" => "",
                            "class" => "",
                            "id" => ""
                        ],
                        "default_value" => "",
                        "placeholder" => "",
                        "prepend" => "",
                        "append" => "",
                        "maxlength" => ""
                    ],
                    [
                        "key" => "field_5c4ec45a6dbfa",
                        "label" => __( 'Font styles', 'norebro' ),
                        "name" => "font_styles",
                        "type" => "checkbox",
                        "instructions" => "",
                        "required" => 1,
                        "conditional_logic" => 0,
                        "wrapper" => [
                            "width" => "",
                            "class" => "",
                            "id" => ""
                        ],
                        "choices" => [
                            "100" => "thin",
                            "300" => "light",
                            "400" => "regular",
                            "600" => "bold",
                            "900" => "ultrabold"
                        ],
                        "allow_custom" => 0,
                        "default_value" => [
                            400
                        ],
                        "layout" => "horizontal",
                        "toggle" => 1,
                        "return_format" => "value",
                        "save_custom" => 0
                    ]
                ]
            ],
            [
                "key" => "field_542f4ad4313bf",
                "label" => __( 'Fonts', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_591ac509d1630",
                "label" => __( 'Paragraphs', 'norebro' ),
                "name" => "global_page_text_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typography styles for paragraphs', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_591ac509d1a45",
                "label" => __( 'Headings', 'norebro' ),
                "name" => "global_page_headings_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typography styles for headings', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_591ac509d2622",
                "label" => __( 'Subtitles', 'norebro' ),
                "name" => "global_page_subtitles_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typography styles for subtitles', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_54245ad4313bf",
                "label" => __( 'Responsive Settings', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_591ac509d2622mod1",
                "label" => __( 'Paragraphs. Responsive sizes', 'norebro' ),
                "name" => "global_page_paragraphs_font_sizes",
                "type" => "norebro_sizes",
                "instructions" => __( 'You can set different font sizes for different devices. Use CSS Units <a href=\"https://www.w3schools.com/cssref/css_units.asp\" target=\"_blank\">[?]</a>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
            ],
            [
                "key" => "field_591ac509d2622mod2",
                "label" => __( 'Headings. Responsive sizes', 'norebro' ),
                "name" => "global_page_titles_font_sizes",
                "type" => "norebro_sizes",
                "instructions" => __( 'You can set different font sizes for different devices. Use CSS Units <a href=\"https://www.w3schools.com/cssref/css_units.asp\" target=\"_blank\">[?]</a>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
            ],
            [
                "key" => "field_591ac509d2622mod3",
                "label" => __( 'Subtitles. Responsive sizes', 'norebro' ),
                "name" => "global_page_subtitles_font_sizes",
                "type" => "norebro_sizes",
                "instructions" => __( 'You can set different font sizes for different devices. Use CSS Units <a href=\"https://www.w3schools.com/cssref/css_units.asp\" target=\"_blank\">[?]</a>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-typography"
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
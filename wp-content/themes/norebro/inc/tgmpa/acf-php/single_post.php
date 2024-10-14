<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_593914649cd2e",
        "title" => __( 'Post Settings', 'norebro' ),
        "private" => true,
        "fields" => [
            [
                "key" => "field_59391464a4dc9",
                "label" => __( 'Header Title', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59391464a855b",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "post_title_hide",
                "type" => "radio",
                "instructions" => __( 'Hide header title from this page?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'Hide', 'norebro' ),
                    "no" => __( 'Show', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59391464a7d7c",
                "label" => __( 'Fullscreen height', 'norebro' ),
                "name" => "header_height_fullscreen",
                "type" => "radio",
                "instructions" => __( 'Enable fullscreen height for header title?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'Yes', 'norebro' ),
                    "no" => __( 'No', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59391464a8178",
                "label" => __( 'Height', 'norebro' ),
                "name" => "post_title_height",
                "type" => "norebro_responsive_height",
                "instructions" => __( 'Set up header title height', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a7d7c",
                            "operator" => "!=",
                            "value" => "yes"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59391464a51e6",
                "label" => __( 'Subtitle text', 'norebro' ),
                "name" => "header_title_subtitle_type",
                "type" => "select",
                "instructions" => __( 'Choose custom subtitle type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "generated" => __( 'Author, date and comments', 'norebro' ),
                    "custom" => __( 'Custom subtitle', 'norebro' ),
                    "without" => __( 'Without subtitle', 'norebro' )
                ],
                "default_value" => [
                    "inherit"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_593d5eb537af1",
                "label" => __( 'Content position', 'norebro' ),
                "name" => "post_header_title_align",
                "type" => "select",
                "instructions" => __( 'Choose header title content position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "left" => __( 'Left', 'norebro' ),
                    "center" => __( 'Center', 'norebro' ),
                    "right" => __( 'Right', 'norebro' )
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
                "key" => "field_59391464a55be",
                "label" => __( 'Custom subtitle text', 'norebro' ),
                "name" => "header_subtitle",
                "type" => "text",
                "instructions" => __( 'Write custom subtitle for this page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a51e6",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "formatting" => "html",
                "maxlength" => ""
            ],
            [
                "key" => "field_59391464a59dc",
                "label" => __( 'Background type', 'norebro' ),
                "name" => "post_title_background",
                "type" => "select",
                "instructions" => __( 'Choose background type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "post_thumbnail" => __( 'Post featured image', 'norebro' ),
                    "loaded_image" => __( 'Custom Image', 'norebro' ),
                    "color" => __( 'Background Color', 'norebro' )
                ],
                "default_value" => [
                    "inherit"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59391464a5df8",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "post_title_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background color for header title', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59391464a61b8",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "post_title_background_image",
                "type" => "image",
                "instructions" => __( 'Upload background image for header title', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a59dc",
                            "operator" => "==",
                            "value" => "loaded_image"
                        ]
                    ]
                ],
                "return_format" => "url",
                "preview_size" => "medium",
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
                "key" => "field_59391464a65b9",
                "label" => __( 'Background image size', 'norebro' ),
                "name" => "post_title_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a59dc",
                            "operator" => "==",
                            "value" => "loaded_image"
                        ]
                    ],
                    [
                        [
                            "field" => "field_59391464a59dc",
                            "operator" => "==",
                            "value" => "post_thumbnail"
                        ]
                    ]
                ],
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
                "key" => "field_59391464a69b6",
                "label" => __( 'Background image position', 'norebro' ),
                "name" => "post_title_background_position",
                "type" => "select",
                "instructions" => __( 'Choose background image position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a59dc",
                            "operator" => "!=",
                            "value" => "color"
                        ],
                        [
                            "field" => "field_59391464a59dc",
                            "operator" => "!=",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_59391464a65b9",
                            "operator" => "!=",
                            "value" => "100per"
                        ],
                        [
                            "field" => "field_59391464a65b9",
                            "operator" => "!=",
                            "value" => "cover"
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
                    "center"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59391464a6d9b",
                "label" => __( 'Background image repeat', 'norebro' ),
                "name" => "post_title_background_repeat",
                "type" => "select",
                "instructions" => __( 'Choose background image repeat type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a59dc",
                            "operator" => "!=",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_59391464a59dc",
                            "operator" => "!=",
                            "value" => "color"
                        ],
                        [
                            "field" => "field_59391464a65b9",
                            "operator" => "!=",
                            "value" => "cover"
                        ],
                        [
                            "field" => "field_59391464a65b9",
                            "operator" => "!=",
                            "value" => "100per"
                        ]
                    ]
                ],
                "choices" => [
                    "repeat" => __( 'Repeat', 'norebro' ),
                    "no_repeat" => __( 'No Repeat', 'norebro' ),
                    "repeat_y" => __( 'Repeat by Y Only', 'norebro' ),
                    "repeat_x" => __( 'Repeat by X Only', 'norebro' )
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
                "key" => "field_59391464a7198",
                "label" => __( 'Background overlay', 'norebro' ),
                "name" => "post_title_use_overlay",
                "type" => "radio",
                "instructions" => __( 'Add colored overlay over background image?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a59dc",
                            "operator" => "==",
                            "value" => "loaded_image"
                        ]
                    ],
                    [
                        [
                            "field" => "field_59391464a59dc",
                            "operator" => "==",
                            "value" => "post_thumbnail"
                        ]
                    ]
                ],
                "choices" => [
                    "inherit" => "Inherit theme settings",
                    "yes" => __( 'Yes', 'norebro' ),
                    "no" => __( 'No', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59391464a758b",
                "label" => __( 'Background overlay color', 'norebro' ),
                "name" => "post_title_background_overlay",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background overlay color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a59dc",
                            "operator" => "!=",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_59391464a59dc",
                            "operator" => "!=",
                            "value" => "color"
                        ],
                        [
                            "field" => "field_59391464a7198",
                            "operator" => "!=",
                            "value" => "no"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59391464a79ac",
                "label" => __( 'Typography settings', 'norebro' ),
                "name" => "post_typography_settings",
                "type" => "radio",
                "instructions" => __( 'Set up typography for header title', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "custom" => __( 'Custom', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_593d45d195043",
                "label" => __( 'Title settings', 'norebro' ),
                "name" => "post_header_title_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typograhy for hero titles', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a79ac",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_593d45ef95044",
                "label" => __( 'Subtitle settings', 'norebro' ),
                "name" => "post_header_subtitle_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typograhy for subtitles', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a79ac",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_593db4dfba577",
                "label" => __( 'Breadcrumbs', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59391464ab0fc",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "post_show_breadcrumbs",
                "type" => "radio",
                "instructions" => __( 'Show breadcrumbs on this page page?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'Show', 'norebro' ),
                    "hide" => "Hide"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_593db522ba578",
                "label" => __( 'Breadcrumbs background color', 'norebro' ),
                "name" => "post_breadcrumbs_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose breadcrumbs block background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_593db573ba579",
                "label" => __( 'Breadcrumbs text color', 'norebro' ),
                "name" => "post_breadcrumbs_text_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose breadcrumbs text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59391464a894a",
                "label" => __( 'Post Page', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59391464a8d8c",
                "label" => __( 'Background type', 'norebro' ),
                "name" => "post_page_background_type",
                "type" => "radio",
                "instructions" => __( 'Choose page background type for this page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "custom" => __( 'Custom Image', 'norebro' ),
                    "color" => __( 'Custom Color', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59391464a9134",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "post_page_background_image",
                "type" => "image",
                "instructions" => __( 'Upload background image for this page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a8d8c",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "return_format" => "url",
                "preview_size" => "medium",
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
                "key" => "field_59391464a952d",
                "label" => __( 'Background size', 'norebro' ),
                "name" => "post_page_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a8d8c",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
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
                "key" => "field_59391464a991d",
                "label" => __( 'Background position', 'norebro' ),
                "name" => "post_page_background_position",
                "type" => "select",
                "instructions" => __( 'Choose background image position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a8d8c",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_59391464a952d",
                            "operator" => "!=",
                            "value" => "cover"
                        ],
                        [
                            "field" => "field_59391464a952d",
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
                    "center"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59391464a9cd2",
                "label" => __( 'Background repeat', 'norebro' ),
                "name" => "post_page_background_repeat",
                "type" => "select",
                "instructions" => __( 'Repeat type of background image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a8d8c",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_59391464a952d",
                            "operator" => "!=",
                            "value" => "cover"
                        ],
                        [
                            "field" => "field_59391464a952d",
                            "operator" => "!=",
                            "value" => "100per"
                        ]
                    ]
                ],
                "choices" => [
                    "repeat" => __( 'Repeat', 'norebro' ),
                    "no_repeat" => __( 'No Repeat', 'norebro' ),
                    "repeat_y" => __( 'Repeat by Y Only', 'norebro' ),
                    "repeat_x" => __( 'Repeat by X Only', 'norebro' )
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
                "key" => "field_59391464aa0f2",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "post_page_background",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background color for this page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a8d8c",
                            "operator" => "!=",
                            "value" => "inherit"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59391464aa4d7",
                "label" => __( 'Background attachment', 'norebro' ),
                "name" => "post_page_attach_background",
                "type" => "true_false",
                "instructions" => __( 'Fix background image for this page?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391464a8d8c",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_593914adc9695",
                "label" => __( 'Boxed page layout', 'norebro' ),
                "name" => "post_use_boxed_wrapper",
                "type" => "radio",
                "instructions" => __( 'Wrap this page in boxed container?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'Yes', 'norebro' ),
                    "no" => __( 'No', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59391464ab533",
                "label" => __( 'Content wrapper', 'norebro' ),
                "name" => "post_page_add_wrapper",
                "type" => "radio",
                "instructions" => __( 'Add page content wrapper to this page?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593914adc9695",
                            "operator" => "!=",
                            "value" => "yes"
                        ]
                    ]
                ],
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'Yes', 'norebro' ),
                    "no" => __( 'No', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59391464ab91d",
                "label" => __( 'Styles', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59391464abd30",
                "label" => __( 'Style in grid', 'norebro' ),
                "name" => "post_style_in_grid",
                "type" => "radio",
                "instructions" => __( 'You can choose twiced size for this page card', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "default" => __( 'Default', 'norebro' ),
                    "2col" => __( 'Wide (2 columns width)', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "default",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59391s64ab91d",
                "label" => __( 'Custom CSS', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59391464ac555",
                "label" => __( 'Custom CSS styles', 'norebro' ),
                "name" => "post_custom_css",
                "type" => "textarea",
                "instructions" => __( 'Write your own stylesheet here', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "Your CSS code here",
                "maxlength" => "",
                "rows" => "",
                "new_lines" => ""
            ],
            [
                "key" => "field_5937e0a52b4567mod951",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => '<p class="message"><span class="dashicons dashicons-editor-help"></span>' . __( 'You won\'t lose the CSS code after updating the theme.', 'norebro' ) . '</p>',
                "new_lines" => "",
                "esc_html" => 0
            ]
        ],
        "location" => [
            [
                [
                    "param" => "post_type",
                    "operator" => "==",
                    "value" => "post"
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
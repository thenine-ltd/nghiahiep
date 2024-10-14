<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_59229bda27ee2",
        "title" => __( 'Header Settings', 'norebro' ),
        "private" => true,
        "fields" => [
            [
                "key" => "field_59229bda313bf",
                "label" => __( 'Header', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937e0a52b48cexmod15",
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
                "key" => "field_59229bda317ae",
                "label" => __( 'Header layout', 'norebro' ),
                "name" => "global_header_menu_style",
                "type" => "image_option",
                "instructions" => __( 'Choose header template', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "image_option_value" => [
                    [
                        "name" => "style1",
                        "description" => __( 'Transparent', 'norebro' ),
                        "src" => "acf__image_01.1.svg"
                    ],
                    [
                        "name" => "style2",
                        "description" => __( 'Filled Background', 'norebro' ),
                        "src" => "acf__image_01.svg"
                    ],
                    [
                        "name" => "style3",
                        "description" => __( 'Wrapped', 'norebro' ),
                        "src" => "acf__image_02.svg"
                    ],
                    [
                        "name" => "style4",
                        "description" => __( 'Centered Logo', 'norebro' ),
                        "src" => "acf__image_03.svg"
                    ],
                    [
                        "name" => "style5",
                        "description" => __( 'Top Logo', 'norebro' ),
                        "src" => "acf__image_05.svg"
                    ],
                    [
                        "name" => "style6",
                        "description" => __( 'Sidebar', 'norebro' ),
                        "src" => "acf__image_06.svg"
                    ]
                ],
                "default_value" => "style1"
            ],
            [
                "key" => "field_59229bda31f95",
                "label" => __( 'Blank spacer under header', 'norebro' ),
                "name" => "global_header_menu_add_cap",
                "type" => "radio",
                "instructions" => __( 'We recommend use this setting for transparent and fixed header navigation', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda317ae",
                            "operator" => "!=",
                            "value" => "style6"
                        ]
                    ]
                ],
                "choices" => [
                    "yes" => __( 'Add Spacer', 'norebro' ),
                    "no" => __( 'Don\'t Add', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "yes",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59229bda31bb0",
                "label" => __( 'Content wrapper', 'norebro' ),
                "name" => "global_header_menu_use_wrapper",
                "type" => "true_false",
                "instructions" => __( 'Use header content wrapper', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_592d3cfcc0e1c",
                "label" => __( 'Height', 'norebro' ),
                "name" => "global_header_menu_height",
                "type" => "norebro_responsive_height",
                "instructions" => __( 'Set up header height', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59229bda33b3d",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_header_menu_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose header background color', 'norebro' ),
                "required" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59229bda34745",
                "label" => __( 'Bottom border', 'norebro' ),
                "name" => "global_header_menu_hide_border",
                "type" => "true_false",
                "instructions" => __( 'Hide bottom border from header?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_59229bda34f19",
                "label" => __( 'Bottom border type', 'norebro' ),
                "name" => "global_header_menu_border_type",
                "type" => "select",
                "instructions" => __( 'Choose border stroke type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda34745",
                            "operator" => "!=",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "solid" => __( 'Solid', 'norebro' ),
                    "dashed" => __( 'Dashed', 'norebro' ),
                    "dotted" => __( 'Dotted', 'norebro' ),
                    "double" => __( 'Double', 'norebro' )
                ],
                "default_value" => [
                    "solid"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59229bda34b30",
                "label" => __( 'Bottom border color', 'norebro' ),
                "name" => "global_header_menu_border_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose bottom border color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda34745",
                            "operator" => "!=",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59224bda313bf",
                "label" => __( 'Sticky Header', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59229bda3432a",
                "label" => __( 'Sticky header', 'norebro' ),
                "name" => "global_header_menu_fixed",
                "type" => "true_false",
                "instructions" => __( 'Enable sticky header, when you scrolling the page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda317ae",
                            "operator" => "!=",
                            "value" => "style6"
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
                "key" => "field_593743a434383415",
                "label" => __( 'Sticky header on mobile', 'norebro' ),
                "name" => "global_header_mobile_menu_fixed",
                "type" => "true_false",
                "instructions" => __( 'Enable sticky header on mobile devices', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_59374453f84415",
                "label" => __( 'Initial offset', 'norebro' ),
                "name" => "global_header_fixed_initial_offset",
                "type" => "number",
                "instructions" => __( 'Scroll position when sticky header begins to animate <em>| Use pixels</em>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "150",
                "placeholder" => "",
                "prepend" => "",
                "append" => "px",
                "min" => 1,
                "max" => 100000,
                "step" => ""
            ],
            [
                "key" => "field_5937433334383415",
                "label" => __( 'Height', 'norebro' ),
                "name" => "global_header_fixed_height",
                "type" => "norebro_responsive_height",
                "instructions" => __( 'Set up sticky header height', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0
            ],
            [
                "key" => "field_593743334383415",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_header_fixed_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose sticky header background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59229bda33f448347i7a6",
                "label" => __( 'Typography', 'norebro' ),
                "name" => "global_header_fixed_text_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typography styles for sticky header', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_593744334383415",
                "label" => __( 'Bottom border', 'norebro' ),
                "name" => "global_fixed_header_menu_hide_border",
                "type" => "true_false",
                "instructions" => __( 'Hide bottom border from sticky header?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_59374433f83415",
                "label" => __( 'Bottom border type', 'norebro' ),
                "name" => "global_fixed_header_menu_border_type",
                "type" => "select",
                "instructions" => __( 'Choose border stroke type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593744334383415",
                            "operator" => "!=",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "solid" => __( 'Solid', 'norebro' ),
                    "dashed" => __( 'Dashed', 'norebro' ),
                    "dotted" => __( 'Dotted', 'norebro' ),
                    "double" => __( 'Double', 'norebro' )
                ],
                "default_value" => [
                    "solid"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59374433f84415",
                "label" => __( 'Bottom border color', 'norebro' ),
                "name" => "global_fixed_header_menu_border_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose bottom border color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593744334383415",
                            "operator" => "!=",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            

            [
                "key" => "field_59229bda35325",
                "label" => __( 'Subheader', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59229bda35701",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "global_header_menu_hide_contacts_bar",
                "type" => "true_false",
                "instructions" => __( 'Hide subheader from all pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_592d3dfbff372",
                "label" => __( 'Height', 'norebro' ),
                "name" => "global_subheader_height",
                "type" => "norebro_responsive_height",
                "instructions" => __( 'Set up subheader height', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59229bda366f4",
                "label" => __( 'Content items <em>| left side</em>', 'norebro' ),
                "name" => "global_header_menu_subheader_items_left",
                "type" => "repeater",
                "instructions" => __( 'Add content items to subheader', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "collapsed" => "",
                "min" => 0,
                "max" => 20,
                "layout" => "table",
                "button_label" => "+ Add item",
                "sub_fields" => [
                    [
                        "key" => "field_59229bda6c954",
                        "label" => __( 'Items list', 'norebro' ),
                        "name" => "items",
                        "type" => "text",
                        "instructions" => "",
                        "required" => 0,
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
                        "maxlength" => 500
                    ]
                ]
            ],
            [
                "key" => "field_59229bda366f5",
                "label" => __( 'Content items <em>| right side</em>', 'norebro' ),
                "name" => "global_header_menu_subheader_items_right",
                "type" => "repeater",
                "instructions" => __( 'Add content items to subheader', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "collapsed" => "",
                "min" => 0,
                "max" => 20,
                "layout" => "table",
                "button_label" => "+ Add item",
                "sub_fields" => [
                    [
                        "key" => "field_59229bda6c955",
                        "label" => __( 'Items list', 'norebro' ),
                        "name" => "items",
                        "type" => "text",
                        "instructions" => "",
                        "required" => 0,
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
                        "maxlength" => 500
                    ]
                ]
            ],
            [
                "key" => "field_59229bda36adb",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_header_menu_contacts_bar_background",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background color for subheader ', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59229bda36ed1",
                "label" => __( 'Typography', 'norebro' ),
                "name" => "global_header_menu_contacts_bar_text_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typography for subheader', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_59229bda372c9",
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
                "key" => "field_59229bda38e8d",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "global_header_use_hero",
                "type" => "true_false",
                "instructions" => __( 'Hide header title from all pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_59229bda3868f",
                "label" => __( 'Fullscreen height', 'norebro' ),
                "name" => "global_header_height_fullscreen",
                "type" => "true_false",
                "instructions" => __( 'Enable fullscreen height for header title?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_59229bda38a78",
                "label" => __( 'Height', 'norebro' ),
                "name" => "global_header_height",
                "type" => "norebro_responsive_height",
                "instructions" => __( 'Set up header title height', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda3868f",
                            "operator" => "!=",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59229e431eaea",
                "label" => __( 'Content position', 'norebro' ),
                "name" => "global_header_title_align",
                "type" => "radio",
                "instructions" => __( 'Choose header title content position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "left" => __( 'Left', 'norebro' ),
                    "center" => __( 'Center', 'norebro' ),
                    "right" => __( 'Right', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "center",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5922a0ea1eaeb",
                "label" => __( 'Background type', 'norebro' ),
                "name" => "global_header_title_background_type",
                "type" => "radio",
                "instructions" => __( 'Choose background type for header title', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "image" => __( 'Custom Image', 'norebro' ),
                    "color" => __( 'Background Color', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59229bda37ea5",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_header_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_5922a2fd080e8",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "global_header_title_background_image",
                "type" => "image",
                "instructions" => __( 'Upload background image for header title', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5922a0ea1eaeb",
                            "operator" => "==",
                            "value" => "image"
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
                "key" => "field_5922a6390c4a9",
                "label" => __( 'Background image size', 'norebro' ),
                "name" => "global_header_title_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5922a0ea1eaeb",
                            "operator" => "==",
                            "value" => "image"
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
                    "auto"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_5922a7500579b",
                "label" => __( 'Background image position', 'norebro' ),
                "name" => "global_header_title_background_position",
                "type" => "select",
                "instructions" => __( 'Choose background image position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5922a0ea1eaeb",
                            "operator" => "==",
                            "value" => "image"
                        ],
                        [
                            "field" => "field_5922a6390c4a9",
                            "operator" => "==",
                            "value" => "auto"
                        ]
                    ],
                    [
                        [
                            "field" => "field_5922a0ea1eaeb",
                            "operator" => "==",
                            "value" => "image"
                        ],
                        [
                            "field" => "field_5922a6390c4a9",
                            "operator" => "==",
                            "value" => "contain"
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
                "key" => "field_5922ab31f19b0",
                "label" => __( 'Background image repeat', 'norebro' ),
                "name" => "global_header_title_background_repeat",
                "type" => "select",
                "instructions" => __( 'Choose background image repeat type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5922a0ea1eaeb",
                            "operator" => "==",
                            "value" => "image"
                        ],
                        [
                            "field" => "field_5922a6390c4a9",
                            "operator" => "==",
                            "value" => "auto"
                        ]
                    ],
                    [
                        [
                            "field" => "field_5922a0ea1eaeb",
                            "operator" => "==",
                            "value" => "image"
                        ],
                        [
                            "field" => "field_5922a6390c4a9",
                            "operator" => "==",
                            "value" => "contain"
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

                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59229bda376e8",
                "label" => __( 'Background overlay', 'norebro' ),
                "name" => "global_header_use_overlay",
                "type" => "true_false",
                "instructions" => __( 'Add colored overlay over background image?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_59229bda37acf",
                "label" => __( 'Background overlay color', 'norebro' ),
                "name" => "global_header_overlay_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background overlay color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59229bda376e8",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59229bda3827b",
                "label" => __( 'Title settings', 'norebro' ),
                "name" => "global_header_tilte_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typograhy for hero titles', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_59229d1dd0a61",
                "label" => __( 'Subtitle settings', 'norebro' ),
                "name" => "global_header_subtilte_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typograhy for subtitles', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => true
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-header"
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

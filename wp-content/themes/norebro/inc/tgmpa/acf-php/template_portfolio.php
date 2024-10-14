<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_592fd650bf099",
        "title" => __( 'Portfolio Settings', 'norebro' ),
        "private" => true,
        "fields" => [
            [
                "key" => "field_591b002d4818cffmod",
                "label" => __( 'Portfolio Layout', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937e0a52b48ce86od152",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "<p class=\"message\"><span class=\"icon ion-information-circled\"></span> <b>Note:</b> to find more porfolio options navigate to global settings <b>Theme Settings > Portfolio Settings</b></p>",
                "new_lines" => "",
                "esc_html" => 0
            ],
             [
                "key" => "field_592fd651216b4",
                "label" => __( 'Portfolio layout', 'norebro' ),
                "name" => "portfolio_item_layout_type",
                "type" => "image_option",
                "instructions" => __( 'Choose layout type for portfolio items', 'norebro' ),
                "conditional_logic" => 0,
                "default_value" => "inherit",
                "image_option_value" => [
                    [
                        "name" => "inherit",
                        "description" => "Use from Page Settings",
                        "src" => "acf__image_inherited.svg" 
                    ],
                    [
                        "name" => "grid_1",
                        "description" => "Image Grid",
                        "src" => "nor__listing_18.svg"
                    ],
                    [
                        "name" => "grid_2",
                        "description" => "Classic Grid",
                        "src" => "nor__listing_17.svg" 
                    ],
                    [
                        "name" => "grid_4",
                        "description" => "Fullscreen Carousel",
                        "src" => "nor__listing_15.svg" 
                    ],
                    [
                        "name" => "grid_5",
                        "description" => "Split Screen",
                        "src" => "nor__listing_14.svg" 
                    ],
                    [
                        "name" => "grid_6",
                        "description" => "Classic Carousel",
                        "src" => "nor__listing_16.svg"
                    ],
                    [
                        "name" => "grid_7",
                        "description" => "Slider with Vertical Scroll",
                        "src" => "nor__listing_13.svg" 
                    ],
                    [
                        "name" => "grid_8",
                        "description" => "Slider with Horizontal Scroll",
                        "src" => "nor__listing_12.svg" 
                    ]
                ]
            ],
            [
                "key" => "field_512341234sdfg34234",
                "label" => __( 'Hover effect', 'norebro' ),
                "name" => "portfolio_grid_1_hover",
                "type" => "image_option",
                "instructions" => __( 'Choose layout type for portfolio items', 'norebro' ),
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "==",
                            "value" => "grid_1"
                        ]
                    ]
                ],
                "image_option_value" => [
                    [
                        "name" => "inherit",
                        "description" => "Use from Page Settings",
                        "src" => "acf__image_inherited.svg" 
                    ],
                    [
                        "name" => "hover_1",
                        "description" => "Centered Details",
                        "src" => "nor__listing_18.1.svg" 
                    ],
                    [
                        "name" => "hover_2",
                        "description" => "Side Details",
                        "src" => "nor__listing_18.2.svg"
                    ],
                    [
                        "name" => "hover_3",
                        "description" => "Bottom Details",
                        "src" => "nor__listing_18.3.svg" 
                    ]
                ],
                "default_value" => "inherit"
            ],
            [
                "key" => "field_59fa4asdfhgerw4412345",
                "label" => __( 'Hover effect', 'norebro' ),
                "name" => "portfolio_grid_2_hover",
                "type" => "image_option",
                "instructions" => __( 'Choose layout type for portfolio items', 'norebro' ),
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "==",
                            "value" => "grid_2"
                        ]
                    ]
                ],
                "image_option_value" => [
                    [
                        "name" => "inherit",
                        "description" => "Use from Page Settings",
                        "src" => "acf__image_inherited.svg" 
                    ],
                    [
                        "name" => "hover_1",
                        "description" => "Image Opacity",
                        "src" => "nor__listing_17.1.svg" 
                    ],
                    [
                        "name" => "hover_2",
                        "description" => "Overlay Button",
                        "src" => "nor__listing_17.2.svg" 
                    ],
                    [
                        "name" => "hover_3",
                        "description" => "Overlay Link",
                        "src" => "nor__listing_17.3.svg" 
                    ]
                ],
                "default_value" => "inherit"
            ],
            [
                "key" => "field_59fb43123sdfg435",
                "label" => __( 'Mouse wheel', 'norebro' ),
                "name" => "portfolio_mousewheel",
                "type" => "true_false",
                "instructions" => __( 'Choose hover effect for portfolio items', 'norebro' ),
                "ui" => true,
                "default_value" => true,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_59fb431234324324",
                "label" => __( 'Slider loop', 'norebro' ),
                "name" => "portfolio_sliderloop",
                "type" => "true_false",
                "instructions" => __( 'Choose loop for portfolio items', 'norebro' ),
                "ui" => true,
                "default_value" => false,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_3"
                        ],
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_5"
                        ],
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_7"
                        ],
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_8"
                        ]
                    ]
                ]
            ],
            [
                "key" => "field_592fd65121a9b",
                "label" => __( 'Grid spacing', 'norebro' ),
                "name" => "portfolio_items_without_padding",
                "type" => "radio",
                "instructions" => __( 'Remove spacing between grid items', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'Yes', 'norebro' ),
                    "no" => __( 'No', 'norebro' )
                ],
                "default_value" => ["inherit"],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592fd65120ece",
                "label" => __( 'Portfolio items per row', 'norebro' ),
                "name" => "portfolio_columns_in_row",
                "type" => "norebro_columns",
                "instructions" => __( 'Choose number of portfolio items per row', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "i-i-i-i",
                "use_inherit" => true
            ],
            [
                "key" => "field_592d60af8a7ffmo6467ds",
                "label" => __( 'Grid animation', 'norebro' ),
                "name" => "portfolio_animation_type",
                "type" => "radio",
                "instructions" => __( 'Choose grid animation type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "default" => __( 'Without Animation', 'norebro' ),
                    "sync" => __( 'Sync Animation', 'norebro' ),
                    "async" => __( 'Async Animation', 'norebro' )
                ],
                "default_value" => ["inherit"],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592d60af8ac17d27mo646ds",
                "label" => __( 'Grid animation effect', 'norebro' ),
                "name" => "portfolio_animation_effect",
                "type" => "select",
                "instructions" => __( 'Choose portfolio items appear effect', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "fade-up" => __( 'Fade Up', 'norebro' ),
                    "fade-down" => __( 'Fade Down', 'norebro' ),
                    "fade-right" => __( 'Fade Right', 'norebro' ),
                    "fade-left" => __( 'Fade Left', 'norebro' ),
                    "flip-up" => __( 'Flip Up', 'norebro' ),
                    "flip-down" => __( 'Flip Down', 'norebro' ),
                    "zoom-in" => __( 'Zoom In', 'norebro' ),
                    "zoom-out" => __( 'Zoom Out', 'norebro' ),
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
                "key" => "field_59fb431234324324",
                "label" => __( 'Loop mode', 'norebro' ),
                "name" => "portfolio_sliderloop",
                "type" => "true_false",
                "instructions" => __( 'Enable loop sliding for portfolio items', 'norebro' ),
                "ui" => true,
                "default_value" => false
            ],
            [
                "key" => "field_592fd65121a9b",
                "label" => __( 'Grid spacing', 'norebro' ),
                "name" => "portfolio_items_without_padding",
                "type" => "radio",
                "instructions" => __( 'Remove spacing between grid items', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'Yes', 'norebro' ),
                    "no" => __( 'No', 'norebro' )
                ],
                "default_value" => ["inherit"],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_591b002d4819cffmod",
                "label" => __( 'Portfolio Page', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_592fd651222a5",
                "label" => __( 'Category filter', 'norebro' ),
                "name" => "project_show_filter",
                "type" => "radio",
                "instructions" => __( 'Show category filter on portfolio page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "show" => __( 'Show', 'norebro' ),
                    "hide" => __( 'Hide', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592fd651222a5_tcol",
                "label" => __( 'Category filter text color', 'norebro' ),
                "name" => "project_filter_text_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose category filter text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd651222a5",
                            "operator" => "!=",
                            "value" => "hide"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_592fd651222a5_acol",
                "label" => __( 'Category filter accent color', 'norebro' ),
                "name" => "project_filter_accent_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose category filter accent color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd651222a5",
                            "operator" => "!=",
                            "value" => "hide"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_592fd6512267d",
                "label" => __( 'Category filter position', 'norebro' ),
                "name" => "portfolio_filter_align",
                "type" => "select",
                "instructions" => __( 'Choose category filter position for portfolio page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd651222a5",
                            "operator" => "!=",
                            "value" => "hide"
                        ]
                    ]
                ],
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "left" => __( 'Left', 'norebro' ),
                    "center" => __( 'Center', 'norebro' ),
                    "right" => __( 'Right', 'norebro' )
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
                "key" => "field_592fd651212c8",
                "label" => __( 'Portfolio items per page', 'norebro' ),
                "name" => "portfolio_projects_per_page",
                "type" => "number",
                "instructions" => __( 'Choose number of portfolio items per page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "placeholder" => "",
                "prepend" => "",
                "append" => "projects",
                "min" => 1,
                "max" => 250,
                "step" => 1
            ],
            [
                "key" => "field_592fd65121624",
                "label" => __( 'Pagination', 'norebro' ),
                "name" => "portfolio_pagination_type",
                "type" => "select",
                "instructions" => __( 'Choose pagination type for portfolio page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "simple" => __( 'Simple', 'norebro' ),
                    "lazy_scroll" => __( 'Lazy Load', 'norebro' ),
                    "lazy_button" => __( 'Load More Button', 'norebro' )
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
                "key" => "field_59fb4334bgd33615",
                "label" => __( 'Pagination position', 'norebro' ),
                "name" => "portfolio_pagination_position",
                "type" => "select",
                "instructions" => __( 'Choose pagination position for portfolio page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "left" => __( 'Left', 'norebro' ),
                    "center" => __( 'Center', 'norebro' ),
                    "right" => __( 'Right', 'norebro' )
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
                "key" => "field_592fd651222a2",
                "label" => __( 'Show slider pagination', 'norebro' ),
                "name" => "project_show_slider_pagination",
                "type" => "true_false",
                "instructions" => __( 'Show pagination for slider projects items', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_592fd651216b3",
                "label" => __( 'Slider pagination type', 'norebro' ),
                "name" => "portfolio_slider_pagination_type",
                "type" => "select",
                "instructions" => __( 'Choose type pagination for your projects', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd651222a2",
                            "operator" => "==",
                            "value" => "1"
                        ],
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_1"
                        ],
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_2"
                        ],
                        [
                            "field" => "field_592fd651216b4",
                            "operator" => "!=",
                            "value" => "grid_6"
                        ]
                    ]
                ],
                "choices" => [
                    "numbers" => "Numbers",
                    "dots" => "Dots"
                ],
                "default_value" => [
                    "numbers"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_591b002d4318cffmod",
                "label" => __( 'Lightbox', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_592fd65122a68",
                "label" => __( 'Lightbox preview', 'norebro' ),
                "name" => "portfolio_projects_in_popup",
                "type" => "radio",
                "instructions" => __( 'Enable lightbox preview for portfolio project', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "enable" => "Enable",
                    "disable" => "Disable"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "masonry",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4ad3ds7d33615",
                "label" => __( 'Project description', 'norebro' ),
                "name" => "portfolio_gallery_description",
                "type" => "radio",
                "instructions" => __( 'Hide portfolio description from lightbox', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd65122a68",
                            "operator" => "!=",
                            "value" => "disable"
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
                "default_value" => "masonry",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4adsd223466d33615",
                "label" => __( 'Project details', 'norebro' ),
                "name" => "portfolio_gallery_details",
                "type" => "radio",
                "instructions" => __( 'Hide portfolio details from lightbox', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd65122a68",
                            "operator" => "!=",
                            "value" => "disable"
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
                "default_value" => "masonry",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592fd65122a67",
                "label" => __( 'Project link', 'norebro' ),
                "name" => "portfolio_projects_hide_view_link_in_popup",
                "type" => "radio",
                "instructions" => __( 'Hide <em>\"View project\"</em> link from lightbox', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd65122a68",
                            "operator" => "!=",
                            "value" => "disable"
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
                "default_value" => "masonry",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592fd65122a69",
                "label" => __( 'Auto scrolling', 'norebro' ),
                "name" => "portfolio_projects_popup_gallery_autoplay",
                "type" => "radio",
                "instructions" => __( 'Enable auto scrolling for lightbox carousel', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd65122a68",
                            "operator" => "!=",
                            "value" => "disable"
                        ]
                    ]
                ],
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "enable" => "Enable",
                    "disable" => "Disable"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "masonry",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592fd65122a6a",
                "label" => __( 'Auto scrolling interval', 'norebro' ),
                "name" => "portfolio_projects_popup_gallery_autoplay_time",
                "type" => "number",
                "instructions" => __( 'Autoplay interval timeout in seconds', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd65122a68",
                            "operator" => "!=",
                            "value" => "disable"
                        ],
                        [
                            "field" => "field_592fd65122a69",
                            "operator" => "!=",
                            "value" => "disable"
                        ]
                    ]
                ],
                "message" => "",
                "append" => "seconds",
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ]
        ],
        "location" => [
            [
                [
                    "param" => "page_template",
                    "operator" => "==",
                    "value" => "page-templates/page_for-projects.php"
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
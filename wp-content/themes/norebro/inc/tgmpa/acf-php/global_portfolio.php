<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_592fd665c6552",
        "title" => __( 'Portfolio Settings', 'norebro' ),
        "private" => true,
        "fields" => [
            [
                "key" => "field_592fe6046937d",
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
                "key" => "field_5937e0a52b48cexmod155",
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
                "key" => "field_59fa4344b383615",
                "label" => __( 'Portfolio layout', 'norebro' ),
                "name" => "global_portfolio_layout",
                "type" => "image_option",
                "instructions" => __( 'Choose layout type for portfolio items', 'norebro' ),
                "conditional_logic" => 0,
                "default_value" => "grid_1",
                "image_option_value" => [
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
                "key" => "field_512341234234234",
                "label" => __( 'Hover effect', 'norebro' ),
                "name" => "global_portfolio_grid_1_hover",
                "type" => "image_option",
                "instructions" => __( 'Choose hover layout for portfolio items', 'norebro' ),
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "==",
                            "value" => "grid_1"
                        ]
                    ]
                ],
                "image_option_value" => [
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
                ]
            ],
            [
                "key" => "field_59fa41123412345",
                "label" => __( 'Hover effect', 'norebro' ),
                "name" => "global_portfolio_grid_2_hover",
                "type" => "image_option",
                "instructions" => __( 'Choose layout type for portfolio items', 'norebro' ),
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fa4344b383615",
                            "operator" => "==",
                            "value" => "grid_2"
                        ]
                    ]
                ],
                "image_option_value" => [
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
                ]
            ],
            [
                "key" => "field_592fd66v12ffaqwba22c",
                "label" => __( 'Grid image size', 'norebro' ),
                "name" => "global_portfolio_images_size",
                "type" => "select",
                "instructions" => __( 'Choose image size for portfolio items', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "thumbnail" => "Thumbnail",
                    "medium" => "Small",
                    "medium_large" => "Medium",
                    "large" => "Large",
                    "full" => "Original"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "medium_large",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4313b343615",
                "label" => __( 'Portfolio items per row', 'norebro' ),
                "name" => "global_portfolio_columns_in_row",
                "type" => "norebro_columns",
                "instructions" => __( 'Choose number of portfolio items per row', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "4-3-2-1"
            ],
            [
                "key" => "field_59fb4312b343615",
                "label" => __( 'Grid animation', 'norebro' ),
                "name" => "global_portfolio_animation_type",
                "type" => "radio",
                "instructions" => __( 'Choose grid animation type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "default" => __( 'Without Animation', 'norebro' ),
                    "sync" => __( 'Sync Animation', 'norebro' ),
                    "async" => __( 'Async Animation', 'norebro' )
                ],
                "default_value" => ["default"],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4332b343615",
                "label" => __( 'Grid animation effect', 'norebro' ),
                "name" => "global_portfolio_animation_effect",
                "type" => "select",
                "instructions" => __( 'Choose portfolio items appear effect', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
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
                    "fade-up"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59fb4312383615",
                "label" => __( 'Category visible', 'norebro' ),
                "name" => "global_portfolio_page_category",
                "type" => "true_false",
                "instructions" => __( 'Show category label on portfolio items', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_5939023234234d98",
                "label" => __( 'Category color', 'norebro' ),
                "name" => "global_portfolio_page_category_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose category text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4312383615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59397890834d98",
                "label" => __( 'Category background color', 'norebro' ),
                "name" => "global_portfolio_page_category_bg_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose category label background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4312383615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59390234233d98",
                "label" => __( 'Title color', 'norebro' ),
                "name" => "global_portfolio_page_title_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose title text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59fb4234383615",
                "label" => __( 'Description visible', 'norebro' ),
                "name" => "global_portfolio_page_description",
                "type" => "true_false",
                "instructions" => __( 'Show description on portfolio items', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_593902342343d98",
                "label" => __( 'Description color', 'norebro' ),
                "name" => "global_portfolio_page_description_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose description text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4234383615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59f234234383615",
                "label" => __( 'Project link visible', 'norebro' ),
                "name" => "global_portfolio_page_more",
                "type" => "true_false",
                "instructions" => __( 'Show \"View project\" link on portfolio items', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_59392342562343d98",
                "label" => __( 'Project link color', 'norebro' ),
                "name" => "global_portfolio_page_more_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose project link text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59f234234383615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59f2376867383615",
                "label" => __( 'Project counter visible', 'norebro' ),
                "name" => "global_portfolio_page_numbers",
                "type" => "true_false",
                "instructions" => __( 'Show project counter on portfolio items <em>| Used only in some types of portfolio layout</em>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_59392342238658",
                "label" => __( 'Project counter', 'norebro' ),
                "name" => "global_portfolio_page_numbers_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose project counter text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59f2376867383615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59f2342342383615",
                "label" => __( 'Date visible', 'norebro' ),
                "name" => "global_portfolio_page_date",
                "type" => "true_false",
                "instructions" => __( 'Show date on portfolio items <em>| Used only in some types of portfolio layout</em>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_5939237562343d98",
                "label" => __( 'Date color', 'norebro' ),
                "name" => "global_portfolio_page_date_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose date text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59f2342342383615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59392398832343d98",
                "label" => __( 'Overlay color', 'norebro' ),
                "name" => "global_portfolio_page_overlay_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose overlay background color', 'norebro' ),
            ],
            [
                "key" => "field_59392323423423523",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_portfolio_page_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background color', 'norebro' ),
            ],
            [
                "key" => "field_59fb4313b383615",
                "label" => __( 'Grid spacing', 'norebro' ),
                "name" => "global_portfolio_items_without_padding",
                "type" => "true_false",
                "instructions" => __( 'Remove spacing between grid items', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_592fe4346937d",
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
                "key" => "field_592fd666241be",
                "label" => __( 'Portfolio page', 'norebro' ),
                "name" => "global_portfolio_page",
                "type" => "page_link",
                "instructions" => __( 'Choose page for all portfolio projects', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "post_type" => [
                    "page"
                ],
                "taxonomy" => [

                ],
                "allow_null" => 0,
                "allow_archives" => 0,
                "multiple" => 0
            ],
            [
                "key" => "field_592fd66622e2c",
                "label" => __( 'Breadcrumbs visibility', 'norebro' ),
                "name" => "global_project_hide_breadcrumbs",
                "type" => "radio",
                "instructions" => __( 'Hide breadcrumbs from portfolio pages?', 'norebro' ),
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
                "default_value" => "",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592fd66622e2f",
                "label" => __( 'Breadcrumbs slug', 'norebro' ),
                "name" => "global_project_breadcrumb_slug",
                "type" => "text",
                "instructions" => __( 'Enter custom text for breadcrumbs slug', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "Portfolio",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592fd66vba22c",
                "label" => __( 'Custom content position', 'norebro' ),
                "name" => "global_portfolio_content_position",
                "type" => "select",
                "instructions" => __( 'Choose WPBakery Page Builder page content position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "top" => __( 'Top - Before Portfolio', 'norebro' ),
                    "bottom" => __( 'Bottom - After Portfolio', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4334b343615",
                "label" => __( 'Category filter', 'norebro' ),
                "name" => "global_project_show_filter",
                "type" => "true_false",
                "instructions" => __( 'Show category filter on portfolio pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_59fb43341343615",
                "label" => __( 'Category filter text color', 'norebro' ),
                "name" => "global_project_filter_text_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose category filter text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4334b343615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59fb43342343615",
                "label" => __( 'Category filter accent color', 'norebro' ),
                "name" => "global_project_filter_accent_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose category filter accent color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4334b343615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59fb4334b433615",
                "label" => __( 'Category filter position', 'norebro' ),
                "name" => "global_portfolio_filter_align",
                "type" => "select",
                "instructions" => __( 'Choose category filter position for portfolio pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59fb4334b343615",
                            "operator" => "==",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "left" => __( 'Left', 'norebro' ),
                    "center" => __( 'Center', 'norebro' ),
                    "right" => __( 'Right', 'norebro' )
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
                "key" => "field_59fb4334a433615",
                "label" => __( 'Portfolio items per page', 'norebro' ),
                "name" => "global_portfolio_projects_per_page",
                "type" => "number",
                "instructions" => __( 'Choose number of portfolio items per page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => 12,
                "placeholder" => "",
                "prepend" => "",
                "append" => "projects",
                "min" => 1,
                "max" => 250,
                "step" => 1
            ],
            [
                "key" => "field_59fb4334fd33615",
                "label" => __( 'Pagination', 'norebro' ),
                "name" => "global_portfolio_pagination_type",
                "type" => "select",
                "instructions" => __( 'Choose pagination type for portfolio page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "simple" => __( 'Simple', 'norebro' ),
                    "lazy_scroll" => __( 'Lazy Load', 'norebro' ),
                    "lazy_button" => __( 'Load More Button', 'norebro' )
                ],
                "default_value" => [
                    "simple"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59fb4334bgdasdf33615",
                "label" => __( 'Pagination position', 'norebro' ),
                "name" => "global_portfolio_pagination_position",
                "type" => "select",
                "instructions" => __( 'Choose pagination position for portfolio page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "left" => __( 'Left', 'norebro' ),
                    "center" => __( 'Center', 'norebro' ),
                    "right" => __( 'Right', 'norebro' )
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
                "key" => "field_59fb4432b343615",
                "label" => __( 'Sidebar', 'norebro' ),
                "name" => "global_portfolio_page_sidebar",
                "type" => "select",
                "instructions" => __( 'Choose sidebar position for portfolio pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "without" => __( 'Without Sidebar', 'norebro' ),
                    "right" => __( 'Right', 'norebro' ),
                    "left" => __( 'Left', 'norebro' )
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
                "key" => "field_592fe44346937d",
                "label" => __( 'Project Page', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_592fd6662265c",
                "label" => __( 'Single project layout', 'norebro' ),
                "name" => "global_project_layout_type",
                "type" => "image_option",
                "instructions" => __( 'Choose layout type for project pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "image_option_value" => [
                    [
                        "name" => "type_2",
                        "description" => "Classic with Right Image",
                        "src" => "nor__listing_24.svg"
                    ],
                    [
                        "name" => "type_8",
                        "description" => "Classic with Left Image",
                        "src" => "nor__listing_25.svg"
                    ],
                    [
                        "name" => "type_1",
                        "description" => "Fullscreen Details",
                        "src" => "nor__listing_23.svg"
                    ],
                    [
                        "name" => "type_3",
                        "description" => "Split Screen Right Image",
                        "src" => "nor__listing_26.svg"
                    ],
                    [
                        "name" => "type_9",
                        "description" => "Split Screen Left Image",
                        "src" => "nor__listing_27.svg"
                    ],
                    [
                        "name" => "type_4",
                        "description" => "Carousel Gallery",
                        "src" => "nor__listing_28.svg"
                    ],
                    [
                        "name" => "type_5",
                        "description" => "Light Details Intro",
                        "src" => "nor__listing_29.svg"
                    ],
                    [
                        "name" => "type_6",
                        "description" => "Dark Details Intro",
                        "src" => "nor__listing_30.svg"
                    ],
                    [
                        "name" => "type_7",
                        "description" => "Fullscreen Slider",
                        "src" => "nor__listing_31.svg"
                    ]
                ],
                "default_value" => "type_2"
            ],
            [
                "key" => "field_59fb4334bgdf3615",
                "label" => __( 'Content wrapper', 'norebro' ),
                "name" => "global_project_page_is_wrapped",
                "type" => "radio",
                "instructions" => __( 'Add content wrapper to project pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb03738",
                            "operator" => "!=",
                            "value" => "yes"
                        ]
                    ]
                ],
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'With Wrapper', 'norebro' ),
                    "no" => __( 'Without Wrapper', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_591ac519d31f3",
                "label" => __( 'Content wrapper width', 'norebro' ),
                "name" => "global_project_content_wrapper_width",
                "type" => "text",
                "instructions" => __( 'Define container wrapper width <em>| Use CSS-units (1326px is default)</em>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "1326px",
                "prepend" => __( 'Use CSS units', 'norebro' ),
                "append" => "",
                "maxlength" => 200
            ],
            [
                "key" => "field_591b10dbb4a85234e3453",
                "label" => __( 'Full width wrapper side margins', 'norebro' ),
                "name" => "global_project_full_width_margins_size",
                "type" => "text",
                "instructions" => __( 'Define side margins for full-width page container <em>| Use CSS-units (7% is default)</em>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "",
                "prepend" => __( 'Use CSS units', 'norebro' ),
                "append" => "",
                "maxlength" => 200
            ],
            [
                "key" => "field_59fb433fbgd33615",
                "label" => __( 'Boxed page layout', 'norebro' ),
                "name" => "global_project_page_use_boxed_wrapper",
                "type" => "radio",
                "instructions" => __( 'Wrap all project pages in boxed container', 'norebro' ),
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
                "key" => "field_59fb4334asdd33615",
                "label" => __( 'Content padding', 'norebro' ),
                "name" => "global_project_page_add_top_padding",
                "type" => "radio",
                "instructions" => __( 'Add top and bottom padding for project page content', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'Add', 'norebro' ),
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
                "key" => "field_592fd66622a31",
                "label" => __( 'Navigation', 'norebro' ),
                "name" => "global_project_show_navigation",
                "type" => "radio",
                "instructions" => __( 'Choose portfolio navigation type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "none" => "Without navigation",
                    "prev_n_next" => "Next and preview"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "none",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592fd66622a31amod",
                "label" => __( 'Navigation position', 'norebro' ),
                "name" => "global_project_navigation_position",
                "type" => "select",
                "instructions" => __( 'Choose portfolio navigation position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd66622a31",
                            "operator" => "==",
                            "value" => "prev_n_next"
                        ],
                        [
                            "field" => "field_592fd6662265c",
                            "operator" => "!=",
                            "value" => "type_7"
                        ]
                    ]
                ],
                "choices" => [
                    "top" => "Top. Before content",
                    "bottom" => "Bottom. After content"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "bottom",
                "layout" => "vertical",
                "return_format" => "value"
            ],
            [
                "key" => "field_592fd66235235",
                "label" => __( 'Featured image', 'norebro' ),
                "name" => "global_project_featured_image",
                "type" => "true_false",
                "instructions" => __( 'Show featured image on the project page?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_592fd66622a41amodbgg",
                "label" => __( 'Custom content position', 'norebro' ),
                "name" => "global_project_custom_content_position",
                "type" => "select",
                "instructions" => __( 'Choose custom content position', 'norebro' ),
                "required" => 0,
                "choices" => [
                    "top" => "Top. Before content",
                    "after_description" => "Center. After description",
                    "bottom" => "Bottom. After content"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "top",
                "layout" => "vertical",
                "return_format" => "value"
            ],
            [
                "key" => "field_5937a1a521s81ebmod23",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "label" => '<h4>' . __( 'Page Settings', 'norebro' ) . '</h4>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_593923440171e",
                "label" => __( 'Background type', 'norebro' ),
                "name" => "global_project_page_background_type",
                "type" => "radio",
                "instructions" => __( 'Choose background type for project page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "custom" => __( 'Custom Image', 'norebro' ),
                    "color" => "Custom Color"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5939023423b57",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "global_project_page_background_image",
                "type" => "image",
                "instructions" => __( 'Custom background image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593923440171e",
                            "operator" => "==",
                            "value" => "custom"
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
                "key" => "field_5939asdfasdf1f80",
                "label" => __( 'Background image size', 'norebro' ),
                "name" => "global_project_page_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593923440171e",
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
                "key" => "field_59390de23342387",
                "label" => __( 'Background image position', 'norebro' ),
                "name" => "global_project_page_background_position",
                "type" => "select",
                "instructions" => __( 'Choose background image position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5939asdfasdf1f80",
                            "operator" => "==",
                            "value" => "auto"
                        ],
                        [
                            "field" => "field_593923440171e",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ],
                    [
                        [
                            "field" => "field_5939asdfasdf1f80",
                            "operator" => "==",
                            "value" => "contain"
                        ],
                        [
                            "field" => "field_593923440171e",
                            "operator" => "==",
                            "value" => "custom"
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

                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_593923b02758",
                "label" => __( 'Background image repeat', 'norebro' ),
                "name" => "global_project_page_background_repeat",
                "type" => "select",
                "instructions" => __( 'Choose background image repeat type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5939asdfasdf1f80",
                            "operator" => "==",
                            "value" => "auto"
                        ],
                        [
                            "field" => "field_593923440171e",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ],
                    [
                        [
                            "field" => "field_5939asdfasdf1f80",
                            "operator" => "==",
                            "value" => "contain"
                        ],
                        [
                            "field" => "field_593923440171e",
                            "operator" => "==",
                            "value" => "custom"
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
                "key" => "field_59390asd02b58",
                "label" => __( 'Background attachment', 'norebro' ),
                "name" => "global_project_page_background_is_attached",
                "type" => "true_false",
                "instructions" => __( 'You can fix background image on this page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593923440171e",
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
                "key" => "field_59390d23402f35",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_project_page_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Custom background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],



            [
                "key" => "field_592f4a166937e",
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
                "key" => "field_59fb44344asdd33615",
                "label" => __( 'Lightbox preview', 'norebro' ),
                "name" => "global_portfolio_projects_in_popup",
                "type" => "true_false",
                "instructions" => __( 'Enable lightbox preview for portfolio project', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_592fd66623dd8",
                "label" => __( 'Lightbox skin', 'norebro' ),
                "name" => "global_portfolio_gallery_light",
                "type" => "radio",
                "instructions" => __( 'Choose skin for lightbox preview', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "dark" => "Dark",
                    "light" => "Light"
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "dark",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb4ad44567d33615",
                "label" => __( 'Project description', 'norebro' ),
                "name" => "global_portfolio_gallery_description",
                "type" => "true_false",
                "instructions" => __( 'Hide portfolio description from lightbox', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "default_value" => 0,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59fb4ad44566d33615",
                "label" => __( 'Project details', 'norebro' ),
                "name" => "global_portfolio_gallery_details",
                "type" => "true_false",
                "instructions" => __( 'Hide portfolio details from lightbox', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "default_value" => 0,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59fb4ad44asdtd33615",
                "label" => __( 'Project link', 'norebro' ),
                "name" => "global_portfolio_gallery_link",
                "type" => "true_false",
                "instructions" => __( 'Hide <em>\"View project\"</em> link from lightbox', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "default_value" => 0,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59fb4ad44a1dtd33615",
                "label" => __( 'Project link text', 'norebro' ),
                "name" => "global_portfolio_gallery_link_text",
                "type" => "text",
                "instructions" => __( 'Enter custome text for project link', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "View Project",
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59fb4ad44asdd33615",
                "label" => __( 'Auto scrolling', 'norebro' ),
                "name" => "global_portfolio_gallery_autoplay",
                "type" => "true_false",
                "instructions" => __( 'Enable auto scrolling for lightbox carousel', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "default_value" => 0,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59fb4ad44afsdd33615",
                "label" => __( 'Auto scrolling interval', 'norebro' ),
                "name" => "global_portfolio_gallery_autoplay_time",
                "type" => "number",
                "instructions" => __( 'Autoplay interval timeout in seconds', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => 5,
                "append" => "seconds",
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_592fe6166937e",
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
                "key" => "field_5931067c175b5",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "global_project_header_use_hero",
                "type" => "radio",
                "instructions" => __( 'Hide header title from project pages?', 'norebro' ),
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
                "key" => "field_59310b5b35a20",
                "label" => __( 'Height settings', 'norebro' ),
                "name" => "global_project_header_title_height_settings",
                "type" => "radio",
                "instructions" => __( 'Choose height type for header title', 'norebro' ),
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
                "key" => "field_593105ee5d7af",
                "label" => __( 'Height', 'norebro' ),
                "name" => "global_project_header_height",
                "type" => "norebro_responsive_height",
                "instructions" => __( 'Set up header title height', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59310b5b35a20",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_593105d65d7ae",
                            "operator" => "!=",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_593105d65d7ae",
                "label" => __( 'Fullscreen height', 'norebro' ),
                "name" => "global_project_title_height_fullscreen",
                "type" => "true_false",
                "instructions" => __( 'Enable fullscreen height for header title?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_593102f7b99f7",
                "label" => __( 'Content position', 'norebro' ),
                "name" => "global_portfolio_header_title_align",
                "type" => "select",
                "instructions" => __( 'Choose header title content position for project pages', 'norebro' ),
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
                "key" => "field_592fe6df9bea5",
                "label" => __( 'Background type', 'norebro' ),
                "name" => "global_portfolio_header_title_type",
                "type" => "select",
                "instructions" => __( 'Choose background type for header title', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "color" => "Custom background color",
                    "custom" => "Custom loaded image"
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
                "key" => "field_592fe7d7fe779",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_portfolio_title_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe6df9bea5",
                            "operator" => "!=",
                            "value" => "inherit"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_592fe81e4e6d1",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "global_portfolio_title_background_image",
                "type" => "image",
                "instructions" => __( 'Upload background image for header title', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe6df9bea5",
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
                "key" => "field_593019c8e452c",
                "label" => __( 'Background image size', 'norebro' ),
                "name" => "global_portfolio_title_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe6df9bea5",
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
                "key" => "field_593025e5dbc6f",
                "label" => __( 'Background image position', 'norebro' ),
                "name" => "global_portfolio_title_background_position",
                "type" => "select",
                "instructions" => __( 'Choose background image position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe6df9bea5",
                            "operator" => "==",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_593019c8e452c",
                            "operator" => "==",
                            "value" => "auto"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592fe6df9bea5",
                            "operator" => "==",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_593019c8e452c",
                            "operator" => "==",
                            "value" => "contain"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592fe6df9bea5",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_593019c8e452c",
                            "operator" => "==",
                            "value" => "auto"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592fe6df9bea5",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_593019c8e452c",
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
                "key" => "field_5930285d3f1ff",
                "label" => __( 'Background image repeat', 'norebro' ),
                "name" => "global_portfolio_title_background_repeat",
                "type" => "select",
                "instructions" => __( 'Choose background image repeat type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe6df9bea5",
                            "operator" => "==",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_593019c8e452c",
                            "operator" => "==",
                            "value" => "auto"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592fe6df9bea5",
                            "operator" => "==",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_593019c8e452c",
                            "operator" => "==",
                            "value" => "contain"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592fe6df9bea5",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_593019c8e452c",
                            "operator" => "==",
                            "value" => "auto"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592fe6df9bea5",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_593019c8e452c",
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
                "key" => "field_593029f1e5302",
                "label" => __( 'Background overlay', 'norebro' ),
                "name" => "global_portfolio_use_title_overlay",
                "type" => "radio",
                "instructions" => __( 'Add colored overlay over background image?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe6df9bea5",
                            "operator" => "==",
                            "value" => "inherit"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592fe6df9bea5",
                            "operator" => "==",
                            "value" => "custom"
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
                "key" => "field_59302aa9e5304",
                "label" => __( 'Background overlay color', 'norebro' ),
                "name" => "global_portfolio_title_background_overlay_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background overlay color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fe6df9bea5",
                            "operator" => "==",
                            "value" => "inherit"
                        ],
                        [
                            "field" => "field_593029f1e5302",
                            "operator" => "!=",
                            "value" => "no"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592fe6df9bea5",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_593029f1e5302",
                            "operator" => "!=",
                            "value" => "no"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_5931041de1845",
                "label" => __( 'Typography settings', 'norebro' ),
                "name" => "global_portfolio_typography_settings",
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
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_593105045d7ac",
                "label" => __( 'Title settings', 'norebro' ),
                "name" => "global_project_header_title_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typograhy for hero titles', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5931041de1845",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_5931058d5d7ad",
                "label" => __( 'Subtitle settings', 'norebro' ),
                "name" => "global_project_header_subtitle_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typograhy for subtitles', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5931041de1845",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_592fe61fd937e",
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
                "key" => "field_5936a7a521481ebmod23",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "label" => '<h4>' . __( 'Sharing Settings', 'norebro' ) . '</h4>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_592fd666231f2",
                "label" => __( 'Sharing', 'norebro' ),
                "name" => "global_project_hide_sharing_buttons",
                "type" => "true_false",
                "instructions" => __( 'Disable sharing feature for project pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No",
                "message" => "",
                "default_value" => 0
            ],
            [
                "key" => "field_592fd666235d9",
                "label" => __( 'Sharing networks', 'norebro' ),
                "name" => "global_project_social_sharing_buttons",
                "type" => "select",
                "instructions" => __( 'Choose sharing social networks', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592fd666231f2",
                            "operator" => "!=",
                            "value" => "1"
                        ]
                    ]
                ],
                "choices" => [
                    "facebook" => "Facebook",
                    "twitter" => "Twitter",
                    "pinterest" => "Pinterest",
                    "linkedin" => "LinkedIn"
                ],
                "default_value" => [],
                "allow_null" => 0,
                "multiple" => 1,
                "ui" => 1,
                "ajax" => 1,
                "return_format" => "value",
                "placeholder" => ""
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-portfolio"
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

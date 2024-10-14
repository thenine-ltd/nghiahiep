<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_593be7a6c2017",
        "title" => "Shop Settings",
        "private" => true,
        "fields" => [
            [
                "key" => "field_591b4f20ed84e",
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
                "key" => "field_5937e0a51b48cexmod155",
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
                "key" => "field_58383c7ed01ae_laytype",
                "label" => __( 'Grid layout', 'norebro' ),
                "name" => "global_woocommerce_shop_layout",
                "type" => "select",
                "instructions" => __( 'Choose grid layout type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "default" => __( 'Classic', 'norebro' ),
                    "masonry" => __( 'Masonry', 'norebro' )
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
                "key" => "field_58383c7ed01ae_shop_count",
                "label" => __( 'Product items per page', 'norebro' ),
                "name" => "global_woocommerce_products_on_page",
                "type" =>"text",
                "instructions" => __( 'Choose the number of product items per page', 'norebro' ),
                "required" => 0,
                "append" => __( 'products', 'norebro' ),
                "conditional_logic" => 0,
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "maxlength" => "2",
                "placeholder" => ""
            ],
            [
                "key" => "field_58383c7ed02ae",
                "label" => __( 'Product items per row', 'norebro' ),
                "name" => "global_woocommerce_products_in_row",
                "type" =>"norebro_ecommerce_columns",
                "instructions" => __( 'Choose the number of product items per row', 'norebro' ),
                "default_value" => [
                    "large" => "3",
                    "medium" => "2",
                    "small" => "1"
                ]
            ],
            [
                "key" => "field_593beasdf34251893",
                "label" => __( 'Product grid gallery auto scroll', 'norebro' ),
                "name" => "global_woocommerce_products_autoplay",
                "type" => "true_false",
                "instructions" => __( 'Enable grid gallery auto scroll', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_59374323b383615",
                "label" => __( 'Pagination', 'norebro' ),
                "name" => "global_woocommerce_pagination_type",
                "type" => "select",
                "instructions" => __( 'Choose pagination type for shop page', 'norebro' ),
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
                "key" => "field_593743237383615",
                "label" => __( 'Pagination position', 'norebro' ),
                "name" => "global_woocommerce_pagination_position",
                "type" => "select",
                "instructions" => __( 'Choose pagination position for shop page', 'norebro' ),
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
                "key" => "field_593be7a6d2429",
                "label" => __( 'Shop Page', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_593be7a6d437b",
                "label" => __( 'Breadcrumbs visibility', 'norebro' ),
                "name" => "global_woocommerce_page_show_breadcrumbs",
                "type" => "radio",
                "instructions" => __( 'Show breadcrumbs section on shop pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'Show', 'norebro' ),
                    "no" => __( 'Hide', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_593be7a6fas124d437b",
                "label" => __( 'Category slug', 'norebro' ),
                "name" => "global_woocommerce_page_show_category_breadcrumbs",
                "type" => "radio",
                "instructions" => __( 'Show product categories in breadcrumbs?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "yes" => __( 'Show', 'norebro' ),
                    "no" => __( 'Hide', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "yes",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59fb433sbgd33615",
                "label" => __( 'Breadcrumbs slug', 'norebro' ),
                "name" => "global_woocommerce_breadcrumbs_slug",
                "type" => "text",
                "instructions" => __( 'Enter custom text for breadcrumbs slug', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_593be7a6d4778",
                "label" => __( 'Content wrapper', 'norebro' ),
                "name" => "global_woocommerce_page_is_wrapped",
                "type" => "radio",
                "instructions" => __( 'Add page content wrapper to shop pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593edd79aa843",
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
                "key" => "field_593be7fasa6dfq41",
                "label" => __( 'Custom content position', 'norebro' ),
                "name" => "global_shop_content_position",
                "type" => "select",
                "instructions" => __( 'Choose WPBakery Page Builder page content position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => false,
                "choices" => [
                    "top" => __( 'Top - Before Products', 'norebro' ),
                    "bottom" => __( 'Bottom - After Products', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_593edd79aa843",
                "label" => __( 'Boxed page layout', 'norebro' ),
                "name" => "global_woocommerce_use_boxed_wrapper",
                "type" => "radio",
                "instructions" => __( 'Wrap Shop pages in boxed container', 'norebro' ),
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
                "key" => "field_593be7a6d2871",
                "label" => __( 'Background type', 'norebro' ),
                "name" => "global_woocommerce_page_background_type",
                "type" => "radio",
                "instructions" => __( 'Choose background type for shop pages', 'norebro' ),
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
                "key" => "field_593be7a6d2bfc",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "global_woocommerce_page_background_image",
                "type" => "image",
                "instructions" => __( 'Custom background image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be7a6d2871",
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
                "key" => "field_593be7a6d2fe1",
                "label" => __( 'Background size', 'norebro' ),
                "name" => "global_woocommerce_page_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be7a6d2871",
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
                "key" => "field_593be7a6d33d2",
                "label" => __( 'Background position', 'norebro' ),
                "name" => "global_woocommerce_page_background_position",
                "type" => "select",
                "instructions" => __( 'Choose background image position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be7a6d2fe1",
                            "operator" => "==",
                            "value" => "auto"
                        ],
                        [
                            "field" => "field_593be7a6d2871",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ],
                    [
                        [
                            "field" => "field_593be7a6d2fe1",
                            "operator" => "==",
                            "value" => "contain"
                        ],
                        [
                            "field" => "field_593be7a6d2871",
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
                "key" => "field_593be7a6d37bb",
                "label" => __( 'Background repeat', 'norebro' ),
                "name" => "global_woocommerce_page_background_repeat",
                "type" => "select",
                "instructions" => __( 'Choose repeat type for background image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be7a6d2fe1",
                            "operator" => "==",
                            "value" => "auto"
                        ],
                        [
                            "field" => "field_593be7a6d2871",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ],
                    [
                        [
                            "field" => "field_593be7a6d2fe1",
                            "operator" => "==",
                            "value" => "contain"
                        ],
                        [
                            "field" => "field_593be7a6d2871",
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
                "key" => "field_593be7a6d3b96",
                "label" => __( 'Background attachment', 'norebro' ),
                "name" => "global_woocommerce_page_background_is_attached",
                "type" => "true_false",
                "instructions" => __( 'Fix background image for shop pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be7a6d2871",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_593be7a6d3f97",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_woocommerce_page_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background color for shop pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_593743s37383615",
                "label" => __( 'Sidebar', 'norebro' ),
                "name" => "global_woocommerce_sidebar",
                "type" => "select",
                "instructions" => __( 'Choose sidebar position for shop pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "without" => __( 'Without Sidebar', 'norebro' ),
                    "right" => __( 'Right', 'norebro' ),
                    "left" => __( 'Left', 'norebro' )
                ],
                "default_value" => [
                    "without"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_593be7a6cb6d8",
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
                "key" => "field_593be7a6cbac1",
                "label" => __( 'Header layout', 'norebro' ),
                "name" => "global_woocommerce_header_menu_style",
                "type" => "image_option",
                "instructions" => __( 'Choose header template', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "image_option_value" => [
                    [
                        "name" => "inherit",
                        "description" => __( 'Use from Page Settings', 'norebro' ),
                        "src" => "acf__image_inherited.svg"
                    ],
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
                "default_value" => "inherit"
            ],
            [
                "key" => "field_59412ba9ad9b7",
                "label" => __( 'Blank spacer under header', 'norebro' ),
                "name" => "global_woocommerce_header_add_cap",
                "type" => "radio",
                "instructions" => __( 'We recommend use this setting for transparent and fixed header navigation', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'Add Spacer', 'norebro' ),
                    "no" => __( 'Don\'t Add', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_593be7a6cbea5",
                "label" => __( 'Content wrapper', 'norebro' ),
                "name" => "global_woocommerce_header_menu_use_wrapper",
                "type" => "radio",
                "instructions" => __( 'Use header content wrapper', 'norebro' ),
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
                "key" => "field_59412c4ddd0b7",
                "label" => __( 'Header styles', 'norebro' ),
                "name" => "global_woocommerce_header_menu_style_settings",
                "type" => "radio",
                "instructions" => __( 'Define header custom styles', 'norebro' ),
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
                "key" => "field_59413906d625b",
                "label" => __( 'Height', 'norebro' ),
                "name" => "global_woocommerce_header_menu_height",
                "type" => "norebro_responsive_height",
                "instructions" => __( 'Set up header height', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59412c4ddd0b7",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_593be7a6cca51",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_woocommerce_header_menu_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59412c4ddd0b7",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_593be7a6cce2c",
                "label" => __( 'Typography', 'norebro' ),
                "name" => "global_woocommerce_header_menu_text_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Content text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59412c4ddd0b7",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_593be7a6cd5f7",
                "label" => __( 'Bottom border', 'norebro' ),
                "name" => "global_woocommerce_header_menu_hide_border",
                "type" => "true_false",
                "instructions" => __( 'Hide bottom border from header?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59412c4ddd0b7",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_593be7a6cddf0",
                "label" => __( 'Bottom border type', 'norebro' ),
                "name" => "global_woocommerce_header_menu_border_type",
                "type" => "select",
                "instructions" => __( 'Choose border stroke type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59412c4ddd0b7",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_593be7a6cd5f7",
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
                "key" => "field_593be7a6cda06",
                "label" => __( 'Bottom border color', 'norebro' ),
                "name" => "global_woocommerce_header_menu_border_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose bottom border color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59412c4ddd0b7",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_593be7a6cd5f7",
                            "operator" => "!=",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_5937a0a52148cexmod23",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "label" => '<h4>' . __( 'Sticky Header', 'norebro' ) . '</h4>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_593be7a6ced67",
                "label" => __( 'Sticky header', 'norebro' ),
                "name" => "global_woocommerce_header_menu_fixed",
                "type" => "radio",
                "instructions" => __( 'Enable sticky header, when you scrolling the page', 'norebro' ),
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
                "key" => "field_5937e0a52148cexmod23",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "label" => '<h4>' . __( 'Logo Settings', 'norebro' ) . '</h4>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59412a19f4b88",
                "label" => __( 'Brand logo', 'norebro' ),
                "name" => "global_woocommerce_header_logo_style",
                "type" => "select",
                "instructions" => __( 'Select header logo style', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "dark_variant" => __( 'Dark variant', 'norebro' ),
                    "light_variant" => __( 'Light variant', 'norebro' ),
                    "sitename" => __( 'Text logo', 'norebro' ),
                    "custom" => __( 'Custom Image', 'norebro' )
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
                "key" => "field_59412ac638d56",
                "label" => __( 'Text logo settings', 'norebro' ),
                "name" => "global_woocommerce_header_sitename_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Custom typography settings', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59412a19f4b88",
                            "operator" => "==",
                            "value" => "sitename"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_59412af638d57",
                "label" => __( 'Custom logo', 'norebro' ),
                "name" => "global_woocommerce_header_custom_logo",
                "type" => "image",
                "instructions" => __( 'Custom loaded image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59412a19f4b88",
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
                "key" => "field_593770a52148cexmod23",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "label" => '<h4>' . __( 'Menu Settings', 'norebro' ) . '</h4>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_593be7a6cc66e",
                "label" => __( 'Menu type', 'norebro' ),
                "name" => "global_woocommerce_menu_type",
                "type" => "radio",
                "instructions" => __( 'Choose menu type for shop pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "full" => __( 'Extended Menu', 'norebro' ),
                    "hamburger" => __( 'Hamburger Menu', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_593770a5214bcexmod23",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "label" => '<h4>' . __( 'Subheader Settings', 'norebro' ) . '</h4>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_593be7a6ce1ba",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "global_woocommerce_header_menu_add_contacts_bar",
                "type" => "radio",
                "instructions" => __( 'Show subheader bar on shop pages?', 'norebro' ),
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
                "key" => "field_594104c4f2c34",
                "label" => __( 'Subheader styles', 'norebro' ),
                "name" => "global_woocommerce_header_menu_contacts_bar_style",
                "type" => "radio",
                "instructions" => __( 'Choose subheader style for shop pages', 'norebro' ),
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
                "key" => "field_59410542f2c35",
                "label" => __( 'Height', 'norebro' ),
                "name" => "global_woocommerce_header_menu_contacts_bar_height",
                "type" => "norebro_responsive_height",
                "instructions" => __( 'Set up subheader height', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_594104c4f2c34",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_593be7a6ce5b9",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_woocommerce_header_menu_contacts_bar_background",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background color for subheader', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_594104c4f2c34",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_593be7a6ce975",
                "label" => __( 'Typography', 'norebro' ),
                "name" => "global_woocommerce_header_menu_contacts_bar_text_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Custom typography settings', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_594104c4f2c34",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_593be7a6cf173",
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
                "key" => "field_593be7a6d2062",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "global_woocommerce_header_use_hero",
                "type" => "radio",
                "instructions" => __( 'Hide header title from shop pages?', 'norebro' ),
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
                "key" => "field_593be7a6d1893",
                "label" => __( 'Fullscreen height', 'norebro' ),
                "name" => "global_woocommerce_header_height_fullscreen",
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
                "key" => "field_593be7a6d1c53",
                "label" => __( 'Height', 'norebro' ),
                "name" => "global_woocommerce_header_height",
                "type" => "norebro_responsive_height",
                "instructions" => __( 'Set up header title height', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be7a6d1893",
                            "operator" => "!=",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_593be7a6cf58a",
                "label" => __( 'Subtitle text', 'norebro' ),
                "name" => "global_woocommerce_header_subtitle",
                "type" => "text",
                "instructions" => __( 'Custom subtitle text', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "formatting" => "html",
                "maxlength" => ""
            ],
            [
                "key" => "field_593d5de953e57",
                "label" => __( 'Content position', 'norebro' ),
                "name" => "global_woocommerce_header_title_align",
                "type" => "select",
                "instructions" => __( 'Choose header title content position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "left" => __( 'Left', 'norebro' ),
                    "center" => "Center",
                    "right" => "Right"
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
                "key" => "field_593be851ebe2f",
                "label" => __( 'Background type', 'norebro' ),
                "name" => "global_woocommerce_header_title_background_type",
                "type" => "select",
                "instructions" => __( 'Choose background type for header title', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "color" => __( 'Background Color', 'norebro' ),
                    "image" => __( 'Custom Image', 'norebro' )
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
                "key" => "field_593be7a6d10ac",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_woocommerce_header_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose header background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be851ebe2f",
                            "operator" => "!=",
                            "value" => "inherit"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_593be7a6cf964",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "global_woocommerce_header_background_image",
                "type" => "image",
                "instructions" => __( 'Upload background image for header title', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be851ebe2f",
                            "operator" => "==",
                            "value" => "image"
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
                "key" => "field_593be7a6cfd29",
                "label" => __( 'Background size', 'norebro' ),
                "name" => "global_woocommerce_header_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be851ebe2f",
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
                "key" => "field_593be7a6d014b",
                "label" => __( 'Background position', 'norebro' ),
                "name" => "global_woocommerce_header_background_position",
                "type" => "select",
                "instructions" => __( 'Choose background image position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be7a6cfd29",
                            "operator" => "==",
                            "value" => "auto"
                        ],
                        [
                            "field" => "field_593be851ebe2f",
                            "operator" => "==",
                            "value" => "image"
                        ]
                    ],
                    [
                        [
                            "field" => "field_593be7a6cfd29",
                            "operator" => "==",
                            "value" => "contain"
                        ],
                        [
                            "field" => "field_593be851ebe2f",
                            "operator" => "==",
                            "value" => "image"
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
                "key" => "field_593be7a6d0501",
                "label" => __( 'Background repeat', 'norebro' ),
                "name" => "global_woocommerce_header_background_repeat",
                "type" => "select",
                "instructions" => __( 'Repeat type of background image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be7a6cfd29",
                            "operator" => "==",
                            "value" => "auto"
                        ],
                        [
                            "field" => "field_593be851ebe2f",
                            "operator" => "==",
                            "value" => "image"
                        ]
                    ],
                    [
                        [
                            "field" => "field_593be7a6cfd29",
                            "operator" => "==",
                            "value" => "contain"
                        ],
                        [
                            "field" => "field_593be851ebe2f",
                            "operator" => "==",
                            "value" => "image"
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
                "key" => "field_593be7a6d08c2",
                "label" => __( 'Background overlay', 'norebro' ),
                "name" => "global_woocommerce_header_use_overlay",
                "type" => "radio",
                "instructions" => __( 'Add colored overlay over background image?', 'norebro' ),
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
                "key" => "field_593be7a6d0cb4",
                "label" => __( 'Background overlay color', 'norebro' ),
                "name" => "global_woocommerce_header_overlay_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background overlay color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be7a6d08c2",
                            "operator" => "!=",
                            "value" => "no"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_593be7a6d14a6",
                "label" => __( 'Typography settings', 'norebro' ),
                "name" => "global_woocommerce_page_typography_settings",
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
                "key" => "field_593d4af12422c",
                "label" => __( 'Title settings', 'norebro' ),
                "name" => "global_woocommerce_header_title_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typograhy for hero titles', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be7a6d14a6",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_593d4b332422d",
                "label" => __( 'Subtitle settings', 'norebro' ),
                "name" => "global_woocommerce_header_subtitle_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typograhy for subtitles', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593be7a6d14a6",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_593be7a6d4b64",
                "label" => __( 'Footer', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_593be7a6d725e",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "global_woocommerce_footer_hide",
                "type" => "radio",
                "instructions" => __( 'Hide footer from shop pages?', 'norebro' ),
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
                "key" => "field_593be7a6d7644",
                "label" => __( 'Content wrapper', 'norebro' ),
                "name" => "global_woocommerce_footer_is_wrapped",
                "type" => "radio",
                "instructions" => __( 'Add footer content wrapper?', 'norebro' ),
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
                "key" => "field_5940ecce7fe58",
                "label" => __( 'Content text color', 'norebro' ),
                "name" => "global_woocommerce_footer_text_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose content text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_5940e1dbc5ce2",
                "label" => __( 'Background type', 'norebro' ),
                "name" => "global_woocommerce_footer_background_type",
                "type" => "radio",
                "instructions" => __( 'Choose background type', 'norebro' ),
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
                "key" => "field_593be7a6d5ec9",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "global_woocommerce_footer_background_image",
                "type" => "image",
                "instructions" => __( 'Upload background image for footer', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5940e1dbc5ce2",
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
                "max_height" => 1200,
                "max_size" => "",
                "mime_types" => ""
            ],
            [
                "key" => "field_593be7a6d62c5",
                "label" => __( 'Background size', 'norebro' ),
                "name" => "global_woocommerce_footer_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5940e1dbc5ce2",
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
                "key" => "field_593be7a6d66b1",
                "label" => __( 'Background position', 'norebro' ),
                "name" => "global_woocommerce_footer_background_position",
                "type" => "select",
                "instructions" => __( 'Choose background image position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5940e1dbc5ce2",
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
                "key" => "field_593be7a6d6aac",
                "label" => __( 'Background repeat', 'norebro' ),
                "name" => "global_woocommerce_footer_background_repeat",
                "type" => "select",
                "instructions" => __( 'Choose repeat type for background image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5940e1dbc5ce2",
                            "operator" => "==",
                            "value" => "custom"
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
                "key" => "field_593be7a6d5706",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_woocommerce_footer_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose footer background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5940e1dbc5ce2",
                            "operator" => "!=",
                            "value" => "inherit"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_5940e241c5ce3",
                "label" => __( 'Footer widget logo type', 'norebro' ),
                "name" => "global_woocommerce_footer_widget_logo_type",
                "type" => "select",
                "instructions" => __( 'Choose footer logo type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "light_variant" => "Light variant logo",
                    "dark_variant" => "Dark variant logo",
                    "sitename" => "Site name",
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
                "key" => "field_593be7a6d4f36",
                "label" => __( 'Footer site name settings', 'norebro' ),
                "name" => "global_woocommerce_footer_sitename_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Custom site name typography', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5940e241c5ce3",
                            "operator" => "==",
                            "value" => "sitename"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_5940e2cbc5ce4",
                "label" => __( 'Footer custom logo', 'norebro' ),
                "name" => "global_woocommerce_footer_custom_logo",
                "type" => "image",
                "instructions" => __( 'Custom loaded image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5940e241c5ce3",
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
                "key" => "field_5940e516ada44",
                "label" => __( 'Sticky footer', 'norebro' ),
                "name" => "global_woocommerce_footer_is_sticky",
                "type" => "radio",
                "instructions" => __( 'Set sticky (fixed) footer on shop pages?', 'norebro' ),
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
                "key" => "field_5935e0a52b48cexmod60",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "label" => '<h4>' . __( 'Copyright Bar', 'norebro' ) . '</h4>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_593be7a6d7a67",
                "label" => __( 'Copyright bar visibility', 'norebro' ),
                "name" => "global_woocommerce_footer_show_copyright_section",
                "type" => "radio",
                "instructions" => __( 'Show copyright section on shop pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'Show', 'norebro' ),
                    "no" => __( 'Hide', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_593be7a6d7e8e",
                "label" => __( 'Copyright bar background', 'norebro' ),
                "name" => "global_woocommerce_footer_copyright_section_background",
                "type" => "norebro_color",
                "instructions" => __( 'Choose section background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_593be7a6d82b3",
                "label" => __( 'Copyright bar text color', 'norebro' ),
                "name" => "global_woocommerce_footer_copyright_section_text_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose section content text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_593be7a6d82b4",
                "label" => __( 'Copyright bar links color', 'norebro' ),
                "name" => "global_woocommerce_footer_copyright_section_links_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose section content links color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_593beba6d4b64",
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
                "key" => "field_593743234457tr",
                "label" => __( 'Cart icon', 'norebro' ),
                "name" => "global_woocommerce_cart_icon",
                "type" => "true_false",
                "default_value" => true,
                "ui" => true
            ],
            [
                "key" => "field_593770a5214bc1xmod23",
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
                "key" => "field_593743w37383615",
                "label" => __( 'Sharing', 'norebro' ),
                "name" => "global_woocommerce_sharing",
                "type" => "true_false",
                "instructions" => __( 'Disable sharing feature for product pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "new_lines" => "",
                "esc_html" => 0,
                "ui" => true
            ],
            [
                "key" => "field_593743e37383615",
                "label" => __( 'Sharing networks', 'norebro' ),
                "name" => "global_woocommerce_sharing_networks",
                "type" => "select",
                "instructions" => __( 'Choose sharing social networks', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593743w37383615",
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
                    "value" => "theme-general-woocommerce"
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

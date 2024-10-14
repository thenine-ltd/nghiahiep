<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_59390deae2279",
        "title" => "Page Settings",
        "title" => __( 'Page Settings', 'norebro' ),
        "private" => true,
        "fields" => [
            [
                "key" => "field_59390deaeee3d",
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
                "key" => "field_5937e0a52b48cexmod31",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "<p class=\"message\"><span class=\"icon ion-information-circled\"></span> <b>Note:</b> these settings apply only to the current page.</p>",
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_59390deaef21a",
                "label" => __( 'Header layout', 'norebro' ),
                "name" => "header_menu_style",
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
                "key" => "field_59390deaef9ea",
                "label" => __( 'Blank spacer under header', 'norebro' ),
                "name" => "header_menu_add_cap",
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
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59390deaef614",
                "label" => __( 'Content wrapper', 'norebro' ),
                "name" => "header_menu_use_wrapper",
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
                "key" => "field_59411fcf0048f",
                "label" => __( 'Header styles', 'norebro' ),
                "name" => "header_menu_style_settings",
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
                "key" => "field_5941276d0b89b",
                "label" => __( 'Height', 'norebro' ),
                "name" => "header_menu_height",
                "type" => "norebro_responsive_height",
                "instructions" => __( 'Set up header height', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59411fcf0048f",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59390deaf01d4",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "header_menu_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose header background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59411fcf0048f",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59390deaf05bd",
                "label" => __( 'Typography', 'norebro' ),
                "name" => "header_menu_text_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typography for header', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59411fcf0048f",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_5941261c69959",
                "label" => __( 'Bottom border', 'norebro' ),
                "name" => "header_menu_hide_border",
                "type" => "true_false",
                "instructions" => __( 'Hide bottom border from header?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59411fcf0048f",
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
                "key" => "field_594126ed0b898",
                "label" => __( 'Bottom border type', 'norebro' ),
                "name" => "header_menu_border_type",
                "type" => "select",
                "instructions" => __( 'Choose border stroke type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59411fcf0048f",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_5941261c69959",
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
                "key" => "field_594127340b89a",
                "label" => __( 'Bottom border color', 'norebro' ),
                "name" => "header_menu_border_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose bottom border color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59411fcf0048f",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_5941261c69959",
                            "operator" => "!=",
                            "value" => "1"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_5937a0a521s71ebmod23",
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
                "key" => "field_59390deaf1978",
                "label" => __( 'Sticky header', 'norebro' ),
                "name" => "header_menu_fixed",
                "type" => "radio",
                "instructions" => __( 'Enable sticky header, when you scrolling the page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'Fixed', 'norebro' ),
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
                "key" => "field_5937afa621s71ebmod23",
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
                "key" => "field_59391a16302be",
                "label" => __( 'Brand logo', 'norebro' ),
                "name" => "header_logo_style",
                "type" => "select",
                "instructions" => __( 'Choose logo type for this page', 'norebro' ),
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

                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_59390deaf09ac",
                "label" => __( 'Text logo settings', 'norebro' ),
                "name" => "header_menu_sitename_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Custom setting for text logo typography', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391a16302be",
                            "operator" => "==",
                            "value" => "sitename"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_59411f87d2536",
                "label" => __( 'Custom logo', 'norebro' ),
                "name" => "header_menu_custom_logo",
                "type" => "image",
                "instructions" => __( 'Loaded logo image for this page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59391a16302be",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "return_format" => "url",
                "preview_size" => "thumbnail",
                "library" => "all",
            ],
            [
                "key" => "field_5937a0a621s71ebmod23",
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
                "key" => "field_59390deaefde5",
                "label" => __( 'Menu type', 'norebro' ),
                "name" => "menu_type",
                "type" => "radio",
                "instructions" => __( 'Choose menu type for this page', 'norebro' ),
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
                "key" => "field_59390deaefde5123",
                "label" => __( 'Extended Menu', 'norebro' ),
                "name" => "extended_menu",
                "type" => "norebro_page_menu",
                "instructions" => __( 'Choose from already pre-made menus', 'norebro' ) . '&nbsp;<em>( ' . __( 'Appearance', 'norebro' ) . '&nbsp;>&nbsp;' . '<a target="_blank" href="./nav-menus.php">' . __( 'Menus', 'norebro' ) . '</a>)</em>',
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deaefde5",
                            "operator" => "==",
                            "value" => "full"
                        ]
                    ]
                ],
                "required" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59390deaefde5123asftqew",
                "label" => __( 'Hamburger Menu', 'norebro' ),
                "name" => "hamburger_menu",
                "type" => "norebro_page_menu",
                "instructions" => __( 'Choose from already pre-made menus', 'norebro' ) . '&nbsp;<em>( ' . __( 'Appearance', 'norebro' ) . '&nbsp;>&nbsp;' . '<a target="_blank" href="./nav-menus.php">' . __( 'Menus', 'norebro' ) . '</a>)</em>',
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deaefde5",
                            "operator" => "==",
                            "value" => "hamburger"
                        ]
                    ]
                ],
                "required" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59229bdfqr74dmod2",
                "label" => __( 'Hamburger position', 'norebro' ),
                "name" => "menu_hamburger_align",
                "type" => "radio",
                "instructions" => __( 'Choose hamburger menu position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deaefde5",
                            "operator" => "==",
                            "value" => "hamburger"
                        ]
                    ]
                ],
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
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
                "key" => "field_59229bqraf317ae_modd",
                "label" => __( 'Overlay menu layout', 'norebro' ),
                "name" => "fullscreen_menu_style",
                "type" => "image_option",
                "instructions" => __( 'Choose layout type for overlay menu', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deaefde5",
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
                        "name" => "inherit",
                        "description" => "Use from Page Settings",
                        "src" => "acf__image_inherited.svg"
                    ],
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
                "key" => "field_594102937ce5c",
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
                "key" => "field_59390deaf0da4",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "header_menu_add_contacts_bar",
                "type" => "radio",
                "instructions" => __( 'Append subheader bar to this page?', 'norebro' ),
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
                "key" => "field_5941030b7ce5d",
                "label" => __( 'Subheader styles', 'norebro' ),
                "name" => "header_menu_contacts_bar_style",
                "type" => "radio",
                "instructions" => __( 'Choose subheader style', 'norebro' ),
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
                "key" => "field_5941040a97ec9",
                "label" => __( 'Height', 'norebro' ),
                "name" => "header_menu_contacts_bar_height",
                "type" => "norebro_responsive_height",
                "instructions" => __( 'Set up subheader height', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5941030b7ce5d",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59390deaf11d5",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "header_menu_contacts_bar_background",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background color for subheader', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5941030b7ce5d",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59390deaf159e",
                "label" => __( 'Typography', 'norebro' ),
                "name" => "header_menu_contacts_bar_text_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typography for subheader', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_5941030b7ce5d",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_59390deaf1d7b",
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
                "key" => "field_59390deb00ef1",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "header_use_hero",
                "type" => "radio",
                "instructions" => __( 'Hide header title from this page?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => "Yes, hide",
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
                "key" => "field_59390deb00733",
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
                "key" => "field_59390deb00b09",
                "label" => __( 'Height', 'norebro' ),
                "name" => "header_height",
                "type" => "norebro_responsive_height",
                "instructions" => __( 'Set up header title height', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb00733",
                            "operator" => "!=",
                            "value" => "yes"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_593ddebba2fcb",
                "label" => __( 'Subtitle text', 'norebro' ),
                "name" => "header_subtitle",
                "type" => "text",
                "instructions" => __( 'Custom subtitle text', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ],
            [
                "key" => "field_59390deb0034e",
                "label" => __( 'Content position', 'norebro' ),
                "name" => "header_title_align",
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
                "key" => "field_59390deaf218a",
                "label" => __( 'Background type', 'norebro' ),
                "name" => "header_background_type",
                "type" => "radio",
                "instructions" => __( 'Choose background type for header title', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "image" => __( 'Custom Image', 'norebro' ),
                    "color" => __( 'Background Color', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59390deaf2985",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "header_background_image",
                "type" => "image",
                "instructions" => __( 'Upload background image for header title', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deaf218a",
                            "operator" => "==",
                            "value" => "image"
                        ]
                    ]
                ],
                "preview_size" => "thumbnail",
                "library" => "all",
                "return_format" => "url",
                "min_width" => 0,
                "min_height" => 0,
                "min_size" => 0,
                "max_width" => 0,
                "max_height" => 0,
                "max_size" => 0,
                "mime_types" => ""
            ],
            [
                "key" => "field_59390deaf2d6e",
                "label" => __( 'Background image size', 'norebro' ),
                "name" => "header_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deaf218a",
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
                "key" => "field_59390deaf3190",
                "label" => __( 'Background image position', 'norebro' ),
                "name" => "header_background_position",
                "type" => "select",
                "instructions" => __( 'Choose background image position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deaf2d6e",
                            "operator" => "==",
                            "value" => "auto"
                        ],
                        [
                            "field" => "field_59390deaf218a",
                            "operator" => "==",
                            "value" => "image"
                        ]
                    ],
                    [
                        [
                            "field" => "field_59390deaf2d6e",
                            "operator" => "==",
                            "value" => "contain"
                        ],
                        [
                            "field" => "field_59390deaf218a",
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
                "key" => "field_59390deaf355c",
                "label" => __( 'Background image repeat', 'norebro' ),
                "name" => "header_background_repeat",
                "type" => "select",
                "instructions" => __( 'Choose background image repeat type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deaf2d6e",
                            "operator" => "==",
                            "value" => "auto"
                        ],
                        [
                            "field" => "field_59390deaf218a",
                            "operator" => "==",
                            "value" => "image"
                        ]
                    ],
                    [
                        [
                            "field" => "field_59390deaf2d6e",
                            "operator" => "==",
                            "value" => "contain"
                        ],
                        [
                            "field" => "field_59390deaf218a",
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
                "key" => "field_59390deaf2582",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "header_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59390deaf3961",
                "label" => __( 'Background overlay', 'norebro' ),
                "name" => "header_use_overlay",
                "type" => "radio",
                "instructions" => __( 'Add colored overlay over background image?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deaf218a",
                            "operator" => "==",
                            "value" => "image"
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
                "key" => "field_59390deaf3d98",
                "label" => __( 'Background overlay color', 'norebro' ),
                "name" => "header_overlay_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background overlay color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deaf218a",
                            "operator" => "==",
                            "value" => "image"
                        ],
                        [
                            "field" => "field_59390deaf3961",
                            "operator" => "==",
                            "value" => "inherit"
                        ]
                    ],
                    [
                        [
                            "field" => "field_59390deaf218a",
                            "operator" => "==",
                            "value" => "image"
                        ],
                        [
                            "field" => "field_59390deaf3961",
                            "operator" => "==",
                            "value" => "yes"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_593a55746376f",
                "label" => __( 'Typography settings', 'norebro' ),
                "name" => "page_typography_settings",
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
                "key" => "field_593a55d063770",
                "label" => __( 'Title settings', 'norebro' ),
                "name" => "page_header_title_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typograhy for hero titles', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593a55746376f",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_593a565163771",
                "label" => __( 'Subtitle settings', 'norebro' ),
                "name" => "page_header_subtitle_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typograhy for subtitles', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593a55746376f",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_593d61608bfd1",
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
                "key" => "field_59390deb03328",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "page_show_breadcrumbs",
                "type" => "radio",
                "instructions" => __( 'Show breadcrumbs on this page?', 'norebro' ),
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
                "key" => "field_593d618e8bfd2",
                "label" => __( 'Breadcrumbs background color', 'norebro' ),
                "name" => "breadcrumbs_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose breadcrumbs block background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_593db13395d12",
                "label" => __( 'Breadcrumbs text color', 'norebro' ),
                "name" => "breadcrumbs_text_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose breadcrumbs text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59390deb012f8",
                "label" => __( 'Page', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59390deb03b1b",
                "label" => __( 'Content wrapper', 'norebro' ),
                "name" => "page_is_wrapped",
                "type" => "radio",
                "instructions" => __( 'Add content wrapper to this page', 'norebro' ),
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
                "key" => "field_591b10dbb4a82342342345623",
                "label" => __( 'Content wrapper width', 'norebro' ),
                "name" => "content_wrapper_width",
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
                "key" => "field_591b10dbb4a85_fwgaps_local",
                "label" => __( 'Full width wrapper side margins', 'norebro' ),
                "name" => "full_width_margins_size",
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
                "key" => "field_59390deb03f38",
                "label" => __( 'Content padding', 'norebro' ),
                "name" => "page_add_top_padding",
                "type" => "radio",
                "instructions" => __( 'Add top and bottom padding for page content', 'norebro' ),
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
                "key" => "field_59390deb03738",
                "label" => __( 'Boxed page layout', 'norebro' ),
                "name" => "page_use_boxed_wrapper",
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
                "key" => "field_59390deb0171e",
                "label" => __( 'Background type', 'norebro' ),
                "name" => "page_background_type",
                "type" => "radio",
                "instructions" => __( 'Select background type for page', 'norebro' ),
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
                "key" => "field_59390deb01b57",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "page_background_image",
                "type" => "image",
                "instructions" => __( 'Custom background image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb0171e",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "return_format" => "url",
                "preview_size" => "thumbnail",
                "library" => "all",
            ],
            [
                "key" => "field_59390deb01f80",
                "label" => __( 'Background image size', 'norebro' ),
                "name" => "page_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb0171e",
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
                "key" => "field_59390deb02387",
                "label" => __( 'Background image position', 'norebro' ),
                "name" => "page_background_position",
                "type" => "select",
                "instructions" => __( 'Choose background image position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb01f80",
                            "operator" => "==",
                            "value" => "auto"
                        ],
                        [
                            "field" => "field_59390deb0171e",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ],
                    [
                        [
                            "field" => "field_59390deb01f80",
                            "operator" => "==",
                            "value" => "contain"
                        ],
                        [
                            "field" => "field_59390deb0171e",
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
                "key" => "field_59390deb02758",
                "label" => __( 'Background image repeat', 'norebro' ),
                "name" => "page_background_repeat",
                "type" => "select",
                "instructions" => __( 'Choose background image repeat type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb01f80",
                            "operator" => "==",
                            "value" => "auto"
                        ],
                        [
                            "field" => "field_59390deb0171e",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ],
                    [
                        [
                            "field" => "field_59390deb01f80",
                            "operator" => "==",
                            "value" => "contain"
                        ],
                        [
                            "field" => "field_59390deb0171e",
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
                "key" => "field_59390deb02b58",
                "label" => __( 'Background attachment', 'norebro' ),
                "name" => "page_background_is_attached",
                "type" => "true_false",
                "instructions" => __( 'You can fix background image on this page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb0171e",
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
                "key" => "field_59390deb02f35",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "page_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Custom background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59390deaf218b",
                "label" => __( 'Sidebar', 'norebro' ),
                "name" => "page_sidebar",
                "type" => "select",
                "instructions" => __( 'Choose sidebar placement for all pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "without" => __( 'Without sidebar', 'norebro' ),
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
                "key" => "field_592345234958934",
                "label" => __( 'Sidebar layout', 'norebro' ),
                "name" => "page_sidebar_layout",
                "type" => "select",
                "instructions" => __( 'Choose sidebar layout', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "simple" => __( 'Simple', 'norebro' ),
                    "boxed" => "Boxed",
                    "boxed_offset" => "Boxed offset"
                ],
                "default_value" => [
                    "inherit"
                ],
                "return_format" => "value"
            ],
            [
                "key" => "field_59390deb04364",
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
                "key" => "field_59390deb06b99",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "footer_hide",
                "type" => "radio",
                "instructions" => __( 'Hide footer from this page?', 'norebro' ),
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
                "key" => "field_59390deb06fd1",
                "label" => __( 'Content wrapper', 'norebro' ),
                "name" => "footer_is_wrapped",
                "type" => "radio",
                "instructions" => __( 'Add footer content wrapper?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_5940ec917da19",
                "label" => __( 'Content text color', 'norebro' ),
                "name" => "footer_text_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose content text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59390deb053ac",
                "label" => __( 'Background type', 'norebro' ),
                "name" => "footer_background_type",
                "type" => "radio",
                "instructions" => __( 'Choose footer background type', 'norebro' ),
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
                "key" => "field_59390deb057c5",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "footer_background_image",
                "type" => "image",
                "instructions" => __( 'Upload background image for footer', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb053ac",
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
                "key" => "field_59390deb05bcd",
                "label" => __( 'Background size', 'norebro' ),
                "name" => "footer_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb053ac",
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
                "key" => "field_59390deb05fa2",
                "label" => __( 'Background position', 'norebro' ),
                "name" => "footer_background_position",
                "type" => "select",
                "instructions" => __( 'Choose background image position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb053ac",
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
                "key" => "field_59390deb0638b",
                "label" => __( 'Background repeat', 'norebro' ),
                "name" => "footer_background_repeat",
                "type" => "select",
                "instructions" => __( 'Choose background image repeat type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb053ac",
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
                "key" => "field_59390deb04f97",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "footer_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose footer background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb053ac",
                            "operator" => "!=",
                            "value" => "inherit"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_59390deb04788",
                "label" => __( 'Footer logo widget type', 'norebro' ),
                "name" => "footer_logo_widget_type",
                "type" => "select",
                "instructions" => __( 'Choose widget logo type', 'norebro' ),
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
                "key" => "field_5940dfabfe181",
                "label" => __( 'Footer site name settings', 'norebro' ),
                "name" => "footer_sitename_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Custom settings for footer site name', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb04788",
                            "operator" => "==",
                            "value" => "sitename"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_5940dfeafe182",
                "label" => __( 'Footer custom logo image', 'norebro' ),
                "name" => "footer_custom_logo",
                "type" => "image",
                "instructions" => __( 'Custom logo image in footer', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59390deb04788",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "return_format" => "url",
                "preview_size" => "thumbnail",
                "library" => "all",
            ],
            [
                "key" => "field_59391743def2b",
                "label" => __( 'Sticky footer', 'norebro' ),
                "name" => "footer_as_sticky",
                "type" => "radio",
                "instructions" => __( 'Set sticky (fixed) footer on this page?', 'norebro' ),
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
                "key" => "field_5937a0a521s81ebmod23",
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
                "key" => "field_59390dsb07397",
                "label" => __( 'Copyright bar visibility', 'norebro' ),
                "name" => "footer_show_copyright_section",
                "type" => "radio",
                "instructions" => __( 'Show copyright section on this page?', 'norebro' ),
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
                "key" => "field_59390deb0778d",
                "label" => __( 'Copyright bar background', 'norebro' ),
                "name" => "footer_copyright_section_background",
                "type" => "norebro_color",
                "instructions" => __( 'Choose section background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59390deb07b67",
                "label" => __( 'Copyright bar text color', 'norebro' ),
                "name" => "footer_copyright_section_text_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose section content text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59390deb07b68",
                "label" => __( 'Copyright bar links color', 'norebro' ),
                "name" => "footer_copyright_section_links_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose section content links color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_59390deb07fa2",
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
                "key" => "field_59390deb083b5",
                "label" => __( 'Custom CSS styles', 'norebro' ),
                "name" => "page_custom_css",
                "type" => "norebro_code",
                "instructions" => __( 'Write your own stylesheet here', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "language" => "css"
            ],
            [
                "key" => "field_5937e0a52b456smod951",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "<p class=\"message\"><span class=\"icon ion-information-circled\"></span> <b>Note:</b> you won't lose the CSS code written here while updating the theme.</p>",
                "new_lines" => "",
                "esc_html" => 0
            ]
        ],
        "location" => [
            [
                [
                    "param" => "post_type",
                    "operator" => "==",
                    "value" => "page"
                ]
            ]
        ],
        "menu_order" => 5,
        "position" => "normal",
        "style" => "default",
        "label_placement" => "left",
        "instruction_placement" => "label",
        "hide_on_screen" => [
            "discussion",
            "comments",
            "author",
            "format"
        ],
        "active" => 1,
        "description" => ""
    ] );

endif;

<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_593dd5f5615b0",
        "title" => __( 'Blog Settings', 'norebro' ),
        "private" => true,
        "fields" => [
            [
                "key" => "field_591b002d4818sffmod",
                "label" => __( 'Blog Layout', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_593dd5f56ca9d",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "<p class=\"message\"><span class=\"icon ion-information-circled\"></span> <b>Note:</b> to find more blog options navigate to global settings <b>Theme Settings &gt; Blog Settings</b></p>",
                "new_lines" => "wpautop",
                "esc_html" => 0
            ],
            [
                "key" => "field_593dd5f56bae0",
                "label" => __( 'Blog layout', 'norebro' ),
                "name" => "blog_item_layout_type",
                "type" => "image_option",
                "instructions" => __( 'Choose layout type for blog grid', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "image_option_value" => [
                    [
                        "name" => "inherit",
                        "description" => __( 'Use from Page Settings', 'norebro' ),
                        "src" => "acf__image_inherited.svg"
                    ],
                    [
                        "name" => "classic",
                        "description" => __( 'Classic', 'norebro' ),
                        "src" => "nor__listing_07.svg"
                    ],
                    [
                        "name" => "simple",
                        "description" => __( 'Simple', 'norebro' ),
                        "src" => "nor__listing_09.svg"
                    ],
                    [
                        "name" => "side_image",
                        "description" => __( 'Side Image', 'norebro' ),
                        "src" => "nor__listing_08.svg"
                    ],
                    [
                        "name" => "overlay",
                        "description" => __( 'Overlay', 'norebro' ),
                        "src" => "nor__listing_10.svg"
                    ],
                    [
                        "name" => "striped",
                        "description" => __( 'Striped', 'norebro' ),
                        "src" => "nor__listing_11.svg"
                    ]
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
                "key" => "field_593dd5f56af4c",
                "label" => __( 'Grid layout', 'norebro' ),
                "name" => "blog_page_layout",
                "type" => "radio",
                "instructions" => __( 'Choose grid layout type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "classic" => __( 'Classic', 'norebro' ),
                    "masonry" => __( 'Masonry', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_593dd5f56c2b2",
                "label" => __( 'Grid spacing', 'norebro' ),
                "name" => "blog_items_without_padding",
                "type" => "radio",
                "instructions" => __( 'Remove spacing between grid items', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "yes" => __( 'Yes', 'norebro' ),
                    "no" => __( 'No', 'norebro' )
                ],
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_59ccb100ba6f7nomod",
                "label" => __( 'Blog categories', 'norebro' ),
                "name" => "blog_categories",
                "type" => "taxonomy",
                "instructions" => __( 'Leave empty if want show all categories', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "taxonomy" => "category",
                "field_type" => "checkbox",
                "allow_null" => 0,
                "add_term" => 0,
                "save_terms" => 0,
                "load_terms" => 0,
                "return_format" => "id",
                "multiple" => 1
            ],
            [
                "key" => "field_592d60af8a7ffmo7ds",
                "label" => __( 'Grid animation', 'norebro' ),
                "name" => "blog_page_animation_type",
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
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592d60af8ac17d27mo7ds",
                "label" => __( 'Grid animation effect', 'norebro' ),
                "name" => "blog_page_animation_effect",
                "type" => "select",
                "instructions" => __( 'Choose blog items appear effect', 'norebro' ),
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
                "key" => "field_593dd5f56b310",
                "label" => __( 'Blog items per page', 'norebro' ),
                "name" => "blog_columns_in_row",
                "type" => "norebro_columns",
                "instructions" => __( 'Choose the number of blog items per page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dd5f56af4c",
                            "operator" => "==",
                            "value" => "masonry"
                        ],
                        [
                            "field" => "field_593dd5f56bae0",
                            "operator" => "!=",
                            "value" => "striped"
                        ]
                    ]
                ],
                "default_value" => "i-i-i-i",
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => "",
                "use_inherit" => true
            ],
            [
                "key" => "field_593dd5f56bedd",
                "label" => __( 'Items boxed style', 'norebro' ),
                "name" => "blog_items_boxed_style",
                "type" => "true_false",
                "instructions" => __( 'Append box wrapper for post cards', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dd5f56bae0",
                            "operator" => "!=",
                            "value" => "overlay"
                        ],
                        [
                            "field" => "field_593dd5f56bae0",
                            "operator" => "!=",
                            "value" => "simple"
                        ],
                        [
                            "field" => "field_593dd5f56bae0",
                            "operator" => "!=",
                            "value" => "inherit"
                        ]
                    ]
                ],
                "message" => "Wrap in box",
                "default_value" => 0,
                "ui" => 0,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_593dd5f56beddfmod",
                "label" => __( 'Show cards in striped view?', 'norebro' ),
                "name" => "blog_posts_grid_is_striped",
                "type" => "true_false",
                "instructions" => __( 'Add striped order of post cards alignment', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dd5f56bae0",
                            "operator" => "==",
                            "value" => "striped"
                        ]
                    ]
                ],
                "message" => "Striped view",
                "default_value" => 0,
                "ui" => 0,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_593dd5f56beddsemod",
                "label" => __( 'Add indented to cards view?', 'norebro' ),
                "name" => "blog_posts_grid_is_indented",
                "type" => "true_false",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593dd5f56bae0",
                            "operator" => "==",
                            "value" => "striped"
                        ]
                    ]
                ],
                "message" => "Indented view",
                "default_value" => 0,
                "ui" => 0,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_591b002d4817sffmod",
                "label" => __( 'Blog Page', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_593dd5f56b70f",
                "label" => __( 'Blog items per page', 'norebro' ),
                "name" => "blog_posts_per_page",
                "type" => "number",
                "instructions" => __( 'Choose the number of blog items per page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => 24,
                "placeholder" => "",
                "prepend" => "",
                "append" => "posts",
                "min" => 1,
                "max" => 100,
                "step" => 1
            ],
            [
                "key" => "field_593dd5f56ba30",
                "label" => __( 'Pagination', 'norebro' ),
                "name" => "blog_pagination_type",
                "type" => "select",
                "instructions" => __( 'Choose pagination type for blog page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
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
                "key" => "field_593dd523442330",
                "label" => __( 'Pagination position', 'norebro' ),
                "name" => "blog_pagination_position",
                "type" => "select",
                "instructions" => __( 'Choose pagination type for blog page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
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
            ]
        ],
        "location" => [
            [
                [
                    "param" => "page_template",
                    "operator" => "==",
                    "value" => "page-templates/page_for-posts.php"
                ],
                [
                    "param" => "post_type",
                    "operator" => "==",
                    "value" => "page"
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
<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_592d60af343cf",
        "title" => "!!!Blog Settings",
        "private" => true,
        "fields" => [
            [
                "key" => "field_592d60ah8a413",
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
                "key" => "field_5937e0a52b48cexmod18",
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
                "key" => "field_592d60af8b3f8",
                "label" => __( 'Blog layout', 'norebro' ),
                "name" => "global_blog_item_layout_type",
                "type" => "image_option",
                "instructions" => __( 'Choose layout type for blog grid', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "image_option_value" => [
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
                "default_value" => "classic",
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],

            [
                "key" => "field_593f2345fbfas124",
                "label" => __( 'Excerption length', 'norebro' ),
                "name" => "global_posts_content_length",
                "type" => "number",
                "instructions" => __( 'Specify the length of the short description.', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => true,
                "default_value" => 14,
                "placeholder" => "",
                "prepend" => "",
                "append" => __( 'words', 'norebro' ),
                "min" => 1,
                "max" => 100,
                "step" => 1
            ],
            [
                "key" => "field_592d60af8b80c",
                "label" => __( 'Use boxed style for items?', 'norebro' ),
                "name" => "global_blog_items_boxed_style",
                "type" => "true_false",
                "instructions" => __( 'Append box wrapper for post cards', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d60af8b3f8",
                            "operator" => "!=",
                            "value" => "overlay"
                        ],
                        [
                            "field" => "field_592d60af8b3f8",
                            "operator" => "!=",
                            "value" => "simple"
                        ],
                        [
                            "field" => "field_592d60af8b3f8",
                            "operator" => "!=",
                            "value" => "inherit"
                        ]
                    ]
                ],
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No",
                "message" => "",
                "default_value" => 1
            ],
            [
                "key" => "field_592d60af8a7ff",
                "label" => __( 'Grid layout', 'norebro' ),
                "name" => "global_blog_page_layout",
                "type" => "radio",
                "instructions" => __( 'Choose grid layout type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "classic" => __( 'Classic', 'norebro' ),
                    "masonry" => __( 'Masonry', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "masonry",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592d60af8bc07",
                "label" => __( 'Grid spacing', 'norebro' ),
                "name" => "global_blog_items_without_padding",
                "type" => "true_false",
                "instructions" => __( 'Remove spacing between grid items', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No",
                "message" => "",
                "default_value" => 0
            ],
            [
                "key" => "field_592d60af8ac17",
                "label" => __( 'Blog items per row', 'norebro' ),
                "name" => "global_blog_columns_in_row",
                "type" => "norebro_columns",
                "instructions" => __( 'Choose the number of blog items per row', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d60af8a7ff",
                            "operator" => "==",
                            "value" => "masonry"
                        ],
                        [
                            "field" => "field_592d60af8b3f8",
                            "operator" => "!=",
                            "value" => "striped"
                        ]
                    ]
                ],
                "default_value" => "1-1-1-1",
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => "",
                "use_inherit" => false
            ],
            [
                "key" => "field_592d60af8a7ffmods",
                "label" => __( 'Grid animation', 'norebro' ),
                "name" => "global_blog_page_animation_type",
                "type" => "radio",
                "instructions" => __( 'Choose grid animation type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "default" => __( 'Without Animation', 'norebro' ),
                    "sync" => __( 'Sync Animation', 'norebro' ),
                    "async" => __( 'Async Animation', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "masonry",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592d60af8ac17d2mod",
                "label" => __( 'Grid animation effect', 'norebro' ),
                "name" => "global_blog_page_animation_effect",
                "type" => "select",
                "instructions" => __( 'Choose blog items appear effect', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d60af8a7ffmods",
                            "operator" => "!=",
                            "value" => "default"
                        ]
                    ]
                ],
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
                "key" => "field_592d60af8a413",
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
                "key" => "field_5b379cc61b04f",
                "label" => __( 'Blog page', 'norebro' ),
                "name" => "global_blog_page",
                "type" => "post_object",
                "instructions" => __( 'Choose main page for posts', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "post_type" => [
                    "page"
                ],
                "taxonomy" => 0,
                "allow_null" => 1,
                "allow_archives" => 0,
                "multiple" => 0
            ],
            [
                "key" => "field_593743443383615",
                "label" => __( 'Breadcrumbs visibility', 'norebro' ),
                "name" => "global_blog_page_breadcrumbs_visibility",
                "type" => "radio",
                "instructions" => __( 'Hide breadcrumbs on blog pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "no" => __( 'Hide', 'norebro' ),
                    "yes" => __( 'Show', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "inherit",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_5937434433s3615",
                "label" => __( 'Breadcrumbs slug', 'norebro' ),
                "name" => "global_page_home_breadcrumb_slug",
                "type" => "text",
                "instructions" => __( 'Enter custom text for breadcrumbs slug', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_592faswe51fv2c",
                "label" => __( 'Custom content position', 'norebro' ),
                "name" => "global_post_content_position",
                "type" => "select",
                "instructions" => __( 'Choose WPBakery Page Builder page content position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "top" => __( 'Top - Before Blog', 'norebro' ),
                    "bottom" => __( 'Bottom - After Blog', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_591ef18a3ef37",
                "label" => __( 'Categories filter', 'norebro' ),
                "name" => "global_breadcrumbs_show_cats",
                "type" => "true_false",
                "instructions" => __( 'Show categories filter on your website', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_591ef1773ef36",
                "label" => __( 'Tags filter', 'norebro' ),
                "name" => "global_breadcrumbs_show_tags",
                "type" => "true_false",
                "instructions" => __( 'Show tags filter on your website', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_591ef1473ef35",
                "label" => __( 'Authors filter', 'norebro' ),
                "name" => "global_breadcrumbs_show_author",
                "type" => "true_false",
                "instructions" => __( 'Show author filter on your website', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_592d60af8b000",
                "label" => __( 'Blog items per page', 'norebro' ),
                "name" => "global_blog_posts_per_page",
                "type" => "number",
                "instructions" => __( 'Choose the number of blog items per page', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => 16,
                "placeholder" => "",
                "prepend" => "",
                "append" => __( 'posts', 'norebro' ),
                "min" => 1,
                "max" => 100,
                "step" => 1
            ],
            [
                "key" => "field_592d60af8b001",
                "label" => __( 'Pagination', 'norebro' ),
                "name" => "global_blog_pagination_type",
                "type" => "select",
                "instructions" => __( 'Choose pagination type for blog page', 'norebro' ),
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
                "key" => "field_59374afs43d8361523f",
                "label" => __( 'Pagination position', 'norebro' ),
                "name" => "global_blog_pagination_position",
                "type" => "select",
                "instructions" => __( 'Choose pagination position for blog page', 'norebro' ),
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
                "key" => "field_593dd5f56beddfmodglob",
                "label" => __( 'Show cards in striped view?', 'norebro' ),
                "name" => "blog_page_grid_is_striped",
                "type" => "true_false",
                "instructions" => __( 'Add striped order of post cards alignment', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d60af8b3f8",
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
                "key" => "field_593dd5f56beddsemodglob",
                "label" => __( 'Add indented to cards view?', 'norebro' ),
                "name" => "blog_page_grid_is_indented",
                "type" => "true_false",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d60af8b3f8",
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
                "key" => "field_592d60af8bfef",
                "label" => __( 'Sidebar', 'norebro' ),
                "name" => "global_blog_sidebar",
                "type" => "select",
                "instructions" => __( 'Choose sidebar position for blog pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "left" => __( 'Left', 'norebro' ),
                    "center" => __( 'Center', 'norebro' ),
                    "right" => __( 'Right', 'norebro' )
                ],
                "default_value" => [
                    "right"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_592d60af8c3d8",
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
                "key" => "field_593dc7d2bfa16",
                "label" => __( 'Breadcrumbs visibility', 'norebro' ),
                "name" => "global_blog_page_show_breadcrumbs",
                "type" => "radio",
                "instructions" => __( 'Hide breadcrumbs on post pages?', 'norebro' ),
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
                "key" => "field_592d7105a8cdb",
                "label" => __( 'Content wrapper', 'norebro' ),
                "name" => "global_post_page_add_wrapper",
                "type" => "radio",
                "instructions" => __( 'Add content wrapper to post pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_593908a3311be",
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
                "key" => "field_591ac5d9d31f3",
                "label" => __( 'Content wrapper width', 'norebro' ),
                "name" => "global_post_content_wrapper_width",
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
                "key" => "field_593908a3311be",
                "label" => __( 'Boxed page layout', 'norebro' ),
                "name" => "global_post_use_boxed_wrapper",
                "type" => "radio",
                "instructions" => __( 'Wrap all post pages in boxed container', 'norebro' ),
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
                "key" => "field_592d714deeb14",
                "label" => __( 'Navigation', 'norebro' ),
                "name" => "global_post_hide_previous_n_next",
                "type" => "true_false",
                "instructions" => __( 'Hide <em>\"Prev and next posts\"</em> navigation?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_592d716deeb15",
                "label" => __( 'Related posts', 'norebro' ),
                "name" => "global_post_hide_related_posts",
                "type" => "true_false",
                "instructions" => __( 'Hide block with related posts?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_59374a3443d8361523f",
                "label" => __( 'Post tags', 'norebro' ),
                "name" => "global_post_hide_tags",
                "type" => "true_false",
                "instructions" => __( 'Hide post tags on post pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_59374a3fdf523f",
                "label" => __( 'Post comments', 'norebro' ),
                "name" => "global_post_hide_comments",
                "type" => "true_false",
                "instructions" => __( 'Hide post comments on post pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_5937dfab71d1b",
                "label" => __( 'Sidebar', 'norebro' ),
                "name" => "global_post_single_sidebar",
                "type" => "select",
                "instructions" => __( 'Choose sidebar position for post pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "left" => __( 'Left', 'norebro' ),
                    "right" => __( 'Right', 'norebro' ),
                    "without" => __( 'Without', 'norebro' )
                ],
                "default_value" => [
                    "right"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_5937e0a52b48cexmod1",
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
                "key" => "field_592d6d3b368b2",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "global_post_hide_header_title",
                "type" => "radio",
                "instructions" => __( 'Hide header title from all post pages?', 'norebro' ),
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
                "key" => "field_592d8434bfbfa",
                "label" => __( 'Fullscreen height', 'norebro' ),
                "name" => "global_post_title_height_fullscreen",
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
                "default_value" => "",
                "layout" => "horizontal",
                "return_format" => "value"
            ],
            [
                "key" => "field_592d845bbfbfb",
                "label" => __( 'Height', 'norebro' ),
                "name" => "global_post_header_height",
                "type" => "norebro_responsive_height",
                "instructions" => __( 'Set up header title height', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d8434bfbfa",
                            "operator" => "!=",
                            "value" => "no"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_592d72f6d085b",
                "label" => __( 'Subtitle text', 'norebro' ),
                "name" => "global_post_hide_subtitle",
                "type" => "select",
                "instructions" => __( 'Custom subtitle text', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "generated" => __( 'Post Meta', 'norebro' ),
                    "custom" => __( 'Custom Subtitle', 'norebro' ),
                    "hidden" => __( 'Hidden', 'norebro' )
                ],
                "allow_null" => 0,
                "other_choice" => 0,
                "save_other_choice" => 0,
                "default_value" => "",
                "layout" => "vertical",
                "return_format" => "value"
            ],
            [
                "key" => "field_593ddc099a870",
                "label" => __( 'Custom subtitle text', 'norebro' ),
                "name" => "global_post_custom_subtitle",
                "type" => "text",
                "instructions" => __( 'Write custom subtitle for every post', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d72f6d085b",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ],
            [
                "key" => "field_592d7197eeb16",
                "label" => __( 'Content position', 'norebro' ),
                "name" => "global_post_header_title_align",
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
                "key" => "field_592d626d879de",
                "label" => __( 'Background type', 'norebro' ),
                "name" => "global_post_title_background_type",
                "type" => "select",
                "instructions" => __( 'Choose header title background type for all post pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Page Settings', 'norebro' ),
                    "post_thumbnail" => __( 'Post Thumbnail', 'norebro' ),
                    "color" => __( 'Background Color', 'norebro' ),
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
                "key" => "field_592d69654e10f",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_post_title_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d626d879de",
                            "operator" => "!=",
                            "value" => "inherit"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_592d638e879df",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "global_post_title_background_image",
                "type" => "image",
                "instructions" => __( 'Upload header title background image for all post pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d626d879de",
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
                "key" => "field_592d69e4383d6",
                "label" => __( 'Background image size', 'norebro' ),
                "name" => "global_post_title_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d626d879de",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592d626d879de",
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
                "key" => "field_592d6a39383d8",
                "label" => __( 'Background image position', 'norebro' ),
                "name" => "global_post_title_background_position",
                "type" => "select",
                "instructions" => __( 'Background position for image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d626d879de",
                            "operator" => "==",
                            "value" => "post_thumbnail"
                        ],
                        [
                            "field" => "field_592d69e4383d6",
                            "operator" => "==",
                            "value" => "auto"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592d626d879de",
                            "operator" => "==",
                            "value" => "post_thumbnail"
                        ],
                        [
                            "field" => "field_592d69e4383d6",
                            "operator" => "==",
                            "value" => "contain"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592d626d879de",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_592d69e4383d6",
                            "operator" => "==",
                            "value" => "auto"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592d626d879de",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_592d69e4383d6",
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
                "key" => "field_592d6c37d15db",
                "label" => __( 'Background image repeat', 'norebro' ),
                "name" => "global_post_title_background_repeat",
                "type" => "select",
                "instructions" => __( 'Repeat setting for image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d626d879de",
                            "operator" => "==",
                            "value" => "post_thumbnail"
                        ],
                        [
                            "field" => "field_592d69e4383d6",
                            "operator" => "==",
                            "value" => "auto"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592d626d879de",
                            "operator" => "==",
                            "value" => "post_thumbnail"
                        ],
                        [
                            "field" => "field_592d69e4383d6",
                            "operator" => "==",
                            "value" => "contain"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592d626d879de",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_592d69e4383d6",
                            "operator" => "==",
                            "value" => "auto"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592d626d879de",
                            "operator" => "==",
                            "value" => "custom"
                        ],
                        [
                            "field" => "field_592d69e4383d6",
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
                "key" => "field_592d6dbf5673e",
                "label" => __( 'Background overlay', 'norebro' ),
                "name" => "global_post_use_title_overlay",
                "type" => "true_false",
                "instructions" => __( 'Add colored overlay over background image?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d626d879de",
                            "operator" => "==",
                            "value" => "post_thumbnail"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592d626d879de",
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
                "key" => "field_592d6e2c56740",
                "label" => __( 'Background overlay color', 'norebro' ),
                "name" => "global_post_title_background_overlay_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background overlay color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d6dbf5673e",
                            "operator" => "==",
                            "value" => "1"
                        ],
                        [
                            "field" => "field_592d626d879de",
                            "operator" => "==",
                            "value" => "post_thumbnail"
                        ]
                    ],
                    [
                        [
                            "field" => "field_592d6dbf5673e",
                            "operator" => "==",
                            "value" => "1"
                        ],
                        [
                            "field" => "field_592d626d879de",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "default_value" => ""
            ],
            [
                "key" => "field_592d71e9e9b9c",
                "label" => __( 'Typography settings', 'norebro' ),
                "name" => "global_post_typography_settings",
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
                "key" => "field_592d7239e9b9d",
                "label" => __( 'Title settings', 'norebro' ),
                "name" => "global_post_header_title_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typograhy for hero titles', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d71e9e9b9c",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_592d7c3fb4ea1",
                "label" => __( 'Subtitle settings', 'norebro' ),
                "name" => "global_post_page_text_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typograhy for subtitles', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_592d71e9e9b9c",
                            "operator" => "==",
                            "value" => "custom"
                        ]
                    ]
                ],
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_592d60af8a413auth",
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
                "key" => "field_5937a7a521481ebmod23",
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
                "key" => "field_5937433fdf523f",
                "label" => __( 'Sharing', 'norebro' ),
                "name" => "global_post_hide_social",
                "type" => "true_false",
                "instructions" => __( 'Disable sharing feature for post pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_5937fd3fdf523f",
                "label" => __( 'Sharing networks', 'norebro' ),
                "name" => "global_post_sharing_networks",
                "type" => "select",
                "instructions" => __( 'Choose sharing social networks', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [],
                "choices" => [
                    "facebook" => "Facebook",
                    "twitter" => "Twitter",
                    "linkedin" => "LinkedIn",
                    "pinterest" => "Pinterest"
                ],
                "default_value" => [],
                "allow_null" => 0,
                "multiple" => 1,
                "ui" => 1,
                "ajax" => 1,
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_5937a7a521f81ebmod23",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "label" => '<h4>' . __( 'Author Settings', 'norebro' ) . '</h4>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_592d716deeb14",
                "label" => __( 'Author visibility', 'norebro' ),
                "name" => "global_post_hide_author_widget",
                "type" => "true_false",
                "instructions" => __( 'Hide author widget for all post pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_5937e0a52b873",
                "label" => __( 'Author social links', 'norebro' ),
                "name" => "global_author_social_links",
                "type" => "repeater",
                "instructions" => __( 'Add some links to author\'s social networks', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "collapsed" => "",
                "min" => 0,
                "max" => 0,
                "layout" => "table",
                "button_label" => "+ Add Author",
                "sub_fields" => [
                    [
                        "key" => "field_5937e0a52f6f4",
                        "label" => __( 'Author', 'norebro' ),
                        "name" => "author",
                        "type" => "user",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "wrapper" => [
                            "width" => "",
                            "class" => "",
                            "id" => ""
                        ],
                        "role" => "",
                        "allow_null" => 0,
                        "multiple" => 0
                    ],
                    [
                        "key" => "field_5937e0a52fac9",
                        "label" => __( 'Links', 'norebro' ),
                        "name" => "links",
                        "type" => "repeater",
                        "instructions" => "",
                        "required" => 0,
                        "conditional_logic" => 0,
                        "wrapper" => [
                            "width" => "",
                            "class" => "",
                            "id" => ""
                        ],
                        "collapsed" => "",
                        "min" => 0,
                        "max" => 0,
                        "layout" => "table",
                        "button_label" => "+ Add Link",
                        "sub_fields" => [
                            [
                                "key" => "field_5937e0a534d96",
                                "label" => __( 'Social networks', 'norebro' ),
                                "name" => "social_networks",
                                "type" => "select",
                                "instructions" => "",
                                "required" => 0,
                                "conditional_logic" => 0,
                                "wrapper" => [
                                    "width" => "",
                                    "class" => "",
                                    "id" => ""
                                ],
                                "choices" => [
                                    "facebook" => "Facebook",
                                    "twitter" => "Twitter",
                                    "youtube" => "Youtube",
                                    "google_plus" => "Google+",
                                    "linkedin" => "LinkedIn",
                                    "pinterest" => "Pinterest",
                                    "vimeo" => "Vimeo",
                                    "github" => "GitHub"
                                ],
                                "default_value" => [
                                    "facebook"
                                ],
                                "allow_null" => 0,
                                "multiple" => 0,
                                "ui" => 0,
                                "ajax" => 0,
                                "return_format" => "value",
                                "placeholder" => ""
                            ],
                            [
                                "key" => "field_5937e0a535178",
                                "label" => __( 'URL', 'norebro' ),
                                "name" => "url",
                                "type" => "url",
                                "instructions" => "",
                                "required" => 0,
                                "conditional_logic" => 0,
                                "wrapper" => [
                                    "width" => "",
                                    "class" => "",
                                    "id" => ""
                                ],
                                "default_value" => "",
                                "placeholder" => ""
                            ]
                        ]
                    ]
                ]
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-blog"
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

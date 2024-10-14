<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_591ac509c1730",
        "title" => __( 'Page Settings', 'norebro' ),
        "private" => true,
        "fields" => [
            [
                "key" => "field_591b002d481fc",
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
                "key" => "field_5937e0a52b48cexmod153",
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
                "key" => "field_591ac509d31f3",
                "label" => __( 'Content wrapper', 'norebro' ),
                "name" => "global_page_is_wrapped",
                "type" => "true_false",
                "instructions" => __( 'Add content wrapper to all pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [
                    [
                        [
                            "field" => "field_59381c77504b1",
                            "operator" => "!=",
                            "value" => "1"
                        ]
                    ]
                ],
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_591ac5s9d31f3",
                "label" => __( 'Content wrapper width', 'norebro' ),
                "name" => "global_content_wrapper_width",
                "type" => "text",
                "instructions" => __( 'Define container wrapper width <em>| Use pixels (1326px is default)</em>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "1326px",
                "prepend" => __( 'Use CSS units', 'norebro' ),
                "append" => "",
                "maxlength" => 200
            ],
            [
                "key" => "field_591b10dbb4a85_fwgaps",
                "label" => __( 'Full-width layout spacing', 'norebro' ),
                "name" => "global_full_width_margins_size",
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
                "key" => "field_591ac509d3606",
                "label" => __( 'Content padding', 'norebro' ),
                "name" => "global_page_add_top_padding",
                "type" => "true_false",
                "instructions" => __( 'Add top and bottom padding for page content', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No",
                "message" => "",
                "default_value" => 1
            ],
            [
                "key" => "field_59381c77504b1",
                "label" => __( 'Boxed page layout', 'norebro' ),
                "name" => "global_page_use_boxed_wrapper",
                "type" => "true_false",
                "instructions" => __( 'Wrap all pages in boxed container', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "",
                "ui_off_text" => ""
            ],
            [
                "key" => "field_591ac509d1208",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_page_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose background color for all pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_591ac509cfdd8",
                "label" => __( 'Background image', 'norebro' ),
                "name" => "global_page_background_image",
                "type" => "image",
                "instructions" => __( 'Upload background image for all pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_591ac509d01a8",
                "label" => __( 'Background size', 'norebro' ),
                "name" => "global_page_background_size",
                "type" => "select",
                "instructions" => __( 'Choose background image size type', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "auto" => __( 'Auto', 'norebro' ),
                    "cover" => __( 'Cover', 'norebro' ),
                    "contain" => __( 'Contain', 'norebro' ),
                    "100_per" => __( '100% 100%', 'norebro' )
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
                "key" => "field_591ac509d05b5",
                "label" => __( 'Background position', 'norebro' ),
                "name" => "global_page_background_position",
                "type" => "select",
                "instructions" => __( 'Choose background image position', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_591ac509d09b7",
                "label" => __( 'Background repeat', 'norebro' ),
                "name" => "global_page_background_repeat",
                "type" => "select",
                "instructions" => __( 'Choose repeat type for background image', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_591ac509d0dce",
                "label" => __( 'Background attachment', 'norebro' ),
                "name" => "global_page_background_attach",
                "type" => "true_false",
                "instructions" => __( 'Fix background image for all pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_59390deaf218c",
                "label" => __( 'Sidebar', 'norebro' ),
                "name" => "global_page_sidebar",
                "type" => "select",
                "instructions" => __( 'Choose sidebar placement for all pages', 'norebro' ),
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
                "key" => "field_59392223423434234c",
                "label" => __( 'Sidebar layout', 'norebro' ),
                "name" => "global_page_sidebar_layout",
                "type" => "select",
                "instructions" => __( 'Choose sidebar layout', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "simple" => __( 'Simple', 'norebro' ),
                    "boxed" => "Boxed",
                    "boxed_offset" => "Boxed offset"
                ],
                "default_value" => [
                    "boxed_offset"
                ],
                "return_format" => "value"
            ],
            [
                "key" => "field_54224ad4315bf",
                "label" => __( 'Site Sidebar', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_59392223423434234c",
                "label" => __( 'Sidebar layout', 'norebro' ),
                "name" => "global_page_sidebar_layout",
                "type" => "select",
                "instructions" => __( 'Choose sidebar layout', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "simple" => __( 'Simple', 'norebro' ),
                    "boxed" => "Boxed",
                    "boxed_offset" => "Boxed offset"
                ],
                "default_value" => [
                    "boxed_offset"
                ],
                "return_format" => "value"
            ],
            [
                "key" => "field_5937e3a33b3exmod15",
                "label" => __( 'Widget heading', 'norebro' ),
                "name" => "global_widgets_heading_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typography styles for widget heading', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_5937e3a33f4exmod15",
                "label" => __( 'Widget content', 'norebro' ),
                "name" => "global_widgets_content_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typography styles for widget content', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_591b002d481fcffmod",
                "label" => __( 'Panel', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_591ac509d09bmmod",
                "label" => __( 'Panel position', 'norebro' ),
                "name" => "global_side_panel_position",
                "type" => "radio",
                "instructions" => __( 'Choose panel position for all pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "left" => __( 'Left', 'norebro' ),
                    "right" => __( 'Right', 'norebro' ),
                    "hide" => __( 'Hide', 'norebro' )
                ],
                "default_value" => [
                    "left"
                ],
                "allow_null" => 0,
                "multiple" => 0,
                "ui" => 0,
                "ajax" => 0,
                "layout" => "horizontal",
                "return_format" => "value",
                "placeholder" => ""
            ],
            [
                "key" => "field_591ac509d0dcemod7",
                "label" => __( 'Panel spacer', 'norebro' ),
                "name" => "global_side_panel_add_padding",
                "type" => "true_false",
                "instructions" => __( 'Add a blank spacer under the panel? So that the full-width content doesn\'t come under the panel', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_591ac50989679545cmmod",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_side_panel_background",
                "type" => "norebro_color",
                "instructions" => __( 'Choose panel background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_591ac509cmmod",
                "label" => __( 'Content color', 'norebro' ),
                "name" => "global_side_panel_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose panel text and icons color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_591ac509d163089mod",
                "label" => __( 'Typography', 'norebro' ),
                "name" => "global_side_panel_typo",
                "type" => "norebro_typo",
                "instructions" => __( 'Set up typograhy for panel text', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "add_theme_inherited" => true
            ],
            [
                "key" => "field_591ac50989679545e3mod",
                "label" => __( 'Decor color', 'norebro' ),
                "name" => "global_side_panel_separator",
                "type" => "norebro_color",
                "instructions" => __( 'Choose panel decoration color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_592fd8901f24b07333",
                "label" => __( 'Panel content', 'norebro' ),
                "name" => "global_side_panel_text",
                "type" => "text",
                "instructions" => __( 'Add some content to panel. You can use HTML tags.', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "© 2023, Norebro theme by <a href=\"http:\/\/clbthemes.com\" target=\"_blank\">Colabrio<\/a>, All right reserved.",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ],
            [
                "key" => "field_5691b002d481fcffmod",
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
                "key" => "field_5937a78521f81ebmod23",
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
                "key" => "field_59374a3443db361523f",
                "label" => __( 'Sharing', 'norebro' ),
                "name" => "global_side_panel_social_enable",
                "type" => "true_false",
                "instructions" => __( 'Enable sharing feature for product pages', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_592fd666235d9mod2",
                "label" => __( 'Sharing networks', 'norebro' ),
                "name" => "global_side_panel_social",
                "type" => "select",
                "instructions" => __( 'Choose sharing social networks', 'norebro' ),
                "required" => 0,
                "conditional_logic" => [],
                "choices" => [
                    "facebook" => "Facebook",
                    "twitter" => "Twitter",
                    "dribbble" => "Dribbble",
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
                "key" => "field_591ac509d0dcemod8",
                "label" => __( 'Sharing on mobile', 'norebro' ),
                "name" => "global_side_panel_show_share_on_mobile",
                "type" => "true_false",
                "instructions" => __( 'Show share button on mobile devices', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 0,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_591b0f20ed84e",
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
                "key" => "field_591ac509d29ee",
                "label" => __( 'Visibility', 'norebro' ),
                "name" => "global_page_show_breadcrumbs",
                "type" => "true_false",
                "instructions" => __( 'Show breadcrumbs on all pages?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_591b10dbb4a85",
                "label" => __( 'Separator', 'norebro' ),
                "name" => "global_breadcrumbs_separator",
                "type" => "text",
                "instructions" => __( 'Use custom HTML or UTF-8 symbols. Slashes or arrows are recommended', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => 250
            ],
            [
                "key" => "field_591ac509d2e0d",
                "label" => __( 'Home slug', 'norebro' ),
                "name" => "global_page_show_home_breadcrumb",
                "type" => "true_false",
                "instructions" => __( 'Show <em>\"Home /\"</em> slug in breadcrumbs', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "message" => "",
                "default_value" => 1,
                "ui" => 1,
                "ui_on_text" => "Yes",
                "ui_off_text" => "No"
            ],
            [
                "key" => "field_591ef0e8d845b",
                "label" => __( 'Background color', 'norebro' ),
                "name" => "global_breadcrumbs_background_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose breadcrumbs bar background color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ],
            [
                "key" => "field_591ef10cd845c",
                "label" => __( 'Text color', 'norebro' ),
                "name" => "global_breadcrumbs_font_color",
                "type" => "norebro_color",
                "instructions" => __( 'Choose breadcrumbs text color', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => ""
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-pages"
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
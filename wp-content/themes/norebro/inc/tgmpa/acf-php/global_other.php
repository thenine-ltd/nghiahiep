<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_5946362bf373c5",
        "title" => "Other",
        "private" => true,
        "fields" => [
            [
                "key" => "field_542244d4313bf",
                "label" => __( 'Plugins', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937a0a521481ebmod23",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "label" => '<h4>' . __( 'Google Maps', 'norebro' ) . '</h4>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_592fe13500023",
                "label" => __( 'Google Maps API key', 'norebro' ),
                "name" => "global_google_maps_api_key",
                "type" => "text",
                "instructions" => __( 'Paste your Google Maps API key here.<br> <a href="https//:developers.google.com/maps/documentation/javascript/get-api-key">How to get your API key</a>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "Paste your key",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ],
            [
                "key" => "field_542244d4343bf",
                "label" => __( 'Custom JS', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_5937e0a32b48cexmod151",
                "label" => __( '', 'norebro' ),
                "name" => "",
                "type" => "message",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "message" => '<p class="message"><span class="dashicons dashicons-editor-help"></span>' . __( 'You won\'t lose the CSS code after updating the theme.', 'norebro' ) . '</p>',
                "new_lines" => "",
                "esc_html" => 0
            ],
            [
                "key" => "field_5937e3a43b383415",
                "label" => __( 'Header JavaScript injection', 'norebro' ),
                "name" => "global_header_javascript",
                "type" => "norebro_code",
                "instructions" => __( 'Paste your Google Analytics, Facebook Pixel or custom tracking code', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "language" => "javascript"
            ],
            [
                "key" => "field_5937e4a43b383415",
                "label" => __( 'Footer JavaScript injection', 'norebro' ),
                "name" => "global_footer_javascript",
                "type" => "norebro_code",
                "instructions" => __( 'Paste your Google Analytics, Facebook Pixel or custom tracking code', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "language" => "javascript"
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-other"
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
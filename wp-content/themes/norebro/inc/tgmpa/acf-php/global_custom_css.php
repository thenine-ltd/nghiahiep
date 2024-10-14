<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_5946360af373c5",
        "title" => __( 'Custom CSS', 'norebro' ),
        "private" => true,
        "fields" => [
            [
                "key" => "field_542245d4313bf",
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
                "key" => "field_591ac509d4a44",
                "label" => __( 'Custom CSS styles', 'norebro' ),
                "name" => "global_page_custom_css",
                "type" => "norebro_code",
                "instructions" => __( 'Write your own stylesheet here', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "Your CSS code goes here",
                "language" => "css"
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
            ],
            [
                "key" => "field_542245d6313bf",
                "label" => __( 'Responsive Styles', 'norebro' ),
                "name" => "",
                "type" => "tab",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
                "placement" => "top",
                "endpoint" => 0
            ],
            [
                "key" => "field_593743a43b383415",
                "label" => __( 'Large screens', 'norebro' ),
                "name" => "global_page_custom_large_css",
                "type" => "norebro_code",
                "instructions" => __( 'Write your stylesheet here <em>| from 1025px</em>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "language" => "css"
            ],
            [
                "key" => "field_593743a43b373415",
                "label" => __( 'Medium screens', 'norebro' ),
                "name" => "global_page_custom_medium_css",
                "type" => "norebro_code",
                "instructions" => __( 'Write your stylesheet here <em>| up to 1024px</em>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "language" => "css"
            ],
            [
                "key" => "field_593743a43b363415",
                "label" => __( 'Small screens', 'norebro' ),
                "name" => "global_page_custom_small_css",
                "type" => "norebro_code",
                "instructions" => __( 'Write your stylesheet here <em>| up to 767px</em>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "language" => "css"
            ],
            [
                "key" => "field_593743443b383415",
                "label" => __( 'Extra small screens', 'norebro' ),
                "name" => "global_page_custom_extrasmall_css",
                "type" => "norebro_code",
                "instructions" => __( 'Write your stylesheet here <em>| up to 566px</em>', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "language" => "css"
            ]
        ],
        "location" => [
            [
                [
                    "param" => "options_page",
                    "operator" => "==",
                    "value" => "theme-general-custom"
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
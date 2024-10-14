<?php if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group( [
        "key" => "group_59391f245236d",
        "title" => __( 'Project Details', 'norebro' ),
        "private" => true,
        "fields" => [
            [
                "key" => "field_59391f24594ff",
                "label" => __( 'Excerpt', 'norebro' ),
                "name" => "project_description",
                "type" => "wysiwyg",
                "instructions" => __( 'Write a short description for this project', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "",
                "maxlength" => "",
                "rows" => "",
                "new_lines" => "wpautop"
            ],
            [
                "key" => "field_59391f24598db",
                "label" => __( 'Media gallery', 'norebro' ),
                "name" => "project_content",
                "type" => "gallery",
                "instructions" => __( 'Add media files for this project (JPG, PNG, GIF formats are supported)', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "min" => "",
                "max" => "",
                "insert" => "append",
                "library" => "all",
                "min_width" => "",
                "min_height" => "",
                "min_size" => "",
                "max_width" => "",
                "max_height" => "",
                "max_size" => "",
                "mime_types" => "png, jpg, jpeg, gif, webp"
            ],
            [
                "key" => "field_59391f24598db5182g",
                "label" => __( 'Featured image', 'norebro' ),
                "name" => "project_featured_image",
                "type" => "radio",
                "instructions" => __( 'Show featured image on the project page?', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "inherit" => __( 'Use from Portfolio Settings', 'norebro' ),
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
                "key" => "field_59391f2459ccd",
                "label" => __( 'Date', 'norebro' ),
                "name" => "project_date",
                "type" => "date_picker",
                "instructions" => __( 'Choose the project date', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "display_format" => "F j, Y",
                "return_format" => "F j, Y",
                "first_day" => 1
            ],
            [
                "key" => "field_59391f245a0b6",
                "label" => __( 'Task', 'norebro' ),
                "name" => "project_task",
                "type" => "text",
                "instructions" => __( 'Specify what a challenge you had to overcome working on this project', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ],
            [
                "key" => "field_59391f245a4b5",
                "label" => __( 'Skills', 'norebro' ),
                "name" => "project_skills",
                "type" => "text",
                "instructions" => __( 'Skills, techs and tools like', 'norebro' ) . '<em>&nbsp;' . __( '(e.g. Illustration, HTML5 and CSS Animation)', 'norebro' ) . '&nbsp;</em>' . __( 'or leave blank', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ],
            [
                "key" => "field_59391f245a893",
                "label" => __( 'Client', 'norebro' ),
                "name" => "project_client",
                "type" => "text",
                "instructions" => __( 'Project client', 'norebro' ) . '<em>&nbsp;' . __( '(e.g. Envato Market)', 'norebro' ) . '&nbsp;</em>' . __( 'or leave blank', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => "",
                "prepend" => "",
                "append" => "",
                "maxlength" => ""
            ],
            [
                "key" => "field_59391f245ac8a",
                "label" => __( 'Project link', 'norebro' ),
                "name" => "project_link",
                "type" => "url",
                "instructions" => __( 'Link to project preview', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "default_value" => "",
                "placeholder" => ""
            ],
            [
                "key" => "field_59391f245b478",
                "label" => __( 'Custom fields', 'norebro' ),
                "name" => "project_custom_fields",
                "type" => "repeater",
                "instructions" => __( 'Custom fields', 'norebro' ) . '<em>&nbsp;' . __( '(e.g. Tools, Technologies)', 'norebro' ) . '</em>',
                "required" => 0,
                "conditional_logic" => 0,
                "collapsed" => "",
                "min" => 0,
                "max" => 6,
                "layout" => "table",
                "button_label" => "+ Add Field",
                "sub_fields" => [
                    [
                        "key" => "field_59391f246d98c",
                        "label" => __( 'Title', 'norebro' ),
                        "name" => "project_custom_field_title",
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
                        "maxlength" => ""
                    ],
                    [
                        "key" => "field_59391f246dd81",
                        "label" => __( 'Value', 'norebro' ),
                        "name" => "project_custom_field_value",
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
                        "maxlength" => ""
                    ]
                ]
            ],
            [
                "key" => "field_59391f245b078",
                "label" => __( 'Project link', 'norebro' ),
                "name" => "project_open_type",
                "type" => "select",
                "instructions" => __( 'Add a link to the custom project page or live project website', 'norebro' ),
                "required" => 0,
                "conditional_logic" => 0,
                "choices" => [
                    "project" => __( 'Open a standard project page', 'norebro' ),
                    "external_target" => __( 'Open a project external link', 'norebro' ),
                    "external_blank" => __( 'Open a project external link in a new tab', 'norebro' )
                ],
                "default_value" => [
                    "project"
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
                    "param" => "post_type",
                    "operator" => "==",
                    "value" => "norebro_portfolio"
                ]
            ]
        ],
        "menu_order" => 0,
        "position" => "acf_after_title",
        "style" => "default",
        "label_placement" => "top",
        "instruction_placement" => "label",
        "hide_on_screen" => "",
        "active" => 1,
        "description" => ""
    ] );

endif;
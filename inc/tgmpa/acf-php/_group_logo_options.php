<?php if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group([
        "key" => "group_5936af1c9e4e2",
        "title" => __('Logo group', 'ohio'),
        "private" => true,
        "fields" => [
            [
                "key" => "field_5936af24f4b7e",
                "label" => __('Main logo', 'ohio'),
                "name" => "global_logo_image_dark",
                "type" => "image",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_5936afd421bba",
                "label" => __('Retina version @2x', 'ohio'),
                "name" => "global_logo_image_dark_retina",
                "type" => "image",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_5936affb21bbb",
                "label" => __('Mobile version', 'ohio'),
                "name" => "global_logo_image_dark_mobile",
                "type" => "image",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_5936b2dd92771",
                "label" => __('Main logo', 'ohio'),
                "name" => "global_logo_image_light",
                "type" => "image",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_5936b357132bf",
                "label" => __('Retina version @2x', 'ohio'),
                "name" => "global_logo_image_light_retina",
                "type" => "image",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_5936b371132c0",
                "label" => __('Mobile version', 'ohio'),
                "name" => "global_logo_image_light_mobile",
                "type" => "image",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_5936af24f4b7e_fix",
                "label" => __('Main logo', 'ohio'),
                "name" => "global_logo_image_fixed",
                "type" => "image",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_5936afd421bba_fix",
                "label" => __('Retina version @2x', 'ohio'),
                "name" => "global_logo_image_fixed_retina",
                "type" => "image",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
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
                "key" => "field_5936affb21bbb_fix",
                "label" => __('Mobile version', 'ohio'),
                "name" => "global_logo_image_fixed_mobile",
                "type" => "image",
                "instructions" => "",
                "required" => 0,
                "conditional_logic" => 0,
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
            ]
        ],
        "location" => [
            [
                [
                    "param" => "post_type",
                    "operator" => "==",
                    "value" => "shop_webhook"
                ],
                [
                    "param" => "post_type",
                    "operator" => "!=",
                    "value" => "shop_webhook"
                ]
            ]
        ],
        "menu_order" => 0,
        "position" => "normal",
        "style" => "default",
        "label_placement" => "top",
        "instruction_placement" => "label",
        "hide_on_screen" => "",
        "active" => 1,
        "description" => ""
    ]);

endif;

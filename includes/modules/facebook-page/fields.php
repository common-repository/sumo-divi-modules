<?php 
    $plugin_fields = array(
        'static_css' => array(
            'type'            => 'text',
            'default'         => '',
            'option_category' => 'basic_option',
            'description'     => esc_html__( 'Text entered here will appear as title.', 'cwp-ds' ),
            'toggle_slug'     => 'main_content',
        ),

        'cwp_fb_id' => array(
            'label'            => esc_html__( 'App ID', 'cwp-ds' ),
            'type'             => 'text',
            'option_category'  => 'basic_option',
            'default'          => 'divi-sumo',
            'description'      => esc_html__( '', 'cwp-ds' ),
            'toggle_slug'      => 'main_content',
        ),

        'cwp_fb_layout'   => array(
            'label'           => esc_html__( 'Tabs', 'cwp-ds' ),
            'type'            => 'multiple_checkboxes',
            'option_category' => 'configuration',
            'options'         => array(
                'timeline' => esc_html__( 'Timeline', 'cwp-ds' ),
                'events'   => esc_html__( 'Events', 'cwp-ds' ),
                'messages' => esc_html__( 'Messages', 'cwp-ds' ),
            ),
            'default'         => 'on|off|off',
            'toggle_slug'     => 'main_content',
            'description'     => esc_html__( '', 'cwp-ds' ),

        ),

        'cwp_fb_small_header' => array(
            'label'           => esc_html__( 'Small Header', 'cwp-ds' ),
            'type'            => 'yes_no_button',
            'option_category' => 'basic_option',
            'default'         => 'off',
            'options'         => array(
                'off' => esc_html__( 'No', 'cwp-ds' ),
                'on'  => esc_html__( 'Yes', 'cwp-ds' ),
            ),
            'tab_slug'        => 'general',
            'toggle_slug'     => 'main_content',

            'description' => esc_html__( '', 'cwp-ds' ),
        ),

        'cwp_fb_cover_photo' => array(
            'label'           => esc_html__( 'Cover Photo', 'cwp-ds' ),
            'type'            => 'yes_no_button',
            'option_category' => 'basic_option',
            'default'         => 'off',
            'options'         => array(
                'off' => esc_html__( 'No', 'cwp-ds' ),
                'on'  => esc_html__( 'Yes', 'cwp-ds' ),
            ),
            'tab_slug'        => 'general',
            'toggle_slug'     => 'main_content',

            'description' => esc_html__( '', 'cwp-ds' ),
        ),

        'cwp_fb_profile_photo' => array(
            'label'           => esc_html__( 'Profile Photo', 'cwp-ds' ),
            'type'            => 'yes_no_button',
            'option_category' => 'basic_option',
            'default'         => 'off',
            'options'         => array(
                'off' => esc_html__( 'No', 'cwp-ds' ),
                'on'  => esc_html__( 'Yes', 'cwp-ds' ),
            ),
            'tab_slug'        => 'general',
            'toggle_slug'     => 'main_content',

            'description' => esc_html__( '', 'cwp-ds' ),
        ),

        'cwp_fb_cta_btn' => array(
            'label'           => esc_html__( 'Custom CTA Button', 'cwp-ds' ),
            'type'            => 'yes_no_button',
            'option_category' => 'basic_option',
            'default'         => 'off',
            'options'         => array(
                'off' => esc_html__( 'No', 'cwp-ds' ),
                'on'  => esc_html__( 'Yes', 'cwp-ds' ),
            ),
            'tab_slug'        => 'general',
            'toggle_slug'     => 'main_content',

            'description' => esc_html__( '', 'cwp-ds' ),
        ),

        'cwp_fb_width' => array(
            'label'           => esc_html__( 'Width', 'cwp-ds' ),
            'type'            => 'range',
            'option_category' => 'layout',
            'tab_slug'        => 'general',
            'toggle_slug'     => 'main_content',
            'validate_unit'   => true,
            'default'         => '500',
            'unitless'        => true,
            'allow_empty'     => true,
            'range_settings'  => array(
                'min'  => '1',
                'max'  => '500',
                'step' => '1',
            ),
        ),
        
        'cwp_fb_height' => array(
            'label'           => esc_html__( 'Height', 'cwp-ds' ),
            'type'            => 'range',
            'option_category' => 'layout',
            'tab_slug'        => 'general',
            'toggle_slug'     => 'main_content',
            'validate_unit'   => true,
            'default'         => '500',
            'unitless'        => true,
            'allow_empty'     => true,
            'range_settings'  => array(
                'min'  => '1',
                'max'  => '500',
                'step' => '1',
            ),
        ),
    );

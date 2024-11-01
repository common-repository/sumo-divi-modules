<?php 
    $plugin_fields = array(
        'static_css' => array(
            'type'            => 'text',
            'default'         => '',
            'option_category' => 'basic_option',
            'description'     => esc_html__( '', 'dicm-divi-custom-modules' ),
            'toggle_slug'     => 'main_content',
        ),

        'button_text_one' => array(
            'label'            => esc_html__( 'Button 1 Text', 'cwp-ds' ),
            'type'             => 'text',
            'option_category'  => 'basic_option',
            'default'          => 'Button 1',
            'description'      => esc_html__( '', 'cwp-ds' ),
            'toggle_slug'      => 'main_content',
        ),

        'button_text_two' => array(
            'label'            => esc_html__( 'Button 2 Text', 'cwp-ds' ),
            'type'             => 'text',
            'option_category'  => 'basic_option',
            'default'          => 'Button 2',
            'description'      => esc_html__( '', 'cwp-ds' ),
            'toggle_slug'      => 'main_content',
        ),

        'button_url_one' => array(
            'label'            => esc_html__( 'Button 1 Link URL', 'cwp-ds' ),
            'type'             => 'text',
            'option_category'  => 'basic_option',
            'description'      => esc_html__( '', 'cwp-ds' ),
            'toggle_slug'      => 'link',	
        ),
        'url_new_window_one' => array(
            'label'            => esc_html__( 'Button 1 Link Target', 'cwp-ds' ),
            'type'             => 'select',
            'option_category'  => 'configuration',
            'options'          => array(
                'off' => esc_html__( 'In The Same Window', 'cwp-ds' ),
                'on'  => esc_html__( 'In The New Tab', 'cwp-ds' ),
            ),
            'toggle_slug'      => 'link',
            'description'      => esc_html__( '', 'cwp-ds' ),
        ),

        'button_url_two' => array(
            'label'            => esc_html__( 'Button 2 Link URL', 'cwp-ds' ),
            'type'             => 'text',
            'option_category'  => 'basic_option',
            'description'      => esc_html__( '', 'cwp-ds' ),
            'toggle_slug'      => 'link',
            'dynamic_content'  => 'url',
        ),

        'url_new_window_two' => array(
            'label'            => esc_html__( 'Button 2 Link Target', 'cwp-ds' ),
            'type'             => 'select',
            'option_category'  => 'configuration',
            'options'          => array(
                'off' => esc_html__( 'In The Same Window', 'cwp-ds' ),
                'on'  => esc_html__( 'In The New Tab', 'cwp-ds' ),
            ),
            'toggle_slug'      => 'link',
            'description'      => esc_html__( '', 'cwp-ds' ),
        ),

        'use_icon_one' => array(
            'label'           => esc_html__( 'Use Icon 1', 'cwp-ds' ),
            'type'            => 'yes_no_button',
            'option_category' => 'basic_option',
            'default'         => 'off',
            'options'         => array(
                'off' => esc_html__( 'No', 'cwp-ds' ),
                'on'  => esc_html__( 'Yes', 'cwp-ds' ),
            ),
            'tab_slug'        => 'advanced',
            'toggle_slug'     => 'button_icon',

            'description' => esc_html__( '', 'cwp-ds' ),
        ),
        'font_icon_one' => array(
            'label'               => esc_html__( 'Icon 1', 'cwp-ds' ),
            'type'                => 'select_icon',
            'option_category'     => 'basic_option',
            'default'             => 'E',
            'class'               => array( 'et-pb-font-icon' ),
            'tab_slug'            => 'advanced',
            'toggle_slug'         => 'button_icon',
            'description'         => esc_html__( '', 'cwp-ds' ),

            'show_if' => array(
                'use_icon_one' => 'on',     
            ),
        ),

        'icon_color_one' => array(
            'label'             => esc_html__( 'Icon 1 Color', 'cwp-ds' ),
            'type'              => 'color-alpha',
            'description'       => esc_html__( '', 'cwp-ds' ),
            'default'           => '#ffffff',
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'button_icon',
            'apply_css'         => array(
                'css'   => 'color: %1$s;',
                'selector'  => '%%order_class%% .dual_button_one .cwp_dual_button .btn-icon', 
                'condition' => 'use_icon_one === on ',  
            ),

            'show_if' => array(
                'use_icon_one' => 'on',     
            ),
        ),

        'icon_one_font_size' => array(
            'label'             => esc_html__( 'Icon 1 Font Size', 'cwp-ds' ),
            'type'              => 'range',
            'option_category'   => 'configuration',
            'default'           => '22px',
            'default_unit'      => 'px',
            'mobile_options'  => true,
            'range_settings' => array(
                'min'  => '1',
                'max'  => '100',
                'step' => '1',
            ),
            'responsive' => true,
            'mobile_options'     => true,
            'tab_slug'         => 'advanced',
            'toggle_slug'     => 'button_icon',
            'description'       => esc_html__( "", 'cwp-ds' ),
            'apply_css'         => array(
                'css'   => 'font-size: %1$s;',
                'responsive_field' => 'font-size',
                'selector'  => '%%order_class%% .dual_button_one .cwp_dual_button .btn-icon',
                'condition' => 'use_icon_one === on '
            ),

            'show_if' => array(
                'use_icon_one' => 'on',     
            ),
        ),

        'icon_placement_one' => array(
            'label'            => esc_html__( 'Icon Placement', 'cwp-ds' ),
            'type'             => 'select',
            'option_category'  => 'configuration',
            'default'          => 'left',
            'options'          => array(
                'left' => esc_html__( 'Left', 'cwp-ds' ),
                'right'  => esc_html__( 'Right', 'cwp-ds' ),
            ),
            'tab_slug'         => 'advanced',
            'toggle_slug'      => 'button_icon',
            'description'      => esc_html__( '', 'cwp-ds' ),
            
            'show_if' => array(
                'use_icon_one' => 'on',     
            ),
        ),

        'use_icon_two' => array(
            'label'           => esc_html__( 'Use Icon 2', 'cwp-ds' ),
            'type'            => 'yes_no_button',
            'option_category' => 'basic_option',
            'default'         => 'off',
            'options'         => array(
                'off' => esc_html__( 'No', 'cwp-ds' ),
                'on'  => esc_html__( 'Yes', 'cwp-ds' ),
            ),
            'tab_slug'        => 'advanced',
            'toggle_slug'     => 'button_icon',

            'description' => esc_html__( '', 'cwp-ds' ),
        ),
        'font_icon_two' => array(
            'label'               => esc_html__( 'Icon 2', 'cwp-ds' ),
            'type'                => 'select_icon',
            'option_category'     => 'basic_option',
            'default'             => 'E',
            'class'               => array( 'et-pb-font-icon' ),
            'tab_slug'            => 'advanced',
            'toggle_slug'         => 'button_icon',
            'description'         => esc_html__( '', 'cwp-ds' ),

            'show_if' => array(
                'use_icon_two' => 'on',     
            ),
        ),

        'btn_bg_one' => array(
            'label'             => esc_html__( 'Button 1 Bg Color', 'cwp-ds' ),
            'type'              => 'color-alpha',
            'description'       => esc_html__( '', 'cwp-ds' ),
            'default'           => '#818a91',
            'tab_slug'          => 'general',
            'toggle_slug'       => 'background',
            'apply_css'         => array(
                'css'   => 'background: %1$s;',
                'selector'  => '%%order_class%% .dual_button_one .cwp_dual_button',   
            ),
        ),

        'btn_bg_hover_one' => array(
            'label'             => esc_html__( 'Button 1 Bg Hover Color', 'cwp-ds' ),
            'type'              => 'color-alpha',
            'description'       => esc_html__( '', 'cwp-ds' ),
            'default'           => '#00C5EC',
            'tab_slug'          => 'general',
            'toggle_slug'       => 'background',
            'apply_css'         => array(
                'css'   => 'background: %1$s;',
                'selector'  => '%%order_class%% .dual_button_one:hover .cwp_dual_button',   
            ),
        ),

        'btn_bg_two' => array(
            'label'             => esc_html__( 'Button 2 Bg Color', 'cwp-ds' ),
            'type'              => 'color-alpha',
            'description'       => esc_html__( '', 'cwp-ds' ),
            'default'           => '#0f6ecd',
            'tab_slug'          => 'general',
            'toggle_slug'       => 'background',
            'apply_css'         => array(
                'css'   => 'background: %1$s;',
                'selector'  => '%%order_class%% .dual_button_two .cwp_dual_button',
            ),
        ),

        'btn_bg_hover_two' => array(
            'label'             => esc_html__( 'Button 2 Bg Hover Color', 'cwp-ds' ),
            'type'              => 'color-alpha',
            'description'       => esc_html__( '', 'cwp-ds' ),
            'default'           => '#00A7C7',
            'tab_slug'          => 'general',
            'toggle_slug'       => 'background',
            'apply_css'         => array(
                'css'   => 'background: %1$s;',
                'selector'  => '%%order_class%% .dual_button_two:hover .cwp_dual_button',
            ),
        ),

        'icon_two_font_size' => array(
            'label'             => esc_html__( 'Icon 2 Font Size', 'cwp-ds' ),
            'type'              => 'range',
            'option_category'   => 'configuration',
            'default'           => '22px',
            'default_unit'      => 'px',
            'mobile_options'  => true,
            'range_settings' => array(
                'min'  => '1',
                'max'  => '100',
                'step' => '1',
            ),
            'responsive' => true,
            'mobile_options'     => true,
            'tab_slug'         => 'advanced',
            'toggle_slug'     => 'button_icon',
            'description'       => esc_html__( "", 'cwp-ds' ),
            'apply_css'         => array(
                'css'   => 'font-size: %1$s;',
                'responsive_field' => 'font-size',
                'selector'  => '%%order_class%% .dual_button_two .cwp_dual_button .btn-icon',
                'condition' => 'use_icon_two === on '
            ),

            'show_if' => array(
                'use_icon_two' => 'on',     
            ),
        ),

        'use_dual_connector' => array(
            'label'           => esc_html__( 'Use Connector', 'cwp-ds' ),
            'type'            => 'yes_no_button',
            'option_category' => 'basic_option',
            'default'         => 'on',
            'options'         => array(
                'off' => esc_html__( 'No', 'cwp-ds' ),
                'on'  => esc_html__( 'Yes', 'cwp-ds' ),
            ),
            'tab_slug'        => 'general',
            'toggle_slug'     => 'main_content',

            'description' => esc_html__( '', 'cwp-ds' ),
        ),

        'cwp_dual_connector_size' => array(
            'label'           => esc_html__( 'Connector Size', 'cwp-ds' ),
            'default'         => 'small',
            'type'            => 'select',
            'option_category' => 'configuration',
            'options'         => array(
                'small' => esc_html__( 'Small', 'cwp-ds' ),
                'medium'  => esc_html__( 'Medium', 'cwp-ds' ),
                'large'  => esc_html__( 'Large', 'cwp-ds' ),
            ),
            'tab_slug'        => 'general',
            'toggle_slug'     => 'main_content',
            'description'     => esc_html__( '', 'cwp-ds' ),
    
            'show_if' => array(
                'use_dual_connector' => 'on', 
            ),
        ),

        'dual_connector_text' => array(
            'label'            => esc_html__( 'Connector Text', 'cwp-ds' ),
            'type'             => 'text',
            'option_category'  => 'basic_option',
            'default'          => 'OR',
            'description'      => esc_html__( '', 'cwp-ds' ),
            'toggle_slug'      => 'main_content',

            'show_if' => array(
                'use_dual_connector' => 'on',
                'use_icon_connector'   => 'off', 
            ),
        ),

        'use_icon_connector' => array(
            'label'           => esc_html__( 'Use Connector Icon', 'cwp-ds' ),
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

            'show_if' => array(
                'use_dual_connector'    => 'on',
            ),
        ),

        'connector_font_icon' => array(
            'label'               => esc_html__( 'Connector Icon', 'cwp-ds' ),
            'type'                => 'select_icon',
            'option_category'     => 'basic_option',
            'default'             => 'E',
            'class'               => array( 'et-pb-font-icon' ),
            'tab_slug'            => 'general',
            'toggle_slug'         => 'main_content',
            'description'         => esc_html__( '', 'cwp-ds' ),

            'show_if' => array(
                'use_dual_connector' => 'on',
                'use_icon_connector'   => 'on',     
            ),
        ),

        'btn_sep_text_color' => array(
            'label'             => esc_html__( 'Connector Text Color', 'cwp-ds' ),
            'type'              => 'color-alpha',
            'description'       => esc_html__( '', 'cwp-ds' ),
            'default'           => '#333333',
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'dual_connector',
            'apply_css'         => array(
                'css'   => 'color: %1$s;',
                'selector'  => '%%order_class%% .dual_button_wrapper .dual-btn-seprator',
            ),
        ),

        'btn_sep_bg' => array(
            'label'             => esc_html__( 'Connector Bg Color', 'cwp-ds' ),
            'type'              => 'color-alpha',
            'description'       => esc_html__( '', 'cwp-ds' ),
            'default'           => '#ffffff',
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'dual_connector',
            'apply_css'         => array(
                'css'   => 'background: %1$s;',
                'selector'  => '%%order_class%% .dual-btn-seprator',
            ),
        ),

        'btn_sep_color' => array(
            'label'             => esc_html__( 'Connector Icon Color', 'cwp-ds' ),
            'type'              => 'color-alpha',
            'description'       => esc_html__( '', 'cwp-ds' ),
            'default'           => '#007ba8',
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'dual_connector',
            'apply_css'         => array(
                'css'   => 'color: %1$s;',
                'selector'  => '%%order_class%% .dual-btn-seprator .icon',
            ),
        ),

        'cwp_sep_border_radius'  => array(
            'label'            => esc_html__( 'Border Radius', 'cwp-ds' ),
            'description'      => esc_html__( '', 'cwp-ds' ),
            'type'             => 'range',
            'option_category'  => 'font_option',
            'tab_slug'         => 'advanced',
            'toggle_slug'      => 'dual_connector',
            'allowed_units'    => array( '%', 'em', 'rem', 'px', 'cm', 'mm', 'in', 'pt', 'pc', 'ex', 'vh', 'vw' ),
            'default'          => '100px',
            'default_unit'     => 'px',
            'range_settings'   => array(
                'min'  => '1',
                'max'  => '100',
                'step' => '1',
            ),
            'apply_css'         => array(
                'css'   => 'border-radius: %1$s;',
                'responsive_field' => 'border-radius',
                'selector'  => '%%order_class%% .dual_button_wrapper .dual-btn-seprator',
            ),

            'mobile_options'   => true,
            'responsive'       => true,
         ),

        'dual_btn_align'        => array(
            'label'       => esc_html__( 'Alignment', 'cwp-ds' ),
            'type'        => 'multiple_buttons',
            'options'     => array(
             'left' => array(
              'title' => esc_html__( 'Left', 'cwp-ds' ),
             ),
             'center'   => array(
              'title' => esc_html__( 'Center', 'cwp-ds' ),
             ),

             'right'   => array(
                'title' => esc_html__( 'Right', 'cwp-ds' ),
            ),
            ),
            'default'         => 'center',
            'toggleable'      => true,
            'multi_selection' => false,
            'toggle_slug'     => 'alignment',
            'tab_slug'        => 'advanced',
           ),

        'icon_color_two' => array(
            'label'             => esc_html__( 'Icon 2 Color', 'cwp-ds' ),
            'type'              => 'color-alpha',
            'description'       => esc_html__( '', 'cwp-ds' ),
            'default'           => '#ffffff',
            'tab_slug'          => 'advanced',
            'toggle_slug'       => 'button_icon',
            'apply_css'         => array(
                'css'   => 'color: %1$s;',
                'selector'  => '%%order_class%% .dual_button_two .cwp_dual_button .btn-icon', 
                'condition' => 'use_icon_two === on ',  
            ),

            'show_if' => array(
                'use_icon_two' => 'on',     
            ),
        ),

        'icon_placement_two' => array(
            'label'            => esc_html__( 'Icon Placement', 'cwp-ds' ),
            'type'             => 'select',
            'option_category'  => 'configuration',
            'default'          => 'left',
            'options'          => array(
                'left' => esc_html__( 'Left', 'cwp-ds' ),
                'right'  => esc_html__( 'Right', 'cwp-ds' ),
            ),
            'tab_slug'         => 'advanced',
            'toggle_slug'      => 'button_icon',
            'description'      => esc_html__( '', 'cwp-ds' ),
                'show_if' => array(
                    'use_icon_two' => 'on',     
                ),
        ),  

        'cwp_dual_stack' => array(
            'label'           => esc_html__( 'Stack', 'cwp-ds' ),
            'type'            => 'yes_no_button',
            'option_category' => 'basic_option',
            'default'         => 'off',
            'options'         => array(
                'off' => esc_html__( 'No', 'cwp-ds' ),
                'on'  => esc_html__( 'Yes', 'cwp-ds' ),
            ),
            'tab_slug'         => 'general',
            'toggle_slug'      => 'main_content',
            'mobile_options'   => true,
            'responsive'       => true,
            'description' => esc_html__( '', 'cwp-ds' ),   
        ),
    );

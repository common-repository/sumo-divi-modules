<?php 
    $plugin_fields = array(
        'static_css' => array(
            'type'            => 'text',
            'default'         => '',
            'option_category' => 'basic_option',
            'description'     => esc_html__( '', 'cwp-ds' ),
            'toggle_slug'     => 'main_content',
        ),

        'cwp_fb_btn_link' => array(
            'label'            => esc_html__( 'Link', 'cwp-ds' ),
            'type'             => 'text',
            'option_category'  => 'basic_option',
            'default'          => 'divi-sumo',
            'description'      => esc_html__( '', 'cwp-ds' ),
            'toggle_slug'      => 'main_content',
        ),

        'cwp_fb_btn_type' => array(
            'label'            => esc_html__( 'Type', 'cwp-ds' ),
            'type'             => 'select',
            'default'          => 'like',
            'option_category'  => 'configuration',
            'options'          => array(
                'like' => esc_html__( 'Like', 'cwp-ds' ),
                'recommend'  => esc_html__( 'Recommend', 'cwp-ds' ),
            ),
            'tab_slug'         => 'general',
            'toggle_slug'      => 'main_content',
            'description'      => esc_html__( '', 'cwp-ds' ),
        ),

        'cwp_fb_btn_layout' => array(
            'label'            => esc_html__( 'Layout', 'cwp-ds' ),
            'type'             => 'select',
            'default'          => 'standard',
            'option_category'  => 'configuration',
            'options'          => array(
                'standard' => esc_html__( 'Standard', 'cwp-ds' ),
                'button'  => esc_html__( 'Button', 'cwp-ds' ),
                'button_count'  => esc_html__( 'Button Count', 'cwp-ds' ),
                'box_count'  => esc_html__( 'Box Count', 'cwp-ds' ),
            ),
            'tab_slug'         => 'general',
            'toggle_slug'      => 'main_content',
            'description'      => esc_html__( '', 'cwp-ds' ),
        ),

        'cwp_fb_btn_size' => array(
            'label'            => esc_html__( 'Size', 'cwp-ds' ),
            'type'             => 'select',
            'default'          => 'small',
            'option_category'  => 'configuration',
            'options'          => array(
                'small' => esc_html__( 'Small', 'cwp-ds' ),
                'large'  => esc_html__( 'Large', 'cwp-ds' ),
            ),
            'tab_slug'         => 'general',
            'toggle_slug'      => 'main_content',
            'description'      => esc_html__( '', 'cwp-ds' ),
        ),

        'cwp_fb_btn_share' => array(
            'label'           => esc_html__( 'Share Button', 'cwp-ds' ),
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

        'cwp_fb_btn_height' => array(
          'label'             => esc_html__( 'Height', 'cwp-ds' ),
          'type'              => 'range',
          'option_category'   => 'configuration',
          'default'           => '100px',
          'default_unit'      => 'px',
          'range_settings' => array(
            'min'  => '1',
            'max'  => '300',
            'step' => '1',
          ),
          'description'     => esc_html__( "", 'cwp-ds' ),
          'tab_slug'         => 'general',
          'toggle_slug'      => 'main_content',
        ),
    );

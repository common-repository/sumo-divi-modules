<?php

if ( !defined('ABSPATH') ) {
	exit;
}

class cwpds__CWP_SUMO_IMAGE_COLLAGE extends ET_Builder_Module {
	function init() {
		$this->name       = esc_html__( 'Image Collage', 'cwp-ds' );
		$this->plural     = esc_html__( 'Texts', 'cwp-ds' );
		$this->slug       = 'cwp_image_collage';
		$this->vb_support = 'on';

		$this->settings_modal_toggles = array(
			'general'  => array(
				'toggles' => array(
					'main_content' => esc_html__( 'General', 'cwp-ds' ),

					'dc_images' => array(
						'title'    => esc_html__( 'Images', 'cwp-ds' ),
						'priority' => 45,
						'tabbed_subtoggles' => true,
						//'bb_icons_support' => true,
						'sub_toggles' => array(
							'i_one'     => array(
								'name' => '1',
							
							),
							'i_two'     => array(
								'name' => '2',
							
							),
							'i_three'    => array(
								'name' => '3',	
							),
							'i_four'    => array(
								'name' => '4',	
							),
							'i_five'    => array(
								'name' => '5',	
							),
							'i_six'    => array(
								'name' => '6',	
							),
							'i_seven'    => array(
								'name' => '7',	
							),
							'i_eight'    => array(
								'name' => '8',	
							),
							
						),
					),
				),
			),
			'advanced' => array(
				'toggles' => array(
				
					'width' => array(
						'title'    => esc_html__( 'Sizing', 'cwp-ds' ),
						'priority' => 65,
					),
				),
			),
		);

		$this->advanced_fields = array(
			               	
			'background'            => array(
				'settings' => array(
					'color' => 'alpha',
				),
			),
			'margin_padding' => array(
				'css' => array(
					'important' => 'all',
				),
			),
			'fonts' => false,  
			'text'          => false,
			'button'        => false,
			'height'        => false,
		);

		$this->help_videos = array(
			array(
				'id'   => esc_html( 'oL00RjEKZaU' ),
				'name' => esc_html__( 'An introduction to the Text module', 'cwp-ds' ),
			),
		);
	}

	function get_fields() {
		$fields = array(
			
			'num_image' => array(
				'label'           => esc_html__( 'Number Of Images', 'cwp-ds' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',
				'unitless'        => true,
				'default'         => '2',
				'default_unit'    => '',
				'range_settings'  => array(
					'min'  => '2',
					'max'  => '8',
					'step' => '1',
				),
				'description'     => esc_html__( '', 'cwp-ds' ),
			),

			'two_style' => array(
				'label'           => esc_html__( 'Collage Style', 'cwp-ds' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'default'         => 'one',
				'options'         => array(
					'one' => esc_html__( 'Style 1', 'cwp-ds' ),
					'two'  => esc_html__( 'Style 2', 'cwp-ds' ),
				),
				'tab_slug'      => 'general',
				'toggle_slug'   => 'main_content',
				'description'   => esc_html__( '', 'cwp-ds' ),

				'show_if' => array(
					'num_image' => '2',     
				),	
			),

			'three_style' => array(
				'label'           => esc_html__( 'Collage Style', 'cwp-ds' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'default'         => 'one',
				'options'         => array(
					'one' => esc_html__( 'Style 1', 'cwp-ds' ),
					'two'  => esc_html__( 'Style 2', 'cwp-ds' ),
					'three' => esc_html__( 'Style 3', 'cwp-ds' ),
					'four'  => esc_html__( 'Style 4', 'cwp-ds' ),
					'five' => esc_html__( 'Style 5', 'cwp-ds' ),
					'six' => esc_html__( 'Style 6', 'cwp-ds' ),
					
				),
				'tab_slug'     => 'general',
				'toggle_slug'     => 'main_content',
				'description'     => esc_html__( '', 'cwp-ds' ),
				
				'show_if' => array(
					'num_image' => '3',     
				),
			),

			'four_style' => array(
				'label'           => esc_html__( 'Collage Style', 'cwp-ds' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'default'         => 'one',
				'options'         => array(
					'one' => esc_html__( 'Style 1', 'cwp-ds' ),
					'two'  => esc_html__( 'Style 2', 'cwp-ds' ),
					'three' => esc_html__( 'Style 3', 'cwp-ds' ),
					'four'  => esc_html__( 'Style 4', 'cwp-ds' ),
					'five' => esc_html__( 'Style 5', 'cwp-ds' ),
					'six' => esc_html__( 'Style 6', 'cwp-ds' ),
					'seven' => esc_html__( 'Style 7', 'cwp-ds' ),
					'eight' => esc_html__( 'Style 8', 'cwp-ds' ),
					'nine' => esc_html__( 'Style 9', 'cwp-ds' ),
					'ten' => esc_html__( 'Style 10', 'cwp-ds' ),
					'eleven' => esc_html__( 'Style 11', 'cwp-ds' ),
					'twelve' => esc_html__( 'Style 12', 'cwp-ds' ),
					'thirteen' => esc_html__( 'Style 13', 'cwp-ds' ),
					'fourteen' => esc_html__( 'Style 14', 'cwp-ds' ),
					'fifteen' => esc_html__( 'Style 15', 'cwp-ds' ),
					
				),
				'tab_slug'     => 'general',
				'toggle_slug'     => 'main_content',
				'description'     => esc_html__( '', 'cwp-ds' ),
				  
					'show_if' => array(
						'num_image' => '4',     
					)
				),

				'five_style' => array(
					'label'           => esc_html__( 'Collage Style', 'cwp-ds' ),
					'type'            => 'select',
					'option_category' => 'configuration',
					'default'         => 'one',
					'options'         => array(
						'one' => esc_html__( 'Style 1', 'cwp-ds' ),
						'two'  => esc_html__( 'Style 2', 'cwp-ds' ),
						'three' => esc_html__( 'Style 3', 'cwp-ds' ),
						'four'  => esc_html__( 'Style 4', 'cwp-ds' ),
						'five' => esc_html__( 'Style 5', 'cwp-ds' ),
						'six' => esc_html__( 'Style 6', 'cwp-ds' ),
						'seven' => esc_html__( 'Style 7', 'cwp-ds' ),
						'eight' => esc_html__( 'Style 8', 'cwp-ds' ),
						'nine' => esc_html__( 'Style 9', 'cwp-ds' ),
						'ten' => esc_html__( 'Style 10', 'cwp-ds' ),
						'eleven' => esc_html__( 'Style 11', 'cwp-ds' ),
						'twelve' => esc_html__( 'Style 12', 'cwp-ds' ),
						'thirteen' => esc_html__( 'Style 13', 'cwp-ds' ),
						'fourteen' => esc_html__( 'Style 14', 'cwp-ds' ),
						'fifteen' => esc_html__( 'Style 15', 'cwp-ds' ),
						'sixteen' => esc_html__( 'Style 16', 'cwp-ds' ),	
					),
					'tab_slug'     => 'general',
					'toggle_slug'     => 'main_content',
					'description'     => esc_html__( '', 'cwp-ds' ),
					  
						'show_if' => array(
							'num_image' => '5',     
						)
					),

					'six_style' => array(
						'label'           => esc_html__( 'Collage Style', 'cwp-ds' ),
						'type'            => 'select',
						'option_category' => 'configuration',
						'default'         => 'one',
						'options'         => array(
							'one' => esc_html__( 'Style 1', 'cwp-ds' ),
							'two'  => esc_html__( 'Style 2', 'cwp-ds' ),
							'three' => esc_html__( 'Style 3', 'cwp-ds' ),
							'four'  => esc_html__( 'Style 4', 'cwp-ds' ),
							'five' => esc_html__( 'Style 5', 'cwp-ds' ),
							'six' => esc_html__( 'Style 6', 'cwp-ds' ),
							'seven' => esc_html__( 'Style 7', 'cwp-ds' ),
							'eight' => esc_html__( 'Style 8', 'cwp-ds' ),
							'nine' => esc_html__( 'Style 9', 'cwp-ds' ),
							'ten' => esc_html__( 'Style 10', 'cwp-ds' ),
							'eleven' => esc_html__( 'Style 11', 'cwp-ds' ),
							'twelve' => esc_html__( 'Style 12', 'cwp-ds' ),
							'thirteen' => esc_html__( 'Style 13', 'cwp-ds' ),
							'fourteen' => esc_html__( 'Style 14', 'cwp-ds' ),
							'fifteen' => esc_html__( 'Style 15', 'cwp-ds' ),
							
						),
						'tab_slug'     => 'general',
						'toggle_slug'     => 'main_content',
						'description'     => esc_html__( '', 'cwp-ds' ),
						  
							'show_if' => array(
								'num_image' => '6',     
							)
				    ),

				 'seven_style' => array(
					'label'           => esc_html__( 'Collage Style', 'cwp-ds' ),
					'type'            => 'select',
					'option_category' => 'configuration',
					'default'         => 'one',
					'options'         => array(
						'one' => esc_html__( 'Style 1', 'cwp-ds' ),
						'two'  => esc_html__( 'Style 2', 'cwp-ds' ),
						'three' => esc_html__( 'Style 3', 'cwp-ds' ),
						'four'  => esc_html__( 'Style 4', 'cwp-ds' ),
						'five' => esc_html__( 'Style 5', 'cwp-ds' ),
						'six' => esc_html__( 'Style 6', 'cwp-ds' ),
						'seven' => esc_html__( 'Style 7', 'cwp-ds' ),
						'eight' => esc_html__( 'Style 8', 'cwp-ds' ),
						'nine' => esc_html__( 'Style 9', 'cwp-ds' ),
						'ten' => esc_html__( 'Style 10', 'cwp-ds' ),
						'eleven' => esc_html__( 'Style 11', 'cwp-ds' ),
						'twelve' => esc_html__( 'Style 12', 'cwp-ds' ),
						'thirteen' => esc_html__( 'Style 13', 'cwp-ds' ),
						'fourteen' => esc_html__( 'Style 14', 'cwp-ds' ),	
					),
					'tab_slug'     => 'general',
					'toggle_slug'     => 'main_content',
					'description'     => esc_html__( '', 'cwp-ds' ),
					  
						'show_if' => array(
							'num_image' => '7',     
						)
				),
				
				'eight_style' => array(
					'label'           => esc_html__( 'Collage Style', 'cwp-ds' ),
					'type'            => 'select',
					'option_category' => 'configuration',
					'default'         => 'one',
					'options'         => array(
						'one' => esc_html__( 'Style 1', 'cwp-ds' ),
						'two'  => esc_html__( 'Style 2', 'cwp-ds' ),
						'three' => esc_html__( 'Style 3', 'cwp-ds' ),
						'four'  => esc_html__( 'Style 4', 'cwp-ds' ),
						'five' => esc_html__( 'Style 5', 'cwp-ds' ),
						'six' => esc_html__( 'Style 6', 'cwp-ds' ),
						'seven' => esc_html__( 'Style 7', 'cwp-ds' ),	
					),
					'tab_slug'     => 'general',
					'toggle_slug'     => 'main_content',
					'description'     => esc_html__( '', 'cwp-ds' ),
					  
						'show_if' => array(
							'num_image' => '8',     
						)
				),

				'cwp_gw' => array(
					'label'           => esc_html__( 'Gutter Width', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'toggle_slug'     => 'main_content',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '10px',
					'default_unit'    => 'px',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
					),	
				),

				'pc_radius' => array(
					'label'           => esc_html__( 'Image Border Radius', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'toggle_slug'     => 'main_content',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '0px',
					'default_unit'    => 'px',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
					),
					'description'     => esc_html__( '', 'cwp-ds' ),
				),

				// mobile option 
				'cwp_mobile_option' => array(
					'label'           => esc_html__( 'Mobile View', 'cwp-ds' ),
					'type'            => 'select',
					'option_category' => 'configuration',
					'default'         => 'one',
					'options'         => array(
						'desktop_view' => esc_html__(  'Desktop View', 'cwp-ds' ),
						'stack'  => esc_html__( 'stack', 'cwp-ds' ),
					),
					'tab_slug'     => 'general',
					'toggle_slug'  => 'main_content',
					'description'  => esc_html__( '', 'cwp-ds' ),		
				),

				'cwp_image_height' => array(
					'label'           => esc_html__( 'Image Height', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'toggle_slug'     => 'main_content',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '300px',
					'default_unit'    => 'px',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '500',
						'step' => '1',
					),	

					'show_if' => array(
					  'cwp_mobile_option' => 'stack',
					), 
				),

				'cwp_image_spacing' => array(
					'label'           => esc_html__( 'Image Bottom spacing', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'toggle_slug'     => 'main_content',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '10px',
					'default_unit'    => 'px',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
					),	

					'show_if' => array(
					  'cwp_mobile_option' => 'stack',
					), 
				),


				// image tab 1 field
				'st_src_one' => array(
					'label'              => esc_html__( 'Image 1', 'cwp-ds' ),
					'type'               => 'upload',
					'option_category'    => 'basic_option',
					'default'            => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
					'upload_button_text' => esc_attr__( 'Upload an image', 'cwp-ds' ),
					'choose_text'        => esc_attr__( 'Choose an Image', 'cwp-ds' ),
					'update_text'        => esc_attr__( 'Set As Image', 'cwp-ds' ),
					'hide_metadata'      => true,
					'description'        => esc_html__( 'Upload your desired image, or type in the URL to the image you would like to display.', 'cwp-ds' ),
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_one',
						
				),

				'src_one_h_pos' => array(
					'label'           => esc_html__( 'Image 1 Horizontal Position', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_one',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '50%',
					'default_unit'    => '%',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
					),	
				),

				'src_one_v_pos' => array(
					'label'           => esc_html__( 'Image 1 Vertical Position', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'sub_toggle'      => 'i_one',
					'toggle_slug'     => 'dc_images',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '50%',
					'default_unit'    => '%',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
					),	
				),
                 // image tab 2 field
				'st_src_two' => array(
					'label'              => esc_html__( 'Image 2', 'cwp-ds' ),
					'type'               => 'upload',
					'option_category'    => 'basic_option',
					'default'            => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
					'upload_button_text' => esc_attr__( 'Upload an image', 'cwp-ds' ),
					'choose_text'        => esc_attr__( 'Choose an Image', 'cwp-ds' ),
					'update_text'        => esc_attr__( 'Set As Image', 'cwp-ds' ),
					'hide_metadata'      => true,
					'description'        => esc_html__( '', 'cwp-ds' ),
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_two',
					
				),

				'src_two_h_pos' => array(
					'label'           => esc_html__( 'Image 2 Horizontal Position', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_two',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '50%',
					'default_unit'    => '%',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
					),	
				),

				'src_two_v_pos' => array(
					'label'           => esc_html__( 'Image 2 Vertical Position', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_two',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '50%',
					'default_unit'    => '%',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
					),	
				),

                // image tab 3 field
				'st_src_three' => array(
					'label'              => esc_html__( 'Image 3', 'cwp-ds' ),
					'type'               => 'upload',
					'option_category'    => 'basic_option',
					'default'            => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
					'upload_button_text' => esc_attr__( 'Upload an image', 'cwp-ds' ),
					'choose_text'        => esc_attr__( 'Choose an Image', 'cwp-ds' ),
					'update_text'        => esc_attr__( 'Set As Image', 'cwp-ds' ),
					'hide_metadata'      => true,
					'description'        => esc_html__( 'Upload your desired image, or type in the URL to the image you would like to display.', 'cwp-ds' ),
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_three',
				),

				'src_three_h_pos' => array(
					'label'           => esc_html__( 'Image 3 Horizontal Position', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_three',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '50%',
					'default_unit'    => '%',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
					),
				),

				'src_three_v_pos' => array(
					'label'           => esc_html__( 'Image 3 Vertical Position', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'sub_toggle'      => 'i_three',
					'toggle_slug'     => 'dc_images',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '50%',
					'default_unit'    => '%',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
					),
				),
                 // image tab 4 field
				'st_src_four' => array(
					'label'              => esc_html__( 'Image 4', 'cwp-ds' ),
					'type'               => 'upload',
					'option_category'    => 'basic_option',
					'default'            => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
					'upload_button_text' => esc_attr__( 'Upload an image', 'cwp-ds' ),
					'choose_text'        => esc_attr__( 'Choose an Image', 'cwp-ds' ),
					'update_text'        => esc_attr__( 'Set As Image', 'cwp-ds' ),
					'hide_metadata'      => true,
					'description'        => esc_html__( 'Upload your desired image, or type in the URL to the image you would like to display.', 'cwp-ds' ),
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_four',
				),

				'src_four_h_pos' => array(
					'label'           => esc_html__( 'Image 4 Horizontal Position', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_four',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '50%',
					'default_unit'    => '%',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
					),
				),

				'src_four_v_pos' => array(
					'label'           => esc_html__( 'Image 4 Vertical Position', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_four',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '50%',
					'default_unit'    => '%',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
					),		
				),
				// image tab 5 field

				'st_src_five' => array(
					'label'              => esc_html__( 'Image 5', 'cwp-ds' ),
					'type'               => 'upload',
					'option_category'    => 'basic_option',
					'default'            => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
					'upload_button_text' => esc_attr__( 'Upload an image', 'cwp-ds' ),
					'choose_text'        => esc_attr__( 'Choose an Image', 'cwp-ds' ),
					'update_text'        => esc_attr__( 'Set As Image', 'cwp-ds' ),
					'hide_metadata'      => true,
					'description'        => esc_html__( '', 'cwp-ds' ),
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_five',		
				),

				'src_five_h_pos' => array(
					'label'           => esc_html__( 'Image 5 Horizontal Position', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_five',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '50%',
					'default_unit'    => '%',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
					),
				),

				'src_five_v_pos' => array(
					'label'           => esc_html__( 'Image 5 Vertical Position', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_five',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'responsive'      => true,
					'default'         => '50%',
					'default_unit'    => '%',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '100',
						'step' => '1',
					),
				),
				// image tab 6 field
				'st_src_six' => array(
					'label'              => esc_html__( 'Image 6', 'cwp-ds' ),
					'type'               => 'upload',
					'option_category'    => 'basic_option',
					'default'            => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
					'upload_button_text' => esc_attr__( 'Upload an image', 'cwp-ds' ),
					'choose_text'        => esc_attr__( 'Choose an Image', 'cwp-ds' ),
					'update_text'        => esc_attr__( 'Set As Image', 'cwp-ds' ),
					'hide_metadata'      => true,
					'description'        => esc_html__( '', 'cwp-ds' ),
					'tab_slug'        => 'general',
					'toggle_slug'     => 'dc_images',
					'sub_toggle'      => 'i_six',	
					),
	
					'src_six_h_pos' => array(
						'label'           => esc_html__( 'Image 6 Horizontal Position', 'cwp-ds' ),
						'type'            => 'range',
						'option_category' => 'layout',
						'tab_slug'        => 'general',
						'toggle_slug'     => 'dc_images',
						'sub_toggle'      => 'i_six',
						'mobile_options'  => true,
						'validate_unit'   => true,
						'responsive'      => true,
						'default'         => '50%',
						'default_unit'    => '%',
						'range_settings'  => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
					),
	
					'src_six_v_pos' => array(
						'label'           => esc_html__( 'Image 6 Vertical Position', 'cwp-ds' ),
						'type'            => 'range',
						'option_category' => 'layout',
						'tab_slug'        => 'general',
						'toggle_slug'     => 'dc_images',
						'sub_toggle'      => 'i_six',
						'mobile_options'  => true,
						'validate_unit'   => true,
						'responsive'      => true,
						'default'         => '50%',
						'default_unit'    => '%',
						'range_settings'  => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
					),

					// image tab 7 field

					'st_src_seven' => array(
						'label'              => esc_html__( 'Image 7', 'cwp-ds' ),
						'type'               => 'upload',
						'option_category'    => 'basic_option',
						'default'            => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
						'upload_button_text' => esc_attr__( 'Upload an image', 'cwp-ds' ),
						'choose_text'        => esc_attr__( 'Choose an Image', 'cwp-ds' ),
						'update_text'        => esc_attr__( 'Set As Image', 'cwp-ds' ),
						'hide_metadata'      => true,
						'description'        => esc_html__( '', 'cwp-ds' ),
						'tab_slug'        => 'general',
						'toggle_slug'     => 'dc_images',
						'sub_toggle'      => 'i_seven',
					),
	
					'src_seven_h_pos' => array(
						'label'           => esc_html__( 'Image 7 Horizontal Position', 'cwp-ds' ),
						'type'            => 'range',
						'option_category' => 'layout',
						'tab_slug'        => 'general',
						'toggle_slug'     => 'dc_images',
						'sub_toggle'      => 'i_seven',
						'mobile_options'  => true,
						'validate_unit'   => true,
						'responsive'      => true,
						'default'         => '50%',
						'default_unit'    => '%',
						'range_settings'  => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
					),
	
					'src_seven_v_pos' => array(
						'label'           => esc_html__( 'Image 7 Vertical Position', 'cwp-ds' ),
						'type'            => 'range',
						'option_category' => 'layout',
						'tab_slug'        => 'general',
						'toggle_slug'     => 'dc_images',
						'sub_toggle'      => 'i_seven',
						'mobile_options'  => true,
						'validate_unit'   => true,
						'responsive'      => true,
						'default'         => '50%',
						'default_unit'    => '%',
						'range_settings'  => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
						
				  ),
					// image tab 8 field
					'st_src_eight' => array(
						'label'              => esc_html__( 'Image 8', 'cwp-ds' ),
						'type'               => 'upload',
						'option_category'    => 'basic_option',
						'default'            => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
						'upload_button_text' => esc_attr__( 'Upload an image', 'cwp-ds' ),
						'choose_text'        => esc_attr__( 'Choose an Image', 'cwp-ds' ),
						'update_text'        => esc_attr__( 'Set As Image', 'cwp-ds' ),
						'hide_metadata'      => true,
						'description'        => esc_html__( '', 'cwp-ds' ),
						'tab_slug'        => 'general',
						'toggle_slug'     => 'dc_images',
						'sub_toggle'      => 'i_eight',
					),
	
					'src_eight_h_pos' => array(
						'label'           => esc_html__( 'Image 8 Horizontal Position', 'cwp-ds' ),
						'type'            => 'range',
						'option_category' => 'layout',
						'tab_slug'        => 'general',
						'toggle_slug'     => 'dc_images',
						'sub_toggle'      => 'i_eight',
						'mobile_options'  => true,
						'validate_unit'   => true,
						'responsive'      => true,
						'default'         => '50%',
						'default_unit'    => '%',
						'range_settings'  => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
					
					),
	
					'src_eight_v_pos' => array(
						'label'           => esc_html__( 'Image 8 Vertical Position', 'cwp-ds' ),
						'type'            => 'range',
						'option_category' => 'layout',
						'tab_slug'        => 'general',
						'toggle_slug'     => 'dc_images',
						'sub_toggle'      => 'i_eight',
						'mobile_options'  => true,
						'validate_unit'   => true,
						'responsive'      => true,
						'default'         => '50%',
						'default_unit'    => '%',
						'range_settings'  => array(
							'min'  => '1',
							'max'  => '100',
							'step' => '1',
						),
							
					),
	
				'height_pc' => array(
					'label'           => esc_html__( 'Height', 'cwp-ds' ),
					'type'            => 'range',
					'option_category' => 'layout',
					'tab_slug'        => 'advanced',
					'toggle_slug'     => 'width',
					'mobile_options'  => true,
					'validate_unit'   => true,
					'default'         => '500px',
					'default_unit'    => 'px',
					'range_settings'  => array(
						'min'  => '1',
						'max'  => '1000',
						'step' => '1',
					),
					'responsive'      => true,
				),		
		);

		return $fields;
	}

	function render( $attrs, $content = null, $render_slug ) {
		$num_image                     = $this->props['num_image'];
		$two_style                     = $this->props['two_style'];
		$three_style                   = $this->props['three_style'];
		$four_style                    = $this->props['four_style'];
		$st_src_one                    = $this->props['st_src_one'];
		$st_src_two                    = $this->props['st_src_two'];
		$st_src_three                  = $this->props['st_src_three'];
		$st_src_four                   = $this->props['st_src_four'];
		$five_style                    = $this->props['five_style'];
		$six_style                     = $this->props['six_style'];
		$seven_style                   = $this->props['seven_style'];
		$eight_style                   = $this->props['eight_style'];
		$st_src_five                   = $this->props['st_src_five'];
		$st_src_six                    = $this->props['st_src_six'];
		$st_src_seven                  = $this->props['st_src_seven'];
		$st_src_eight                  = $this->props['st_src_eight'];
		$cwp_mobile_option             = $this->props['cwp_mobile_option'];
		$cwp_image_height              = $this->props['cwp_image_height'];
		$cwp_image_spacing             = $this->props['cwp_image_spacing'];
		$pc_radius  	               = $this->props['pc_radius'];
		$pc_radius_tablet  	           = $this->props['pc_radius_tablet'];
		$pc_radius_phone  	           = $this->props['pc_radius_phone'];
		$pc_radius_last_edited         = $this->props['pc_radius_last_edited'];
		$pc_radius_responsive_active   = et_pb_get_responsive_status($pc_radius_last_edited);
		$cwp_gw  	                   = $this->props['cwp_gw'];
		$cwp_gw_tablet  	           = $this->props['cwp_gw_tablet'];
		$cwp_gw_phone  	               = $this->props['cwp_gw_phone'];
		$cwp_gw_last_edited            = $this->props['cwp_gw_last_edited'];
		$cwp_gw_responsive_active      = et_pb_get_responsive_status($cwp_gw_last_edited);
        $height_pc  	                   = $this->props['height_pc'];
		$height_pc_tablet  	           = $this->props['height_pc_tablet'];
		$height_pc_phone  	               = $this->props['height_pc_phone'];
		$height_pc_last_edited            = $this->props['height_pc_last_edited'];
		$height_pc_responsive_active      = et_pb_get_responsive_status($height_pc_last_edited);
		$src_one_h_pos  	                   = $this->props['src_one_h_pos'];
		$src_one_h_pos_tablet  	           = $this->props['src_one_h_pos_tablet'];
		$src_one_h_pos_phone  	               = $this->props['src_one_h_pos_phone'];
		$src_one_h_pos_last_edited            = $this->props['src_one_h_pos_last_edited'];
		$src_one_h_pos_responsive_active      = et_pb_get_responsive_status($src_one_h_pos_last_edited);
		$src_one_v_pos  	                   = $this->props['src_one_v_pos'];
		$src_one_v_pos_tablet  	           = $this->props['src_one_v_pos_tablet'];
		$src_one_v_pos_phone  	               = $this->props['src_one_v_pos_phone'];
		$src_one_v_pos_last_edited            = $this->props['src_one_v_pos_last_edited'];
		$src_one_v_pos_responsive_active      = et_pb_get_responsive_status($src_one_v_pos_last_edited);
		$src_two_h_pos  	                   = $this->props['src_two_h_pos'];
		$src_two_h_pos_tablet  	           = $this->props['src_two_h_pos_tablet'];
		$src_two_h_pos_phone  	               = $this->props['src_two_h_pos_phone'];
		$src_two_h_pos_last_edited            = $this->props['src_two_h_pos_last_edited'];
		$src_two_h_pos_responsive_active      = et_pb_get_responsive_status($src_two_h_pos_last_edited);
		$src_two_v_pos  	                   = $this->props['src_two_v_pos'];
		$src_two_v_pos_tablet  	           = $this->props['src_two_v_pos_tablet'];
		$src_two_v_pos_phone  	               = $this->props['src_two_v_pos_phone'];
		$src_two_v_pos_last_edited            = $this->props['src_two_v_pos_last_edited'];
		$src_two_v_pos_responsive_active      = et_pb_get_responsive_status($src_two_v_pos_last_edited);
		$src_three_h_pos  	                   = $this->props['src_three_h_pos'];
		$src_three_h_pos_tablet  	           = $this->props['src_three_h_pos_tablet'];
		$src_three_h_pos_phone  	               = $this->props['src_three_h_pos_phone'];
		$src_three_h_pos_last_edited            = $this->props['src_three_h_pos_last_edited'];
		$src_three_h_pos_responsive_active      = et_pb_get_responsive_status($src_three_h_pos_last_edited);
		$src_three_v_pos  	                   = $this->props['src_three_v_pos'];
		$src_three_v_pos_tablet  	           = $this->props['src_three_v_pos_tablet'];
		$src_three_v_pos_phone  	               = $this->props['src_three_v_pos_phone'];
		$src_three_v_pos_last_edited            = $this->props['src_three_v_pos_last_edited'];
		$src_three_v_pos_responsive_active      = et_pb_get_responsive_status($src_three_v_pos_last_edited);
		$src_four_h_pos  	                   = $this->props['src_four_h_pos'];
		$src_four_h_pos_tablet  	           = $this->props['src_four_h_pos_tablet'];
		$src_four_h_pos_phone  	               = $this->props['src_four_h_pos_phone'];
		$src_four_h_pos_last_edited            = $this->props['src_four_h_pos_last_edited'];
		$src_four_h_pos_responsive_active      = et_pb_get_responsive_status($src_four_h_pos_last_edited);
		$src_four_h_pos  	                   = $this->props['src_four_h_pos'];
		$src_four_h_pos_tablet  	           = $this->props['src_four_h_pos_tablet'];
		$src_four_h_pos_phone  	               = $this->props['src_four_h_pos_phone'];
		$src_four_h_pos_last_edited            = $this->props['src_four_h_pos_last_edited'];
		$src_four_h_pos_responsive_active      = et_pb_get_responsive_status($src_four_h_pos_last_edited);
		$src_four_v_pos  	                   = $this->props['src_four_v_pos'];
		$src_four_v_pos_tablet  	           = $this->props['src_four_v_pos_tablet'];
		$src_four_v_pos_phone  	               = $this->props['src_four_v_pos_phone'];
		$src_four_v_pos_last_edited            = $this->props['src_four_v_pos_last_edited'];
		$src_four_v_pos_responsive_active      = et_pb_get_responsive_status($src_four_v_pos_last_edited);
		$src_five_h_pos  	                   = $this->props['src_five_h_pos'];
		$src_five_h_pos_tablet  	           = $this->props['src_five_h_pos_tablet'];
		$src_five_h_pos_phone  	               = $this->props['src_five_h_pos_phone'];
		$src_five_h_pos_last_edited            = $this->props['src_five_h_pos_last_edited'];
		$src_five_h_pos_responsive_active      = et_pb_get_responsive_status($src_five_h_pos_last_edited);
		$src_five_v_pos  	                   = $this->props['src_five_v_pos'];
		$src_five_v_pos_tablet  	           = $this->props['src_five_v_pos_tablet'];
		$src_five_v_pos_phone  	               = $this->props['src_five_v_pos_phone'];
		$src_five_v_pos_last_edited            = $this->props['src_five_v_pos_last_edited'];
		$src_five_v_pos_responsive_active      = et_pb_get_responsive_status($src_five_v_pos_last_edited);
		$src_six_h_pos  	                   = $this->props['src_six_h_pos'];
		$src_six_h_pos_tablet  	               = $this->props['src_six_h_pos_tablet'];
		$src_six_h_pos_phone  	               = $this->props['src_six_h_pos_phone'];
		$src_six_h_pos_last_edited             = $this->props['src_six_h_pos_last_edited'];
		$src_six_h_pos_responsive_active      = et_pb_get_responsive_status($src_six_h_pos_last_edited);
		$src_six_v_pos  	                   = $this->props['src_six_v_pos'];
		$src_six_v_pos_tablet  	               = $this->props['src_six_v_pos_tablet'];
		$src_six_v_pos_phone  	               = $this->props['src_six_v_pos_phone'];
		$src_six_v_pos_last_edited             = $this->props['src_six_v_pos_last_edited'];
		$src_six_v_pos_responsive_active       = et_pb_get_responsive_status($src_six_v_pos_last_edited);
		$src_seven_h_pos  	                   = $this->props['src_seven_h_pos'];
		$src_seven_h_pos_tablet  	           = $this->props['src_seven_h_pos_tablet'];
		$src_seven_h_pos_phone  	           = $this->props['src_seven_h_pos_phone'];
		$src_seven_h_pos_last_edited           = $this->props['src_seven_h_pos_last_edited'];
		$src_seven_h_pos_responsive_active      = et_pb_get_responsive_status($src_seven_h_pos_last_edited);
		$src_seven_v_pos  	                   = $this->props['src_seven_v_pos'];
		$src_seven_v_pos_tablet  	           = $this->props['src_seven_v_pos_tablet'];
		$src_seven_v_pos_phone  	           = $this->props['src_seven_v_pos_phone'];
		$src_seven_v_pos_last_edited           = $this->props['src_seven_v_pos_last_edited'];
		$src_seven_v_pos_responsive_active      = et_pb_get_responsive_status($src_seven_v_pos_last_edited);
		$src_eight_h_pos  	                   = $this->props['src_eight_h_pos'];
		$src_eight_h_pos_tablet  	           = $this->props['src_eight_h_pos_tablet'];
		$src_eight_h_pos_phone  	           = $this->props['src_eight_h_pos_phone'];
		$src_eight_h_pos_last_edited           = $this->props['src_eight_h_pos_last_edited'];
		$src_eight_h_pos_responsive_active      = et_pb_get_responsive_status($src_eight_h_pos_last_edited);
		$src_eight_v_pos  	                   = $this->props['src_eight_v_pos'];
		$src_eight_v_pos_tablet  	           = $this->props['src_eight_v_pos_tablet'];
		$src_eight_v_pos_phone  	           = $this->props['src_eight_v_pos_phone'];
		$src_eight_v_pos_last_edited           = $this->props['src_eight_v_pos_last_edited'];
		$src_eight_v_pos_responsive_active      = et_pb_get_responsive_status($src_eight_v_pos_last_edited);
	
	
		// Image Border Radius
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_griditem',
			'declaration' => sprintf('border-radius:%1$s;',$pc_radius),
		));
	
	if ( $pc_radius_responsive_active ) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_griditem',
			'declaration' => sprintf('border-radius:%1$s;', $pc_radius_tablet),
			'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
		));
	}

	if ($pc_radius_responsive_active) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_griditem',
			'declaration' => sprintf('border-radius:%1$s;', $pc_radius_phone),
			'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
		));
	}

	// Gutter Width
	ET_Builder_Element::set_style( $render_slug, array(
		'selector'    => '%%order_class%% .cwp_pc',
		'declaration' => sprintf('grid-gap:%1$s;',$cwp_gw),
    ));
	if ( $cwp_gw_responsive_active ) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc',
			'declaration' => sprintf('grid-gap:%1$s;', $cwp_gw_tablet),
			'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
		));
	}

	if ($cwp_gw_responsive_active) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc',
			'declaration' => sprintf('grid-gap:%1$s;', $cwp_gw_phone),
			'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
		));
	}
	// height responsive work
	
	ET_Builder_Element::set_style( $render_slug, array(
		'selector'    => '%%order_class%% .cwp_pc',
		'declaration' => sprintf('height:%1$s;',$height_pc),
    ));
	if ( $height_pc_responsive_active ) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc',
			'declaration' => sprintf('height:%1$s;', $height_pc_tablet),
			'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
		));
	}

	if ($height_pc_responsive_active) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc',
			'declaration' => sprintf('height:%1$s;', $height_pc_phone),
			'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
		));
	}
   
	// image 1 background position responsive work
	
	ET_Builder_Element::set_style( $render_slug, array(
		'selector'    => '%%order_class%% .cwp_pc_griditem_1',
		'declaration' => sprintf('background-position-x:%1$s;',$src_one_h_pos),
    ));
	if ( $src_one_h_pos_responsive_active ) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_1',
			'declaration' => sprintf('background-position-x:%1$s;', $src_one_h_pos_tablet),
			'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
		));
	}

	if ($src_one_h_pos_responsive_active) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_1',
			'declaration' => sprintf('background-position-x:%1$s;', $src_one_h_pos_phone),
			'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
		));
	}
	
	ET_Builder_Element::set_style( $render_slug, array(
		'selector'    => '%%order_class%% .cwp_pc_griditem_1',
		'declaration' => sprintf('background-position-y:%1$s;',$src_one_v_pos),
	));
	
	if ( $src_one_v_pos_responsive_active ) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_1',
			'declaration' => sprintf('background-position-y:%1$s;', $src_one_v_pos_tablet),
			'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
		));
	}

	if ($src_one_v_pos_responsive_active) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_1',
			'declaration' => sprintf('background-position-y:%1$s;', $src_one_v_pos_phone),
			'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
		));
	}
	
	// image 2 background position responsive work
	
	ET_Builder_Element::set_style( $render_slug, array(
		'selector'    => '%%order_class%% .cwp_pc_griditem_2',
		'declaration' => sprintf('background-position-x:%1$s;',$src_two_h_pos),
	));
	
	if ( $src_two_h_pos_responsive_active ) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_2',
			'declaration' => sprintf('background-position-x:%1$s;', $src_two_h_pos_tablet),
			'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
		));
	}

	if ($src_two_h_pos_responsive_active) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_2',
			'declaration' => sprintf('background-position-x:%1$s;', $src_two_h_pos_phone),
			'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
		));
	}

	ET_Builder_Element::set_style( $render_slug, array(
		'selector'    => '%%order_class%% .cwp_pc_griditem_2',
		'declaration' => sprintf('background-position-y:%1$s;',$src_two_v_pos),
	));
	
	if ( $src_two_v_pos_responsive_active ) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_2',
			'declaration' => sprintf('background-position-y:%1$s;', $src_two_v_pos_tablet),
			'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
		));
	}

	if ($src_two_v_pos_responsive_active) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_2',
			'declaration' => sprintf('background-position-y:%1$s;', $src_two_v_pos_phone),
			'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
		));
	}

	// Image 3 Background position responsive work

	ET_Builder_Element::set_style( $render_slug, array(
		'selector'    => '%%order_class%% .cwp_pc_griditem_3',
		'declaration' => sprintf('background-position-x:%1$s;',$src_three_h_pos),
	));
	
	if ( $src_three_h_pos_responsive_active ) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_3',
			'declaration' => sprintf('background-position-x:%1$s;', $src_three_h_pos_tablet),
			'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
		));
	}

	if ($src_three_h_pos_responsive_active) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_3',
			'declaration' => sprintf('background-position-x:%1$s;', $src_three_h_pos_phone),
			'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
		));
	}

	ET_Builder_Element::set_style( $render_slug, array(
		'selector'    => '%%order_class%% .cwp_pc_griditem_3',
		'declaration' => sprintf('background-position-y:%1$s;',$src_three_v_pos),
	));
		
	if ( $src_three_v_pos_responsive_active ) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_3',
			'declaration' => sprintf('background-position-y:%1$s;', $src_three_v_pos_tablet),
			'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
		));
	}
	
	if ($src_three_v_pos_responsive_active) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_3',
			'declaration' => sprintf('background-position-y:%1$s;', $src_three_v_pos_phone),
			'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
		));
	}

	//image 4 Background position responsive work

	ET_Builder_Element::set_style( $render_slug, array(
		'selector'    => '%%order_class%% .cwp_pc_griditem_4',
		'declaration' => sprintf('background-position-x:%1$s;',$src_four_h_pos),
	));
			
	if ( $src_four_h_pos_responsive_active ) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_4',
			'declaration' => sprintf('background-position-x:%1$s;', $src_four_h_pos_tablet),
			'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
		));
	}
		
	if ($src_four_h_pos_responsive_active) {
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_4',
			'declaration' => sprintf('background-position-x:%1$s;', $src_four_h_pos_phone),
			'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
		));
	}
	
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_4',
			'declaration' => sprintf('background-position-y:%1$s;',$src_four_v_pos),
		));
			
		if ( $src_four_v_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_4',
				'declaration' => sprintf('background-position-y:%1$s;', $src_four_v_pos_tablet),
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}
		
		if ( $src_four_v_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_4',
				'declaration' => sprintf('background-position-y:%1$s;', $src_four_v_pos_phone),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}
	
		// image 5 Background position responsive work

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_5',
			'declaration' => sprintf('background-position-x:%1$s;',$src_five_h_pos),
		));
			
		if ( $src_five_h_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_5',
				'declaration' => sprintf('background-position-x:%1$s;', $src_five_h_pos_tablet),
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}
		
		if ( $src_five_h_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_5',
				'declaration' => sprintf('background-position-x:%1$s;', $src_five_h_pos_phone),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_5',
			'declaration' => sprintf('background-position-y:%1$s;',$src_five_v_pos),
		));
			
		if ( $src_five_v_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_5',
				'declaration' => sprintf('background-position-y:%1$s;', $src_five_v_pos_tablet),
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}
		
		if ( $src_five_v_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_5',
				'declaration' => sprintf('background-position-y:%1$s;', $src_five_v_pos_phone),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		// image 6 Background position responsive work

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_6',
			'declaration' => sprintf('background-position-x:%1$s;',$src_six_h_pos),
		));
			
		if ( $src_six_h_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_6',
				'declaration' => sprintf('background-position-x:%1$s;', $src_six_h_pos_tablet),
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}
		
		if ( $src_six_h_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_6',
				'declaration' => sprintf('background-position-x:%1$s;', $src_six_h_pos_phone),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_6',
			'declaration' => sprintf('background-position-y:%1$s;',$src_six_v_pos),
		));
			
		if ( $src_six_v_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_6',
				'declaration' => sprintf('background-position-y:%1$s;', $src_six_v_pos_tablet),
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}
		
		if ( $src_six_v_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_6',
				'declaration' => sprintf('background-position-y:%1$s;', $src_six_v_pos_phone),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		// image 7 Background position responsive work

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_7',
			'declaration' => sprintf('background-position-x:%1$s;',$src_seven_h_pos),
		));
			
		if ( $src_seven_h_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_7',
				'declaration' => sprintf('background-position-x:%1$s;', $src_seven_h_pos_tablet),
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}
		
		if ( $src_seven_h_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_7',
				'declaration' => sprintf('background-position-x:%1$s;', $src_seven_h_pos_phone),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_7',
			'declaration' => sprintf('background-position-y:%1$s;',$src_seven_v_pos),
		));
			
		if ( $src_seven_v_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_7',
				'declaration' => sprintf('background-position-y:%1$s;', $src_seven_v_pos_tablet),
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}
		
		if ( $src_seven_v_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_7',
				'declaration' => sprintf('background-position-y:%1$s;', $src_seven_v_pos_phone),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		// image 8 Background position responsive work

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_8',
			'declaration' => sprintf('background-position-x:%1$s;',$src_eight_h_pos),
		));
			
		if ( $src_eight_h_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_8',
				'declaration' => sprintf('background-position-x:%1$s;', $src_eight_h_pos_tablet),
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}
		
		if ( $src_eight_h_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_8',
				'declaration' => sprintf('background-position-x:%1$s;', $src_eight_h_pos_phone),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_pc_griditem_8',
			'declaration' => sprintf('background-position-y:%1$s;',$src_eight_v_pos),
		));
			
		if ( $src_eight_v_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_8',
				'declaration' => sprintf('background-position-y:%1$s;', $src_eight_v_pos_tablet),
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}
		
		if ( $src_eight_v_pos_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_pc_griditem_8',
				'declaration' => sprintf('background-position-y:%1$s;', $src_eight_v_pos_phone),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		// end responsive function css
  
	    ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .display-style',
			'declaration' =>  'display: grid;',
		));

		if( 'stack' === $cwp_mobile_option ) {
			
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_stack_collage',
				'declaration' =>  'display: block;
				                   height: 100% !important;',
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));

			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_stack_collage .cwp_griditem',
				'declaration' =>  sprintf('height: %1$s;',$cwp_image_height),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));

			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_stack_collage .cwp_griditem',
				'declaration' =>  sprintf('margin-bottom: %1$s;',$cwp_image_spacing),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}
	
		// two grid style
		$grid_two_style_output = sprintf(
				'<div class="dic-grid-styles two-grid-style-%3$s display-style cwp_pc %4$s">
					 <div class="cwp_one cwp_griditem cwp_pc_griditem_1" style="background-image: url(%1$s)"></div>
					 <div class="cwp_two cwp_griditem cwp_pc_griditem_2" style="background-image: url(%2$s)"></div>
				</div>',
				$st_src_one,
				$st_src_two,
				$two_style,
				'stack' === $cwp_mobile_option ? 'cwp_stack_collage' : ''

		);

		// three grid style
		$grid_three_style_output = sprintf(
			'<div class="dic-grid-styles three-grid-style-%4$s display-style cwp_pc %5$s">
				<div class="cwp_one cwp_griditem cwp_pc_griditem_1" style="background-image: url(%1$s)"></div>
				<div class="cwp_two cwp_griditem cwp_pc_griditem_2" style="background-image: url(%2$s)"></div>
				<div class="cwp_three cwp_griditem cwp_pc_griditem_3" style="background-image: url(%3$s)"></div>
   			</div>',
			$st_src_one,
			$st_src_two,
			$st_src_three,
			$three_style,
			'stack' === $cwp_mobile_option ? 'cwp_stack_collage' : ''
		);

	    // four grid style
		$grid_four_style_output = sprintf(
			'<div class="dic-grid-styles four-grid-style-%5$s display-style cwp_pc %6$s">
			  <div class="cwp_one cwp_griditem cwp_pc_griditem_1" style="background-image: url(%1$s)"></div>
			  <div class="cwp_two cwp_griditem cwp_pc_griditem_2" style="background-image: url(%2$s)"></div>
			  <div class="cwp_three cwp_griditem cwp_pc_griditem_3" style="background-image: url(%3$s)"></div>
			  <div class="cwp_four cwp_griditem cwp_pc_griditem_4" style="background-image: url(%4$s)"></div>
		    </div>',
			$st_src_one,
			$st_src_two,
			$st_src_three,
			$st_src_four,
			$four_style,
			'stack' === $cwp_mobile_option ? 'cwp_stack_collage' : ''
		);


		 // five grid style
		 $grid_five_style_output = sprintf(
			'<div class="dic-grid-styles five-grid-style-%6$s display-style cwp_pc %7$s">
			  <div class="cwp_one cwp_griditem cwp_pc_griditem_1" style="background-image: url(%1$s)"></div>
			  <div class="cwp_two cwp_griditem cwp_pc_griditem_2" style="background-image: url(%2$s)"></div>
			  <div class="cwp_three cwp_griditem cwp_pc_griditem_3" style="background-image: url(%3$s)"></div>
			  <div class="cwp_four cwp_griditem cwp_pc_griditem_4" style="background-image: url(%4$s)"></div>
			  <div class="cwp_five cwp_griditem cwp_pc_griditem_5" style="background-image: url(%5$s)"></div>
		    </div>',
			$st_src_one,
			$st_src_two,
			$st_src_three,
			$st_src_four,
			$st_src_five,
			$five_style,
			'stack' === $cwp_mobile_option ? 'cwp_stack_collage' : ''
		);

		 // six grid style
		 $grid_six_style_output = sprintf(
			'<div class="dic-grid-styles six-grid-style-%7$s display-style cwp_pc %8$s">
			  <div class="cwp_one cwp_griditem cwp_pc_griditem_1" style="background-image: url(%1$s)"></div>
			  <div class="cwp_two cwp_griditem cwp_pc_griditem_2" style="background-image: url(%2$s)"></div>
			  <div class="cwp_three cwp_griditem cwp_pc_griditem_3" style="background-image: url(%3$s)"></div>
			  <div class="cwp_four cwp_griditem cwp_pc_griditem_4" style="background-image: url(%4$s)"></div>
			  <div class="cwp_five cwp_griditem cwp_pc_griditem_5" style="background-image: url(%5$s)"></div>
			  <div class="cwp_six cwp_griditem cwp_pc_griditem_6" style="background-image: url(%6$s)"></div>
		    </div>',
			$st_src_one,
			$st_src_two,
			$st_src_three,
			$st_src_four,
			$st_src_five,
			$st_src_six,
			$six_style,
			'stack' === $cwp_mobile_option ? 'cwp_stack_collage' : ''
		);

		 // seven grid style
		 $grid_seven_style_output = sprintf(
			'<div class="dic-grid-styles seven-grid-style-%8$s display-style cwp_pc %9$s">
			  <div class="cwp_one cwp_griditem cwp_pc_griditem_1" style="background-image: url(%1$s)"></div>
			  <div class="cwp_two cwp_griditem cwp_pc_griditem_2" style="background-image: url(%2$s)"></div>
			  <div class="cwp_three cwp_griditem cwp_pc_griditem_3" style="background-image: url(%3$s)"></div>
			  <div class="cwp_four cwp_griditem cwp_pc_griditem_4" style="background-image: url(%4$s)"></div>
			  <div class="cwp_five cwp_griditem cwp_pc_griditem_5" style="background-image: url(%5$s)"></div>
			  <div class="cwp_six cwp_griditem cwp_pc_griditem_6" style="background-image: url(%6$s)"></div>
			  <div class="cwp_seven cwp_griditem cwp_pc_griditem_7" style="background-image: url(%7$s)"></div>
		    </div>',
			$st_src_one,
			$st_src_two,
			$st_src_three,
			$st_src_four,
			$st_src_five,
			$st_src_six,
			$st_src_seven,
			$seven_style,
			'stack' === $cwp_mobile_option ? 'cwp_stack_collage' : ''
		);

		 // eight grid style
		 $grid_eight_style_output = sprintf(
			'<div class="dic-grid-styles eight-grid-style-%9$s display-style cwp_pc %10$s">
			  <div class="cwp_one cwp_griditem cwp_pc_griditem_1" style="background-image: url(%1$s)"></div>
			  <div class="cwp_two cwp_griditem cwp_pc_griditem_2" style="background-image: url(%2$s)"></div>
			  <div class="cwp_three cwp_griditem cwp_pc_griditem_3" style="background-image: url(%3$s)"></div>
			  <div class="cwp_four cwp_griditem cwp_pc_griditem_4" style="background-image: url(%4$s)"></div>
			  <div class="cwp_five cwp_griditem cwp_pc_griditem_5" style="background-image: url(%5$s)"></div>
			  <div class="cwp_six cwp_griditem cwp_pc_griditem_6" style="background-image: url(%6$s)"></div>
			  <div class="cwp_seven cwp_griditem cwp_pc_griditem_7" style="background-image: url(%7$s)"></div>
			  <div class="cwp_eight cwp_griditem cwp_pc_griditem_8" style="background-image: url(%8$s)"></div>
		    </div>',
			$st_src_one,
			$st_src_two,
			$st_src_three,
			$st_src_four,
			$st_src_five,
			$st_src_six,
			$st_src_seven,
			$st_src_eight,
			$eight_style,
			'stack' === $cwp_mobile_option ? 'cwp_stack_collage' : ''
		);


		$output = sprintf(
			'%1$s
			 %2$s
			 %3$s
			 %4$s
			 %5$s
			 %6$s
			 %7$s
			',
			'2' === $num_image   ? $grid_two_style_output : '',
			'3' === $num_image   ? $grid_three_style_output : '',
			'4' === $num_image   ? $grid_four_style_output : '',
			'5' === $num_image   ? $grid_five_style_output : '',
			'6' === $num_image   ? $grid_six_style_output : '',	
			'7' === $num_image   ? $grid_seven_style_output : '',
			'8' === $num_image   ? $grid_eight_style_output : ''
		);

		return $output;
	}
}

new cwpds__CWP_SUMO_IMAGE_COLLAGE;

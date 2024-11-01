<?php

if ( !defined('ABSPATH') ) {
	exit;
}

class cwpds__ET_ICON_DIVIDER_MODULE extends ET_Builder_Module {
	function init() {
		$this->name       = esc_html__( 'Icon Divider', 'cwp-ds' );
		$this->plural     = esc_html__( 'Icon Dividers', 'cwp-ds' );
		$this->slug       = 'et_pb_icon_divider';
		$this->vb_support = 'on';
		$this->main_css_element = '%%order_class%%';

		$this->custom_css_fields = array(
			'main_element' => array(
				'label'    => esc_html__( 'Main Element', 'cwp-ds' ),
				'no_space_before_selector' => true,
			),
		);

		$this->settings_modal_toggles = array(
			'general'  => array(
				'toggles' => array(
					'main_content' => esc_html__( 'General', 'cwp-ds' ),
					'link'         => esc_html__( 'Link', 'cwp-ds' ),
				),
			),
			'advanced' => array(
				'toggles' => array(
					'alignment'  => esc_html__( 'Alignment', 'cwp-ds' ),
					'text'       => array(
						'title'    => esc_html__( 'Text', 'cwp-ds' ),
						'priority' => 49,
					),
					'd_seprator'  => esc_html__( 'Divider', 'cwp-ds' ),
					
					'cwp_typo' => array(
						'title'    => esc_html__( 'Typography', 'cwp-ds' ),
						'tabbed_subtoggles' => true,
						'bb_icons_support' => true,
						'sub_toggles' => array(
							'title'     => array(
								'name' => 'Title',
							),
							'price'     => array(
								'name' => 'Price',
							),	
							'content'     => array(
								'name' => 'Content',
							),
						),    
					),
					'd_icon'  => esc_html__( 'Icon', 'cwp-ds' ),
				),
			),
		);

		$this->advanced_fields = array(
			'background'            => array(
				'label'    => esc_html__( 'Background Color', 'cwp-ds' ),
				'css' => array(
					 'main' => '%%order_class%% .et_pb_marketing_button',
				 ),
				 'tab_slug'        => 'advanced',
				 'toggle_slug'     => 'market_btn',
				 'use_background_video' => false,	
			 ),

			'margin_padding' => array(
				'css' => array(
					'padding' => "%%order_class%% ",
					'margin' => "%%order_class%% ",
					'important' => 'all',
				),
			),

			'borders'             => false,
			'height'              => false,
			'button'              => false,
			'text'                => false,
			'text_shadow'         => false,
			'fonts'               => false,
			'filters'             => false,
			'box_shadow'          => false,
			'link_options'        => false,
		);

		$this->help_videos = array(
			array(
				'id'   => esc_html( 'XpM2G7tQQIE' ),
				'name' => esc_html__( 'An introduction to the Button module', 'cwp-ds' ),
			),
		);
	}

	function get_fields() {
		$fields = array(
			
			'cwp_select_style' => array(
				'label'            => esc_html__( 'Style', 'cwp-ds' ),
				'type'             => 'select',
				'option_category'  => 'configuration',
				'default'          => 'simple',
				'options'          => array(
					'simple'  => esc_html__( 'Simple', 'cwp-ds' ),
					'fancy'  => esc_html__( 'Fancy', 'cwp-ds' ),
				),
				'toggle_slug'      => 'main_content',
				'description'      => esc_html__( '', 'cwp-ds' ),
			),

			'cwp_style_simple' => array(
				'label'            => esc_html__( 'Simple Style', 'cwp-ds' ),
				'type'             => 'select',
				'option_category'  => 'configuration',
				'default'          => 'solid',
				'options'          => array(
					'solid' => esc_html__( 'Solid', 'cwp-ds' ),
					'double'  => esc_html__( 'Double', 'cwp-ds' ),
					'dotted'  => esc_html__( 'Dotted', 'cwp-ds' ),
					'dashed'  => esc_html__( 'Dashed', 'cwp-ds' ),
					'groove'  => esc_html__( 'Groove', 'cwp-ds' ),
				),

				'show_if' => array(
					'cwp_select_style' => 'simple',
				),

				'toggle_slug'      => 'main_content',
				'description'      => esc_html__( '', 'cwp-ds' ),
			),

			'cwp_style_fancy' => array(
				'label'            => esc_html__( 'Fancy Style', 'cwp-ds' ),
				'type'             => 'select',
				'option_category'  => 'configuration',
				'default'          => 'curly',
				'options'          => array(
					'curly'  => esc_html__( 'Curly', 'cwp-ds' ),
					'curved'  => esc_html__( 'Curved', 'cwp-ds' ),
					'slashes'  => esc_html__( 'Slashes', 'cwp-ds' ),
					'squared'  => esc_html__( 'Squared', 'cwp-ds' ),
					'wavy'  => esc_html__( 'Wavy', 'cwp-ds' ),
					'tree'  => esc_html__( 'Tree', 'cwp-ds' ),
					'zigzag'  => esc_html__( 'Zigzag', 'cwp-ds' ),
					'rhombus'  => esc_html__( 'Rhombus', 'cwp-ds' ),
					'parallelogram'  => esc_html__( 'Parallelogram', 'cwp-ds' ),
					'x_tribal'  => esc_html__( 'X', 'cwp-ds' ),
					'zigzag_tribal'  => esc_html__( 'Zigzag 2', 'cwp-ds' ),
				),

				'show_if' => array(
					'cwp_select_style' => 'fancy',
				),

				'toggle_slug'      => 'main_content',
				'description'      => esc_html__( '', 'cwp-ds' ),
			),

		    'cwp_use_icon' => array(
				'label'           => esc_html__( 'Use Icon', 'cwp-ds' ),
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

			'divider_font_icon' => array(
				'label'               => esc_html__( 'Icon', 'cwp-ds' ),
				'type'                => 'select_icon',
				'default'             => '',
				'option_category'     => 'basic_option',
				'class'               => array( 'et-pb-font-icon' ),
				'toggle_slug'         => 'main_content',
				'description'         => esc_html__( '', 'cwp-ds' ),

				'show_if' => array(
				  'cwp_use_icon' => 'on',
				),	
			),

			'cwp_icon_align'        => array(
			    'label'       => esc_html__( 'Icon Alignment', 'cwp-ds' ),
			    'type'        => 'multiple_buttons',
			    'options'     => array(
			     'left' => array(
			      'title' => esc_html__( 'Left', 'cwp-ds' ),
			      'icon'  => 'align-left', 
			     ),
			     'center' => array(
			      'title' => esc_html__( 'Center', 'cwp-ds' ),
			      'icon'  => 'align-center', 
			     ),
			     'right'   => array(
			      'title' => esc_html__( 'Right', 'cwp-ds' ),
			      'icon'  => 'align-right', 
			     ),
			    ),
			    'default'         => 'center',
			    'toggleable'      => true,
			    'multi_selection' => false,
			    'tab_slug'        => 'advanced',
				'toggle_slug'     => 'd_icon',
				
				'show_if' => array(
					'cwp_use_icon' => 'on',
				  ),
			 ),

			'cwp_icon_size' => array(
				'label'           => esc_html__( 'Icon Size', 'cwp-ds' ),
				'type'            => 'range',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'd_icon',
				'default'         => '32px',
				'mobile_options'  => true,
				'responsive'      => true,
				'default_unit'    => 'px',
				'validate_unit'   => true,
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '120',
					'step' => '1',
				),

				'show_if' => array(
					'cwp_use_icon' => 'on',
				),
			),

			'cwp_icon_color' => array(
				'label'             => esc_html__( 'Icon Color', 'cwp-ds' ),
				'type'              => 'color-alpha',
				'description'       => esc_html__( '', 'cwp-ds' ),
				'default'           => '',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'd_icon',

				'show_if' => array(
					'cwp_use_icon' => 'on',
				),
			),

			'cwp_icon_bg_color' => array(
				'label'             => esc_html__( 'Icon Bg Color', 'cwp-ds' ),
				'type'              => 'color-alpha',
				'description'       => esc_html__( '', 'cwp-ds' ),
				'default'           => '',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'd_icon',

				'show_if' => array(
					'cwp_use_icon' => 'on',
				),
			),

			'cwp_icon_padding' => array(
				'label'           => esc_html__( 'Padding', 'cwp-ds' ),
				'type'            => 'range',
				'mobile_options'  => true,
				'responsive'      => true,
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'd_icon',
				'default'         => '20px',
				'default_unit'    => 'px',
				'validate_unit'   => true,
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '100',
					'step' => '1',
				),

				'show_if' => array(
					'cwp_use_icon' => 'on',
				),
			),

			'cwp_icon_spacing' => array(
				'label'           => esc_html__( 'Spacing', 'cwp-ds' ),
				'type'            => 'range',
				'mobile_options'  => true,
				'responsive'      => true,
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'd_icon',
				'default'         => '20px',
				'default_unit'    => 'px',
				'validate_unit'   => true,
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '100',
					'step' => '1',
				),

				'show_if' => array(
					'cwp_use_icon' => 'on',
				),
			),

			'cwp_icon_radius' => array(
				'label'           => esc_html__( 'Border Radius', 'cwp-ds' ),
				'type'            => 'range',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'd_icon',
				'default'         => '20px',
				'default_unit'    => 'px',
				'validate_unit'   => true,
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '100',
					'step' => '1',
				),

				'show_if' => array(
					'cwp_use_icon' => 'on',
				),
			),

			'cwp_d_color' => array(
				'label'             => esc_html__( 'Color', 'cwp-ds' ),
				'type'              => 'color-alpha',
				'description'       => esc_html__( '', 'cwp-ds' ),
				'default'           => '#000000',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'd_seprator',
			),

			'cwp_d_size' => array(
				'label'           => esc_html__( 'Size', 'cwp-ds' ),
				'type'            => 'range',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'd_seprator',
				'default'         => '32px',
				'mobile_options'  => true,
				'responsive'      => true,
				'default_unit'    => 'px',
				'validate_unit'   => true,
				'range_settings'  => array(
					'min'  => '1',
					'max'  => '100',
					'step' => '1',
				),

				'show_if' => array(
					'cwp_select_style' => 'fancy',
				),
			),

			'cwp_d_weight' => array(
				'label'           => esc_html__( 'Weight', 'cwp-ds' ),
				'type'            => 'range',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'd_seprator',
				'default'         => '2px',
				'default_unit'    => 'px',
				'validate_unit'   => true,
				'range_settings'  => array(
					'min'  => '1',
					'max'  => '30',
					'step' => '1',
				),

				'show_if' => array(
					'cwp_select_style' => 'simple',
				),
			),

			'cwp_icon_d_url' => array(
				'label'           => esc_html__( 'Link URL', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'toggle_slug'     => 'link',
			),
			'cwp_icon_d_url_new_window' => array(
				'label'           => esc_html__( 'Link Target', 'cwp-ds' ),
				'type'            => 'select',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'In The Same Window', 'cwp-ds' ),
					'on'  => esc_html__( 'In The New Tab', 'cwp-ds' ),
				),
				'toggle_slug'     => 'link',
				'description'     => esc_html__( '', 'cwp-ds' ),
			),
		);

		return $fields;
	}

	function render( $attrs, $content = null, $render_slug ) {
		$divider_font_icon                       = $this->props['divider_font_icon'];
		$cwp_use_icon                            = $this->props['cwp_use_icon'];
		$cwp_icon_size                           = $this->props['cwp_icon_size'];
		$cwp_icon_color                          = $this->props['cwp_icon_color'];
		$cwp_icon_bg_color                       = $this->props['cwp_icon_bg_color'];
		$cwp_icon_padding                        = $this->props['cwp_icon_padding'];
		$cwp_icon_spacing                        = $this->props['cwp_icon_spacing'];
		$cwp_icon_radius                         = $this->props['cwp_icon_radius'];
		$cwp_d_color                             = $this->props['cwp_d_color'];
		$cwp_d_weight                            = $this->props['cwp_d_weight'];
		$cwp_icon_align                          = $this->props['cwp_icon_align'];
		$cwp_select_style                        = $this->props['cwp_select_style'];
		$cwp_style_simple                        = $this->props['cwp_style_simple'];
		$cwp_style_fancy                         = $this->props['cwp_style_fancy'];
		$cwp_d_size                              = $this->props['cwp_d_size'];
		$cwp_icon_d_url                          = $this->props['cwp_icon_d_url'];
		$cwp_icon_d_url_new_window               = $this->props['cwp_icon_d_url_new_window'];
		$cwp_d_size  	                         = $this->props['cwp_d_size'];
		$cwp_d_size_tablet  	                 = $this->props['cwp_d_size_tablet'];
		$cwp_d_size_phone  	                     = $this->props['cwp_d_size_phone'];
		$cwp_d_size_last_edited                  = $this->props['cwp_d_size_last_edited'];
		$cwp_d_size_responsive_active            = et_pb_get_responsive_status($cwp_d_size_last_edited);
		$cwp_icon_size  	                     = $this->props['cwp_icon_size'];
		$cwp_icon_size_tablet  	                 = $this->props['cwp_icon_size_tablet'];
		$cwp_icon_size_phone  	                 = $this->props['cwp_icon_size_phone'];
		$cwp_icon_size_last_edited               = $this->props['cwp_icon_size_last_edited'];
		$cwp_icon_size_responsive_active         = et_pb_get_responsive_status($cwp_icon_size_last_edited);
		$cwp_icon_padding  	                     = $this->props['cwp_icon_padding'];
		$cwp_icon_padding_tablet  	             = $this->props['cwp_icon_padding_tablet'];
		$cwp_icon_padding_phone  	             = $this->props['cwp_icon_padding_phone'];
		$cwp_icon_padding_last_edited            = $this->props['cwp_icon_padding_last_edited'];
		$cwp_icon_padding_responsive_active      = et_pb_get_responsive_status($cwp_icon_padding_last_edited);


	$color = str_replace('#' , "" , $cwp_d_color);

	// Fancy Style Work
	 $svg_path = '';
			switch ($cwp_style_fancy) {
				case 'curly':
					$svg_path = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none' overflow='visible' height='100%25' viewBox='0 0 24 24' stroke='%23$color' stroke-width='1' fill='none' stroke-linecap='square' stroke-miterlimit='10'%3E%3Cpath d='M0,21c3.3,0,8.3-0.9,15.7-7.1c6.6-5.4,4.4-9.3,2.4-10.3c-3.4-1.8-7.7,1.3-7.3,8.8C11.2,20,17.1,21,24,21'/%3E%3C/svg%3E";
					break;
				case 'curved':
					$svg_path = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none' overflow='visible' height='100%25' viewBox='0 0 24 24' stroke='%23$color' stroke-width='1' fill='none' stroke-linecap='square' stroke-miterlimit='10'%3E%3Cpath d='M0,6c6,0,6,13,12,13S18,6,24,6'/%3E%3C/svg%3E";
					break;
				case 'slashes':
					$svg_path = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none' overflow='visible' height='100%25' viewBox='0 0 20 16' stroke='%23$color' stroke-width='1' fill='none' stroke-linecap='square' stroke-miterlimit='10'%3E%3Cg transform='translate(-12.000000, 0)'%3E%3Cpath d='M28,0L10,18'/%3E%3Cpath d='M18,0L0,18'/%3E%3Cpath d='M48,0L30,18'/%3E%3Cpath d='M38,0L20,18'/%3E%3C/g%3E%3C/svg%3E";
					break;
				case 'squared':
					$svg_path = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none' overflow='visible' height='100%25' viewBox='0 0 24 24' stroke='%23$color' stroke-width='1' fill='none' stroke-linecap='square' stroke-miterlimit='10'%3E%3Cpolyline points='0,6 6,6 6,18 18,18 18,6 24,6 '/%3E%3C/svg%3E";
					break;	
				case 'wavy':
					$svg_path = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none' overflow='visible' height='100%25' viewBox='0 0 24 24' stroke='%23$color' stroke-width='1' fill='none' stroke-linecap='square' stroke-miterlimit='10'%3E%3Cpath d='M0,6c6,0,0.9,11.1,6.9,11.1S18,6,24,6'/%3E%3C/svg%3E";
					break;
				case 'tree':
					$svg_path = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid meet' overflow='visible' height='100%25' viewBox='0 0 126 26' fill='%23$color' stroke='none'%3E%3Cpath d='M111.9,18.3v3.4H109v-3.4H111.9z M90.8,18.3v3.4H88v-3.4H90.8z M69.8,18.3v3.4h-2.9v-3.4H69.8z M48.8,18.3v3.4h-2.9v-3.4H48.8z M27.7,18.3v3.4h-2.9v-3.4H27.7z M6.7,18.3v3.4H3.8v-3.4H6.7z M46.4,4l4.3,4.8l-1.8,0l3.5,4.4l-2.2-0.1l3,3.3l-11,0.4l3.6-3.8l-2.9-0.1l3.1-4.2l-1.9,0L46.4,4z M111.4,4l2.4,4.8l-1.8,0l3.5,4.4l-2.5-0.1l3.3,3.3h-11l3.1-3.4l-2.5-0.1l3.1-4.2l-1.9,0L111.4,4z M89.9,4l2.9,4.8l-1.9,0l3.2,4.2l-2.5,0l3.5,3.5l-11-0.4l3-3.1l-2.4,0L88,8.8l-1.9,0L89.9,4z M68.6,4l3,4.4l-1.9,0.1l3.4,4.1l-2.7,0.1l3.8,3.7H63.8l2.9-3.6l-2.9,0.1L67,8.7l-2,0.1L68.6,4z M26.5,4l3,4.4l-1.9,0.1l3.7,4.7l-2.5-0.1l3.3,3.3H21l3.1-3.4l-2.5-0.1l3.2-4.3l-2,0.1L26.5,4z M4.9,4l3.7,4.8l-1.5,0l3.1,4.2L7.6,13l3.4,3.4H0l3-3.3l-2.3,0.1l3.5-4.4l-2.3,0L4.9,4z'/%3E%3C/svg%3E";
					break;
				case 'zigzag':
					$svg_path = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none' overflow='visible' height='100%25' viewBox='0 0 24 24' stroke='%23$color' stroke-width='1' fill='none' stroke-linecap='square' stroke-miterlimit='10'%3E%3Cpolyline points='0,18 12,6 24,18 '/%3E%3C/svg%3E";
					break;	
				case 'rhombus':
					$svg_path = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none' overflow='visible' height='100%25' viewBox='0 0 24 24' fill='%23$color' stroke='none'%3E%3Cpath d='M12.7,2.3c-0.4-0.4-1.1-0.4-1.5,0l-8,9.1c-0.3,0.4-0.3,0.9,0,1.2l8,9.1c0.4,0.4,1.1,0.4,1.5,0l8-9.1c0.3-0.4,0.3-0.9,0-1.2L12.7,2.3z'/%3E%3C/svg%3E";
					break;
				case 'parallelogram':
					$svg_path = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none' overflow='visible' height='100%25' viewBox='0 0 24 24' fill='%23$color' stroke='none'%3E%3Cpolygon points='9.4,2 24,2 14.6,21.6 0,21.6'/%3E%3C/svg%3E";
					break;
				case 'x_tribal':
					$svg_path = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid meet' overflow='visible' height='100%25' viewBox='0 0 126 26' fill='%23$color' stroke='none'%3E%3Cpath d='M10.7,6l2.5,2.6l-4,4.3l4,5.4l-2.5,1.9l-4.5-5.2l-3.9,4.2L0.7,17L4,13.1L0,8.6l2.3-1.3l3.9,3.9L10.7,6z M23.9,6.6l4.2,4.5L32,7.2l2.3,1.3l-4,4.5l3.2,3.9L32,19.1l-3.9-3.3l-4.5,4.3l-2.5-1.9l4.4-5.1l-4.2-3.9L23.9,6.6zM73.5,6L76,8.6l-4,4.3l4,5.4l-2.5,1.9l-4.5-5.2l-3.9,4.2L63.5,17l4.1-4.7L63.5,8l2.3-1.3l4.1,3.6L73.5,6z M94,6l2.5,2.6l-4,4.3l4,5.4L94,20.1l-3.9-5l-3.9,4.2L84,17l3.2-3.9L84,8.6l2.3-1.3l3.2,3.9L94,6z M106.9,6l4.5,5.1l3.9-3.9l2.3,1.3l-4,4.5l3.2,3.9l-1.6,2.1l-3.9-4.2l-4.5,5.2l-2.5-1.9l4-5.4l-4-4.3L106.9,6z M53.1,6l2.5,2.6l-4,4.3l4,4.6l-2.5,1.9l-4.5-4.5l-3.5,4.5L43.1,17l3.2-3.9l-4-4.5l2.3-1.3l3.9,3.9L53.1,6z'/%3E%3C/svg%3E";
					break;
				case 'zigzag_tribal':
					$svg_path = "data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid meet' overflow='visible' height='100%25' viewBox='0 0 120 26' fill='%23$color' stroke='none'%3E%3Cpolygon points='0,14.4 0,21 11.5,12.4 21.3,20 30.4,11.1 40.3,20 51,12.4 60.6,20 69.6,11.1 79.3,20 90.1,12.4 99.6,20 109.7,11.1 120,21 120,14.4 109.7,5 99.6,13 90.1,5 79.3,14.5 71,5.7 60.6,12.4 51,5 40.3,14.5 31.1,5 21.3,13 11.5,5 '/%3E%3C/svg%3E";
					break;
				
				default:
				   $svg_path = '';
					break;
			}


			if ( ('fancy' === $cwp_select_style) && ('off' === $cwp_use_icon && $cwp_style_fancy) ) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
					'declaration' =>  sprintf('background: url("%1$s");', $svg_path),
				));
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
					'declaration' =>  'content: "";
									   display: block;
					                   -webkit-box-flex: 1;
					                   -webkit-flex-grow: 1;
					                   -ms-flex-positive: 1;
					                   flex-grow: 1;',
				));

				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
					'declaration' => sprintf('height:%1$s;',$cwp_d_size),
				));

				if ( $cwp_d_size_responsive_active ) {
					ET_Builder_Element::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
						'declaration' => sprintf('height:%1$s;', $cwp_d_size_tablet),
						'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
					));
				}
			
				if ($cwp_d_size_responsive_active) {
					ET_Builder_Element::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
						'declaration' => sprintf('height:%1$s;', $cwp_d_size_phone),
						'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
					));
				}

				if ( 'tree' !== $cwp_style_fancy && 'x_tribal' !== $cwp_style_fancy && 'zigzag_tribal' !== $cwp_style_fancy ) {
					ET_Builder_Element::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
						'declaration' =>  'background-size: 20px 100%;',
					));
				}
			}

			if (  ('fancy' === $cwp_select_style && 'on' === $cwp_use_icon ) &&  ( $cwp_style_fancy && 'left' === $cwp_icon_align ) ) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::after',
					'declaration' =>  sprintf('background: url("%1$s");', $svg_path),
				));
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::after',
					'declaration' =>  'content: "";
									   display: block;
					                   -webkit-box-flex: 1;
					                   -webkit-flex-grow: 1;
					                   -ms-flex-positive: 1;
					                   flex-grow: 1;',
				));

				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::after',
					'declaration' => sprintf('height:%1$s;',$cwp_d_size),
				));

				if ( $cwp_d_size_responsive_active ) {
					ET_Builder_Element::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::after',
						'declaration' => sprintf('height:%1$s;', $cwp_d_size_tablet),
						'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
					));
				}
			
				if ($cwp_d_size_responsive_active) {
					ET_Builder_Element::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::after',
						'declaration' => sprintf('height:%1$s;', $cwp_d_size_phone),
						'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
					));
				}

				if ( 'tree' !== $cwp_style_fancy && 'x_tribal' !== $cwp_style_fancy && 'zigzag_tribal' !== $cwp_style_fancy ) {
					ET_Builder_Element::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::after',
						'declaration' =>  'background-size: 20px 100%;',
					));
				}
			}
	
			if ( ( 'fancy' === $cwp_select_style && 'on' === $cwp_use_icon ) && ( $cwp_style_fancy && 'center' === $cwp_icon_align) ) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before, %%order_class%% .icon_divider_wrapper .seprator_element::after',
					'declaration' =>  sprintf('background: url("%1$s");', $svg_path),
				));
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before, %%order_class%% .icon_divider_wrapper .seprator_element::after',
					'declaration' =>  'content: "";
									   display: block;
					                   -webkit-box-flex: 1;
					                   -webkit-flex-grow: 1;
					                   -ms-flex-positive: 1;
					                   flex-grow: 1;',
				));

				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before, %%order_class%% .icon_divider_wrapper .seprator_element::after',
					'declaration' => sprintf('height:%1$s;',$cwp_d_size),
				));

				if ( $cwp_d_size_responsive_active ) {
					ET_Builder_Element::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before, %%order_class%% .icon_divider_wrapper .seprator_element::after',
						'declaration' => sprintf('height:%1$s;', $cwp_d_size_tablet),
						'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
					));
				}
			
				if ($cwp_d_size_responsive_active) {
					ET_Builder_Element::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before, %%order_class%% .icon_divider_wrapper .seprator_element::after',
						'declaration' => sprintf('height:%1$s;', $cwp_d_size_phone),
						'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
					));
				}

				if ( 'tree' !== $cwp_style_fancy && 'x_tribal' !== $cwp_style_fancy && 'zigzag_tribal' !== $cwp_style_fancy ) {
					ET_Builder_Element::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before, %%order_class%% .icon_divider_wrapper .seprator_element::after',
						'declaration' =>  'background-size: 20px 100%;',
					));
				}
			}

			if ( ('fancy' === $cwp_select_style && 'on' === $cwp_use_icon ) && ($cwp_style_fancy && 'right' === $cwp_icon_align) ) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
					'declaration' =>  sprintf('background: url("%1$s");', $svg_path),
				));
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
					'declaration' =>  'content: "";
					                   display: block;
					                   -webkit-box-flex: 1;
					                   -webkit-flex-grow: 1;
					                   -ms-flex-positive: 1;
					                   flex-grow: 1;',
				));


				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
					'declaration' => sprintf('height:%1$s;',$cwp_d_size),
				));

				if ( $cwp_d_size_responsive_active ) {
					ET_Builder_Element::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
						'declaration' => sprintf('height:%1$s;', $cwp_d_size_tablet),
						'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
					));
				}
			
				if ($cwp_d_size_responsive_active) {
					ET_Builder_Element::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
						'declaration' => sprintf('height:%1$s;', $cwp_d_size_phone),
						'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
					));
				}

				if ( 'tree' !== $cwp_style_fancy && 'x_tribal' !== $cwp_style_fancy && 'zigzag_tribal' !== $cwp_style_fancy ) {
					ET_Builder_Element::set_style( $render_slug, array(
						'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
						'declaration' =>  'background-size: 20px 100%;',
					));
				}
			}

			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .icon_divider_wrapper .icon_element',
				'declaration' => sprintf('font-size:%1$s;',$cwp_icon_size),
			));

			if ( $cwp_icon_size_responsive_active ) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .icon_element',
					'declaration' => sprintf('font-size:%1$s;', $cwp_icon_size_tablet),
					'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
				));
			}
		
			if ($cwp_icon_size_responsive_active) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .icon_element',
					'declaration' => sprintf('font-size:%1$s;', $cwp_icon_size_phone),
					'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
				));
			}

		// image gap field
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .icon_divider_wrapper .icon_element',
			'declaration' => sprintf('padding:%1$s;',$cwp_icon_padding),
		));

		if ( $cwp_icon_padding_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .icon_divider_wrapper .icon_element',
				'declaration' => sprintf('padding:%1$s;', $cwp_icon_padding_tablet),
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}
	
		if ($cwp_icon_padding_responsive_active) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .icon_divider_wrapper .icon_element',
				'declaration' => sprintf('padding:%1$s;', $cwp_icon_padding_phone),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		 if ($cwp_icon_color) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .icon_divider_wrapper .icon_element',
				'declaration' =>  sprintf('color: %1$s;', $cwp_icon_color),
			));
		}

		if ($cwp_icon_bg_color) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .icon_divider_wrapper .icon_element',
				'declaration' =>  sprintf('background: %1$s;', $cwp_icon_bg_color),
			));
		}

		if ($cwp_icon_radius) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .icon_divider_wrapper .icon_element',
				'declaration' =>  sprintf('border-radius: %1$s;', $cwp_icon_radius),
			));
		}

		if ($cwp_icon_spacing) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .icon_divider_wrapper .icon_element',
				'declaration' =>  sprintf('margin-left: %1$s;', $cwp_icon_spacing),
			));
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .icon_divider_wrapper .icon_element',
				'declaration' =>  sprintf('margin-right: %1$s;', $cwp_icon_spacing),
			));
		}


		// Divider CSS styliing

		if('simple' === $cwp_select_style && 'left' === $cwp_icon_align) {
			if ($cwp_style_simple) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::after',
					'declaration' =>  sprintf('border-top-style: %1$s;', $cwp_style_simple),
				));
			}
	
			if ($cwp_d_color) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::after',
					'declaration' =>  sprintf('border-top-color: %1$s;', $cwp_d_color),
				));
			}
	
			if ($cwp_d_weight) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::after',
					'declaration' =>  sprintf('border-top-width: %1$s;', $cwp_d_weight),
				));
			}

			ET_Builder_Element::set_style( $render_slug, array(
				'selector'     => '%%order_class%% .icon_divider_wrapper .seprator_element::after',
				'declaration'  => 'content: "";
								   display: block;
								  -webkit-box-flex: 1;
								  -webkit-flex-grow: 1;
								  -ms-flex-positive: 1;
								  flex-grow: 1;',
			));
		}

		if( 'simple' === $cwp_select_style && 'center' === $cwp_icon_align) {
			if ($cwp_style_simple) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before,%%order_class%% .icon_divider_wrapper .seprator_element::after',
					'declaration' =>  sprintf('border-top-style: %1$s;', $cwp_style_simple),
				));
			}
	
			if ($cwp_d_color) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before,%%order_class%% .icon_divider_wrapper .seprator_element::after',
					'declaration' =>  sprintf('border-top-color: %1$s;', $cwp_d_color),
				));
			}
	
			if ($cwp_d_weight) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before,%%order_class%% .icon_divider_wrapper .seprator_element::after',
					'declaration' =>  sprintf('border-top-width: %1$s;', $cwp_d_weight),
				));
			}

			ET_Builder_Element::set_style( $render_slug, array(
				'selector'     => '%%order_class%% .icon_divider_wrapper .seprator_element::before,%%order_class%% .icon_divider_wrapper .seprator_element::after',
				'declaration'  => 'content: "";
								   display: block;
								  -webkit-box-flex: 1;
								  -webkit-flex-grow: 1;
								  -ms-flex-positive: 1;
								  flex-grow: 1;',
			));

		}

		if( 'simple' === $cwp_select_style && 'right' === $cwp_icon_align) {
			if ($cwp_style_simple) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
					'declaration' =>  sprintf('border-top-style: %1$s;', $cwp_style_simple),
				));
			}
	
			if ($cwp_d_color) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
					'declaration' =>  sprintf('border-top-color: %1$s;', $cwp_d_color),
				));
			}
	
			if ($cwp_d_weight) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
					'declaration' =>  sprintf('border-top-width: %1$s;', $cwp_d_weight),
				));
			}

			ET_Builder_Element::set_style( $render_slug, array(
				'selector'     => '%%order_class%% .icon_divider_wrapper .seprator_element::before',
				'declaration'  => 'content: "";
								   display: block;
								  -webkit-box-flex: 1;
								  -webkit-flex-grow: 1;
								  -ms-flex-positive: 1;
								  flex-grow: 1;',
			));
		}
		
		//divider center functionality 
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'     => '%%order_class%% .icon_divider_wrapper .seprator_element',
			'declaration'  => 'display: -webkit-box;
			                   display: -webkit-flex;
			                   display: -ms-flexbox;
			                   display: flex;
			                   direction: ltr;
			                   align-items: center;',
		));

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%%  .icon_divider_wrapper .icon_element',
			'declaration' =>  'display: inline-block;
								-webkit-box-sizing: border-box;
								-moz-box-sizing: border-box;
								box-sizing: border-box;
								font-family: ETmodules;
								font-weight: 400;
								font-style: normal;
								font-variant: normal;
								-webkit-font-smoothing: antialiased;
								line-height: 1;
								text-transform: none;
								content: attr(data-icon);
								speak: none;',
			));
		
		 // Render module output
		 $output = sprintf(
			'%2$s
			<div class="icon_divider_wrapper">
				 <div class="seprator_element">
				   %1$s
				 </div>
			</div>
			%3$s',
			'on' === $cwp_use_icon ? sprintf('<div class="icon_element">%1$s</div>',esc_attr( et_pb_process_font_icon( $divider_font_icon )) ) : '',
			'' !== $cwp_icon_d_url ? sprintf('<a href="%1$s" %2$s>', $cwp_icon_d_url, 'on' === $cwp_icon_d_url_new_window ? 'target="_blank" ' : '') : '',
			'' !== $cwp_icon_d_url ? '</a>' : ''
        ); 

		return $output;
	}
}

new cwpds__ET_ICON_DIVIDER_MODULE;

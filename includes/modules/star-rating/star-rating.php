<?php

if ( !defined('ABSPATH') ) {
	exit;
}

class cwpds__ET_STAR_RATING_MODULE extends ET_Builder_Module {
	function init() {
		$this->name       = esc_html__( 'Star Rating', 'cwp-ds' );
		$this->plural     = esc_html__( 'Star Ratings', 'cwp-ds' );
		$this->slug       = 'et_pb_star_rating';
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
					'star_rating'  => esc_html__( 'Star Rating', 'cwp-ds' ),
				),
			),
		);

		$this->advanced_fields = array(
			'fonts'                 => array(
				'before_text' => array(
					'label'    => esc_html__( 'Before Label', 'cwp-ds' ),
					'css'      => array(
						'main' => " %%order_class%% "),
					
					'tab_slug'        => 'advanced',
					'toggle_slug'     => 'star_rating',
					'priority' => 50,	
				),
			),
			
			'background'            => array(
				'label'    => esc_html__( 'Background Color', 'cwp-ds' ),
				'css' => array(
					 'main' => '%%order_class%%',
				 ),
				 'tab_slug'        => 'advanced',
				 'toggle_slug'     => 'star-rating',
				 'use_background_video' => false,	
			 ),

			'margin_padding' => array(
				'css' => array(
					'padding' => "%%order_class%%",
					'margin' => "%%order_class%% ",
					'important' => 'all',
				),
			),
			
			'borders'               => false,
			'max_width'             => false,
			'height'                => false,
			'link_options'          => false,
			'button'                => false,
			'text'                  => false,
			'text_shadow'           => false,
			'box_shadow'            => false,
			'filters'               => false,
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

			'star_before_text' => array(
				'label'            => esc_html__( 'Before Label', 'cwp-ds' ),
				'type'             => 'text',
				'option_category'  => 'basic_option',
				'description'      => esc_html__( '', 'cwp-ds' ),
				'toggle_slug'      => 'main_content',	
			),

			'star_font_icon' => array(
				'label'               => esc_html__( 'Select Star Icon', 'cwp-ds' ),
				'type'                => 'select_icon',
				'default'             => '',
				'option_category'     => 'basic_option',
				'class'               => array( 'et-pb-font-icon' ),
				'description'         => esc_html__( '', 'cwp-ds' ),
				'tab_slug'            => 'general',
				'toggle_slug'         => 'main_content',	
			),

			'star_rating' => array(
				'label'           => esc_html__( 'Rating', 'cwp-ds' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'default'         => '2',
				'unitless'        => true,
				'allow_empty'     => true,
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '5',
					'step' => '1',
				),
				'responsive'      => true,
			),

			'star_text_gap' => array(
				'label'           => esc_html__( 'Text Gap', 'cwp-ds' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'star_rating',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'default'         => '5px',
				'default_unit'    => 'px',
				'allow_empty'     => true,
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '50',
					'step' => '1',
				),
				'responsive'      => true,
			),

			'unmarked_star_color' => array(
				'label'             => esc_html__( 'Unmarked Star Color', 'cwp-ds' ),
				'type'              => 'color-alpha',
				'description'       => esc_html__( '', 'cwp-ds' ),
				'default'           => '#dddddd',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'star_rating',
			),

			'marked_star_color' => array(
				'label'             => esc_html__( 'Marked Star Color', 'cwp-ds' ),
				'type'              => 'color-alpha',
				'description'       => esc_html__( '', 'cwp-ds' ),
				'default'           => '#ffb900',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'star_rating',
			),

			'star_font_size' => array(
				'label'           => esc_html__( 'Star Icon Size', 'cwp-ds' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'star_rating',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'default'         => '32px',
				'default_unit'    => 'px',
				'allow_empty'     => true,
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '120',
					'step' => '1',
				),
				'responsive'      => true,
			),

			'star_alignment'        => array(
			    'label'       => esc_html__( 'Horizontal Alignment', 'cwp-ds'),
			    'type'        => 'multiple_buttons',
			    'options'     => array(
			     'left' => array(
			      'title' => esc_html__( 'Left', 'cwp-ds'),
			      'icon'  => 'align-left', 
			     ),
			     'center' => array(
			      'title' => esc_html__( 'Center', 'cwp-ds'),
			      'icon'  => 'align-center', 
			     ),
			     'right'   => array(
			      'title' => esc_html__( 'Right', 'cwp-ds'),
			      'icon'  => 'align-right', 
			     ),
			    ),
			    'default'         => 'left',
			    'toggleable'      => true,
			    'multi_selection' => false,
			    'tab_slug'        => 'advanced',
			    'toggle_slug'     => 'alignment',
			),


			'star_vertical_align'        => array(
			    'label'       => esc_html__( 'Vertical Alignment', 'cwp-ds'),
			    'type'        => 'multiple_buttons',
			    'options'     => array(
			     'top' => array(
				  'title' => esc_html__( 'Top', 'cwp-ds'),
			      'icon'  => 'align-left', 
			     ),
			     'center' => array(
			      'title' => esc_html__( 'Center', 'cwp-ds'),
			      'icon'  => 'align-center', 
			     ),
			     'bottom'   => array(
			      'title' => esc_html__( 'Bottom', 'cwp-ds'),
			      'icon'  => 'align-right', 
			     ),
			    ),
			    'default'         => 'center',
			    'toggleable'      => true,
			    'multi_selection' => false,
			    'tab_slug'        => 'advanced',
			    'toggle_slug'     => 'alignment',
			),
		);

		return $fields;
	}

	function render( $attrs, $content = null, $render_slug ) {
		$star_before_text                      = $this->props['star_before_text'];
		$star_rating                           = $this->props['star_rating'];
		$star_text_gap                         = $this->props['star_text_gap'];
		$unmarked_star_color                   = $this->props['unmarked_star_color'];
		$marked_star_color                     = $this->props['marked_star_color'];
		$star_font_size                        = $this->props['star_font_size'];
		$star_font_icon                        = $this->props['star_font_icon'];
		$star_alignment                        = $this->props['star_alignment'];
		$star_vertical_align                   = $this->props['star_vertical_align'];
		$star_font_size  	                   = $this->props['star_font_size'];
		$star_font_size_tablet  	           = $this->props['star_font_size_tablet'];
		$star_font_size_phone  	               = $this->props['star_font_size_phone'];
		$star_font_size_last_edited            = $this->props['star_font_size_last_edited'];
		$star_font_size_responsive_active      = et_pb_get_responsive_status($star_font_size_last_edited);

		
		//custom advanced field work
		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .star_icon_wrapper .star-icon',
			'declaration' => sprintf('font-size:%1$s;',$star_font_size),
		));

		if ( $star_font_size_responsive_active ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .star_icon_wrapper .star-icon',
				'declaration' => sprintf('font-size:%1$s;', $star_font_size_tablet),
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}
	
		if ($star_font_size_responsive_active) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .star_icon_wrapper .star-icon',
				'declaration' => sprintf('font-size:%1$s;', $star_font_size_phone),
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		//text Horizontal alignment
        $alignment_value = '';
		switch ($star_alignment) {
			case 'left':
			    $alignment_value = 'left;';
				break;
			case 'center':
			     $alignment_value = 'center';
				break;
			case 'right':
			      $alignment_value = 'right';
				break;
			
			default:
			    $alignment_value = '';
				break;
		}

		if ($star_alignment) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .star_rating_module_wrapper',
				'declaration' =>  sprintf('-webkit-box-pack:%1$s;
				                           -ms-flex-pack: %1$s;
					                      justify-content:%1$s;', $alignment_value),
			));
		}

		// text Vertical alignment
		$vertical_align_value = '';
			switch ($star_vertical_align) {
				case 'top':
					$vertical_align_value = 'flex-start';
					break;
				case 'center':
					 $vertical_align_value = 'center';
					break;
				case 'bottom':
					  $vertical_align_value = 'flex-end';
					break;
				
				default:
					$vertical_align_value = '';
					break;
			}
	
			if ($star_vertical_align) {
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .star_rating_module_wrapper',
					'declaration' => 'display: -webkit-box;
					                  display: -ms-flexbox;
					                  display: flex;',
				));
				
				ET_Builder_Element::set_style( $render_slug, array(
					'selector'    => '%%order_class%% .rating_before_text',
					'declaration' =>  sprintf('align-self: %1$s;', $vertical_align_value),
				));
			}

		if ( $star_text_gap) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .rating_before_text',
				'declaration' =>  sprintf('margin-right: %1$s;', $star_text_gap),
			) );
		}

		if ( $unmarked_star_color) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .star_icon_wrapper .star-icon',
				'declaration' =>  sprintf('color: %1$s;', $unmarked_star_color),
			));
		}

		if ( $marked_star_color) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => "%%order_class%% .star_icon_wrapper .star-icon:nth-child(-n+$star_rating)",
				'declaration' =>  sprintf('color: %1$s;', $marked_star_color),
			));
		}

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .star_icon_wrapper .star-icon',
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
			speak: none;',
		 ));

		 ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .rating_before_text, %%order_class%% .star_icon_wrapper',
			'declaration' =>  'display: inline-block;',
		 ));

		 // Render module output
		 $output = sprintf(
            '<div class="star_rating_module_wrapper">
			  <div class="rating_before_text">%1$s</div>
			 <div class="star_icon_wrapper">
			   <div class="star-icon">%2$s</div>
			   <div class="star-icon">%2$s</div>
			   <div class="star-icon">%2$s</div>
			   <div class="star-icon">%2$s</div>
			   <div class="star-icon">%2$s</div>
			 </div>
            </div>',
			$star_before_text,
			esc_attr( et_pb_process_font_icon($star_font_icon))
        );

		return $output;
	}	
}

new cwpds__ET_STAR_RATING_MODULE;

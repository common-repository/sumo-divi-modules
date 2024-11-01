<?php

if ( !defined('ABSPATH') ) {
	exit;
}

class cwpds__ET_Builder_Module_Scroll_Image extends ET_Builder_Module {

	public $slug       = 'cwp_et_pb_scroll_image';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'http://demo.cakewp.com/scrollable-image/',
		'author'     => 'CakeWP',
		'author_uri' => 'http://www.cakewp.com',
	);

	public function init() {
		$this->name = esc_html__( 'Scrollable Image', 'cwp-ds' );

		$this->settings_modal_toggles = array(
			'general'  => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Image', 'cwp-ds' ),
					'link'         => esc_html__( 'Link', 'cwp-ds' ),
				),
			),
			'advanced' => array(
				'toggles' => array(
					'speed'    => esc_html__( 'Speed', 'cwp-ds' ),
					'overlay'    => esc_html__( 'Overlay', 'cwp-ds' ),
					'width'      => array(
						'title'    => esc_html__( 'Sizing', 'cwp-ds' ),
						'priority' => 65,
					),
				),
			),
			'custom_css' => array(
				'toggles' => array(
					'animation' => array(
						'title'    => esc_html__( 'Animation', 'cwp-ds' ),
						'priority' => 90,
					),
					'attributes' => array(
						'title'    => esc_html__( 'Attributes', 'cwp-ds' ),
						'priority' => 95,
					),
				),
			),
		);

		$this->advanced_fields = array(
			'border'                => array(
               'css' => array(
						'main' => array(
							'border_radii'  => "%%order_class%% .cwp_scroll_image",
							'border_styles' => "%%order_class%% .cwp_scroll_image",
						),
					),
			),

			'custom_margin_padding' => array(
				'use_padding' => false,
				'css' => array(
					'important' => 'all',
				),
			),

			'max_width'             => array(
				'options' => array(
					'max_width' => array(
						
					),
				),
			),

			'text'      => false,
			'fonts'     => false,
			'height'    => false,
			'link_option_url' => false,
			'link_option_url_new_window' => false,
		);

	}

	public function get_fields() {
		// List of animation options
		$animation_options_list = array(
			'left'    => esc_html__( 'Left To Right', 'cwp-ds' ),
			'right'   => esc_html__( 'Right To Left', 'cwp-ds' ),
			'top'     => esc_html__( 'Top To Bottom', 'cwp-ds' ),
			'bottom'  => esc_html__( 'Bottom To Top', 'cwp-ds' ),
			'fade_in' => esc_html__( 'Fade In', 'cwp-ds' ),
			'off'     => esc_html__( 'No Animation', 'cwp-ds' ),
		);

		$animation_option_name       = sprintf( '%1$s-animation', $this->slug );
		$default_animation_direction = ET_Global_Settings::get_value( $animation_option_name );

		// If user modifies default animation option via Customizer, we'll need to change the order
		if ( 'left' !== $default_animation_direction && ! empty( $default_animation_direction ) && array_key_exists( $default_animation_direction, $animation_options_list ) ) {
			// The options, sans user's preferred direction
			$animation_options_wo_default = $animation_options_list;
			unset( $animation_options_wo_default[ $default_animation_direction ] );

			// All animation options
			$animation_options = array_merge(
				array( $default_animation_direction => $animation_options_list[$default_animation_direction] ),
				$animation_options_wo_default
			);
		} else {
			// Simply copy the animation options
			$animation_options = $animation_options_list;
		}

		$fields = array(
			'src' => array(
				'label'              => esc_html__( 'Image URL', 'cwp-ds' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'cwp-ds' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'cwp-ds' ),
				'update_text'        => esc_attr__( 'Set As Image', 'cwp-ds' ),
				'default'			 => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
				'description'        => esc_html__( '', 'cwp-ds' ),
				'toggle_slug'        => 'main_content',
			),
			'alt' => array(
				'label'           => esc_html__( 'Image Alternative Text', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'attributes',
			),
			'title_text' => array(
				'label'           => esc_html__( 'Image Title Text', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'attributes',
			),
		
			'height' => array(
				'label'           => esc_html__( 'Height', 'cwp-ds' ),
				'type'            => 'range',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'width',
				'default'         => '400px',
				'default_unit'    => 'px',
				'range_settings'  => array(
					'min'  => '10',
					'max'  => '1000',
					'step' => '1',
				),
			),

			'scroll_speed' => array(
				'label'           => esc_html__( 'Hover Scroll Speed', 'cwp-ds' ),
				'type'            => 'range',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'speed',
				'default'         => '5s',
				'default_unit'    => 's',
				'range_settings'  => array(
					'min'  => '.1',
					'max'  => '10',
					'step' => '.1',
				),
			),

		);

		return $fields;
	}

	public function render( $attrs, $content = null, $render_slug ) {
		$src                     = $this->props['src'];
		$alt                     = $this->props['alt'];
		$title_text              = $this->props['title_text'];
		$max_width               = $this->props['max_width'];
		$max_width_tablet        = $this->props['max_width_tablet'];
		$max_width_phone         = $this->props['max_width_phone'];
		$max_width_last_edited   = $this->props['max_width_last_edited'];
		$scroll_speed             = $this->props['scroll_speed'];
		$height                   = $this->props['height'];


		if ($src) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_scroll_image',
				'declaration' => 'transition: background-position 1.5s ease-out 0.5s;
				 background-position: top center;background-repeat: no-repeat; background-size:cover;',
			));

			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_scroll_image:hover',
				'declaration' => sprintf('background-position:bottom center!important;
                 transition: background-position %1$s linear 0s;', $scroll_speed),
			));
		}

          if ( $height ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_scroll_image',
				'declaration' =>  sprintf('height: %1$s;', $height),
			) );
		}

		$output = sprintf(
			'style="background-image: url(%1$s)"',
			esc_url( $src )
			
		);

		$output = sprintf(
			'<div class="cwp_scroll_image" %1$s>
			
			</div>',
			$output	

		);

		return $output;

	}
}

new cwpds__ET_Builder_Module_Scroll_Image;

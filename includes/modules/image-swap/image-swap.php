<?php

if ( !defined('ABSPATH') ) {
	exit;
}

class cwpds__ET_Builder_Module_Image_swap extends ET_Builder_Module {
	function init() {
		$this->name       = esc_html__( 'Image Swap', 'cwp-ds' );
		$this->slug       = 'et_pb_image_swap';
		$this->vb_support = 'on';

		$this->settings_modal_toggles = array(
			'general'  => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Images', 'cwp-ds' ),
					'g-general'         => esc_html__( 'Effect', 'cwp-ds' ),
					'link'         => esc_html__( 'Link', 'cwp-ds' ),
				),
			),
			'advanced' => array(
				'toggles' => array(
					'overlay'    => esc_html__( 'Overlay', 'cwp-ds' ),
					'alignment'  => esc_html__( 'Alignment', 'cwp-ds' ),
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
			'margin_padding' => array(
				'css' => array(
					'important' => array( 'custom_margin' ),
				),
			),
			'borders'               => array(
				'default' => array(
					'css' => array(
						'main' => array(
							'border_radii'  => "%%order_class%%",
							'border_styles' => "%%order_class%%",
						),
					),
				),
			),
			'box_shadow'            => array(
				'default' => array(
					'css' => array(
						'main'         => '%%order_class%%',
						'custom_style' => true,
					),
				),
			),
			'max_width'             => array(
				'options' => array(
					'max_width' => array(
						'depends_show_if' => 'off',
					),
				),
			),
			'fonts'                 => false,
			'text'                  => false,
			'button'                => false,
		);

		$this->help_videos = array(
			array(
				'id'   => esc_html( 'cYwqxoHnjNA' ),
				'name' => esc_html__( 'An introduction to the Image module', 'cwp-ds' ),
			),
		);
	}

	function get_fields() {
		$fields = array(
			'src' => array(
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'cwp-ds' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'cwp-ds' ),
				'update_text'        => esc_attr__( 'Set As Image', 'cwp-ds' ),
				'hide_metadata'      => true,
				'affects'            => array(
					'alt',
					'title_text',
				),
				'default'			 => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
				'description'        => esc_html__( '', 'cwp-ds' ),
				'toggle_slug'        => 'main_content',
			),

			'src_two' => array(
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload Hover Image', 'cwp-ds' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'cwp-ds' ),
				'update_text'        => esc_attr__( 'Set As Image', 'cwp-ds' ),
				'default'            => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTA4MCIgaGVpZ2h0PSI1NDAiIHZpZXdCb3g9IjAgMCAxMDgwIDU0MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZmlsbD0iI0VCRUJFQiIgZD0iTTAgMGgxMDgwdjU0MEgweiIvPgogICAgICAgIDxwYXRoIGQ9Ik00NDUuNjQ5IDU0MGgtOTguOTk1TDE0NC42NDkgMzM3Ljk5NSAwIDQ4Mi42NDR2LTk4Ljk5NWwxMTYuMzY1LTExNi4zNjVjMTUuNjItMTUuNjIgNDAuOTQ3LTE1LjYyIDU2LjU2OCAwTDQ0NS42NSA1NDB6IiBmaWxsLW9wYWNpdHk9Ii4xIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgICAgICA8Y2lyY2xlIGZpbGwtb3BhY2l0eT0iLjA1IiBmaWxsPSIjMDAwIiBjeD0iMzMxIiBjeT0iMTQ4IiByPSI3MCIvPgogICAgICAgIDxwYXRoIGQ9Ik0xMDgwIDM3OXYxMTMuMTM3TDcyOC4xNjIgMTQwLjMgMzI4LjQ2MiA1NDBIMjE1LjMyNEw2OTkuODc4IDU1LjQ0NmMxNS42Mi0xNS42MiA0MC45NDgtMTUuNjIgNTYuNTY4IDBMMTA4MCAzNzl6IiBmaWxsLW9wYWNpdHk9Ii4yIiBmaWxsPSIjMDAwIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz4KICAgIDwvZz4KPC9zdmc+Cg==',
				'hide_metadata'      => true,
				'affects'            => array(
					'alt',
					'title_text',
				),
				'description'        => esc_html__( '', 'cwp-ds' ),
				'toggle_slug'        => 'main_content',
			),

			'image_effect' => array(
				'label'             => esc_html__( 'Image Swap', 'cwp-ds' ),
				'type'              => 'select',
				'option_category'   => 'configuration',
				'default'           => 'bottom',
				'options'           => array(
					'fade' => esc_html__( 'Fade', 'cwp-ds' ),
					'top'  => esc_html__( 'Top', 'cwp-ds' ),
					'bottom'  => esc_html__( 'Bottom', 'cwp-ds' ),
					'left'  => esc_html__( 'Left', 'cwp-ds' ),
					'right'  => esc_html__( 'Right', 'cwp-ds' ),
				),
				'toggle_slug'       => 'g-general',
				'description'       => esc_html__( '', 'cwp-ds' ),
			),
			'alt' => array(
				'label'           => esc_html__( 'Image Alternative Text', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'depends_show_if' => 'on',
				'depends_on'      => array(
					'src',
				),
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'attributes',
			),
			'title_text' => array(
				'label'           => esc_html__( 'Image Title Text', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'depends_show_if' => 'on',
				'depends_on'      => array(
					'src',
				),
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'attributes',
			),
		
			'align' => array(
				'label'           => esc_html__( 'Image Alignment', 'cwp-ds' ),
				'type'            => 'text_align',
				'option_category' => 'layout',
				'options'         => et_builder_get_text_orientation_options( array( 'justified' ) ),
				'default_on_front' => 'left',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'alignment',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'options_icon'    => 'module_align',
			),
			'force_fullwidth' => array(
				'label'             => esc_html__( 'Force Fullwidth', 'cwp-ds' ),
				'type'              => 'yes_no_button',
				'option_category'   => 'layout',
				'options'           => array(
					'off' => esc_html__( 'No', 'cwp-ds' ),
					'on'  => esc_html__( 'Yes', 'cwp-ds' ),
				),
				'default_on_front' => 'off',
				'tab_slug'    => 'advanced',
				'toggle_slug' => 'width',
				'affects' => array(
					'max_width',
				),
			),
			'always_center_on_mobile' => array(
				'label'             => esc_html__( 'Always Center Image On Mobile', 'cwp-ds' ),
				'type'              => 'yes_no_button',
				'option_category'   => 'layout',
				'options'           => array(
					'on'  => esc_html__( 'Yes', 'cwp-ds' ),
					'off' => esc_html__( 'No', 'cwp-ds' ),
				),
				'default_on_front' => 'on',
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'alignment',
			),

			'swap_speed' => array(
				'label'           => esc_html__( 'Speed', 'cwp-ds' ),
				'type'            => 'range',
				'tab_slug'        => 'general',
				'toggle_slug'     => 'g-general',
				'default'         => '1s',
				'default_unit'    => 's',
				'validate_unit'   => true,
				'range_settings'  => array(
					'min'  => '.1',
					'max'  => '10',
					'step' => '.1',
				),
			),

		);

		return $fields;
	}

	public function get_alignment() {
		$alignment = isset( $this->props['align'] ) ? $this->props['align'] : '';

		return et_pb_get_alignment( $alignment );
	}

	function render( $attrs, $content = null, $render_slug ) {
		$src                     = $this->props['src'];
		$image_effect            = $this->props['image_effect'];
		$src_two                 = $this->props['src_two'];
		$alt                     = $this->props['alt'];
		$title_text              = $this->props['title_text'];
		$align                   = $this->get_alignment();
		$force_fullwidth         = $this->props['force_fullwidth'];
		$always_center_on_mobile = $this->props['always_center_on_mobile'];
		$animation_style         = $this->props['animation_style'];
		$swap_speed              = $this->props['swap_speed'];
		$video_background          = $this->video_background();
		$parallax_image_background = $this->get_parallax_image_background();

		// Handle svg image behaviour
		$src_pathinfo = pathinfo( $src );
		$is_src_svg = isset( $src_pathinfo['extension'] ) ? 'svg' === $src_pathinfo['extension'] : false;



		if ( 'on' === $force_fullwidth ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%%',
				'declaration' => 'max-width: 100% !important;',
			) );

			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .et_pb_image_wrap, %%order_class%% img',
				'declaration' => 'width: 100%;',
			) );
		}

	
		if ( $swap_speed ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .cwp_swap_fade, %%order_class%% .cwp_swap_top,
				 %%order_class%% .cwp_swap_bottom,%%order_class%% .cwp_swap_left,
				 %%order_class%% .cwp_swap_right',
				'declaration' =>  sprintf(
					'transition-duration: %1$s;
					-webkit-transition-duration: %1$s;
					-o-transition-duration: %1$s;',
					 $swap_speed),
			) );
		}

		if ( ! $this->_is_field_default( 'align', $align ) ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%%',
				'declaration' => sprintf(
					'text-align: %1$s;',
					esc_html( $align )
				),
			) );
		}

		if ( 'center' !== $align ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%%',
				'declaration' => sprintf(
					'margin-%1$s: 0;',
					esc_html( $align )
				),
			) );
		}

		// Set display block for svg image to avoid disappearing svg image
		if ( $is_src_svg ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .et_pb_image_wrap',
				'declaration' => 'display: block;',
			) );
		}

		$output = sprintf(
			'<span class="et_pb_image_wrap"><img src="%1$s" alt="%2$s"/></span>',
			esc_attr( $src ),
			esc_attr( $alt )	
		);

		$swap_image = sprintf(
			 '<span class="swap_image cwp_swap_%3$s"><img src="%1$s" alt="%2$s"/></span>',
			esc_attr($src_two),
			esc_attr( $alt ),
			$image_effect
		);

		
		// Module classnames
		if ( ! in_array( $animation_style, array( '', 'none' ) ) ) {
			$this->add_classname( 'et-waypoint' );
		}

		if ( 'on' === $always_center_on_mobile ) {
			$this->add_classname( 'et_always_center_on_mobile' );
		}

		$output = sprintf(
			'<div class="Image_swap_container">
				%1$s
				%2$s
			</div>',
			$output,
			$swap_image
		);

		return $output;
	}
}

// This adds the upload label for Image module
// TODO: Remove when BB is removed.
function _et_bb_module_image_add_src_label_swap( $filed ) {
	if ( ! isset( $filed['label'] ) ) {
		$filed['label'] = esc_html__( 'Image URL', 'et_builder' );
	}

	return $filed;
}

add_filter( 'et_builder_module_fields_et_pb_image_field_src', '_et_bb_module_image_add_src_label_swap' );

new cwpds__ET_Builder_Module_Image_swap;

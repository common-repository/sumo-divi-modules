<?php

if ( !defined('ABSPATH') ) {
	exit;
}

class  cwpds__Dual_Module_Button extends ET_Builder_Module
{

	public $slug       = 'et_pb_dual_button';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => '',
		'author_uri' => '',
	);

	public function init()
	{
		$this->name = esc_html__('Dual Button', 'cwp-ds');
		$this->settings_modal_toggles = array(
			'general'  => array(
				'toggles' => array(
					'main_content'      => esc_html__('General', 'cwp-ds'),
					'link'      => esc_html__('Link', 'cwp-ds'),
					'background'      => esc_html__('Background', 'cwp-ds'),

				),
			),
			'advanced' => array(
				'toggles' => array(
					'dual_typo' => array(
						'title'    => esc_html__('Typography', 'cwp-ds'),
						'tabbed_subtoggles' => true,
						'bb_icons_support' => true,
						'sub_toggles' => array(
							'dual_btn_one'     => array(
								'name' => 'Button 1',
							),
							'dual_btn_two'     => array(
								'name' => 'Button 2',
							),
						),
					),

					'alignment' => esc_html__('Alignment', 'cwp-ds'),
					'button_icon' => esc_html__('Button Icon', 'cwp-ds'),
					'dual_connector' => esc_html__('Connector', 'cwp-ds'),
				),
			),
		);

		$this->advanced_fields = array(

			'fonts'  => array(
				'button_one'   => array(
					'label'    => esc_html__('Button 1', 'cwp-ds'),
					'css'      => array(
						'main'  => "%%order_class%% .dual_button_one .cwp_dual_button .btn-text,%%order_class%% .dual_button_two .cwp_dual_button .btn-text",
					),

					'font_size' => array(
						'default' => '20px',
					),
					'text_color' => array(
						'default' => '#ffffff',
					),

					'tab_slug'        => 'advanced',
					'toggle_slug'     => 'dual_typo',
					'sub_toggle'      => 'dual_btn_one',
				),

				'button_two'   => array(
					'label'    => esc_html__('Button 2', 'cwp-ds'),
					'css'      => array(
						'main'  => "%%order_class%% .dual_button_two .cwp_dual_button .btn-text",
						'important' => 'all',
					),

					'font_size' => array(
						'default' => '20px',
					),
					'text_color' => array(
						'default' => '#ffffff',
					),
					'tab_slug'        => 'advanced',
					'toggle_slug'     => 'dual_typo',
					'sub_toggle'      => 'dual_btn_two',
				),
			),

			'margin_padding' => array(
				'css' => array(
					'important' => 'all',
					'main' => '%%order_class%% .dual_button_one .cwp_dual_button, %%order_class%% .dual_button_two .cwp_dual_button',
				),

				'custom_padding' => array(
					'default' => '15px|30px|15px|30px',
				),
			),

			'borders' => array(
				'default' => array(
					'label_prefix'    => esc_html__('Button 1', 'cwp-ds'),
					'css'             => array(
						'main' => array(
							'border_radii'  =>  "%%order_class%% .dual_button_wrapper .dual_button_one .cwp_dual_button",
							'border_styles' =>  "%%order_class%% .dual_button_wrapper .dual_button_one .cwp_dual_button",
						),
					),
				),

				'button_two'   => array(
					'css'             => array(
						'main' => array(
							'border_radii' => "%%order_class%% .dual_button_wrapper .dual_button_two .cwp_dual_button",
							'border_styles' => "%%order_class%% .dual_button_wrapper .dual_button_two .cwp_dual_button  ",
						),
					),
					'label_prefix'    => esc_html__('Button 2', 'cwp-ds'),
				),
			),

			'box_shadow'            => array(
				'default' => array(
					'css' => array(
						'main' => "%%order_class%% .dual_button_wrapper",
					),
				),

				'connector_shadow'   => array(
					'label'               => esc_html__('Box Shadow', 'cwp-ds'),
					'option_category'     => 'layout',
					'tab_slug'            => 'advanced',
					'toggle_slug'         => 'dual_connector',
					'css'                 => array(
						'main' => '%%order_class%% .dual_button_wrapper .dual-btn-seprator',
						'show_if' => array(
							'use_dual_connector' => 'on',
						),
					),
				),
			),

			'max_width'         => array(
				'label'               => esc_html__('Button Width', 'cwp-ds'),
				'css' => array(
					'main' => '%%order_class%% .dual_button_wrapper',
				),
			),

			'background' => false,
			'filters' => false,
			'text'    => false,
			'height'  => false,
			'link_options' => false,
		);
	}

	public function all_fields()
	{
		require 'fields.php';

		return wp_json_encode($plugin_fields, JSON_PRETTY_PRINT);
	}

	public function get_fields()
	{
		require 'fields.php';
		$plugin_fields['static_css']['default'] = $this->all_fields();
		return $plugin_fields;
	}


	public function render($attrs, $content = null, $render_slug)
	{

		// extract($this->props); // ( X ) $field = $this->props['field'];
		$button_text_one                      = $this->props['button_text_one'];
		$button_text_two                      = $this->props['button_text_two'];
		$button_url_one                       = $this->props['button_url_one'];
		$url_new_window_one                   = $this->props['url_new_window_one'];
		$button_url_two                       = $this->props['button_url_two'];
		$url_new_window_two                   = $this->props['url_new_window_two'];
		$use_icon_one                         = $this->props['use_icon_one'];
		$icon_color_one                       = $this->props['icon_color_one'];
		$icon_one_font_size                   = $this->props['icon_one_font_size'];
		$icon_placement_one                   = $this->props['icon_placement_one'];
		$use_icon_two                         = $this->props['use_icon_two'];
		$font_icon_two                        = $this->props['font_icon_two'];
		$btn_bg_one                           = $this->props['btn_bg_one'];
		$btn_bg_hover_one                     = $this->props['btn_bg_hover_one'];
		$btn_bg_two                           = $this->props['btn_bg_two'];
		$btn_bg_hover_two                     = $this->props['btn_bg_hover_two'];
		$icon_two_font_size                   = $this->props['icon_two_font_size'];
		$use_dual_connector                   = $this->props['use_dual_connector'];
		$cwp_dual_connector_size              = $this->props['cwp_dual_connector_size'];
		$dual_connector_text                  = $this->props['dual_connector_text'];
		$use_icon_connector                   = $this->props['use_icon_connector'];
		$connector_font_icon                  = $this->props['connector_font_icon'];
		$btn_sep_text_color                   = $this->props['btn_sep_text_color'];
		$btn_sep_bg                           = $this->props['btn_sep_bg'];
		$btn_sep_color                        = $this->props['btn_sep_color'];
		$cwp_sep_border_radius                = $this->props['cwp_sep_border_radius'];
		$dual_btn_align                       = $this->props['dual_btn_align'];
		$icon_color_two                       = $this->props['icon_color_two'];
		$icon_placement_two                   = $this->props['icon_placement_two'];
		$cwp_dual_stack                       = $this->props['cwp_dual_stack'];
		$button_one_text_align                = $this->props['button_one_text_align'];
		$button_two_text_align                = $this->props['button_two_text_align'];
		$font_icon_one                        = $this->props['font_icon_one'];
		$font_icon_two                        = $this->props['font_icon_two'];


		require 'fields.php';
		require_once plugin_dir_path(__DIR__) . 'function.php';


		$styles = new cwpds__RenderStyles($plugin_fields, $render_slug, $this->props); // rendering all the styles;

		$styles->init_styles(); //initializing the styles iterator;

		$styles->static_css(array(

			array(
				'%%order_class%% .dual_button_container',
				'display: -webkit-box;
				  display: -ms-flexbox;
				  display: flex;
				  -webkit-box-orient: horizontal;
				  -webkit-box-direction: normal;
				  -ms-flex-direction: row;
				  flex-direction: row;'
			),

			array(
				'%%order_class%% .dual_button_container .dual_button_one',
				'position:relative;'
			),

			array(
				'%%order_class%% .dual_button_container .dual_button_one .cwp_dual_button, %%order_class%% .dual_button_container .dual_button_two .cwp_dual_button',
				'-webkit-transition: all .4s ease;
				 -o-transition: all .4s ease;
				 transition: all .4s ease;'
			),

			array(
				'%%order_class%% .dual_button_one .cwp_dual_button, %%order_class%% .dual_button_two .cwp_dual_button',
				'display: -webkit-box;
				 display: -ms-flexbox;
				 display: flex;'
			),

			array(
				'%%order_class%% .dual_button_container .dual_button_wrapper',
				'display: -webkit-box;
				 display: -ms-flexbox;
				 display: flex;'
			),

			array(
				'%%order_class%% .dual_button_one, %%order_class%% .dual_button_two',
				'width: 100%;'
			),

			array(
				'%%order_class%% .dual_button_container .btn-icon, %%order_class%% .dual_button_container .dual-btn-seprator .icon',
				'display: inline-block;
				 webkit-box-sizing: border-box;
				 -moz-box-sizing: border-box;
				 box-sizing: border-box;
				 font-family: ETmodules;
				 font-weight: 400;
				 font-style: normal;
				 font-variant: normal;
				 -webkit-font-smoothing: antialiased;
				 line-height: 1;
				 cursor: pointer;
				 text-transform: none;
				 content: attr(data-icon);
				 speak: none;'
			),
		));

		if ('' === $this->props['border_style_all']) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_wrapper .dual_button_one .cwp_dual_button',
				'declaration' => 'border-style: solid;',
			));
		}

		if ('' === $this->props['border_style_all_button_two']) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_wrapper .dual_button_two .cwp_dual_button',
				'declaration' => 'border-style: solid;',
			));
		}

		// image / icon alignment
		$dual_alignment_value = '';
		switch ($dual_btn_align) {
			case 'left':
				$dual_alignment_value = 'flex-start';
				break;
			case 'center':
				$dual_alignment_value = 'center';
				break;
			case 'right':
				$dual_alignment_value = 'flex-end';
				break;

			default:
				break;
		}

		if ($dual_btn_align) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_container',
				'declaration' =>  sprintf('-webkit-box-pack: %1$s;
											-ms-flex-pack:%1$s;  
											justify-content:%1$s;', $dual_alignment_value),
			));
		}

		if ('on' === $use_dual_connector && 'small' === $cwp_dual_connector_size) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual-btn-seprator',
				'declaration' => 'position: absolute;
								  top: 50%;
								  right: -15px;
								  transform: translateY(-50%);
								  z-index: 9999999;
								  width: 25px;
								  height: 25px;
								  font-size:10px;
								  display: -webkit-box;
                                  display: -ms-flexbox;
                                  display: flex;
                                  -webkit-box-align: center;
                                  -ms-flex-align: center;
                                  align-items: center;
                                  -webkit-box-pack: center;
                                  -ms-flex-pack: center;
                                  justify-content: center;',
			));

			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_container .dual-btn-seprator .icon',
				'declaration' => 'font-size: 15px;',
			));
		}

		if ('on' === $use_dual_connector && 'medium' === $cwp_dual_connector_size) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual-btn-seprator',
				'declaration' => 'position: absolute;
								  top: 50%;
								  right: -18px;
								  font-size: 16px;
								  transform: translateY(-50%);
								  z-index: 9999999;
								  width: 35px;
								  height: 35px;
								  display: -webkit-box;
                                  display: -ms-flexbox;
                                  display: flex;
                                  -webkit-box-align: center;
                                  -ms-flex-align: center;
                                  align-items: center;
                                  -webkit-box-pack: center;
                                  -ms-flex-pack: center;
                                  justify-content: center;',
			));

			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_container .dual-btn-seprator .icon',
				'declaration' => 'font-size: 20px;',
			));
		}

		if ('on' === $use_dual_connector && 'large' === $cwp_dual_connector_size) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual-btn-seprator',
				'declaration' => 'position: absolute;
								  top: 50%;
								  font-size: 20px;
								  right: -23px;
								  transform: translateY(-50%);
								  z-index: 9999999;
								  width: 45px;
								  height: 45px;
								  display: -webkit-box;
                                  display: -ms-flexbox;
                                  display: flex;
                                  -webkit-box-align: center;
                                  -ms-flex-align: center;
                                  align-items: center;
                                  -webkit-box-pack: center;
                                  -ms-flex-pack: center;
                                  justify-content: center;',
			));

			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_container .dual-btn-seprator .icon',
				'declaration' => 'font-size: 28px;',
			));
		}

		if (('on' === $use_icon_one && 'left' === $icon_placement_one) || ('on' === $use_icon_two && 'left' === $icon_placement_two)) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_wrapper .dual_button_one .btn-icon,%%order_class%% .dual_button_wrapper .dual_button_two .btn-icon',
				'declaration' => 'margin-right:5px;',
			));
		}

		if (('on' === $use_icon_one && 'right' === $icon_placement_one) || ('on' === $use_icon_two && 'right' === $icon_placement_two)) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_wrapper .dual_button_one .btn-icon,%%order_class%% .dual_button_wrapper .dual_button_two .btn-icon',
				'declaration' => 'margin-left:5px;',
			));
		}

		// stack mobile responsive work
		$mobile_enabled = et_pb_get_responsive_status($this->props["cwp_dual_stack_last_edited"]);

		$dual_stack_values = array(
			'desktop' => $this->props["cwp_dual_stack"],
			'tablet'  => $mobile_enabled ? $this->props["cwp_dual_stack_tablet"] : '',
			'phone'  => $mobile_enabled ? $this->props["cwp_dual_stack_phone"] : '',
		);

		$stack_tablet = '' === $dual_stack_values['tablet'] ?  $dual_stack_values['desktop'] : $dual_stack_values['tablet'];
		$stack_mobile = '' === $dual_stack_values['phone'] ?  $dual_stack_values['desktop'] : $dual_stack_values['phone'];


		if ('on' === $dual_stack_values['desktop']) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_container .dual_button_wrapper',
				'declaration' => '-webkit-box-orient:vertical;
				                  -webkit-box-direction:normal;
					              -ms-flex-direction:column;
								  flex-direction:column;',
				'media_query' => ET_Builder_Element::get_media_query('min_width_981'),
			));
		}

		if ('on' === $dual_stack_values['desktop'] && $cwp_dual_connector_size) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_container .dual-btn-seprator',
				'declaration' => 'top: 100%;
				                  left: 50%;
				                  -webkit-transform: translate(-50%,-50%);
					              -ms-transform: translate(-50%,-50%);
						          transform: translate(-50%,-50%);',
				'media_query' => ET_Builder_Element::get_media_query('min_width_981'),
			));
		}

		if ('on' === $stack_tablet) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_container .dual_button_wrapper',
				'declaration' => '-webkit-box-orient:vertical;
				                  -webkit-box-direction:normal;
					              -ms-flex-direction:column;
								  flex-direction:column;',
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}

		if (('on' === $stack_tablet && $cwp_dual_connector_size)) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_container .dual-btn-seprator',
				'declaration' => 'top: 100%;
				                  left: 50%;
				                  -webkit-transform: translate(-50%,-50%);
					              -ms-transform: translate(-50%,-50%);
						          transform: translate(-50%,-50%);',
				'media_query' => ET_Builder_Element::get_media_query('max_width_980'),
			));
		}

		if ('on' === $stack_mobile) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_container .dual_button_wrapper',
				'declaration' => '-webkit-box-orient:vertical;
				                  -webkit-box-direction:normal;
				                  -ms-flex-direction:column;
				                  flex-direction:column;',
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		if ('off' === $stack_mobile) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_container .dual_button_wrapper',
				'declaration' => '-webkit-box-orient:horizontal;
				                  -webkit-box-direction:normal;
					              -ms-flex-direction:row;
						          flex-direction:row;',
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		if (('on' === $stack_mobile && $cwp_dual_connector_size)) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_container .dual-btn-seprator',
				'declaration' => 'top: 100%;
				                  left: 50%;
				                  -webkit-transform: translate(-50%,-50%);
					              -ms-transform: translate(-50%,-50%);
						          transform: translate(-50%,-50%);',
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		if (('off' === $stack_mobile && $cwp_dual_connector_size)) {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_container .dual-btn-seprator',
				'declaration' => 'top: 50%;
								  left: auto;
								  transform: translateY(-50%);',
				'media_query' => ET_Builder_Element::get_media_query('max_width_767'),
			));
		}

		$btn_text_one = sprintf('<span class="btn-text">%1$s</span>', $button_text_one);
		$btn_text_two = sprintf('<span class="btn-text">%1$s</span>', $button_text_two);
		$btn_icon_one = 'on' === $use_icon_one ? sprintf('<span class="btn-icon">%1$s</span>', esc_attr(et_pb_process_font_icon($font_icon_one))) : '';
		$btn_icon_two = 'on' === $use_icon_two ? sprintf('<span class="btn-icon">%1$s</span>', esc_attr(et_pb_process_font_icon($font_icon_two))) : '';



		if ($button_one_text_align === 'left') {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_one .cwp_dual_button,%%order_class%% .dual_button_two .cwp_dual_button',
				'declaration' =>  'justify-content : flex-start;',
			));
		}

		if ($button_one_text_align === 'center') {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_one .cwp_dual_button,%%order_class%% .dual_button_two .cwp_dual_button',
				'declaration' =>  'justify-content : center;',
			));
		}

		if ($button_one_text_align === 'right') {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_one .cwp_dual_button,%%order_class%% .dual_button_two .cwp_dual_button',
				'declaration' =>  'justify-content : flex-end;',
			));
		}

		// button two alignment
		if ($button_two_text_align === 'left') {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_two .cwp_dual_button',
				'declaration' =>  'justify-content : flex-start !important;',
			));
		}

		if ($button_two_text_align === 'center') {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_two .cwp_dual_button',
				'declaration' =>  'justify-content : center !important;',
			));
		}

		if ($button_two_text_align === 'right') {
			ET_Builder_Element::set_style($render_slug, array(
				'selector'    => '%%order_class%% .dual_button_two .cwp_dual_button',
				'declaration' =>  'justify-content : flex-end !important;',
			));
		}

		// button one output
		$button_one_output = sprintf(
			'<div class="cwp_dual_button_module_wrapper">
				<a class="cwp_dual_button" %2$s href="%1$s">
				   %5$s
				   %6$s
				</a>
				%3$s
				%4$s
			</div>',
			$button_url_one,
			"on" === $url_new_window_one ? "target='_blank'" : '',
			'on' === $use_dual_connector && 'off' === $use_icon_connector ? sprintf('<div class="dual-btn-seprator"><span>%1$s</span></div>', $dual_connector_text) : '',
			'on' === $use_dual_connector && 'on' === $use_icon_connector ? sprintf('<div class="dual-btn-seprator"><span class="icon">%1$s</span></div>', esc_attr(et_pb_process_font_icon($connector_font_icon))) : '',
			('left'  ===  $icon_placement_one  ?  sprintf('%1$s %2$s', $btn_icon_one, $btn_text_one)   : ''),
			('right' === $icon_placement_one   ?  sprintf('%1$s %2$s', $btn_text_one, $btn_icon_one)  : '')
		);


		// button two output
		$button_two_output = sprintf(
			'<div class="cwp_dual_button_module_wrapper">
				<a class="cwp_dual_button" %2$s href="%1$s">
				   %3$s
				   %4$s
			    </a>
			</div>',
			$button_url_two,
			"on" === $url_new_window_one ? "target='_blank'" : '',
			('left'  ===  $icon_placement_two  ?  sprintf('%1$s %2$s', $btn_icon_two, $btn_text_two) : ''),
			('right' ===  $icon_placement_two ?   sprintf('%1$s %2$s', $btn_text_two, $btn_icon_two)  : '')
		);

		// main module output
		$output = sprintf(
			'<div class="dual_button_container">
			  <div class="dual_button_wrapper">
			       <div class="dual_button_one">%1$s</div>
				   <div class="dual_button_two">%2$s</div>
			  </div>	   

			</div>',
			$button_one_output,
			$button_two_output
		);

		return $output;
	}
}

new  cwpds__Dual_Module_Button;

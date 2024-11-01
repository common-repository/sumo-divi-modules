<?php

if ( !defined('ABSPATH') ) {
	exit;
}

class  cwpds__Sumo_facebook_button_module extends ET_Builder_Module
{

	public $slug       = 'cwp_facebook_btn';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => '',
		'author_uri' => '',
	);

	public function init()
	{
		$this->name = esc_html__('Fb Like Button', 'cwp-ds');
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
					'alignment' => esc_html__('Alignment', 'cwp-ds'),
				),
			),
		);

		$this->advanced_fields = array(

			'margin_padding' => array(
				'css' => array(
					'important' => 'all',
					'main' => '%%order_class%%',
				),
			),

			'borders' => array(
				'default' => array(
					'css'             => array(
						'main' => array(
							'border_radii'  =>  "%%order_class%%",
							'border_styles' =>  "%%order_class%%",
						),
					),
				),
			),

			'box_shadow'            => array(
				'default' => array(
					'css' => array(
						'main' => "%%order_class%%",
					),
				),
			),

			'max_width'         => array(
				'label'               => esc_html__('Width', 'cwp-ds'),
				'css' => array(
					'main' => '%%order_class%%',
				),
			),

			'background'       => false,
			'filters'         => false,
			'text'            => false,
			'height'          => false,
			'link_options'    => false,
			'fonts'           => false,
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
		//extract($this->props); // ( X ) $field = $this->props['field']; 
		$cwp_fb_btn_link                      = $this->props['cwp_fb_btn_link'];
		$cwp_fb_btn_type                      = $this->props['cwp_fb_btn_type'];
		$cwp_fb_btn_layout                    = $this->props['cwp_fb_btn_layout'];
		$cwp_fb_btn_size                      = $this->props['cwp_fb_btn_size'];
		$cwp_fb_btn_share                     = $this->props['cwp_fb_btn_share'];
		$cwp_fb_btn_height                    = $this->props['cwp_fb_btn_height'];

		require 'fields.php';
		require_once plugin_dir_path(__DIR__) . 'function.php';


		$styles = new cwpds__RenderStyles($plugin_fields, $render_slug, $this->props); // rendering all the styles;


		$styles->init_styles(); //initializing the styles iterator;

		$styles->static_css(array(

			array(
				'%%order_class%% .cwp_fb_button_container iframe',
				'width:100% !important;',
			),
		));

		$fb_btn_url = "https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2F$cwp_fb_btn_link";
		// main module output
		$output = sprintf(
			'<div class="cwp_fb_button_container">
			<iframe src="%1$s&layout=%3$s&action=%2$s&size=%4$s&share=%5$s&appId" height="%6$s" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			</div>',
			$fb_btn_url,
			$cwp_fb_btn_type,
			$cwp_fb_btn_layout,
			$cwp_fb_btn_size,
			'on' === $cwp_fb_btn_share ? 'true' : 'false',
			$cwp_fb_btn_height
		);

		return $output;
	}
}

new  cwpds__Sumo_facebook_button_module;

<?php

if ( !defined('ABSPATH') ) {
	exit;
}

class  cwpds__Sumo_Facebook_page extends ET_Builder_Module
{

	public $slug       = 'cwp_facebook_page';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => '',
		'author_uri' => '',
	);

	public function init()
	{
		$this->name = esc_html__('Fb Page', 'cwp-ds');
		$this->settings_modal_toggles = array(
			'general'  => array(
				'toggles' => array(
					'main_content'    => esc_html__('General', 'cwp-ds'),
					'link'            => esc_html__('Link', 'cwp-ds'),
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

			'background' => false,
			'filters' => false,
			'text'    => false,
			'height'  => false,
			'link_options' => false,
			'fonts'  => false,
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
		$cwp_fb_id                          = $this->props['cwp_fb_id'];
		$cwp_fb_layout                      = $this->props['cwp_fb_layout'];
		$cwp_fb_small_header                = $this->props['cwp_fb_small_header'];
		$cwp_fb_cover_photo                 = $this->props['cwp_fb_cover_photo'];
		$cwp_fb_profile_photo               = $this->props['cwp_fb_profile_photo'];
		$cwp_fb_cta_btn                     = $this->props['cwp_fb_cta_btn'];
		$cwp_fb_width                       = $this->props['cwp_fb_width'];
		$cwp_fb_height                      = $this->props['cwp_fb_height'];


		require 'fields.php';
		require_once plugin_dir_path(__DIR__) . 'function.php';


		$styles = new cwpds__RenderStyles($plugin_fields, $render_slug, $this->props); // rendering all the styles;


		$styles->init_styles(); //initializing the styles iterator;

		$styles->static_css(array(

			// array(
			// 	'%%order_class%%',
			// 	''
			// ),
		));

		if (!empty($cwp_fb_layout)) {
			$value_map = array('timeline', 'events', 'messages');
			$cwp_fb_layout   = $this->process_multiple_checkboxes_field_value($value_map, $cwp_fb_layout);
			$cwp_fb_layout   = str_replace('|', ',', $cwp_fb_layout);
		} else {
			$cwp_fb_layout = '';
		}

		$fb_page_source = "https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F$cwp_fb_id";

		$fb_source_output = sprintf(
			'src="%1$s&tabs=%2$s&width=%7$s&height=%8$s&small_header=%3$s&adapt_container_width=true&hide_cover=%4$s&show_facepile=%5$s&hide_cta=%6$s&appId"',
			$fb_page_source,
			$cwp_fb_layout,
			'on' === $cwp_fb_small_header ? 'true' : 'false',
			'on' === $cwp_fb_cover_photo ? 'true' : 'false',
			'on' === $cwp_fb_profile_photo ? 'true' : 'false',
			'on' === $cwp_fb_cta_btn ? 'false' : 'true',
			$cwp_fb_width,
			$cwp_fb_height
		);

		//main module output
		$output = sprintf(
			'<div class="cwp_fb_page_container">
				<iframe  %1$s width="%2$s" height="%3$s" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
			</div>',
			$fb_source_output,
			$cwp_fb_width,
			$cwp_fb_height
		);
		return $output;
	}
}

new  cwpds__Sumo_Facebook_page;

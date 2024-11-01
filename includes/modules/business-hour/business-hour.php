<?php

if ( !defined('ABSPATH') ) {
	exit;
}

class cwpds__ET_BUSINESS_HOUR_MODULE extends ET_Builder_Module {
	function init() {
		$this->name       = esc_html__( 'Business Hour', 'cwp-ds' );
		$this->plural     = esc_html__( 'Business Hours', 'cwp-ds' );
		$this->slug       = 'cwp_business_hour';
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

					'cwp_typo' => array(
						'title'    => esc_html__( 'Typography', 'cwp-ds' ),
						'tabbed_subtoggles' => true,
						'bb_icons_support' => true,
						'sub_toggles' => array(
							'op_time'     => array(
								'name' => 'Open Time',
							),
							'cl_time'     => array(
								'name' => 'Close Time',
							),		
						),
					),
				
				),
			),
		);

		$this->advanced_fields = array(

			'fonts'                 => array(
				'open_typo'   => array(
					'label'    => esc_html__( 'Open', 'cwp-ds' ),
					'css'      => array(
						'main'  => "%%order_class%% .cwp_business_hour_item.cwp_opening_time",
					),	
					'tab_slug' => 'advanced',
					'toggle_slug' => 'cwp_typo',
					'sub_toggle' => 'op_time',
				),

				'close_typo'   => array(
					'label'    => esc_html__( 'Close', 'cwp-ds' ),
					'css'      => array(
						'main'  => "%%order_class%% .cwp_business_hour_item.cwp_close",
					),	

					'tab_slug' => 'advanced',
					'toggle_slug' => 'cwp_typo',
					'sub_toggle' => 'cl_time',
				),
			),
                  
			'background'            => array(
				'label'    => esc_html__( 'Background Color', 'cwp-ds' ),
				'css' => array(
					 'main' => '%%order_class%%',
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

			'borders'               => array(
				'default'  => array(

					'css'             => array(
						'main' => array(
							'border_radii' => "%%order_class%% ",
							'border_styles' => "%%order_class%%",
						),
					),
				),		
			),

			'height'                => false,
			'link_options'          => false,
			'button'                => false,
			'text'                  => false,
			'text_shadow'           => false,
			
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
			'cwp_open_mon' => array(
				'label'           => esc_html__( 'Monday', 'cwp-ds' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'Open', 'cwp-ds' ),
					'on'  => esc_html__( 'Closed', 'cwp-ds' ),
				),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',
				'description' => esc_html__( '', 'cwp-ds' ),
			),

			'mon_op_time' => array(
				'label'           => esc_html__( 'Open Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '10:00AM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_mon'    => 'on',
				),
			),

			'mon_cl_time' => array(
				'label'           => esc_html__( 'Close Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '07:00PM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_mon'    => 'on',
				),
			),

			'cwp_open_tues' => array(
				'label'           => esc_html__( 'Tuesday', 'cwp-ds' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'Open', 'cwp-ds' ),
					'on'  => esc_html__( 'Closed', 'cwp-ds' ),
				),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',
				'description' => esc_html__( '', 'cwp-ds' ),
			),

			'tue_op_time' => array(
				'label'           => esc_html__( 'Open Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '10:00AM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_tues'    => 'on',
				),
			),

			'tue_cl_time' => array(
				'label'           => esc_html__( 'Close Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '07:00PM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_tues'    => 'on',
				),
			),

			'cwp_open_wed' => array(
				'label'           => esc_html__( 'Wednesday', 'cwp-ds' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'Open', 'cwp-ds' ),
					'on'  => esc_html__( 'Closed', 'cwp-ds' ),
				),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',
				'description' => esc_html__( '', 'cwp-ds' ),
			),

			'wed_op_time' => array(
				'label'           => esc_html__( 'Open Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '10:00AM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_wed'    => 'on',
				),
			),

			'wed_cl_time' => array(
				'label'           => esc_html__( 'Close Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '07:00PM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_wed'    => 'on',
				),
			),

			'cwp_open_thrus' => array(
				'label'           => esc_html__( 'Thursday', 'cwp-ds' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'Open', 'cwp-ds' ),
					'on'  => esc_html__( 'Closed', 'cwp-ds' ),
				),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',
				'description' => esc_html__( '', 'cwp-ds' ),
			),

			'thrus_op_time' => array(
				'label'           => esc_html__( 'Open Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '10:00AM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_thrus'    => 'on',
				),
			),

			'thrus_cl_time' => array(
				'label'           => esc_html__( 'Close Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '07:00PM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_thrus'    => 'on',
				),
			),

			'cwp_open_fri' => array(
				'label'           => esc_html__( 'Friday', 'cwp-ds' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'Open', 'cwp-ds' ),
					'on'  => esc_html__( 'Closed', 'cwp-ds' ),
				),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',
				'description' => esc_html__( '', 'cwp-ds' ),
			),

			'fri_op_time' => array(
				'label'           => esc_html__( 'Open Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '10:00AM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_fri'    => 'on',
				),
			),

			'fri_cl_time' => array(
				'label'           => esc_html__( 'Close Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '07:00PM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_fri'    => 'on',
				),
			),

			'cwp_open_sat' => array(
				'label'           => esc_html__( 'Saturday', 'cwp-ds' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'Open', 'cwp-ds' ),
					'on'  => esc_html__( 'Closed', 'cwp-ds' ),
				),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',
				'description' => esc_html__( '', 'cwp-ds' ),
			),

			'sat_op_time' => array(
				'label'           => esc_html__( 'Open Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '10:00AM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_sat'    => 'on',
				),
			),

			'sat_cl_time' => array(
				'label'           => esc_html__( 'Close Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '07:00PM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_sat'    => 'on',
				),
			),

			'cwp_open_sun' => array(
				'label'           => esc_html__( 'Sunday', 'cwp-ds' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'Open', 'cwp-ds' ),
					'on'  => esc_html__( 'Closed', 'cwp-ds' ),
				),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',
				'description' => esc_html__( '', 'cwp-ds' ),
			),

			'sun_op_time' => array(
				'label'           => esc_html__( 'Open Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '10:00AM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_sun'    => 'on',
				),
			),

			'sun_cl_time' => array(
				'label'           => esc_html__( 'Close Time', 'cwp-ds' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'default'         => '07:00PM',
				'description'     => esc_html__( '', 'cwp-ds' ),
				'tab_slug'        => 'general',
				'toggle_slug'     => 'main_content',

				'show_if' => array(
					'cwp_open_sun'    => 'on',
				),
			),
		);

		return $fields;
	}

	function render( $attrs, $content = null, $render_slug ) {
		$cwp_open_mon                      = $this->props['cwp_open_mon'];
		$cwp_open_tues                     = $this->props['cwp_open_tues'];
		$cwp_open_wed                      = $this->props['cwp_open_wed'];
		$cwp_open_thrus                    = $this->props['cwp_open_thrus'];
		$cwp_open_fri                      = $this->props['cwp_open_fri'];
		$cwp_open_sat                      = $this->props['cwp_open_sat'];
		$cwp_open_sun                      = $this->props['cwp_open_sun'];
		$mon_op_time                       = $this->props['mon_op_time'];
		$mon_cl_time                       = $this->props['mon_cl_time'];
		$tue_op_time                       = $this->props['tue_op_time'];
		$tue_cl_time                       = $this->props['tue_cl_time'];
		$wed_op_time                       = $this->props['wed_op_time'];
		$wed_cl_time                       = $this->props['wed_cl_time'];
		$thrus_op_time                     = $this->props['thrus_op_time'];
		$thrus_cl_time                     = $this->props['thrus_cl_time'];
		$fri_op_time                       = $this->props['fri_op_time'];
		$fri_cl_time                       = $this->props['fri_cl_time'];
		$sat_op_time                       = $this->props['sat_op_time'];
		$sat_cl_time                       = $this->props['sat_cl_time'];
		$sun_op_time                       = $this->props['sun_op_time'];
		$sun_cl_time                       = $this->props['sun_cl_time'];


		//var_dump($this->props['border_style_all']);
	    //var_dump($this->props);
		

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_business_hour_wrapper ul',
			'declaration' =>  'list-style-type: none; padding: 0;',
		));

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_business_hour_wrapper .cwp_business_hour_item',
			'declaration' =>  'padding: 10px 0; border-bottom: 1px solid #eeeeee;',
		));

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_business_hour_wrapper .cwp_business_hour_item:last-child',
			'declaration' =>  'border-bottom: none;',
		));



		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_business_hour_wrapper .cwp_business_hour_item',
			'declaration' =>  'display: -webkit-box;
			                   display: -webkit-flex;
			                   display: -ms-flexbox;
			                   display: flex;',
		));

		ET_Builder_Element::set_style( $render_slug, array(
			'selector'    => '%%order_class%% .cwp_business_hour_wrapper .cwp_business_hour_item .cwp_business_hour_day, %%order_class%% .cwp_business_hour_wrapper .cwp_business_hour_item .cwp_business_hour_time_wrapper',
			'declaration' =>  '-webkit-box-flex: 0;
							   -webkit-flex: 0 0 50%;
							   -ms-flex: 0 0 50%;
							   flex: 0 0 50%;
			                   max-width: 50%;',
		));
		
		 // Render module output
		 $output = sprintf(
            '<div class="cwp_business_hour_wrapper">
				 <ul>
					<li class="cwp_business_hour_item %8$s">
					   <span class="cwp_business_hour_day">Monday</span>
					     %1$s
					</li>

					<li class="cwp_business_hour_item %9$s">
					<span class="cwp_business_hour_day">Tuesday</span>
					  %2$s
					</li>

					<li class="cwp_business_hour_item %10$s">
						<span class="cwp_business_hour_day">Wednesday</span>
						%3$s
					</li>

					<li class="cwp_business_hour_item %11$s">
					<span class="cwp_business_hour_day">Thursday</span>
					  %4$s
					</li>

					<li class="cwp_business_hour_item %12$s">
					<span class="cwp_business_hour_day">Friday</span>
					 %5$s
					</li>

					<li class="cwp_business_hour_item %13$s">
					<span class="cwp_business_hour_day">Saturday</span>
					 %6$s
					</li>

					<li class="cwp_business_hour_item %14$s">
					<span class="cwp_business_hour_day">Sunday</span>
					 %7$s
					</li>
				 </ul>
            </div>',
			'on' === $cwp_open_mon ? sprintf('<span class="cwp_business_hour_time_wrapper"><span class="cwp_business_hour_open_time"> %1$s</span>
			<span class="cwp_business_hour_seprator">  -  </span> <span class="cwp_business_hour_close_time"> %2$s</span> </span>',$mon_op_time, $mon_cl_time ) : '<span class="cwp_business_hour_time">closed</span>',
			'on' === $cwp_open_tues ? sprintf('<span class="cwp_business_hour_time_wrapper"><span class="cwp_business_hour_open_time"> %1$s</span>
			<span class="cwp_business_hour_seprator">  -  </span> <span class="cwp_business_hour_close_time"> %2$s</span> </span>',$tue_op_time, $tue_cl_time ) : '<span class="cwp_business_hour_time">closed</span>',
			'on' === $cwp_open_wed ? sprintf('<span class="cwp_business_hour_time_wrapper"><span class="cwp_business_hour_open_time"> %1$s</span>
			<span class="cwp_business_hour_seprator">  -  </span> <span class="cwp_business_hour_close_time"> %2$s</span> </span>',$wed_op_time, $wed_cl_time ) : '<span class="cwp_business_hour_time">closed</span>',
			'on' === $cwp_open_thrus ? sprintf('<span class="cwp_business_hour_time_wrapper"><span class="cwp_business_hour_open_time"> %1$s</span>
			<span class="cwp_business_hour_seprator">  -  </span> <span class="cwp_business_hour_close_time"> %2$s</span> </span>',$thrus_op_time, $thrus_cl_time ) : '<span class="cwp_business_hour_time">closed</span>',
			'on' === $cwp_open_fri ? sprintf('<span class="cwp_business_hour_time_wrapper"><span class="cwp_business_hour_open_time"> %1$s</span>
			<span class="cwp_business_hour_seprator">  -  </span> <span class="cwp_business_hour_close_time"> %2$s</span> </span>',$fri_op_time, $fri_cl_time ) : '<span class="cwp_business_hour_time">closed</span>',
			'on' === $cwp_open_sat ? sprintf('<span class="cwp_business_hour_time_wrapper"><span class="cwp_business_hour_open_time"> %1$s</span>
			<span class="cwp_business_hour_seprator">  -  </span> <span class="cwp_business_hour_close_time"> %2$s</span> </span>',$sat_op_time, $sat_cl_time ) : '<span class="cwp_business_hour_time">closed</span>',
			'on' === $cwp_open_sun ? sprintf('<span class="cwp_business_hour_time_wrapper"><span class="cwp_business_hour_open_time"> %1$s</span>
			<span class="cwp_business_hour_seprator">  -  </span> <span class="cwp_business_hour_close_time"> %2$s</span> </span>',$sun_op_time, $sun_cl_time ) : '<span class="cwp_business_hour_time">closed</span>',
			'on' === $cwp_open_mon ? 'cwp_opening_time' : 'cwp_close',
			'on' === $cwp_open_tues ? 'cwp_opening_time' : 'cwp_close',
			'on' === $cwp_open_wed ? 'cwp_opening_time' : 'cwp_close',
			'on' === $cwp_open_thrus ? 'cwp_opening_time' : 'cwp_close',
			'on' === $cwp_open_fri ? 'cwp_opening_time' : 'cwp_close',
			'on' === $cwp_open_sat ? 'cwp_opening_time' : 'cwp_close',
			'on' === $cwp_open_sun ? 'cwp_opening_time' : 'cwp_close'
	
        );

		return $output;
	}
}

new cwpds__ET_BUSINESS_HOUR_MODULE;

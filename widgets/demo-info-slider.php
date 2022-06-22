<?php

class Demo_Info_Slider extends \Elementor\Widget_Base
{
	public function __construct($data = [], $args = null) {
		parent::__construct($data, $args);

		wp_register_script( 'demo_info_slider_js',  plugins_url( '/OBPress_Demo_Widgets/widgets/assets/js/demo-info-slider.js'), [ 'elementor-frontend' ], '1.0.0', true );

		wp_register_style( 'demo_info_slider_css', plugins_url( '/OBPress_Demo_Widgets/widgets/assets/css/demo-info-slider.css') );           
	}

	public function get_script_depends()
	{
		return ['demo_info_slider_js'];
	}

	public function get_style_depends()
	{
		return ['demo_info_slider_css'];
	}

	public function get_name()
	{
		return 'SpaBot';
	}

	public function get_title()
	{
		return __('Spa Bot', 'OBPress_Demo_Widgets');
	}

	public function get_icon()
	{
		return 'fa fa-calendar';
	}

	public function get_categories()
	{
		return ['OBPress'];
	}

	protected function _register_controls()
	{
		$this->start_controls_section(
			'content_section',
			[
				'label' => __('Content', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'obpress_custom_demo_bot_location', [
				'label' => __( 'Demo Location', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Demo Location' , 'OBPress_Demo_Widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'obpress_custom_demo_bot_title', [
				'label' => __( 'Demo Title', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Demo Title' , 'OBPress_Demo_Widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'obpress_custom_demo_bot_description', [
				'label' => __( 'Demo Description', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'Demo Description' , 'OBPress_Demo_Widgets' ),
				'show_label' => false,
			]
		);

		$repeater->add_control(
			'obpress_custom_demo_bot_workdays', [
				'label' => __( 'Demo Worday Hours', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Demo Worday Hours' , 'OBPress_Demo_Widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'obpress_custom_demo_bot_weekends', [
				'label' => __( 'Demo Weekend Hours', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Demo Weekend Hours' , 'OBPress_Demo_Widgets' ),
				'label_block' => true,
			]
		);		

		$repeater->add_control(
			'obpress_custom_demo_bot_image',
			[
				'label' => __( 'Choose Demo Image', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_demo',
			[
				'label' => __( 'Demo', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'obpress_custom_demo_bot_title' => __( 'Demo', 'OBPress_Demo_Widgets' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'OBPress_Demo_Widgets' ),
					],
					[
						'obpress_custom_demo_bot_title' => __( 'Demo', 'OBPress_Demo_Widgets' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'OBPress_Demo_Widgets' ),
					],
					[
						'obpress_custom_demo_bot_title' => __( 'Demo', 'OBPress_Demo_Widgets' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'OBPress_Demo_Widgets' ),
					]										
				],
				'title_field' => '{{{ obpress_custom_demo_bot_title }}}',
			]
		);


		$this->end_controls_section();


		$this->start_controls_section(
			'info_section',
			[
				'label' => __('Info Section', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'obpress_spa_bot_info_section_padding',
			[
				'label' => __( 'Padding', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '42',
					'right' => '117',
					'bottom' => '42',
					'left' => '135',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '42',
					'right' => '117',
					'bottom' => '42',
					'left' => '135',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-info' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'obpress_spa_bot_info_section_bg_color',
			[
				'label' => __('Background Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#fff',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-info' => 'background-color: {{obpress_spa_bot_info_section_bg_color}}'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'obpress_spa_bot_info_section_box_shadow',
				'label' => esc_html__( 'Box Shadow', 'OBPress_Demo_Widgets' ),
				'selector' => '.obpress-spa-top-holder .obpress-spa-top-widget-info',
				'fields_options' => [
					'box_shadow_type' => [ 
						'default' =>'yes' 
					],
					'box_shadow' => [
						'default' =>[
							'horizontal' => 0,
							'vertical' => 14,
							'blur' => 24,
							'color' => '#bead8e33'
						]
					]
				]
			]
		);

		$this->add_responsive_control(
			'obpress_spa_bot_info_section_text_alignment',
			[
				'label' => __( 'Text Align', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'OBPress_Demo_Widgets' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'OBPress_Demo_Widgets' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'OBPress_Demo_Widgets' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => 'center',
				'mobile_default' => 'center',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-info' => 'text-align: {{VALUE}}',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_spa_bot_info_section_width',
			[
				'label' => __( 'Info Width', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 200,
						'max' => 650,
						'step' => 1,
					],
				],
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'unit' => 'px',
					'size' => 622,
				],
				'mobile_default' => [
					'unit' => 'px',
					'size' => 622,
				],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-info' => 'max-width: {{SIZE}}px',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'info_section_contant',
			[
				'label' => __('Info Content Section', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_content_location',
			[
				'label' => __('Location Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-info h4' => 'color: {{obpress_custom_demo_bot_content_location}}',
				],
			]
		);	
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_spa_bot_info_location_typography',
				'label' => __('Loaction Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-top-holder .obpress-spa-top-widget-info h4',
				'fields_options' => [
					'typography' => [
						'default' => 'yes'
					],
					'font_family' => [
						'default' => 'Montserrat',
					],
					'font_size' => [
						'default' => [
							'unit' => 'px',
							'size' => '16',
						],
					],
					'font_weight' => [
						'default' => '500',
					],
					'letter_spacing' => [
						'default' => [
							'unit' => 'px',
							'size' => '-0.48',
						],
					],
				],
			]
		);

		$this->add_responsive_control(
			'obpress_spa_bot_info_location_margin',
			[
				'label' => __( 'Location Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '9',
					'left' => '0',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '9',
					'left' => '0',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-info h4' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_content_title',
			[
				'label' => __('Title Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-info h3' => 'color: {{obpress_custom_demo_bot_content_title}}',
				],
			]
		);	

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_spa_bot_info_title_typography',
				'label' => __('Title Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-top-holder .obpress-spa-top-widget-info h3',
				'fields_options' => [
					'typography' => [
						'default' => 'yes'
					],
					'font_family' => [
						'default' => 'Montserrat',
					],
					'font_size' => [
						'default' => [
							'unit' => 'px',
							'size' => '24',
						],
					],
					'font_weight' => [
						'default' => '700',
					],
					'letter_spacing' => [
						'default' => [
							'unit' => 'px',
							'size' => '-0.72',
						],
					],
				],
			]
		);

		$this->add_responsive_control(
			'obpress_spa_bot_info_title_margin',
			[
				'label' => __( 'Title Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '24',
					'left' => '0',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '24',
					'left' => '0',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-info h3' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_content_desc',
			[
				'label' => __('Description Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#777777',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-description' => 'color: {{obpress_custom_demo_bot_content_desc}}'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_spa_bot_info_description_typography',
				'label' => __('Description Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-top-holder .obpress-spa-top-description',
				'fields_options' => [
					'typography' => [
						'default' => 'yes'
					],
					'font_family' => [
						'default' => 'Montserrat',
					],
					'font_size' => [
						'default' => [
							'unit' => 'px',
							'size' => '16',
						],
					],
					'font_weight' => [
						'default' => '400',
					],
					'line_height' => [
						'default' => [
							'unit' => 'px',
							'size' => '24',
						],
					],
				],
			]
		);

		$this->add_responsive_control(
			'obpress_spa_bot_info_description_margin',
			[
				'label' => __( 'Description Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '25',
					'left' => '0',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '25',
					'left' => '0',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_content_line',
			[
				'label' => __('Spacer Line Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#fff',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-line' => 'background-color: {{obpress_custom_demo_bot_content_line}}',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_spa_bot_info_spacer_line_height',
			[
				'label' => __( 'Spacer Line Height', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 50,
						'step' => 1,
					],
				],
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'unit' => 'px',
					'size' => 1,
				],
				'mobile_default' => [
					'unit' => 'px',
					'size' => 1,
				],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-line' => 'min-height: {{SIZE}}px;',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_spa_bot_info_spacer_line_width',
			[
				'label' => __( 'Spacer Line Width', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 650,
						'step' => 1,
					],
				],
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'unit' => 'px',
					'size' => 224,
				],
				'mobile_default' => [
					'unit' => 'px',
					'size' => 224,
				],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-line' => 'max-width: {{SIZE}}px;',
				],
			]
		);

		$this->add_control(
			'obpress_spa_bot_info_date_title_color',
			[
				'label' => __('Date Title Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#707070',
				'selectors' => [
					'.obpress-spa-top-holder .obrpress-spa-top-time-title' => 'color: {{obpress_spa_bot_info_date_title_color}}'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_spa_bot_info_date_title_typography',
				'label' => __('Date Title Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-top-holder .obrpress-spa-top-time-title',
				'fields_options' => [
					'typography' => [
						'default' => 'yes'
					],
					'font_family' => [
						'default' => 'Montserrat',
					],
					'font_size' => [
						'default' => [
							'unit' => 'px',
							'size' => '14',
						],
					],
					'font_weight' => [
						'default' => '400',
					],
					'line_height' => [
						'default' => [
							'unit' => 'px',
							'size' => '18',
						],
					],
				],
			]
		);

		$this->add_responsive_control(
			'obpress_spa_bot_info_date_title_margin',
			[
				'label' => __( 'Date Title Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '10',
					'right' => '0',
					'bottom' => '16',
					'left' => '0',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '10',
					'right' => '0',
					'bottom' => '16',
					'left' => '0',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-top-holder .obrpress-spa-top-time-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_days',
			[
				'label' => __('Demo Days Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#2C2F33',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-time strong' => 'color: {{obpress_custom_demo_bot_days}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_spa_bot_info_date_days_typography',
				'label' => __('Date Days Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-top-holder .obpress-spa-top-time strong',
				'fields_options' => [
					'typography' => [
						'default' => 'yes'
					],
					'font_family' => [
						'default' => 'Montserrat',
					],
					'font_size' => [
						'default' => [
							'unit' => 'px',
							'size' => '14',
						],
					],
					'font_weight' => [
						'default' => '800',
					],
					'line_height' => [
						'default' => [
							'unit' => 'px',
							'size' => '18',
						],
					],
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_hours',
			[
				'label' => __('Demo Hours Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#2C2F33',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-time' => 'color: {{obpress_custom_demo_bot_hours}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_spa_bot_info_date_hours_typography',
				'label' => __('Date Hours Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-top-holder .obpress-spa-top-time',
				'fields_options' => [
					'typography' => [
						'default' => 'yes'
					],
					'font_family' => [
						'default' => 'Montserrat',
					],
					'font_size' => [
						'default' => [
							'unit' => 'px',
							'size' => '14',
						],
					],
					'font_weight' => [
						'default' => '400',
					],
					'line_height' => [
						'default' => [
							'unit' => 'px',
							'size' => '18',
						],
					],
				],
			]
		);

		$this->add_responsive_control(
			'obpress_spa_bot_info_date_title_margin',
			[
				'label' => __( 'Date Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '11',
					'left' => '0',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '11',
					'left' => '0',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-time' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'obpress_custom_demo_bot_button_section',
			[
				'label' => __('Button', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_button_background_color',
			[
				'label' => __('Background Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-button' => 'background-color: {{obpress_custom_demo_bot_button_background_color}}'
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_button_text_color',
			[
				'label' => __('Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#fff',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-button' => 'color: {{obpress_custom_demo_bot_button_text_color}}'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_demo_bot_button_typography',
				'label' => __('Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-top-holder .obpress-spa-top-widget-button',
				'fields_options' => [
					'typography' => [
						'default' => 'yes'
					],
					'font_family' => [
						'default' => 'Montserrat',
					],
					'font_size' => [
						'default' => [
							'unit' => 'px',
							'size' => '14',
						],
					],
					'font_weight' => [
						'default' => '700',
					],
					'letter_spacing' => [
						'default' => [
							'unit' => 'px',
							'size' => '2.8',
						],
					],
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_button_margin',
			[
				'label' => __( 'Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '27',
					'right' => '0',
					'bottom' => '0',
					'left' => '0',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '27',
					'right' => '0',
					'bottom' => '0',
					'left' => '0',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-button' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_button_padding',
			[
				'label' => __( 'Padding', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '15',
					'right' => '35.5',
					'bottom' => '15',
					'left' => '35.5',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '15',
					'right' => '35.5',
					'bottom' => '15',
					'left' => '35.5',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_button_alignment',
			[
				'label' => __( 'Alignment', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'flex-start' => [
						'title' => __( 'Left', 'OBPress_Demo_Widgets' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'OBPress_Demo_Widgets' ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => __( 'Right', 'OBPress_Demo_Widgets' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => 'center',
				'mobile_default' => 'center',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-button' => 'align-self: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => __('Border', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-top-holder .obpress-spa-top-widget-button',
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_button_background_hover_color',
			[
				'label' => __('Background Hover Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-button:hover' => 'background-color: {{obpress_custom_demo_bot_button_background_color}}'
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_button_text_hover_color',
			[
				'label' => __('Hover Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#fff',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-button:hover' => 'color: {{obpress_custom_demo_bot_button_text_color}}'
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_button_hover_transition',
			[
				'label' => __( 'Transition', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'size' => 0.3,
				],
				'mobile_default' => [
					'size' => 0.3,
				],
				'range' => [
					'px' => [
						'max' => 3,
						'step' => 0.1,
					],
				],
				'render_type' => 'ui',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-button' => 'transition: {{SIZE}}s',
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_button_button_width',
			[
				'label' => esc_html__( 'Custom Width', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'OBPress_Demo_Widgets' ),
				'label_off' => esc_html__( 'Hide', 'OBPress_Demo_Widgets' ),
				'return_value' => 'custom_width',
				'default' => '',
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_button_width',
			[
				'label' => __( 'Button Width', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 100,
						'step' => 1,
					],
				],
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'unit' => '%',
					'size' => 100,
				],
				'mobile_default' => [
					'unit' => '%',
					'size' => 100,
				],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-widget-button' => 'width: {{SIZE}}%',
				],
				'condition' => [
					'obpress_custom_demo_bot_button_button_width' => 'custom_width',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'overlay_section',
			[
				'label' => __('Overlay', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_overlay_opacity_control',
			[
				'label' => __('Hotels Overlay Opacity', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['opacity'],
				'range' => [
					'opacity' => [
						'min' => 0,
						'max' => 1,
						'step' => 0.01,
					]
				],
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'unit' => 'opacity',
					'size' => 0.38,
				],
				'mobile_default' => [
					'unit' => 'opacity',
					'size' => 0.38,
				],
				'selectors' => [
					'.obpress-spa-top-swiper .obpress-swiper-overlay' => 'background-color: rgba(0, 0, 0, {{SIZE}})',
				],				
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_overlay_transition_control',
			[
				'label' => __('Hotels Overlay Transition(s)', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['seconds'],
				'range' => [
					'seconds' => [
						'min' => 0,
						'max' => 1,
						'step' => 0.05,
					]
				],
				'default' => [
					'unit' => 'seconds',
					'size' => 0.2,
				],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-swiper .obpress-swiper-overlay' => '-webkit-transition: opacity {{SIZE}}s ease-in',
				],				
			]
		);
		
		$this->add_control(
			'obpress_custom_demo_bot_overlay_text_color',
			[
				'label' => __('Text Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#fff',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-swiper .obpress-swiper-overlay h4, .obpress-spa-top-holder .obpress-swiper-overlay p' => 'color: {{obpress_custom_demo_bot_overlay_text_color}}'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_demo_bot_overlay_title_typography',
				'label' => __('Title Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-top-holder .obpress-spa-top-swiper .obpress-swiper-overlay h4',
				'fields_options' => [
					'typography' => [
						'default' => 'yes'
					],
					'font_family' => [
						'default' => 'Montserrat',
					],
					'font_size' => [
						'default' => [
							'unit' => 'px',
							'size' => '16',
						],
					],
					'font_weight' => [
						'default' => '700',
					],
					'letter_spacing' => [
						'default' => [
							'unit' => 'px',
							'size' => '3.2',
						],
					],
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_demo_bot_overlay_hotel_name_typography',
				'label' => __('Hotel Name Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-top-holder .obpress-swiper-overlay p',
				'fields_options' => [
					'typography' => [
						'default' => 'yes'
					],
					'font_family' => [
						'default' => 'Montserrat',
					],
					'font_size' => [
						'default' => [
							'unit' => 'px',
							'size' => '16',
						],
					],
					'font_weight' => [
						'default' => '500',
					],
					'letter_spacing' => [
						'default' => [
							'unit' => 'px',
							'size' => '-0.48',
						],
					],
					'font-style' => [
						'default' => 'italic',
					]
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'slider_section',
			[
				'label' => __('Slider', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_slides_per_view',
			[
				'label' => __('Slides Per View', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['slides'],
				'range' => [
					'slides' => [
						'min' => 1,
						'max' => 10,
						'step' => 0.1,
					]
				],
				'default' => [
					'unit' => 'slides',
					'size' => 1,
				]
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_slide_pagination',
			[
				'label' => __( 'Pagination', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => 'lines',
				'mobile_default' => 'lines',
				'options' => [
					'lines'  => __( 'Lines', 'OBPress_Demo_Widgets' ),
					'bullets' => __( 'Bullets', 'OBPress_Demo_Widgets' ),
					'disabled' => __( 'Disabled', 'OBPress_Demo_Widgets')
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_pagination_bullet_color',
			[
				'label' => __('Pagination Bullet Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-top-widget-gallery .swiper-pagination-bullet' => 'background: {{obpress_custom_demo_bot_pagination_bullet_color}}'
				],
			]
		);		

		$this->add_control(
			'obpress_custom_demo_bot_pagination_bullet_back_icon',
			[
				'label' => __( 'Back Icon', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_pagination_bullet_back_icon_margin',
			[
				'label' => __( 'Back Icon Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '0',
					'right' => '65',
					'bottom' => '0',
					'left' => '0',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '0',
					'right' => '65',
					'bottom' => '0',
					'left' => '0',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-swiper-nav .swiper-button-prev' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_pagination_bullet_next_icon',
			[
				'label' => __( 'Next Icon', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_pagination_bullet_next_icon_margin',
			[
				'label' => __( 'Next Icon Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '0',
					'left' => '65',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '0',
					'left' => '65',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-swiper-nav .swiper-button-next' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_pagination_margin',
			[
				'label' => __( 'Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '0',
					'right' => '10',
					'bottom' => '0',
					'left' => '0',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '0',
					'right' => '10',
					'bottom' => '0',
					'left' => '0',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-swiper-nav .swiper-pagination-bullet' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_pagination_active_width',
			[
				'label' => __( 'Active Pagination Width', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 100,
						'step' => 1,
					],
				],
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'unit' => 'px',
					'size' => 30,
				],
				'mobile_default' => [
					'unit' => 'px',
					'size' => 30,
				],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-swiper-nav .lines .swiper-pagination-bullet-active' => 'width: {{SIZE}}px!important',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_pagination_width',
			[
				'label' => __( 'Pagination Width', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 100,
						'step' => 1,
					],
				],
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'mobile_default' => [
					'unit' => 'px',
					'size' => 20,
				],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-swiper-nav .lines .swiper-pagination-bullet' => 'width: {{SIZE}}px',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_pagination_height',
			[
				'label' => __( 'Pagination Height', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 100,
						'step' => 1,
					],
				],
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'unit' => 'px',
					'size' => 8,
				],
				'mobile_default' => [
					'unit' => 'px',
					'size' => 8,
				],
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-swiper-nav .lines .swiper-pagination-bullet' => 'height: {{SIZE}}px',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_demo_bot_pagination_alignment',
			[
				'label' => __( 'Pagination Horizontal Align', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'flex-start' => [
						'title' => __( 'Left', 'OBPress_Demo_Widgets' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'OBPress_Demo_Widgets' ),
						'icon' => 'eicon-text-align-center',
					],
					'flex-end' => [
						'title' => __( 'Right', 'OBPress_Demo_Widgets' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => 'center',
				'mobile_default' => 'center',
				'selectors' => [
					'.obpress-spa-top-holder .obpress-spa-top-swiper-nav' => 'justify-content: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		$prevIcon = "url('../icons/back.svg')";
		$nextIcon = "url('../icons/next.svg')";


		if(isset($settings['obpress_custom_demo_bot_pagination_bullet_back_icon']['value']['url']) && !empty($settings['obpress_custom_demo_bot_pagination_bullet_back_icon']['value']['url'])) {
			$prevIcon = $settings['obpress_custom_demo_bot_pagination_bullet_back_icon']['value']['url'];
		}

		if(isset($settings['obpress_custom_demo_bot_pagination_bullet_next_icon']['value']['url']) && !empty($settings['obpress_custom_demo_bot_pagination_bullet_next_icon']['value']['url'])){
			$nextIcon = $settings['obpress_custom_demo_bot_pagination_bullet_next_icon']['value']['url'];
		}

		$pagination_type = $settings['obpress_custom_demo_bot_slide_pagination'];

		require_once(WP_PLUGIN_DIR . '/OBPress_Demo_Widgets/widgets/assets/templates/demo-info-slider.php');
	}
}

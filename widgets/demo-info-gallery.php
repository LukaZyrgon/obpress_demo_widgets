<?php

class Demo_Info_Gallery extends \Elementor\Widget_Base
{
	public function __construct($data = [], $args = null) {
		parent::__construct($data, $args);
		wp_register_script( 'demo_info_gallery_js',  plugins_url( '/OBPress_Demo_Widgets/widgets/assets/js/demo-info-gallery.js'), [ 'elementor-frontend' ], '1.0.0', true );
		wp_register_style( 'demo_info_gallery_css', plugins_url( '/OBPress_Demo_Widgets/widgets/assets/css/demo-info-gallery.css') );                 
	}

	public function get_script_depends()
	{
		return ['demo_info_gallery_js'];
	}

	public function get_style_depends()
	{
		return ['demo_info_gallery_css'];
	}

	public function get_name()
	{
		return 'SpaTop';
	}

	public function get_title()
	{
		return __('Spa Top', 'OBPress_Demo_Widgets');
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
			'gallery_section',
			[
				'label' => __('Slider Gallery', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'obpress_custom_slider_top_gallery',
			[
				'label' => __('Slider Image', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'obpress_custom_slider_top',
			[
				'label' => __( 'Slider Images', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'obpress_custom_slider_top_title' => __( 'Image', 'OBPress_Demo_Widgets' ),
						'list_content' => __( 'Image. Click the edit button to change image.', 'OBPress_Demo_Widgets' ),
					],
					[
						'obpress_custom_slider_top_title' => __( 'Image', 'OBPress_Demo_Widgets' ),
						'list_content' => __( 'Image. Click the edit button to change image.', 'OBPress_Demo_Widgets' ),
					],
					[
						'obpress_custom_slider_top_title' => __( 'Image', 'OBPress_Demo_Widgets' ),
						'list_content' => __( 'Image. Click the edit button to change image.', 'OBPress_Demo_Widgets' ),
					]										
				],
				'title_field' => '{{{ obpress_custom_slider_top_title }}}',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'demo_type_section',
			[
				'label' => __('Demo Type', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'obpress_custom_demo_type',
			[
				'label' => __('Demo Type', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Demo Type', 'OBPress_Demo_Widgets'),
				'placeholder' => __('Type your type here', 'OBPress_Demo_Widgets'),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_demo_type_typography',
				'label' => __('Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-offer-holder-title p',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'demo_title_section',
			[
				'label' => __('Demo Title', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'obpress_custom_demo_title',
			[
				'label' => __('Demo Title', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Demo Title', 'OBPress_Demo_Widgets'),
				'placeholder' => __('Type your title here', 'OBPress_Demo_Widgets'),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_demo_title_typography',
				'label' => __('Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-offer-holder-title h2',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'demo_description_section',
			[
				'label' => __('Demo Description', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'obpress_custom_demo_description',
			[
				'label' => __('Demo Description', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __('Demo Description', 'OBPress_Demo_Widgets'),
				'placeholder' => __('Type your description here', 'OBPress_Demo_Widgets'),
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_demo_description_typography',
				'label' => __('Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-offer-holder-description',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'demo_button_section',
			[
				'label' => __('Demo Button', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'obpress_custom_button_content',
			[
				'label' => __('Demo Button', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __('Demo Button', 'OBPress_Demo_Widgets'),
				'placeholder' => __('Type your button content here', 'OBPress_Demo_Widgets'),
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'obpress_custom_slider_top_info_section',
			[
				'label' => __('Info Section', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'obpress_custom_slider_top_info_section_width',
			[
				'label' => __( 'Info Width', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'range' => [
					'%' => [
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
					'.obpress-spa-offer-holder .obpress-spa-offer-holder-title' => 'width: {{SIZE}}%',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'obpress_custom_slider_top_info_content_section',
			[
				'label' => __('Content Section', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_type_color',
			[
				'label' => __('Type Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#777777',
				'selectors' => [
					'.obpress-spa-offer-holder .obpress-spa-offer-holder-type' => 'color: {{obpress_custom_slider_top_type_color}}',
				],
			]
		);	
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_slider_top_type_typography',
				'label' => __('Type Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-offer-holder .obpress-spa-offer-holder-type',
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
					'letter_spacing' => [
						'default' => [
							'unit' => 'px',
							'size' => '3.2',
						],
					],
					'line_height' => [
						'default' => [
							'unit' => 'px',
							'size' => '26',
						],
					],
					'text_transform' => [
						'default' => 'uppercase',
					],
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_slider_top_type_margin',
			[
				'label' => __( 'Location Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '50',
					'right' => '0',
					'bottom' => '16',
					'left' => '0',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '50',
					'right' => '0',
					'bottom' => '16',
					'left' => '0',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-offer-holder .obpress-spa-offer-holder-type' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_title_color',
			[
				'label' => __('Title Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000000',
				'selectors' => [
					'.obpress-spa-offer-holder .obpress-spa-offer-holder-title h2' => 'color: {{obpress_custom_slider_top_title_color}}',
				],
			]
		);	
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_slider_top_title_typography',
				'label' => __('Title Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-offer-holder .obpress-spa-offer-holder-title h2',
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
							'size' => '40',
						],
					],
					'font_weight' => [
						'default' => '700',
					],
					'line_height' => [
						'default' => [
							'unit' => 'px',
							'size' => '55',
						],
					],
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_slider_top_title_margin',
			[
				'label' => __( 'Title Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '94',
					'left' => '0',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '94',
					'left' => '0',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-offer-holder .obpress-spa-offer-holder-title h2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_description_color',
			[
				'label' => __('Description Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000000',
				'selectors' => [
					'.obpress-spa-offer-holder .obpress-spa-offer-holder-description' => 'color: {{obpress_custom_slider_top_description_color}}',
				],
			]
		);	
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_slider_top_description_typography',
				'label' => __('Description Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-offer-holder .obpress-spa-offer-holder-description',
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
					'letter_spacing' => [
						'default' => [
							'unit' => 'px',
							'size' => '0',
						],
					],
					'line_height' => [
						'default' => [
							'unit' => 'px',
							'size' => '30',
						],
					],
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_slider_top_description_margin',
			[
				'label' => __( 'Description Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '75',
					'left' => '0',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '75',
					'left' => '0',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-offer-holder .obpress-spa-offer-holder-description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'obpress_custom_slider_top_button_section',
			[
				'label' => __('Button', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_button_button_width',
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
			'obpress_custom_slider_top_button_width',
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
					'.obpress-spa-offer-holder .obpress-spa-widget-button' => 'width: {{SIZE}}%',
				],
				'condition' => [
					'obpress_custom_slider_top_button_button_width' => 'custom_width',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_slider_top_button_alignment',
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
					'.obpress-spa-offer-holder .obpress-spa-widget-button' => 'align-self: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_button_background_color',
			[
				'label' => __('Background Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-offer-holder .obpress-spa-widget-button' => 'background-color: {{obpress_custom_slider_top_button_background_color}}'
				],
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_button_text_color',
			[
				'label' => __('Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#fff',
				'selectors' => [
					'.obpress-spa-offer-holder .obpress-spa-widget-button' => 'color: {{obpress_custom_slider_top_button_text_color}}'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_slider_top_button_typography',
				'label' => __('Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-offer-holder .obpress-spa-widget-button',
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
			'obpress_custom_slider_top_button_padding',
			[
				'label' => __( 'Padding', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '15',
					'right' => '48',
					'bottom' => '15',
					'left' => '48',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '15',
					'right' => '48',
					'bottom' => '15',
					'left' => '48',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-offer-holder .obpress-spa-widget-button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => __('Border', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-offer-holder .obpress-spa-widget-button',
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_button_background_hover_color',
			[
				'label' => __('Background Hover Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-offer-holder .obpress-spa-widget-button:hover' => 'background-color: {{obpress_custom_slider_top_button_background_hover_color}}'
				],
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_button_text_hover_color',
			[
				'label' => __('Hover Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#fff',
				'selectors' => [
					'.obpress-spa-offer-holder .obpress-spa-widget-button:hover' => 'color: {{obpress_custom_slider_top_button_text_hover_color}}'
				],
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_button_hover_transition',
			[
				'label' => __( 'Transition', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'default' => [
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
					'.obpress-spa-offer-holder .obpress-spa-widget-button' => 'transition: {{SIZE}}s',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'obpress_custom_slider_top_slider_section',
			[
				'label' => __('Slider', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);


		$this->add_control(
			'obpress_custom_slider_top_allow_loop',
			[
				'label' => __('Allow Image Looping', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('On', 'OBPress_Demo_Widgets'),
				'label_off' => __('Off', 'OBPress_Demo_Widgets'),
				'return_value' => 'true',
				'default' => 'true',
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_center_slides',
			[
				'label' => __('Centered Slides', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('On', 'OBPress_Demo_Widgets'),
				'label_off' => __('Off', 'OBPress_Demo_Widgets'),
				'return_value' => 'true',
				'default' => 'true',
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_slides_per_view',
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

		$this->add_control(
			'obpress_custom_slider_top_slider_space_between',
			[
				'label' => __('Space Between Slides', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 10,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 10,
				]
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_slider_transition',
			[
				'label' => __('Slider Transition(seconds)', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['s'],
				'range' => [
					's' => [
						'min' => 0,
						'max' => 5,
						'step' => 0.1,
					]
				],
				'default' => [
					'unit' => 's',
					'size' => 1,
				]
			]
		);

		$this->add_responsive_control(
			'obpress_custom_slider_top_slide_pagination',
			[
				'label' => __('Slider Pagination', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => 'lines',
				'mobile_default' => 'lines',
				'options' => [
					'lines'  => __('Lines', 'OBPress_Demo_Widgets'),
					'bullets' => __('Bullets', 'OBPress_Demo_Widgets'),
					'disabled' => __('Disabled', 'OBPress_Demo_Widgets')
				],
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_pagination_bullet_color',
			[
				'label' => __('Pagination Bullet Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-swiper-nav .swiper-pagination-bullet' => 'background-color: {{obpress_custom_slider_top_pagination_bullet_color}}'
				],
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_pagination_bullet_back_icon',
			[
				'label' => __('Back Icon', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_responsive_control(
			'obpress_custom_slider_top_pagination_bullet_back_icon_margin',
			[
				'label' => __( 'Back Icon Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '0',
					'right' => '80',
					'bottom' => '0',
					'left' => '0',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '0',
					'right' => '80',
					'bottom' => '0',
					'left' => '0',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-offer-holder .obpress-spa-swiper-nav .swiper-button-prev' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_pagination_bullet_next_icon',
			[
				'label' => __('Next Icon', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_responsive_control(
			'obpress_custom_slider_top_pagination_bullet_next_icon_margin',
			[
				'label' => __( 'Next Icon Margin', 'OBPress_Demo_Widgets' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'devices' => [ 'desktop', 'mobile' ],
				'desktop_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '0',
					'left' => '80',
					'isLinked' => false
				],
				'mobile_default' => [
					'top' => '0',
					'right' => '0',
					'bottom' => '0',
					'left' => '80',
					'isLinked' => false
				],
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'.obpress-spa-offer-holder .obpress-spa-swiper-nav .swiper-button-next' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_slider_top_pagination_margin',
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
					'.obpress-spa-offer-holder .obpress-spa-swiper-nav .swiper-pagination-bullet' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_slider_top_pagination_active_width',
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
					'.obpress-spa-offer-holder .obpress-spa-swiper-lines .swiper-pagination-bullet-active' => 'width: {{SIZE}}px!important',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_slider_top_pagination_width',
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
					'.obpress-spa-offer-holder .obpress-spa-swiper-lines .swiper-pagination-bullet' => 'width: {{SIZE}}px',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_slider_top_pagination_height',
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
					'.obpress-spa-offer-holder .obpress-spa-swiper-lines .swiper-pagination-bullet' => 'height: {{SIZE}}px',
				],
			]
		);

		$this->add_responsive_control(
			'obpress_custom_slider_top_pagination_alignment',
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
					'.obpress-spa-offer-holder .obpress-spa-swiper-nav' => 'justify-content: {{VALUE}}',
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

		if (isset($settings['obpress_custom_slider_top_pagination_bullet_back_icon']['value']['url']) && !empty($settings['obpress_custom_slider_top_pagination_bullet_back_icon']['value']['url'])) {
			$prevIcon = $settings['obpress_custom_slider_top_pagination_bullet_back_icon']['value']['url'];
		}

		if (isset($settings['obpress_custom_slider_top_pagination_bullet_next_icon']['value']['url']) && !empty($settings['obpress_custom_slider_top_pagination_bullet_next_icon']['value']['url'])) {
			$nextIcon = $settings['obpress_custom_slider_top_pagination_bullet_next_icon']['value']['url'];
		}

		require_once(WP_PLUGIN_DIR . '/OBPress_Demo_Widgets/widgets/assets/templates/demo-info-gallery.php');
	}
}

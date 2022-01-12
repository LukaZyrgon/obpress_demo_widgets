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
		return __('Spa Bot', 'plugin-name');
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
				'label' => __('Content', 'OBPress_Spa_widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'obpress_custom_demo_bot_location', [
				'label' => __( 'Demo Location', 'OBPress_Spa_widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Demo Location' , 'OBPress_Spa_widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'obpress_custom_demo_bot_title', [
				'label' => __( 'Demo Title', 'OBPress_Spa_widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Demo Title' , 'OBPress_Spa_widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'obpress_custom_demo_bot_description', [
				'label' => __( 'Demo Description', 'OBPress_Spa_widgets' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'Demo Description' , 'OBPress_Spa_widgets' ),
				'show_label' => false,
			]
		);

		$repeater->add_control(
			'obpress_custom_demo_bot_workdays', [
				'label' => __( 'Demo Worday Hours', 'OBPress_Spa_widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Demo Worday Hours' , 'OBPress_Spa_widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'obpress_custom_demo_bot_weekends', [
				'label' => __( 'Demo Weekend Hours', 'OBPress_Spa_widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Demo Weekend Hours' , 'OBPress_Spa_widgets' ),
				'label_block' => true,
			]
		);		

		$repeater->add_control(
			'obpress_custom_demo_bot_image',
			[
				'label' => __( 'Choose Demo Image', 'OBPress_Spa_widgets' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_demo',
			[
				'label' => __( 'Demo', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'obpress_custom_demo_bot_title' => __( 'Demo', 'plugin-domain' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
					],
					[
						'obpress_custom_demo_bot_title' => __( 'Demo', 'plugin-domain' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
					],
					[
						'obpress_custom_demo_bot_title' => __( 'Demo', 'plugin-domain' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
					]										
				],
				'title_field' => '{{{ obpress_custom_demo_bot_title }}}',
			]
		);


		$this->end_controls_section();


		$this->start_controls_section(
			'colors_section',
			[
				'label' => __('Colors', 'plugin-name'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_content_background',
			[
				'label' => __('Demo Content Background Color', 'OBPress_Spa_widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#fff',
				'selectors' => [
					'.obpress-spa-top-widget-info' => 'background-color: {{obpress_custom_demo_bot_content_background}}',
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_content_location',
			[
				'label' => __('Demo Location Color', 'OBPress_Spa_widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-top-widget-info h4' => 'color: {{obpress_custom_demo_bot_content_location}}',
				],
			]
		);			

		$this->add_control(
			'obpress_custom_demo_bot_content_title',
			[
				'label' => __('Demo Title Color', 'OBPress_Spa_widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-top-widget-info h3' => 'color: {{obpress_custom_demo_bot_content_title}}',
				],
			]
		);	

		$this->add_control(
			'obpress_custom_demo_bot_content_desc',
			[
				'label' => __('Demo Description Color', 'OBPress_Spa_widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#777777',
				'selectors' => [
					'.obpress-spa-top-description' => 'color: {{obpress_custom_demo_bot_content_desc}}',
					'.obrpress-spa-top-time-title' => 'color: {{obpress_custom_demo_bot_content_desc}}'
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_content_line',
			[
				'label' => __('Demo Line Color', 'OBPress_Spa_widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#fff',
				'selectors' => [
					'.obpress-spa-top-line' => 'background-color: {{obpress_custom_demo_bot_content_line}}',
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_days',
			[
				'label' => __('Demo Days Color', 'OBPress_Spa_widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#2C2F33',
				'selectors' => [
					'.obpress-spa-top-time strong' => 'color: {{obpress_custom_demo_bot_days}}',
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_hours',
			[
				'label' => __('Demo Hours Color', 'OBPress_Spa_widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#2C2F33',
				'selectors' => [
					'.obpress-spa-top-time' => 'color: {{obpress_custom_demo_bot_hours}}',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'obpress_custom_demo_bot_button_section',
			[
				'label' => __('Button', 'OBPress_Spa_widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_button_background_color',
			[
				'label' => __('Button Background Color', 'OBPress_Spa_widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-top-widget-button' => 'background-color: {{obpress_custom_demo_bot_button_background_color}}'
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_button_text_color',
			[
				'label' => __('Button Text Color', 'OBPress_Spa_widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#fff',
				'selectors' => [
					'.obpress-spa-top-widget-button' => 'color: {{obpress_custom_demo_bot_button_text_color}}'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_slider_top_typography',
				'label' => __('Typography', 'OBPress_Spa_widgets'),
				'selector' => '.obpress-spa-top-widget-button',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => __('Border', 'OBPress_Spa_widgets'),
				'selector' => '.obpress-spa-top-widget-button',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'obpress_custom_demo_bot_typography',
			[
				'label' => __('Typography', 'OBPress_Spa_widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_demo_bot_location',
				'label' => __('Demo Location Typography', 'OBPress_Spa_widgets'),
				'selector' => '.obpress-spa-top-widget-info h4',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_demo_bot_title',
				'label' => __('Demo Title Typography', 'OBPress_Spa_widgets'),
				'selector' => '.obpress-spa-top-widget-info h3',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_demo_bot_desc',
				'label' => __('Demo Description Typography', 'OBPress_Spa_widgets'),
				'selector' => '.obpress-spa-top-description',
			]
		);		

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_demo_bot_time_title',
				'label' => __('Demo Time Title Typography', 'OBPress_Spa_widgets'),
				'selector' => '.obrpress-spa-top-time-title',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_demo_bot_days',
				'label' => __('Demo Days Typography', 'OBPress_Spa_widgets'),
				'selector' => '.obpress-spa-top-time strong',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_demo_bot_hours',
				'label' => __('Demo Hours Typography', 'OBPress_Spa_widgets'),
				'selector' => '.obpress-spa-top-time',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'overlay_section',
			[
				'label' => __('Overlay', 'plugin-name'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_overlay_opacity_control',
			[
				'label' => __('Hotels Overlay Opacity', 'OBPress_Spa_widgets'),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => ['opacity'],
				'range' => [
					'opacity' => [
						'min' => 0,
						'max' => 1,
						'step' => 0.01,
					]
				],
				'default' => [
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
				'label' => __('Hotels Overlay Transition(s)', 'OBPress_Spa_widgets'),
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
					'.obpress-spa-top-swiper .obpress-swiper-overlay' => '-webkit-transition: opacity {{SIZE}}s ease-in',
				],				
			]
		);		

		// $this->add_control(
		// 	'obpress_hotels_link_color',
		// 	[
		// 		'label' => __('Hotel Link Color', 'OBPress_Hotels'),
		// 		'type' => \Elementor\Controls_Manager::COLOR,
		// 		'input_type' => 'color',
		// 		'default' => '#000',
		// 		'selectors' => [
		// 			'.obpress-hotels-link' => 'color: {{obpress_hotels_box_text_color}}',
		// 		],
		// 	]
		// );

		$this->end_controls_section();

		$this->start_controls_section(
			'slider_section',
			[
				'label' => __('Slider', 'OBPress_Spa_widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_slide_pagination',
			[
				'label' => __( 'Pagination', 'OBPress_SearchBarPlugin' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'lines',
				'options' => [
					'lines'  => __( 'Lines', 'plugin-domain' ),
					'bullets' => __( 'Bullets', 'plugin-domain' ),
					'disabled' => __( 'Disabled', 'plugin-domain')
				],
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_pagination_bullet_color',
			[
				'label' => __('Pagination Bullet Color', 'OBPress_SpecialOffers'),
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
				'label' => __( 'Back Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'obpress_custom_demo_bot_pagination_bullet_next_icon',
			[
				'label' => __( 'Next Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
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

		// check which page it is
		global $wp;
    	$current_url = $wp->request;

		require_once(WP_PLUGIN_DIR . '/OBPress_Demo_Widgets/widgets/assets/templates/demo-info-slider.php');
	}
}

<?php

class Demo_Interest_Slider extends \Elementor\Widget_Base
{
	public function __construct($data = [], $args = null) {
		parent::__construct($data, $args);

		wp_register_script( 'demo_interest_slider_js',  plugins_url( '/OBPress_Demo_Widgets/widgets/assets/js/demo-interest-slider.js'), [ 'elementor-frontend' ], '1.0.0', true );

		wp_register_style( 'demo_interest_slider_css', plugins_url( '/OBPress_Demo_Widgets/widgets/assets/css/demo-interest-slider.css') );           
	}

	public function get_script_depends()
	{
		return ['demo_interest_slider_js'];
	}

	public function get_style_depends()
	{
		return ['demo_interest_slider_css'];
	}

	public function get_name()
	{
		return 'DemoInterestSlider';
	}

	public function get_title()
	{
		return __('Demo Interest Slider', 'plugin-name');
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
			'obpress_interest_slider_title', [
				'label' => __( 'Slider Title', 'OBPress_Spa_widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Slider Title' , 'OBPress_Spa_widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'obpress_interest_slider_description', [
				'label' => __( 'Slider Description', 'OBPress_Spa_widgets' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
				'default' => __( 'Slider Description' , 'OBPress_Spa_widgets' ),
				'show_label' => false,
			]
		);

		$repeater->add_control(
			'obpress_interest_link_text', [
				'label' => __( 'Slider Link Text', 'OBPress_Spa_widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Slider Link Text' , 'OBPress_Spa_widgets' ),
				'label_block' => true,
			]
		);		

		$repeater->add_control(
			'obpress_interest_link', [
				'label' => __( 'Slider Link', 'OBPress_Spa_widgets' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Slider Link' , 'OBPress_Spa_widgets' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'obpress_interest_image',
			[
				'label' => __( 'Choose Interest Image', 'OBPress_Spa_widgets' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'obpress_interest_slider_content',
			[
				'label' => __( 'Interest Slider', 'plugin-domain' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'obpress_interest_slider_title' => __( 'Test Title1', 'plugin-domain' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
					],
					[
						'obpress_interest_slider_title' => __( 'Test Title2', 'plugin-domain' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
					],
					[
						'obpress_interest_slider_title' => __( 'Test Title3', 'plugin-domain' ),
						'list_content' => __( 'Item content. Click the edit button to change this text.', 'plugin-domain' ),
					]								
				],
				'title_field' => '{{{ obpress_interest_slider_title }}}',
			]
		);


		$this->end_controls_section();
		$this->start_controls_section(
			'obpress_interest_slider_section',
			[
				'label' => __('Slider', 'OBPress_SpecialOffers'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);


		$this->add_control(
			'obpress_interest_allow_loop',
			[
				'label' => __('Allow Image Looping', 'OBPress_SpecialOffers'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('On', 'OBPress_SpecialOffers'),
				'label_off' => __('Off', 'OBPress_SpecialOffers'),
				'return_value' => 'true',
				'default' => 'true',
			]
		);

		$this->add_control(
			'obpress_interest_center_slides',
			[
				'label' => __('Centered Slides', 'OBPress_SpecialOffers'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('On', 'OBPress_SpecialOffers'),
				'label_off' => __('Off', 'OBPress_SpecialOffers'),
				'return_value' => 'true',
				'default' => 'true',
			]
		);

		$this->add_control(
			'obpress_interest_slides_per_view',
			[
				'label' => __('Slides Per View Desktop', 'OBPress_SpecialOffers'),
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
					'size' => 2.7,
				]
			]
		);

		$this->add_control(
			'obpress_interest_slides_per_view_mobile',
			[
				'label' => __('Slides Per View Mobile', 'OBPress_SpecialOffers'),
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
					'size' => 1.4,
				]
			]
		);

		$this->add_control(
			'obpress_interest_slider_space_between',
			[
				'label' => __( 'Space Between Slides Desktop', 'OBPress_SpecialOffers' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 10,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 40,
				]
			]
		);

		$this->add_control(
			'obpress_interest_slider_space_between_mobile',
			[
				'label' => __( 'Space Between Slides Mobile', 'OBPress_SpecialOffers' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 11,
				]
			]
		);

		$this->add_control(
			'obpress_interest_slider_transition',
			[
				'label' => __( 'Slider Transition(seconds)', 'OBPress_SearchBarPlugin' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 's'],
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

		$this->add_control(
			'obpress_interest_slide_pagination',
			[
				'label' => __( 'Slider Pagination', 'OBPress_SearchBarPlugin' ),
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
			'obpress_interest_number_of_slides',
			[
				'label' => __( 'Number of Pagination Bullets', 'OBPress_SearchBarPlugin' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '5',
				'options' => [
					'2'  => __( '2', 'plugin-domain' ),
					'3' => __( '3', 'plugin-domain' ),
					'4' => __( '4', 'plugin-domain'),
					'5' => __( '5', 'plugin-domain')
				],
			]
		);

		$this->add_control(
			'obpress_interest_pagination_bullet_color',
			[
				'label' => __('Pagination Bullet Color', 'OBPress_SpecialOffers'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-swiper-nav .swiper-pagination-bullet' => 'background-color: {{obpress_interest_pagination_bullet_color}}'
				],
			]
		);

		$this->add_control(
			'obpress_interest_pagination_bullet_back_icon',
			[
				'label' => __( 'Back Icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
			]
		);

		$this->add_control(
			'obpress_interest_pagination_bullet_next_icon',
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
		// var_dump($settings);
		require_once(WP_PLUGIN_DIR . '/OBPress_Demo_Widgets/widgets/assets/templates/demo-interest-slider.php');
	}
}

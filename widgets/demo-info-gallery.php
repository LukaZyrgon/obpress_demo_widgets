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

		$this->add_control(
			'obpress_custom_slider_top_gallery',
			[
				'label' => __('Slider Images', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::GALLERY,
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
			'color_section',
			[
				'label' => __('Colors', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_type_color',
			[
				'label' => __('Demo Type Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#777777',
				'selectors' => [
					'.obpress-spa-offer-holder-title p' => 'color: {{obpress_so_box_ribbon_background_color}}',
				],
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_title_color',
			[
				'label' => __('Demo Title Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-offer-holder-title h2' => 'color: {{obpress_custom_slider_top_title_color}}',
				],
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_description_color',
			[
				'label' => __('Demo Description Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-offer-holder-description' => 'color: {{obpress_custom_slider_top_description_color}}',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'typography_section',
			[
				'label' => __('Typography', 'OBPress_Demo_Widgets'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'so_buttons_typography',
				'label' => __('Demo Type', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-offer-holder-title p',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'so_buttons_typography',
				'label' => __('Demo Title', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-offer-holder-title h2',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'so_buttons_typography',
				'label' => __('Demo Title', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-offer-holder-description',
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
			'obpress_custom_slider_top_button_background_color',
			[
				'label' => __('Button Background Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#000',
				'selectors' => [
					'.obpress-spa-widget-button' => 'background-color: {{obpress_so_button_background_color}}'
				],
			]
		);

		$this->add_control(
			'obpress_custom_slider_top_button_text_color',
			[
				'label' => __('Button Text Color', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'input_type' => 'color',
				'default' => '#fff',
				'selectors' => [
					'.obpress-spa-widget-button' => 'color: {{obpress_so_button_text_color}}'
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'obpress_custom_slider_top_typography',
				'label' => __('Typography', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-widget-button',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => __('Border', 'OBPress_Demo_Widgets'),
				'selector' => '.obpress-spa-widget-button',
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

		$this->add_control(
			'obpress_custom_slider_top_slide_pagination',
			[
				'label' => __('Slider Pagination', 'OBPress_Demo_Widgets'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'lines',
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

		$this->add_control(
			'obpress_custom_slider_top_pagination_bullet_next_icon',
			[
				'label' => __('Next Icon', 'OBPress_Demo_Widgets'),
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

		if (isset($settings['obpress_custom_slider_top_pagination_bullet_back_icon']['value']['url']) && !empty($settings['obpress_custom_slider_top_pagination_bullet_back_icon']['value']['url'])) {
			$prevIcon = $settings['obpress_custom_slider_top_pagination_bullet_back_icon']['value']['url'];
		}

		if (isset($settings['obpress_custom_slider_top_pagination_bullet_next_icon']['value']['url']) && !empty($settings['obpress_custom_slider_top_pagination_bullet_next_icon']['value']['url'])) {
			$nextIcon = $settings['obpress_custom_slider_top_pagination_bullet_next_icon']['value']['url'];
		}

		require_once(WP_PLUGIN_DIR . '/OBPress_Demo_Widgets/widgets/assets/templates/demo-info-gallery.php');
	}
}

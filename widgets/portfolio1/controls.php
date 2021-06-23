<?php

namespace JhakkasElements\Widgets;
use Elementor\Widget_Base;

    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    }

class jhakkas_portfolio1 extends Widget_Base {

    public function get_name() {
        return 'jhakkas-portfolio1';
    }

    public function get_title() {
        return esc_html__('Jhakkas Portfolio 1', 'jhakkas');
    }

    public function get_icon() {
        return 'eicon-meta-data';
    }

    public function get_categories() {
        return array('jhakkas-elements');
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'tc',
            [
                'label' => esc_html__( 'Service Content', 'jhakkas' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Product Engineering', 'jhakkas' ),
                'placeholder' => esc_html__( 'Type service title', 'jhakkas' ),
            ]
        );
        $this->add_control(
            'photo', [
                'label' => esc_html__( 'Photo', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'url',
            [
                'label' => esc_html__( 'Link', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'btn',
            [
                'label' => esc_html__( 'Button', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'Check now', 'jhakkas' ),
                'placeholder' => esc_html__( 'Type portfolio button title', 'jhakkas' ),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'ts',
            [
                'label' => esc_html__( 'Style', 'jhakkas' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'img_size',
            [
                'label' => esc_html__('Image size', 'jhakkas'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'label_block' => true,
                'options' =>  jhakkas_image_sizes(),
                'multiple' => false,
            ]
        );
        $this->add_responsive_control(
            'wrapper_width',
            [
                'label' => esc_html__( 'Wrapper Width', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .portfolio-layout1' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'wrapper_height',
            [
                'label' => esc_html__( 'Wrapper Height', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .portfolio-layout1' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'tt',
                'label' =>   esc_html__( 'Title Typography', 'jhakkas' ),
                'selector' => '{{WRAPPER}} .portfolio-layout1 .portfolio1-title',
            ]
        );

        $this->add_control(
            'ttc',
            [
                'label' =>   esc_html__( 'Title Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .portfolio-layout1 .portfolio1-title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btt',
                'label' =>   esc_html__( 'Button Typography', 'jhakkas' ),
                'selector' => '{{WRAPPER}} .portfolio-layout1 .portfolio1-btn a',
            ]
        );

        $this->add_control(
            'btc',
            [
                'label' =>   esc_html__( 'Button Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .portfolio-layout1 .portfolio1-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $normal_selector = '{{WRAPPER}} .portfolio-layout1 .portfolio-box3';
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'box_shadow',
                'label' => esc_html__( 'Box Shadow', 'jhakkas' ),
                'selector' => $normal_selector,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'ab_background',
                'label' => esc_html__( 'Background', 'jhakkas' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => $normal_selector,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'ab_border',
                'label' => esc_html__( 'Border', 'jhakkas' ),
                'selector' => $normal_selector,
            ]
        );
        $this->add_responsive_control(
            'border_radius',
            [
                'label' => esc_html__( 'Border Radius', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    $normal_selector => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'padding',
            [
                'label' => esc_html__( 'Padding', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    $normal_selector => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        require dirname(__FILE__) .'/view.php';
    }

}

$widgets_manager->register_widget_type(new \JhakkasElements\Widgets\jhakkas_portfolio1());
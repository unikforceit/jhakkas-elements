<?php

namespace JhakkasElements\Widgets;
use Elementor\Widget_Base;

    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    }

class jhakkas_service2 extends Widget_Base {

    public function get_name() {
        return 'jhakkas-service2';
    }

    public function get_title() {
        return esc_html__('Jhakkas Service 2', 'jhakkas');
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
                'default' => esc_html__( 'Event space', 'jhakkas' ),
                'placeholder' => esc_html__( 'Type service title', 'jhakkas' ),
            ]
        );
        $this->add_control(
            'des',
            [
                'label' => esc_html__( 'Information', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Lorem Ipsum proin gravida nibh vel velit auctor.', 'jhakkas' ),
                'placeholder' => esc_html__( 'Type service information', 'jhakkas' ),
            ]
        );
        $this->add_control(
            'icon',
            [
                'label' => esc_html__( 'Icon', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
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
                'default' => esc_html__( '+', 'jhakkas' ),
                'placeholder' => esc_html__( 'Type service button title', 'jhakkas' ),
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
                    '{{WRAPPER}} .service-layout2 .service-box2' => 'width: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .service-layout2 .service-box2' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs('content_normal');

        $this->start_controls_tab(
            'normal',
            [
                'label' => esc_html__( 'Normal', 'jhakkas' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'tt',
                'label' =>   esc_html__( 'Title Typography', 'jhakkas' ),
                'selector' => '{{WRAPPER}} .service-layout2 .service-box2 .service2-title',
            ]
        );

        $this->add_control(
            'ttc',
            [
                'label' =>   esc_html__( 'Title Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-layout2 .service-box2 .service2-title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'it',
                'label' =>   esc_html__( 'Info Typography', 'jhakkas' ),
                'selector' => '{{WRAPPER}} .service-layout2 .service-box2 .service2-text',
            ]
        );

        $this->add_control(
            'ic',
            [
                'label' =>   esc_html__( 'Info Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-layout2 .service-box2 .service2-text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_size',
            [
                'label' => esc_html__( 'Icon Size', 'jhakkas' ),
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
                    '{{WRAPPER}} .service-layout2 .service-box2 .service2-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .service-layout2 .service-box2 .service2-icon svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'icc',
            [
                'label' =>   esc_html__( 'Icon Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-layout2 .service-box2 .service2-icon i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .service-layout2 .service-box2 .service2-icon svg' => 'fill: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btt',
                'label' =>   esc_html__( 'Button Typography', 'jhakkas' ),
                'selector' => '{{WRAPPER}} .service-layout2 .service-box2 .service2-btn a',
            ]
        );

        $this->add_control(
            'btc',
            [
                'label' =>   esc_html__( 'Button Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-layout2 .service-box2 .service2-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btg',
            [
                'label' =>   esc_html__( 'Button Background', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'bt_background',
                'label' => esc_html__( 'Background', 'jhakkas' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .service-layout2 .service-box2 .service2-btn a',
            ]
        );
        $normal_selector = '{{WRAPPER}} .service-layout2 .service-box2';
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
        $this->end_controls_tab();
        $this->start_controls_tab(
            'hover',
            [
                'label' => esc_html__( 'Hover', 'jhakkas' ),
            ]
        );
        $hover_selector = '{{WRAPPER}} .service-layout2 .service-box2:hover';

        $this->add_control(
            'thtc',
            [
                'label' =>   esc_html__( 'Title Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-layout2 .service-box2:hover .service2-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'ihc',
            [
                'label' =>   esc_html__( 'Info Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-layout2 .service-box2:hover .service2-text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'icch',
            [
                'label' =>   esc_html__( 'Icon Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-layout2 .service-box2:hover .service2-icon i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .service-layout2 .service-box2:hover .service2-icon svg' => 'fill: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'boxh_shadow',
                'label' => esc_html__( 'Box Hover Shadow', 'jhakkas' ),
                'selector' => $hover_selector,
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'abh_background',
                'label' => esc_html__( 'Background', 'jhakkas' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => $hover_selector,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'abh_border',
                'label' => esc_html__( 'Border', 'jhakkas' ),
                'selector' => $hover_selector,
            ]
        );
        $this->add_responsive_control(
            'borderh_radius',
            [
                'label' => esc_html__( 'Border Radius', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    $hover_selector => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'btgh',
            [
                'label' =>   esc_html__( 'Button Background', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'bth_background',
                'label' => esc_html__( 'Background', 'jhakkas' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .service-layout2 .service-box2:hover .service2-btn a',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();
    }

    protected function render() {
        require dirname(__FILE__) .'/view.php';
    }

}

$widgets_manager->register_widget_type(new \JhakkasElements\Widgets\jhakkas_service2());
<?php

namespace JhakkasElements\Widgets;
use Elementor\Widget_Base;

    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    }

class jhakkas_feature1 extends Widget_Base {

    public function get_name() {
        return 'jhakkas-feature1';
    }

    public function get_title() {
        return esc_html__('Jhakkas Feature', 'jhakkas');
    }

    public function get_icon() {
        return 'eicon-meta-data';
    }

    public function get_categories() {
        return array('jhakkas-elements');
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'ffc',
            [
                'label' => esc_html__( 'Flip Front Content', 'jhakkas' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Ui/ Ux Design', 'jhakkas' ),
                'placeholder' => esc_html__( 'Type feature title', 'jhakkas' ),
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
            'des',
            [
                'label' => esc_html__( 'Information', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'We denounce with righteous indignation and dislike men who are so beguiled and demo ralized your data.', 'jhakkas' ),
                'placeholder' => esc_html__( 'Type feature information', 'jhakkas' ),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'ffc2',
            [
                'label' => esc_html__( 'Flip Back Content', 'jhakkas' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title2',
            [
                'label' => esc_html__( 'Title', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Business Intelligence', 'jhakkas' ),
                'placeholder' => esc_html__( 'Type feature title', 'jhakkas' ),
            ]
        );
        $this->add_control(
            'icon2',
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
            'des2',
            [
                'label' => esc_html__( 'Information', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'We denounce with righteous indignation and dislike men who are so beguiled and demo ralized your data.', 'jhakkas' ),
                'placeholder' => esc_html__( 'Type feature information', 'jhakkas' ),
            ]
        );
        $this->add_control(
            'btn',
            [
                'label' => esc_html__( 'Button', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__( 'View more', 'jhakkas' ),
                'placeholder' => esc_html__( 'Type feature button title', 'jhakkas' ),
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
                    '{{WRAPPER}} .flipbox-layout1 .flip-box' => 'width: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .flipbox-layout1 .flip-box' => 'height: {{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .flipbox-layout1 .flip-box-front, 
                    {{WRAPPER}} .flipbox-layout1 .flip-box-back' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->start_controls_tabs('content_normal');

        $this->start_controls_tab(
            'normal',
            [
                'label' => esc_html__( 'Front Box', 'jhakkas' ),
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'tt',
                'label' =>   esc_html__( 'Title Typography', 'jhakkas' ),
                'selector' => '{{WRAPPER}} .flipbox-layout1 .flip-box-title',
            ]
        );

        $this->add_control(
            'ttc',
            [
                'label' =>   esc_html__( 'Title Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .flipbox-layout1 .flip-box-title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'it',
                'label' =>   esc_html__( 'Info Typography', 'jhakkas' ),
                'selector' => '{{WRAPPER}} .flipbox-layout1 .flip-box-text',
            ]
        );

        $this->add_control(
            'ic',
            [
                'label' =>   esc_html__( 'Info Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .flipbox-layout1 .flip-box-text' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .flipbox-layout1 .flip-box-icon i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .flipbox-layout1 .flip-box-icon svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'icc',
            [
                'label' =>   esc_html__( 'Icon Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .flipbox-layout1 .flip-box-icon i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .flipbox-layout1 .flip-box-icon svg' => 'fill: {{VALUE}};',
                ],
            ]
        );
        $normal_selector = '{{WRAPPER}} .flipbox-layout1 .flip-box-front';
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
            'hpadding',
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
                'label' => esc_html__( 'Back Box', 'jhakkas' ),
            ]
        );
        $hover_selector = '{{WRAPPER}} .flipbox-layout1 .flip-box-back';

        $this->add_control(
            'thtc',
            [
                'label' =>   esc_html__( 'Title Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .flipbox-layout1 .flip-box-back .flip-box-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'ihc',
            [
                'label' =>   esc_html__( 'Info Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .flipbox-layout1 .flip-box-back .flip-box-text' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'icch',
            [
                'label' =>   esc_html__( 'Icon Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .flipbox-layout1 .flip-box-back .flip-box-icon i' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .flipbox-layout1 .flip-box-back .flip-box-icon svg' => 'fill: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'btt',
                'label' =>   esc_html__( 'Button Typography', 'jhakkas' ),
                'selector' => '{{WRAPPER}} .flipbox-layout1 .flip-box-btn a',
            ]
        );

        $this->add_control(
            'btc',
            [
                'label' =>   esc_html__( 'Button Color', 'jhakkas' ),
                'type' =>  \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .flipbox-layout1 .flip-box-btn a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'btn_background',
                'label' => esc_html__( 'Background', 'jhakkas' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .flipbox-layout1 .flip-box-btn a',
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
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->end_controls_section();
    }

    protected function render() {
        require dirname(__FILE__) .'/view.php';
    }

}

$widgets_manager->register_widget_type(new \JhakkasElements\Widgets\jhakkas_feature1());
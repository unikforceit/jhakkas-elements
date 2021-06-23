<?php

namespace JhakkasElements\Widgets;
use Elementor\Widget_Base;

    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    }

class jhakkas_team2 extends Widget_Base {

    public function get_name() {
        return 'jhakkas-team2';
    }

    public function get_title() {
        return esc_html__('Jhakkas Team 2', 'jhakkas');
    }

    public function get_icon() {
        return 'eicon-person';
    }

    public function get_categories() {
        return array('jhakkas-elements');
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'tc',
            [
                'label' => esc_html__( 'Team Content', 'jhakkas' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Md Rakibul I.', 'jhakkas' ),
                'placeholder' => esc_html__( 'Type team member title', 'jhakkas' ),
            ]
        );
        $this->add_control(
            'ttc',
            [
                'label' => esc_html__( 'Title Color', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team2-wrapper .team2-title' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttf',
                'label' => esc_html__( 'Title Typography', 'jhakkas' ),
                'selector' => '{{WRAPPER}} .team2-wrapper .team2-title',
            ]
        );
        $this->add_control(
            'des',
            [
                'label' => esc_html__( 'Designation', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__( 'Web Developer', 'jhakkas' ),
                'placeholder' => esc_html__( 'Type team member designation', 'jhakkas' ),
            ]
        );
        $this->add_control(
            'dsc',
            [
                'label' => esc_html__( 'Designation Color', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team2-wrapper .team2-position' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'dst',
                'label' => esc_html__( 'Designation Typography', 'jhakkas' ),
                'selector' => '{{WRAPPER}} .team2-wrapper .team2-position',
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
                'label' => esc_html__( 'Profile Link', 'jhakkas' ),
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
            'icon2',
            [
                'label' => esc_html__( 'Profile Icons', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-plus',
                    'library' => 'solid',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'si',
            [
                'label' => esc_html__( 'Social Icons', 'jhakkas' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__( 'Icon', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fab fa-facebook-f',
                    'library' => 'brand',
                ],
            ]
        );
        $repeater->add_control(
            'link',
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
            'lists',
            [
                'label' => esc_html__( 'Social List', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'prevent_empty' => false,

                'default' => [
                    [
                        'link' => '',
                    ],
                    [
                        'link' => '',
                    ],
                    [
                        'link' => '',
                    ],
                    [
                        'link' => '',
                    ],
                ],
            ]
        );
        $this->add_control(
            'icco',
            [
                'label' => esc_html__( 'Icons Color', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team2-wrapper .team2-social li a' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'ico_bg',
                'label' => esc_html__( 'Icon BG', 'jhakkas' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .team2-wrapper .team2-social',
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
                    '{{WRAPPER}} .team2-wrapper .team2-inner' => 'width: {{SIZE}}{{UNIT}};',
                ],
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
        $this->add_control(
            'nb',
            [
                'label' => esc_html__( 'Background', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'n_bg',
                'label' => esc_html__( 'Hover BG', 'jhakkas' ),
                'types' => [  'classic', 'gradient', 'video' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .team2-wrapper .team2-inner',
            ]
        );
        $this->add_control(
            'hb',
            [
                'label' => esc_html__( 'Hover Background', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::HEADING,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'hover_bg',
                'label' => esc_html__( 'Hover BG', 'jhakkas' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .team2-wrapper .team2-inner:hover',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => esc_html__( 'Border', 'jhakkas' ),
                'selector' => '{{WRAPPER}} .team2-wrapper .team2-inner',
            ]
        );
        $this->add_responsive_control(
            'b_radius',
            [
                'label' => esc_html__( 'Border Radius', 'jhakkas' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .team2-wrapper .team2-inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'shadow',
                'label' => esc_html__( 'Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .team2-wrapper .team2-inner',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'h_shadow',
                'label' => esc_html__( 'Hover Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .team2-wrapper .team2-inner:hover',
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        require dirname(__FILE__) .'/view.php';
    }

}

$widgets_manager->register_widget_type(new \JhakkasElements\Widgets\jhakkas_team2());
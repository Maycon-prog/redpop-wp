<?php

namespace Elementor;

class widget_list_data extends Widget_Base
{

    public function get_name()
    {
        return 'slider'; // nome para usar no código
    }

    public function get_title()
    {
        return 'Slider'; // nome para o usuario
    }

    public function get_icon()
    {
        return 'eicon-editor-list-ul'; // https://elementor.github.io/elementor-icons/
    }

    public function get_categories()
    {
        return ['widgets-personalizados'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => esc_html__('Content', 'elementor'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'list_date',
            [
                'label' => esc_html__('Data', 'elementor'),
                'type' => \Elementor\Controls_Manager::DATE_TIME,
                'default' => esc_html__('2022-01-01 12:00', 'elementor'),
                'label_block' => true,
            ]
        );

        $repeater->add_control(
            'list_event',
            [
                'label' => esc_html__('Evento', 'elementor'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Evento nessa data', 'elementor'),
                'show_label' => true,
            ]
        );

        $this->add_control(
            'list',
            [
                'label' => esc_html__('Repeater List', 'elementor'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'list_date' => esc_html__('01-01-23 12:00', 'elementor'),
                        'list_event' => esc_html__('Evento nesta data'),
                    ],
                    [
                        'list_date' => esc_html__('01-01-23 12:00', 'elementor'),
                        'list_event' => esc_html__('Evento nesta data'),
                    ],
                    [
                        'list_date' => esc_html__('01-01-23 12:00', 'elementor'),
                        'list_event' => esc_html__('Evento nesta data'),
                    ]
                ],
                'title_field' => '{{{ list_event }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        for ($i=0; $i < count($settings['list']); $i++) { 
            $dados = $settings['list'][$i];
            $data = date('d.m.Y', strtotime($dados['list_date']));
            $evento = $dados['list_event'];
            ?>
            <p class="list texto"><b><?=$data?></b> - <span><?=$evento?></span></p>
            <hr class="hr-list">
            <?php
        }
    }

    protected function _content_template()
    {
    }
}

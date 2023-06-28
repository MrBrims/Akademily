<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class PostMeta
{
    public function __construct()
    {
        add_action('carbon_fields_register_fields', [$this, 'defaultPostMeta']);
        add_action('carbon_fields_register_fields', [$this, 'reviewsPostMeta']);
        add_action('carbon_fields_register_fields', [$this, 'requestsPostMeta']);
    }

    public function defaultPostMeta()
    {
        Container::make('post_meta', 'carbon_fields_container_default_post', 'Параметры')
            ->where('post_type', '=', 'post')
            ->add_tab(__('Разделы'), CommonMeta::sectionMeta())
            ->add_tab(__('FAQ'), CommonMeta::faqMeta())
        ;
    }

    public function reviewsPostMeta()
    {
        Container::make('post_meta', 'carbon_fields_container_reviews_post', 'Параметры')
            ->where('post_type', '=', 'reviews')
            ->add_fields([
                Field::make('text', 'de_estimation', __('Оценка'))
                    ->set_attribute('type', 'number'),
            ])
        ;
    }

    public function requestsPostMeta()
    {
        Container::make('post_meta', 'carbon_fields_container_requests_post', 'Параметры')
            ->set_context('carbon_fields_after_title')
            ->where('post_type', '=', 'requests')
            ->add_fields([
                Field::make('select', 'manager', __('Менеджер'))
                    ->set_options([
                        'Без менеджера',
                        'Ангелина К.',
                        'Дарья М.',
                        'Наталья П.',
                        'Ольга Ж.',
                        'Надежда В.',
                        'Ирина Х.',
                        'Александра Г.',
                        'Виктория Р.',
                        'Василина М.',
                        'Андрей Ж.',
                        'Елизавета Л.',
                        'Анастасия Р.',
                        'Дарья А.',
                        'Екатерина Н.',
                        'Кристина Х.',
                        'Миронова Д.'

                    ])
            ])
        ;
    }
}

new PostMeta();
<?php

use Carbon_Fields\Field;

class CommonMeta
{
    public static function globalContact(): array
    {
        return [
            Field::make('text', 'global_phone', __('Телефон'))
                ->set_width(30),
            Field::make('text', 'global_email', __('Почта'))
                ->set_width(30),
            Field::make('text', 'global_whatsapp', __('WhatsApp'))
                ->set_width(30)
        ];
    }

    public static function globalInfo(): array
    {
        return [
            Field::make('text', 'global_time', __('Время работы'))
                ->set_width(50),
            Field::make('text', 'global__adress', __('Адрес'))
                ->set_width(50)
        ];
    }

    public static function globalScripts(): array
    {
        return [
            Field::make('header_scripts', 'header_script', __('Header Script')),
            Field::make('footer_scripts', 'footer_script', __('Footer Script')),
        ];
    }

    public static function globalApiKey(): array
    {
        return [
            Field::make('text', 'telegram_api', __('API Telegram')),
        ];
    }


    public static function faqMeta(): array
    {
        return [
            Field::make('complex', 'de_faq', __('FAQ'))
                ->add_fields([
                    Field::make('text', 'question', __('Вопрос')),
                    Field::make('rich_text', 'answer', __('Ответ')),
                ])
        ];
    }

    public static function reviewsMeta(): array
    {
        return [
            Field::make('association', 'de_reviews', __('Отзывы'))
                ->set_types([
                    [
                        'type' => 'post',
                        'post_type' => 'reviews',
                    ]
                ])
        ];
    }

    public static function sectionMeta(): array
    {
        return [
            Field::make('complex', 'de_sections', __('Разделы'))
                ->add_fields([
                    Field::make('text', 'de_section_title', __('Заголовок')),
                    Field::make('rich_text', 'de_section_desc', __('Описание раздела')),
                ])
        ];
    }

    public static function firstScreen(): array
    {
        return [
            Field::make('text', 'de_title', __('Заголовок')),
            Field::make('textarea', 'de_subtitle', __('Подзаголовок')),
            Field::make('image', 'de_fon', __('Фон баннера'))
                ->set_type(['image'])
                ->set_value_type('url'),
            Field::make('rich_text', 'de_desc', __('Описание раздела')),
        ];
    }
}

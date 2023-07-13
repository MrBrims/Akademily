<?php

use Carbon_Fields\Field;

class CommonMeta
{

    // Global Fields

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

    public static function globalRating(): array
    {
        return [
            Field::make('text', 'rating_google', __('Рейтинг Google'))
                ->set_width(30),
            Field::make('text', 'rating_provent', __('Рейтинг Provent'))
                ->set_width(30),
            Field::make('text', 'rating_akademily', __('Рейтинг Akademily'))
                ->set_width(30),
        ];
    }

    public static function globalTeam(): array
    {
        return [
            Field::make('complex', 'team_card', __('Слайдер менеджеров'))
                ->set_layout('tabbed-horizontal')
                ->setup_labels(['singular_name' => 'менеджера'])
                ->add_fields([
                    Field::make('image', 'team_card_img', __('Фото'))
                        ->set_type('image')
                        ->set_value_type('url'),
                    Field::make('text', 'team_card_name', __('Имя'))
                        ->set_width(50),
                    Field::make('text', 'team_card_position', __('Должность'))
                        ->set_width(50),
                    Field::make('text', 'team_card_tel', __('WhatsApp'))
                        ->set_width(30),
                    Field::make('text', 'team_card_mail', __('Почта'))
                        ->set_width(30),
                    Field::make('text', 'team_card_time', __('Время работы'))
                        ->set_width(30),
                ])
        ];
    }

    public static function globalPriceTab(): array
    {
        return [
            Field::make('complex', 'price_tab_nav', __('Названия табов'))
                ->help_text('Порядковый номер названия соответствует порядковому номеру контента')
                ->set_layout('tabbed-horizontal')
                ->setup_labels(['singular_name' => 'название'])
                ->add_fields([
                    Field::make('text', 'price_tab_name', __('Название таба'))
                        ->set_width(30),
                    Field::make('textarea', 'price_tab_note', __('Подсказка к названию'))
                        ->set_width(70)
                        ->set_rows(3),
                ]),
            Field::make('complex', 'price_tab_content', __('Контент табоы'))
                ->set_layout('tabbed-horizontal')
                ->setup_labels(['singular_name' => 'контент'])
                ->add_fields([
                    Field::make('textarea', 'price_tab_note', __('Примечание'))
                        ->set_width(70)
                        ->set_rows(3),
                    Field::make('text', 'price_tab_btn', __('Текст на кнопке'))
                        ->set_width(30),
                    Field::make('text', 'price_tab_num_pref', __('Текст перед ценой'))
                        ->set_width(25),
                    Field::make('text', 'price_tab_num', __('Цена'))
                        ->set_width(25),
                    Field::make('text', 'price_tab_num_currency', __('Валюта'))
                        ->set_width(25),
                    Field::make('text', 'price_tab_num_after', __('Текст после цены'))
                        ->set_width(25),
                    Field::make('rich_text', 'price_tab_list', __('Сипсок')),
                ])
        ];
    }

    public static function globalHowWork(): array
    {
        return [
            Field::make('complex', 'accordeon_work', __('Аккордеон Как мы работаем'))
                ->set_layout('tabbed-horizontal')
                ->setup_labels(['singular_name' => 'аккордеон'])
                ->add_fields([
                    Field::make('text', 'accordeon_work_title', __('Заголовок аккордеона')),
                    Field::make('textarea', 'accordeon_work_text', __('Текст аккордеона'))
                        ->set_rows(3),
                    Field::make('checkbox', 'accordeon_work_btn_show', __('Показать кнопку?'))
                        ->set_width(30),
                    Field::make('text', 'accordeon_work_btn', __('Текст на кнопке'))
                        ->set_width(40),
                    Field::make('image', 'accordeon_work_image', __('Изображение слева'))
                        ->set_width(30)
                        ->set_type('image')
                        ->set_value_type('url'),
                ])
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

    // Meta Field

    public static function heroMeta(): array
    {
        return [
            Field::make('text', 'hero_title_left', __('Левая часть заголовка'))
                ->help_text('Если нужно заголовок можно разделить разными цветами')
                ->set_width(50),
            Field::make('text', 'hero_title_right', __('Правая часть заголовка'))
                ->set_width(50),
            Field::make('rich_text', 'hero_text', __('Текст после заголовка')),
        ];
    }

    public static function staticMeta(): array
    {
        return [
            Field::make('complex', 'statistic_card', __('Карточки статистики'))
                ->set_layout('tabbed-horizontal')
                ->setup_labels(['singular_name' => 'карточку'])
                ->add_fields([
                    Field::make('image', 'statistic_image', __('Картинка'))
                        ->set_type('image')
                        ->set_value_type('url'),
                    Field::make('text', 'statistic_num', __('Число статистики')),
                    Field::make('text', 'statistic_title', __('Заголовок статистики')),
                    Field::make('rich_text', 'statistic_text', __('Текст статистики')),
                ])
        ];
    }

    public static function coachingMeta(): array
    {
        return [
            Field::make('text', 'coaching_title', __('Заголовок')),
            Field::make('rich_text', 'coaching_text', __('Контент секции Coaching')),
        ];
    }

    public static function guarantMeta(): array
    {
        return [
            Field::make('text', 'guarant_title', __('Заголовок')),
            Field::make('text', 'guarant_subtitle', __('Подзаголовок')),
            Field::make('complex', 'guarant_card', __('Карточки'))
                ->set_layout('tabbed-horizontal')
                ->setup_labels(['singular_name' => 'карточку'])
                ->add_fields([
                    Field::make('text', 'guarant_card_title', __('Заголовок')),
                    Field::make('text', 'guarant_card_subtitle', __('Подзаголовок')),
                    Field::make('textarea', 'guarant_card_text', __('Текст'))
                        ->set_rows(3),
                    Field::make('image', 'guarant_card_img', __('Иконка'))
                        ->set_type('image')
                        ->set_value_type('url'),
                ])
        ];
    }

    public static function relaxMeta(): array
    {
        return [
            Field::make('text', 'relax_title', __('Заголовок')),
            Field::make('rich_text', 'relax_text', __('Контент')),
        ];
    }

    public static function priceMeta(): array
    {
        return [
            Field::make('text', 'price_title', __('Заголовок'))
                ->help_text('Отредактировать сами табы можно в глобальных настройках'),
        ];
    }

    public static function howWorkMeta(): array
    {
        return [
            Field::make('text', 'how-work_title_after', __('Заголовок перед аккордеоном')),
            Field::make('rich_text', 'how-work_text_after', __('Текст перед аккордеоном')),
            Field::make('text', 'how-work_title_before', __('Заголовок после аккордеона')),
            Field::make('rich_text', 'how-work_text_before', __('Текст после аккордеона')),
        ];
    }

    public static function messageMeta(): array
    {
        return [
            Field::make('text', 'message_title', __('Заголовок')),
            Field::make('text', 'message_subtitle', __('Подзаголовок'))
                ->help_text('Для выделения части текста оберните ее в тег span'),
        ];
    }

    public static function richAfterForm(): array
    {
        return [
            Field::make('rich_text', 'rich_after_form', __('Текст после формы')),
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

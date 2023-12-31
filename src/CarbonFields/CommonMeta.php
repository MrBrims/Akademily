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

	public static function globalGuarantMeta(): array
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

	public static function globalFaq(): array
	{
		return [
			Field::make('text', 'faq_title', __('Заголовок')),
			Field::make('complex', 'faq_items', __('FAQ'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'FAQ'])
				->add_fields([
					Field::make('text', 'faq_head', __('Вопрос')),
					Field::make('rich_text', 'faq_content', __('Ответ')),
				])
		];
	}

	public static function globalMainFaq(): array
	{
		return [
			Field::make('complex', 'main_faq_tab', __('Табы'))
				->set_layout('tabbed-vertical')
				->setup_labels(['singular_name' => 'таб'])
				->add_fields([
					Field::make('text', 'main_faq_tab_name', __('Заголовок')),
					Field::make('complex', 'main_faq_items', __('FAQ'))
						->set_layout('tabbed-horizontal')
						->setup_labels(['singular_name' => 'FAQ'])
						->add_fields([
							Field::make('text', 'main_faq_head', __('Вопрос')),
							Field::make('rich_text', 'main_faq_content', __('Ответ')),
						])
				])
				->set_header_template('
				<% if (main_faq_tab_name) { %>
					<%- main_faq_tab_name %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				')
		];
	}

	public static function globalContactWhatsapp(): array
	{
		return [
			Field::make('textarea', 'contact_whatsapp_title', __('Заголовок'))
				->set_width(30)
				->set_rows(3),
			Field::make('textarea', 'contact__whatsapp_subtitle', __('Подзаголовок'))
				->set_width(30)
				->set_rows(3),
			Field::make('text', 'contact__whatsapp_btn', __('Текст на кнопке'))
				->set_width(30),
		];
	}

	public static function globalReviews(): array
	{
		return [
			Field::make('text', 'reviews_title', __('Заголовок')),
			Field::make('text', 'reviews_name_tab_1', __('Название первой вкладки')),
			Field::make('complex', 'site_reviews', __('Отзывы с сайта'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'Отзыв'])
				->add_fields([
					Field::make('text', 'site_reviews_name', __('Имя'))
						->set_width(30),
					Field::make('text', 'site_reviews_score', __('Оценка'))
						->set_width(30),
					Field::make('text', 'site_reviews_date', __('Дата'))
						->set_width(30),
					Field::make('rich_text', 'site_reviews_text', __('Текст отзыва')),
				]),
			Field::make('text', 'reviews_name_tab_2', __('Название второй вкладки')),
			Field::make('complex', 'soc_reviews', __('Отзывы с соц. сетей'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'отзыв'])
				->add_fields([
					Field::make('image', 'soc_reviews_img', __('Картинка'))
						->set_type('image')
						->set_value_type('url'),
				])
		];
	}

	public static function qualGlobalMeta(): array
	{
		return [
			Field::make('text', 'qualification_title', __('Заголовок')),
			Field::make('complex', 'qualification_card', __('Карточки'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'карточку'])
				->add_fields([
					Field::make('image', 'qualification_card_img', __('Иконка'))
						->set_width(20)
						->set_type('image')
						->set_value_type('url'),
					Field::make('textarea', 'qualification_card_title', __('Текст на карточке'))
						->set_width(40)
						->set_rows(3),
					Field::make('textarea', 'qualification_card_quest', __('Подсказка'))
						->set_width(40)
						->set_rows(3),
				])
		];
	}

	public static function bakalavrGlobalMeta(): array
	{
		return [
			Field::make('text', 'bakalavr_title', __('Заголовок')),
			Field::make('complex', 'bakalavr_card', __('Список'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'итем'])
				->add_fields([
					Field::make('text', 'bakalavr_card_text', __('Текст'))
						->set_width(50),
					Field::make('text', 'bakalavr_card_link', __('Ссылка'))
						->set_width(50),
				])
		];
	}

	public static function teamGlobalMeta(): array
	{
		return [
			Field::make('text', 'main_team_title', __('Заголовок')),
			Field::make('complex', 'main_team_card', __('Карточки'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'карточку'])
				->add_fields([
					Field::make('image', 'main_team_card_photo', __('Фото'))
						->set_type('image')
						->set_value_type('url')
						->set_width(20),
					Field::make('text', 'main_team_card_name', __('Имя'))
						->set_width(40),
					Field::make('text', 'main_team_card_position', __('Должность'))
						->set_width(40),
					Field::make('text', 'main_team_card_rating', __('Рейтинг'))
						->set_width(50),
					Field::make('text', 'main_team_card_rating_all', __('Общее число оценок'))
						->set_width(50),
					Field::make('text', 'main_team_card_year', __('Лет работы'))
						->set_width(30),
					Field::make('text', 'main_team_card_order', __('Число заказов'))
						->set_width(30),
					Field::make('text', 'main_team_card_client', __('Обслужено клиентов'))
						->set_width(30),
					Field::make('rich_text', 'main_team_card_descr', __('Описание')),
					Field::make('text', 'main_team_card_time', __('Время работы')),
					Field::make('text', 'main_team_card_whatsapp', __('WhatsApp'))
						->set_width(50),
					Field::make('text', 'main_team_card_mail', __('Почта'))
						->set_width(50),
				])
		];
	}

	public static function globalFooter(): array
	{
		return [
			Field::make('image', 'footer_logo', __('Логотип в футере'))
				->set_type('image')
				->set_width('30')
				->set_value_type('url'),
			Field::make('rich_text', 'footer_text', __('Текст в нижней части'))
				->set_width(30),
			Field::make('text', 'footer_schedule_text', __('Текст после время работы'))
				->set_width(30),
			Field::make('text', 'footer_title_schedule', __('Заголовок время работы'))
				->set_width(25),
			Field::make('text', 'footer_title_pay', __('Заголовок способов оплаты'))
				->set_width(25),
			Field::make('text', 'footer_title_menu', __('Заголовок меню'))
				->set_width(25),
			Field::make('text', 'footer_title_rev', __('Заголовок отзовиков'))
				->set_width(25),
			Field::make('complex', 'footer_soc', __('Социальные сети'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'социальную сеть'])
				->add_fields([
					Field::make('text', 'footer_soc_link', __('Ссылка на соц. сеть'))
						->set_width(50),
					Field::make('image', 'footer_soc_icons', __('Иконка соц. сети'))
						->set_width(50)
						->set_type('image')
						->set_value_type('url'),
				]),
			Field::make('complex', 'footer_pay', __('Способы оплаты'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'способ оплаты'])
				->add_fields([
					Field::make('image', 'footer_pay_icons', __('Иконка способа оплаты'))
						->set_type('image')
						->set_value_type('url'),
				]),
			Field::make('complex', 'footer_rev', __('Отзывики'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'отзовик'])
				->add_fields([
					Field::make('image', 'footer_rev_icons', __('Иконка способа отзовика'))
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
				->set_width(30),
			Field::make('text', 'hero_title_right', __('Правая часть заголовка'))
				->set_width(30),
			Field::make('image', 'hero_img', __('Картинка перед формой'))
				->set_type('image')
				->set_width(30)
				->set_value_type('url'),
			Field::make('rich_text', 'hero_text', __('Текст после заголовка')),
		];
	}

	public static function staticMeta(): array
	{
		return [
			Field::make('text', 'statistic_title', __('Заголовок')),
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

	public static function relaxMeta(): array
	{
		return [
			Field::make('text', 'relax_title', __('Заголовок')),
			Field::make('rich_text', 'relax_text', __('Контент')),
			Field::make('text', 'relax_btn', __('Текст на кнопке')),
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

	public static function localFaq(): array
	{
		return [
			Field::make('text', 'local_faq_title', __('Заголовок')),
			Field::make('checkbox', 'global_faq_show', __('Отключить глобальный FAQ?')),
			Field::make('complex', 'local_faq_tab', __('Табы'))
				->set_layout('tabbed-vertical')
				->setup_labels(['singular_name' => 'таб'])
				->add_fields([
					Field::make('text', 'local_faq_tab_name', __('Заголовок')),
					Field::make('complex', 'local_faq_items', __('FAQ'))
						->set_layout('tabbed-horizontal')
						->setup_labels(['singular_name' => 'FAQ'])
						->add_fields([
							Field::make('text', 'local_faq_head', __('Вопрос')),
							Field::make('rich_text', 'local_faq_content', __('Ответ')),
						])
				])
				->set_header_template('
				<% if (local_faq_tab_name) { %>
					<%- local_faq_tab_name %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				')
		];
	}

	public static function richText(): array
	{
		return [
			Field::make('rich_text', 'rich_text', __('Текст')),
		];
	}

	public static function mainPriceTab(): array
	{
		return [
			Field::make('text', 'price_main_title', __('Заголовок')),
			Field::make('complex', 'price_tab_main', __('Прайс'))
				->set_layout('tabbed-vertical')
				->setup_labels(['singular_name' => 'контент'])
				->add_fields([
					Field::make('text', 'price_tab_name', __('Название таба'))
						->set_width(20),
					Field::make('textarea', 'price_tab_note', __('Подсказка к названию'))
						->set_width(70)
						->set_rows(3),
					Field::make('text', 'price_tab_num', __('Цена'))
						->set_width(10),
				])
				->set_header_template('
				<% if (price_tab_name) { %>
					<%- price_tab_name %>
			  	<% } else { %>
					<%- "Name" %>
				<% } %>
				')
		];
	}

	public static function richAfterReviews(): array
	{
		return [
			Field::make('rich_text', 'rich_after_reviews', __('Текст после формы')),
		];
	}

	public static function titlePrice(): array
	{
		return [
			Field::make('text', 'price_title_1', __('Заголовок 1')),
			Field::make('text', 'price_title_2', __('Заголовок 2')),
			Field::make('text', 'price_title_3', __('Заголовок 3')),
			Field::make('text', 'price_title_4', __('Заголовок 4')),
			Field::make('text', 'price_title_5', __('Заголовок 5')),
		];
	}

	public static function priceList(): array
	{
		return [
			Field::make('text', 'price_list_title', __('Заголовок')),
			Field::make('text', 'price_list_th_1', __('Первая ячейка заголовка'))
				->set_width(25),
			Field::make('text', 'price_list_th_2', __('Вторя ячейка заголовка'))
				->set_width(25),
			Field::make('text', 'price_list_th_3', __('Третья ячейка заголовка'))
				->set_width(25),
			Field::make('text', 'price_list_th_4', __('Четвертая ячейка заголовка'))
				->set_width(25),
			Field::make('complex', 'price_list_table', __('Содержание таблицы'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'строку'])
				->add_fields([
					Field::make('text', 'price_list_td_1', __('Первая ячейка'))
						->help_text('Название')
						->set_width(25),
					Field::make('text', 'price_list_td_2', __('Вторя ячейка'))
						->help_text('Время')
						->set_width(25),
					Field::make('text', 'price_list_td_3', __('Третья ячейка'))
						->help_text('Цена')
						->set_width(25),
					Field::make('text', 'price_list_td_4', __('Четвертая ячейка'))
						->help_text('Текст кнопки')
						->set_width(25),
				])
		];
	}

	public static function richTextTwo(): array
	{
		return [
			Field::make('rich_text', 'rich_text_two', __('Текст после диаграмы'))
				->help_text('Текст после диаграммы'),
		];
	}

	public static function diagramMeta(): array
	{
		return [
			Field::make('text', 'diagram_title', __('Заголовок')),
			Field::make('complex', 'diagram_list', __('Список'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'итем'])
				->add_fields([
					Field::make('text', 'diagram_list_text', __('Текст')),
				]),
			Field::make('image', 'diagram_img', __('Изображение'))
				->set_type('image')
				->set_value_type('url'),
			Field::make('text', 'diagram_subtitle', __('Подзаголовок')),
			Field::make('complex', 'diagram_items', __('Карточки'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'карточку'])
				->add_fields([
					Field::make('image', 'diagram_items_img', __('Изображение'))
						->set_width(50)
						->set_type('image')
						->set_value_type('url'),
					Field::make('text', 'diagram_items_text', __('Текст'))
						->set_width(50),
				])
		];
	}

	public static function localPriceTab(): array
	{
		return [
			Field::make('text', 'local_price_title', __('Заголовок')),
			Field::make('complex', 'local_price_tab_nav', __('Названия табов'))
				->help_text('Порядковый номер названия соответствует порядковому номеру контента')
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'название'])
				->add_fields([
					Field::make('text', 'local_price_tab_name', __('Название таба'))
						->set_width(30),
					Field::make('textarea', 'local_price_tab_note', __('Подсказка к названию'))
						->set_width(70)
						->set_rows(3),
				]),
			Field::make('complex', 'local_price_tab_content', __('Контент табов'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'контент'])
				->add_fields([
					Field::make('textarea', 'local_price_tab_note', __('Примечание'))
						->set_width(70)
						->set_rows(3),
					Field::make('text', 'local_price_tab_btn', __('Текст на кнопке'))
						->set_width(30),
					Field::make('text', 'local_price_tab_num_pref', __('Текст перед ценой'))
						->set_width(25),
					Field::make('text', 'local_price_tab_num', __('Цена'))
						->set_width(25),
					Field::make('text', 'local_price_tab_num_currency', __('Валюта'))
						->set_width(25),
					Field::make('text', 'local_price_tab_num_after', __('Текст после цены'))
						->set_width(25),
					Field::make('rich_text', 'local_price_tab_list', __('Сипсок')),
				])
		];
	}

	public static function cooperationLocal(): array
	{
		return [
			Field::make('text', 'cooperation_title', __('Заголовок')),
			Field::make('complex', 'cooperation_card', __('Карточки'))
				->set_layout('tabbed-horizontal')
				->setup_labels(['singular_name' => 'карточку'])
				->add_fields([
					Field::make('image', 'cooperation_card_icon', __('Иконка'))
						->set_width(30)
						->set_type('image')
						->set_value_type('url'),
					Field::make('text', 'cooperation_card_title', __('Заголовок карточки'))
						->set_width(30),
					Field::make('textarea', 'cooperation_card_text', __('Текст'))
						->set_width(40)
						->set_rows(3),
				])
		];
	}

	public static function microdataStar(): array
	{
		return [
			Field::make('text', 'microdata_rating', __('Текущая оценка'))
				->set_width(30),
			Field::make('text', 'microdata_all_rating', __('Всего оценок'))
				->set_width(30),
			Field::make('text', 'microdata_price', __('Цена'))
				->set_width(30),
		];
	}
}

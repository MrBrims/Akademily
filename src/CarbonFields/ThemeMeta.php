<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class ThemeMeta
{
	public function __construct()
	{
		add_action('carbon_fields_register_fields', [$this, 'globalPrice']);
	}
	public function globalPrice()
	{
		Container::make('theme_options', 'Theme Options')
			->add_tab(
				__('Таблица Прайс'),
				[
					Field::make('text', 'cf_price_1', __('Заголовок'))
						->set_width(16),
					Field::make('text', 'cf_price_2', __('Колонка 2'))
						->set_width(16),
					Field::make('text', 'cf_price_3', __('Колонка 3'))
						->set_width(16),
					Field::make('text', 'cf_price_4', __('Колонка 4'))
						->set_width(16),
					Field::make('text', 'cf_price_5', __('Колонка 5'))
						->set_width(16),
					Field::make('text', 'cf_price_6', __('Колонка 6'))
						->set_width(16),
					Field::make('complex', 'cf_price', __('Табличка'))
						// ->set_layout('tabbed-horizontal')
						->add_fields(
							[
								Field::make('text', 'cf_price_1', __('Заголовок'))
									->set_width(16),
								Field::make('text', 'cf_price_2', __('Колонка 2'))
									->set_width(16),
								Field::make('text', 'cf_price_3', __('Колонка 3'))
									->set_width(16),
								Field::make('text', 'cf_price_4', __('Колонка 4'))
									->set_width(16),
								Field::make('text', 'cf_price_5', __('Колонка 5'))
									->set_width(16),
								Field::make('text', 'cf_price_6', __('Колонка 6'))
									->set_width(16),
							]
						)
				]
			)
			->add_tab(
				__('Слайдер Менеджеры'),
				[
					Field::make('complex', 'cf_slider_manager', __('Табличка'))
						->set_layout('tabbed-horizontal')
						->add_fields(
							[
								Field::make('image', 'cf_slider_manager_photo', __('Photo'))
									->set_value_type('url')
									->set_width(10),
								Field::make('text', 'cf_slider_manager_name', __('Name'))
									->set_width(10),
								Field::make('text', 'cf_slider_manager_spec', __('Specialisation'))
									->set_width(10),
								Field::make('text', 'cf_slider_manager_time', __('Time'))
									->set_width(10),
								Field::make('text', 'cf_slider_manager_whats', __('WhatsApp'))
									->set_width(10),
								Field::make('text', 'cf_slider_manager_email', __('EMail'))
									->set_width(10),
								Field::make('text', 'cf_slider_manager_phone', __('Phone'))
									->set_width(10),
							]
						)
				]
			);
	}
}

new ThemeMeta();

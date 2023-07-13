<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class PageMeta
{
	public function __construct()
	{
		add_action('carbon_fields_register_fields', [$this, 'homePageMeta']);

	}

	public function homePageMeta()
	{
		Container::make('post_meta', __('Настройки домашней страницы'))
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'home.php')		
			->add_tab(__('Первый экран'), CommonMeta::heroMeta())
			->add_tab(__('Статистика'), CommonMeta::staticMeta())
			->add_tab(__('Коучинг'), CommonMeta::coachingMeta())
			->add_tab(__('Гарантии'), CommonMeta::guarantMeta())
			->add_tab(__('Без забот'), CommonMeta::relaxMeta())
			->add_tab(__('Прайс'), CommonMeta::priceMeta())
			->add_tab(__('Как мы работаем'), CommonMeta::howWorkMeta())
			->add_tab(__('Большая форма'), CommonMeta::messageMeta())
			->add_tab(__('Текст после формы'), CommonMeta::richAfterForm());
	}


}

new PageMeta();

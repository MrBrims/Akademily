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
			->add_tab(__('Коучинг'), CommonMeta::guarantMeta());
	}


}

new PageMeta();

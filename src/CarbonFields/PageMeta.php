<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class PageMeta
{
	public function __construct()
	{
		add_action('carbon_fields_register_fields', [$this, 'homePageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'halfePageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'ghostPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'lektoratPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'fachPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'uberVir']);
		add_action('carbon_fields_register_fields', [$this, 'uberRev']);
		add_action('carbon_fields_register_fields', [$this, 'uberKont']);
		add_action('carbon_fields_register_fields', [$this, 'uberTeam']);
	}

	public function homePageMeta()
	{
		Container::make('post_meta', __('Настройки домашней страницы'))
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'home.php')	
			->add_tab(__('Первый экран'), CommonMeta::heroMeta())
			->add_tab(__('Статистика'), CommonMeta::staticMeta())
			->add_tab(__('Коучинг'), CommonMeta::coachingMeta())
			->add_tab(__('Без забот'), CommonMeta::relaxMeta())
			->add_tab(__('Прайс'), CommonMeta::priceMeta())
			->add_tab(__('Как мы работаем'), CommonMeta::howWorkMeta())
			->add_tab(__('Большая форма'), CommonMeta::messageMeta())
			->add_tab(__('Текст после формы'), CommonMeta::richAfterForm())
			->add_tab(__('FAQ'), CommonMeta::localFaq())
			->add_tab(__('Текст после отзывов'), CommonMeta::richAfterReviews());
	}

	public function halfePageMeta()
	{
		Container::make('post_meta', __('Настройки страницы'))
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'parts/page-halfe.php')
			->add_tab(__('Первый экран'), CommonMeta::heroMeta())
			->add_tab(__('Текст'), CommonMeta::richText())
			->add_tab(__('FAQ'), CommonMeta::localFaq())
			->add_tab(__('Таблица прайса'), CommonMeta::priceList());
	}

	public function ghostPageMeta()
	{
		Container::make('post_meta', __('Настройки страницы'))
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'parts/page-ghost.php')
			->add_tab(__('Первый экран'), CommonMeta::heroMeta())
			->add_tab(__('Список'), CommonMeta::relaxMeta())
			->add_tab(__('Текст'), CommonMeta::richText())
			->add_tab(__('Текст после формы'), CommonMeta::richAfterForm())
			->add_tab(__('FAQ'), CommonMeta::localFaq());
	}

	public function lektoratPageMeta()
	{
		Container::make('post_meta', __('Настройки страницы'))
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'parts/page-lektorat.php')
			->add_tab(__('Первый экран'), CommonMeta::heroMeta())
			->add_tab(__('Список'), CommonMeta::relaxMeta())
			->add_tab(__('Диаграмма'), CommonMeta::diagramMeta())
			->add_tab(__('Текст 2'), CommonMeta::richTextTwo())
			->add_tab(__('Таблица прайса'), CommonMeta::priceList())
			->add_tab(__('Как мы работаем'), CommonMeta::howWorkMeta())
			->add_tab(__('FAQ'), CommonMeta::localFaq());
	}

	public function fachPageMeta()
	{
		Container::make('post_meta', __('Настройки страницы'))
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'parts/page-fach.php')
			->add_tab(__('Первый экран'), CommonMeta::heroMeta())
			->add_tab(__('Текст'), CommonMeta::richText())
			->add_tab(__('Прайс'), CommonMeta::localPriceTab())
			->add_tab(__('Как мы работаем'), CommonMeta::howWorkMeta())
			->add_tab(__('FAQ'), CommonMeta::localFaq());
	}

	public function uberVir()
	{
		Container::make('post_meta', __('Настройки страницы'))
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'parts/page-uber-vir.php')
			->add_tab(__('Первый экран'), CommonMeta::heroMeta())
			->add_tab(__('Сотрудничество'), CommonMeta::cooperationLocal())
			->add_tab(__('Как мы работаем'), CommonMeta::howWorkMeta())
			->add_tab(__('FAQ'), CommonMeta::localFaq());
	}

	public function uberRev()
	{
		Container::make('post_meta', __('Настройки страницы'))
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'parts/page-uber-bew.php')
			->add_tab(__('Первый экран'), CommonMeta::heroMeta())
			->add_tab(__('FAQ'), CommonMeta::localFaq());
	}

	public function uberKont()
	{
		Container::make('post_meta', __('Настройки страницы'))
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'parts/page-uber-kont.php')
			->add_tab(__('Первый экран'), CommonMeta::heroMeta())
			->add_tab(__('FAQ'), CommonMeta::localFaq());
	}

	public function uberTeam()
	{
		Container::make('post_meta', __('Настройки страницы'))
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'parts/page-uber-team.php')
			->add_tab(__('Первый экран'), CommonMeta::heroMeta())
			->add_tab(__('Как мы работаем'), CommonMeta::howWorkMeta())
			->add_tab(__('Статистика'), CommonMeta::staticMeta());
	}


}

new PageMeta();

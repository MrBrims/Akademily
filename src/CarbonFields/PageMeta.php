<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class PageMeta
{
	public function __construct()
	{
		add_action('carbon_fields_register_fields', [$this, 'homePageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'reviewsPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'faqPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'ourTeamPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'seoPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'contactsPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'seonewPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'guidePageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'guidemainPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'calcPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'korPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'commercPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'podborPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'impressumPageMeta']);
		add_action('carbon_fields_register_fields', [$this, 'blogPageMeta']);
	}

	public function homePageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_home_page', 'Параметры главной страницы')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-home.php')
			->add_tab(__('Глобальные настройки'), [
				Field::make('text', 'de_phone', __('Телефон'))
					->help_text('Указывается глобально для всего сайта')
					->set_width(50),
				Field::make('text', 'de_mail', __('Почта'))
					->help_text('Указывается глобально для всего сайта')
					->set_width(50),
				Field::make('text', 'de_address', __('Адрес')),
				Field::make('text', 'de_work', __('Режим работы')),
				Field::make('textarea', 'de_copy', __('Копирайт')),
				Field::make('separator', 'de_social_links', __('Социальные сети')),
				Field::make('text', 'de_soc_facebook', __('Facebook')),
				Field::make('text', 'de_soc_skype', __('Skype')),
				Field::make('text', 'de_soc_linkedin', __('LinkedIn')),
				Field::make('text', 'de_soc_twitter', __('Twitter')),
				Field::make('text', 'de_soc_instagram', __('Instagram')),
				Field::make('separator', 'de_footer_links_separator', __('Ссылки в подвале')),
				Field::make('complex', 'de_footer_links', __('Ссылки в подвале'))
					->add_fields([
						Field::make('text', 'title', __('Текст ссылки'))
							->set_width(50),
						Field::make('text', 'url', __('Ссылка'))
							->set_width(50),
					])
			])
			->add_tab(__('Слайдер'), [
				Field::make('complex', 'de_slider', __('Слайдер на главной странице'))
					->add_fields([
						Field::make('image', 'image', __('Картинка'))
							->set_type(['image'])
							->set_value_type('url')
							->set_required(true)
							->set_width(25),
						Field::make('text', 'title', __('Заголовок'))
							->set_width(40),
						Field::make('text', 'url', __('Ссылка кнопки'))
							->set_width(35),
					])
			])
			->add_tab(__('Раздел 1'), [
				Field::make('text', 'de_home_title_one', __('Заголовок раздела')),
				Field::make('rich_text', 'de_home_desc_one', __('Описание раздела')),
			])
			->add_tab(__('Раздел 2'), [
				Field::make('text', 'de_home_title_two', __('Заголовок раздела')),
				Field::make('rich_text', 'de_home_desc_two', __('Описание раздела')),
			])
			->add_tab(__('Раздел 3'), [
				Field::make('text', 'de_home_title_three', __('Заголовок раздела')),
				Field::make('rich_text', 'de_home_desc_three', __('Описание раздела')),
				Field::make('separator', 'de_separator_three_1', __('Блок 1')),
				Field::make('text', 'de_home_three_bt1', __('Заголовок')),
				Field::make('text', 'de_home_three_bd1', __('Описание')),
				Field::make('separator', 'de_separator_three_2', __('Блок 2')),
				Field::make('text', 'de_home_three_bt2', __('Заголовок')),
				Field::make('text', 'de_home_three_bd2', __('Описание')),
				Field::make('separator', 'de_separator_three_3', __('Блок 3')),
				Field::make('text', 'de_home_three_bt3', __('Заголовок')),
				Field::make('text', 'de_home_three_bd3', __('Описание')),
			])
			->add_tab(__('Раздел 4'), [
				Field::make('text', 'de_home_title_four', __('Заголовок раздела')),
				Field::make('rich_text', 'de_home_desc_four', __('Описание раздела')),
			])
			->add_tab(__('Раздел 5'), [
				Field::make('text', 'de_home_title_five', __('Заголовок раздела')),
				Field::make('rich_text', 'de_home_desc_five', __('Описание раздела')),
			])
			->add_tab(__('Раздел 6'), [
				Field::make('text', 'de_home_title_six', __('Заголовок раздела')),
				Field::make('rich_text', 'de_home_desc_six', __('Описание раздела')),
				Field::make('separator', 'de_separator_six_1', __('Блок 1')),
				Field::make('text', 'de_home_six_bt1', __('Заголовок')),
				Field::make('text', 'de_home_six_bd1', __('Описание')),
				Field::make('separator', 'de_separator_six_2', __('Блок 2')),
				Field::make('text', 'de_home_six_bt2', __('Заголовок')),
				Field::make('text', 'de_home_six_bd2', __('Описание')),
				Field::make('separator', 'de_separator_six_3', __('Блок 3')),
				Field::make('text', 'de_home_six_bt3', __('Заголовок')),
				Field::make('text', 'de_home_six_bd3', __('Описание')),
			])
			->add_tab(__('Раздел 7'), [
				Field::make('text', 'de_home_title_seven', __('Заголовок раздела')),
				Field::make('rich_text', 'de_home_desc_seven', __('Описание раздела')),
			])
			->add_tab(__('FAQ'), CommonMeta::faqMeta())
			->add_tab(__('Отзывы'), CommonMeta::reviewsMeta());
	}

	public function seoPageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_seo_page', 'Параметры страницы')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-seo.php')
			->add_tab(__('Первый экран'), CommonMeta::firstScreen())
			->add_tab(__('Разделы'), CommonMeta::sectionMeta())
			->add_tab(__('FAQ'), CommonMeta::faqMeta())
			->add_tab(__('Отзывы'), CommonMeta::reviewsMeta());
	}

	public function seonewPageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_seo_page', 'Параметры страницы')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-seo-new.php')
			->add_tab(__('Первый экран'), CommonMeta::firstScreen())
			->add_tab(__('Разделы'), CommonMeta::sectionMeta())
			->add_tab(__('FAQ'), CommonMeta::faqMeta())
			->add_tab(__('Отзывы'), CommonMeta::reviewsMeta())
			->add_tab(__('Таблица и описание таблицы'), [
				Field::make('text', 'de_home_title_seven', __('Заголовок раздела')),
				Field::make('rich_text', 'de_home_desc_seven', __('Описание раздела')),
			])
			->add_tab(__('Голубенький текст у авторов'), [
				Field::make('text', 'de_home_title_four', __('Подзаголовок')),
			]);
	}
	public function commercPageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_seo_page', 'Параметры страницы')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-commerce.php', 'template-parts/page-price.php')
			->add_tab(__('Первый экран'), CommonMeta::firstScreen())
			->add_tab(__('Разделы'), CommonMeta::sectionMeta())
			->add_tab(__('FAQ'), CommonMeta::faqMeta())
			->add_tab(__('Отзывы'), CommonMeta::reviewsMeta())
			->add_tab(__('Таблица и описание таблицы'), [
				Field::make('text', 'de_home_title_seven', __('Заголовок раздела')),
				Field::make('rich_text', 'de_home_desc_seven', __('Описание раздела')),
			])
			->add_tab(__('Голубенький текст у авторов'), [
				Field::make('text', 'de_home_title_four', __('Подзаголовок')),
			])
			->add_tab(__('Текст с картинкой'), [
				Field::make('rich_text', 'de_home_desc_ten', __('Описание раздела')),
			])
			->add_tab(__('Перелинковка'), [
				Field::make('text', 'cf_thema_title', __('Заголовок раздела')),
			])
			->add_tab(__('Прайс из 4 блоков'), [
				Field::make('text', 'cf_price_title', __('Заголовок раздела')),
				Field::make('complex', 'cf_prices', __('Прайс'))
					->set_min(4)
					->set_max(4)
					->add_fields([
						Field::make('text', 'name', __('Название'))
							->set_width(15),
						Field::make('text', 'desc', __('Описание'))
							->set_width(30),
						Field::make('text', 'price', __('Цена'))
							->set_width(10),
						Field::make('text', 'btn', __('Кнопка'))
							->set_width(10),
					])
			]);
	}
	public function podborPageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_seo_page', 'Параметры страницы')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-podbor.php')
			->add_tab(__('Первый экран'), CommonMeta::firstScreen())
			->add_tab(__('Разделы'), CommonMeta::sectionMeta())
			->add_tab(__('FAQ'), CommonMeta::faqMeta())
			->add_tab(__('Отзывы'), CommonMeta::reviewsMeta())
			->add_tab(__('Таблица и описание таблицы'), [
				Field::make('text', 'de_home_title_seven', __('Заголовок раздела')),
				Field::make('rich_text', 'de_home_desc_seven', __('Описание раздела')),
			])
			->add_tab(__('Голубенький текст у авторов'), [
				Field::make('text', 'de_home_title_four', __('Подзаголовок')),
			])
			->add_tab(__('Текст с картинкой'), [

				Field::make('rich_text', 'de_home_desc_ten', __('Описание раздела')),
			]);
	}

	public function korPageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_seo_page', 'Параметры страницы')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-korektorat.php')
			->add_tab(__('Первый экран'), CommonMeta::firstScreen())
			->add_tab(__('FAQ'), CommonMeta::faqMeta())
			->add_tab(__('Отзывы'), CommonMeta::reviewsMeta())
			->add_tab(__('Список с фото 1'), [
				Field::make('rich_text', 'de_home_desc_five', __('Текст')),
				Field::make('rich_text', 'de_home_desc_seven', __('Фото')),
			])
			->add_tab(__('Список с фото 2'), [
				Field::make('rich_text', 'de_home_desc_four', __('Фото')),
				Field::make('rich_text', 'de_home_desc_three', __('Текст')),
			])
			->add_tab(__('Список с фото 3'), [
				Field::make('rich_text', 'de_home_desc_one', __('Текст')),
				Field::make('rich_text', 'de_home_desc_two', __('Слайдер')),
			])
			->add_tab(__('Текст после блоков'), [
				Field::make('rich_text', 'de_home_desc_ten', __('Текст')),

			]);
	}


	public function guidePageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_seo_page', 'Параметры страницы')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-guide.php')
			->add_tab(__('Первый экран'), CommonMeta::firstScreen())


			->add_tab(__('Текст на белом фоне'), [
				Field::make('rich_text', 'de_home_desc_three', __('Текст')),
			])
			->add_tab(__('Фото в шапке'), [
				Field::make('image', 'de_guide', __('Фон баннера'))
					->set_type(['image'])
					->set_value_type('url'),


			]);
	}
	public function guidemainPageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_seo_page', 'Параметры страницы')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-guide-main.php')
			->add_tab(__('Первый экран'), CommonMeta::firstScreen())
			->add_tab(__('Гайды внутренние'), [
				Field::make('complex', 'de_guides', __('Гайды внутренние'))
					->add_fields([
						Field::make('image', 'image', __('Картинка'))
							->set_type(['image'])
							->set_value_type('url')
							->set_required(true)
							->set_width(25),
						Field::make('text', 'title', __('Заголовок'))
							->set_width(40),
						Field::make('text', 'url', __('Ссылка кнопки'))
							->set_width(35),
						Field::make('date', 'date', __('Дата')),
						Field::make('rich_text', 'text', __('Текст')),

					])
			]);
	}

	public function calcPageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_seo_page', 'Параметры страницы')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-calculator.php')
			->add_tab(__('Первый экран'), CommonMeta::firstScreen())

			->add_tab(__('Таблица и описание таблицы'), [
				Field::make('text', 'de_home_title_seven', __('Заголовок раздела')),
				Field::make('rich_text', 'de_home_desc_seven', __('Описание раздела')),
			]);
	}
	public function ourTeamPageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_team_page', 'Параметры страницы: Наша команда')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-our-team.php')
			->add_tab(__('Первый экран'), CommonMeta::firstScreen())
			->add_tab(__('Команда'), [
				Field::make('text', 'de_team_title', __('Заголовок раздела')),
				Field::make('complex', 'de_team', __('Команда'))
					->add_fields([
						Field::make('image', 'image', __('Картинка'))
							->set_type(['image'])
							->set_value_type('url')
							->set_required(true)
							->set_width(15),
						Field::make('text', 'title', __('Имя'))
							->set_width(15),
						Field::make('text', 'position', __('Должность'))
							->set_width(15),
						Field::make('textarea', 'desc', __('Описание'))
							->set_width(55),
						Field::make('text', 'skype', __('Skype'))
							->set_width(33),
						Field::make('text', 'whatsapp', __('WhatsApp'))
							->set_width(33),
						Field::make('text', 'email', __('E-mail'))
							->set_width(33),
					])
			]);
	}

	public function reviewsPageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_reviews_page', 'Параметры страницы: Все отзывы')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-reviews.php')
			->add_tab(__('Первый экран'), CommonMeta::firstScreen());
	}

	public function faqPageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_faq_page', 'Параметры страницы: FAQ')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-faq.php')
			->add_tab(__('Первый экран'), CommonMeta::firstScreen())
			->add_tab(__('FAQ'), CommonMeta::faqMeta());
	}

	public function contactsPageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_contacts_page', 'Параметры страницы: Контакты')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-contacts.php')
			->add_tab(__('Контакты'), [
				Field::make('text', 'contacts_address', __('Адрес')),
				Field::make('text', 'contacts_phone', __('Телефон')),
				Field::make('text', 'contacts_mail', __('Почта')),
				Field::make('text', 'contacts_work', __('Часы работы')),
				Field::make('text', 'contacts_map', __('Ссылка на карту из iFrame')),
			])
			->add_tab(__('Скайпы'), [
				Field::make('complex', 'contacts_skype', __('Скайпы'))
					->add_fields([
						Field::make('text', 'live', __('Логин скайп'))
							->set_width(50),
						Field::make('text', 'login', __('Отображаемое имя'))
							->set_width(50),
					])
			])
			->add_tab(__('Блоки'), [
				Field::make('text', 'contacts_block_title', __('Заголовок')),
				Field::make('text', 'contacts_block_1_desc', __('Описание 1'))
					->set_width(50),
				Field::make('text', 'contacts_block_1_link', __('Ссылка 1'))
					->set_width(50),
				Field::make('text', 'contacts_block_2_desc', __('Описание 2'))
					->set_width(50),
				Field::make('text', 'contacts_block_2_link', __('Ссылка 2'))
					->set_width(50),
				Field::make('text', 'contacts_block_3_desc', __('Описание 3'))
					->set_width(50),
				Field::make('text', 'contacts_block_3_link', __('Ссылка 3'))
					->set_width(50),
				Field::make('text', 'contacts_block_4_desc', __('Описание 4'))
					->set_width(50),
				Field::make('text', 'contacts_block_4_link', __('Ссылка 4'))
					->set_width(50),
			]);
	}
	public function impressumPageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_impressum_page', 'Параметры страницы: Impressum')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-impressum.php')
			->add_tab(__('Первый экран'), CommonMeta::firstScreen())
			->add_tab(__('Разделы'), CommonMeta::sectionMeta())
			->add_tab(__('FAQ'), CommonMeta::faqMeta())
			->add_tab(__('Отзывы'), CommonMeta::reviewsMeta());
	}
	public function blogPageMeta()
	{
		Container::make('post_meta', 'carbon_fields_container_blog_page', 'Параметры страницы: Blog')
			->where('post_type', '=', 'page')
			->where('post_template', '=', 'template-parts/page-blog.php')
			->add_tab(__('Перелинковка'), [
				Field::make('text', 'cf_thema_title', __('Заголовок раздела')),
			])
			->add_tab(__('Прайс из 4 блоков'), [
				Field::make('complex', 'cf_prices', __('Прайс'))
					->set_min(4)
					->set_max(4)
					->add_fields([
						Field::make('text', 'name', __('Название'))
							->set_width(15),
						Field::make('text', 'desc', __('Описание'))
							->set_width(30),
						Field::make('text', 'price', __('Цена'))
							->set_width(10),
						Field::make('text', 'btn', __('Кнопка'))
							->set_width(10),
					])
			]);
	}
}

new PageMeta();

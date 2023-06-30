
<?php

/** Template Name: Homepage */

// Шапка сайта
get_header();

echo '<main class="main">';

// Первый экран
get_template_part('parts/sections/hero');

// Секция со статистикой
get_template_part('parts/sections/statistic');


echo '</main>';

// Подвал
get_footer();

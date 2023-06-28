
<?php

/** Template Name: Homepage */

// Шапка сайта
get_header();

echo '<main class="main">';

// Первый экран
get_template_part('part/hero.php');


echo '</main>';

// Подвал
get_footer();
<?php

/** Template Name: ÜBER UNS - Wie wir vorgehen */

get_header(); 

?>

<main class="main">
    <?php get_template_part('parts/sections/hero'); ?>
    <div class="container">
        <div class="inner">
            <div class="content">
                <div class="rich-text section">
                    <?php the_content(); ?>
                </div>
            </div>
            <aside class="sidebar">
                <div class="team-vidget">
                    <?php get_template_part('parts/blocks/form-sidebar'); ?>
                </div>
            </aside>
        </div>
    </div>
    <?php 
    get_template_part('parts/sections/message'); 
    get_template_part('parts/sections/cooperation'); 
    ?>
    <div class="container">
        <?php
        get_template_part('parts/sections/guarant');
        get_template_part('parts/sections/how-work');
        ?>
    </div>
    <?php
    get_template_part('parts/sections/reviews');
    get_template_part('parts/sections/blog-slider');
    get_template_part('parts/sections/faq');
    get_template_part('parts/sections/contact');
    ?>
</main>

<?php get_footer(); ?>
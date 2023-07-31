<?php

/** Template Name: GHOSTWRITING */

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
                <?php
                get_template_part('parts/sections/guarant');
                get_template_part('parts/sections/relax');
                get_template_part('parts/sections/how-work');
                get_template_part('parts/sections/text');
                ?>
            </div>
            <aside class="sidebar">
                <div class="team-vidget">
                    <?php get_template_part('parts/blocks/team'); ?>
                </div>
            </aside>
        </div>
    </div>
    <?php
    get_template_part('parts/sections/message');
    get_template_part('parts/sections/after-form');
    get_template_part('parts/sections/qualification');
    get_template_part('parts/sections/bakalavr');
    get_template_part('parts/sections/price');
    get_template_part('parts/sections/reviews');
    get_template_part('parts/sections/blog-slider');
    get_template_part('parts/sections/faq');
    get_template_part('parts/sections/contact');
    ?>
</main>

<?php get_footer(); ?>
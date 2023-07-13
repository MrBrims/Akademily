<?php

/** Template Name: Homepage */
?>

<?php get_header(); ?>

<main class="main">
    <?php get_template_part('parts/sections/hero'); ?>
    <?php get_template_part('parts/sections/statistic'); ?>
    <div class="container">
        <div class="inner">
            <div class="content">
                <?php get_template_part('parts/sections/coaching'); ?>
                <?php get_template_part('parts/sections/guarant'); ?>
                <?php get_template_part('parts/sections/relax'); ?>
                <?php get_template_part('parts/sections/price'); ?>
                <?php get_template_part('parts/sections/how-work'); ?>
                <?php get_template_part('parts/sections/message'); ?>
                <?php get_template_part('parts/sections/after-form'); ?>
            </div>
            <aside class="sidebar">
                <div class="team-vidget">
                    <?php get_template_part('parts/blocks/team'); ?>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php get_footer(); ?>
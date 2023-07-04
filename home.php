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
            </div>
            <aside class="sidebar">
                <div class="team">

                </div>
            </aside>
        </div>
    </div>
</main>

<?php get_footer(); ?>
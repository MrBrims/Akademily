<?php get_header(); ?>

<main class="main">
    <section class="hero hero-single">
        <div class="container">
            <?php if (!is_front_page() && function_exists('yoast_breadcrumb')) { ?>
                <div class="single-breadcrumb">
                    <?php yoast_breadcrumb('<div class="single-breadcrumb__list">', '</div>'); ?>
                </div>
            <?php } ?>
            <h1 class="hero-single__title">
                <?php echo single_cat_title(); ?>
            </h1>
        </div>
    </section>
    <div class="container">
        <div class="inner">
            <div class="content">
                <?php
                while (have_posts()) {
                    the_post();
                    get_template_part('parts/blocks/post-list');
                }
                echo get_the_posts_pagination([
                    'prev_next' => false,
                    'screen_reader_text' => ' ',
                    'aria_label' => '',
                ]); ?>
            </div>
            <aside class="sidebar">
                <div class="team-vidget">
                    <?php get_template_part('parts/blocks/form-sidebar'); ?>
                </div>
            </aside>
        </div>
    </div>
    <?php get_template_part('parts/sections/contact'); ?>
</main>

<?php get_footer(); ?>
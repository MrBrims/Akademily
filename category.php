<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-xxl-9 col-xl-8 col-12 page-wrapper pt-5 pb-5">
                <div class="global-title mb-5">
                    <h1><?= single_cat_title(); ?></h1>
                </div>
                <?php
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/components/loop/blog');
                }
                ?>

                <?= get_the_posts_pagination([
                    'prev_next' => false,
                    'screen_reader_text' => ' ',
                    'aria_label' => '',
                ]); ?>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php
get_footer();
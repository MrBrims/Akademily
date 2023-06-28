<?php
get_header();
while (have_posts()) {
    the_post();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 page-wrapper pt-5 pb-5">
                <div class="global-title mb-5">
                    <h1><?= get_the_title(); ?></h1>
                </div>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <?php
}
get_footer();
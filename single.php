<?php
get_header();
while (have_posts()) {
    the_post();
    ?>
    <div class="container blog-single">
        <div class="row">
            <div id="article" class="col-lg-9 col-12 page-wrapper pt-5 pb-5">
                <div class="global-title mb-5">
                    <h1><?= get_the_title(); ?></h1>
                </div>
                <?php echo get_the_post_thumbnail(); ?><br><br>
                <?php
                get_template_part('template-parts/components/page-meta');

                the_content();?>
                
                 <?php
               
                 

                  /** Sections top */
                get_template_part('template-parts/components/sectionsTop');
                get_template_part('template-parts/components/sectionsBottom');
                ?>

                <div class="text-center mt-4">
                  <a class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#Modal">Preisvorschlag</a>
                </div><br><br>
                <?php get_template_part('template-parts/components/sections');
                /** FAQ */
                get_template_part('template-parts/components/faq');
                get_template_part('template-parts/components/page-author');
                
                ?>
                
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php get_template_part('template-parts/components/blog'); ?>
    <?php
}
get_footer();
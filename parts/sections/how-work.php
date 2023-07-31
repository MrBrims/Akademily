<section class="how-work section">
    <h2 class="how-work__title title">
        <?php if (!empty(carbon_get_post_meta(get_the_ID(), 'how-work_title_after'))) : ?>
            <?php echo carbon_get_post_meta(get_the_ID(), 'how-work_title_after'); ?>
        <?php endif ?>
    </h2>
    <div class="how-work__content">
        <?php if (!empty(carbon_get_post_meta(get_the_ID(), 'how-work_text_after'))) : ?>
            <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'how-work_text_after')); ?>
        <?php endif ?>
    </div>
    <div class="how-work__inner">
        <?php get_template_part('parts/blocks/accordion-work'); ?>
    </div>
    <h2 class="how-work__title title">
        <?php if (!empty(carbon_get_post_meta(get_the_ID(), 'how-work_title_before'))) : ?>
            <?php echo carbon_get_post_meta(get_the_ID(), 'how-work_title_before'); ?>
        <?php endif ?>
    </h2>
    <div class="how-work__content">
        <?php if (!empty(carbon_get_post_meta(get_the_ID(), 'how-work_text_before'))) : ?>
            <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'how-work_text_before')); ?>
        <?php endif ?>
    </div>
</section>
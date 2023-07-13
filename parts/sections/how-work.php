<section class="how-work section">
    <h2 class="how-work__title title">
        <?php echo carbon_get_post_meta(get_the_ID(), 'how-work_title_after'); ?>
    </h2>
    <div class="how-work__content">
        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'how-work_text_after')); ?>
    </div>
    <div class="how-work__inner">
        <?php get_template_part('parts/blocks/accordion-work'); ?>
    </div>
    <h2 class="how-work__title title">
        <?php echo carbon_get_post_meta(get_the_ID(), 'how-work_title_before'); ?>
    </h2>
    <div class="how-work__content">
        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'how-work_text_before')); ?>
    </div>
</section>
<section class="message">
    <div class="message__container">
        <h2 class="message__title title">
            <?php echo carbon_get_post_meta(get_the_ID(), 'message_title'); ?>
        </h2>
        <p class="message__subtitle">
            <?php echo carbon_get_post_meta(get_the_ID(), 'message_subtitle'); ?>
        </p>
        <?php get_template_part('parts/blocks/form-main'); ?>
    </div>
</section>
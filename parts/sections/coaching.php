<section class="section coaching">
    <h2 class="title coaching__title">
        <?php echo carbon_get_post_meta(get_the_ID(), 'coaching_title'); ?>
    </h2>
    <div class="coaching__content">
        <?php echo carbon_get_post_meta(get_the_ID(), 'coaching_text'); ?>
    </div>
</section>
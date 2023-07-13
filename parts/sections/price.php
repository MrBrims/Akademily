<section class="price">
    <div class="container">
        <h2 class="price__title title">
            <?php echo carbon_get_post_meta(get_the_ID(), 'price_title'); ?>
        </h2>
        <?php get_template_part('parts/blocks/tab-price'); ?>
    </div>
</section>
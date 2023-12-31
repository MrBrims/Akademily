<section class="section relax">
    <h2 class="title relax__title">
        <?php echo carbon_get_post_meta(get_the_ID(), 'relax_title'); ?>
    </h2>
    <div class="relax__content">
        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'relax_text')); ?>
    </div>
    <?php if (!empty(carbon_get_post_meta(get_the_ID(), 'relax_btn'))) : ?>
        <a class="btn relax__btn popup-link" href="#popup-form">
            <?php echo carbon_get_post_meta(get_the_ID(), 'relax_btn'); ?>
        </a>
    <?php endif ?>
</section>
<section class="price">
    <div class="container">
        <h2 class="price__title title">
            <?php
            if (is_page_template('parts/page-fach.php')) {
                echo carbon_get_post_meta(get_the_ID(), 'local_price_title');
            } else {
                echo carbon_get_post_meta(get_the_ID(), 'price_title');
            }
            ?>
        </h2>
        <?php
        if (is_page_template('parts/page-fach.php')) {
            get_template_part('parts/blocks/local-price');
        } else {
            get_template_part('parts/blocks/tab-price');
        }
        ?>
    </div>
</section>
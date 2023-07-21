<section class="section bakalavr">
    <div class="container">
        <h2 class="title bakalavr__title">
            <?php echo carbon_get_theme_option('bakalavr_title'); ?>
        </h2>
        <ul class="bakalavr__list">
            <?php foreach ((carbon_get_theme_option('bakalavr_card')) as $key) : ?>
                <li class="bakalavr__items">
                    <a class="bakalavr__items-link" href="<?php echo $key['bakalavr_card_link']; ?>">
                        <?php echo $key['bakalavr_card_text']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section> <?php echo carbon_get_theme_option(''); ?>
<section class="section qualification">
    <div class="container">
        <h2 class="title qualification__title">
            <?php echo carbon_get_theme_option('qualification_title'); ?>
        </h2>
        <div class="qualification__items">
            <?php foreach ((carbon_get_theme_option('qualification_card')) as $key) : ?>
                <div class="qualification__item">
                    <img class="qualification__item-icons" src="<?php echo $key['qualification_card_img']; ?>" alt="icons">
                    <h4 class="qualification__item-text">
                        <?php echo $key['qualification_card_title']; ?>
                    </h4>
                    <span class="qualification__tippy" data-tippy-content="<?php echo $key['qualification_card_quest']; ?>">i</span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
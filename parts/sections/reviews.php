<section class="section reviews">
    <div class="container">
        <h2 class="title reviews__title">
            <?php echo carbon_get_theme_option('reviews_title'); ?>
        </h2>
        <div class="reviews__stars">
            <?php get_template_part('parts/blocks/rating') ?>
        </div>
        <div class="tab reviews-tab">
            <div class="tab__nav-inner reviews-tab__inner">
                <div class="tab__nav reviews-tab__nav">
                    <?php echo carbon_get_theme_option('reviews_name_tab_1'); ?>
                </div>
                <div class="tab__nav reviews-tab__nav">
                    <?php echo carbon_get_theme_option('reviews_name_tab_2'); ?>
                </div>
            </div>
            <div class="tab__content-inner reviews-tab__content-inner">
                <div class="tab__content reviews-tab__content">
                    <div class="site-rev">
                        <div class="site-rev__body swiper">
                            <div class="site-rev__wrapper swiper-wrapper">
                                <?php foreach ((carbon_get_theme_option('site_reviews')) as $key) : ?>
                                    <div class="site-rev__slide swiper-slide">
                                        <div class="site-rev__slide-wrapper">
                                            <h4 class="site-rev__slide-title">
                                                <?php echo $key['site_reviews_name']; ?>
                                            </h4>
                                            <p class="site-rev__slide-score">
                                                <?php echo $key['site_reviews_score']; ?>
                                            </p>
                                            <p class="site-rev__slide-text">
                                                <?php echo $key['site_reviews_text']; ?>
                                            </p>
                                            <p class="site-rev__slide-time">
                                                <?php echo $key['site_reviews_date']; ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="site-rev__nav"></div>
                    </div>
                </div>
                <div class="tab__content reviews-tab__content">
                    <div class="soc-rev">
                        <div class="soc-rev__body swiper">
                            <div class="soc-rev__wrapper swiper-wrapper">
                                <?php foreach ((carbon_get_theme_option('soc_reviews')) as $key) : ?>
                                    <div class="soc-rev__slide swiper-slide">
                                        <img class="soc-rev__slide-img" src="<?php echo $key['soc_reviews_img']; ?>" alt="social reviews">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="soc-rev__nav"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
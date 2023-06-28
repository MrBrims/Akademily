<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div id="article" class="col-xxl-9 col-xl-8 col-12 page-wrapper pt-5">
                <div class="global-title mb-5">
                    <h1><?= get_the_author_meta('display_name'); ?></h1>
                </div>
                <div class="author-content d-block d-md-flex">
                    <div class="author-content-item me-md-4 mb-3 text-center text-md-start">
                        <img src="<?= carbon_get_user_meta(get_the_author_meta('ID'), 'de_avatar'); ?>" />
                    </div>
                    <div class="author-content-item">
                        <?= get_the_author_meta('description'); ?>

                        <div class="social-media mt-2 mt-md-3">
                            <?php if ($facebook = get_the_author_meta('facebook')) { ?>
                                <a target="_blank" href="<?= $facebook; ?>">
                                    <img src="<?= DE_URI; ?>/assets/images/social/facebook.svg" alt="Facebook"/>
                                </a>
                            <?php } ?>
                            <?php if ($youtube = get_the_author_meta('youtube')) { ?>
                                <a target="_blank" href="<?= $youtube; ?>">
                                    <img src="<?= DE_URI; ?>/assets/images/social/youtube.svg" alt="YouTube"/>
                                </a>
                            <?php } ?>
                            <?php if ($instagram = get_the_author_meta('instagram')) { ?>
                                <a target="_blank" href="<?= $instagram; ?>">
                                    <img src="<?= DE_URI; ?>/assets/images/social/instagram.svg" alt="Instagram"/>
                                </a>
                            <?php } ?>
                            <?php if ($twitter = get_the_author_meta('twitter')) { ?>
                                <a target="_blank" href="<?= $twitter; ?>">
                                    <img src="<?= DE_URI; ?>/assets/images/social/twitter.svg" alt="Twitter"/>
                                </a>
                            <?php } ?>
                            <?php if ($linkedin = get_the_author_meta('linkedin')) { ?>
                                <a target="_blank" href="<?= $linkedin; ?>">
                                    <img src="<?= DE_URI; ?>/assets/images/social/linkedin.svg" alt="LinkedIn"/>
                                </a>
                            <?php } ?>
                            <?php if ($myspace = get_the_author_meta('myspace')) { ?>
                                <a target="_blank" href="<?= $myspace; ?>">
                                    <img src="<?= DE_URI; ?>/assets/images/social/myspace.svg" alt="MySpace"/>
                                </a>
                            <?php } ?>
                            <?php if ($pinterest = get_the_author_meta('pinterest')) { ?>
                                <a target="_blank" href="<?= $pinterest; ?>">
                                    <img src="<?= DE_URI; ?>/assets/images/social/pinterest.svg" alt="Pinterest"/>
                                </a>
                            <?php } ?>
                            <?php if ($soundcloud = get_the_author_meta('soundcloud')) { ?>
                                <a target="_blank" href="<?= $soundcloud; ?>">
                                    <img src="<?= DE_URI; ?>/assets/images/social/soundcloud.svg" alt="SoundCloud"/>
                                </a>
                            <?php } ?>
                            <?php if ($tumblr = get_the_author_meta('tumblr')) { ?>
                                <a target="_blank" href="<?= $tumblr; ?>">
                                    <img src="<?= DE_URI; ?>/assets/images/social/tumblr.svg" alt="Tumblr"/>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer();
<section class="contact section">
    <div class="container">
        <h3 class="title contact__title">
            <?php echo carbon_get_theme_option('contact_whatsapp_title'); ?>
        </h3>
        <p class="contact__subtitle">
            <?php echo carbon_get_theme_option('contact__whatsapp_subtitle'); ?>
        </p>
        <a class="contact__btn" href="https://wa.me/<?php echo preg_replace('/[^,.0-9]/', '', carbon_get_theme_option('global_whatsapp')); ?>"> 
            <?php echo carbon_get_theme_option('contact__whatsapp_btn'); ?>
        </a>
    </div>
</section>
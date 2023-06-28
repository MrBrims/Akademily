<!DOCTYPE html>
<html lang="de-DE">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
  <meta name="ahrefs-site-verification" content="6b9c0c683d94d02847a03035e120f7761fb17cb6e7ade600f7319a99f4c3bd90">
</head>

<body <?php body_class(); ?>>


  <div class="wrapper">
    <header class="header">
      <div class="header__top">
        <div class="container">
          <div class="header__top-inner">
            <div class="header__top-adress">
              <?php echo carbon_get_theme_option('global__adress'); ?>
            </div>
            <div class="header__top-time">
              <?php echo carbon_get_theme_option('global_time'); ?>
            </div>
            <a class="header__top-phone" href="tel:+<?php echo preg_replace("/[^,.0-9]/", '', carbon_get_theme_option('global_phone')); ?>">
              <?php echo carbon_get_theme_option('global_phone'); ?>
            </a>
            <a class="header__top-mail" href="mailto:<?php echo carbon_get_theme_option('global_email'); ?>">
              <?php echo carbon_get_theme_option('global_email'); ?>
            </a>
          </div>
        </div>
      </div>
      <div class="header__bottom">
        <div class="container">
          <div class="header__bottom-inner">
            <a class="header__logo-link" href="#">
              <img class="header__logo-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/logo.svg" alt="logo">
            </a>
            <div class="header__menu-wrapper">
              <div class="menu-box">
                <a class="menu-box__logo-link" href="#">
                  <img class="menu-box__logo-img" src="<?php echo get_template_directory_uri(); ?>/resources/images/logo.svg" alt="logo">
                </a>
                <?php
                wp_nav_menu([
                  'theme_location' => 'top-menu',
                  'container' => 'nav',
                  'container_class' => 'top-nav',
                  'container_id' => 'top-nav',
                  'menu_class' => 'top-menu',
                  'menu_id' => 'top-menu',
                  'add_li_class'  => 'top-menu__items',
                ]);
                ?>
                <div class="menu-box__inner">
                  <div class="menu-box__adress">
                    <?php echo carbon_get_theme_option('global__adress'); ?>
                  </div>
                  <div class="menu-box__time">
                    <?php echo carbon_get_theme_option('global_time'); ?>
                  </div>
                  <a class="menu-box__phone" href="tel:+<?php echo preg_replace("/[^,.0-9]/", '', carbon_get_theme_option('global_phone')); ?>">
                    <?php echo carbon_get_theme_option('global_phone'); ?>
                  </a>
                  <a class="menu-box__mail" href="mailto:<?php echo carbon_get_theme_option('global_email'); ?>">
                    <?php echo carbon_get_theme_option('global_email'); ?>
                  </a>
                </div>
              </div>
              <div class="header__btn-wrappper">
                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                  <circle class="header__btn-circle" cx="50" cy="50" r="30" />
                  <path class="line--1" d="M0 40h62c13 0 6 28-4 18L35 35" />
                  <path class="line--2" d="M0 50h70" />
                  <path class="line--3" d="M0 60h62c13 0 6-28-4-18L35 65" />
                </svg>
              </div>
            </div>
          </div>

        </div>
      </div>
    </header>

































    <?php

    // preg_replace("/[^,.0-9]/", '', carbon_get_theme_option('global_phone'));

    // wp_nav_menu([
    //   'theme_location' => 'top-menu',
    //   'container_class' => 'wrap-top-menu d-lg-block d-none',
    //   'container_id' => 'wrap-top-menu',
    //   'menu_class' => 'top-menu',
    //   'menu_id' => 'top-menu',
    // ]);

    // if (!is_front_page() && function_exists('yoast_breadcrumb')) {
    //   yoast_breadcrumb('<div class="breadcrumb-list">', '</div>');
    // }

    // wp_nav_menu([
    //   'theme_location' => 'top-menu',
    //   'container_class' => 'wrap-top-menu d-lg-block d-none',
    //   'container_id' => 'wrap-top-menu',
    //   'menu_class' => 'top-menu',
    //   'menu_id' => 'top-menu',
    // ]);


    ?>
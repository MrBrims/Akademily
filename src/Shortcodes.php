<?php

class Shortcodes
{
    public function __construct()
    {
        add_action('init', [$this, 'mceButtons']);
        add_shortcode( 'bage', [$this, 'trustBage']);
    }

    public function mceButtons()
    {
        add_filter('mce_external_plugins', [$this, 'mceAddButtons']);
        add_filter('mce_buttons', [$this, 'mceRegisterButtons']);

        add_shortcode('modal-button', [$this, 'generateButtonForModalWindow']);
    }

    public function mceAddButtons($pluginArray)
    {
        $pluginArray['mcButtons'] = DE_URI . '/assets/js/admin.js';
        return $pluginArray;
    }

    public function mceRegisterButtons($buttons)
    {
        array_push($buttons, 'modal-button');
        return $buttons;
    }

    public static function generateButtonForModalWindow($atts): string
    {
        $name = !empty($atts['name']) ? $atts['name'] : 'ANFRAGEN';
        return '
        <div class="text-center mt-4">
            <a class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#Modal">'. $name .'</a>
        </div>
        ';
    }

    public static function trustBage(): string
    {
        return '
        <div class="banner-content">
            <div class="banner-content__img"><img src="https://akademily.local/wp-content/uploads/2022/06/Group-309.png" alt="" width="100%"></div>
            <div class="banner-content__text">
            <h4>Brauchen sie Hilfe?</h4>
            <p>Vertrauen Sie Ihre Arbeit echten Profis an!</p>
            </div>
            <div class="banner-content__btn"><a class="btn popup-link" href="#popup-form">
                PREISVORSCHLAG
            </a></div>
        </div>
        ';
    }
}

new Shortcodes();
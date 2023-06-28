<?php

class Shortcodes
{
    public function __construct()
    {
        add_action('init', [$this, 'mceButtons']);
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
}

new Shortcodes();
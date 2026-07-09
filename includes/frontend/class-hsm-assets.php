<?php

if (!defined('ABSPATH')) {
    exit;
}

class HSM_Assets {

    public static function init() {
        add_action('wp_enqueue_scripts', [__CLASS__, 'enqueue_assets']);
    }

    public static function enqueue_assets() {
        wp_enqueue_style(
            'hsm-portal-css',
            HSM_CUSTOM_URL . 'assets/css/hsm-portal.css',
            [],
            HSM_CUSTOM_VERSION
        );

        wp_enqueue_script(
            'hsm-portal-js',
            HSM_CUSTOM_URL . 'assets/js/hsm-portal.js',
            ['jquery'],
            HSM_CUSTOM_VERSION,
            true
        );
    }
}
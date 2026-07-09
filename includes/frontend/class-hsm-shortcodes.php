<?php

if (!defined('ABSPATH')) {
    exit;
}

class HSM_Shortcodes {

    public static function init() {
        add_shortcode('hsm_custom_test', [__CLASS__, 'test_shortcode']);
    }

    public static function test_shortcode() {
        return '<div class="hsm-test-box">HSM Custom Plugin is active.</div>';
    }
}
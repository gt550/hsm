<?php

if (!defined('ABSPATH')) {
    exit;
}

class HSM_Shortcodes {

    public static function init() {
        add_shortcode('hsm_custom_test', [__CLASS__, 'test_shortcode']);
        add_shortcode('hsm_current_user_email', [__CLASS__, 'current_user_email']);
    }

    public static function test_shortcode() {
        return '<div class="hsm-test-box">HSM Custom Plugin is active.</div>';
    }

    public static function current_user_email() {

        if (!is_user_logged_in()) {
            return '';
        }

        $user = wp_get_current_user();

        return esc_html($user->user_email);
    }
    
}
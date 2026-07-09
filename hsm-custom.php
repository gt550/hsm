<?php
/**
 * Plugin Name: HSM Custom
 * Description: Custom WordPress integration for the HSM portal.
 * Version: 1.0.0
 * Author: HSM
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Test shortcode.
 *
 * Usage: [hsm_custom_test]
 */
add_shortcode('hsm_custom_test', function () {
    return '<div>HSM Custom Plugin is active.</div>';
});
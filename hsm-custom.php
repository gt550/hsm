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

define('HSM_CUSTOM_VERSION', '1.0.0');
define('HSM_CUSTOM_PATH', plugin_dir_path(__FILE__));
define('HSM_CUSTOM_URL', plugin_dir_url(__FILE__));

require_once HSM_CUSTOM_PATH . 'includes/class-hsm-loader.php';

HSM_Loader::init();
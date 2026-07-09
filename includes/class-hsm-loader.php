<?php

if (!defined('ABSPATH')) {
    exit;
}

class HSM_Loader {

    public static function init() {
        require_once HSM_CUSTOM_PATH . 'includes/integrations/class-hsm-salesforce.php';
        require_once HSM_CUSTOM_PATH . 'includes/rest/class-hsm-profile-api.php';
        require_once HSM_CUSTOM_PATH . 'includes/frontend/class-hsm-shortcodes.php';
        require_once HSM_CUSTOM_PATH . 'includes/frontend/class-hsm-assets.php';

        HSM_Profile_API::init();
        HSM_Shortcodes::init();
        HSM_Assets::init();
    }
}
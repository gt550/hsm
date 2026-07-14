<?php

if (!defined('ABSPATH')) {
    exit;
}

class HSM_Config
{
    public static function get($key, $default = '')
    {
        $constant = 'HSM_' . strtoupper($key);

        if (defined($constant)) {
            return constant($constant);
        }

        return get_option('hsm_' . strtolower($key), $default);
    }
}
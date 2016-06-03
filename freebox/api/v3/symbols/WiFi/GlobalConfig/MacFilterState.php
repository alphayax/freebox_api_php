<?php
namespace alphayax\freebox\api\v3\symbols\WiFi\GlobalConfig;

/**
 * Symbol MacFilterState
 * @package alphayax\freebox\api\v3\symbols\WiFi\GlobalConfig
 * @see alphayax\freebox\api\v3\models\WiFi\GlobalConfig
 */
interface MacFilterState {

    /** mac filter is disabled */
    const DISABLED = 'disabled';

    /** mac filter is enabled, using a whitelist */
    const WHITELIST = 'whitelist';

    /** mac filter is enabled, using a blacklist */
    const BLACKLIST = 'blacklist';
}

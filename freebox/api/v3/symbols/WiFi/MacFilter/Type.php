<?php
namespace alphayax\freebox\api\v3\symbols\WiFi\MacFilter;

/**
 * Symbol Type
 * @package alphayax\freebox\api\v3\symbols\WiFi\MacFilter
 * @see alphayax\freebox\api\v3\models\WiFi\MacFilter
 */
interface Type {

    /** if mac_filter is set to whitelist this station will be allowed */
    const WHITELIST = 'whitelist';

    /** if mac_filter is set to blacklist this station will be rejected */
    const BLACKLIST = 'blacklist';
}

<?php
namespace alphayax\freebox\api\v3\symbols\VPN\PPTPConfig;

/**
 * Symbol Mppe
 * @package alphayax\freebox\api\v3\symbols\VPN\PPTPConfig
 * @see alphayax\freebox\api\v3\models\VPN\Server\Config\PPTPConfig
 */
interface Mppe {

    /** disable mppe */
    const DISABLE = 'disable';

    /** require mppe */
    const REQUIRE_ = 'require';

    /** require 128 bits mppe */
    const REQUIRE_128 = 'require_128';
}

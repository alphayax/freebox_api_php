<?php
namespace alphayax\freebox\api\v3\symbols\VPN\IpInfo;

/**
 * Symbol Provider
 * @package alphayax\freebox\api\v3\symbols\VPN\IpInfo
 * @see alphayax\freebox\api\v3\models\VPN\Client\IpInfo
 */
interface Provider {

    /** none */
    const NONE = 'none';
    /** static IP configuration */
    const STATIC_ = 'static';
    /** ppp */
    const PPP = 'ppp';
    /** DHCP server */
    const DHCP = 'dhcp';
}

<?php
namespace alphayax\freebox\api\v3\symbols\VPN\ServerConfig;

/**
 * Symbol Type
 * @package alphayax\freebox\api\v3\symbols\VPN\ServerConfig
 * @see alphayax\freebox\api\v3\models\VPN\Server\Config\ServerConfig
 */
interface Type {

    /** PPTP VPN server */
    const PPTP = 'pptp';

    /** OpenVPN server */
    const OPEN_VPN = 'openvpn';
}

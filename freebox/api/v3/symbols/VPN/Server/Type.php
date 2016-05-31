<?php
namespace alphayax\freebox\api\v3\symbols\VPN\Server;

/**
 * Symbol Type
 * @package alphayax\freebox\api\v3\symbols\VPN\Server
 */
interface Type {

    /** PPTP VPN server */
    const PPTP = 'pptp';

    /** OpenVPN server */
    const OPEN_VPN = 'openvpn';
}

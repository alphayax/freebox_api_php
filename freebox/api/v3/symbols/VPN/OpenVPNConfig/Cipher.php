<?php
namespace alphayax\freebox\api\v3\symbols\VPN\OpenVPNConfig;

/**
 * Symbol Cipher
 * @package alphayax\freebox\api\v3\symbols\VPN\OpenVPNConfig
 * @see alphayax\freebox\api\v3\models\VPN\Server\Config\OpenVPNConfig
 */
interface Cipher {

    const BLOWFISH  = 'blowfish';
    const AES128    = 'aes128';
    const AES256    = 'aes256';
}

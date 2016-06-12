<?php
namespace alphayax\freebox\api\v3\services\config\VPN\Server;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;

/**
 * Class VPNServerConfig
 * @package alphayax\freebox\api\v3\services\config\VPN\Server
 */
class Config extends Service {

    const API_VPN_SERVER_CONFIG = '/api/v3/vpn/%s/config/';

    /**
     * Get a VPN config
     * @param string $vpnId (eg: openvpn_routed)
     * @return models\VPN\Server\Config\ServerConfig
     */
    public function getConfigurationFromId( $vpnId){
        $service = sprintf( self::API_VPN_SERVER_CONFIG, $vpnId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResult( models\VPN\Server\Config\ServerConfig::class);
    }

    /**
     * Update the VPN configuration
     * @param models\VPN\Server\Config\ServerConfig $serverConfig
     * @return models\VPN\Server\Config\ServerConfig
     */
    public function setConfiguration( models\VPN\Server\Config\ServerConfig $serverConfig){
        $service = sprintf( self::API_VPN_SERVER_CONFIG, $serverConfig->getId());
        $rest = $this->getAuthService( $service);
        $rest->PUT( $serverConfig);

        return $rest->getResult( models\VPN\Server\Config\ServerConfig::class);
    }

}

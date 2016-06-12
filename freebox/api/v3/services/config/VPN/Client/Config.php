<?php
namespace alphayax\freebox\api\v3\services\config\VPN\Client;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class Config
 * @package alphayax\freebox\api\v3\services\config\VPN\Client
 */
class Config extends Service {

    const API_VPN_CLIENT_CONFIG = '/api/v3/vpn_client/config/';

    /**
     * Get VPN Client configuration list
     * @return models\VPN\Client\Config\ClientConfig[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_VPN_CLIENT_CONFIG);
        $rest->GET();

        return $rest->getResultAsArray( models\VPN\Client\Config\ClientConfig::class);
    }

    /**
     * @param string $configId
     * @return models\VPN\Client\Config\ClientConfig
     */
    public function getFromId( $configId) {
        $rest = $this->getAuthService( self::API_VPN_CLIENT_CONFIG . $configId);
        $rest->GET();

        return $rest->getResult( models\VPN\Client\Config\ClientConfig::class);
    }

    /**
     * @param models\VPN\Client\Config\ClientConfig $config
     * @return models\VPN\Client\Config\ClientConfig
     */
    public function add( models\VPN\Client\Config\ClientConfig $config) {
        $rest = $this->getAuthService( self::API_VPN_CLIENT_CONFIG);
        $rest->POST( $config);

        return $rest->getResult( models\VPN\Client\Config\ClientConfig::class);
    }

    /**
     * @param models\VPN\Client\Config\ClientConfig $config
     * @return models\VPN\Client\Config\ClientConfig
     */
    public function delete( models\VPN\Client\Config\ClientConfig $config) {
        return $this->deleteFromId( $config->getId());
    }

    /**
     * @param string $configId
     * @return models\VPN\Client\Config\ClientConfig
     */
    public function deleteFromId( $configId) {
        $rest = $this->getAuthService( self::API_VPN_CLIENT_CONFIG . $configId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * @param models\VPN\Client\Config\ClientConfig $config
     * @return models\VPN\Client\Config\ClientConfig
     */
    public function update( models\VPN\Client\Config\ClientConfig $config) {
        $rest = $this->getAuthService( self::API_VPN_CLIENT_CONFIG. $config->getId());
        $rest->PUT( $config);

        return $rest->getResult( models\VPN\Client\Config\ClientConfig::class);
    }
    
}

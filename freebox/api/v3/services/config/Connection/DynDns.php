<?php
namespace alphayax\freebox\api\v3\services\config\Connection;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class DynDns
 * @package alphayax\freebox\api\v3\services\config\Connection
 */
abstract class DynDns extends ServiceAuth {

    const API_CONNECTION_DDNS_STATUS = '/api/v3/connection/ddns/%s/status/';
    const API_CONNECTION_DDNS_CONFIG = '/api/v3/connection/ddns/%s/';

    /**
     * Get the current DDns status by a given dynamic dns provider
     * @param string $provider
     * @return \alphayax\freebox\api\v3\models\Connection\DynDns\Status
     */
    protected function getStatusFromProvider( $provider){
        $service = sprintf( self::API_CONNECTION_DDNS_STATUS, $provider);
        $rest = $this->getService( $service);
        $rest->GET();

        return $rest->getResult( models\Connection\DynDns\Status::class);
    }

    /**
     * Get the current DDns config by a given dynamic dns provider
     * @param string $provider
     * @return \alphayax\freebox\api\v3\models\Connection\DynDns\Config
     */
    protected function getConfigFromProvider( $provider){
        $service = sprintf( self::API_CONNECTION_DDNS_CONFIG, $provider);
        $rest = $this->getService( $service);
        $rest->GET();

        return $rest->getResult( models\Connection\DynDns\Config::class);
    }

    /**
     * @param string $provider
     * @param models\Connection\DynDns\Config $config
     * @return models\Connection\DynDns\Config
     */
    protected function setConfigFromProvider( $provider, models\Connection\DynDns\Config $config){
        $service = sprintf( self::API_CONNECTION_DDNS_CONFIG, $provider);
        $rest = $this->getService( $service);
        $rest->PUT( $config);

        return $rest->getResult( models\Connection\DynDns\Config::class);
    }

    /**
     * Get the current DDns status
     * @return \alphayax\freebox\api\v3\models\Connection\DynDns\Status
     */
    abstract public function getStatus();

    /**
     * Get the current DDns Configuration
     * @return models\Connection\DynDns\Config
     */
    abstract public function getConfig();

    /**
     * Set the DDns Configuration
     * @param models\Connection\DynDns\Config $config
     * @return models\Connection\DynDns\Config
     */
    abstract public function setConfig( models\Connection\DynDns\Config $config);

}

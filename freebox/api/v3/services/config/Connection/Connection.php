<?php
namespace alphayax\freebox\api\v3\services\config\Connection;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Connection
 * @package alphayax\freebox\api\v3\services\config\Connection
 */
class Connection extends ServiceAuth {

    const API_CONNECTION                = '/api/v3/connection/';
    const API_CONNECTION_CONFIG         = '/api/v3/connection/config/';
    const API_CONNECTION_IPV6_CONFIG    = '/api/v3/connection/ipv6/config/';

    /**
     * Get the current Connection status
     * @return models\Connection\Status
     */
    public function getStatus(){
        $rest = $this->getService( self::API_CONNECTION);
        $rest->GET();

        return $rest->getResult( models\Connection\Status::class);
    }

    /**
     * Get the current Connection configuration
     * @return models\Connection\Config
     */
    public function getConfiguration(){
        $rest = $this->getService( self::API_CONNECTION_CONFIG);
        $rest->GET();

        return $rest->getResult( models\Connection\Config::class);
    }


    /**
     * Get the current Connection configuration
     * @param models\Connection\Config $connectionConfig
     * @return models\Connection\Config
     */
    public function setConfiguration( models\Connection\Config $connectionConfig){
        $rest = $this->getService( self::API_CONNECTION_CONFIG);
        $rest->PUT( $connectionConfig);

        return $rest->getResult( models\Connection\Config::class);
    }

    /**
     * Get the current IPv6 Connection configuration
     */
    public function getIPv6Configuration(){
        $rest = $this->getService( self::API_CONNECTION_IPV6_CONFIG);
        $rest->GET();

        return $rest->getResult( models\Connection\Ipv6\Configuration::class);
    }

    /**
     * Update the IPv6 Connection configuration
     * @param \alphayax\freebox\api\v3\models\Connection\Ipv6\Configuration $connectionIpv6Configuration
     * @return \alphayax\freebox\api\v3\models\Connection\Ipv6\Configuration
     */
    public function setIPv6Configuration(models\Connection\Ipv6\Configuration $connectionIpv6Configuration){
        $rest = $this->getService( self::API_CONNECTION_IPV6_CONFIG);
        $rest->PUT( $connectionIpv6Configuration);

        return $rest->getResult( models\Connection\Ipv6\Configuration::class);
    }

}

<?php
namespace alphayax\freebox\api\v3\services\config\Connection;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class Connection
 * @package alphayax\freebox\api\v3\services\config\Connection
 */
class Connection extends Service{

    const API_CONNECTION                = '/api/v3/connection/';
    const API_CONNECTION_CONFIG         = '/api/v3/connection/config/';
    const API_CONNECTION_IPV6_CONFIG    = '/api/v3/connection/ipv6/config/';

    /**
     * Get the current Connection status
     * @return models\Connection\Status
     */
    public function getStatus(){
        $rest = $this->getAuthService( self::API_CONNECTION);
        $rest->GET();

        return new models\Connection\Status( $rest->getCurlResponse()['result']);
    }

    /**
     * Get the current Connection configuration
     * @return models\Connection\Config
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_CONNECTION_CONFIG);
        $rest->GET();

        return new models\Connection\Config( $rest->getCurlResponse()['result']);
    }


    /**
     * Get the current Connection configuration
     * @param models\Connection\Config $connectionConfig
     * @return models\Connection\Config
     */
    public function setConfiguration( models\Connection\Config $connectionConfig){
        $rest = $this->getAuthService( self::API_CONNECTION_CONFIG);
        $rest->PUT( $connectionConfig->toArray());

        return new models\Connection\Config( $rest->getCurlResponse()['result']);
    }

    /**
     * Get the current IPv6 Connection configuration
     */
    public function getIPv6Configuration(){
        $rest = $this->getAuthService( self::API_CONNECTION_IPV6_CONFIG);
        $rest->GET();

        return new models\Connection\Ipv6\Configuration( $rest->getCurlResponse()['result']);
    }

    /**
     * Update the IPv6 Connection configuration
     * @param \alphayax\freebox\api\v3\models\Connection\Ipv6\Configuration $connectionIpv6Configuration
     * @return \alphayax\freebox\api\v3\models\Connection\Ipv6\Configuration
     */
    public function setIPv6Configuration(models\Connection\Ipv6\Configuration $connectionIpv6Configuration){
        $rest = $this->getAuthService( self::API_CONNECTION_IPV6_CONFIG);
        $rest->PUT( $connectionIpv6Configuration->toArray());

        return new models\Connection\Ipv6\Configuration( $rest->getCurlResponse()['result']);
    }

}
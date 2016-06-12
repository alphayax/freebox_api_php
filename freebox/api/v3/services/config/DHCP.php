<?php
namespace alphayax\freebox\api\v3\services\config;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;


/**
 * Class DHCP
 * @package alphayax\freebox\api\v3\config
 * @author <alphayax@gmail.com>
 */
class DHCP extends Service {

    const API_DHCP_CONFIG = '/api/v3/dhcp/config/';

    /**
     * Get the current DHCP configuration
     * @return models\DhcpConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_DHCP_CONFIG);
        $rest->GET();

        return $rest->getResult( models\DhcpConfig::class);
    }

    /**
     * Update the DHCP configuration
     * @param models\DhcpConfig $dhcpConfig
     * @return models\DhcpConfig
     */
    public function setConfiguration( models\DhcpConfig $dhcpConfig){
        $rest = $this->getAuthService( self::API_DHCP_CONFIG);
        $rest->PUT( $dhcpConfig);

        return $rest->getResult( models\DhcpConfig::class);
    }

}

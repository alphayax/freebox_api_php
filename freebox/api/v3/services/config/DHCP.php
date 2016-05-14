<?php
namespace alphayax\freebox\api\v3\services\config;
use alphayax\freebox\api\v3\models\DhcpConfig;
use alphayax\freebox\api\v3\Service;


/**
 * Class DHCP
 * @package alphayax\freebox\api\v3\config
 * @author <alphayax@gmail.com>
 */
class DHCP extends Service {

    const API_DHCP_CONFIG = '/api/v3/dhcp/config/';

    /**
     * @throws \Exception
     * @return DhcpConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_DHCP_CONFIG);
        $rest->GET();

        return new DhcpConfig( $rest->getCurlResponse()['result']);
    }

    /**
     * @param DhcpConfig $new_DhcpConfig
     * @return DhcpConfig
     * @throws \Exception
     */
    public function setConfiguration( DhcpConfig $new_DhcpConfig){
        $rest = $this->getAuthService( self::API_DHCP_CONFIG);
        $rest->PUT( $new_DhcpConfig->toArray());

        return new DhcpConfig( $rest->getCurlResponse()['result']);
    }

}

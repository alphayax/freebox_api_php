<?php
namespace alphayax\freebox\api\v3\services\config\NAT;
use alphayax\freebox\api\v3\models\DmzConfig;
use alphayax\freebox\api\v3\Service;


/**
 * Class DMZ
 * @package alphayax\freebox\api\v3\services\config\NAT
 * @author <alphayax@gmail.com>
 */
class DMZ extends Service {

    const API_NAT_DMZ = '/api/v3/fw/dmz/';

    /**
     * Get the current Dmz configuration
     * @throws \Exception
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_NAT_DMZ);
        $rest->GET();

        return new DmzConfig( $rest->getCurlResponse()['result']);
    }

    /**
     * Update the current Dmz configuration
     * @param DmzConfig $new_DmzConfig
     * @return DmzConfig
     * @throws \Exception
     */
    public function setConfiguration( DmzConfig $new_DmzConfig){
        $rest = $this->getAuthService( self::API_NAT_DMZ);
        $rest->PUT( $new_DmzConfig->toArray());

        return new DmzConfig( $rest->getCurlResponse()['result']);
    }

}

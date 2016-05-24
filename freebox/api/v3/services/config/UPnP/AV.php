<?php
namespace alphayax\freebox\api\v3\services\config\UPnP;
use alphayax\freebox\api\v3\models\UPnP\UpnpAvConfig;
use alphayax\freebox\api\v3\Service;

/**
 * Class AV
 * @package alphayax\freebox\api\v3\services\config\UPnP
 */
class AV extends Service {

    const API_UPNP_AV_CONFIG = '/api/v3/upnpav/config/';

    /**
     * Get the current UPnP AV configuration
     * @return UpnpAvConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_UPNP_AV_CONFIG);
        $rest->GET();

        return new UpnpAvConfig( $rest->getCurlResponse()['result']);
    }

    /**
     * Update the UPnP AV configuration
     * @param UpnpAvConfig $new_UpnpAvConfig
     * @return UpnpAvConfig
     * @throws \Exception
     */
    public function setConfiguration( UpnpAvConfig $new_UpnpAvConfig){
        $rest = $this->getAuthService( self::API_UPNP_AV_CONFIG);
        $rest->PUT( $new_UpnpAvConfig->toArray());

        return new UpnpAvConfig( $rest->getCurlResponse()['result']);
    }

}
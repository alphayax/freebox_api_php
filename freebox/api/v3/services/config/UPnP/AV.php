<?php
namespace alphayax\freebox\api\v3\services\config\UPnP;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;

/**
 * Class AV
 * @package alphayax\freebox\api\v3\services\config\UPnP
 */
class AV extends Service {

    const API_UPNP_AV_CONFIG = '/api/v3/upnpav/config/';

    /**
     * Get the current UPnP AV configuration
     * @return models\UPnP\UpnpAvConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_UPNP_AV_CONFIG);
        $rest->GET();

        return $rest->getResult( models\UPnP\UpnpAvConfig::class);
    }

    /**
     * Update the UPnP AV configuration
     * @param models\UPnP\UpnpAvConfig $upnpAvConfig
     * @return models\UPnP\UpnpAvConfig
     * @throws \Exception
     */
    public function setConfiguration( models\UPnP\UpnpAvConfig $upnpAvConfig){
        $rest = $this->getAuthService( self::API_UPNP_AV_CONFIG);
        $rest->PUT( $upnpAvConfig);

        return $rest->getResult( models\UPnP\UpnpAvConfig::class);
    }

}

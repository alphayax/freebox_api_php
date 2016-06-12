<?php
namespace alphayax\freebox\api\v3\services\config\UPnP;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;

/**
 * Class IGD
 * @package alphayax\freebox\api\v3\services\config\UPnP
 */
class IGD extends Service {

    const API_UPNP_IGD_CONFIG       = '/api/v3/upnpigd/config/';
    const API_UPNP_IGD_REDIRECTION  = '/api/v3/upnpigd/redir/';

    /**
     * Get the current UPnP AV configuration
     * @return models\UPnP\UpnpIgdConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_UPNP_IGD_CONFIG);
        $rest->GET();

        return $rest->getResult( models\UPnP\UpnpIgdConfig::class);
    }

    /**
     * Update the UPnP AV configuration
     * @param models\UPnP\UpnpIgdConfig $upnpIgdConfig
     * @return models\UPnP\UpnpIgdConfig
     * @throws \Exception
     */
    public function setConfiguration( models\UPnP\UpnpIgdConfig $upnpIgdConfig){
        $rest = $this->getAuthService( self::API_UPNP_IGD_CONFIG);
        $rest->PUT( $upnpIgdConfig);

        return $rest->getResult( models\UPnP\UpnpIgdConfig::class);
    }

    /**
     * Get the list of current redirection
     * @return models\UPnP\UpnpIgdRedirection[]
     */
    public function getRedirections(){
        $rest = $this->getAuthService( self::API_UPNP_IGD_REDIRECTION);
        $rest->GET();

        return $rest->getResultAsArray( models\UPnP\UpnpIgdRedirection::class);
    }

    /**
     * Delete a redirection
     * @param $redirectionId
     * @return bool
     */
    public function deleteRedirectionFromId( $redirectionId){
        $rest = $this->getAuthService( self::API_UPNP_IGD_REDIRECTION . $redirectionId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

}

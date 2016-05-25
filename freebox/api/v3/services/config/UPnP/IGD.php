<?php
namespace alphayax\freebox\api\v3\services\config\UPnP;
use alphayax\freebox\api\v3\models\UPnP\UpnpIgdConfig;
use alphayax\freebox\api\v3\models\UPnP\UpnpIgdRedirection;
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
     * @return UpnpIgdConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_UPNP_IGD_CONFIG);
        $rest->GET();

        return new UpnpIgdConfig( $rest->getCurlResponse()['result']);
    }

    /**
     * Update the UPnP AV configuration
     * @param UpnpIgdConfig $new_UpnpIgdConfig
     * @return UpnpIgdConfig
     * @throws \Exception
     */
    public function setConfiguration( UpnpIgdConfig $new_UpnpIgdConfig){
        $rest = $this->getAuthService( self::API_UPNP_IGD_CONFIG);
        $rest->PUT( $new_UpnpIgdConfig->toArray());

        return new UpnpIgdConfig( $rest->getCurlResponse()['result']);
    }

    /**
     * Get the list of current redirection
     * @return UpnpIgdRedirection[]
     */
    public function getRedirections(){
        $rest = $this->getAuthService( self::API_UPNP_IGD_REDIRECTION);
        $rest->GET();

        $Redirection_xs = $rest->getCurlResponse()['result'];
        $Redirections   = [];
        foreach( $Redirection_xs as $Redirection_x) {
            $Redirections[] = new UpnpIgdRedirection( $Redirection_x);
        }
        return $Redirections;
    }

    /**
     * Delete a redirection
     * @param $redirectionId
     * @return bool
     */
    public function deleteRedirectionFromId( $redirectionId){
        $rest = $this->getAuthService( self::API_UPNP_IGD_REDIRECTION . $redirectionId);
        $rest->DELETE();

        return (bool) $rest->getCurlResponse()['success'];
    }

}

<?php
namespace alphayax\freebox\api\v3\services\config\NAT;
use alphayax\freebox\api\v3\models\DmzConfig;
use alphayax\freebox\api\v3\models\IncomingPortConfig;
use alphayax\freebox\api\v3\models\PortForwardingConfig;
use alphayax\freebox\api\v3\Service;


/**
 * Class IncomingPort
 * @package alphayax\freebox\api\v3\services\config\NAT
 */
class IncomingPort extends Service {

    const API_NAT_INCOMING = '/api/v3/fw/incoming/';

    /**
     * Getting the list of incoming ports
     * @throws \Exception
     * @return IncomingPortConfig[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_NAT_INCOMING);
        $rest->GET();

        $result = $rest->getCurlResponse()['result'];
        $PortForwardingList = [];
        foreach( $result as $PortForwardingElement){
            $PortForwardingList[] = new IncomingPortConfig( $PortForwardingElement);
        }
        return $PortForwardingList;
    }

    /**
     * Getting a specific incoming port
     * @param string $IncomingPortId
     * @return IncomingPortConfig
     */
    public function getById( $IncomingPortId){
        $rest = $this->getAuthService( self::API_NAT_INCOMING . $IncomingPortId);
        $rest->GET();

        return new IncomingPortConfig( $rest->getCurlResponse()['result']);
    }

    /**
     * Updating an incoming port
     * @param IncomingPortConfig $new_IncomingPortConfig
     * @return IncomingPortConfig
     * @throws \Exception
     */
    public function update( IncomingPortConfig $new_IncomingPortConfig){
        $rest = $this->getAuthService( self::API_NAT_INCOMING . $new_IncomingPortConfig->getId());
        $rest->PUT( $new_IncomingPortConfig->toArray());

        return new IncomingPortConfig( $rest->getCurlResponse()['result']);
    }

}

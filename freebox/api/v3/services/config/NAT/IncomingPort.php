<?php
namespace alphayax\freebox\api\v3\services\config\NAT;
use alphayax\freebox\api\v3\models;
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
     * @return models\NAT\IncomingPortConfig[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_NAT_INCOMING);
        $rest->GET();

        return $rest->getResultAsArray( models\NAT\IncomingPortConfig::class);
    }

    /**
     * Getting a specific incoming port
     * @param string $IncomingPortId
     * @return models\NAT\IncomingPortConfig
     */
    public function getFromId( $IncomingPortId){
        $rest = $this->getAuthService( self::API_NAT_INCOMING . $IncomingPortId);
        $rest->GET();

        return $rest->getResult( models\NAT\IncomingPortConfig::class);
    }

    /**
     * Updating an incoming port
     * @param models\NAT\IncomingPortConfig $incomingPortConfig
     * @return models\NAT\IncomingPortConfig
     * @throws \Exception
     */
    public function update( models\NAT\IncomingPortConfig $incomingPortConfig){
        $rest = $this->getAuthService( self::API_NAT_INCOMING . $incomingPortConfig->getId());
        $rest->PUT( $incomingPortConfig);

        return $rest->getResult( models\NAT\IncomingPortConfig::class);
    }

}

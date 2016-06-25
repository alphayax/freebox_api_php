<?php
namespace alphayax\freebox\api\v3\services\config\VPN\Server;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Connection
 * @package alphayax\freebox\api\v3\services\config\VPN\Server
 */
class Connection extends ServiceAuth {

    const API_VPN_CONNECTION = '/api/v3/vpn/connection/';

    /**
     * Get the list of connections
     * @return models\VPN\Server\Connection::class[]
     */
    public function getAll(){
        $rest = $this->getService( self::API_VPN_CONNECTION);
        $rest->GET();

        return $rest->getResultAsArray( models\VPN\Server\Connection::class);
    }

    /**
     * Close a given connection
     * @param $connectionId
     * @return bool
     */
    public function closeFromId( $connectionId){
        $rest = $this->getService( self::API_VPN_CONNECTION . $connectionId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

}

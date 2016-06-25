<?php
namespace alphayax\freebox\api\v3\services\config\VPN\Client;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Status
 * @package alphayax\freebox\api\v3\services\config\VPN\Client
 */
class Status extends ServiceAuth {

    const API_VPN_CLIENT_STATUS = '/api/v3/vpn_client/status';
    const API_VPN_CLIENT_LOGS   = '/api/v3/vpn_client/log';

    /**
     * Get the VPN client status
     * @return models\VPN\Client\Status
     */
    public function getStatus(){
        $rest = $this->getService( self::API_VPN_CLIENT_STATUS);
        $rest->GET();

        return $rest->getResult( models\VPN\Client\Status::class);
    }

    /**
     * Get the VPN client Logs
     * @return models\VPN\Client\Status
     */
    public function getLogs(){
        $rest = $this->getService( self::API_VPN_CLIENT_LOGS);
        $rest->GET();

        return $rest->getResult();
    }
    
}

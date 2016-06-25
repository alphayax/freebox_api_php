<?php
namespace alphayax\freebox\api\v3\services\config\VPN\Server;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class IpPool
 * @package alphayax\freebox\api\v3\services\config\VPN\Server
 */
class IpPool extends ServiceAuth {

    const API_VPN_IPPOOL = '/api/v3/vpn/ip_pool/';

    /**
     * Get the VPN server IP pool reservations
     * @return array
     */
    public function getReservations(){
        $rest = $this->getService( self::API_VPN_IPPOOL);
        $rest->GET();

        return $rest->getResult();
    }

}

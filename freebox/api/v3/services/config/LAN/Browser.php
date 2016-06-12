<?php
namespace alphayax\freebox\api\v3\services\config\LAN;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;


/**
 * Class Browser
 * @package alphayax\freebox\api\v3\services\config\LAN
 */
class Browser extends Service {

    const API_LAN_BROWSER_INTERFACES = '/api/v3/lan/browser/interfaces/';
    const API_LAN_BROWSER_INTERFACE  = '/api/v3/lan/browser/%s/';
    const API_LAN_BROWSER_HOST       = '/api/v3/lan/browser/%s/%s/';
    const API_WAKE_ON_LAN            = '/api/v3/lan/wol/%s/';

    /**
     * Get all Lan interfaces
     * @return models\LAN\LanInterface
     */
    public function getBrowsableInterfaces(){
        $rest = $this->getAuthService( self::API_LAN_BROWSER_INTERFACES);
        $rest->GET();

        return $rest->getResultAsArray( models\LAN\LanInterface::class);
    }

    /**
     * Get the LanHosts of the specified interface
     * @param models\LAN\LanInterface $lanInterface
     * @return models\LAN\LanHost[]
     */
    public function getHostsFromInterface( models\LAN\LanInterface $lanInterface){
        return $this->getHostsFromInterfaceName( $lanInterface->getName());
    }

    /**
     * Get the LanHosts of the specified interface name
     * @param string $lanInterfaceId
     * @return models\LAN\LanHost[]
     */
    public function getHostsFromInterfaceName( $lanInterfaceId){
        $service = sprintf( self::API_LAN_BROWSER_INTERFACE, $lanInterfaceId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResultAsArray( models\LAN\LanHost::class);
    }

    /**
     * Get a specific LanHost
     * @param string $lanInterfaceId
     * @param string $hostId
     * @return models\LAN\LanHost
     */
    public function getHostFromId( $lanInterfaceId, $hostId){
        $service = sprintf( self::API_LAN_BROWSER_HOST, $lanInterfaceId, $hostId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResult( models\LAN\LanHost::class);
    }

    /**
     * Update a LanHost
     * @param models\LAN\LanHost $LanHost
     * @param string $lanInterfaceId
     * @return models\LAN\LanHost
     */
    public function updateHostFromInterfaceId( models\LAN\LanHost $LanHost, $lanInterfaceId){
        $service = sprintf( self::API_LAN_BROWSER_HOST, $lanInterfaceId, $LanHost->getId());
        $rest = $this->getAuthService( $service);
        $rest->PUT( $LanHost);

        return $rest->getResult( models\LAN\LanHost::class);
    }

    /**
     * Send Wake ok Lan packet to an host
     * @param models\LAN\LanInterface $lanInterface
     * @param models\LAN\LanHost $lanHost
     * @param string $password
     * @return bool
     */
    public function wakeOnLan( models\LAN\LanInterface $lanInterface, models\LAN\LanHost $lanHost, $password = ''){
        $service = sprintf( self::API_WAKE_ON_LAN, $lanInterface->getName());
        $rest = $this->getAuthService( $service);
        $rest->PUT([
            'mac'       => $lanHost->getId(),
            'password'  => $password,
        ]);

        return $rest->getSuccess();
    }

}

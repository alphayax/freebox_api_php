<?php
namespace alphayax\freebox\api\v3\services\config\LAN;
use alphayax\freebox\api\v3\models\LAN\LanHost;
use alphayax\freebox\api\v3\models\LAN\LanInterface;
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
     * @throws \Exception
     * @return LanInterface
     */
    public function getBrowsableInterfaces(){
        $rest = $this->getAuthService( self::API_LAN_BROWSER_INTERFACES);
        $rest->GET();

        $LanInterface_xs = $rest->getCurlResponse()['result'];
        $LanInterfaces   = [];
        foreach( $LanInterface_xs as $LanInterface_x) {
            $LanInterfaces[] = new LanInterface( $LanInterface_x);
        }
        return $LanInterfaces;
    }

    /**
     * @param LanInterface $lanInterface
     * @return LanHost[]
     * @throws \Exception
     */
    public function getHostsFromInterface( LanInterface $lanInterface){
        return $this->getHostsFromInterfaceName( $lanInterface->getName());
    }

    /**
     * @param string $lanInterfaceId
     * @return LanHost[]
     * @throws \Exception
     */
    public function getHostsFromInterfaceName( $lanInterfaceId){
        $service = sprintf( self::API_LAN_BROWSER_INTERFACE, $lanInterfaceId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        $LanHost_xs = $rest->getCurlResponse()['result'];
        $LanHosts   = [];
        foreach( $LanHost_xs as $LanHost_x) {
            $LanHosts[] = new LanHost( $LanHost_x);
        }
        return $LanHosts;
    }

    /**
     * @param string $lanInterfaceId
     * @param string $hostId
     * @return LanHost
     */
    public function getHostFromId( $lanInterfaceId, $hostId){
        $service = sprintf( self::API_LAN_BROWSER_HOST, $lanInterfaceId, $hostId);
        echo $service;
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return new LanHost( $rest->getCurlResponse()['result']);
    }

    /**
     * @param LanHost $LanHost
     * @param string $lanInterfaceId
     * @return LanHost
     */
    public function updateHostFromInterfaceId( LanHost $LanHost, $lanInterfaceId){
        $service = sprintf( self::API_LAN_BROWSER_HOST, $lanInterfaceId, $LanHost->getId());
        $rest = $this->getAuthService( $service);
        $rest->PUT( $LanHost->toArray());

        return new LanHost( $rest->getCurlResponse()['result']);
    }

    /**
     * Send Wake ok Lan packet to an host
     * @param LanInterface $lanInterface
     * @param LanHost $lanHost
     * @param string $password
     * @return bool
     */
    public function wakeOnLan( LanInterface $lanInterface, LanHost $lanHost, $password = ''){
        $service = sprintf( self::API_WAKE_ON_LAN, $lanInterface->getName());
        $rest = $this->getAuthService( $service);
        $rest->PUT([
            'mac'       => $lanHost->getId(),
            'password'  => $password,
        ]);

        return (bool) $rest->getCurlResponse()['result'];
    }
    
}

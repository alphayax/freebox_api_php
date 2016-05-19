<?php
namespace alphayax\freebox\api\v3\services\config\NAT;
use alphayax\freebox\api\v3\models\NAT\PortForwardingConfig;
use alphayax\freebox\api\v3\Service;


/**
 * Class PortForwarding
 * @package alphayax\freebox\api\v3\services\config\NAT
 * @author <alphayax@gmail.com>
 */
class PortForwarding extends Service {

    const API_NAT_REDIR = '/api/v3/fw/redir/';

    /**
     * Getting the list of port forwarding
     * @throws \Exception
     * @return PortForwardingConfig[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_NAT_REDIR);
        $rest->GET();

        $result = $rest->getCurlResponse()['result'];
        $PortForwardingList = [];
        foreach( $result as $PortForwardingElement){
            $PortForwardingList[] = new PortForwardingConfig( $PortForwardingElement);
        }
        return $PortForwardingList;
    }

    /**
     * Getting a specific port forwarding
     * @param $PortForwarding_id
     * @return PortForwardingConfig
     */
    public function getById( $PortForwarding_id){
        $rest = $this->getAuthService( self::API_NAT_REDIR . $PortForwarding_id);
        $rest->GET();

        return new PortForwardingConfig( $rest->getCurlResponse()['result']);
    }

    /**
     * Update a specific port forwarding
     * @param PortForwardingConfig $new_PortForwardingConfig
     * @return PortForwardingConfig
     * @throws \Exception
     */
    public function update( PortForwardingConfig $new_PortForwardingConfig){
        $rest = $this->getAuthService( self::API_NAT_REDIR . $new_PortForwardingConfig->getId());
        $rest->PUT( $new_PortForwardingConfig->toArray());

        return new PortForwardingConfig( $rest->getCurlResponse()['result']);
    }

    /**
     * Add a port forwarding
     * @param PortForwardingConfig $new_PortForwardingConfig
     * @return PortForwardingConfig
     * @throws \Exception
     */
    public function add( PortForwardingConfig $new_PortForwardingConfig){
        $rest = $this->getAuthService( self::API_NAT_REDIR);
        $rest->POST( $new_PortForwardingConfig->toArray());

        return new PortForwardingConfig( $rest->getCurlResponse()['result']);
    }

    /**
     * Delete a port forwarding
     * @param PortForwardingConfig $PortForwardingConfig
     * @return PortForwardingConfig
     * @throws \Exception
     */
    public function delete( PortForwardingConfig $PortForwardingConfig){
        return $this->deleteById( $PortForwardingConfig->getId());
    }

    /**
     * Delete a port forwarding
     * @param int $PortForwardingId
     * @return boolean success
     * @throws \Exception
     */
    public function deleteById( $PortForwardingId){
        $rest = $this->getAuthService( self::API_NAT_REDIR . $PortForwardingId);
        $rest->DELETE();

        return $rest->getCurlResponse()['success'];
    }

}

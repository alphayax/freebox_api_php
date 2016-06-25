<?php
namespace alphayax\freebox\api\v3\services\config\NAT;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class PortForwarding
 * @package alphayax\freebox\api\v3\services\config\NAT
 * @author <alphayax@gmail.com>
 */
class PortForwarding extends ServiceAuth {

    const API_NAT_REDIR = '/api/v3/fw/redir/';

    /**
     * Getting the list of port forwarding
     * @throws \Exception
     * @return models\NAT\PortForwardingConfig[]
     */
    public function getAll(){
        $rest = $this->getService( self::API_NAT_REDIR);
        $rest->GET();

        return $rest->getResultAsArray( models\NAT\PortForwardingConfig::class);
    }

    /**
     * Getting a specific port forwarding
     * @param $PortForwarding_id
     * @return models\NAT\PortForwardingConfig
     */
    public function getById( $PortForwarding_id){
        $rest = $this->getService( self::API_NAT_REDIR . $PortForwarding_id);
        $rest->GET();

        return $rest->getResult( models\NAT\PortForwardingConfig::class);
    }

    /**
     * Update a specific port forwarding
     * @param models\NAT\PortForwardingConfig $portForwardingConfig
     * @return models\NAT\PortForwardingConfig
     */
    public function update( models\NAT\PortForwardingConfig $portForwardingConfig){
        $rest = $this->getService( self::API_NAT_REDIR . $portForwardingConfig->getId());
        $rest->PUT( $portForwardingConfig);

        return $rest->getResult( models\NAT\PortForwardingConfig::class);
    }

    /**
     * Add a port forwarding
     * @param models\NAT\PortForwardingConfig $portForwardingConfig
     * @return models\NAT\PortForwardingConfig
     */
    public function add( models\NAT\PortForwardingConfig $portForwardingConfig){
        $rest = $this->getService( self::API_NAT_REDIR);
        $rest->POST( $portForwardingConfig);

        return $rest->getResult( models\NAT\PortForwardingConfig::class);
    }

    /**
     * Delete a port forwarding
     * @param models\NAT\PortForwardingConfig $portForwardingConfig
     * @return models\NAT\PortForwardingConfig
     */
    public function delete( models\NAT\PortForwardingConfig $portForwardingConfig){
        return $this->deleteById( $portForwardingConfig->getId());
    }

    /**
     * Delete a port forwarding with the specified id
     * @param int $PortForwardingId
     * @return boolean success
     */
    public function deleteById( $PortForwardingId){
        $rest = $this->getService( self::API_NAT_REDIR . $PortForwardingId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

}

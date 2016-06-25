<?php
namespace alphayax\freebox\api\v3\services\config\NAT;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class DMZ
 * @package alphayax\freebox\api\v3\services\config\NAT
 * @author <alphayax@gmail.com>
 */
class DMZ extends ServiceAuth {

    const API_NAT_DMZ = '/api/v3/fw/dmz/';

    /**
     * Get the current Dmz configuration
     * @return models\NAT\DmzConfig
     */
    public function getConfiguration(){
        $rest = $this->getService( self::API_NAT_DMZ);
        $rest->GET();

        return $rest->getResult( models\NAT\DmzConfig::class);
    }

    /**
     * Update the current Dmz configuration
     * @param models\NAT\DmzConfig $dmzConfig
     * @return models\NAT\DmzConfig
     */
    public function setConfiguration( models\NAT\DmzConfig $dmzConfig){
        $rest = $this->getService( self::API_NAT_DMZ);
        $rest->PUT( $dmzConfig);

        return $rest->getResult( models\NAT\DmzConfig::class);
    }

}

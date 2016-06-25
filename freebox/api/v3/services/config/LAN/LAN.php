<?php
namespace alphayax\freebox\api\v3\services\config\LAN;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class LAN
 * @package alphayax\freebox\api\v3\services\config
 */
class LAN extends ServiceAuth {

    const API_LAN_CONFIG = '/api/v3/lan/config/';

    /**
     * Get the current LAN configuration
     * @return models\LAN\LanConfig
     */
    public function getConfiguration(){
        $rest = $this->getService( self::API_LAN_CONFIG);
        $rest->GET();

        return $rest->getResult( models\LAN\LanConfig::class);
    }

    /**
     * Update the LAN configuration
     * @param models\LAN\LanConfig $lanConfig
     * @return models\LAN\LanConfig
     */
    public function setConfiguration( models\LAN\LanConfig $lanConfig){
        $rest = $this->getService( self::API_LAN_CONFIG);
        $rest->PUT( $lanConfig);

        return $rest->getResult( models\LAN\LanConfig::class);
    }

}

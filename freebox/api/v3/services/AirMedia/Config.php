<?php
namespace alphayax\freebox\api\v3\services\AirMedia;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Config
 * @package alphayax\freebox\api\v3\services\AirMedia
 */
class Config extends ServiceAuth {

    const API_AIRMEDIA_CONFIG    = '/api/v3/airmedia/config/';

    /**
     * Get the current AirMedia configuration
     * @return models\AirMedia\AirMediaConfig
     */
    public function getConfiguration(){
        $rest = $this->getService( self::API_AIRMEDIA_CONFIG);
        $rest->GET();

        return $rest->getResult( models\AirMedia\AirMediaConfig::class);
    }

    /**
     * Update the AirMedia configuration
     * @param models\AirMedia\AirMediaConfig $new_AirMediaConfig
     * @return models\AirMedia\AirMediaConfig
     */
    public function setConfiguration( models\AirMedia\AirMediaConfig $new_AirMediaConfig){
        $rest = $this->getService( self::API_AIRMEDIA_CONFIG);
        $rest->PUT( $new_AirMediaConfig);

        return $rest->getResult( models\AirMedia\AirMediaConfig::class);
    }
    
}

<?php
namespace alphayax\freebox\api\v3\services\AirMedia;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\Service;

/**
 * Class Config
 * @package alphayax\freebox\api\v3\services\AirMedia
 */
class Config extends Service {

    const API_AIRMEDIA_CONFIG    = '/api/v3/airmedia/config/';

    /**
     * Get the current AirMedia configuration
     * @return models\AirMedia\AirMediaConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_AIRMEDIA_CONFIG);
        $rest->GET();

        return $rest->getResult( models\AirMedia\AirMediaConfig::class);
    }

    /**
     * Update the AirMedia configuration
     * @param models\AirMedia\AirMediaConfig $new_AirMediaConfig
     * @return models\AirMedia\AirMediaConfig
     */
    public function setConfiguration( models\AirMedia\AirMediaConfig $new_AirMediaConfig){
        $rest = $this->getAuthService( self::API_AIRMEDIA_CONFIG);
        $rest->PUT( $new_AirMediaConfig);

        return $rest->getResult( models\AirMedia\AirMediaConfig::class);
    }
    
}

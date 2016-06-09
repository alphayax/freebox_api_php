<?php
namespace alphayax\freebox\api\v3\services\AirMedia;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;


/**
 * Class AirMedia
 * @package alphayax\freebox\api\v3\services\AirMedia
 */
class AirMedia extends Service {

    const API_AIRMEDIA_CONFIG    = '/api/v3/airmedia/config/';
    const API_AIRMEDIA_RECEIVERS = '/api/v3/airmedia/receivers/';

    /**
     * @throws \Exception
     * @return models\AirMedia\AirMediaConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_AIRMEDIA_CONFIG);
        $rest->GET();

        return $rest->getResult( models\AirMedia\AirMediaConfig::class);
    }

    /**
     * @param models\AirMedia\AirMediaConfig $new_AirMediaConfig
     * @return models\AirMedia\AirMediaConfig
     * @throws \Exception
     */
    public function setConfiguration( models\AirMedia\AirMediaConfig $new_AirMediaConfig){
        $rest = $this->getAuthService( self::API_AIRMEDIA_CONFIG);
        $rest->PUT( $new_AirMediaConfig);

        return $rest->getResult( models\AirMedia\AirMediaConfig::class);
    }

    /**
     * Get the list of AirMediaReceiver connected to the Freebox Server
     * @return models\AirMedia\AirMediaReceiver[]
     */
    public function getAirMediaReceivers(){
        $rest = $this->getAuthService( self::API_AIRMEDIA_RECEIVERS);
        $rest->GET();

        return $rest->getResultAsArray( models\AirMedia\AirMediaReceiver::class);
    }

    /**
     * @param string $AirMediaReceiver_name
     * @param models\AirMedia\AirMediaReceiverRequest $AirMediaReceiverRequest
     * @return bool
     */
    public function sendRequestToAirMediaReceiver( $AirMediaReceiver_name, models\AirMedia\AirMediaReceiverRequest $AirMediaReceiverRequest){
        $rest = $this->getAuthService( self::API_AIRMEDIA_RECEIVERS . $AirMediaReceiver_name . DIRECTORY_SEPARATOR);
        $rest->POST( $AirMediaReceiverRequest);

        return $rest->getSuccess();
    }

}

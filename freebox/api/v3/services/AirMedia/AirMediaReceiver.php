<?php
namespace alphayax\freebox\api\v3\services\AirMedia;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class AirMedia
 * @package alphayax\freebox\api\v3\services\AirMedia
 */
class AirMediaReceiver extends ServiceAuth {

    const API_AIRMEDIA_RECEIVERS = '/api/v3/airmedia/receivers/';

    /**
     * Get the list of AirMediaReceiver connected to the Freebox Server
     * @return models\AirMedia\AirMediaReceiver[]
     */
    public function getAll(){
        $rest = $this->getService( self::API_AIRMEDIA_RECEIVERS);
        $rest->GET();

        return $rest->getResultAsArray( models\AirMedia\AirMediaReceiver::class);
    }

    /**
     * Sending a request to an AirMedia receiver
     * @param string                                  $AirMediaReceiverName
     * @param models\AirMedia\AirMediaReceiverRequest $AirMediaReceiverRequest
     * @return bool
     */
    public function sendRequest($AirMediaReceiverName, models\AirMedia\AirMediaReceiverRequest $AirMediaReceiverRequest){
        $rest = $this->getService( self::API_AIRMEDIA_RECEIVERS . $AirMediaReceiverName . DIRECTORY_SEPARATOR);
        $rest->POST( $AirMediaReceiverRequest);

        return $rest->getSuccess();
    }

}

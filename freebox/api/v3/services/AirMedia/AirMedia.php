<?php
namespace alphayax\freebox\api\v3\services\AirMedia;
use alphayax\freebox\api\v3\models\AirMedia\AirMediaConfig;
use alphayax\freebox\api\v3\models\AirMedia\AirMediaReceiver;
use alphayax\freebox\api\v3\models\AirMedia\AirMediaReceiverRequest;
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
     * @return AirMediaConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_AIRMEDIA_CONFIG);
        $rest->GET();

        return new AirMediaConfig( $rest->getCurlResponse()['result']);
    }

    /**
     * @param AirMediaConfig $new_AirMediaConfig
     * @return AirMediaConfig
     * @throws \Exception
     */
    public function setConfiguration( AirMediaConfig $new_AirMediaConfig){
        $rest = $this->getAuthService( self::API_AIRMEDIA_CONFIG);
        $rest->PUT( $new_AirMediaConfig->toArray());

        return new AirMediaConfig( $rest->getCurlResponse()['result']);
    }

    /**
     * Get the list of AirMediaReceiver connected to the Freebox Server
     * @return AirMediaReceiver[]
     */
    public function getAirMediaReceivers(){
        $rest = $this->getAuthService( self::API_AIRMEDIA_RECEIVERS);
        $rest->GET();

        $AirMediaReceiver_xs = $rest->getCurlResponse()['result'];
        $AirMediaReceivers   = [];
        foreach( $AirMediaReceiver_xs as $airMediaReceiver_x) {
            $AirMediaReceivers[] = new AirMediaReceiver( $airMediaReceiver_x);
        }
        return $AirMediaReceivers;
    }

    /**
     * @param string                  $AirMediaReceiver_name
     * @param AirMediaReceiverRequest $AirMediaReceiverRequest
     * @return bool
     */
    public function sendRequestToAirMediaReceiver( $AirMediaReceiver_name, AirMediaReceiverRequest $AirMediaReceiverRequest){
        $rest = $this->getAuthService( self::API_AIRMEDIA_RECEIVERS . $AirMediaReceiver_name . DIRECTORY_SEPARATOR);
        $rest->POST( $AirMediaReceiverRequest->toArray());

        return $rest->getCurlResponse()['success'];
    }

}

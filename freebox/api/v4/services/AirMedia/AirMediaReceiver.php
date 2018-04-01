<?php

namespace alphayax\freebox\api\v4\services\AirMedia;

use alphayax\freebox\api\v4\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class AirMedia
 * @package alphayax\freebox\api\v4\services\AirMedia
 */
class AirMediaReceiver extends ServiceAuth
{

    const API_AIRMEDIA_RECEIVERS = '/api/v4/airmedia/receivers/';

    /**
     * Get the list of AirMediaReceiver connected to the Freebox Server
     * @return models\AirMedia\AirMediaReceiver[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getAll()
    {
        $result = $this->callService('GET', self::API_AIRMEDIA_RECEIVERS);

        return $result->getModels(models\AirMedia\AirMediaReceiver::class);
    }

    /**
     * Sending a request to an AirMedia receiver
     * @param string                                  $AirMediaReceiverName
     * @param models\AirMedia\AirMediaReceiverRequest $AirMediaReceiverRequest
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function sendRequest($AirMediaReceiverName, models\AirMedia\AirMediaReceiverRequest $AirMediaReceiverRequest)
    {
        $service = self::API_AIRMEDIA_RECEIVERS . $AirMediaReceiverName . DIRECTORY_SEPARATOR;
        $rest = $this->callService('POST', $service, $AirMediaReceiverRequest);

        return $rest->getSuccess();
    }

}

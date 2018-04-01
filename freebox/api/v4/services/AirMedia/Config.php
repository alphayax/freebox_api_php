<?php

namespace alphayax\freebox\api\v4\services\AirMedia;

use alphayax\freebox\api\v4\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Config
 * @package alphayax\freebox\api\v4\services\AirMedia
 */
class Config extends ServiceAuth
{

    const API_AIRMEDIA_CONFIG = '/api/v4/airmedia/config/';

    /**
     * Get the current AirMedia configuration
     * @return models\AirMedia\AirMediaConfig
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getConfiguration()
    {
        $result = $this->callService('GET', self::API_AIRMEDIA_CONFIG);

        return $result->getModel(models\AirMedia\AirMediaConfig::class);
    }

    /**
     * Update the AirMedia configuration
     * @param models\AirMedia\AirMediaConfig $new_AirMediaConfig
     * @return models\AirMedia\AirMediaConfig
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function setConfiguration(models\AirMedia\AirMediaConfig $new_AirMediaConfig)
    {
        $rest = $this->callService('PUT', self::API_AIRMEDIA_CONFIG, $new_AirMediaConfig);

        return $rest->getModel(models\AirMedia\AirMediaConfig::class);
    }

}

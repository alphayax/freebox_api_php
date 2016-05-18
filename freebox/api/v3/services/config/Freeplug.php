<?php
namespace alphayax\freebox\api\v3\services\config;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;


/**
 * Class System
 * @package alphayax\freebox\api\v3\services\config
 */
class Freeplug extends Service {

    const API_FREEPLUG       = '/api/v3/freeplug/';
    const API_FREEPLUG_RESET = '/api/v3/freeplug/%s/reset/';

    /**
     * Get the current system info
     * @throws \Exception
     * @return models\Freeplug\FreeplugNetwork[]
     */
    public function getNetworks(){
        $rest = $this->getAuthService( self::API_FREEPLUG);
        $rest->GET();

        $Network_xs = $rest->getCurlResponse()['result'];
        $Networks   = [];
        foreach( $Network_xs as $Network_x) {
            $Networks[] = new models\Freeplug\FreeplugNetwork( $Network_x);
        }
        return $Networks;
    }

    /**
     * Get a particular Freeplug information
     * @param $FreeplugId
     * @return models\Freeplug\Freeplug
     */
    public function getFromId( $FreeplugId){
        $rest = $this->getAuthService( self::API_FREEPLUG . $FreeplugId . DIRECTORY_SEPARATOR);
        $rest->GET();

        return new models\Freeplug\Freeplug( $rest->getCurlResponse()['result']);
    }

    /**
     * Reset a Freeplug
     * @param $FreeplugId
     * @return models\Freeplug\FreeplugNetwork
     */
    public function resetFromId( $FreeplugId){
        $Service = sprintf( self::API_FREEPLUG_RESET, $FreeplugId);
        $rest = $this->getAuthService( $Service);
        $rest->POST();

        return $rest->getCurlResponse()['success'];
    }

}

<?php
namespace alphayax\freebox\api\v3\services\config;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class System
 * @package alphayax\freebox\api\v3\services\config
 */
class Freeplug extends ServiceAuth {

    const API_FREEPLUG       = '/api/v3/freeplug/';
    const API_FREEPLUG_RESET = '/api/v3/freeplug/%s/reset/';

    /**
     * Get the freeplug networks information
     * @throws \Exception
     * @return models\Freeplug\FreeplugNetwork[]
     */
    public function getNetworks(){
        $rest = $this->getService( self::API_FREEPLUG);
        $rest->GET();

        return $rest->getResultAsArray( models\Freeplug\FreeplugNetwork::class);
    }

    /**
     * Get a particular Freeplug information
     * @param $FreeplugId
     * @return models\Freeplug\Freeplug
     */
    public function getFromId( $FreeplugId){
        $rest = $this->getService( self::API_FREEPLUG . $FreeplugId . DIRECTORY_SEPARATOR);
        $rest->GET();

        return $rest->getResult( models\Freeplug\Freeplug::class);
    }

    /**
     * Reset a Freeplug
     * @param $FreeplugId
     * @return models\Freeplug\FreeplugNetwork
     */
    public function resetFromId( $FreeplugId){
        $Service = sprintf( self::API_FREEPLUG_RESET, $FreeplugId);
        $rest = $this->getService( $Service);
        $rest->POST();

        return $rest->getSuccess();
    }

}

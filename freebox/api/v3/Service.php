<?php
namespace alphayax\freebox\api\v3;
use alphayax\freebox\utils;

/**
 * Class freebox_service
 */
abstract class Service {

    /** @var \alphayax\freebox\utils\Application */
    protected $application;

    /// Freebox API host URI
    const API_HOST = 'http://mafreebox.freebox.fr';

    /**
     * Service constructor.
     * @param \alphayax\freebox\utils\Application $application
     */
    public function __construct( utils\Application $application){
        $this->application = $application;
    }

    /**
     * @param $service
     * @return \alphayax\freebox\utils\rest\Rest
     */
    protected function getService( $service){
        return new utils\rest\Rest( static::API_HOST . $service);
    }

    /**
     * @param string $service
     * @param bool   $isJson
     * @param bool   $returnAsArray
     * @return utils\rest\RestAuth
     */
    protected function getAuthService( $service, $isJson = true, $returnAsArray = true){
        $rest = new utils\rest\RestAuth( static::API_HOST . $service, $isJson, $returnAsArray);
        $rest->setSessionToken( $this->application->getSessionToken());
        return $rest;
    }
}

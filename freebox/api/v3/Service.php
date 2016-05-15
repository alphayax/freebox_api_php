<?php
namespace alphayax\freebox\api\v3;
use alphayax\freebox\utils\Application;

/**
 * Class freebox_service
 */
abstract class Service {

    /** @var Application */
    protected $application;

    /// Freebox API host URI
    const API_HOST = 'http://mafreebox.freebox.fr';

    /**
     * Service constructor.
     * @param Application $application
     */
    public function __construct( Application $application){
        $this->application = $application;
    }

    /**
     * @param $service
     * @return \alphayax\utils\Rest
     */
    protected function getService( $service){
        return new \alphayax\utils\Rest( static::API_HOST . $service);
    }

    /**
     * @param string $service
     * @param bool   $isJson
     * @param bool   $returnAsArray
     * @return \alphayax\freebox\utils\RestAuth
     */
    protected function getAuthService( $service, $isJson = true, $returnAsArray = true){
        $rest = new \alphayax\freebox\utils\RestAuth( static::API_HOST . $service, $isJson, $returnAsArray);
        $rest->setSessionToken( $this->application->getSessionToken());
        return $rest;
    }
}

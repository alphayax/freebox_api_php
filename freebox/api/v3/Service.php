<?php
namespace alphayax\freebox\api\v3;
use alphayax\freebox\utils;

/**
 * Class freebox_service
 */
abstract class Service {

    /** @var \alphayax\freebox\utils\Application */
    protected $application;

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
        return new utils\rest\Rest( $this->application->getFreeboxApiHost() . $service);
    }

    /**
     * @param string $service
     * @return utils\rest\RestAuth
     */
    protected function getAuthService( $service){
        $rest = new utils\rest\RestAuth( $this->application->getFreeboxApiHost() . $service);
        $rest->setSessionToken( $this->application->getSessionToken());
        return $rest;
    }
    
}

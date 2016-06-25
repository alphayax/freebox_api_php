<?php
namespace alphayax\freebox\utils;
use alphayax\freebox\utils;

/**
 * Class freebox_service
 */
abstract class ServiceAuth extends Service {

    /**
     * Return a Rest object with the session token of the application
     * @param string $service
     * @return \alphayax\freebox\utils\rest\RestAuth
     */
    protected function getService( $service){
        $rest = new utils\rest\RestAuth( $this->application->getFreeboxApiHost() . $service);
        $rest->setSessionToken( $this->application->getSessionToken());
        return $rest;
    }

}

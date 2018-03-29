<?php
namespace alphayax\freebox\utils;
use alphayax\freebox\utils;
use GuzzleHttp\Client;

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

    /**
     * @param $verb
     * @param $service
     * @param $params
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function callService($verb, $service, $params)
    {
        $client = new Client();
        return $client->request($verb, $this->application->getFreeboxApiHost() . $service, [
            'headers' => [
                'X-Fbx-App-Auth' => $this->application->getSessionToken(),
            //  'Content-Type'   => 'Application/json',
            ],
            'json' => $params,
        ]);
    }

}

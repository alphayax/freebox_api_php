<?php
namespace alphayax\freebox\utils;
use alphayax\freebox\utils;
use GuzzleHttp\Client;

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
     * @deprecated
     */
    protected function getService( $service){
        return new utils\rest\Rest( $this->application->getFreeboxApiHost() . $service);
    }

    /**
     * @param $verb
     * @param $service
     * @param $params
     * @return \alphayax\freebox\utils\FreeboxResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function callService($verb, $service, $params = null)
    {
        $client = new Client();

        $options_x = [];
        // $options_x['headers'] = [
        //     'X-Fbx-App-Auth' => $this->application->getSessionToken(),
        //     //  'Content-Type'   => 'Application/json',
        // ];

        if( null != $params){
            $options_x['json'] = $params;
        }

        $response = $client->request($verb, $this->application->getFreeboxApiHost() . $service, $options_x);

        return new FreeboxResponse( $response);
    }
}

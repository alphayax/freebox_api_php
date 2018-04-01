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
     * @deprecated Use callService instead
     */
    protected function getService( $service){
        $rest = new utils\rest\RestAuth( $this->application->getFreeboxApiHost() . $service);
        $rest->setSessionToken( $this->application->getSessionToken());
        return $rest;
    }

    /**
     * @param       $verb
     * @param       $service
     * @param       $params
     * @return \alphayax\freebox\utils\FreeboxResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function callService($verb, $service, $params = null)
    {
        $client = new Client();

        $options_x = [];
        $options_x['headers'] = [
            'X-Fbx-App-Auth' => $this->application->getSessionToken(),
        ];

        if( null != $params){
            $options_x['json'] = $params;
        }

        $response = $client->request($verb, $this->application->getFreeboxApiHost() . $service, $options_x);

        return new FreeboxResponse( $response);
    }

    /**
     * @param      $verb
     * @param      $service
     * @param null $params
     * @return \alphayax\freebox\utils\FreeboxResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function callServiceViaForm($verb, $service, $params = null)
    {
        $client = new Client();

        $options_x = [];
        $options_x['headers'] = [
            'X-Fbx-App-Auth' => $this->application->getSessionToken(),
        ];

        if( null != $params){
            $options_x['form_params'] = $params;
        }

        $response = $client->request($verb, $this->application->getFreeboxApiHost() . $service, $options_x);

        return new FreeboxResponse( $response);
    }

    /**
     * @param      $verb
     * @param      $service
     * @param null $params
     * @return \alphayax\freebox\utils\FreeboxResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function callServiceViaMultipart($verb, $service, $params = null)
    {
        $client = new Client();

        $options_x = [];
        $options_x['headers'] = [
            'X-Fbx-App-Auth' => $this->application->getSessionToken(),
        ];

        if( ! empty($params)){
            $options_x['multipart'] = [];
            foreach ($params as $paramName => $paramValue){
                $options_x['multipart'][] = [
                    'name'      => $paramName,
                    'content'   => $paramValue,
                ];
            }
        }

        $response = $client->request($verb, $this->application->getFreeboxApiHost() . $service, $options_x);

        return new FreeboxResponse( $response);
    }

}

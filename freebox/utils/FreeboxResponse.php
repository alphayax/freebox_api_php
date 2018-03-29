<?php

namespace alphayax\freebox\utils;

use alphayax\freebox\Exception\FreeboxApiException;
use Psr\Http\Message\ResponseInterface;

/**
 * Class FreeboxResponse
 * @package alphayax\freebox\utils
 */
class FreeboxResponse
{
    /** @var \Psr\Http\Message\ResponseInterface */
    protected $response;

    /** @var array */
    protected $response_json;

    /**
     * FreeboxResponse constructor.
     * @param \Psr\Http\Message\ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    /**
     * @return bool
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getSuccess()
    {
        $response = $this->getJson();

        $isSuccess = (bool)@$response['success'];
        if ($isSuccess) {
            return true;
        }

        $Exception = new FreeboxApiException($response['msg'] . ' (' . $response['error_code'] . ')');
        $Exception->setApiMessage($response['msg']);
        $Exception->setApiErrorCode($response['error_code']);
        //$Exception->setApiRequest( $request);
        //$Exception->setApiHost( $url);

        throw $Exception;
    }

    /**
     * @param string $className
     * @return array|Model
     */
    public function getModel($className = '')
    {
        $Model = $this->getResult();

        /// Cast element
        if ( ! empty($className) && ! empty($Model) && is_subclass_of($className, Model::class) && is_array($Model)) {
            return new $className($Model);
        }

        return $Model;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        $response = $this->getJson();

        return @$response['result'];
    }

    /**
     * @return array
     */
    public function getJson()
    {
        if( ! empty( $this->response_json)){
            return $this->response_json;
        }

        // Decode the body of the response
        $this->response_json = json_decode( $this->response->getBody(), true);

        return $this->response_json;
    }

    /**
     * @return \Psr\Http\Message\StreamInterface
     */
    public function getRaw()
    {
        return $this->response->getBody();
    }
}

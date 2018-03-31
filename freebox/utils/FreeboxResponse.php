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
     * @return Model
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getModel($className)
    {
        $this->getSuccess();
        $model = $this->getResult();

        return static::castToModel($model, $className);
    }

    /**
     * @param string $className
     * @return Model[]
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getModels($className)
    {
        $this->getSuccess();
        $model_xs = $this->getResult() ?: [];

        // Check model collection structure
        if ( ! is_array($model_xs)) {
            throw new FreeboxApiException('Invalid collection');
        }

        // Check class name
        if (empty($model_xs)) {
            return [];
        }

        /// Cast elements
        $models = [];
        foreach ($model_xs as $model_x) {
            $models[] = static::castToModel($model_x, $className);
        }

        return $models;
    }

    /**
     * @param $model_x
     * @param $className
     * @return Model
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    protected static function castToModel($model_x, $className)
    {
        // Check class name
        if (empty($className) || ! class_exists($className) || ! is_subclass_of($className, Model::class)) {
            throw new FreeboxApiException('Invalid class name');
        }

        // Check model structure
        if (empty($model_x) || ! is_array($model_x)) {
            throw new FreeboxApiException('Invalid model');
        }

        /// Cast element
        return new $className($model_x);
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

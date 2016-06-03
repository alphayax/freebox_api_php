<?php
namespace alphayax\freebox\utils\rest;
use alphayax;


/**
 * Class Rest
 * @package alphayax\utils
 * @author <alphayax@gmail.com>
 */
class Rest extends alphayax\utils\Rest {

    /**
     * @param null $curl_post_data
     * @param bool $checkResponse
     * @throws \Exception
     */
    public function GET( $curl_post_data = null, $checkResponse = true){
        parent::GET( $curl_post_data);
        if( $checkResponse){
            $this->checkResponse();
        }
    }

    /**
     * @param $curl_post_data
     */
    public function POST( $curl_post_data = null){
        parent::POST( $curl_post_data);
        $this->checkResponse();
    }

    /**
     * @param $curl_post_data
     */
    public function PUT( $curl_post_data = null){
        parent::PUT( $curl_post_data);
        $this->checkResponse();
    }

    /**
     * @param $curl_post_data
     */
    public function DELETE( $curl_post_data = null){
        parent::DELETE( $curl_post_data);
        $this->checkResponse();
    }

    /**
     * @throws \Exception
     */
    protected function checkResponse(){
        if( false === $this->getSuccess()){
            $response = $this->getCurlResponse();
            throw new \Exception( $response['msg'] . ' ('. $response['error_code'] . ')');
        }
    }

    /**
     * @param string $className
     * @return array
     */
    public function getResultAsArray( $className = ''){
        $Model_xs = @$this->getCurlResponse()['result'] ?: [];

        /// Cast elements
        if( ! empty( $className) && ! empty( $Model_xs) && is_subclass_of( $className, alphayax\freebox\api\v3\Model::class)) {
            array_walk( $Model_xs, function( &$item, $key, $className){
                $item = new $className( $item);
            }, $className);
        }

        return $Model_xs;
    }

    /**
     * @param string $className
     * @return array|alphayax\freebox\api\v3\Model
     */
    public function getResult( $className = ''){
        $Model = @$this->getCurlResponse()['result'];

        /// Cast element
        if( ! empty( $className) && ! empty( $Model) && is_subclass_of( $className, alphayax\freebox\api\v3\Model::class) && is_array( $Model)){
            return new $className( $Model);
        }

        return $Model;
    }

    /**
     * @return bool
     */
    public function getSuccess(){
        return boolval( $this->getCurlResponse()['success']);
    }

}

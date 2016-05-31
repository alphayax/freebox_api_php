<?php
namespace alphayax\freebox\utils;
use alphayax;


/**
 * Class Rest
 * @package alphayax\utils
 * @author <alphayax@gmail.com>
 */
class RestAuth extends alphayax\utils\Rest {

    /** @var string */
    protected $session_token = '';

    /**
     * @param null $curl_post_data
     * @param bool $checkResponse
     * @throws \Exception
     */
    public function GET( $curl_post_data = null, $checkResponse = true){
        $this->add_XFbxAppAuth_Header();
        parent::GET( $curl_post_data);
        if( $checkResponse){
            $this->checkResponse();
        }
    }

    /**
     * @param $curl_post_data
     */
    public function POST( $curl_post_data = null){
        $this->add_XFbxAppAuth_Header();
        parent::POST( $curl_post_data);
        $this->checkResponse();
    }

    /**
     * @param $curl_post_data
     */
    public function PUT( $curl_post_data = null){
        $this->add_XFbxAppAuth_Header();
        parent::PUT( $curl_post_data);
        $this->checkResponse();
    }

    /**
     * @param $curl_post_data
     */
    public function DELETE( $curl_post_data = null){
        $this->add_XFbxAppAuth_Header();
        parent::DELETE( $curl_post_data);
        $this->checkResponse();
    }

    /**
     * Add the session token in the X-Fbx-App-Auth Header
     */
    protected function add_XFbxAppAuth_Header(){
        $this->http_headers[ 'X-Fbx-App-Auth'] = $this->session_token;
    }


    /**
     * @throws \Exception
     */
    protected function checkResponse(){
        $response = $this->getCurlResponse();
        if( false === $response['success']){
            throw new \Exception( $response['msg'] . ' ('. $response['error_code'] . ')');
        }
    }

    /**
     * @param $session_token
     */
    public function setSessionToken( $session_token){
        $this->session_token = $session_token;
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
     * @return array
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

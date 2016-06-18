<?php
namespace alphayax\freebox\utils\rest;
use alphayax;


/**
 * Class Rest
 * @package alphayax\utils
 * @author <alphayax@gmail.com>
 */
class RestAuth extends Rest {

    /** @var string */
    protected $session_token = '';

    /**
     * @param null $curl_post_data
     * @param bool $checkResponse
     * @throws \Exception
     */
    public function GET( $curl_post_data = null, $checkResponse = true){
        $this->add_XFbxAppAuth_Header();
        parent::GET( $curl_post_data, $checkResponse);
    }

    /**
     * @param $curl_post_data
     */
    public function POST( $curl_post_data = null){
        $this->add_XFbxAppAuth_Header();
        parent::POST( $curl_post_data);
    }

    /**
     * @param $curl_post_data
     */
    public function PUT( $curl_post_data = null){
        $this->add_XFbxAppAuth_Header();
        parent::PUT( $curl_post_data);
    }

    /**
     * @param $curl_post_data
     */
    public function DELETE( $curl_post_data = null){
        $this->add_XFbxAppAuth_Header();
        parent::DELETE( $curl_post_data);
    }

    /**
     * Add the session token in the X-Fbx-App-Auth Header
     */
    protected function add_XFbxAppAuth_Header(){
        $this->addHeader( 'X-Fbx-App-Auth', $this->session_token);
    }

    /**
     * @param $session_token
     */
    public function setSessionToken( $session_token){
        $this->session_token = $session_token;
    }

    /**
     * @throws \Exception
     */
    protected function checkResponse(){
        $response = $this->getCurlResponse();
        $request  = explode( "\r\n", $this->curlGetInfo['request_header'])[0] . PHP_EOL;
    //  echo ">> $request";

        if( false === $this->getSuccess()){
            /*
            switch( $response['error_code']){
                case 'invalid_request' :
                    $a = new alphayax\freebox\Exception\InvalidRequestException();
                    $a->setHttpRequestHeader( $this->_curl_getinfo['request_header']);
                    $a->setHttpUrl( $this->_curl_getinfo['url']);
                    echo PHP_EOL . '---' . PHP_EOL;
                    echo $this->_curl_getinfo['request_header'];
                    echo PHP_EOL . '---' . PHP_EOL;
                    throw $a;
            }
            */
            throw new \Exception( $request .' - '. $response['msg'] . ' ('. $response['error_code'] . ')');
        }
    }

}

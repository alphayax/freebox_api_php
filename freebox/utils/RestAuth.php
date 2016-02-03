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
     */
    public function GET( $curl_post_data = null){
        $this->add_XFbxAppAuth_Header();
        parent::GET( $curl_post_data);
        $this->checkResponse();
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
        curl_setopt( $this->_curl_handler, CURLOPT_HTTPHEADER, array(
            'X-Fbx-App-Auth: '. $this->session_token,
        ));
    }

    /**
     * @throws \Exception
     */
    protected function checkResponse(){
        $response = $this->getCurlResponse();
        if( false === $response->success){
            throw new \Exception( $response->msg);
        }
    }

    /**
     * @param $session_token
     */
    public function setSessionToken( $session_token){
        $this->session_token = $session_token;
    }
}

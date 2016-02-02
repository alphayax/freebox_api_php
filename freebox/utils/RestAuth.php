<?php
namespace alphayax\freebox\utils;


/**
 * Class Rest
 * @package alphayax\utils
 * @author <alphayax@gmail.com>
 */
class RestAuth extends \alphayax\utils\Rest {

    /** @var string */
    protected $session_token = '';

    /**
     *
     */
    public function GET(){
        $this->add_XFbxAppAuth_Header();
        parent::GET();
    }

    /**
     * @param $curl_post_data
     */
    public function POST( $curl_post_data){
        $this->add_XFbxAppAuth_Header();
        parent::POST( $curl_post_data);
    }

    /**
     * @param $curl_post_data
     */
    public function PUT( $curl_post_data){
        $this->add_XFbxAppAuth_Header();
        parent::PUT( $curl_post_data);
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
     * @param $session_token
     */
    public function setSessionToken($session_token){
        $this->session_token = $session_token;
    }
}

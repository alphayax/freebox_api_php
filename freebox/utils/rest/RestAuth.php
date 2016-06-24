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
    protected $sessionToken = '';

    /**
     * @param mixed $curlPostData
     */
    public function GET( $curlPostData = null){
        $this->add_XFbxAppAuth_Header();
        parent::GET( $curlPostData);
    }

    /**
     * @param $curlPostData
     */
    public function POST( $curlPostData = null){
        $this->add_XFbxAppAuth_Header();
        parent::POST( $curlPostData);
    }

    /**
     * @param $curlPostData
     */
    public function PUT( $curlPostData = null){
        $this->add_XFbxAppAuth_Header();
        parent::PUT( $curlPostData);
    }

    /**
     * @param $curlPostData
     */
    public function DELETE( $curlPostData = null){
        $this->add_XFbxAppAuth_Header();
        parent::DELETE( $curlPostData);
    }

    /**
     * Add the session token in the X-Fbx-App-Auth Header
     */
    protected function add_XFbxAppAuth_Header(){
        $this->addHeader( 'X-Fbx-App-Auth', $this->sessionToken);
    }

    /**
     * @param $sessionToken
     */
    public function setSessionToken( $sessionToken){
        $this->sessionToken = $sessionToken;
    }

}

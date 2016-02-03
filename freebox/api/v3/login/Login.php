<?php
namespace alphayax\freebox\api\v3\login;
use alphayax\freebox\api\v3\Service;


/**
 * Class Login
 * @package alphayax\freebox\api\v3
 * @author <alphayax@gmail.com>
 */
class Login extends Service {

    /// APIs services
    const API_LOGIN             = '/api/v3/login/';
    const API_LOGIN_SESSION     = '/api/v3/login/session/';

    /** @var string */
    private $challenge  = '';

    private $password_salt  = '';

    private $logged_in  = false;


    private $session_token;

    /**
     * @throws \Exception
     */
    public function ask_login_status(){
        $rest = $this->getService( static::API_LOGIN);
        $rest->GET();

        $result = $rest->getCurlResponse()['result'];

        $this->logged_in     = $result['logged_in'];
        $this->challenge     = $result['challenge'];
        $this->password_salt = $result['password_salt'];
    }

    /**
     * @throws \Exception
     */
    public function create_session(){
        $rest = $this->getService( static::API_LOGIN_SESSION);
        $rest->POST([
            'app_id'    => $this->application->getId(),
            'password'  => hash_hmac( 'sha1', $this->challenge, $this->application->getAppToken()),
        ]);

        $this->session_token = $rest->getCurlResponse()['result']['session_token'];
    }

    /**
     * @return mixed
     */
    public function getSessionToken(){
        return $this->session_token;
    }

}

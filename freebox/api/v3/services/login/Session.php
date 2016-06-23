<?php
namespace alphayax\freebox\api\v3\services\login;
use alphayax\freebox\api\v3\Service;


/**
 * Class Login
 * @package alphayax\freebox\api\v3
 * @author <alphayax@gmail.com>
 */
class Session extends Service {

    /// APIs services
    const API_LOGIN             = '/api/v3/login/';
    const API_LOGIN_SESSION     = '/api/v3/login/session/';

    /** @var string */
    private $challenge  = '';

    private $password_salt  = '';

    private $logged_in  = false;

    /** @var array */
    protected $permissions = [];

    /** @var string */
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

        if( ! $rest->getSuccess()){
            throw new \Exception( $rest->getCurlResponse()['error_code'] .' : '. $rest->getCurlResponse()['msg']);
        }
        $this->session_token = $rest->getResult()['session_token'];
        $this->permissions   = $rest->getResult()['permissions'];
    }

    /**
     * @return mixed
     */
    public function getSessionToken(){
        return $this->session_token;
    }

    /**
     * @return array
     */
    public function getPermissions() {
        return $this->permissions;
    }

}

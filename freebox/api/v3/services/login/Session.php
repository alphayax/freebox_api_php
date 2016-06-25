<?php
namespace alphayax\freebox\api\v3\services\login;
use alphayax\freebox\utils\Service;


/**
 * Class Login
 * @package alphayax\freebox\api\v3
 * @author <alphayax@gmail.com>
 */
class Session extends Service {

    const API_LOGIN             = '/api/v3/login/';
    const API_LOGIN_SESSION     = '/api/v3/login/session/';

    /** @var string */
    private $challenge  = '';

    /** @var string Password Salt */
    private $password_salt  = '';

    /** @var bool Is the user logged */
    private $logged_in  = false;

    /** @var array */
    protected $permissions = [];

    /** @var string */
    private $session_token;

    /**
     * @throws \Exception
     */
    public function askLoginStatus(){
        $rest = $this->getService( static::API_LOGIN);
        $rest->GET();

        $this->logged_in     = $rest->getResult()['logged_in'];
        $this->challenge     = $rest->getResult()['challenge'];
        $this->password_salt = $rest->getResult()['password_salt'];
    }

    /**
     * @throws \Exception
     */
    public function createSession(){
        $rest = $this->getService( static::API_LOGIN_SESSION);
        $rest->POST([
            'app_id'    => $this->application->getId(),
            'password'  => hash_hmac( 'sha1', $this->challenge, $this->application->getAppToken()),
        ]);

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

<?php

namespace alphayax\freebox\api\v4\services\login;

use alphayax\freebox\utils\Service;


/**
 * Class Login
 * @package alphayax\freebox\api\v4\services\login
 * @author  <alphayax@gmail.com>
 */
class Session extends Service
{

    const API_LOGIN         = '/api/v4/login/';
    const API_LOGIN_SESSION = '/api/v4/login/session/';

    /** @var string */
    private $challenge = '';

    /** @var string Password Salt */
    private $password_salt = '';

    /** @var bool Is the user logged */
    private $logged_in = false;

    /** @var array */
    protected $permissions = [];

    /** @var string */
    private $session_token;

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function askLoginStatus()
    {
        $result = $this->callService('GET', static::API_LOGIN);

        $this->logged_in     = $result->getResult()['logged_in'];
        $this->challenge     = $result->getResult()['challenge'];
        $this->password_salt = $result->getResult()['password_salt'];
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createSession()
    {
        $rest = $this->callService('POST', static::API_LOGIN_SESSION, [
            'app_id'   => $this->application->getId(),
            'password' => hash_hmac('sha1', $this->challenge, $this->application->getAppToken()),
        ]);

        $this->session_token = $rest->getResult()['session_token'];
        $this->permissions   = $rest->getResult()['permissions'];
    }

    /**
     * @return mixed
     */
    public function getSessionToken()
    {
        return $this->session_token;
    }

    /**
     * @return array
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

}

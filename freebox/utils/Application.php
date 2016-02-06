<?php
namespace alphayax\freebox\utils;
use alphayax\freebox\api\v3\services;

/**
 * Class Application
 * @package alphayax\freebox\utils
 */
class Application {

    /** @var string  */
    private $id         = '';

    /** @var string  */
    private $name       = '';

    /** @var string  */
    private $version    = '';

    /** @var string */
    private $app_token = '';

    /** @var string */
    private $session_token = '';

    /**
     * Application constructor.
     * @param $app_id
     * @param $app_name
     * @param $app_version
     */
    public function __construct( $app_id, $app_name, $app_version){
        $this->id      = $app_id;
        $this->name    = $app_name;
        $this->version = $app_version;
    }

    /**
     * Ask authorization to the freebox and save the app token
     */
    public function authorize(){
        new services\login\Authorize( $this);
    }

    /**
     * Open a new session and save the session token
     * @throws \Exception
     */
    public function openSession(){
        $Login = new services\login\Session( $this);
        $Login->ask_login_status();
        $Login->create_session();

        $this->session_token = $Login->getSessionToken();
    }

    /**
     * @return string
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @return string
     */
    public function getVersion(){
        return $this->version;
    }

    /**
     * @return string
     */
    public function getSessionToken(){
        return $this->session_token;
    }

    /**
     * @return string
     */
    public function getAppToken(){
        return $this->app_token;
    }

    /**
     * @param string $app_token
     */
    public function setAppToken( $app_token){
        $this->app_token = $app_token;
    }

    /**
     * Indicate if a token is defined
     */
    public function haveAppToken(){
        return ! empty( $this->app_token);
    }

    /**
     * @return string
     */
    public function loadAppToken(){
        if( file_exists( 'app_token')){
            $this->app_token = file_get_contents( 'app_token');
        }
    }

    /**
     * Write the app token in a file for later use
     */
    public function saveAppToken(){
        if( ! file_put_contents( 'app_token', $this->app_token)){
            throw new \Exception('Unable to save app token in file');
        }
    }

}

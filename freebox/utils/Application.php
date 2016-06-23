<?php
namespace alphayax\freebox\utils;
use alphayax\freebox\api\v3\services;
use Monolog\Handler\ErrorLogHandler;
use Monolog\Logger;

/**
 * Class Application
 * @package alphayax\freebox\utils
 */
class Application {

    /// Freebox API host URI
    const API_HOST_LOCAL = 'http://mafreebox.freebox.fr';

    /**
     * @var array
     * @see alphayax\freebox\api\v3\symbols\Permissions
     */
    protected $permissions = [];

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

    /** @var string : The freebox API Host (default is "mafreebox.freebox.fr" */
    private $freeboxApiHost = self::API_HOST_LOCAL;

    /** @var Logger */
    protected $logger;

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
        /// Logger
        $this->logger  = new Logger('fbx_api_logger');
        $this->logger->pushHandler( new ErrorLogHandler());
    }

    /**
     * Return the Freebox API Host
     * @return string
     */
    public function getFreeboxApiHost() {
        return $this->freeboxApiHost;
    }

    /**
     * Set the freebox api host
     * @param string $freeboxApiHost
     */
    public function setFreeboxApiHost( $freeboxApiHost) {
        $this->freeboxApiHost = $freeboxApiHost;
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

        $this->permissions   = $Login->getPermissions();
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

    /**
     * @return Logger
     */
    public function getLogger() {
        return $this->logger;
    }

    /**
     * Return true if the application have access to the given permission name
     * @param $permissionName
     * @see alphayax\freebox\api\v3\symbols\Permissions
     * @return bool
     */
    public function hasPermission( $permissionName) {
        return boolval( @$this->permissions[$permissionName]);
    }

}

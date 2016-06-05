<?php
namespace alphayax\freebox\api\v3\services\login;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\utils\Application;

/**
 * Class Authorize
 * @package alphayax\freebox\api\v3
 * @author <alphayax@gmail.com>
 */
class Authorize extends Service {

    /// APIs services
    const API_LOGIN_AUTHORIZE     = '/api/v3/login/authorize/';

    /// Authorization status
    const STATUS_UNKNOWN = 'unknown';
    const STATUS_GRANTED = 'granted';
    const STATUS_PENDING = 'pending';
    const STATUS_DENIED  = 'denied';
    const STATUS_TIMEOUT = 'timeout';

    /** @var string */
    private $app_token = '';

    /** @var int */
    private $track_id = 0;

    /** @var string */
    private $status = self::STATUS_UNKNOWN;

    /** @var string */
    private $challenge = '';

    /**
     * Authorize constructor.
     * @param Application $application
     * @throws \Exception
     */
    public function __construct( Application $application){
        parent::__construct( $application);

        $this->application->loadAppToken();

        if( ! $this->application->haveAppToken()){
            $this->ask_authorization();
            while( in_array( $this->status, [self::STATUS_UNKNOWN, self::STATUS_PENDING])){
                $this->get_authorization_status();
                if( $this->status == self::STATUS_GRANTED){
                    $this->application->setAppToken( $this->app_token);
                    $this->application->saveAppToken();
                    break;
                }
                sleep( 5);
            }

            /// For verbose
            switch( $this->status){
                case self::STATUS_GRANTED : $this->application->getLogger()->addInfo( 'Access granted !'); break;
                case self::STATUS_TIMEOUT : $this->application->getLogger()->addCritical( 'Access denied. You take to long to authorize app'); break;
                case self::STATUS_DENIED  : $this->application->getLogger()->addCritical( 'Access denied. Freebox denied app connexion'); break;
            }
        }
    }


    /**
     * Contact the freebox and ask for App auth
     * @throws \Exception
     */
    public function ask_authorization(){
        $rest = $this->getService( self::API_LOGIN_AUTHORIZE);
        $rest->POST([
            'app_id'        => $this->application->getId(),
            'app_name'      => $this->application->getName(),
            'app_version'   => $this->application->getVersion(),
            'device_name'   => gethostname(),
        ]);

        $response = $rest->getCurlResponse();
        if( ! $rest->getSuccess()){
            $this->application->getLogger()->addCritical( 'Freebox Error : '. $response['error_code'] .' - '. $response['msg']);
            throw new \Exception( $response['msg'], $response['error_code']);
        }

        $this->application->getLogger()->addInfo( 'Authorization send to Freebox. Waiting for response...');

        $this->app_token = $response['result']['app_token'];
        $this->track_id  = $response['result']['track_id'];
    }

    /**
     * @throws \Exception
     */
    public function get_authorization_status(){
        $rest = $this->getService( self::API_LOGIN_AUTHORIZE . $this->track_id);
        $rest->GET();

        $result = $rest->getResult();

        $this->status    = $result['status'];
        $this->challenge = $result['challenge'];

        $this->application->getLogger()->addInfo( 'Freebox authorization status : '. $this->status);
    }

    /**
     * @return string
     */
    public function getStatus(){
        return $this->status;
    }

    /**
     * @return string
     */
    public function getAppToken(){
        return $this->app_token;
    }

}

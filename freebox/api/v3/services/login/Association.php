<?php
namespace alphayax\freebox\api\v3\services\login;
use alphayax\freebox\utils\Service;

/**
 * Class Association
 * @package alphayax\freebox\api\v3\services\login
 */
class Association extends Service {

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
     * Check if an app token is defined, and launch the association process otherwise
     * @throws \Exception
     */
    public function authorize(){
        $this->application->loadAppToken();

        if( ! $this->application->haveAppToken()){
            $this->askAuthorization();
            while( in_array( $this->status, [self::STATUS_UNKNOWN, self::STATUS_PENDING])){
                $this->getAuthorizationStatus();
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
     * @return array [app_token, track_id]
     */
    public function askAuthorization(){
        $rest = $this->getService( self::API_LOGIN_AUTHORIZE);
        $rest->POST([
            'app_id'        => $this->application->getId(),
            'app_name'      => $this->application->getName(),
            'app_version'   => $this->application->getVersion(),
            'device_name'   => gethostname(),
        ]);

        $this->app_token = $rest->getResult()['app_token'];
        $this->track_id  = $rest->getResult()['track_id'];

        $this->application->getLogger()->addInfo( 'Authorization send to Freebox. Waiting for response...');

        return $rest->getResult();
    }

    /**
     * @throws \Exception
     * @return array [status, challenge]
     */
    public function getAuthorizationStatus(){
        $rest = $this->getService( self::API_LOGIN_AUTHORIZE . $this->track_id);
        $rest->GET();

        $this->status    = $rest->getResult()['status'];
        $this->challenge = $rest->getResult()['challenge'];

        $this->application->getLogger()->addInfo( 'Freebox authorization status : '. $this->status);

        return $rest->getResult();
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

    /**
     * @param int $track_id
     */
    public function setTrackId( $track_id) {
        $this->track_id = $track_id;
    }

}

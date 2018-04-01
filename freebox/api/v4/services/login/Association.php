<?php

namespace alphayax\freebox\api\v4\services\login;

use alphayax\freebox\utils\Service;

/**
 * Class Association
 * @package alphayax\freebox\api\v4\services\login
 */
class Association extends Service
{

    /// APIs services
    const API_LOGIN_AUTHORIZE = '/api/v4/login/authorize/';

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
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function authorize()
    {
        $this->application->loadAppToken();

        if ( ! $this->application->haveAppToken()) {
            $this->askAuthorization();
            while (in_array($this->status, [self::STATUS_UNKNOWN, self::STATUS_PENDING])) {
                $this->getAuthorizationStatus();
                if ($this->status == self::STATUS_GRANTED) {
                    $this->application->setAppToken($this->app_token);
                    $this->application->saveAppToken();
                    break;
                }
                sleep(5);
            }

            /// For verbose
            switch ($this->status) {
                case self::STATUS_GRANTED :
                    $this->application->getLogger()->addInfo('Access granted !');
                    break;
                case self::STATUS_TIMEOUT :
                    $this->application->getLogger()->addCritical('Access denied. You take to long to authorize app');
                    break;
                case self::STATUS_DENIED  :
                    $this->application->getLogger()->addCritical('Access denied. Freebox denied app connexion');
                    break;
            }
        }
    }


    /**
     * Contact the freebox and ask for App auth
     * @throws \Exception
     * @return array [app_token, track_id]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function askAuthorization()
    {
        $result = $this->callService('POST', self::API_LOGIN_AUTHORIZE, [
            'app_id'      => $this->application->getId(),
            'app_name'    => $this->application->getName(),
            'app_version' => $this->application->getVersion(),
            'device_name' => gethostname(),
        ]);

        $this->app_token = $result->getResult()['app_token'];
        $this->track_id  = $result->getResult()['track_id'];

        $this->application->getLogger()->addInfo('Authorization send to Freebox. Waiting for response...');

        return $result->getResult();
    }

    /**
     * @throws \Exception
     * @return array [status, challenge]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAuthorizationStatus()
    {
        $result = $this->callService('GET',self::API_LOGIN_AUTHORIZE . $this->track_id);

        $this->status    = $result->getResult()['status'];
        $this->challenge = $result->getResult()['challenge'];

        $this->application->getLogger()->addInfo('Freebox authorization status : ' . $this->status);

        return $result->getResult();
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getAppToken()
    {
        return $this->app_token;
    }

    /**
     * @param int $track_id
     */
    public function setTrackId($track_id)
    {
        $this->track_id = $track_id;
    }

}

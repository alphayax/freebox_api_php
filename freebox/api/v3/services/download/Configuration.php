<?php
namespace alphayax\freebox\api\v3\services\download;
use alphayax\freebox\utils\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class Configuration
 * @package alphayax\freebox\api\v3\services\download
 */
class Configuration extends Service {

    const API_DOWNLOAD_CONFIG       = '/api/v3/downloads/config/';
    const API_DOWNLOAD_THROTTLING   = '/api/v3/downloads/throttling';

    /**
     * Get the current Download configuration
     * @return models\Download\Config\DownloadConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_DOWNLOAD_CONFIG);
        $rest->GET();

        return $rest->getResult( models\Download\Config\DownloadConfig::class);
    }

    /**
     * Update the Download configuration
     * @param models\Download\Config\DownloadConfig $downloadConfig
     * @return models\Download\Config\DownloadConfig
     */
    public function setConfiguration( models\Download\Config\DownloadConfig $downloadConfig){
        $rest = $this->getAuthService( self::API_DOWNLOAD_CONFIG);
        $rest->PUT( $downloadConfig);

        return $rest->getResult( models\Download\Config\DownloadConfig::class);
    }

    /**
     * You can force the throttling mode using this method.
     * You can use any of the throttling modes defined in DlThrottlingConfig.
     * Setting to schedule will automatically set correct throttling mode.
     * Other values will force the throttling mode until you set it back to schedule.
     * @param string $throttlingMode
     * @return array [is_scheduled, throttling]
     */
    public function updateThrottlingMode( $throttlingMode = 'normal'){
        $rest = $this->getAuthService( self::API_DOWNLOAD_THROTTLING);
        $rest->PUT([
            'throttling' => $throttlingMode,
        ]);

        return $rest->getSuccess();
    }

}

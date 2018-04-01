<?php

namespace alphayax\freebox\api\v4\services\download;

use alphayax\freebox\api\v4\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Configuration
 * @package alphayax\freebox\api\v4\services\download
 */
class Configuration extends ServiceAuth
{

    const API_DOWNLOAD_CONFIG     = '/api/v4/downloads/config/';
    const API_DOWNLOAD_THROTTLING = '/api/v4/downloads/throttling';

    /**
     * Get the current Download configuration
     * @return models\Download\Config\DownloadConfig
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getConfiguration()
    {
        $rest = $this->callService('GET', self::API_DOWNLOAD_CONFIG);

        return $rest->getModel(models\Download\Config\DownloadConfig::class);
    }

    /**
     * Update the Download configuration
     * @param models\Download\Config\DownloadConfig $downloadConfig
     * @return models\Download\Config\DownloadConfig
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function setConfiguration(models\Download\Config\DownloadConfig $downloadConfig)
    {
        $rest = $this->callService('PUT', self::API_DOWNLOAD_CONFIG, $downloadConfig);

        return $rest->getModel(models\Download\Config\DownloadConfig::class);
    }

    /**
     * You can force the throttling mode using this method.
     * You can use any of the throttling modes defined in DlThrottlingConfig.
     * Setting to schedule will automatically set correct throttling mode.
     * Other values will force the throttling mode until you set it back to schedule.
     * @param string $throttlingMode
     * @return bool [is_scheduled, throttling]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function updateThrottlingMode($throttlingMode = 'normal')
    {
        $rest = $this->callService('PUT', self::API_DOWNLOAD_THROTTLING,[
            'throttling' => $throttlingMode,
        ]);

        return $rest->getSuccess();
    }

}

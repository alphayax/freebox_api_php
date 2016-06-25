<?php
namespace alphayax\freebox\api\v3\services\config\WiFi;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Config
 * @package alphayax\freebox\api\v3\services\config\WiFi
 */
class Config extends ServiceAuth {

    const API_WIFI_CONFIG       = '/api/v3/wifi/config/';
    const API_WIFI_CONFIG_RESET = '/api/v3/wifi/config/reset/';

    /**
     * Get the global wifi configuration
     * @return models\WiFi\GlobalConfig
     */
    public function getConfiguration(){
        $rest = $this->getService( self::API_WIFI_CONFIG);
        $rest->GET();

        return $rest->getResult( models\WiFi\GlobalConfig::class);
    }

    /**
     * Update the global wifi configuration
     * @param models\WiFi\GlobalConfig $globalConfig
     * @return models\WiFi\GlobalConfig
     */
    public function setConfiguration( models\WiFi\GlobalConfig $globalConfig){
        $rest = $this->getService( self::API_WIFI_CONFIG);
        $rest->PUT( $globalConfig);

        return $rest->getResult( models\WiFi\GlobalConfig::class);
    }

    /**
     * Reset Wifi to default configuration
     * @return bool
     */
    public function resetConfiguration(){
        $rest = $this->getService( self::API_WIFI_CONFIG_RESET);
        $rest->POST();

        return $rest->getSuccess();
    }

}

<?php
namespace alphayax\freebox\api\v3\services\config\WiFi;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Planning
 * @package alphayax\freebox\api\v3\services\config\WiFi
 */
class Planning extends ServiceAuth {

    const API_WIFI_PLANNING = '/api/v3/wifi/planning/';

    /**
     * Get the wifi planning
     * @return \alphayax\freebox\api\v3\models\WiFi\Planning
     */
    public function getPlanning(){
        $rest = $this->getService( self::API_WIFI_PLANNING);
        $rest->GET();

        return $rest->getResult( models\WiFi\Planning::class);
    }

    /**
     * Update the wifi planning
     * @param \alphayax\freebox\api\v3\models\WiFi\Planning $planning
     * @return \alphayax\freebox\api\v3\models\WiFi\Planning
     */
    public function update( models\WiFi\Planning $planning){
        $rest = $this->getService( self::API_WIFI_PLANNING);
        $rest->PUT( $planning);

        return $rest->getResult( models\WiFi\Planning::class);
    }

}

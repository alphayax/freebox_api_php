<?php
namespace alphayax\freebox\api\v3\services\config\WiFi;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class Planning
 * @package alphayax\freebox\api\v3\services\config\WiFi
 */
class Planning extends Service {

    const API_WIFI_PLANNING = '/api/v3/wifi/planning/';

    /**
     * @return \alphayax\freebox\api\v3\models\WiFi\Planning
     */
    public function getPlanning(){
        $rest = $this->getAuthService( self::API_WIFI_PLANNING);
        $rest->GET();

        return $rest->getResult( models\WiFi\Planning::class);
    }

    /**
     * @param \alphayax\freebox\api\v3\models\WiFi\Planning $planning
     * @return \alphayax\freebox\api\v3\models\WiFi\Planning
     */
    public function update( models\WiFi\Planning $planning){
        $rest = $this->getAuthService( self::API_WIFI_PLANNING);
        $rest->PUT( $planning);

        return $rest->getResult( models\WiFi\Planning::class);
    }
    
}

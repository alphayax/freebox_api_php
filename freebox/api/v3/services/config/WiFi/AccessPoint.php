<?php
namespace alphayax\freebox\api\v3\services\config\WiFi;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;

/**
 * Class AccessPoint
 * @package alphayax\freebox\api\v3\services\config\WiFi
 */
class AccessPoint extends Service {

    const API_WIFI_AP               = '/api/v3/wifi/ap/';
    const API_WIFI_AP_ALLOWED_COMB  = '/api/v3/wifi/ap/%u/allowed_channel_comb';

    /**
     * @return \alphayax\freebox\api\v3\models\WiFi\AccessPoint\AP[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_WIFI_AP);
        $rest->GET();

        return $rest->getResultAsArray( models\WiFi\AccessPoint\AP::class);
    }

    /**
     * @param int $accessPointId
     * @return \alphayax\freebox\api\v3\models\WiFi\AccessPoint\AP
     */
    public function getFromId( $accessPointId){
        $rest = $this->getAuthService( self::API_WIFI_AP . $accessPointId);
        $rest->GET();

        return $rest->getResult( models\WiFi\AccessPoint\AP::class);
    }

    /**
     * To be able to allow user to pick a valid channel combination for a given AP you should use the following api to retrieve the list of allowed channel combination.
     * @param int $accessPointId
     * @return models\WiFi\AccessPoint\AllowedComb[]
     */
    public function getAllowedCombFromId( $accessPointId) {
        $service = sprintf( self::API_WIFI_AP_ALLOWED_COMB, $accessPointId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResultAsArray( models\WiFi\AccessPoint\AllowedComb::class);
    }

    /**
     * @param $accessPoint
     * @return \alphayax\freebox\api\v3\models\WiFi\AccessPoint\AP
     */
    public function update( models\WiFi\AccessPoint\AP $accessPoint){
        $rest = $this->getAuthService( self::API_WIFI_AP . $accessPoint->getId());
        $rest->PUT( $accessPoint);

        return $rest->getResult( models\WiFi\AccessPoint\AP::class);
    }

}

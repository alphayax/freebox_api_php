<?php
namespace alphayax\freebox\api\v3\services\config\WiFi;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;

/**
 * Class AccessPoint
 * @package alphayax\freebox\api\v3\services\config\WiFi
 */
class AccessPoint extends Service {

    const API_WIFI_AP = '/api/v3/wifi/ap/';

    /**
     * @return \alphayax\freebox\api\v3\models\WiFi\AccessPoint\AP[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_WIFI_AP);
        $rest->GET();

        return $rest->getResultAsArray( models\WiFi\AccessPoint\AP::class);
    }

    /**
     * @param $accessPointId
     * @return \alphayax\freebox\api\v3\models\WiFi\AccessPoint\AP
     */
    public function getFromId( $accessPointId){
        $rest = $this->getAuthService( self::API_WIFI_AP . $accessPointId);
        $rest->GET();

        return $rest->getResult( models\WiFi\AccessPoint\AP::class);
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

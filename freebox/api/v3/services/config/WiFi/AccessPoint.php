<?php
namespace alphayax\freebox\api\v3\services\config\WiFi;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;

/**
 * Class AccessPoint
 * @package alphayax\freebox\api\v3\services\config\WiFi
 */
class AccessPoint extends Service {

    const API_WIFI_AP                   = '/api/v3/wifi/ap/';
    const API_WIFI_AP_ALLOWED_COMB      = '/api/v3/wifi/ap/%u/allowed_channel_comb';
    const API_WIFI_AP_STATIONS          = '/api/v3/wifi/ap/%u/stations/';
    const API_WIFI_AP_NEIGHBORS         = '/api/v3/wifi/ap/%u/neighbors/';
    const API_WIFI_AP_NEIGHBORS_SCAN    = '/api/v3/wifi/ap/%u/neighbors/scan';
    const API_WIFI_AP_CHANNEL_USAGE     = '/api/v3/wifi/ap/%u/channel_usage/';

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
     * To be able to allow user to pick a valid channel combination for a given AP you should use the following api to retrieve the list of allowed channel combination.
     * @param int $accessPointId
     * @return models\WiFi\APStation\Station[]
     */
    public function getStationsFromId( $accessPointId) {
        $service = sprintf( self::API_WIFI_AP_STATIONS, $accessPointId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResultAsArray( models\WiFi\APStation\Station::class);
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

    /**
     * Get the list of Neighbor seen by the AP
     * @param int $accessPointId
     * @return models\WiFi\Radar\Neighbor[]
     */
    public function getNeighborsFromId( $accessPointId) {
        $service = sprintf( self::API_WIFI_AP_NEIGHBORS, $accessPointId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResultAsArray( models\WiFi\Radar\Neighbor::class);
    }

    /**
     * WARNING during the scan the AP will be unavailable. Therefore, you should ask for user confirmation prior to launching a scan.
     * Once launched you should wait until the ap state comes back from scanning to get updated info.
     * @param int $accessPointId
     * @return boolean
     */
    public function refreshNeighborsScan( $accessPointId) {
        $service = sprintf( self::API_WIFI_AP_NEIGHBORS, $accessPointId);
        $rest = $this->getAuthService( $service);
        $rest->POST();

        return $rest->getSuccess();
    }

    /**
     * List Wi-Fi channels usage
     * @param int $accessPointId
     * @return models\WiFi\Radar\ChannelUsage[]
     */
    public function getChannelUsageFromId( $accessPointId) {
        $service = sprintf( self::API_WIFI_AP_CHANNEL_USAGE, $accessPointId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResultAsArray( models\WiFi\Radar\ChannelUsage::class);
    }


}

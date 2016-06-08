<?php
namespace alphayax\freebox\api\v3\services\config\WiFi;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class MacFilter
 * @package alphayax\freebox\api\v3\services\config\WiFi
 */
class MacFilter extends Service {

    const API_WIFI_MAC_FILTER     = '/api/v3/wifi/mac_filter/';

    /**
     * @return models\WiFi\MacFilter[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_WIFI_MAC_FILTER);
        $rest->GET();

        return $rest->getResultAsArray( models\WiFi\MacFilter::class);
    }

    /**
     * @param $MacFilterId
     * @return models\WiFi\MacFilter
     */
    public function getFromId( $MacFilterId){
        $rest = $this->getAuthService( self::API_WIFI_MAC_FILTER . $MacFilterId);
        $rest->GET();

        return $rest->getResult( models\WiFi\MacFilter::class);
    }

    /**
     * @param \alphayax\freebox\api\v3\models\WiFi\MacFilter $MacFilter
     * @return \alphayax\freebox\api\v3\models\WiFi\MacFilter
     */
    public function update( models\WiFi\MacFilter $MacFilter){
        $rest = $this->getAuthService( self::API_WIFI_MAC_FILTER . $MacFilter->getId());
        $rest->PUT( $MacFilter);

        return $rest->getResult( models\WiFi\MacFilter::class);
    }

    /**
     * @param \alphayax\freebox\api\v3\models\WiFi\MacFilter $MacFilter
     * @return \alphayax\freebox\api\v3\models\WiFi\MacFilter
     */
    public function delete( models\WiFi\MacFilter $MacFilter){
        $rest = $this->getAuthService( self::API_WIFI_MAC_FILTER . $MacFilter->getId());
        $rest->PUT( $MacFilter);

        return $rest->getResult( models\WiFi\MacFilter::class);
    }

    /**
     * @param $MacFilterId
     * @return \alphayax\freebox\api\v3\models\WiFi\MacFilter
     */
    public function deleteFromId( $MacFilterId){
        $rest = $this->getAuthService( self::API_WIFI_MAC_FILTER . $MacFilterId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * @param \alphayax\freebox\api\v3\models\WiFi\MacFilter $MacFilter
     * @return \alphayax\freebox\api\v3\models\WiFi\MacFilter
     */
    public function add( models\WiFi\MacFilter $MacFilter){
        $rest = $this->getAuthService( self::API_WIFI_MAC_FILTER);
        $rest->POST( $MacFilter);

        return $rest->getResult( models\WiFi\MacFilter::class);
    }

}

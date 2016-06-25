<?php
namespace alphayax\freebox\api\v3\services\config\WiFi;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class MacFilter
 * @package alphayax\freebox\api\v3\services\config\WiFi
 */
class MacFilter extends ServiceAuth {

    const API_WIFI_MAC_FILTER     = '/api/v3/wifi/mac_filter/';

    /**
     * Get all MacFilters
     * @return models\WiFi\MacFilter[]
     */
    public function getAll(){
        $rest = $this->getService( self::API_WIFI_MAC_FILTER);
        $rest->GET();

        return $rest->getResultAsArray( models\WiFi\MacFilter::class);
    }

    /**
     * Get a specific MacFilter
     * @param $MacFilterId
     * @return models\WiFi\MacFilter
     */
    public function getFromId( $MacFilterId){
        $rest = $this->getService( self::API_WIFI_MAC_FILTER . $MacFilterId);
        $rest->GET();

        return $rest->getResult( models\WiFi\MacFilter::class);
    }

    /**
     * Update a MacFilter
     * @param \alphayax\freebox\api\v3\models\WiFi\MacFilter $MacFilter
     * @return \alphayax\freebox\api\v3\models\WiFi\MacFilter
     */
    public function update( models\WiFi\MacFilter $MacFilter){
        $rest = $this->getService( self::API_WIFI_MAC_FILTER . $MacFilter->getId());
        $rest->PUT( $MacFilter);

        return $rest->getResult( models\WiFi\MacFilter::class);
    }

    /**
     * Delete a MacFilter
     * @param \alphayax\freebox\api\v3\models\WiFi\MacFilter $MacFilter
     * @return bool
     */
    public function delete( models\WiFi\MacFilter $MacFilter){
        return $this->deleteFromId( $MacFilter->getId());
    }

    /**
     * Delete a MacFilter with the specified id
     * @param $MacFilterId
     * @return bool
     */
    public function deleteFromId( $MacFilterId){
        $rest = $this->getService( self::API_WIFI_MAC_FILTER . $MacFilterId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Add a new MacFilter
     * @param \alphayax\freebox\api\v3\models\WiFi\MacFilter $MacFilter
     * @return \alphayax\freebox\api\v3\models\WiFi\MacFilter
     */
    public function add( models\WiFi\MacFilter $MacFilter){
        $rest = $this->getService( self::API_WIFI_MAC_FILTER);
        $rest->POST( $MacFilter);

        return $rest->getResult( models\WiFi\MacFilter::class);
    }

}

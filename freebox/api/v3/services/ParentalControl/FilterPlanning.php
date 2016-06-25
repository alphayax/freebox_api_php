<?php
namespace alphayax\freebox\api\v3\services\ParentalControl;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class FilterPlanning
 * @package alphayax\freebox\api\v3\services\ParentalControl
 */
class FilterPlanning extends ServiceAuth {

    const API_PARENTAL_FILTER_PLANNING = '/api/v3/parental/filter/%u/planning';

    /**
     * Get the filer planning associated with the given filter id
     * @param int $filterId
     * @return models\ParentalControl\FilterPlanning
     */
    public function getFromFilterId( $filterId) {
        $service = sprintf( self::API_PARENTAL_FILTER_PLANNING, $filterId);
        $rest = $this->getService( $service);
        $rest->GET();

        return $rest->getResult( models\ParentalControl\FilterPlanning::class);
    }

    /**
     * Update the filer planning associated with the given filter id
     * @param \alphayax\freebox\api\v3\models\ParentalControl\FilterPlanning $filterPlanning
     * @param int $filterId
     * @return \alphayax\freebox\api\v3\models\ParentalControl\FilterPlanning
     */
    public function setFromFilterId( models\ParentalControl\FilterPlanning $filterPlanning, $filterId) {
        $service = sprintf( self::API_PARENTAL_FILTER_PLANNING, $filterId);
        $rest = $this->getService( $service);
        $rest->PUT( $filterPlanning);

        return $rest->getResult( models\ParentalControl\FilterPlanning::class);
    }

}

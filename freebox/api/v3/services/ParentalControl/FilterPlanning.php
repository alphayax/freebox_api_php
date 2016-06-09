<?php
namespace alphayax\freebox\api\v3\services\ParentalControl;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class FilterPlanning
 * @package alphayax\freebox\api\v3\services\ParentalControl
 */
class FilterPlanning extends Service {

    const API_PARENTAL_FILTER_PLANNING = '/api/v3/parental/filter/%u/planning';

    /**
     * @param int $filterId
     * @return models\ParentalControl\FilterPlanning
     */
    public function getFromFilterId( $filterId) {
        $service = sprintf( self::API_PARENTAL_FILTER_PLANNING, $filterId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResult( models\ParentalControl\FilterPlanning::class);
    }

    /**
     * @param \alphayax\freebox\api\v3\models\ParentalControl\FilterPlanning $filterPlanning
     * @param int $filterId
     * @return \alphayax\freebox\api\v3\models\ParentalControl\FilterPlanning
     */
    public function setFromFilterId( models\ParentalControl\FilterPlanning $filterPlanning, $filterId) {
        $service = sprintf( self::API_PARENTAL_FILTER_PLANNING, $filterId);
        $rest = $this->getAuthService( $service);
        $rest->PUT( $filterPlanning);

        return $rest->getResult( models\ParentalControl\FilterPlanning::class);
    }

}

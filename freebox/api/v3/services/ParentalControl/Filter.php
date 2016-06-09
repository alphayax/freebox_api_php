<?php
namespace alphayax\freebox\api\v3\services\ParentalControl;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\symbols;

/**
 * Class Filter
 * @package alphayax\freebox\api\v3\services\Storage
 */
class Filter extends Service {

    const API_PARENTAL_CONFIG = '/api/v3/parental/config/';
    const API_PARENTAL_FILTER = '/api/v3/parental/filter/';

    /**
     * @throws \Exception
     * @return models\ParentalControl\FilterConfig
     */
    public function getConfiguration(){
        $rest = $this->getAuthService( self::API_PARENTAL_CONFIG);
        $rest->GET();

        return $rest->getResult( models\ParentalControl\FilterConfig::class);
    }

    /**
     * @param models\ParentalControl\FilterConfig $filterConfig
     * @return models\ParentalControl\FilterConfig
     */
    public function setConfiguration( models\ParentalControl\FilterConfig $filterConfig){
        $rest = $this->getAuthService( self::API_PARENTAL_CONFIG);
        $rest->PUT( $filterConfig);

        return $rest->getResult( models\ParentalControl\FilterConfig::class);
    }

    /**
     * Get the list of disks
     * @throws \Exception
     * @return models\ParentalControl\Filter[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_PARENTAL_FILTER);
        $rest->GET();

        return $rest->getResultAsArray( models\ParentalControl\Filter::class);
    }

    /**
     * @param int $filterId
     * @return models\ParentalControl\Filter
     */
    public function getFromId( $filterId){
        $rest = $this->getAuthService( self::API_PARENTAL_FILTER . $filterId);
        $rest->GET();

        return $rest->getResult( models\ParentalControl\Filter::class);
    }

    /**
     * @param models\ParentalControl\Filter $filter
     * @return models\ParentalControl\Filter
     */
    public function update( models\ParentalControl\Filter $filter){
        $rest = $this->getAuthService( self::API_PARENTAL_FILTER . $filter->getId());
        $rest->PUT( $filter);

        return $rest->getResult( models\ParentalControl\Filter::class);
    }

    /**
     * @param models\ParentalControl\Filter $filter
     * @return bool
     */
    public function delete( models\ParentalControl\Filter $filter){
        return $this->deleteFromId( $filter->getId());
    }

    /**
     * @param int $filterId
     * @return bool
     */
    public function deleteFromId( $filterId){
        $rest = $this->getAuthService( self::API_PARENTAL_FILTER . $filterId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * @param models\ParentalControl\Filter $filter
     * @return models\ParentalControl\Filter
     */
    public function add( models\ParentalControl\Filter $filter){
        $rest = $this->getAuthService( self::API_PARENTAL_FILTER);
        $rest->POST( $filter);

        return $rest->getResult( models\ParentalControl\Filter::class);
    }
}
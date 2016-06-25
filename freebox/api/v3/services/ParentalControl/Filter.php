<?php
namespace alphayax\freebox\api\v3\services\ParentalControl;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\symbols;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Filter
 * @package alphayax\freebox\api\v3\services\Storage
 */
class Filter extends ServiceAuth {

    const API_PARENTAL_CONFIG = '/api/v3/parental/config/';
    const API_PARENTAL_FILTER = '/api/v3/parental/filter/';

    /**
     * Return the current Filter configuration
     * @return models\ParentalControl\FilterConfig
     */
    public function getConfiguration(){
        $rest = $this->getService( self::API_PARENTAL_CONFIG);
        $rest->GET();

        return $rest->getResult( models\ParentalControl\FilterConfig::class);
    }

    /**
     * Update the filter configuration
     * @param models\ParentalControl\FilterConfig $filterConfig
     * @return models\ParentalControl\FilterConfig
     */
    public function setConfiguration( models\ParentalControl\FilterConfig $filterConfig){
        $rest = $this->getService( self::API_PARENTAL_CONFIG);
        $rest->PUT( $filterConfig);

        return $rest->getResult( models\ParentalControl\FilterConfig::class);
    }

    /**
     * Get the list of all filters
     * @throws \Exception
     * @return models\ParentalControl\Filter[]
     */
    public function getAll(){
        $rest = $this->getService( self::API_PARENTAL_FILTER);
        $rest->GET();

        return $rest->getResultAsArray( models\ParentalControl\Filter::class);
    }

    /**
     * Get a specific filter from id
     * @param int $filterId
     * @return models\ParentalControl\Filter
     */
    public function getFromId( $filterId){
        $rest = $this->getService( self::API_PARENTAL_FILTER . $filterId);
        $rest->GET();

        return $rest->getResult( models\ParentalControl\Filter::class);
    }

    /**
     * Update a filter
     * @param models\ParentalControl\Filter $filter
     * @return models\ParentalControl\Filter
     */
    public function update( models\ParentalControl\Filter $filter){
        $rest = $this->getService( self::API_PARENTAL_FILTER . $filter->getId());
        $rest->PUT( $filter);

        return $rest->getResult( models\ParentalControl\Filter::class);
    }

    /**
     * Delete a filter
     * @param models\ParentalControl\Filter $filter
     * @return bool
     */
    public function delete( models\ParentalControl\Filter $filter){
        return $this->deleteFromId( $filter->getId());
    }

    /**
     * Delete a filter with the specified id
     * @param int $filterId
     * @return bool
     */
    public function deleteFromId( $filterId){
        $rest = $this->getService( self::API_PARENTAL_FILTER . $filterId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Add a new filter
     * @param models\ParentalControl\Filter $filter
     * @return models\ParentalControl\Filter
     */
    public function add( models\ParentalControl\Filter $filter){
        $rest = $this->getService( self::API_PARENTAL_FILTER);
        $rest->POST( $filter);

        return $rest->getResult( models\ParentalControl\Filter::class);
    }

}

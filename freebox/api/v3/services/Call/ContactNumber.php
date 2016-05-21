<?php
namespace alphayax\freebox\api\v3\services\Call;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;


/**
 * Class ContactNumber
 * @package alphayax\freebox\api\v3\services\Call
 */
class ContactNumber extends Service {

    const API_NUMBER = '/api/v3/number/';

    /**
     * @param int $ContactNumberId
     * @return models\Call\ContactNumber
     */
    public function getFromId( $ContactNumberId){
        $rest = $this->getAuthService( self::API_NUMBER . $ContactNumberId);
        $rest->GET();

        return new models\Call\ContactNumber( $rest->getCurlResponse()['result']);
    }

    /**
     * @param models\Call\ContactNumber  $ContactNumber
     * @return models\Call\ContactNumber
     */
    public function create( models\Call\ContactNumber $ContactNumber){
        $rest = $this->getAuthService( self::API_NUMBER);
        $rest->POST( $ContactNumber->toArray());

        return new models\Call\ContactNumber( $rest->getCurlResponse()['result']);
    }

    /**
     * @param models\Call\ContactNumber  $ContactNumber
     * @return bool
     */
    public function delete( models\Call\ContactNumber $ContactNumber){
        return $this->deleteFromId( $ContactNumber->getId());
    }

    /**
     * @param int $ContactNumberId
     * @return bool
     */
    public function deleteFromId( $ContactNumberId){
        $rest = $this->getAuthService( self::API_NUMBER . $ContactNumberId);
        $rest->DELETE();

        return (bool) $rest->getCurlResponse()['success'];
    }

    /**
     * @param models\Call\ContactNumber  $ContactNumber
     * @return models\Call\ContactNumber
     */
    public function update( models\Call\ContactNumber $ContactNumber){
        $rest = $this->getAuthService( self::API_NUMBER . $ContactNumber->getId());
        $rest->PUT( $ContactNumber->toArray());

        return new models\Call\ContactNumber( $rest->getCurlResponse()['result']);
    }

}

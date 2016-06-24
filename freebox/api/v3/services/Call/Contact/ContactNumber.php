<?php
namespace alphayax\freebox\api\v3\services\Call\Contact;
use alphayax\freebox\utils\Service;
use alphayax\freebox\api\v3\models;


/**
 * Class ContactNumber
 * @package alphayax\freebox\api\v3\services\Call
 */
class ContactNumber extends Service {

    const API_NUMBER = '/api/v3/number/';

    /**
     * Get the contact number (with the given id)
     * @param int $ContactNumberId
     * @return models\Call\ContactNumber
     */
    public function getFromId( $ContactNumberId){
        $rest = $this->getAuthService( self::API_NUMBER . $ContactNumberId);
        $rest->GET();

        return $rest->getResult( models\Call\ContactNumber::class);
    }

    /**
     * Add a new contact number
     * @param models\Call\ContactNumber  $ContactNumber
     * @return models\Call\ContactNumber
     */
    public function create( models\Call\ContactNumber $ContactNumber){
        $rest = $this->getAuthService( self::API_NUMBER);
        $rest->POST( $ContactNumber);

        return $rest->getResult( models\Call\ContactNumber::class);
    }

    /**
     * Remove a contact number
     * @param models\Call\ContactNumber  $ContactNumber
     * @return bool
     */
    public function delete( models\Call\ContactNumber $ContactNumber){
        return $this->deleteFromId( $ContactNumber->getId());
    }

    /**
     * Remove a contact number (with the specified id)
     * @param int $ContactNumberId
     * @return bool
     */
    public function deleteFromId( $ContactNumberId){
        $rest = $this->getAuthService( self::API_NUMBER . $ContactNumberId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Update a contact number
     * @param models\Call\ContactNumber  $ContactNumber
     * @return models\Call\ContactNumber
     */
    public function update( models\Call\ContactNumber $ContactNumber){
        $rest = $this->getAuthService( self::API_NUMBER . $ContactNumber->getId());
        $rest->PUT( $ContactNumber);

        return $rest->getResult( models\Call\ContactNumber::class);
    }

}

<?php
namespace alphayax\freebox\api\v3\services\Call\Contact;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;


/**
 * Class ContactEmail
 * @package alphayax\freebox\api\v3\services\Call
 */
class ContactEmail extends Service {

    const API_EMAIL = '/api/v3/email/';

    /**
     * Get the email contact (with the given id)
     * @param int $ContactEmailId
     * @return models\Call\ContactEmail
     */
    public function getFromId( $ContactEmailId){
        $rest = $this->getAuthService( self::API_EMAIL . $ContactEmailId);
        $rest->GET();

        return $rest->getResult( models\Call\ContactEmail::class);
    }

    /**
     * Create a new email contact
     * @param models\Call\ContactEmail  $ContactEmail
     * @return models\Call\ContactEmail
     */
    public function create( models\Call\ContactEmail $ContactEmail){
        $rest = $this->getAuthService( self::API_EMAIL);
        $rest->POST( $ContactEmail);

        return $rest->getResult( models\Call\ContactEmail::class);
    }

    /**
     * Remove an email contact
     * @param models\Call\ContactEmail  $ContactEmail
     * @return bool
     */
    public function delete( models\Call\ContactEmail $ContactEmail){
        return $this->deleteFromId( $ContactEmail->getId());
    }

    /**
     * Remove an email contact (with the given id)
     * @param int $ContactEmailId
     * @return bool
     */
    public function deleteFromId( $ContactEmailId){
        $rest = $this->getAuthService( self::API_EMAIL . $ContactEmailId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Update an email contact
     * @param models\Call\ContactEmail  $ContactEmail
     * @return models\Call\ContactEmail
     */
    public function update( models\Call\ContactEmail $ContactEmail){
        $rest = $this->getAuthService( self::API_EMAIL . $ContactEmail->getId());
        $rest->PUT( $ContactEmail);

        return $rest->getResult( models\Call\ContactEmail::class);
    }

}

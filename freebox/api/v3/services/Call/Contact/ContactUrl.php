<?php
namespace alphayax\freebox\api\v3\services\Call\Contact;
use alphayax\freebox\utils\Service;
use alphayax\freebox\api\v3\models;


/**
 * Class ContactUrl
 * @package alphayax\freebox\api\v3\services\Call
 */
class ContactUrl extends Service {

    const API_URL = '/api/v3/url/';

    /**
     * Get the contact url (with the given id)
     * @param int $ContactUrlId
     * @return models\Call\ContactUrl
     */
    public function getFromId( $ContactUrlId){
        $rest = $this->getAuthService( self::API_URL . $ContactUrlId);
        $rest->GET();

        return $rest->getResult( models\Call\ContactUrl::class);
    }

    /**
     * Add a new contact url
     * @param models\Call\ContactUrl  $ContactUrl
     * @return models\Call\ContactUrl
     */
    public function create( models\Call\ContactUrl $ContactUrl){
        $rest = $this->getAuthService( self::API_URL);
        $rest->POST( $ContactUrl);

        return $rest->getResult( models\Call\ContactUrl::class);
    }

    /**
     * Remove a contact url
     * @param models\Call\ContactUrl  $ContactUrl
     * @return bool
     */
    public function delete( models\Call\ContactUrl $ContactUrl){
        return $this->deleteFromId( $ContactUrl->getId());
    }

    /**
     * Remove a contact url (with the given id)
     * @param int $ContactUrlId
     * @return bool
     */
    public function deleteFromId( $ContactUrlId){
        $rest = $this->getAuthService( self::API_URL . $ContactUrlId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Update a contact url
     * @param models\Call\ContactUrl  $ContactUrl
     * @return models\Call\ContactUrl
     */
    public function update( models\Call\ContactUrl $ContactUrl){
        $rest = $this->getAuthService( self::API_URL . $ContactUrl->getId());
        $rest->PUT( $ContactUrl);

        return $rest->getResult( models\Call\ContactUrl::class);
    }

}

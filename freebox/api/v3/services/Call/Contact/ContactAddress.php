<?php
namespace alphayax\freebox\api\v3\services\Call\Contact;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class ContactAddress
 * @package alphayax\freebox\api\v3\services\Call
 */
class ContactAddress extends ServiceAuth {

    const API_ADDRESS = '/api/v3/address/';

    /**
     * Get the address (with the given id)
     * @param int $contactAddressId
     * @return models\Call\ContactAddress
     */
    public function getFromId( $contactAddressId){
        $rest = $this->getService( self::API_ADDRESS . $contactAddressId);
        $rest->GET();

        return $rest->getResult( models\Call\ContactAddress::class);
    }

    /**
     * Add an address
     * @param models\Call\ContactAddress  $contactAddress
     * @return models\Call\ContactAddress
     */
    public function create( models\Call\ContactAddress $contactAddress){
        $rest = $this->getService( self::API_ADDRESS);
        $rest->POST( $contactAddress);

        return $rest->getResult( models\Call\ContactAddress::class);
    }

    /**
     * Remove an address
     * @param models\Call\ContactAddress  $contactAddress
     * @return bool
     */
    public function delete( models\Call\ContactAddress $contactAddress){
        return $this->deleteFromId( $contactAddress->getId());
    }

    /**
     * Remove an address (with the given id)
     * @param int $contactAddressId
     * @return bool
     */
    public function deleteFromId( $contactAddressId){
        $rest = $this->getService( self::API_ADDRESS . $contactAddressId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Update an address
     * @param models\Call\ContactAddress  $contactAddress
     * @return models\Call\ContactAddress
     */
    public function update( models\Call\ContactAddress $contactAddress){
        $rest = $this->getService( self::API_ADDRESS . $contactAddress->getId());
        $rest->PUT( $contactAddress);

        return $rest->getResult( models\Call\ContactAddress::class);
    }

}

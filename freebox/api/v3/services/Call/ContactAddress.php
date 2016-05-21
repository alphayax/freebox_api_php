<?php
namespace alphayax\freebox\api\v3\services\Call;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;


/**
 * Class ContactAddress
 * @package alphayax\freebox\api\v3\services\Call
 */
class ContactAddress extends Service {

    const API_ADDRESS = '/api/v3/address/';

    /**
     * @param int $contactAddressId
     * @return models\Call\ContactAddress
     */
    public function getFromId( $contactAddressId){
        $rest = $this->getAuthService( self::API_ADDRESS . $contactAddressId);
        $rest->GET();

        return new models\Call\ContactAddress ( $rest->getCurlResponse()['result']);
    }

    /**
     * @param models\Call\ContactAddress  $contactAddress
     * @return models\Call\ContactAddress
     */
    public function create( models\Call\ContactAddress $contactAddress){
        $rest = $this->getAuthService( self::API_ADDRESS);
        $rest->POST( $contactAddress->toArray());

        return new models\Call\ContactAddress ( $rest->getCurlResponse()['result']);
    }

    /**
     * @param models\Call\ContactAddress  $contactAddress
     * @return bool
     */
    public function delete( models\Call\ContactAddress $contactAddress){
        return $this->deleteFromId( $contactAddress->getId());
    }

    /**
     * @param int $contactAddressId
     * @return bool
     */
    public function deleteFromId( $contactAddressId){
        $rest = $this->getAuthService( self::API_ADDRESS . $contactAddressId);
        $rest->DELETE();

        return (bool) $rest->getCurlResponse()['success'];
    }

    /**
     * @param models\Call\ContactAddress  $contactAddress
     * @return models\Call\ContactAddress
     */
    public function update( models\Call\ContactAddress $contactAddress){
        $rest = $this->getAuthService( self::API_ADDRESS . $contactAddress->getId());
        $rest->PUT( $contactAddress->toArray());

        return new models\Call\ContactAddress( $rest->getCurlResponse()['result']);
    }

}

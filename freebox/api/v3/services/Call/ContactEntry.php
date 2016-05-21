<?php
namespace alphayax\freebox\api\v3\services\Call;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;


/**
 * Class Contact
 * @package alphayax\freebox\api\v3\services\Call
 */
class ContactEntry extends Service {

    const API_CONTACT           = '/api/v3/contact/';
    const API_CONTACT_NUMBERS   = '/api/v3/contact/%u/numbers/';
    const API_CONTACT_ADDRESSES = '/api/v3/contact/%u/addresses/';
    const API_CONTACT_URLS      = '/api/v3/contact/%u/urls/';
    const API_CONTACT_EMAILS    = '/api/v3/contact/%u/emails/';

    /**
     * List every calls
     * @return models\Call\CallEntry[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_CONTACT);
        $rest->GET();

        $ContactEntry_xs = $rest->getCurlResponse()['result'];
        $ContactEntries  = [];
        foreach( $ContactEntry_xs as $ContactEntry_x) {
            $ContactEntries[] = new models\Call\ContactEntry( $ContactEntry_x);
        }
        return $ContactEntries;
    }

    /**
     * @param int $ContactEntryId
     * @return models\Call\ContactEntry
     */
    public function getFromId( $ContactEntryId){
        $rest = $this->getAuthService( self::API_CONTACT . $ContactEntryId);
        $rest->GET();

        return new models\Call\ContactEntry( $rest->getCurlResponse()['result']);
    }

    /**
     * @param models\Call\ContactEntry $ContactEntry
     * @return models\Call\ContactEntry
     */
    public function create( models\Call\ContactEntry $ContactEntry){
        $rest = $this->getAuthService( self::API_CONTACT);
        $rest->POST( $ContactEntry->toArray());

        return new models\Call\ContactEntry( $rest->getCurlResponse()['result']);
    }

    /**
     * @param models\Call\ContactEntry $ContactEntry
     * @return models\Call\ContactEntry
     */
    public function update( models\Call\ContactEntry $ContactEntry){
        $rest = $this->getAuthService( self::API_CONTACT . $ContactEntry->getId());
        $rest->PUT( $ContactEntry->toArray());

        return new models\Call\ContactEntry( $rest->getCurlResponse()['result']);
    }

    /**
     * @param models\Call\ContactEntry $ContactEntry
     * @return models\Call\ContactEntry
     */
    public function delete( models\Call\ContactEntry $ContactEntry){
        return $this->deleteFromId( $ContactEntry->getId());
    }

    /**
     * @param int $ContactEntryId
     * @return models\Call\ContactEntry
     */
    public function deleteFromId( $ContactEntryId){
        $rest = $this->getAuthService( self::API_CONTACT);
        $rest->DELETE( $ContactEntryId);

        return $rest->getCurlResponse()['success'];
    }

    /**
     * @param int $ContactEntryId
     * @return models\Call\ContactNumber[]
     */
    public function getContactNumbersFromContactId( $ContactEntryId){
        $service = sprintf( self::API_CONTACT_NUMBERS, $ContactEntryId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        $ContactNumber_xs = @$rest->getCurlResponse()['result'] ?: [];
        $ContactNumbers   = [];
        foreach( $ContactNumber_xs as $ContactNumber_x) {
            $ContactNumbers[] = new models\Call\ContactNumber( $ContactNumber_x);
        }
        return $ContactNumbers;
    }

    /**
     * @param int $ContactEntryId
     * @return models\Call\ContactAddress[]
     */
    public function getContactAddressesFromContactId( $ContactEntryId){
        $service = sprintf( self::API_CONTACT_ADDRESSES, $ContactEntryId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        $ContactAddress_xs = @$rest->getCurlResponse()['result'] ?: [];
        $ContactAddresses  = [];
        foreach( $ContactAddress_xs as $ContactAddress_x) {
            $ContactAddresses[] = new models\Call\ContactAddress( $ContactAddress_x);
        }
        return $ContactAddresses;
    }

    /**
     * @param int $ContactEntryId
     * @return models\Call\ContactEmail[]
     */
    public function getContactEmailsFromContactId( $ContactEntryId){
        $service = sprintf( self::API_CONTACT_EMAILS, $ContactEntryId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        $ContactEmail_xs = @$rest->getCurlResponse()['result'] ?: [];
        $ContactEmails   = [];
        foreach( $ContactEmail_xs as $ContactEmail_x) {
            $ContactEmails[] = new models\Call\ContactEmail( $ContactEmail_x);
        }
        return $ContactEmails;
    }

    /**
     * @param int $ContactEntryId
     * @return models\Call\ContactUrl[]
     */
    public function getContactUrlsFromContactId( $ContactEntryId){
        $service = sprintf( self::API_CONTACT_URLS, $ContactEntryId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        $ContactUrl_xs = @$rest->getCurlResponse()['result'] ?: [];
        $ContactUrls   = [];
        foreach( $ContactUrl_xs as $ContactUrl_x) {
            $ContactUrls[] = new models\Call\ContactUrl( $ContactUrl_x);
        }
        return $ContactUrls;
    }

}

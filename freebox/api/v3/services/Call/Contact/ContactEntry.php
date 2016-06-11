<?php
namespace alphayax\freebox\api\v3\services\Call\Contact;
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
     * List all contacts
     * @return models\Call\ContactEntry[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_CONTACT);
        $rest->GET();

        return $rest->getResultAsArray( models\Call\ContactEntry::class);
    }

    /**
     * Get a specific contact entry
     * @param int $ContactEntryId
     * @return models\Call\ContactEntry
     */
    public function getFromId( $ContactEntryId){
        $rest = $this->getAuthService( self::API_CONTACT . $ContactEntryId);
        $rest->GET();

        return $rest->getResult( models\Call\ContactEntry::class);
    }

    /**
     * Add a contact entry
     * @param models\Call\ContactEntry $ContactEntry
     * @return models\Call\ContactEntry
     */
    public function create( models\Call\ContactEntry $ContactEntry){
        $rest = $this->getAuthService( self::API_CONTACT);
        $rest->POST( $ContactEntry);

        return $rest->getResult( models\Call\ContactEntry::class);
    }

    /**
     * Update a contact entry
     * @param models\Call\ContactEntry $ContactEntry
     * @return models\Call\ContactEntry
     */
    public function update( models\Call\ContactEntry $ContactEntry){
        $rest = $this->getAuthService( self::API_CONTACT . $ContactEntry->getId());
        $rest->PUT( $ContactEntry);

        return $rest->getResult( models\Call\ContactEntry::class);
    }

    /**
     * Remove a contact entry
     * @param models\Call\ContactEntry $ContactEntry
     * @return models\Call\ContactEntry
     */
    public function delete( models\Call\ContactEntry $ContactEntry){
        return $this->deleteFromId( $ContactEntry->getId());
    }

    /**
     * Remove a contact entry (with the specified id)
     * @param int $ContactEntryId
     * @return models\Call\ContactEntry
     */
    public function deleteFromId( $ContactEntryId){
        $rest = $this->getAuthService( self::API_CONTACT);
        $rest->DELETE( $ContactEntryId);

        return $rest->getSuccess();
    }

    /**
     * Get all numbers associated to a given contact id
     * @param int $ContactEntryId
     * @return models\Call\ContactNumber[]
     */
    public function getContactNumbersFromContactId( $ContactEntryId){
        $service = sprintf( self::API_CONTACT_NUMBERS, $ContactEntryId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResultAsArray( models\Call\ContactNumber::class);
    }

    /**
     * Get all addresses associated to a given contact id
     * @param int $ContactEntryId
     * @return models\Call\ContactAddress[]
     */
    public function getContactAddressesFromContactId( $ContactEntryId){
        $service = sprintf( self::API_CONTACT_ADDRESSES, $ContactEntryId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResultAsArray( models\Call\ContactAddress::class);
    }

    /**
     * Get all email addresses associated to a given contact id
     * @param int $ContactEntryId
     * @return models\Call\ContactEmail[]
     */
    public function getContactEmailsFromContactId( $ContactEntryId){
        $service = sprintf( self::API_CONTACT_EMAILS, $ContactEntryId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResultAsArray( models\Call\ContactEmail::class);
    }

    /**
     * Get all URLs associated to a given contact id
     * @param int $ContactEntryId
     * @return models\Call\ContactUrl[]
     */
    public function getContactUrlsFromContactId( $ContactEntryId){
        $service = sprintf( self::API_CONTACT_URLS, $ContactEntryId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResultAsArray( models\Call\ContactUrl::class);
    }

}

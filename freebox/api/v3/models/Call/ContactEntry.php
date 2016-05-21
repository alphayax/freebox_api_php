<?php
namespace alphayax\freebox\api\v3\models\Call;
use alphayax\freebox\api\v3\Model;

/**
 * Class ContactEntry
 * @package alphayax\freebox\api\v3\models\Call
 */
class ContactEntry extends Model {

    /** @var int : contact id */
    protected $id;

    /** @var string : contact display name */
    protected $display_name;

    /** @var string : contact first name */
    protected $first_name;

    /** @var string : contact last name */
    protected $last_name;

    /** @var string : contact company name */
    protected $company;

    /** @var string : contact photo URL. NOTE the photo URL can be embedded (for instance “data:image/jpeg;base64,/9j/4AA [ ... ]”) */
    protected $photo_url;

    /** @var int timestamp : contact last modification timestamp */
    protected $last_update ;

    /** @var string : contact last modification timestamp */
    protected $notes;

    /** @var ContactAddress[] : list of contact postal addresses */
    protected $addresses = [];

    /** @var ContactEmail[] : list of contact email addresses */
    protected $emails = [];

    /** @var ContactNumber[] : list of contact phone numbers */
    protected $numbers = [];

    /** @var ContactUrl[] : list of contact URL */
    protected $urls = [];

    /**
     * FreeplugNetwork constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initPropertyArray( 'addresses', ContactAddress::class);
        $this->initPropertyArray( 'emails'   , ContactEmail::class);
        $this->initPropertyArray( 'numbers'  , ContactNumber::class);
        $this->initPropertyArray( 'urls'     , ContactUrl::class);
    }

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId( $id) {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDisplayName() {
        return $this->display_name;
    }

    /**
     * @param string $display_name
     */
    public function setDisplayName( $display_name) {
        $this->display_name = $display_name;
    }

    /**
     * @return string
     */
    public function getFirstName() {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName( $first_name) {
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName() {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName( $last_name) {
        $this->last_name = $last_name;
    }

    /**
     * @return string
     */
    public function getCompany() {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany( $company) {
        $this->company = $company;
    }

    /**
     * @return string
     */
    public function getPhotoUrl() {
        return $this->photo_url;
    }

    /**
     * @param string $photo_url
     */
    public function setPhotoUrl( $photo_url) {
        $this->photo_url = $photo_url;
    }

    /**
     * @return int
     */
    public function getLastUpdate() {
        return $this->last_update;
    }

    /**
     * @param int $last_update
     */
    public function setLastUpdate( $last_update) {
        $this->last_update = $last_update;
    }

    /**
     * @return string
     */
    public function getNotes() {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes( $notes) {
        $this->notes = $notes;
    }

    /**
     * @return ContactAddress[]
     */
    public function getAddresses() {
        return $this->addresses;
    }

    /**
     * @param ContactAddress[] $addresses
     */
    public function setAddresses( array $addresses) {
        $this->addresses = $addresses;
    }

    /**
     * @param ContactAddress $address
     */
    public function addAddress( ContactAddress $address) {
        $this->addresses[] = $address;
    }

    /**
     * @return ContactEmail[]
     */
    public function getEmails() {
        return $this->emails;
    }

    /**
     * @param ContactEmail[] $emails
     */
    public function setEmails( array $emails) {
        $this->emails = $emails;
    }

    /**
     * @param ContactEmail $email
     */
    public function addEmail( ContactEmail $email) {
        $this->emails[] = $email;
    }

    /**
     * @return ContactNumber[]
     */
    public function getNumbers() {
        return $this->numbers;
    }

    /**
     * @param ContactNumber[] $numbers
     */
    public function setNumbers( array $numbers) {
        $this->numbers = $numbers;
    }

    /**
     * @param ContactNumber $number
     */
    public function addNumbers( ContactNumber $number) {
        $this->numbers[] = $number;
    }

    /**
     * @return ContactUrl[]
     */
    public function getUrls() {
        return $this->urls;
    }

    /**
     * @param ContactUrl[] $urls
     */
    public function setUrls( array $urls) {
        $this->urls = $urls;
    }

    /**
     * @param ContactUrl $url
     */
    public function addUrl( ContactUrl $url) {
        $this->urls[] = $url;
    }

}

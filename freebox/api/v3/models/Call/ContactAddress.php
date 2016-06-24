<?php
namespace alphayax\freebox\api\v3\models\Call;
use alphayax\freebox\utils\Model;

/**
 * Class ContactAddress
 * @package alphayax\freebox\api\v3\models\Call
 */
class ContactAddress extends Model {

    /** @var int : address id */
    protected $id;

    /** @var int : id of the related contact */
    protected $contact_id;

    /**
     * @var string : Type of email
     * @see ContactAddressType
     */
    protected $type;

    /** @var string */
    protected $number;

    /** @var string */
    protected $street;

    /** @var string */
    protected $street2;

    /** @var string */
    protected $city;

    /** @var string */
    protected $zipcode;

    /** @var string */
    protected $country;

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getContactId() {
        return $this->contact_id;
    }

    /**
     * @param int $contact_id
     */
    public function setContactId( $contact_id) {
        $this->contact_id = $contact_id;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType( $type) {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber( $number) {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getStreet() {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet( $street) {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getStreet2() {
        return $this->street2;
    }

    /**
     * @param string $street2
     */
    public function setStreet2( $street2) {
        $this->street2 = $street2;
    }

    /**
     * @return string
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity( $city) {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getZipcode() {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     */
    public function setZipcode( $zipcode) {
        $this->zipcode = $zipcode;
    }

    /**
     * @return string
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry( $country) {
        $this->country = $country;
    }

}

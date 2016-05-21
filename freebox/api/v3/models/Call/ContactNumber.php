<?php
namespace alphayax\freebox\api\v3\models\Call;
use alphayax\freebox\api\v3\Model;

/**
 * Class ContactNumber
 * @package alphayax\freebox\api\v3\models\Call
 */
class ContactNumber extends Model {

    /** @var int : address id */
    protected $id;

    /** @var int : id of the related contact */
    protected $contact_id;

    /**
     * @var string
     * @see alphayax\freebox\api\v3\symbols\Call\ContactNumberType
     */
    protected $type;

    /** @var string */
    protected $number;

    /** @var bool : is this number the preferred contact phone number */
    protected $is_default;

    /** @var bool : is this number the Freebox owner number */
    protected $is_own;

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
    public function setContactId($contact_id) {
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
    public function setType($type) {
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
    public function setNumber($number) {
        $this->number = $number;
    }

    /**
     * @return boolean
     */
    public function isIsDefault() {
        return $this->is_default;
    }

    /**
     * @param boolean $is_default
     */
    public function setIsDefault($is_default) {
        $this->is_default = $is_default;
    }

    /**
     * @return boolean
     */
    public function isIsOwn() {
        return $this->is_own;
    }

    /**
     * @param boolean $is_own
     */
    public function setIsOwn($is_own) {
        $this->is_own = $is_own;
    }

}

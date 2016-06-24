<?php
namespace alphayax\freebox\api\v3\models\Call;
use alphayax\freebox\utils\Model;

/**
 * Class ContactEmail
 * @package alphayax\freebox\api\v3\models\Call
 */
class ContactEmail extends Model {

    /** @var int : address id */
    protected $id;

    /** @var int : id of the related contact */
    protected $contact_id;

    /**
     * @var string : Type of address
     * @see alphayax\freebox\api\v3\symbols\Call\ContactEmailType
     */
    protected $type;

    /** @var string : email address */
    protected $email;

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
    public function getEmail() {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail( $email) {
        $this->email = $email;
    }

}

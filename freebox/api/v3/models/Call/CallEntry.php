<?php
namespace alphayax\freebox\api\v3\models\Call;
use alphayax\freebox\api\v3\Model;

/**
 * Class CallEntry
 * @package alphayax\freebox\api\v3\models\Call
 */
class CallEntry extends Model {

    /** @var int (Read-only) : id */
    protected $id;

    /**
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\Call\CallEntryType
     */
    protected $type;

    /** @var int timestamp (Read-only) : Call creation timestamp. */
    protected $datetime;

    /** @var string (Read-only) : Callee number for outgoing calls. Caller number for incoming calls. */
    protected $number;

    /** @var string (Read-only)
     * Callee name for outgoing calls. Caller name for incoming calls.
     * For incoming call if the network does not provide a contact name, we try to use the contact database to find a suitable name */
    protected $name;

    /** @var int (Read-only) : Call duration in seconds. */
    protected $duration;

    /** @var bool : Call entry as not been acknowledged yet. */
    protected $new;

    /** @var int (Read-only) : If the number matches an entry in the contact database, the id of the matching contact. */
    protected $contact_id;

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getDatetime() {
        return $this->datetime;
    }

    /**
     * @return string
     */
    public function getNumber() {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getDuration() {
        return $this->duration;
    }

    /**
     * @return boolean
     */
    public function isNew() {
        return $this->new;
    }

    /**
     * @param boolean $new
     */
    public function setNew( $new) {
        $this->new = $new;
    }

    /**
     * @return int
     */
    public function getContactId() {
        return $this->contact_id;
    }

}

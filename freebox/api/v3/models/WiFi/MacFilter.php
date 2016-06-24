<?php
namespace alphayax\freebox\api\v3\models\WiFi;
use alphayax\freebox\utils\Model;
use alphayax\freebox\api\v3\models;

/**
 * Class MacFilter
 * @package alphayax\freebox\api\v3\models\WiFi
 */
class MacFilter extends Model {

    /** @var string (Read-only) : filter id */
    protected $id;

    /** @var string (Read-only) : MAC address to filter */
    protected $mac;

    /** @var string : comment */
    protected $comment;

    /**
     * @var string
     * @see alphayax\freebox\api\v3\symbols\WiFi\MacFilter\Type
     */
    protected $type;

    /** @var string (Read-only) : host name when available */
    protected $hostname;

    /** @var models\LAN\LanHost : host information when available */
    protected $host;

    /**
     * FreeplugNetwork constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initProperty( 'host', models\LAN\LanHost::class);
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getMac() {
        return $this->mac;
    }

    /**
     * @return string
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment) {
        $this->comment = $comment;
    }

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\WiFi\MacFilter\Type
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param string $type
     * @see alphayax\freebox\api\v3\symbols\WiFi\MacFilter\Type
     */
    public function setType($type) {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getHostname() {
        return $this->hostname;
    }

    /**
     * @return models\LAN\LanHost
     */
    public function getHost() {
        return $this->host;
    }

}

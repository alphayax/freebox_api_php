<?php
namespace alphayax\freebox\api\v3\models\UPnP;
use alphayax\freebox\api\v3\Model;
use alphayax\freebox\api\v3\models\LAN\LanHost;

/**
 * Class UpnpIgdRedirection
 * @package alphayax\freebox\api\v3\models\UPnP
 */
class UpnpIgdRedirection extends Model {

    /** @var string (Read-only) : the redirection id */
    protected $id;

    /** @var bool (Read-only) : is the redirection enabled */
    protected $enabled;

    /** @var string (Read-only) : source IP */
    protected $ext_src_ip;

    /** @var int (Read-only) : external port */
    protected $ext_port;

    /** @var string (Read-only) : the target IP on your LAN */
    protected $int_ip;

    /** @var int (Read-only) : the target port on your LAN */
    protected $int_port;

    /** @var string (Read-only) : the IP protocol to redirect */
    protected $proto;

    /** @var string (Read-only) : a description */
    protected $desc;

    /** @var int (Read-only) : seconds remaining before redirection expire */
    protected $remaining;

    /** @var LanHost (Read-only) : lan host if available */
    protected $host;

    /**
     * UpnpIgdRedirection constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initProperty( 'host', LanHost::class);
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return boolean
     */
    public function isEnabled() {
        return $this->enabled;
    }

    /**
     * @return string
     */
    public function getExtSrcIp() {
        return $this->ext_src_ip;
    }

    /**
     * @return int
     */
    public function getExtPort() {
        return $this->ext_port;
    }

    /**
     * @return string
     */
    public function getIntIp() {
        return $this->int_ip;
    }

    /**
     * @return int
     */
    public function getIntPort() {
        return $this->int_port;
    }

    /**
     * @return string
     */
    public function getProto() {
        return $this->proto;
    }

    /**
     * @return string
     */
    public function getDesc() {
        return $this->desc;
    }

    /**
     * @return int
     */
    public function getRemaining() {
        return $this->remaining;
    }

    /**
     * @return LanHost
     */
    public function getHost() {
        return $this->host;
    }

}

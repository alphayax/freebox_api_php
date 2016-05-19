<?php
namespace alphayax\freebox\api\v3\models\LAN;
use alphayax\freebox\api\v3\Model;

/**
 * Class LanHost
 * @package alphayax\freebox\api\v3\models\LAN
 */
class LanHost extends Model {

    /** @var string (Read-only) : Host id (unique on this interface) */
    protected $id ;

    /** @var string : Host primary name (chosen from the list of available names, or manually set by user) */
    protected $primary_name ;

    /**
     * @var string
     * @see alphayax\freebox\api\v3\symbols\Lan\LanHostType
     * When possible, the Freebox will try to guess the host_type, but you can manually override this to the correct value
     */
    protected $host_type ;

    /** @var bool (Read-only) : If true the primary name has been set manually */
    protected $primary_name_manual ;

    /** @var LanHostL2Ident[] array of LanHostL2Ident (Read-only) : Layer 2 network id and its type */
    protected $l2ident;

    /** @var string (Read-only) : Host vendor name (from the mac address) */
    protected $vendor_name ;

    /** @var bool : If true the host is always shown even if it has not been active since the Freebox startup */
    protected $persistent ;

    /** @var bool (Read-only) : If true the host can receive traffic from the Freebox */
    protected $reachable ;

    /** @var int timestamp (Read-only) : Last time the host was reached */
    protected $last_time_reachable ;

    /** @var bool (Read-only) : If true the host sends traffic to the Freebox */
    protected $active ;

    /** @var int timestamp (Read-only) : Last time the host sent traffic */
    protected $last_activity ;

    /** @var LanHostName[] array of LanHostName (Read-only) : List of available names, and their source */
    protected $names;

    /** @var LanHostL3Connectivity[] array of LanHostL3Connectivity (Read-only) : List of available layer 3 network connections */
    protected $l3connectivities;

    /**
     * LanHost constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initPropertyArray( 'l2ident'         , LanHostL2Ident::class);
        $this->initPropertyArray( 'names'           , LanHostName::class);
        $this->initPropertyArray( 'l3connectivities', LanHostL3Connectivity::class);
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
    public function getPrimaryName() {
        return $this->primary_name;
    }

    /**
     * @param string $primary_name
     */
    public function setPrimaryName( $primary_name){
        $this->primary_name = $primary_name;
    }

    /**
     * @return string
     */
    public function getHostType() {
        return $this->host_type;
    }

    /**
     * @param string $host_type
     */
    public function setHostType( $host_type) {
        $this->host_type = $host_type;
    }

    /**
     * @return boolean
     */
    public function isPrimaryNameManual() {
        return $this->primary_name_manual;
    }

    /**
     * @return LanHostL2Ident[]
     */
    public function getL2ident() {
        return $this->l2ident;
    }

    /**
     * @return string
     */
    public function getVendorName() {
        return $this->vendor_name;
    }

    /**
     * @return boolean
     */
    public function isPersistent() {
        return $this->persistent;
    }

    /**
     * @param boolean $persistent
     */
    public function setPersistent($persistent) {
        $this->persistent = $persistent;
    }

    /**
     * @return boolean
     */
    public function isReachable() {
        return $this->reachable;
    }

    /**
     * @return int
     */
    public function getLastTimeReachable() {
        return $this->last_time_reachable;
    }

    /**
     * @return boolean
     */
    public function isActive() {
        return $this->active;
    }

    /**
     * @return int
     */
    public function getLastActivity() {
        return $this->last_activity;
    }

    /**
     * @return LanHostName[]
     */
    public function getNames() {
        return $this->names;
    }

    /**
     * @return LanHostL3Connectivity[]
     */
    public function getL3connectivities() {
        return $this->l3connectivities;
    }

}

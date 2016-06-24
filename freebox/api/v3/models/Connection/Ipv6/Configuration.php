<?php
namespace alphayax\freebox\api\v3\models\Connection\Ipv6;
use alphayax\freebox\utils\Model;

/**
 * Class Configuration
 * @package alphayax\freebox\api\v3\models\Connection\Ipv6
 */
class Configuration extends Model {

    /** @var bool : is IPv6 enabled */
    protected $ipv6_enabled;

    /** @var string (Read-only) : Freebox IPv6 link local address */
    protected $ipv6ll;

    /** @var Delegation[] list of IPv6 delegations */
    protected $delegations;

    /**
     * FreeplugNetwork constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initPropertyArray( 'delegations', Delegation::class);
    }

    /**
     * Return true if IPv6 is enabled
     * @return boolean
     */
    public function isIpv6Enabled() {
        return $this->ipv6_enabled;
    }

    /**
     * Enable/Disable IPv6
     * @param boolean $ipv6_enabled
     */
    public function setIpv6Enabled( $ipv6_enabled) {
        $this->ipv6_enabled = $ipv6_enabled;
    }

    /**
     * Get the Freebox IPv6 link local address
     * @return string
     */
    public function getIpv6ll() {
        return $this->ipv6ll;
    }

    /**
     * Get a list of IPv6 delegations
     * @return Delegation[]
     */
    public function getDelegations() {
        return $this->delegations;
    }

    /**
     * Set a list of IPv6 delegations
     * @param Delegation[] $delegations
     */
    public function setDelegations( $delegations) {
        $this->delegations = $delegations;
    }

}

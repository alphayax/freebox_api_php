<?php
namespace alphayax\freebox\api\v3\models\VPN\Client;
use alphayax\freebox\api\v3\Model;

/**
 * Class Status
 * @package alphayax\freebox\api\v3\models\VPN\Client
 */
class Status extends Model {

    /** @var bool (Read-only) : is VPN client enabled */
    protected $enabled;

    /** @var string (Read-only) : active VPN id */
    protected $active_vpn;

    /** @var string (Read-only) : active VPN description */
    protected $active_vpn_description;

    /** 
     * @var string (Read-only) : active VPN type
     * @see alphayax\freebox\api\v3\symbols\VPN\Server\Type
     */
    protected $type;

    /** 
     * @var string (Read-only) 
     * @see \alphayax\freebox\api\v3\symbols\VPN\ClientStatus\State
     */
    protected $state;

    /** @var int (Read-only) : timestamp of last successfull connection */
    protected $last_up;

    /** @var int (Read-only) : timestamp of last connection attempt */
    protected $last_try;

    /** @var int (Read-only) : seconds left until next connection attempt */
    protected $next_try;

    /**
     * @var string (Read-only)
     * none	                   no error
     * internal	               internal error
     * authentication_failed   wrong credentials
     * auth_failed	           wrong credentials
     * resolv_failed	       invalid host name
     * connect_timeout	       connection timeout
     * connect_failed	       connection failed
     * setup_control_failed	   PPTP session negociation failure
     * setup_call_failed	   PPTP session failure
     * protocol	               protocol error
     * remote_terminated	   connection closed by remote peer
     * remote_disconnect	   connection closed by remote peer
     */
    protected $last_error;

    /** @var Stats (Read-only) : connection statistics */
    protected $stats;

    /** @var IpInfo (Read-only) : connection IPv4 information */
    protected $IPv4;

    /**
     * Status constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initProperty( 'stats', Stats::class);
        $this->initProperty( 'IPv4' , IpInfo::class);
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
    public function getActiveVpn() {
        return $this->active_vpn;
    }

    /**
     * @return string
     */
    public function getActiveVpnDescription() {
        return $this->active_vpn_description;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @return int
     */
    public function getLastUp() {
        return $this->last_up;
    }

    /**
     * @return int
     */
    public function getLastTry() {
        return $this->last_try;
    }

    /**
     * @return int
     */
    public function getNextTry() {
        return $this->next_try;
    }

    /**
     * @return string
     */
    public function getLastError() {
        return $this->last_error;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\VPN\Client\Stats
     */
    public function getStats() {
        return $this->stats;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\VPN\Client\IpInfo
     */
    public function getIPv4() {
        return $this->IPv4;
    }

}

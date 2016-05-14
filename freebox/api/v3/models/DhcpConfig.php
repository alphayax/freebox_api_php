<?php
namespace alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Model;

/**
 * Class DhcpConfig
 * @package alphayax\freebox\api\v3\models
 */
class DhcpConfig extends Model {

    /** @var bool Enable/Disable the DHCP server */
    protected $enabled;

    /** @var bool Always assign the same IP to a given host */
    protected $sticky_assign;

    /** @var string (Read-only)    Gateway IP address */
    protected $gateway;

    /** @var string (Read-only)    Gateway subnet netmask */
    protected $netmask;

    /** @var string DHCP range start IP */
    protected $ip_range_start;

    /** @var string DHCP range end IP */
    protected $ip_range_end;

    /** @var bool Always broadcast DHCP responses */
    protected $always_broadcast;

    /** @var array of string   List of dns servers to include in DHCP reply */
    protected $dns = [];

    /**
     * @return boolean
     */
    public function isEnabled(){
        return $this->enabled;
    }

    /**
     * @param boolean $enabled
     */
    public function setEnabled( $enabled){
        $this->enabled = $enabled;
    }

    /**
     * @return boolean
     */
    public function isStickyAssign(){
        return $this->sticky_assign;
    }

    /**
     * @param boolean $sticky_assign
     */
    public function setStickyAssign( $sticky_assign){
        $this->sticky_assign = $sticky_assign;
    }

    /**
     * @return string
     */
    public function getGateway(){
        return $this->gateway;
    }

    /**
     * @return string
     */
    public function getNetmask(){
        return $this->netmask;
    }

    /**
     * @return string
     */
    public function getIpRangeStart(){
        return $this->ip_range_start;
    }

    /**
     * @param string $ip_range_start
     */
    public function setIpRangeStart( $ip_range_start){
        $this->ip_range_start = $ip_range_start;
    }

    /**
     * @return string
     */
    public function getIpRangeEnd(){
        return $this->ip_range_end;
    }

    /**
     * @param string $ip_range_end
     */
    public function setIpRangeEnd( $ip_range_end){
        $this->ip_range_end = $ip_range_end;
    }

    /**
     * @return boolean
     */
    public function isAlwaysBroadcast(){
        return $this->always_broadcast;
    }

    /**
     * @param boolean $always_broadcast
     */
    public function setAlwaysBroadcast( $always_broadcast){
        $this->always_broadcast = $always_broadcast;
    }

    /**
     * @return array
     */
    public function getDNS(){
        return $this->dns;
    }

    /**
     * @param array $dns
     */
    public function setDNS( $dns){
        $this->dns = $dns;
    }

}

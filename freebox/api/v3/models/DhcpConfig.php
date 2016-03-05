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
     * @return array
     */
    public function getDNS(){
        return $this->dns;
    }

}

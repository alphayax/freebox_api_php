<?php
namespace alphayax\freebox\api\v3\models\VPN\Client;
use alphayax\freebox\utils\Model;

/**
 * Class IpInfo
 * @package alphayax\freebox\api\v3\models\VPN\Client
 */
class IpInfo extends Model {

    /** @var bool (Read-only) : is the configuration valid */
    protected $config_valid;

    /** @var array (Read-only) : assigned IP and netmask */
    protected $ip_mask;

    /** @var string (Read-only) : provided domain */
    protected $domain;

    /** @var string IPv4 (Read-only) : provided gateway */
    protected $gateway;

    /** @var array of ipv4 (Read-only) : list of dns servers */
    protected $dns;

    /**
     * @var string (Read-only) : ip_mask source
     * @see Provider
     */
    protected $provider;

    /** @var array (Read-only) : list of provided routes */
    protected $routes;

    /** @var array (Read-only) : DHCP status information */
    protected $dhcp;

    /**
     * @return boolean
     */
    public function isConfigValid() {
        return $this->config_valid;
    }

    /**
     * @return array
     */
    public function getIpMask() {
        return $this->ip_mask;
    }

    /**
     * @return string
     */
    public function getDomain() {
        return $this->domain;
    }

    /**
     * @return string
     */
    public function getGateway() {
        return $this->gateway;
    }

    /**
     * @return array
     */
    public function getDns() {
        return $this->dns;
    }

    /**
     * @return string
     */
    public function getProvider() {
        return $this->provider;
    }

    /**
     * @return array
     */
    public function getRoutes() {
        return $this->routes;
    }

    /**
     * @return array
     */
    public function getDhcp() {
        return $this->dhcp;
    }

}

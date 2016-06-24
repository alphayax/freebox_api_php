<?php
namespace alphayax\freebox\api\v3\models\VPN\Server;
use alphayax\freebox\utils\Model;

/**
 * Class Connection
 * @package alphayax\freebox\api\v3\models\VPN\Server
 */
class Connection extends Model {

    /** @var string (Read-only) : connection id */
    protected $id;

    /** @var string (Read-only) : related VPN server id */
    protected $vpn;

    /** @var string (Read-only) : user login */
    protected $user;

    /** @var bool (Read-only) : is the connection authenticated */
    protected $authenticated;

    /** @var int (Read-only) : timestamp of the authentication */
    protected $auth_time;

    /** @var string ipv4 (Read-only) : connection source IP address */
    protected $src_ip;

    /** @var int (Read-only) : connection source port */
    protected $src_port;

    /** @var int (Read-only) : attributed IP address from VPN adress pool */
    protected $local_ip;

    /** @var int (Read-only) : rx bytes */
    protected $rx_bytes;

    /** @var int (Read-only) : tx bytes */
    protected $tx_bytes;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getVpn() {
        return $this->vpn;
    }

    /**
     * @return string
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * @return boolean
     */
    public function isAuthenticated() {
        return $this->authenticated;
    }

    /**
     * @return int
     */
    public function getAuthTime() {
        return $this->auth_time;
    }

    /**
     * @return string
     */
    public function getSrcIp() {
        return $this->src_ip;
    }

    /**
     * @return int
     */
    public function getSrcPort() {
        return $this->src_port;
    }

    /**
     * @return int
     */
    public function getLocalIp() {
        return $this->local_ip;
    }

    /**
     * @return int
     */
    public function getRxBytes() {
        return $this->rx_bytes;
    }

    /**
     * @return int
     */
    public function getTxBytes() {
        return $this->tx_bytes;
    }
    
}

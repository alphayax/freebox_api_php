<?php
namespace alphayax\freebox\api\v3\models\LAN;
use alphayax\freebox\api\v3\Model;

/**
 * Class LanHostL3Connectivity
 * @package alphayax\freebox\api\v3\models\LAN
 */
class LanHostL3Connectivity extends Model {

    /** @var string (Read-only) : Layer 3 address */
    protected $addr;

    /** 
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\Lan\LanHostL3ConnectivityAF
     **/
    protected $af;

    /** @var bool (Read-only) : is the connection active */
    protected $active;

    /** @var bool (Read-only) : is the connection reachable */
    protected $reachable;

    /** @var int timestamp (Read-only) : last activity timestamp */
    protected $last_activity;

    /** @var int timestamp (Read-only) : last reachable timestamp */
    protected $last_time_reachable;

    /**
     * @return string
     */
    public function getAddr() {
        return $this->addr;
    }

    /**
     * @return string
     */
    public function getAf() {
        return $this->af;
    }

    /**
     * @return boolean
     */
    public function isActive() {
        return $this->active;
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
    public function getLastActivity() {
        return $this->last_activity;
    }

    /**
     * @return int
     */
    public function getLastTimeReachable() {
        return $this->last_time_reachable;
    }

}

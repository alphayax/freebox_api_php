<?php
namespace alphayax\freebox\api\v3\models\Download;
use alphayax\freebox\utils\Model;

/**
 * Class Peer
 * @package alphayax\freebox\api\v3\models\Download
 */
class Peer extends Model {

    /** @var string (Read-only) : peer IP */
    protected $host;

    /** @var int (Read-only) : peer port */
    protected $port;

    /**
     * @var string (Read-only) : peer state
     * @see alphayax\freebox\api\v3\symbols\Download\Peer\State
     */
    protected $state;

    /**
     * @var string (Read-only) : peer origin
     * @see alphayax\freebox\api\v3\symbols\Download\Peer\Origin
     */
    protected $origin;

    /** @var
     * string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\Download\Peer\Protocol
     */
    protected $protocol;

    /** @var string (Read-only) : Bittorrent client name */
    protected $client;

    /** @var string (Read-only) : Peer country code (iso 3166) If country code is not available it will have the value ”??” */
    protected $country_code;

    /** @var int (Read-only) : transmitted bytes */
    protected $tx;

    /** @var int (Read-only) : received bytes */
    protected $rx;

    /** @var int (Read-only) : current transmit rate in byte/s */
    protected $tx_rate;

    /** @var int (Read-only) : current receive rate in byte/s */
    protected $rx_rate;

    /** @var int (Read-only) : peer current download progress */
    protected $progress;

    /** @var int[] (Read-only) : current requested pieces */
    protected $requests;

    /**
     * @return string
     */
    public function getHost() {
        return $this->host;
    }

    /**
     * @return int
     */
    public function getPort() {
        return $this->port;
    }

    /**
     * @return string
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getOrigin() {
        return $this->origin;
    }

    /**
     * @return mixed
     */
    public function getProtocol() {
        return $this->protocol;
    }

    /**
     * @return string
     */
    public function getClient() {
        return $this->client;
    }

    /**
     * @return string
     */
    public function getCountryCode() {
        return $this->country_code;
    }

    /**
     * @return int
     */
    public function getTx() {
        return $this->tx;
    }

    /**
     * @return int
     */
    public function getRx() {
        return $this->rx;
    }

    /**
     * @return int
     */
    public function getTxRate() {
        return $this->tx_rate;
    }

    /**
     * @return int
     */
    public function getRxRate() {
        return $this->rx_rate;
    }

    /**
     * @return int
     */
    public function getProgress() {
        return $this->progress;
    }

    /**
     * @return \int[] (Read-only)
     */
    public function getRequests() {
        return $this->requests;
    }

}

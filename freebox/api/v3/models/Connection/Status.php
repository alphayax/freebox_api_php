<?php
namespace alphayax\freebox\api\v3\models\Connection;
use alphayax\freebox\api\v3\Model;

/**
 * Class ConnectionStatus
 * @package alphayax\freebox\api\v3\models\Connection
 */
class Status extends Model {

    /**
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\Connection\ConnectionStatusState
     */
    protected $state;

    /**
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\Connection\ConnectionStatusType
     */
    protected $type;

    /**
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\Connection\ConnectionStatusMedia
     */
    protected $media;

    /** @var string (Read-only) : Freebox IPv4 address NOTE: this field is only available when connection state is up */
    protected $ipv4;

    /** @var string (Read-only) : Freebox IPv6 address NOTE: this field is only available when connection state is up */
    protected $ipv6;

    /** @var int (Read-only) : current upload rate in byte/s */
    protected $rate_up;

    /** @var int (Read-only) : current download rate in byte/s */
    protected $rate_down;

    /** @var int (Read-only) : available upload bandwidth in bit/s */
    protected $bandwidth_up;

    /** @var int (Read-only) : available download bandwidth in bit/s */
    protected $bandwidth_down;

    /** @var int (Read-only) : total uploaded bytes since last connection */
    protected $bytes_up;

    /** @var int (Read-only) : total downloaded bytes since last connection */
    protected $bytes_down;

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\Connection\ConnectionStatusState
     */
    public function getState() {
        return $this->state;
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
    public function getMedia() {
        return $this->media;
    }

    /**
     * @return string
     */
    public function getIpv4() {
        return $this->ipv4;
    }

    /**
     * @return string
     */
    public function getIpv6() {
        return $this->ipv6;
    }

    /**
     * @return int
     */
    public function getRateUp() {
        return $this->rate_up;
    }

    /**
     * @return int
     */
    public function getRateDown() {
        return $this->rate_down;
    }

    /**
     * @return int
     */
    public function getBandwidthUp() {
        return $this->bandwidth_up;
    }

    /**
     * @return int
     */
    public function getBandwidthDown() {
        return $this->bandwidth_down;
    }

    /**
     * @return int
     */
    public function getBytesUp() {
        return $this->bytes_up;
    }

    /**
     * @return int
     */
    public function getBytesDown() {
        return $this->bytes_down;
    }

}

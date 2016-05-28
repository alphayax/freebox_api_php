<?php
namespace alphayax\freebox\api\v3\models\SwitchPort;
use alphayax\freebox\api\v3\Model;

/**
 * Class Stats
 * @package alphayax\freebox\api\v3\models\SwitchPort
 */
class Stats extends Model {

    /** @var int (Read-only) */
    protected $rx_bad_bytes;

    /** @var int (Read-only) */
    protected $rx_broadcast_packets;

    /** @var int (Read-only) */
    protected $rx_bytes_rate;

    /** @var int (Read-only) */
    protected $rx_err_packets;

    /** @var int (Read-only) */
    protected $rx_fcs_packets;

    /** @var int (Read-only) */
    protected $rx_fragments_packets;

    /** @var int (Read-only) */
    protected $rx_good_bytes;

    /** @var int (Read-only) */
    protected $rx_good_packets;

    /** @var int (Read-only) */
    protected $rx_jabber_packets;

    /** @var int (Read-only) */
    protected $rx_multicast_packets;

    /** @var int (Read-only) */
    protected $rx_oversize_packets;

    /** @var int (Read-only) */
    protected $rx_packets_rate;

    /** @var int (Read-only) */
    protected $rx_pause;

    /** @var int (Read-only) */
    protected $rx_undersize_packets;

    /** @var int (Read-only) */
    protected $rx_unicast_packets;

    /** @var int (Read-only) */
    protected $tx_broadcast_packets;

    /** @var int (Read-only) */
    protected $tx_bytes;

    /** @var int (Read-only) */
    protected $tx_bytes_rate;

    /** @var int (Read-only) */
    protected $tx_collisions;

    /** @var int (Read-only) */
    protected $tx_deferred;

    /** @var int (Read-only) */
    protected $tx_excessive;

    /** @var int (Read-only) */
    protected $tx_fcs;

    /** @var int (Read-only) */
    protected $tx_late;

    /** @var int (Read-only) */
    protected $tx_multicast_packets;

    /** @var int (Read-only) */
    protected $tx_multiple;

    /** @var int (Read-only) */
    protected $tx_packets;

    /** @var int (Read-only) */
    protected $tx_packets_rate;

    /** @var int (Read-only) */
    protected $tx_pause;

    /** @var int (Read-only) */
    protected $tx_single;

    /** @var int (Read-only) */
    protected $tx_unicast_packets;

    /**
     * @return int
     */
    public function getRxBadBytes() {
        return $this->rx_bad_bytes;
    }

    /**
     * @return int
     */
    public function getRxBroadcastPackets() {
        return $this->rx_broadcast_packets;
    }

    /**
     * @return int
     */
    public function getRxBytesRate() {
        return $this->rx_bytes_rate;
    }

    /**
     * @return int
     */
    public function getRxErrPackets() {
        return $this->rx_err_packets;
    }

    /**
     * @return int
     */
    public function getRxFcsPackets() {
        return $this->rx_fcs_packets;
    }

    /**
     * @return int
     */
    public function getRxFragmentsPackets() {
        return $this->rx_fragments_packets;
    }

    /**
     * @return int
     */
    public function getRxGoodBytes() {
        return $this->rx_good_bytes;
    }

    /**
     * @return int
     */
    public function getRxGoodPackets() {
        return $this->rx_good_packets;
    }

    /**
     * @return int
     */
    public function getRxJabberPackets() {
        return $this->rx_jabber_packets;
    }

    /**
     * @return int
     */
    public function getRxMulticastPackets() {
        return $this->rx_multicast_packets;
    }

    /**
     * @return int
     */
    public function getRxOversizePackets() {
        return $this->rx_oversize_packets;
    }

    /**
     * @return int
     */
    public function getRxPacketsRate() {
        return $this->rx_packets_rate;
    }

    /**
     * @return int
     */
    public function getRxPause() {
        return $this->rx_pause;
    }

    /**
     * @return int
     */
    public function getRxUndersizePackets() {
        return $this->rx_undersize_packets;
    }

    /**
     * @return int
     */
    public function getRxUnicastPackets() {
        return $this->rx_unicast_packets;
    }

    /**
     * @return int
     */
    public function getTxBroadcastPackets() {
        return $this->tx_broadcast_packets;
    }

    /**
     * @return int
     */
    public function getTxBytes() {
        return $this->tx_bytes;
    }

    /**
     * @return int
     */
    public function getTxBytesRate() {
        return $this->tx_bytes_rate;
    }

    /**
     * @return int
     */
    public function getTxCollisions() {
        return $this->tx_collisions;
    }

    /**
     * @return int
     */
    public function getTxDeferred() {
        return $this->tx_deferred;
    }

    /**
     * @return int
     */
    public function getTxExcessive() {
        return $this->tx_excessive;
    }

    /**
     * @return int
     */
    public function getTxFcs() {
        return $this->tx_fcs;
    }

    /**
     * @return int
     */
    public function getTxLate() {
        return $this->tx_late;
    }

    /**
     * @return int
     */
    public function getTxMulticastPackets() {
        return $this->tx_multicast_packets;
    }

    /**
     * @return int
     */
    public function getTxMultiple() {
        return $this->tx_multiple;
    }

    /**
     * @return int
     */
    public function getTxPackets() {
        return $this->tx_packets;
    }

    /**
     * @return int
     */
    public function getTxPacketsRate() {
        return $this->tx_packets_rate;
    }

    /**
     * @return int
     */
    public function getTxPause() {
        return $this->tx_pause;
    }

    /**
     * @return int
     */
    public function getTxSingle() {
        return $this->tx_single;
    }

    /**
     * @return int
     */
    public function getTxUnicastPackets() {
        return $this->tx_unicast_packets;
    }

}

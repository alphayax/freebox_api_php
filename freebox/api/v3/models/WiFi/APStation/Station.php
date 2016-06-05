<?php
namespace alphayax\freebox\api\v3\models\WiFi\APStation;
use alphayax\freebox\api\v3\Model;
use alphayax\freebox\api\v3\models\LAN\LanHost;

/**
 * Class Station
 * @package alphayax\freebox\api\v3\models\WiFi\APStation
 */
class Station extends Model {

    /** @var string (Read-only) : station id */
    protected $id;

    /** @var string (Read-only) : client MAC address */
    protected $mac;

    /** @var string (Read-only) : bssid on which the client is associated */
    protected $bssid;

    /** @var string (Read-only) : client host name */
    protected $hostname;

    /** @var \alphayax\freebox\api\v3\models\LAN\LanHost (Read-only) : client host information */
    protected $host;

    /**
     * @var string (Read-only)
     * @see State
     **/
    protected $state;

    /** @var int (Read-only) : inactive duration (in seconds) */
    protected $inactive;

    /** @var int (Read-only) : connection duration (in seconds) */
    protected $conn_duration;

    /** @var int (Read-only) : received bytes (from station to Freebox) */
    protected $rx_bytes;

    /** @var int (Read-only) : transmitted bytes (from Freebox to station) */
    protected $tx_bytes;

    /** @var int (Read-only) : reception data rate (in bytes/s) */
    protected $tx_rate;

    /** @var int (Read-only) : transmission data rate (in bytes/s) */
    protected $rx_rate;

    /** @var int (Read-only) : signal attenuation (in dB) */
    protected $signal;

    /** @var Flags (Read-only) : station flags */
    protected $flags;

    /** @var Stats (Read-only) : last rx stats */
    protected $last_rx;

    /** @var Stats (Read-only) : last tx stats */
    protected $last_tx;

    /**
     * Station constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initProperty( 'host'   , LanHost::class);
        $this->initProperty( 'flags'  , Flags::class);
        $this->initProperty( 'last_rx', Stats::class);
        $this->initProperty( 'last_tx', Stats::class);
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getMac() {
        return $this->mac;
    }

    /**
     * @return string
     */
    public function getBssid() {
        return $this->bssid;
    }

    /**
     * @return string
     */
    public function getHostname() {
        return $this->hostname;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\LAN\LanHost
     */
    public function getHost() {
        return $this->host;
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
    public function getInactive() {
        return $this->inactive;
    }

    /**
     * @return int
     */
    public function getConnDuration() {
        return $this->conn_duration;
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
    public function getSignal() {
        return $this->signal;
    }

    /**
     * @return Flags
     */
    public function getFlags() {
        return $this->flags;
    }

    /**
     * @return Stats
     */
    public function getLastRx() {
        return $this->last_rx;
    }

    /**
     * @return Stats
     */
    public function getLastTx() {
        return $this->last_tx;
    }

}

<?php
namespace alphayax\freebox\api\v3\models\Download\Config;
use alphayax\freebox\utils\Model;

/**
 * Class DlRate
 * @package alphayax\freebox\api\v3\models\Download
 */
class DlRate extends Model {

    /** @var int : maximum transmit rate (in byte/s) 0 means no limit */
    protected $tx_rate;

    /** @var int : maximum receive rate (in byte/s) 0 means no limit */
    protected $rx_rate;

    /**
     * @return int
     */
    public function getTxRate() {
        return $this->tx_rate;
    }

    /**
     * @param int $tx_rate
     */
    public function setTxRate($tx_rate) {
        $this->tx_rate = $tx_rate;
    }

    /**
     * @return int
     */
    public function getRxRate() {
        return $this->rx_rate;
    }

    /**
     * @param int $rx_rate
     */
    public function setRxRate($rx_rate) {
        $this->rx_rate = $rx_rate;
    }

}

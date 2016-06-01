<?php
namespace alphayax\freebox\api\v3\models\VPN\Client;
use alphayax\freebox\api\v3\Model;

/**
 * Class Stats
 * @package alphayax\freebox\api\v3\models\VPN\Client
 */
class Stats extends Model {

    /** @var int (Read-only) : current upload rate (in byte/s) */
    protected $rate_up;

    /** @var int (Read-only) : current download rate (in byte/s) */
    protected $rate_down;

    /** @var int (Read-only) : total bytes uploaded */
    protected $bytes_up;

    /** @var int (Read-only) : total bytes downloaded */
    protected $bytes_down;

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

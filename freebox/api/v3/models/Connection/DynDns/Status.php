<?php
namespace alphayax\freebox\api\v3\models\Connection\DynDns;
use alphayax\freebox\utils\Model;

/**
 * Class Status
 * @package alphayax\freebox\api\v3\models\Connection\DynDns
 */
class Status extends Model {

    /**
     * @var string
     * @see alphayax\freebox\api\v3\symbols\Connection\DynDnsStatus\Status
     */
    protected $status;

    /** @var int : next refresh timestamp */
    protected $next_refresh;

    /** @var int : last refresh timestamp */
    protected $last_refresh;

    /** @var int : next retry timestamp */
    protected $next_retry;

    /** @var int : last error timestamp */
    protected $last_error;

    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Get the next refresh timestamp
     * @return int
     */
    public function getNextRefresh() {
        return $this->next_refresh;
    }

    /**
     * Get the last refresh timestamp
     * @return int
     */
    public function getLastRefresh() {
        return $this->last_refresh;
    }

    /**
     * Get the next retry timestamp
     * @return int
     */
    public function getNextRetry() {
        return $this->next_retry;
    }

    /**
     * Get the last error timestamp
     * @return int
     */
    public function getLastError() {
        return $this->last_error;
    }

}

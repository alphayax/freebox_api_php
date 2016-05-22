<?php
namespace alphayax\freebox\api\v3\models\Connection\Xdsl;
use alphayax\freebox\api\v3\Model;

/**
 * Class XdslStatus
 * @package alphayax\freebox\api\v3\models\Connection\Xdsl
 */
class XdslStatus extends Model {

    /**
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\Connection\XdslStatus\Status
     */
    protected $status;

    /**
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\Connection\XdslStatus\Protocol
     */
    protected $protocol;

    /**
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\Connection\XdslStatus\Modulation
     */
    protected $modulation;

    /** @var int (Read-only) : uptime in seconds */
    protected $uptime;

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\Connection\XdslStatus\Status
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\Connection\XdslStatus\Protocol
     */
    public function getProtocol() {
        return $this->protocol;
    }

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\Connection\XdslStatus\Modulation
     */
    public function getModulation() {
        return $this->modulation;
    }

    /**
     * Return the uptime in seconds
     * @return int
     */
    public function getUptime() {
        return $this->uptime;
    }

}

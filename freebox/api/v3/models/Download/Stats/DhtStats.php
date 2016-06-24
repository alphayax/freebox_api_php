<?php
namespace alphayax\freebox\api\v3\models\Download\Stats;
use alphayax\freebox\utils\Model;

/**
 * Class DhtStats
 * @package alphayax\freebox\api\v3\models\Download\Stats
 */
class DhtStats extends Model {

    /** @var bool (Read-only) : is the dht enabled */
    protected $enabled;

    /** @var int (Read-only) : number of active nodes */
    protected $node_count;

    /**
     * @return boolean
     */
    public function isEnabled() {
        return $this->enabled;
    }

    /**
     * @return int
     */
    public function getNodeCount() {
        return $this->node_count;
    }

}

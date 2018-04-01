<?php

namespace alphayax\freebox\api\v4\models\Download\Stats;

use alphayax\freebox\utils\Model;

/**
 * Class DhtStats
 * @package alphayax\freebox\api\v4\models\Download\Stats
 */
class DhtStats extends Model
{
    /** @var bool (Read-only) : is the dht enabled */
    protected $enabled;

    /** @var int (Read-only) : number of active nodes */
    protected $node_count;

    /** @var bool (Read-only) : is the dht enabled on IPv6 */
    protected $enabled_ipv6;

    /** @var int (Read-only) : number of active nodes on IPv6 */
    protected $node_count_ipv6;

    /**
     * @return boolean
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @return int
     */
    public function getNodeCount()
    {
        return $this->node_count;
    }

    /**
     * @return bool
     */
    public function isEnabledIpv6()
    {
        return $this->enabled_ipv6;
    }

    /**
     * @return int
     */
    public function getNodeCountIpv6()
    {
        return $this->node_count_ipv6;
    }

}

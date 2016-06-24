<?php
namespace alphayax\freebox\api\v3\models\WiFi\AccessPoint;
use alphayax\freebox\utils\Model;

/**
 * Class APStatus
 * @package alphayax\freebox\api\v3\models\WiFi\AccessPoint
 */
class APStatus extends Model {

    /**
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\WiFi\APStatus\Status
     */
    protected $state;

    /** @var int (Read-only) : effective channel width (in MHz) */
    protected $channel_width;

    /** @var int (Read-only) : effective primary channel */
    protected $primary_channel;

    /** @var int (Read-only) : effective secondary channel */
    protected $secondary_channel;

    /** @var int (Read-only) : time left in dfs state */
    protected $dfs_cac_remaining_time;

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\WiFi\APStatus\Status
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @return int
     */
    public function getChannelWidth() {
        return $this->channel_width;
    }

    /**
     * @return int
     */
    public function getPrimaryChannel() {
        return $this->primary_channel;
    }

    /**
     * @return int
     */
    public function getSecondaryChannel() {
        return $this->secondary_channel;
    }

    /**
     * @return int
     */
    public function getDfsCacRemainingTime() {
        return $this->dfs_cac_remaining_time;
    }

}

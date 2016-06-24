<?php
namespace alphayax\freebox\api\v3\models\WiFi\AccessPoint;
use alphayax\freebox\utils\Model;

/**
 * Class AllowedComb
 * @package alphayax\freebox\api\v3\models\WiFi\AccessPoint
 */
class AllowedComb extends Model {

    /**
     * @var string (Read-only) : the band for which the combination can be used
     * @see alphayax\freebox\api\v3\symbols\WiFi\APConfig\Band
     */
    protected $band;

    /** @var string (Read-only) : the channel_width for which the combination can be used */
    protected $channel_width;

    /** @var bool (Read-only) : does this combination requires DFS. You should only allow this combination if ap has allowed dfs. */
    protected $need_dfs;

    /** @var int (Read-only) : time required in dfs state before behing able to start the AP. */
    protected $dfs_cac_time;

    /** @var int (Read-only) : primary channel */
    protected $primary;

    /** @var int (Read-only) : secondary channel (zero means that secondary channel will not be used) */
    protected $secondary;

    /**
     * @return string
     */
    public function getBand() {
        return $this->band;
    }

    /**
     * @return string
     */
    public function getChannelWidth() {
        return $this->channel_width;
    }

    /**
     * @return boolean
     */
    public function isNeedDfs() {
        return $this->need_dfs;
    }

    /**
     * @return int
     */
    public function getDfsCacTime() {
        return $this->dfs_cac_time;
    }

    /**
     * @return int
     */
    public function getPrimary() {
        return $this->primary;
    }

    /**
     * @return int
     */
    public function getSecondary() {
        return $this->secondary;
    }

}

<?php
namespace alphayax\freebox\api\v3\models\ParentalControl;
use alphayax\freebox\api\v3\Model;
use alphayax\freebox\api\v3\symbols;

/**
 * Class Filter
 * @package alphayax\freebox\api\v3\models\ParentalControl
 */
class Filter extends Model {

    /** @var int (Read-only) : filter id */
    protected $id;

    /** @var string[] : the list of mac addresses the rule should be applied to */
    protected $macs;

    /** @var string[] (Read-only) : the list of hostnames associated with macs */
    protected $hosts;

    /** @var string (Read-only) : only filled for old rules, you cannot set a rule with an IP */
    protected $ip;

    /** @var string : a description for this rule */
    protected $desc;

    /** @var bool : is set to true, the rule will not use the planning and will always stay in the forced_mode */
    protected $forced;

    /**
     * @var string : The filter policy to use when forced is set to true
     * @see symbols\ParentalControl\FilterState
     */
    protected $forced_mode;

    /** @var int : if != 0 the rule will not use the planning for the next tmp_mode_expire seconds */
    protected $tmp_mode_expire;

    /**
     * @var string : the filter policy to use when tmp_mode_expire is != 0
     * @see symbols\ParentalControl\FilterState
     */
    protected $tmp_mode;

    /**
     * @var string (Read-only)
     * @see symbols\ParentalControl\SchedulingMode
     */
    protected $scheduling_mode;

    /**
     * @var string (Read-only)
     * @see symbols\ParentalControl\FilterState
     */
    protected $filter_state;

    /** @var int (Read-only) : current index used in planning to compute filter_state (only relevant when scheduling_mode is planning) */
    protected $current_mapping_idx;

    /** @var int (Read-only) : seconds until next filter_state change 0 means filter_state won’t change */
    protected $next_change;

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return \string[]
     */
    public function getMacs() {
        return $this->macs;
    }

    /**
     * @param \string[] $macs
     */
    public function setMacs($macs) {
        $this->macs = $macs;
    }

    /**
     * @return \string[] (Read-only)
     */
    public function getHosts() {
        return $this->hosts;
    }

    /**
     * @return string
     */
    public function getIp() {
        return $this->ip;
    }

    /**
     * @return string
     */
    public function getDesc() {
        return $this->desc;
    }

    /**
     * @param string $desc
     */
    public function setDesc($desc) {
        $this->desc = $desc;
    }

    /**
     * @return boolean
     */
    public function isForced() {
        return $this->forced;
    }

    /**
     * @param boolean $forced
     */
    public function setForced($forced) {
        $this->forced = $forced;
    }

    /**
     * @return string
     */
    public function getForcedMode() {
        return $this->forced_mode;
    }

    /**
     * @param string $forced_mode
     */
    public function setForcedMode($forced_mode) {
        $this->forced_mode = $forced_mode;
    }

    /**
     * @return int
     */
    public function getTmpModeExpire() {
        return $this->tmp_mode_expire;
    }

    /**
     * @param int $tmp_mode_expire
     */
    public function setTmpModeExpire($tmp_mode_expire) {
        $this->tmp_mode_expire = $tmp_mode_expire;
    }

    /**
     * @return string
     */
    public function getTmpMode() {
        return $this->tmp_mode;
    }

    /**
     * @param string $tmp_mode
     */
    public function setTmpMode($tmp_mode) {
        $this->tmp_mode = $tmp_mode;
    }

    /**
     * @return string
     */
    public function getSchedulingMode() {
        return $this->scheduling_mode;
    }

    /**
     * @return string
     */
    public function getFilterState() {
        return $this->filter_state;
    }

    /**
     * @return int
     */
    public function getCurrentMappingIdx() {
        return $this->current_mapping_idx;
    }

    /**
     * @return int
     */
    public function getNextChange() {
        return $this->next_change;
    }

}

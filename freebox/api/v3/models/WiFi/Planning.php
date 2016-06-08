<?php
namespace alphayax\freebox\api\v3\models\WiFi;
use alphayax\freebox\api\v3\Model;

/**
 * Class Planning
 * @package alphayax\freebox\api\v3\models\WiFi
 */
class Planning extends Model {

    /** @var bool : is the planning enabled */
    protected $use_planning;

    /** @var int (Read-only) : planning resolution (number of slots per day) */
    protected $resolution;

    /**
     * @var string[] : mapping for planning
     * “on” or “off” mapping[0] is monday at 0:0 mapping[7 * resolution - 1] is sunday last slot
     * (each slot has a duration of 60 * 24 / resolution minutes)
     */
    protected $mapping = [];

    /**
     * @return boolean
     */
    public function isUsePlanning() {
        return $this->use_planning;
    }

    /**
     * @param boolean $use_planning
     */
    public function setUsePlanning( $use_planning) {
        $this->use_planning = $use_planning;
    }

    /**
     * @return int
     */
    public function getResolution() {
        return $this->resolution;
    }

    /**
     * @return \string[]
     */
    public function getMapping() {
        return $this->mapping;
    }

    /**
     * @param \string[] $mapping
     */
    public function setMapping( $mapping) {
        $this->mapping = $mapping;
    }

}

<?php
namespace alphayax\freebox\api\v3\models\Download\Config;
use alphayax\freebox\api\v3\Model;

/**
 * Class DlThrottlingConfig
 * @package alphayax\freebox\api\v3\models\Download\Config
 */
class DlThrottlingConfig extends Model {
    
    /** @var DlRate : download rate for normal time slot (in B/s) */
    protected $normal;

    /** @var DlRate : download rate for normal slow slot (in B/s) */
    protected $slow;

    /** @var string
     * The schedule array represent the list of week hours timeslot, starting on monday a midnight.
     * Therefore the complete week is represented in a array of 168 elements (24 * 7)
     * @see alphayax\freebox\api\v3\symbols\Download\Config\DlThrottlingConfig\Schedule
     */
    protected $schedule;

    /**
     * @var string
     * @see alphayax\freebox\api\v3\symbols\Download\Config\DlThrottlingConfig\Mode
     */
    protected $mode;

    /**
     * @return DlRate
     */
    public function getNormal() {
        return $this->normal;
    }

    /**
     * @param DlRate $normal
     */
    public function setNormal( $normal) {
        $this->normal = $normal;
    }

    /**
     * @return DlRate
     */
    public function getSlow() {
        return $this->slow;
    }

    /**
     * @param DlRate $slow
     */
    public function setSlow( $slow) {
        $this->slow = $slow;
    }

    /**
     * @return string
     */
    public function getSchedule() {
        return $this->schedule;
    }

    /**
     * @param string $schedule
     */
    public function setSchedule( $schedule) {
        $this->schedule = $schedule;
    }

    /**
     * @return string
     */
    public function getMode() {
        return $this->mode;
    }

    /**
     * @param string $mode
     */
    public function setMode( $mode) {
        $this->mode = $mode;
    }

}

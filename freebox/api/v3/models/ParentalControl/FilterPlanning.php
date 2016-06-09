<?php
namespace alphayax\freebox\api\v3\models\ParentalControl;
use alphayax\freebox\api\v3\Model;

/**
 * Class FilterPlanning
 * @package alphayax\freebox\api\v3\models\ParentalControl
 */
class FilterPlanning extends Model {

    /**
     * @var int (Read-only) : planning resolution
     * number of planning slots per day, e.g. 48 means that each slot represent 30 minutes
     */
    protected $resolution;

    /**
     * @var string[] : list of custom day range
     * Each custom day range represents a group of days for which you want to use a different planning than other week days.
     * For instance a custom day range can contain the list of you children holidays each cdayranges can be a coma separated
     * list of cdayranges, for instance ”:fr_bank_holidays,:fr_school_holidays_b”
     */
    protected $cdayranges = [];

    /**
     * @var string[] (Read-only) : array of states for each corresponding planning slots.
     * the array size is : (number of cdayranges + 7) * resolution
     */
    protected $mapping = [];

    /**
     * @return int
     */
    public function getResolution() {
        return $this->resolution;
    }

    /**
     * @return \string[]
     */
    public function getCdayranges() {
        return $this->cdayranges;
    }

    /**
     * @param \string[] $cDayRanges
     */
    public function setCdayranges( $cDayRanges) {
        $this->cdayranges = $cDayRanges;
    }

    /**
     * @return \string[] (Read-only)
     */
    public function getMapping() {
        return $this->mapping;
    }

}

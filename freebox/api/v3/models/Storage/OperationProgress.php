<?php
namespace alphayax\freebox\api\v3\models\Storage;
use alphayax\freebox\api\v3\Model;

/**
 * Class OperationProgress
 * @package alphayax\freebox\api\v3\models\Storage
 */
class OperationProgress extends Model {

    /** @var int (Read-only) : number of steps done */
    protected $done_steps;

    /** @var int (Read-only) : total number of steps */
    protected $max_steps;

    /** @var int (Read-only) : current step progress */
    protected $percent;

    /**
     * @return int
     */
    public function getDoneSteps() {
        return $this->done_steps;
    }

    /**
     * @return int
     */
    public function getMaxSteps() {
        return $this->max_steps;
    }

    /**
     * @return int
     */
    public function getPercent() {
        return $this->percent;
    }

}

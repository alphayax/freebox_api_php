<?php
namespace alphayax\freebox\api\v3\models\Download\Stats;
use alphayax\freebox\api\v3\Model;

/**
 * Class NzbConfigStatus
 * @package alphayax\freebox\api\v3\models\Download\Stats
 */
class NzbConfigStatus extends Model {

    /**
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\Download\Stats\NzbConfigStatus\Status
     */
    protected $status;

    /**
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\Download\Stats\NzbConfigStatus\Error
     */
    protected $error;

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\Download\Stats\NzbConfigStatus\Status
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\Download\Stats\NzbConfigStatus\Error
     */
    public function getError() {
        return $this->error;
    }

}

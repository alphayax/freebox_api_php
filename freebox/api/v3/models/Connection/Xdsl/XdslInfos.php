<?php
namespace alphayax\freebox\api\v3\models\Connection\Xdsl;
use alphayax\freebox\utils\Model;

/**
 * Class XdslInfos
 * @package alphayax\freebox\api\v3\models\Connection\Xdsl
 */
class XdslInfos extends Model {

    /** @var XdslStatus */
    protected $status;

    /** @var XdslStats */
    protected $down;

    /** @var XdslStats */
    protected $up;

    /**
     * FreeplugNetwork constructor.
     * @param array $properties_x
     */
    public function __construct(array $properties_x) {
        parent::__construct( $properties_x);
        $this->initProperty( 'status' , XdslStatus::class);
        $this->initProperty( 'down'   , XdslStats::class);
        $this->initProperty( 'up'     , XdslStats::class);
    }

    /**
     * @return XdslStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @return XdslStats
     */
    public function getDown() {
        return $this->down;
    }

    /**
     * @return XdslStats
     */
    public function getUp() {
        return $this->up;
    }

}

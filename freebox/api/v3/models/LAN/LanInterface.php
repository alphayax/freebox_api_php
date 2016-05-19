<?php
namespace alphayax\freebox\api\v3\models\LAN;
use alphayax\freebox\api\v3\Model;

/**
 * Class LanConfig
 * @package alphayax\freebox\api\v3\models
 */
class LanInterface extends Model {

    /** @var string : Lan Interface name */
    protected $name;

    /** @var int : Number of hosts in interface */
    protected $host_count;

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getHostCount() {
        return $this->host_count;
    }

}

<?php
namespace alphayax\freebox\api\v3\models\LAN;
use alphayax\freebox\api\v3\Model;

/**
 * Class LanHostName
 * @package alphayax\freebox\api\v3\models\LAN
 */
class LanHostName extends Model {

    /** @var string (Read-only) : Host name */
    protected $name;

    /** @var string (Read-only) : source of the name */
    protected $source;

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSource() {
        return $this->source;
    }

}

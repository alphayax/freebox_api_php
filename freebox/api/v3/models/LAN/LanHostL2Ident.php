<?php
namespace alphayax\freebox\api\v3\models\LAN;
use alphayax\freebox\api\v3\Model;

/**
 * Class LanHostL2Ident
 * @package alphayax\freebox\api\v3\models\LAN
 */
class LanHostL2Ident extends Model {

    /** @var string (Read-only) : Layer 2 id */
    protected $id;

    /**
     * @var string (Read-only) : Type of layer 2 address
     * @see alphayax\freebox\api\v3\symbols\Lan\LanHostL2IdentType
     **/
    protected $type;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

}

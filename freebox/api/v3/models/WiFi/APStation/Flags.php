<?php
namespace alphayax\freebox\api\v3\models\WiFi\APStation;
use alphayax\freebox\api\v3\Model;

/**
 * Class Flags
 * @package alphayax\freebox\api\v3\models\WiFi\APStation
 */
class Flags extends Model {

    /** @var bool (Read-only) : does station uses legacy wifi (802.11a, 802.11b) */
    protected $legacy;

    /** @var bool (Read-only) : does station support ht (802.11n) */
    protected $ht;

    /** @var bool (Read-only) : does station support vht (802.11ac) */
    protected $vht;

    /** @var bool (Read-only) : is the station authenticated */
    protected $authorized;

    /**
     * @return boolean
     */
    public function isLegacy() {
        return $this->legacy;
    }

    /**
     * @return boolean
     */
    public function isHt() {
        return $this->ht;
    }

    /**
     * @return boolean
     */
    public function isVht() {
        return $this->vht;
    }

    /**
     * @return boolean
     */
    public function isAuthorized() {
        return $this->authorized;
    }

}

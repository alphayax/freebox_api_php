<?php
namespace alphayax\freebox\api\v3\models\WiFi\AccessPoint;
use alphayax\freebox\utils\Model;

/**
 * Class ApHtConfig
 * @package alphayax\freebox\api\v3\models\WiFi\AccessPoint
 */
class APHtConfig extends Model {

    /** @var bool : enable 802.11ac */
    protected $ac_enabled;

    /** @var bool : enable 802.11n */
    protected $ht_enabled;

    /**
     * @return boolean
     */
    public function isAcEnabled() {
        return $this->ac_enabled;
    }

    /**
     * @param boolean $ac_enabled
     */
    public function setAcEnabled($ac_enabled) {
        $this->ac_enabled = $ac_enabled;
    }

    /**
     * @return boolean
     */
    public function isHtEnabled() {
        return $this->ht_enabled;
    }

    /**
     * @param boolean $ht_enabled
     */
    public function setHtEnabled($ht_enabled) {
        $this->ht_enabled = $ht_enabled;
    }

}

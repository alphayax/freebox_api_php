<?php
namespace alphayax\freebox\api\v3\models\WiFi\Radar;
use alphayax\freebox\utils\Model;

/**
 * Class NeighborCap
 * @package alphayax\freebox\api\v3\models\WiFi\Radar
 */
class NeighborCap extends Model {

    /** @var bool (Read-only) : neighbor uses legacy wifi (802.11a, 802.11b) */
    protected $legacy;

    /** @var bool (Read-only) : neighbor supports ht (802.11n) */
    protected $ht;

    /** @var bool (Read-only) : neighbor supports vht (802.11ac) */
    protected $vht;

    /**
     * neighbor uses legacy wifi (802.11a, 802.11b)
     * @return boolean
     */
    public function isLegacy() {
        return $this->legacy;
    }

    /**
     * neighbor supports ht (802.11n)
     * @return boolean
     */
    public function isHt() {
        return $this->ht;
    }

    /**
     * neighbor supports vht (802.11ac)
     * @return boolean
     */
    public function isVht() {
        return $this->vht;
    }

}

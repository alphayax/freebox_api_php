<?php
namespace alphayax\freebox\api\v3\models\WiFi\Bss;
use alphayax\freebox\api\v3\Model;

/**
 * Class Status
 * @package alphayax\freebox\api\v3\models\WiFi\Bss
 */
class Status extends Model {

    /**
     * @var string (Read-only)
     * @see State
     */
    protected $state;

    /**
     * @var int (Read-only) : number of stations for this bss
     */
    protected $sta_count;

    /**
     * @var int (Read-only) : number of authenticated stations for this bss
     */
    protected $authorized_sta_count;

    /**
     * @var bool (Read-only)
     * if bss is main bs, its configuration will be reused for other bss with attribute use_default_config set as true.
     * This can be used to apply the same configuration to 2 bss on 2 AP operating on different wifi bands.
     */
    protected $is_main_bss;

    /**
     * @return string
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @return int
     */
    public function getStaCount() {
        return $this->sta_count;
    }

    /**
     * @return int
     */
    public function getAuthorizedStaCount() {
        return $this->authorized_sta_count;
    }

    /**
     * @return boolean
     */
    public function isMainBss() {
        return $this->is_main_bss;
    }

}

<?php
namespace alphayax\freebox\api\v3\models\WiFi;
use alphayax\freebox\utils\Model;

/**
 * Class GlobalConfig
 * @package alphayax\freebox\api\v3\models\WiFi
 */
class GlobalConfig extends Model {

    /** @var bool : is wifi enabled */
    protected $enabled;

    /**
     * @var string
     * @see alphayax\freebox\api\v3\symbols\WiFi\GlobalConfig\MacFilterState
     */
    protected $mac_filter_state;

    /**
     * @return boolean
     */
    public function isEnabled() {
        return $this->enabled;
    }

    /**
     * @param boolean $enabled
     */
    public function setEnabled( $enabled) {
        $this->enabled = $enabled;
    }

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\WiFi\GlobalConfig\MacFilterState
     */
    public function getMacFilterState() {
        return $this->mac_filter_state;
    }

    /**
     * @param string $mac_filter_state
     * @see alphayax\freebox\api\v3\symbols\WiFi\GlobalConfig\MacFilterState
     */
    public function setMacFilterState( $mac_filter_state) {
        $this->mac_filter_state = $mac_filter_state;
    }

}

<?php
namespace alphayax\freebox\api\v3\models\UPnP;
use alphayax\freebox\utils\Model;

/**
 * Class UpnpAvConfig
 * @package alphayax\freebox\api\v3\models\UPnP
 */
class UpnpAvConfig extends Model {

    /** @var bool : is the UPnP AV service enabled */
    protected $enabled;

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

}

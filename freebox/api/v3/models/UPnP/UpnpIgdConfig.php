<?php
namespace alphayax\freebox\api\v3\models\UPnP;
use alphayax\freebox\api\v3\Model;

/**
 * Class UpnpIgdConfig
 * @package alphayax\freebox\api\v3\models\UPnP
 */
class UpnpIgdConfig extends Model {

    /** @var bool : is the UPnP IGD service enabled */
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

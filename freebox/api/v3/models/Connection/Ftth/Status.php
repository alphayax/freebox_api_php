<?php
namespace alphayax\freebox\api\v3\models\Connection\Ftth;
use alphayax\freebox\api\v3\Model;

/**
 * Class Status
 * @package alphayax\freebox\api\v3\models\Connection\Ftth
 */
class Status extends Model {

    /** @var boolean (Read-only) */
    protected $sfp_present;

    /** @var boolean (Read-only) */
    protected $sfp_alim_ok;

    /** @var boolean (Read-only) */
    protected $sfp_has_power_report;

    /** @var boolean (Read-only) */
    protected $sfp_has_signal;

    /** @var boolean (Read-only) */
    protected $link;

    /** @var string (Read-only) */
    protected $sfp_serial;

    /** @var string (Read-only) */
    protected $sfp_model;

    /** @var string (Read-only) */
    protected $sfp_vendor;

    /** @var int (Read-only) : scaled by 100 (in dBm) */
    protected $sfp_pwr_tx;

    /** @var int (Read-only) : scaled by 100 (in dBm) */
    protected $sfp_pwr_rx;

    /**
     * @return boolean
     */
    public function isSfpPresent() {
        return $this->sfp_present;
    }

    /**
     * @return boolean
     */
    public function isSfpAlimOk() {
        return $this->sfp_alim_ok;
    }

    /**
     * @return boolean
     */
    public function isSfpHasPowerReport() {
        return $this->sfp_has_power_report;
    }

    /**
     * @return boolean
     */
    public function isSfpHasSignal() {
        return $this->sfp_has_signal;
    }

    /**
     * @return boolean
     */
    public function isLink() {
        return $this->link;
    }

    /**
     * @return string
     */
    public function getSfpSerial() {
        return $this->sfp_serial;
    }

    /**
     * @return string
     */
    public function getSfpModel() {
        return $this->sfp_model;
    }

    /**
     * @return string
     */
    public function getSfpVendor() {
        return $this->sfp_vendor;
    }

    /**
     * @return int
     */
    public function getSfpPwrTx() {
        return $this->sfp_pwr_tx;
    }

    /**
     * @return int
     */
    public function getSfpPwrRx() {
        return $this->sfp_pwr_rx;
    }

}

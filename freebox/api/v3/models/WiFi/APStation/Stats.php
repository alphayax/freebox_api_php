<?php
namespace alphayax\freebox\api\v3\models\WiFi\APStation;

/**
 * Class Stats
 * @package alphayax\freebox\api\v3\models\WiFi\APStation
 */
class Stats {

    /** @var int (Read-only) : physical link rate (in 1/10th of MBit/s), -1 if unknown */
    protected $bitrate;

    /** @var int (Read-only) : current link mcs, -1 if not used */
    protected $mcs;

    /** @var int (Read-only) : current link vht mcs, -1 if not used */
    protected $vht_mcs;

    /** @var string (Read-only) : current channel width */
    protected $width;

    /** @var bool (Read-only) : is shortgi enabled */
    protected $shortgi;

    /**
     * @return int
     */
    public function getBitrate() {
        return $this->bitrate;
    }

    /**
     * @return int
     */
    public function getMcs() {
        return $this->mcs;
    }

    /**
     * @return int
     */
    public function getVhtMcs() {
        return $this->vht_mcs;
    }

    /**
     * @return string
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * @return boolean
     */
    public function isShortgi() {
        return $this->shortgi;
    }

}

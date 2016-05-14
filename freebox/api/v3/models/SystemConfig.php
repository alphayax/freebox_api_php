<?php
namespace alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Model;

/**
 * Class SystemConfig
 * @package alphayax\freebox\api\v3\models
 */
class SystemConfig extends Model {

    /** @var string (Read-only) freebox firmware version */
    protected $firmware_version;

    /** @var string (Read-only) freebox mac address */
    protected $mac;

    /** @var string (Read-only) freebox serial number */
    protected $serial;

    /** @var string (Read-only) readable freebox uptime */
    protected $uptime;

    /** @var int    (Read-only) freebox uptime (in seconds) */
    protected $uptime_val;

    /** @var string (Read-only) freebox hardware revision */
    protected $board_name;

    /** @var int    (Read-only) temp cpum (°C) */
    protected $temp_cpum;

    /** @var int    (Read-only) temp sw (°C) */
    protected $temp_sw;

    /** @var int    (Read-only) temp cpub (°C) */
    protected $temp_cpub;

    /** @var int    (Read-only) fan rpm */
    protected $fan_rpm;

    /** @var bool   (Read-only) is the box authenticated (“étape 6”) */
    protected $box_authenticated;

    /**
     * @return string
     */
    public function getFirmwareVersion(){
        return $this->firmware_version;
    }

    /**
     * @return string
     */
    public function getMac(){
        return $this->mac;
    }

    /**
     * @return string
     */
    public function getSerial(){
        return $this->serial;
    }

    /**
     * @return string
     */
    public function getUptime(){
        return $this->uptime;
    }

    /**
     * @return int
     */
    public function getUptimeVal(){
        return $this->uptime_val;
    }

    /**
     * @return string
     */
    public function getBoardName(){
        return $this->board_name;
    }

    /**
     * @return int
     */
    public function getTempCpum(){
        return $this->temp_cpum;
    }

    /**
     * @return int
     */
    public function getTempSw(){
        return $this->temp_sw;
    }

    /**
     * @return int
     */
    public function getTempCpub(){
        return $this->temp_cpub;
    }

    /**
     * @return int
     */
    public function getFanRpm(){
        return $this->fan_rpm;
    }

    /**
     * @return boolean
     */
    public function isBoxAuthenticated(){
        return $this->box_authenticated;
    }

}
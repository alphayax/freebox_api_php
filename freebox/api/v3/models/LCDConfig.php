<?php
namespace alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Model;

/**
 * Class LCDConfig
 * @package alphayax\freebox\api\v3\models
 */
class LCDConfig extends Model {

    /** @var int : the screen brightness (range from 0 to 100) */
    protected $brightness;

    /** @var bool : is the screen orientation forced */
    protected $orientation_forced;

    /** @var int : the screen orientation angle */
    protected $orientation;

    /**
     * @return int
     */
    public function getBrightness(){
        return $this->brightness;
    }

    /**
     * @param int $brightness
     */
    public function setBrightness( $brightness){
        $this->brightness = $brightness;
    }

    /**
     * @return boolean
     */
    public function isOrientationForced(){
        return $this->orientation_forced;
    }

    /**
     * @param boolean $orientation_forced
     */
    public function setOrientationForced( $orientation_forced){
        $this->orientation_forced = $orientation_forced;
    }

    /**
     * @return int
     */
    public function getOrientation(){
        return $this->orientation;
    }

    /**
     * @param int $orientation
     */
    public function setOrientation( $orientation){
        $this->orientation = $orientation;
    }


}
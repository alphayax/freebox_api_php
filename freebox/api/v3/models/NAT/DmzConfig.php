<?php
namespace alphayax\freebox\api\v3\models\NAT;
use alphayax\freebox\api\v3\Model;

/**
 * Class DmzConfig
 * @package alphayax\freebox\api\v3\models
 */
class DmzConfig extends Model {

    /** @var string Dmz host IP */
    protected $ip;

    /** @var bool Enable/Disable the DMZ */
    protected $enabled;

    /**
     * @return boolean
     */
    public function isEnabled(){
        return $this->enabled;
    }

    /**
     * @param boolean $enabled
     */
    public function setEnabled( $enabled){
        $this->enabled = $enabled;
    }

    /**
     * @return string
     */
    public function getIp(){
        return $this->ip;
    }

    /**
     * @param string $ip
     */
    public function setIp( $ip){
        $this->ip = $ip;
    }

}

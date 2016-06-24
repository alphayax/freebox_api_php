<?php
namespace alphayax\freebox\api\v3\models\AirMedia;
use alphayax\freebox\utils\Model;

/**
 * Class AirMediaConfig
 * @package alphayax\freebox\api\v3\models
 */
class AirMediaConfig extends Model {

    /** @var bool Enable/Disable the airmedia server */
    protected $enabled;

    /** @var string (Write-only) : If not empty, the client will have to enter a password to be able to use this airmedia server */
    protected $password;

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
     * @param string $password
     */
    public function setPassword( $password){
        $this->password = $password;
    }

}

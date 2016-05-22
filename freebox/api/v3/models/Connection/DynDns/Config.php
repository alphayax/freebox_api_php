<?php
namespace alphayax\freebox\api\v3\models\Connection\DynDns;
use alphayax\freebox\api\v3\Model;

/**
 * Class Config
 * @package alphayax\freebox\api\v3\models\Connection\DynDns
 */
class Config extends Model {

    /** @var bool */
    protected $enabled;

    /** @var string : dns name to use to register */
    protected $hostname;

    /** @var string (Write-only) : password to use to register */
    protected $password;

    /** @var string : username to use to register */
    protected $user;

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
     */
    public function getHostname() {
        return $this->hostname;
    }

    /**
     * @param string $hostname
     */
    public function setHostname( $hostname) {
        $this->hostname = $hostname;
    }

    /**
     * @param string $password
     */
    public function setPassword( $password) {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUser() {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser( $user) {
        $this->user = $user;
    }

}

<?php
namespace alphayax\freebox\api\v3\models\NetworkShare;
use alphayax\freebox\api\v3\Model;

/**
 * Class AfpConfig
 * @package alphayax\freebox\api\v3\models\NetworkShare
 */
class AfpConfig extends Model {

    /** @var bool : is afp service enabled */
    protected $enabled;

    /** @var bool : allow guest to access shared files */
    protected $guest_allow;

    /** @var string : Afp server type (to display proper icon) in MacOS @see ServerType */
    protected $server_type;

    /** @var string : Afp user name */
    protected $login_name;

    /** @var string (Write-only) : Afp user password */
    protected $login_password;

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
     * @return boolean
     */
    public function isGuestAllow() {
        return $this->guest_allow;
    }

    /**
     * @param boolean $guest_allow
     */
    public function setGuestAllow( $guest_allow) {
        $this->guest_allow = $guest_allow;
    }

    /**
     * @return string
     */
    public function getServerType() {
        return $this->server_type;
    }

    /**
     * @param string $server_type
     */
    public function setServerType( $server_type) {
        $this->server_type = $server_type;
    }

    /**
     * @return string
     */
    public function getLoginName() {
        return $this->login_name;
    }

    /**
     * @param string $login_name
     */
    public function setLoginName( $login_name) {
        $this->login_name = $login_name;
    }

    /**
     * @param string $login_password
     */
    public function setLoginPassword( $login_password) {
        $this->login_password = $login_password;
    }

}

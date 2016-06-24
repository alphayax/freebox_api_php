<?php
namespace alphayax\freebox\api\v3\models\VPN\Client\Config;
use alphayax\freebox\utils\Model;

/**
 * Class PPTPConfig
 * @package alphayax\freebox\api\v3\models\VPN\Client\Config
 */
class PPTPConfig extends Model {

    /** @var string : remote host IP or name */
    protected $remote_host;

    /** @var string : VPN username */
    protected $username;

    /** @var string (Write-only) : VPN password */
    protected $password;

    /**
     * @var string
     * @see alphayax\freebox\api\v3\symbols\VPN\PPTPConfig\Mppe
     */
    protected $mppe;

    /** @var bool[] : allowed authentication methods */
    protected $allowed_auth = [
        'eap'      => false,
        'pap'      => false,
        'chap'     => false,
        'mschapv'  => false,
        'mschapv2' => false,
    ];

    /**
     * @return string
     */
    public function getRemoteHost() {
        return $this->remote_host;
    }

    /**
     * @param string $remote_host
     */
    public function setRemoteHost($remote_host) {
        $this->remote_host = $remote_host;
    }

    /**
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * @param string $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getMppe() {
        return $this->mppe;
    }

    /**
     * @param string $mppe
     */
    public function setMppe($mppe) {
        $this->mppe = $mppe;
    }

    /**
     * @return \bool[]
     */
    public function getAllowedAuth() {
        return $this->allowed_auth;
    }

    /**
     * @param \bool[] $allowed_auth
     */
    public function setAllowedAuth($allowed_auth) {
        $this->allowed_auth = $allowed_auth;
    }

}

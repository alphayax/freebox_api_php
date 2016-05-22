<?php
namespace alphayax\freebox\api\v3\models\Connection;
use alphayax\freebox\api\v3\Model;

class Config extends Model {

    /** @var  bool : should the Freebox respond to external ping requests */
    protected $ping;

    /** @var  bool (Read-only) : is the admin password secure enough to enable remote access */
    protected $is_secure_pass;

    /** @var  bool : enable/disable HTTP remote access */
    protected $remote_access;

    /** @var  int : port number to use for remote HTTP access */
    protected $remote_access_port;

    /** @var  string (Read-only) : IPv4 to use for remote access (can be missing if connection is down) */
    protected $remote_access_ip;

    /** @var  bool (Read-only) : is remote access enabled for apps, or share link */
    protected $api_remote_access;

    /** @var  bool : enable/disable Wake-on-lan proxy */
    protected $wol;

    /** @var  bool : is ads blocking feature enabled */
    protected $adblock;

    /** @var  bool (Read-only) : if set to true adblock setting has never been set by the user */
    protected $adblock_not_set;

    /** @var  bool : if false, user has disabled new token request. New apps can’t request a new token. Apps that already have a token are still allowed */
    protected $allow_token_request;

    /**
     * @return boolean
     */
    public function isPing() {
        return $this->ping;
    }

    /**
     * @param boolean $ping
     */
    public function setPing($ping) {
        $this->ping = $ping;
    }

    /**
     * @return boolean
     */
    public function isIsSecurePass() {
        return $this->is_secure_pass;
    }

    /**
     * @return boolean
     */
    public function isRemoteAccess() {
        return $this->remote_access;
    }

    /**
     * @param boolean $remote_access
     */
    public function setRemoteAccess($remote_access) {
        $this->remote_access = $remote_access;
    }

    /**
     * @return int
     */
    public function getRemoteAccessPort() {
        return $this->remote_access_port;
    }

    /**
     * @param int $remote_access_port
     */
    public function setRemoteAccessPort($remote_access_port) {
        $this->remote_access_port = $remote_access_port;
    }

    /**
     * @return string
     */
    public function getRemoteAccessIp() {
        return $this->remote_access_ip;
    }

    /**
     * @return boolean
     */
    public function isApiRemoteAccess() {
        return $this->api_remote_access;
    }

    /**
     * @return boolean
     */
    public function isWol() {
        return $this->wol;
    }

    /**
     * @param boolean $wol
     */
    public function setWol($wol) {
        $this->wol = $wol;
    }

    /**
     * @return boolean
     */
    public function isAdblock() {
        return $this->adblock;
    }

    /**
     * @param boolean $adblock
     */
    public function setAdblock($adblock) {
        $this->adblock = $adblock;
    }

    /**
     * @return boolean
     */
    public function isAdblockNotSet() {
        return $this->adblock_not_set;
    }

    /**
     * @return boolean
     */
    public function isAllowTokenRequest() {
        return $this->allow_token_request;
    }

    /**
     * @param boolean $allow_token_request
     */
    public function setAllowTokenRequest($allow_token_request) {
        $this->allow_token_request = $allow_token_request;
    }

}
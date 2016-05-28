<?php
namespace alphayax\freebox\api\v3\models\NetworkShare;
use alphayax\freebox\api\v3\Model;

/**
 * Class SambaConfig
 * @package alphayax\freebox\api\v3\models\NetworkShare
 */
class SambaConfig extends Model {

    /** @var bool : is file sharing enabled */
    protected $file_share_enabled;

    /** @var bool : is printer sharing enabled */
    protected $print_share_enabled;

    /** @var bool : is login/password required to access shares */
    protected $logon_enabled;

    /** @var string : samba user name */
    protected $logon_user;

    /** @var string (Write-only) : samba user password */
    protected $logon_password;

    /** @var string : name of the workgroup */
    protected $workgroup;

    /**
     * @return boolean
     */
    public function isFileShareEnabled() {
        return $this->file_share_enabled;
    }

    /**
     * @param boolean $file_share_enabled
     */
    public function setFileShareEnabled( $file_share_enabled) {
        $this->file_share_enabled = $file_share_enabled;
    }

    /**
     * @return boolean
     */
    public function isPrintShareEnabled() {
        return $this->print_share_enabled;
    }

    /**
     * @param boolean $print_share_enabled
     */
    public function setPrintShareEnabled( $print_share_enabled) {
        $this->print_share_enabled = $print_share_enabled;
    }

    /**
     * @return boolean
     */
    public function isLogonEnabled() {
        return $this->logon_enabled;
    }

    /**
     * @param boolean $logon_enabled
     */
    public function setLogonEnabled( $logon_enabled) {
        $this->logon_enabled = $logon_enabled;
    }

    /**
     * @return string
     */
    public function getLogonUser() {
        return $this->logon_user;
    }

    /**
     * @param string $logon_user
     */
    public function setLogonUser( $logon_user) {
        $this->logon_user = $logon_user;
    }

    /**
     * @param string $logon_password
     */
    public function setLogonPassword( $logon_password) {
        $this->logon_password = $logon_password;
    }

    /**
     * @return string
     */
    public function getWorkgroup() {
        return $this->workgroup;
    }

    /**
     * @param string $workgroup
     */
    public function setWorkgroup( $workgroup) {
        $this->workgroup = $workgroup;
    }

}

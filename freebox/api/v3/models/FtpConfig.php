<?php
namespace alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\Model;

/**
 * Class FtpConfig
 * @package alphayax\freebox\api\v3\models
 */
class FtpConfig extends Model {

    /** @var bool : is the FTP server enabled */
    protected $enabled;

    /** @var bool : can anonymous user log in */
    protected $allow_anonymous;

    /** @var bool : can anonymous user write data */
    protected $allow_anonymous_write;

    /** @var string (Write-only) : user password */
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
     * @return boolean
     */
    public function isAllowAnonymous(){
        return $this->allow_anonymous;
    }

    /**
     * @param boolean $allow_anonymous
     */
    public function setAllowAnonymous( $allow_anonymous){
        $this->allow_anonymous = $allow_anonymous;
    }

    /**
     * @return boolean
     */
    public function isAllowAnonymousWrite(){
        return $this->allow_anonymous_write;
    }

    /**
     * @param boolean $allow_anonymous_write
     */
    public function setAllowAnonymousWrite( $allow_anonymous_write){
        $this->allow_anonymous_write = $allow_anonymous_write;
    }

    /**
     * @param string $password
     */
    public function setPassword( $password){
        $this->password = $password;
    }

}

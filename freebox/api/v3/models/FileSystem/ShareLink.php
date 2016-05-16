<?php
namespace alphayax\freebox\api\v3\models\FileSystem;
use alphayax\freebox\api\v3\Model;

/**
 * Class ShareLink
 * @package alphayax\freebox\api\v3\models\FileSystem
 */
class ShareLink extends Model {

    /** @var string (Read-only) : The link unique sharing token */
    protected $token;

    /** @var string (Read-only) : The root path of the share, if the path is a regular file, only this file will be shared */
    protected $path;

    /** @var string (Read-only) : The readable name of the shared file/folder */
    protected $name;

    /** @var int timestamp (Read-only) : Link expiration timestamp, 0 means no expiration. */
    protected $expire;

    /** @var string (Read-only) : Full URL to use for remote access. If remote access is disabled, the field will be empty. */
    protected $fullurl;

    /**
     * @return string
     */
    public function getToken(){
        return $this->token;
    }

    /**
     * @return string
     */
    public function getPath(){
        return $this->path;
    }

    /**
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @return int
     */
    public function getExpire(){
        return $this->expire;
    }

    /**
     * @return string
     */
    public function getFullurl(){
        return $this->fullurl;
    }

}
<?php
namespace alphayax\freebox\api\v3\models\Download\Config;
use alphayax\freebox\utils\Model;

/**
 * Class DlNewsConfig
 * @package alphayax\freebox\api\v3\models\Download\Config
 */
class DlNewsConfig extends Model {

    /** @var string : NNTP server hostname */
    protected $server;

    /** @var int : NNTP server port */
    protected $port;

    /** @var bool : Use SSL to connect to server if set to true */
    protected $ssl;

    /** @var string : NNTP auth username (can be empty if no auth is required) */
    protected $user;

    /** @var string (Write-only) : NNTP auth password (can be empty if no auth is required) */
    protected $password;

    /** @var int : maximum concurrent connections to the NNTP server */
    protected $nthreads;

    /** @var bool : automatically check and repair downloaded files using the provided par2 files */
    protected $auto_repair;

    /** @var bool : if set to true the downloader will download the par2 files only if the download is corrupted */
    protected $lazy_par2;

    /** @var bool : automatically attempt to extract downloaded files */
    protected $auto_extract;

    /** @var bool : if auto_extract is enabled, delete archive files once successfully extracted */
    protected $erase_tmp;

    /**
     * @return string
     */
    public function getServer() {
        return $this->server;
    }

    /**
     * @param string $server
     */
    public function setServer( $server) {
        $this->server = $server;
    }

    /**
     * @return int
     */
    public function getPort() {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort( $port) {
        $this->port = $port;
    }

    /**
     * @return boolean
     */
    public function isSsl() {
        return $this->ssl;
    }

    /**
     * @param boolean $ssl
     */
    public function setSsl( $ssl) {
        $this->ssl = $ssl;
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

    /**
     * @param string $password
     */
    public function setPassword( $password) {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getNthreads() {
        return $this->nthreads;
    }

    /**
     * @param int $nthreads
     */
    public function setNthreads( $nthreads) {
        $this->nthreads = $nthreads;
    }

    /**
     * @return boolean
     */
    public function isAutoRepair() {
        return $this->auto_repair;
    }

    /**
     * @param boolean $auto_repair
     */
    public function setAutoRepair( $auto_repair) {
        $this->auto_repair = $auto_repair;
    }

    /**
     * @return boolean
     */
    public function isLazyPar2() {
        return $this->lazy_par2;
    }

    /**
     * @param boolean $lazy_par2
     */
    public function setLazyPar2( $lazy_par2) {
        $this->lazy_par2 = $lazy_par2;
    }

    /**
     * @return boolean
     */
    public function isAutoExtract() {
        return $this->auto_extract;
    }

    /**
     * @param boolean $auto_extract
     */
    public function setAutoExtract( $auto_extract) {
        $this->auto_extract = $auto_extract;
    }

    /**
     * @return boolean
     */
    public function isEraseTmp() {
        return $this->erase_tmp;
    }

    /**
     * @param boolean $erase_tmp
     */
    public function setEraseTmp( $erase_tmp) {
        $this->erase_tmp = $erase_tmp;
    }

}

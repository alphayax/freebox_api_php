<?php
namespace alphayax\freebox\api\v3\models\Download\Config;
use alphayax\freebox\api\v3\Model;

/**
 * Class DlBtConfig
 * @package alphayax\freebox\api\v3\models\Download\Config
 */
class DlBtConfig extends Model {

    /** @var int : maximum number of peers at a given time */
    protected $max_peers;

    /** @var int : default stop_ratio for bt Download tasks This value is scaled by a factor 100, for instance a stop_ratio of 200 means that the task will stop once tx_bytes = 2 * size A value of 0 means that the task will continue seeding until it is manually stopped */
    protected $stop_ratio;

    /**
     * @var string
     * @see alphayax\freebox\api\v3\symbols\Download\Config\DlBtConfig\CryptoSupport
     */
    protected $crypto_support;

    /** @var bool : enable the dht protocol */
    protected $enable_dht;

    /** @var bool : enable the peer exchange protocol */
    protected $enable_pex;

    /** @var int : timeout in seconds for announcing to tracker */
    protected $announce_timeout;

    /** @var int : main bittorrent port */
    protected $main_port;

    /** @var int : bittorrent dht port */
    protected $dht_port;

    /**
     * @return int
     */
    public function getMaxPeers() {
        return $this->max_peers;
    }

    /**
     * @param int $max_peers
     */
    public function setMaxPeers( $max_peers) {
        $this->max_peers = $max_peers;
    }

    /**
     * @return int
     */
    public function getStopRatio() {
        return $this->stop_ratio;
    }

    /**
     * @param int $stop_ratio
     */
    public function setStopRatio( $stop_ratio) {
        $this->stop_ratio = $stop_ratio;
    }

    /**
     * @return string
     */
    public function getCryptoSupport() {
        return $this->crypto_support;
    }

    /**
     * @param string $crypto_support
     */
    public function setCryptoSupport( $crypto_support) {
        $this->crypto_support = $crypto_support;
    }

    /**
     * @return boolean
     */
    public function isEnableDht() {
        return $this->enable_dht;
    }

    /**
     * @param boolean $enable_dht
     */
    public function setEnableDht( $enable_dht) {
        $this->enable_dht = $enable_dht;
    }

    /**
     * @return boolean
     */
    public function isEnablePex() {
        return $this->enable_pex;
    }

    /**
     * @param boolean $enable_pex
     */
    public function setEnablePex( $enable_pex) {
        $this->enable_pex = $enable_pex;
    }

    /**
     * @return int
     */
    public function getAnnounceTimeout() {
        return $this->announce_timeout;
    }

    /**
     * @param int $announce_timeout
     */
    public function setAnnounceTimeout( $announce_timeout) {
        $this->announce_timeout = $announce_timeout;
    }

    /**
     * @return int
     */
    public function getMainPort() {
        return $this->main_port;
    }

    /**
     * @param int $main_port
     */
    public function setMainPort( $main_port) {
        $this->main_port = $main_port;
    }

    /**
     * @return int
     */
    public function getDhtPort() {
        return $this->dht_port;
    }

    /**
     * @param int $dht_port
     */
    public function setDhtPort( $dht_port) {
        $this->dht_port = $dht_port;
    }

}

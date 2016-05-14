<?php
namespace alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Model;

/**
 * Class IncomingPortConfig
 * @package alphayax\freebox\api\v3\models
 */
class IncomingPortConfig extends Model {

    /**
     * @var string (Read-only) : incoming port id
     * http	            : http port for remote access to Freebox OS
     * bittorrent-main	: main bittorrent port for Freebox downloader
     * bittorrent-dht	: bittorrent port for DHT
     */
    protected $id;

    /** @var bool : is the port binding allowed */
    protected $enabled;

    /** @var bool (Read-only) : is the port binding currently active */
    protected $active;

    /** @var string (Read-only) : Enum("tcp", "udp", "tcp_udp") */
    protected $type;

    /** @var int binding port */
    protected $in_port;

    /**
     * @var string (Read-only) : network namespace.
     * The service may be running on a different namespace (for instance if the service uses the vpn client).
     */
    protected $netns;

    /**
     * @return string
     */
    public function getId(){
        return $this->id;
    }

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
    public function isActive(){
        return $this->active;
    }

    /**
     * @return string
     */
    public function getType(){
        return $this->type;
    }

    /**
     * @return int
     */
    public function getInPort(){
        return $this->in_port;
    }

    /**
     * @param int $in_port
     */
    public function setInPort( $in_port){
        $this->in_port = $in_port;
    }

    /**
     * @return string
     */
    public function getNetns(){
        return $this->netns;
    }

}

<?php
namespace alphayax\freebox\api\v3\models\NAT;
use alphayax\freebox\api\v3\Model;
use alphayax\freebox\api\v3\models\LAN\LanHost;

/**
 * Class PortForwardingConfig
 * @package alphayax\freebox\api\v3\models
 */
class PortForwardingConfig extends Model {

    /** @var int : forwarding id */
    protected $id;

    /** @var bool : is forwarding enabled */
    protected $enabled;

    /** @var string (enum: tcp, udp) */
    protected $ip_proto;

    /** @var string : forwarding range start */
    protected $wan_port_start;

    /** @var int : forwarding range end */
    protected $wan_port_end;

    /** @var string : forwarding target on LAN */
    protected $lan_ip;

    /** @var int : forwarding target start port on LAN, (last port is lan_port + wan_port_end - wan_port_start) */
    protected $lan_port;

    /** @var  string (Read-only) : Forwarding target host name */
    protected $hostname;

    /** @var LanHost (Read-only) : forwarding target host information (@see LanHost) */
    protected $host;

    /**
     * @var string
     * if src_ip == 0.0.0.0 this rule will apply to any src ip
     * otherwise it will only apply to the specified ip address
     */
    protected $src_ip = '0.0.0.0';

    /** @var string comment */
    protected $comment;

    /**
     * @return int
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId( $id){
        $this->id = $id;
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
     * @return string
     */
    public function getIpProto(){
        return $this->ip_proto;
    }

    /**
     * @param string $ip_proto
     */
    public function setIpProto( $ip_proto = 'tcp'){
        $this->ip_proto = $ip_proto;
    }

    /**
     * @return string
     */
    public function getWanPortStart(){
        return $this->wan_port_start;
    }

    /**
     * @param string $wan_port_start
     */
    public function setWanPortStart( $wan_port_start){
        $this->wan_port_start = $wan_port_start;
    }

    /**
     * @return int
     */
    public function getWanPortEnd(){
        return $this->wan_port_end;
    }

    /**
     * @param int $wan_port_end
     */
    public function setWanPortEnd( $wan_port_end){
        $this->wan_port_end = $wan_port_end;
    }

    /**
     * @return string
     */
    public function getLanIp(){
        return $this->lan_ip;
    }

    /**
     * @param string $lan_ip
     */
    public function setLanIp( $lan_ip){
        $this->lan_ip = $lan_ip;
    }

    /**
     * @return int
     */
    public function getLanPort(){
        return $this->lan_port;
    }

    /**
     * @param int $lan_port
     */
    public function setLanPort( $lan_port){
        $this->lan_port = $lan_port;
    }

    /**
     * @return string
     */
    public function getHostname(){
        return $this->hostname;
    }

    /**
     * @return LanHost
     */
    public function getHost(){
        return $this->host;
    }

    /**
     * @return string
     */
    public function getSrcIp(){
        return $this->src_ip;
    }

    /**
     * @param string $src_ip
     */
    public function setSrcIp( $src_ip){
        $this->src_ip = $src_ip;
    }

    /**
     * @return string
     */
    public function getComment(){
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment( $comment){
        $this->comment = $comment;
    }

}
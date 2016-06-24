<?php
namespace alphayax\freebox\api\v3\models\LAN;
use alphayax\freebox\utils\Model;

/**
 * Class LanConfig
 * @package alphayax\freebox\api\v3\models
 */
class LanConfig extends Model {

    /** @var string : Freebox Server IPv4 address */
    protected $ip;

    /** @var string : Freebox Server name */
    protected $name;

    /** @var string : Freebox Server DNS name */
    protected $name_dns;

    /** @var string : Freebox Server mDNS name */
    protected $name_mdns;

    /** @var string : Freebox Server netbios name */
    protected $name_netbios;

    /**
     * @var string : LAN modes
     * @see alphayax\freebox\api\v3\symbols\Lan\LanType
     * NOTE: in bridge mode, most of Freebox services are disabled. It is recommended to use the router mode, and third party apps should not change this setting
     */
    protected $mode;

    /**
     * @return string
     */
    public function getIp(){
        return $this->ip;
    }

    /**
     * @param string $ip
     */
    public function setIp( $ip){
        $this->ip = $ip;
    }

    /**
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName( $name){
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNameDns(){
        return $this->name_dns;
    }

    /**
     * @param string $name_dns
     */
    public function setNameDns( $name_dns){
        $this->name_dns = $name_dns;
    }

    /**
     * @return string
     */
    public function getNameMdns(){
        return $this->name_mdns;
    }

    /**
     * @param string $name_mdns
     */
    public function setNameMdns( $name_mdns){
        $this->name_mdns = $name_mdns;
    }

    /**
     * @return string
     */
    public function getNameNetbios(){
        return $this->name_netbios;
    }

    /**
     * @param string $name_netbios
     */
    public function setNameNetbios( $name_netbios){
        $this->name_netbios = $name_netbios;
    }

    /**
     * @return string
     */
    public function getMode(){
        return $this->mode;
    }

    /**
     * @param string $mode
     */
    public function setMode( $mode){
        $this->mode = $mode;
    }

}

<?php
namespace alphayax\freebox\api\v3\models\VPN\Server\Config;
use alphayax\freebox\api\v3\Model;
use alphayax\freebox\api\v3\symbols;

/**
 * Class ServerConfig
 * @package alphayax\freebox\api\v3\models\VPN\Server\Config
 */
class ServerConfig extends Model {

    /** @var string (Read-only) : VPN server id */
    protected $id;

    /**
     * @var string (Read-only) : VPN server type
     * @see symbols\VPN\ServerConfig\Type
     */
    protected $type;

    /** @var bool : is the VPN server enabled */
    protected $enabled;

    /** @var int : the server port */
    protected $port;

    /** @var PPTPConfig : only available when type is PPTP */
    protected $conf_pptp;

    /** @var OpenVPNConfig : only available when type is OpenVPN */
    protected $conf_openvpn;

    /** @var string (Read-only) : start of the IP range that will be used to give clients an IP */
    protected $ip_start;

    /** @var string (Read-only) : end of the IP range that will be used to give clients an IP */
    protected $ip_end;

    /**
     * ServerConfig constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initProperty( 'conf_pptp'    , PPTPConfig::class);
        $this->initProperty( 'conf_openvpn' , OpenVPNConfig::class);
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     * @see symbols\VPN\ServerConfig\Type
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @return boolean
     */
    public function isEnabled() {
        return $this->enabled;
    }

    /**
     * @param boolean $enabled
     */
    public function setEnabled( $enabled) {
        $this->enabled = $enabled;
    }

    /**
     * @return int
     * NOTE: you can only edit the server port when type is openvpn
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
     * @return \alphayax\freebox\api\v3\models\VPN\Server\Config\PPTPConfig
     */
    public function getConfPptp() {
        return $this->conf_pptp;
    }

    /**
     * @param \alphayax\freebox\api\v3\models\VPN\Server\Config\PPTPConfig $conf_pptp
     */
    public function setConfPptp( $conf_pptp) {
        $this->conf_pptp = $conf_pptp;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\VPN\Server\Config\OpenVpnConfig
     */
    public function getConfOpenvpn() {
        return $this->conf_openvpn;
    }

    /**
     * @param \alphayax\freebox\api\v3\models\VPN\Server\Config\OpenVpnConfig $conf_openvpn
     */
    public function setConfOpenvpn( $conf_openvpn) {
        $this->conf_openvpn = $conf_openvpn;
    }

    /**
     * @return string
     */
    public function getIpStart() {
        return $this->ip_start;
    }

    /**
     * @return string
     */
    public function getIpEnd() {
        return $this->ip_end;
    }

}

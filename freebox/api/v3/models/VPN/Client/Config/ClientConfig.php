<?php
namespace alphayax\freebox\api\v3\models\VPN\Client\Config;
use alphayax\freebox\utils\Model;

/**
 * Class ClientConfig
 * @package alphayax\freebox\api\v3\models\VPN\Client\Config
 */
class ClientConfig extends Model {

    /** @var string (Read-only) : VPN config id */
    protected $id;

    /** @var string : VPN description */
    protected $description;

    /**
     * @var string : VPN server type
     * @see alphayax\freebox\api\v3\symbols\VPN\ServerConfig\Type
     **/
    protected $type;

    /** @var bool : is this configuration active. Only one configuration is active at a time. */
    protected $active;

    /** @var PPTPConfig : only available when type is PPTP */
    protected $conf_pptp;

    /**
     * ServerConfig constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initProperty( 'conf_pptp'    , PPTPConfig::class);
    }

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription( $description) {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType( $type) {
        $this->type = $type;
    }

    /**
     * @return boolean
     */
    public function isActive() {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive( $active) {
        $this->active = $active;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\VPN\Client\Config\PPTPConfig
     */
    public function getConfPptp() {
        return $this->conf_pptp;
    }

    /**
     * @param \alphayax\freebox\api\v3\models\VPN\Client\Config\PPTPConfig $conf_pptp
     */
    public function setConfPptp( $conf_pptp) {
        $this->conf_pptp = $conf_pptp;
    }

}

<?php
namespace alphayax\freebox\api\v3\models\VPN\Server\Config;
use alphayax\freebox\api\v3\Model;
use alphayax\freebox\api\v3\symbols;

/**
 * Class OpenVPNConfig
 * @package alphayax\freebox\api\v3\models\VPN\Server\Config
 */
class OpenVPNConfig extends Model{

    /**
     * @var string
     * @see symbols\VPN\OpenVPNConfig\Cipher
     */
    protected $cipher;

    /** @var bool : disable fragment configuration option */
    protected $disable_fragment;

    /**
     * @return string
     * @see symbols\VPN\OpenVPNConfig\Cipher
     */
    public function getCipher() {
        return $this->cipher;
    }

    /**
     * @param string $cipher
     * @see symbols\VPN\OpenVPNConfig\Cipher
     */
    public function setCipher( $cipher) {
        $this->cipher = $cipher;
    }

    /**
     * @return boolean
     */
    public function isDisableFragment() {
        return $this->disable_fragment;
    }

    /**
     * @param boolean $disable_fragment
     */
    public function setDisableFragment( $disable_fragment) {
        $this->disable_fragment = $disable_fragment;
    }

}

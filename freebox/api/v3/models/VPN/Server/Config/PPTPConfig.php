<?php
namespace alphayax\freebox\api\v3\models\VPN\Server\Config;
use alphayax\freebox\api\v3\Model;
use alphayax\freebox\api\v3\symbols;

/**
 * Class PPTPConfig
 * @package alphayax\freebox\api\v3\models\VPN\Server\Config
 */
class PPTPConfig extends Model {

    /**
     * @var string
     * @see symbols\VPN\PPTPConfig\Mppe
     */
    protected $mppe;

    /** @var bool[] : allowed authentication methods */
    protected $allowed_auth = [
        'pap'      => null,
        'chap'     => null,
        'mschapv2' => null,
    ];

    /**
     * @return string
     */
    public function getMppe() {
        return $this->mppe;
    }

    /**
     * @param string $mppe
     */
    public function setMppe( $mppe) {
        $this->mppe = $mppe;
    }

    /**
     * @return bool[]
     */
    public function getAllowedAuth() {
        return $this->allowed_auth;
    }

    /**
     * @param bool[] $allowed_auth
     */
    public function setAllowedAuth( $allowed_auth) {
        $this->allowed_auth = $allowed_auth;
    }

}

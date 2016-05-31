<?php
namespace alphayax\freebox\api\v3\models\VPN\Server;
use alphayax\freebox\api\v3\Model;

/**
 * Class User
 * @package alphayax\freebox\api\v3\models\VPN\Server
 */
class User extends Model {

    /** @var string : VPN user login */
    protected $login;

    /** @var string (Write-only) : VPN user password (length must be between 8 and 32) */
    protected $password;

    /** @var bool (Read-only) : True if a password was provided for this user */
    protected $password_set;

    /**
     * @var string ipv4
     * You can specify the IP you want to assign to this user.
     * If you don’t want to use a specific IP pass an empty string or omit this property.
     * The IP must be in the VPN range (see ip_start, ip_end).
     */
    protected $ip_reservation;

    /**
     * @return string
     */
    public function getLogin() {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin( $login) {
        $this->login = $login;
    }

    /**
     * @param string $password
     */
    public function setPassword( $password) {
        $this->password = $password;
    }

    /**
     * @return boolean
     */
    public function isPasswordSet() {
        return $this->password_set;
    }

    /**
     * @return string
     */
    public function getIpReservation() {
        return $this->ip_reservation;
    }

    /**
     * @param string $ip_reservation
     */
    public function setIpReservation( $ip_reservation) {
        $this->ip_reservation = $ip_reservation;
    }

}

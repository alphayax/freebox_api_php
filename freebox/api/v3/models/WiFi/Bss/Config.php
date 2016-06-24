<?php
namespace alphayax\freebox\api\v3\models\WiFi\Bss;
use alphayax\freebox\utils\Model;

/**
 * Class Config
 * @package alphayax\freebox\api\v3\models\WiFi\Bss
 */
class Config extends Model {

    /**
     * @var bool : enable this BSS.
     * Note that if you want the AP to completely stop emitting wifi you should use GlobalConfig enabled attribute, otherwise FreeWifi and FreeWifi Secure may still be active.
     */
    protected $enabled;

    /** @var bool : if true, share the configuration with the main bss */
    protected $use_default_config;

    /** @var string : bss displayed name */
    protected $ssid;

    /** @var string : don’t show bss in bss list */
    protected $hide_ssid;

    /**
     * @var string
     * @see alphayax\freebox\api\v3\symbols\WiFi\BssConfig\Encryption
     */
    protected $encryption;

    /** @var string (Write-only) : wifi key */
    protected $key;

    /** @var int (Read-only) : eapol version */
    protected $eapol_version;

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
     * @return boolean
     */
    public function isUseDefaultConfig() {
        return $this->use_default_config;
    }

    /**
     * @param boolean $use_default_config
     */
    public function setUseDefaultConfig( $use_default_config) {
        $this->use_default_config = $use_default_config;
    }

    /**
     * @return string
     */
    public function getSsid() {
        return $this->ssid;
    }

    /**
     * @param string $ssid
     */
    public function setSsid( $ssid) {
        $this->ssid = $ssid;
    }

    /**
     * @return string
     */
    public function getHideSsid() {
        return $this->hide_ssid;
    }

    /**
     * @param string $hide_ssid
     */
    public function setHideSsid( $hide_ssid) {
        $this->hide_ssid = $hide_ssid;
    }

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\WiFi\BssConfig\Encryption
     */
    public function getEncryption() {
        return $this->encryption;
    }

    /**
     * @param string $encryption
     * @see alphayax\freebox\api\v3\symbols\WiFi\BssConfig\Encryption
     */
    public function setEncryption( $encryption) {
        $this->encryption = $encryption;
    }

    /**
     * @param string $key
     */
    public function setKey( $key) {
        $this->key = $key;
    }

    /**
     * @return int
     */
    public function getEapolVersion() {
        return $this->eapol_version;
    }

}

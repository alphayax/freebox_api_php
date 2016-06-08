<?php
namespace alphayax\freebox\api\v3\symbols\WiFi\BssConfig;

/**
 * Symbol Encryption
 * @package alphayax\freebox\api\v3\symbols\WiFi\BssConfig
 */
interface Encryption {

    /** wep (should not use) */
    const WEP = 'wep';

    /** wpa/psk auto */
    const WPA_PSK_AUTO = 'wpa_psk_auto';

    /** wpa/psk tkip */
    const WPA_PSK_TKIP = 'wpa_psk_tkip';

    /** wpa/psk ccmp */
    const WPA_PSK_CCMP = 'wpa_psk_ccmp';

    /** wpa2/psk auto */
    const WPA2_PSK_AUTO = 'wpa2_psk_auto';

    /** wpa2/psk tkip */
    const WPA2_PSK_TKIP = 'wpa2_psk_tkip';

    /** wpa2/psk ccmp */
    const WPA2_PSK_CCMP = 'wpa2_psk_ccmp';
}

<?php
namespace alphayax\freebox\api\v3\symbols\WiFi\APConfig;

/**
 * Symbol Band
 * @package alphayax\freebox\api\v3\symbols\WiFi\APConfig
 * @see alphayax\freebox\api\v3\models\WiFi\AccessPoint\APConfig
 */
interface Band {

    /** 2.4 GHz */
    const BAND_2D4G = '2d4g';

    /** 5 GHz */
    const BAND_5G = '5g';

    /** 60 GHz */
    const BAND_60 = '60g';
}

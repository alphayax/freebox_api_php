<?php
namespace alphayax\freebox\api\v3\symbols\SwitchPort\Config;

/**
 * Symbol Duplex
 * @package alphayax\freebox\api\v3\symbols\SwitchPort\Config
 * @see alphayax\freebox\api\v3\models\SwitchPort\Config
 */
interface Duplex {

    /** auto negotiate duplex mode */
    const AUTO = 'auto';

    /** force in half duplex mode */
    const HALF = 'half';

    /** force in full duplex mode */
    const FULL = 'full';
}

<?php
namespace alphayax\freebox\api\v3\symbols\SwitchPort\Status;

/**
 * Symbol Duplex
 * @package alphayax\freebox\api\v3\symbols\SwitchPort\Status
 * @see alphayax\freebox\api\v3\models\SwitchPort\Stats
 */
interface Duplex {

    /** force in half duplex mode */
    const HALF = 'half';

    /** force in full duplex mode */
    const FULL = 'full';
}

<?php
namespace alphayax\freebox\api\v3\symbols\RRD\Fields;

/**
 * Symbol FbxSwitch
 * @package alphayax\freebox\api\v3\symbols\RRD\Fields
 */
interface FbxSwitch {

    /** receive rate on port 1 (in byte/s) */
    const RX_1 = 'rx_1';

    /** transmit on port 1 (in byte/s) */
    const TX_1 = 'tx_1';

    /** receive rate on port 2 (in byte/s) */
    const RX_2 = 'rx_2';

    /** transmit on port 2 (in byte/s) */
    const TX_2 = 'tx_2';

    /** receive rate on port 3 (in byte/s) */
    const RX_3 = 'rx_3';

    /** transmit on port 3 (in byte/s) */
    const TX_3 = 'tx_3';

    /** receive rate on port 4 (in byte/s) */
    const RX_4 = 'rx_4';

    /** transmit on port 4 (in byte/s) */
    const TX_4 = 'tx_4';
}

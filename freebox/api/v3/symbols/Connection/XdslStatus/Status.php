<?php
namespace alphayax\freebox\api\v3\symbols\Connection\XdslStatus;

/**
 * Symbol Status
 * @package alphayax\freebox\api\v3\symbols\Connection\XdslStatus
 * @see alphayax\freebox\api\v3\models\Connection\Xdsl\XdslStatus
 */
interface Status {

    /** unsynchronized */
    const DOWN = 'down';

    /** synchronizing step 1/4 */
    const TRAINING = 'training';

    /** synchronizing step 2/4 */
    const STARTED = 'started';

    /** synchronizing step 3/4 */
    const CHAN_ANALYSIS = 'chan_analysis';

    /** synchronizing step 4/4 */
    const MSG_EXCHANGE = 'msg_exchange';

    /** Ready */
    const SHOWTIME = 'showtime';

    /** Disabled */
    const DISABLED = 'disabled';
}

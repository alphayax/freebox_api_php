<?php
namespace alphayax\freebox\api\v3\symbols\Download\Config\DlThrottlingConfig;

/**
 * Symbol Mode
 * @package alphayax\freebox\api\v3\symbols\Download\Config\DlThrottlingConfig
 * @see alphayax\freebox\api\v3\models\Download\Config\DlThrottlingConfig
 */
interface Mode {

    /** force use of normal rate limits (not using the scheduler) */
    const NORMAL = 'normal';

    /** force use of slow rate limits (not using the scheduler) */
    const SLOW = 'slow';

    /** force hibernate (not using the scheduler) */
    const HIBERNATE = 'hibernate';

    /** use scheduded rate limit */
    const SCHEDULE = 'schedule';

}

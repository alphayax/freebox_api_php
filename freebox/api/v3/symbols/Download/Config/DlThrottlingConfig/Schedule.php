<?php
namespace alphayax\freebox\api\v3\symbols\Download\Config\DlThrottlingConfig;

/**
 * Symbol Schedule
 * @package alphayax\freebox\api\v3\symbols\Download\Config\DlThrottlingConfig
 * @see alphayax\freebox\api\v3\models\Download\Config\DlThrottlingConfig
 */
interface Schedule {

    /** downloads will use normal DlRate config for this timeslot */
    const NORMAL = 'normal';

    /** downloads will use slow DlRate config for this timeslot */
    const SLOW = 'slow';

    /** downloads will be paused for this timeslot */
    const HIBERNATE = 'hibernate';

}

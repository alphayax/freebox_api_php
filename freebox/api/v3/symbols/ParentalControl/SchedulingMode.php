<?php
namespace alphayax\freebox\api\v3\symbols\ParentalControl;

/**
 * Symbol SchedulingMode
 * @package alphayax\freebox\api\v3\symbols\ParentalControl
 */
interface SchedulingMode {

    /** filter_state is forced to forced_mode */
    const FORCED = 'forced';

    /** filter_state is temporary set to tmp_mode for the next tmp_mode_expire seconds */
    const TEMPORARY = 'temporary';

    /** filter_state is set using the planning */
    const PLANNING = 'planning';
}

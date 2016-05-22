<?php
namespace alphayax\freebox\api\v3\symbols\Connection\XdslStatus;

/**
 * Symbol Protocol
 * @package alphayax\freebox\api\v3\symbols\Connection\XdslStatus
 * @see alphayax\freebox\api\v3\models\Connection\Xdsl\XdslStatus
 */
interface Protocol {

    /** T1.413 */
    const T1_413 = 't1413';

    /** ADSL */
    const ADSL = 'adsl1_a';

    /** ADSL2 */
    const ADSL2 = 'adsl2_a';

    /** ADSL2+ */
    const ADSL2PLUS = 'adsl2plus_a';

    /** ReachDSL */
    const REACH_DSL = 'readsl2';

    /** ADSL2 annex M */
    const ADSL2_M = 'adsl2_m';

    /** ADSL2+ annex M */
    const ADSL2PLUS_M = 'adsl2plus_m';

    /** Unknown */
    const UNKNOWN = 'unknown';
}
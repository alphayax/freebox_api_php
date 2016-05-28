<?php
namespace alphayax\freebox\api\v3\symbols\SwitchPort\Status;

/**
 * Symbol Link
 * @package alphayax\freebox\api\v3\symbols\SwitchPort\Status
 * @see alphayax\freebox\api\v3\models\SwitchPort\Stats
 */
interface Link {

    /** port is up */
    const UP = 'up';

    /** port is down */
    const DOWN = 'down';
}

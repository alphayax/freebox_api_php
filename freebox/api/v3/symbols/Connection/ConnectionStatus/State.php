<?php
namespace alphayax\freebox\api\v3\symbols\Connection\ConnectionStatus;

/**
 * Symbol State
 * @package alphayax\freebox\api\v3\symbols\Connection\ConnectionStatus
 * @see alphayax\freebox\api\v3\models\Connection\Status
 */
interface State {

    /** connection is initializing */
    const GOING_UP = 'going_up';

    /** connection is active */
    const UP = 'up';

    /** connection is about to become inactive */
    const GOING_DOWN = 'going_down';

    /** connection is inactive */
    const DOWN = 'down';

}
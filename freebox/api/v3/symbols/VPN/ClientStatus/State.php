<?php
namespace alphayax\freebox\api\v3\symbols\VPN\ClientStatus;

/**
 * Symbol State
 * @package alphayax\freebox\api\v3\symbols\VPN\ClientStatus
 */
interface State {

    /** waiting for wan connection */
    const WAITING_WAN = 'waiting_wan';

    /** connection is initializing */
    const GOING_UP = 'going_up';

    /** connection is active */
    const UP = 'up';

    /** connection is about to become inactive */
    const GOING_DOWN = 'going_down';

    /** connection is inactive */
    const DOWN = 'down';
}

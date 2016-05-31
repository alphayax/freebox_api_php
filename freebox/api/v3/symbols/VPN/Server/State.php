<?php
namespace alphayax\freebox\api\v3\symbols\VPN\Server;

/**
 * Symbol State
 * @package alphayax\freebox\api\v3\symbols\VPN\Server
 */
interface State {

    const STOPPED   = 'stopped';
    const STARTING  = 'starting';
    const STARTED   = 'started';
    const STOPPING  = 'stopping';
    const ERROR     = 'error';
}

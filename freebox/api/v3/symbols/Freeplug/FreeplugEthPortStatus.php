<?php
namespace alphayax\freebox\api\v3\symbols\Freeplug;

/**
 * Symbol FreeplugEthPortStatus
 * @package alphayax\freebox\api\v3\symbols\Freeplug
 */
interface FreeplugEthPortStatus {
    const UP        = 'up';         // The ethernet port is up
    const DOWN      = 'down';       // The ethernet port is down
    const UNKNOWN   = 'unknown';    // The ethernet port state is unknown
}

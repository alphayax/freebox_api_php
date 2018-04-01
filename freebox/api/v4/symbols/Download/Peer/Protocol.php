<?php

namespace alphayax\freebox\api\v4\symbols\Download\Peer;

/**
 * Symbol Protocol
 * @package alphayax\freebox\api\v4\symbols\Download\Peer
 * @see     \alphayax\freebox\api\v4\models\Download\Peer
 */
interface Protocol
{
    /** TCP */
    const TCP = 'tcp';

    /** Obfuscated TCP */
    const TCP_OBFUSCATED = 'tcp_obfuscated';

    /** UDP */
    const UDP = 'udp';
}

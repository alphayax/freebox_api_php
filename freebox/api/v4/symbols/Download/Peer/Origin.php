<?php

namespace alphayax\freebox\api\v4\symbols\Download\Peer;

/**
 * Symbol Origin
 * @package alphayax\freebox\api\v4\symbols\Download\Peer
 * @see     \alphayax\freebox\api\v4\models\Download\Peer
 */
interface Origin
{
    /** got the peer from the tracker */
    const TRACKER = 'tracker';

    /** incoming peer */
    const INCOMING = 'incoming';

    /** got the peer from DHT */
    const DHT = 'dht';

    /** got the peer from Peer exchange protocol */
    const PEX = 'pex';

    /** manually added peer */
    const USER = 'user';
}

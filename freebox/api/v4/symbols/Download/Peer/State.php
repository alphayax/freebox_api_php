<?php

namespace alphayax\freebox\api\v4\symbols\Download\Peer;

/**
 * Interface State
 * @package alphayax\freebox\api\v4\symbols\Download\Peer
 * @see     \alphayax\freebox\api\v4\models\Download\Peer
 */
interface State
{
    /** not connected */
    const DISCONNECTED = 'disconnected';

    /** trying to connect to the peer */
    const CONNECTING = 'connecting';

    /** connected to the peer, negotiating capabilities */
    const HANDSHAKING = 'handshaking';

    /** ready to exchange data */
    const READY = 'ready';
}

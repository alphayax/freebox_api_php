<?php

namespace alphayax\freebox\api\v4\symbols\Download\BlackListEntry;

/**
 * Symbol Reason
 * @package alphayax\freebox\api\v4\symbols\Download\BlackListEntry
 * @see     \alphayax\freebox\api\v4\models\Download\BlackListEntry
 */
interface Reason
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

<?php
namespace alphayax\freebox\api\v3\symbols\Connection\ConnectionStatus;

/**
 * Symbol Type
 * @package alphayax\freebox\api\v3\symbols\Connection\ConnectionStatus
 * @see alphayax\freebox\api\v3\models\Connection\Status
 */
interface Type {

    /** FTTH */
    const FTTH = 'ethernet';

    /** xDSL (unbundled) */
    const XDSL_UNBUNDLED = 'rfc2684';

    /** xDSL */
    const XDSL = 'pppoatm';
}

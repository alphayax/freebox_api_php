<?php
namespace alphayax\freebox\api\v3\symbols\ParentalControl;

/**
 * Symbol FilterState
 * @package alphayax\freebox\api\v3\symbols\ParentalControl
 */
interface FilterState {

    /** access is allowed */
    const ALLOWED = 'allowed';

    /** access is denied */
    const DENIED = 'denied';

    /** access is granted only for HTTP and HTTPS traffic */
    const WEB_ONLY = 'webonly';
}

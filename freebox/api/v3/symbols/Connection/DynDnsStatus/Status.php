<?php
namespace alphayax\freebox\api\v3\symbols\Connection\DynDnsStatus;

/**
 * Interface Status
 * @package alphayax\freebox\api\v3\symbols\Connection\DynDnsStatus
 * @see alphayax\freebox\api\v3\models\Connection\DynDns\Status
 */
interface Status {

    /** Disabled */
    const DISABLED = 'disabled';

    /** Ok */
    const OK = 'ok';

    /** Updating */
    const WAIT = 'wait';

    /** Request failed */
    const REQUEST_FAILED = 'reqfail';

    /** Authentication error */
    const AUTHENTICATION_ERROR = 'authfail';

    /** Invalid credential */
    const INVALID_CREDENTIAL = 'nocredential';

    /** Invalid IP */
    const INVALID_IP = 'ipinval';

    /** Invalid hostname */
    const INVALID_HOSTNAME = 'hostinval';

    /** Blocked because of abuse */
    const BLOCKED_FOR_ABUSE = 'abuse';

    /** DNS error */
    const DNS_ERROR = 'dnserror';

    /** Service unavailable */
    const UNAVAILABLE = 'unavailable';

    /** Unable to get wan IP */
    const NO_WAN_IP = 'nowan';

    /** Unknown */
    const UNKNOWN = 'unknown';
}
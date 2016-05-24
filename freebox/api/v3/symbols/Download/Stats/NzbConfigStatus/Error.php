<?php
namespace alphayax\freebox\api\v3\symbols\Download\Stats\NzbConfigStatus;

/**
 * Symbol Error
 * @package alphayax\freebox\api\v3\symbols\Download\Stats\NzbConfigStatus
 * @see alphayax\freebox\api\v3\models\Download\NzbConfigStatus
 */
interface Error {

    /** test is ok */
    const NONE = 'none';

    /** authentication is required */
    const NAB_AUTHENTICATION_REQUIRED = 'nzb_authentication_required';

    /** incorrect credentials */
    const BAD_AUTHENTICATION = 'bad_authentication';

    /** unable to connect to NNTP server */
    const CONNECTION_REFUSED = 'connection_refused';
}

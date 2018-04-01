<?php

namespace alphayax\freebox\api\v4\symbols\Download\Stats\NzbConfigStatus;

/**
 * Symbol Status
 * @package alphayax\freebox\api\v4\symbols\Download\Stats\NzbConfigStatus
 * @see     \alphayax\freebox\api\v4\models\Download\NzbConfigStatus
 */
interface Status
{
    /** config has not been checked yet */
    const NOT_CHECKED = 'not_checked';

    /** test in progress */
    const CHECKING = 'checking';

    /**  is invalid, see error */
    const ERROR = 'error';

    /** config is ok */
    const OK = 'ok';
}

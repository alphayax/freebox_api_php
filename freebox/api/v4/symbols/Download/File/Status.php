<?php

namespace alphayax\freebox\api\v4\symbols\Download\File;

/**
 * Symbol Status
 * @package alphayax\freebox\api\v4\symbols\Download\File
 */
interface Status
{
    /** file is queued for download */
    const QUEUED = 'queued';

    /** there was a problem with this file, see error to get the error code */
    const ERROR = 'error';

    /** file download is completed */
    const DONE = 'done';
}

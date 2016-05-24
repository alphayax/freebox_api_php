<?php
namespace alphayax\freebox\api\v3\symbols\Download\File;

/**
 * Symbol Priority
 * @package alphayax\freebox\api\v3\symbols\Download\File
 */
interface Priority {

    /** this file will not be downloaded */
    const NO_DOWNLOAD = 'no_dl';

    /** low priority */
    const LOW = 'low';

    /** default priority */
    const NORMAL = 'normal';

    /** high priority */
    const HIGH = 'high';
}

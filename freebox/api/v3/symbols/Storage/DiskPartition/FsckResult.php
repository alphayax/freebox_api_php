<?php
namespace alphayax\freebox\api\v3\symbols\Storage\DiskPartition;

/**
 * Symbol FsckResult
 * @package alphayax\freebox\api\v3\symbols\Storage\DiskPartition
 * @see alphayax\freebox\api\v3\models\Storage\DiskPartition
 */
interface FsckResult {

    /** Partition has not been checked yet */
    const NO_RUN_YET = 'no_run_yet';

    /** Check is in progress */
    const RUNNING = 'running';

    /** File system is ok */
    const FS_CLEAN = 'fs_clean';

    /** File system was corrected */
    const FS_CORRECTED = 'fs_corrected';

    /** File system need correction */
    const FS_NEED_CORRECTION = 'fs_needs_correction';

    /** File system has unrecoverable error */
    const FAILED = 'failed';
}

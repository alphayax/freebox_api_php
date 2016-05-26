<?php
namespace alphayax\freebox\api\v3\symbols\FileSystem;

/**
 * Interface FileUploadStatus
 * @package alphayax\freebox\api\v3\symbols\FileSystem
 */
interface FileUploadStatus {

    /** Upload authorization is valid, upload has not started yet */
    const AUTHORIZED = 'authorized';

    /** Upload in progress */
    const IN_PROGRESS = 'in_progress';

    /** Upload done */
    const DONE = 'done';

    /** Upload failed */
    const FAILED = 'failed';

    /** Destination file conflict */
    const CONFLICT = 'conflict';

    /** Upload authorization is no longer valid */
    const TIMEOUT = 'timeout';

    /** Upload cancelled by user */
    const CANCELLED = 'cancelled';

    /** timestamp Read-only */
    const START_DATE = 'start_date';

    /** start date */
    const UPLOAD = 'upload';

}
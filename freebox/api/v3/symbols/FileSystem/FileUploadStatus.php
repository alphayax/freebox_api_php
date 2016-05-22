<?php
namespace alphayax\freebox\api\v3\symbols\FileSystem;

/**
 * Interface FileUploadStatus
 * @package alphayax\freebox\api\v3\symbols\FileSystem
 */
interface FileUploadStatus {

    /** Upload authorization is valid, upload has not started yet */
    CONST AUTHORIZED = 'authorized';

    /** Upload in progress */
    CONST IN_PROGRESS = 'in_progress';

    /** Upload done */
    CONST DONE = 'done';

    /** Upload failed */
    CONST FAILED = 'failed';

    /** Destination file conflict */
    CONST CONFLICT = 'conflict';

    /** Upload authorization is no longer valid */
    CONST TIMEOUT = 'timeout';

    /** Upload cancelled by user */
    CONST CANCELLED = 'cancelled';

    /** timestamp Read-only */
    CONST START_DATE = 'start_date';

    /** start date */
    CONST UPLOAD = 'upload';

}
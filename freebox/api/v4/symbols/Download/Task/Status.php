<?php

namespace alphayax\freebox\api\v4\symbols\Download\Task;

/**
 * Symbol Status
 * @package alphayax\freebox\api\v4\symbols\Download\Task
 * @see     \alphayax\freebox\api\v4\models\Download\Task
 */
interface Status
{
    /** task is stopped, can be resumed by setting the status to downloading */
    const STOPPED = 'stopped';

    /** task will start when a new download slot is available the queue position is stored in queue_pos attribute */
    const QUEUED = 'queued';

    /** task is preparing to start download */
    const STARTING = 'starting';

    /** task is in progress */
    const DOWNLOADING = 'downloading';

    /** task is gracefully stopping */
    const STOPPING = 'stopping';

    /** there was a problem with the download, you can get an error code in the error field */
    const ERROR = 'error';

    /** the download is over. For bt you can resume seeding setting the status to seeding if the ratio is not reached yet */
    const DONE = 'done';

    /** (only valid for nzb) download is over, the downloaded files are being checked using par2 */
    const CHECKING = 'checking';

    /** (only valid for nzb) download is over, the downloaded files are being repaired using par2 */
    const REPAIRING = 'repairing';

    /** only valid for nzb) download is over, the downloaded files are being extracted */
    const EXTRACTING = 'extracting';

    /** (only valid for bt) download is over, the content is Change to being shared to other users. The task will automatically stop once the seed ratio has been reached */
    const SEEDING = 'seeding';

    /** You can set a task status to ‘retry’ to restart the download task. */
    const RETRY = 'retry';
}

<?php

namespace alphayax\freebox\api\v4\symbols\FileSystem;

/**
 * Interface TaskState
 * @package alphayax\freebox\api\v4\symbols\FileSystem
 */
interface TaskState
{
    const QUEUED  = 'queued';  // Queued (only one task is active at a given time)
    const RUNNING = 'running'; // Running
    const PAUSED  = 'paused';  // Paused (user suspended)
    const DONE    = 'done';    // Done
    const FAILED  = 'failed';  // Failed (see error)
}

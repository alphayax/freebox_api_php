<?php
namespace alphayax\freebox\api\v3\symbols\FileSystem;

/**
 * Interface TaskType
 * @package alphayax\freebox\api\v3\symbols\FileSystem
 */
interface TaskType {
    const CONCATENATE_MULTIPLE_FILES    = 'cat';
    const COPY_FILES                    = 'cp';
    const MOVE_FILES                    = 'mv';
    const REMOVE_FILES                  = 'rm';
    const ARCHIVE_CREATE                = 'archive';
    const ARCHIVE_EXTRACT               = 'extract';
    const CHECK_AND_REPAIR_FILES        = 'repair';
}
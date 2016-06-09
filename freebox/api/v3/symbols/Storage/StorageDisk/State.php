<?php
namespace alphayax\freebox\api\v3\symbols\Storage\StorageDisk;

/**
 * Symbol State
 * @package alphayax\freebox\api\v3\symbols\Storage\StorageDisk
 * @see alphayax\freebox\api\v3\models\Storage\StorageDisk
 */
interface State {

    /** Disk has error */
    const ERROR = 'error';

    /** Disk is disabled */
    const DISABLED = 'disabled';

    /** Disk is enabled */
    const ENABLED = 'enabled';

    /** Disk is formatting */
    const FORMATTING = 'formatting';
}

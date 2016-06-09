<?php
namespace alphayax\freebox\api\v3\symbols\Storage\DiskPartition;

/**
 * Symbol State
 * @package alphayax\freebox\api\v3\symbols\Storage\DiskPartition
 * @see alphayax\freebox\api\v3\models\Storage\DiskPartition
 */
interface State {

    /** Partition has error */
    const ERROR = 'error';

    /** Partition check in progress */
    const CHECKING = 'checking';

    /** Partition format in progress */
    const FORMATTING = 'formatting';

    /** Partition mount in progress */
    const MOUNTING = 'mounting';

    /** Partition is in maintenance mode */
    const MAINTENANCE = 'maintenance';

    /** Partition is ready */
    const MOUNTED = 'mounted';

    /** Partition umount in progress */
    const UNMOUNTING = 'umounting';

    /** Partition is umounted */
    const UNMOUNTED = 'umounted';

    /** Partition ejection in progress */
    const EJECTING = 'ejecting';
}

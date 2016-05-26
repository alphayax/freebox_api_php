<?php
namespace alphayax\freebox\api\v3\symbols\Download\Tracker;

/**
 * Symbol Status
 * @package alphayax\freebox\api\v3\symbols\Download\Tracker
 * @see alphayax\freebox\api\v3\models\Download\Tracker
 */
interface Status {

    /** not announced */
    const UNANNOUNCED = 'unannounced';

    /** announcing */
    const ANNOUNCING = 'announcing';

    /** an error occurred while trying to announce */
    const ANNOUNCE_FAILED = 'announce_failed';

    /** announced */
    const ANNOUNCED = 'announced';
}

<?php

namespace alphayax\freebox\api\v4\symbols\Download\Feed;

/**
 * Symbol Status
 * @package alphayax\freebox\api\v4\symbols\Download\Feed
 * @see     \alphayax\freebox\api\v4\models\Download\Feed\DownloadFeed
 */
interface Status
{
    /** feed is up to date */
    const READY = 'ready';

    /** feed is updating */
    const FETCHING = 'fetching';

    /** there was an error trying to refresh this feed, see error */
    const ERROR = 'error';
}

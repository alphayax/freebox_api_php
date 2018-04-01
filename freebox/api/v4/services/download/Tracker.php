<?php

namespace alphayax\freebox\api\v4\services\download;

use alphayax\freebox\api\v4\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Tracker
 * @package alphayax\freebox\api\v4\services\download
 * @experimental
 */
class Tracker extends ServiceAuth
{
    const API_DOWNLOAD_TRACKER      = '/api/v4/downloads/%u/trackers';
    const API_DOWNLOAD_TRACKER_ITEM = '/api/v4/downloads/%u/trackers/%s';

    /**
     * Each torrent Download task has one or more DownloadTracker.
     * Each tracker is identified by its announce URL.
     * @param int $downloadTaskId
     * @return \alphayax\freebox\utils\Model[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getAll($downloadTaskId)
    {
        $service = sprintf(self::API_DOWNLOAD_TRACKER, $downloadTaskId);
        $rest    = $this->callService('GET', $service);

        return $rest->getModels(models\Download\Tracker::class);
    }

    /**
     * Add a new tracker
     * Attempting to call this method on a download other than bittorent will fail
     * @param int    $downloadTaskId
     * @param string $announceUrl (eg: udp://tracker.openbittorrent.com:80)
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function add($downloadTaskId, $announceUrl)
    {
        $service = sprintf(self::API_DOWNLOAD_TRACKER, $downloadTaskId);
        $rest    = $this->callService('POST', $service, [
            'announce' => $announceUrl,
        ]);

        return $rest->getSuccess();
    }

    /**
     * Remove a tracker
     * Attempting to call this method on a download other than bittorent will fail
     * @param int    $downloadTaskId
     * @param string $announceUrl (eg: udp://tracker.openbittorrent.com:80)
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function remove($downloadTaskId, $announceUrl)
    {
        $service = sprintf(self::API_DOWNLOAD_TRACKER_ITEM, $downloadTaskId, $announceUrl);
        $rest    = $this->callService('DELETE', $service);

        return $rest->getSuccess();
    }

    /**
     * Update a tracker
     * Attempting to call this method on a download other than bittorent will fail
     * @param int                     $downloadTaskId
     * @param string                  $announceUrl
     * @param models\Download\Tracker $Tracker
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function update($downloadTaskId, $announceUrl, models\Download\Tracker $Tracker)
    {
        $service = sprintf(self::API_DOWNLOAD_TRACKER_ITEM, $downloadTaskId, $announceUrl);
        $rest    = $this->callService('PUT', $service, $Tracker);

        return $rest->getSuccess();
    }

}

<?php
namespace alphayax\freebox\api\v3\services\download;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class Tracker
 * @package alphayax\freebox\api\v3\services\download
 * @experimental
 */
class Tracker extends Service {

    const API_DOWNLOAD_TRACKER      = '/api/v3/downloads/%u/trackers';
    const API_DOWNLOAD_TRACKER_ITEM = '/api/v3/downloads/%u/trackers/%s';

    /**
     * Each torrent Download task has one or more DownloadTracker.
     * Each tracker is identified by its announce URL.
     * @param int $downloadTaskId
     * @return models\Download\Tracker
     */
    public function getAll( $downloadTaskId){
        $service = sprintf( self::API_DOWNLOAD_TRACKER, $downloadTaskId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        $DownloadTracker_xs = @$rest->getCurlResponse()['result'] ?: [];
        $DownloadTrackers   = [];
        foreach( $DownloadTracker_xs as $DownloadTracker_x) {
            $DownloadTrackers[] = new models\Download\Tracker( $DownloadTracker_x);
        }
        return $DownloadTrackers;
    }

    /**
     * Add a new tracker
     * Attempting to call this method on a download other than bittorent will fail
     * @param int    $downloadTaskId
     * @param string $announceUrl       (eg: udp://tracker.openbittorrent.com:80)
     * @return bool
     */
    public function add( $downloadTaskId, $announceUrl) {
        $service = sprintf( self::API_DOWNLOAD_TRACKER, $downloadTaskId);
        $rest = $this->getAuthService( $service);
        $rest->POST([
            'announce' => $announceUrl,
        ]);

        return (bool) $rest->getCurlResponse()['success'];
    }

    /**
     * Remove a tracker
     * Attempting to call this method on a download other than bittorent will fail
     * @param int    $downloadTaskId
     * @param string $announceUrl       (eg: udp://tracker.openbittorrent.com:80)
     * @return bool
     */
    public function remove( $downloadTaskId, $announceUrl) {
        $service = sprintf( self::API_DOWNLOAD_TRACKER_ITEM, $downloadTaskId, $announceUrl);
        $rest = $this->getAuthService( $service);
        $rest->DELETE();

        return (bool) $rest->getCurlResponse()['success'];
    }

    /**
     * Update a tracker
     * Attempting to call this method on a download other than bittorent will fail
     * @param int $downloadTaskId
     * @param string $announceUrl
     * @param models\Download\Tracker $Tracker
     * @return bool
     */
    public function update( $downloadTaskId, $announceUrl, models\Download\Tracker $Tracker) {
        $service = sprintf( self::API_DOWNLOAD_TRACKER_ITEM, $downloadTaskId, $announceUrl);
        $rest = $this->getAuthService( $service);
        $rest->PUT( $Tracker->toArray());

        return (bool) $rest->getCurlResponse()['success'];
    }

}

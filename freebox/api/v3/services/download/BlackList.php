<?php
namespace alphayax\freebox\api\v3\services\download;
use alphayax\freebox\api\v3\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class BlackList
 * @package alphayax\freebox\api\v3\services\download
 * For bittorrent downloads, we use a blacklist to store information about “useless” or broken peers. For instance if a peer is complete and we are trying to seed data, there is no use attempting to connect to this peer again.
 * The download blacklist api allow you to retrieve information about this blacklist, and remove, or add peers to the blacklist.
 * Each DownloadBlacklistEntry can be specific to a torrent, or “global” and apply to any torrent.
 */
class BlackList extends Service {

    const API_DOWNLOAD_ITEM_BLACKLIST        = '/api/v3/downloads/%u/blacklist';
    const API_DOWNLOAD_ITEM_BLACKLIST_EMPTY  = '/api/v3/downloads/%u/blacklist/empty';
    const API_DOWNLOAD_BLACKLIST_HOST        = '/api/v3/downloads/blacklist/%s';
    const API_DOWNLOAD_BLACKLIST             = '/api/v3/downloads/blacklist';

    /**
     * Get the list of blacklist entries for a given download
     * Attempting to call this method on a download other than bittorent will fail.
     * @param $downloadTaskId
     * @return models\Download\BlackListEntry[]
     */
    public function getAllFromDownloadTaskId( $downloadTaskId) {
        $service = sprintf( self::API_DOWNLOAD_ITEM_BLACKLIST, $downloadTaskId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        $BlackListEntry_xs = @$rest->getCurlResponse()['result'] ?: [];
        $BlackListEntries  = [];
        foreach( $BlackListEntry_xs as $BlackListEntry_x) {
            $BlackListEntries[] = new models\Download\BlackListEntry( $BlackListEntry_x);
        }
        return $BlackListEntries;
    }

    /**
     * Empty the blacklist for a given download
     * This call allow to remove all global entries, and entries related to the given download
     * @param $downloadTaskId
     * @return bool
     */
    public function emptyBlackListFromDownloadId( $downloadTaskId) {
        $service = sprintf( self::API_DOWNLOAD_ITEM_BLACKLIST_EMPTY, $downloadTaskId);
        $rest = $this->getAuthService( $service);
        $rest->DELETE();

        return $rest->getCurlResponse()['success'];
    }

    /**
     * Delete a particular blacklist entry
     * @param $host
     * @return bool
     */
    public function removeBlackListEntry( $host) {
        $service = sprintf( self::API_DOWNLOAD_ITEM_BLACKLIST_EMPTY, $host);
        $rest = $this->getAuthService( $service);
        $rest->DELETE();

        return $rest->getCurlResponse()['success'];
    }

    /**
     * Add a blacklist entry
     * @param     $host
     * @param int $expire
     * @return models\Download\BlackListEntry
     */
    public function addBlackListEntry( $host, $expire = 3600) {
        $rest = $this->getAuthService( self::API_DOWNLOAD_BLACKLIST);
        $rest->POST([
            'host'   => $host,
            'expire' => $expire,
        ]);

        return new models\Download\BlackListEntry( $rest->getCurlResponse()['result']);
    }

}

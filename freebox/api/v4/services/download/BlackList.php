<?php

namespace alphayax\freebox\api\v4\services\download;

use alphayax\freebox\api\v4\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class BlackList
 * @package alphayax\freebox\api\v4\services\download
 * For bittorrent downloads, we use a blacklist to store information about “useless” or broken peers. For instance if a peer is complete and we are trying to seed data, there is no use attempting to connect to this peer again.
 * The download blacklist api allow you to retrieve information about this blacklist, and remove, or add peers to the blacklist.
 * Each DownloadBlacklistEntry can be specific to a torrent, or “global” and apply to any torrent.
 */
class BlackList extends ServiceAuth
{
    const API_DOWNLOAD_ITEM_BLACKLIST       = '/api/v4/downloads/%u/blacklist';
    const API_DOWNLOAD_ITEM_BLACKLIST_EMPTY = '/api/v4/downloads/%u/blacklist/empty';
    const API_DOWNLOAD_BLACKLIST_HOST       = '/api/v4/downloads/blacklist/%s';
    const API_DOWNLOAD_BLACKLIST            = '/api/v4/downloads/blacklist';

    /**
     * Get the list of blacklist entries for a given download
     * Attempting to call this method on a download other than bittorent will fail.
     * @param $downloadTaskId
     * @return models\Download\BlackListEntry[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getAllFromDownloadTaskId($downloadTaskId)
    {
        $service = sprintf(self::API_DOWNLOAD_ITEM_BLACKLIST, $downloadTaskId);
        $rest    = $this->callService('GET', $service);

        return $rest->getModels(models\Download\BlackListEntry::class);
    }

    /**
     * Empty the blacklist for a given download
     * This call allow to remove all global entries, and entries related to the given download
     * @param $downloadTaskId
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function emptyBlackListFromDownloadId($downloadTaskId)
    {
        $service = sprintf(self::API_DOWNLOAD_ITEM_BLACKLIST_EMPTY, $downloadTaskId);
        $rest    = $this->callService('DELETE', $service);

        return $rest->getSuccess();
    }

    /**
     * Delete a particular blacklist entry
     * @param $host
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function removeBlackListEntry($host)
    {
        $service = sprintf(self::API_DOWNLOAD_ITEM_BLACKLIST_EMPTY, $host);
        $rest    = $this->callService('DELETE', $service);

        return $rest->getSuccess();
    }

    /**
     * Add a blacklist entry
     * @param     $host
     * @param int $expire
     * @return models\Download\BlackListEntry
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function addBlackListEntry($host, $expire = 3600)
    {
        $rest = $this->callService('POST', self::API_DOWNLOAD_BLACKLIST,[
            'host'   => $host,
            'expire' => $expire,
        ]);

        return $rest->getModel(models\Download\BlackListEntry::class);
    }

}

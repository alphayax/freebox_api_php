<?php

namespace alphayax\freebox\api\v4\services\download;

use alphayax\freebox\api\v4\models;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Feed
 * @package alphayax\freebox\api\v4\services\download
 */
class Feed extends ServiceAuth
{

    const API_DOWNLOAD_FEEDS                     = '/api/v4/downloads/feeds/';
    const API_DOWNLOAD_FEEDS_FETCH               = '/api/v4/downloads/feeds/fetch';
    const API_DOWNLOAD_FEEDS_ITEM                = '/api/v4/downloads/feeds/%u';
    const API_DOWNLOAD_FEEDS_ITEM_FETCH          = '/api/v4/downloads/feeds/%u/fetch';
    const API_DOWNLOAD_FEEDS_ITEMS               = '/api/v4/downloads/feeds/%u/items/';
    const API_DOWNLOAD_FEEDS_ITEMS_ITEM          = '/api/v4/downloads/feeds/%u/items/%u';
    const API_DOWNLOAD_FEEDS_ITEMS_ITEM_DOWNLOAD = '/api/v4/downloads/feeds/%u/items/%u/download';
    const API_DOWNLOAD_FEEDS_ITEMS_MARK_AS_READ  = '/api/v4/downloads/feeds/%u/items/mark_all_as_read';

    /**
     * Get the list of all download Feeds
     * @throws \Exception
     * @return models\Download\Feed\DownloadFeed[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAllFeeds()
    {
        $rest = $this->callService('GET', self::API_DOWNLOAD_FEEDS);

        return $rest->getModels(models\Download\Feed\DownloadFeed::class);
    }

    /**
     * Gets the DownloadFeed with the given id
     * @param int $downloadFeedId
     * @return models\Download\Feed\DownloadFeed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getFeedFromId($downloadFeedId)
    {
        $service = sprintf(self::API_DOWNLOAD_FEEDS_ITEM, $downloadFeedId);
        $rest    = $this->callService('GET',$service);

        return $rest->getModel(models\Download\Feed\DownloadFeed::class);
    }

    /**
     * Add a Download Feed
     * @param int $downloadFeedUrl
     * @return models\Download\Feed\DownloadFeed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function addFeed($downloadFeedUrl)
    {
        $rest = $this->callService('POST', self::API_DOWNLOAD_FEEDS, [
            'url' => $downloadFeedUrl,
        ]);

        return $rest->getModel(models\Download\Feed\DownloadFeed::class);
    }

    /**
     * Delete a Download Feed
     * @param int $downloadFeedId
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function removeFeed($downloadFeedId)
    {
        $service = sprintf(self::API_DOWNLOAD_FEEDS_ITEM, $downloadFeedId);
        $rest    = $this->callService('DELETE', $service);

        return $rest->getSuccess();
    }

    /**
     * Update a Download Feed
     * @param models\Download\Feed\DownloadFeed $downloadFeed
     * @return models\Download\Feed\DownloadFeed
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function updateFeed(models\Download\Feed\DownloadFeed $downloadFeed)
    {
        $service = sprintf(self::API_DOWNLOAD_FEEDS_ITEM, $downloadFeed->getId());
        $rest    = $this->callService('PUT', $service, $downloadFeed);

        return $rest->getModel(models\Download\Feed\DownloadFeed::class);
    }

    /**
     * Remotely fetches the RSS feed and updates it.
     * Note that if the remote feed specifies a TTL, trying to update before the ttl will result in feed_is_recent error
     * @param int $downloadFeedId
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function refreshFeed($downloadFeedId)
    {
        $service = sprintf(self::API_DOWNLOAD_FEEDS_ITEM_FETCH, $downloadFeedId);
        $rest    = $this->callService('POST', $service);

        return $rest->getSuccess();
    }

    /**
     * Remotely fetches the RSS feed and updates it.
     * Note that if the remote feed specifies a TTL, trying to update before the ttl will result in feed_is_recent error
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function refreshFeeds()
    {
        $rest = $this->callService('POST',self::API_DOWNLOAD_FEEDS_FETCH);

        return $rest->getSuccess();
    }

    /**
     * Returns the collection of all DownloadFeedItems for a given DownloadFeed
     * @param $downloadFeedId
     * @return models\Download\Feed\DownloadFeedItem[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getFeedItems($downloadFeedId)
    {
        $service = sprintf(self::API_DOWNLOAD_FEEDS_ITEMS, $downloadFeedId);
        $rest    = $this->callService('GET', $service);

        return $rest->getModels(models\Download\Feed\DownloadFeedItem::class);
    }

    /**
     * Returns the collection of all DownloadFeedItems for a given DownloadFeed
     * @param models\Download\Feed\DownloadFeedItem $DownloadFeedItem
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function updateFeedItem(models\Download\Feed\DownloadFeedItem $DownloadFeedItem)
    {
        $service = sprintf(self::API_DOWNLOAD_FEEDS_ITEMS_ITEM, $DownloadFeedItem->getFeedId(),$DownloadFeedItem->getId());
        $rest    = $this->callService('PUT', $service, $DownloadFeedItem);

        return $rest->getSuccess();
    }

    /**
     * Download the specified feed item
     * @param models\Download\Feed\DownloadFeedItem $DownloadFeedItem
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function downloadFeedItem(models\Download\Feed\DownloadFeedItem $DownloadFeedItem)
    {
        $service = sprintf(self::API_DOWNLOAD_FEEDS_ITEMS_ITEM_DOWNLOAD, $DownloadFeedItem->getFeedId(), $DownloadFeedItem->getId());
        $rest    = $this->callService('POST', $service, $DownloadFeedItem);

        return $rest->getSuccess();
    }

    /**
     * Mark the specified feed id as "Read"
     * @param int $downloadFeedId
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function markFeedAsRead($downloadFeedId)
    {
        $service = sprintf(self::API_DOWNLOAD_FEEDS_ITEMS_MARK_AS_READ, $downloadFeedId);
        $rest    = $this->callService('POST', $service);

        return $rest->getSuccess();
    }

}

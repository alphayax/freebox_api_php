<?php
namespace alphayax\freebox\api\v3\services\download;
use alphayax\freebox\utils\Service;
use alphayax\freebox\api\v3\models;

/**
 * Class Feed
 * @package alphayax\freebox\api\v3\services\download
 */
class Feed extends Service {

    const API_DOWNLOAD_FEEDS                    = '/api/v3/downloads/feeds/';
    const API_DOWNLOAD_FEEDS_FETCH              = '/api/v3/downloads/feeds/fetch';
    const API_DOWNLOAD_FEEDS_ITEM               = '/api/v3/downloads/feeds/%u';
    const API_DOWNLOAD_FEEDS_ITEM_FETCH         = '/api/v3/downloads/feeds/%u/fetch';
    const API_DOWNLOAD_FEEDS_ITEMS              = '/api/v3/downloads/feeds/%u/items/';
    const API_DOWNLOAD_FEEDS_ITEMS_ITEM         = '/api/v3/downloads/feeds/%u/items/%u';
    const API_DOWNLOAD_FEEDS_ITEMS_ITEM_DOWNLOAD= '/api/v3/downloads/feeds/%u/items/%u/download';
    const API_DOWNLOAD_FEEDS_ITEMS_MARK_AS_READ = '/api/v3/downloads/feeds/%u/items/mark_all_as_read';

    /**
     * Get the list of all download Feeds
     * @throws \Exception
     * @return models\Download\Feed\DownloadFeed[]
     */
    public function getAllFeeds(){
        $rest = $this->getAuthService( self::API_DOWNLOAD_FEEDS);
        $rest->GET();

        return $rest->getResultAsArray( models\Download\Feed\DownloadFeed::class);
    }

    /**
     * Gets the DownloadFeed with the given id
     * @param int $downloadFeedId
     * @return models\Download\Feed\DownloadFeed
     */
    public function getFeedFromId( $downloadFeedId){
        $service = sprintf( self::API_DOWNLOAD_FEEDS_ITEM, $downloadFeedId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResult( models\Download\Feed\DownloadFeed::class);
    }

    /**
     * Add a Download Feed
     * @param int $downloadFeedUrl
     * @return models\Download\Feed\DownloadFeed
     */
    public function addFeed( $downloadFeedUrl){
        $rest = $this->getAuthService( self::API_DOWNLOAD_FEEDS);
        $rest->POST([
            'url' => $downloadFeedUrl,
        ]);

        return $rest->getResult( models\Download\Feed\DownloadFeed::class);
    }

    /**
     * Delete a Download Feed
     * @param int $downloadFeedId
     * @return bool
     */
    public function removeFeed( $downloadFeedId){
        $service = sprintf( self::API_DOWNLOAD_FEEDS_ITEM, $downloadFeedId);
        $rest = $this->getAuthService( $service);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Update a Download Feed
     * @param models\Download\Feed\DownloadFeed $downloadFeed
     * @return models\Download\Feed\DownloadFeed
     */
    public function updateFeed( models\Download\Feed\DownloadFeed $downloadFeed){
        $service = sprintf( self::API_DOWNLOAD_FEEDS_ITEM, $downloadFeed->getId());
        $rest = $this->getAuthService( $service);
        $rest->PUT( $downloadFeed);

        return $rest->getResult( models\Download\Feed\DownloadFeed::class);
    }

    /**
     * Remotely fetches the RSS feed and updates it.
     * Note that if the remote feed specifies a TTL, trying to update before the ttl will result in feed_is_recent error
     * @param int $downloadFeedId
     * @return bool
     */
    public function refreshFeed($downloadFeedId){
        $service = sprintf( self::API_DOWNLOAD_FEEDS_ITEM_FETCH, $downloadFeedId);
        $rest = $this->getAuthService( $service);
        $rest->POST();

        return $rest->getSuccess();
    }

    /**
     * Remotely fetches the RSS feed and updates it.
     * Note that if the remote feed specifies a TTL, trying to update before the ttl will result in feed_is_recent error
     * @return bool
     */
    public function refreshFeeds(){
        $rest = $this->getAuthService( self::API_DOWNLOAD_FEEDS_FETCH);
        $rest->POST();

        return $rest->getSuccess();
    }

    /**
     * Returns the collection of all DownloadFeedItems for a given DownloadFeed
     * @param $downloadFeedId
     * @return models\Download\Feed\DownloadFeedItem[]
     */
    public function getFeedItems( $downloadFeedId){
        $service = sprintf( self::API_DOWNLOAD_FEEDS_ITEMS, $downloadFeedId);
        $rest = $this->getAuthService( $service);
        $rest->GET();

        return $rest->getResultAsArray( models\Download\Feed\DownloadFeedItem::class);
    }

    /**
     * Returns the collection of all DownloadFeedItems for a given DownloadFeed
     * @param models\Download\Feed\DownloadFeedItem $DownloadFeedItem
     * @return bool
     */
    public function updateFeedItem( models\Download\Feed\DownloadFeedItem $DownloadFeedItem){
        $service = sprintf( self::API_DOWNLOAD_FEEDS_ITEMS_ITEM, $DownloadFeedItem->getFeedId(), $DownloadFeedItem->getId());
        $rest = $this->getAuthService( $service);
        $rest->PUT( $DownloadFeedItem);

        return $rest->getSuccess();
    }

    /**
     * Download the specified feed item
     * @param models\Download\Feed\DownloadFeedItem $DownloadFeedItem
     * @return bool
     */
    public function downloadFeedItem( models\Download\Feed\DownloadFeedItem $DownloadFeedItem){
        $service = sprintf( self::API_DOWNLOAD_FEEDS_ITEMS_ITEM_DOWNLOAD, $DownloadFeedItem->getFeedId(), $DownloadFeedItem->getId());
        $rest = $this->getAuthService( $service);
        $rest->POST( $DownloadFeedItem);

        return $rest->getSuccess();
    }

    /**
     * Mark the specified feed id as "Read"
     * @param int $downloadFeedId
     * @return bool
     */
    public function markFeedAsRead( $downloadFeedId){
        $service = sprintf( self::API_DOWNLOAD_FEEDS_ITEMS_MARK_AS_READ, $downloadFeedId);
        $rest = $this->getAuthService( $service);
        $rest->POST();

        return $rest->getSuccess();
    }

}

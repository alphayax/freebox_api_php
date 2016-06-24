<?php
namespace alphayax\freebox\api\v3\models\Download\Feed;
use alphayax\freebox\utils\Model;

/**
 * Class DownloadFeedItem
 * @package alphayax\freebox\api\v3\models\Download\Feed
 */
class DownloadFeedItem extends Model {

    /** @var int (Read-only) : id */
    protected $id;

    /** @var int (Read-only) : id of the DownloadFeed */
    protected $feed_id;

    /** @var string (Read-only) : item title */
    protected $title;

    /** @var string (Read-only) : item description */
    protected $desc;

    /** @var string (Read-only) : item author */
    protected $author;

    /** @var string (Read-only) : URL of the RSS feed attachment */
    protected $link;

    /** @var bool : you can mark the item as read manually, or it is marked as read automatically when the item is downloaded */
    protected $is_read;

    /** @var bool (Read-only) : mark downloaded items, automatically set to true when RSS item is downloaded */
    protected $is_downloaded;

    /** @var int timestamp (Read-only) : timestamp of the item creation */
    protected $fetch_ts;

    /** @var int timestamp (Read-only) : item publish timestamp */
    protected $pub_ts;

    /** @var string (Read-only) : enclosure URL (if specified in RSS feed) */
    protected $enclosure_url;

    /** @var string (Read-only) : enclosure mime type (if specified in RSS feed) */
    protected $enclosure_type;

    /** @var int (Read-only) : enclosure size in bytes (if specified in RSS feed) */
    protected $enclosure_length;

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getFeedId() {
        return $this->feed_id;
    }

    /**
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDesc() {
        return $this->desc;
    }

    /**
     * @return string
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getLink() {
        return $this->link;
    }

    /**
     * @return boolean
     */
    public function isRead() {
        return $this->is_read;
    }

    /**
     * @param boolean $is_read
     */
    public function setRead( $is_read) {
        $this->is_read = $is_read;
    }

    /**
     * @return boolean
     */
    public function isIsDownloaded() {
        return $this->is_downloaded;
    }

    /**
     * @return int
     */
    public function getFetchTs() {
        return $this->fetch_ts;
    }

    /**
     * @return int
     */
    public function getPubTs() {
        return $this->pub_ts;
    }

    /**
     * @return string
     */
    public function getEnclosureUrl() {
        return $this->enclosure_url;
    }

    /**
     * @return string
     */
    public function getEnclosureType() {
        return $this->enclosure_type;
    }

    /**
     * @return int
     */
    public function getEnclosureLength() {
        return $this->enclosure_length;
    }

}

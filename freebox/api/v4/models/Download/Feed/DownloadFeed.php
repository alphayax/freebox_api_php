<?php

namespace alphayax\freebox\api\v4\models\Download\Feed;

use alphayax\freebox\utils\Model;

/**
 * Class DownloadFeed
 * @package alphayax\freebox\api\v4\models\Download\Feed
 */
class DownloadFeed extends Model
{
    /** @var int (Read-only) : id */
    protected $id;

    /**
     * @var string (Read-only)
     * @see \alphayax\freebox\api\v4\symbols\Download\Feed\Status
     */
    protected $status;

    /** @var string (Read-only) : Feed URL */
    protected $url;

    /** @var string (Read-only) : Feed title (extracted from the RSS) */
    protected $title;

    /** @var string (Read-only) : Feed description (extracted from the RSS) */
    protected $desc;

    /** @var string (Read-only) : Feed image URL (extracted from the RSS) */
    protected $image_url;

    /** @var int (Read-only) : Number of read items in the feed */
    protected $nb_read;

    /** @var int (Read-only) : Number of unread items in the feed */
    protected $nb_unread;

    /** @var bool : If set to true, the downloader will automatically download new items */
    protected $auto_download;

    /** @var int timestamp (Read-only) : Last time the feed was fetched */
    protected $fetch_ts;

    /** @var int timestamp (Read-only) : Last time the feed was published on remote server */
    protected $pub_ts;

    /** @var string (Read-only) : Error code (same as used in Download or DownloadFile) */
    protected $error;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * @return int
     */
    public function getNbRead()
    {
        return $this->nb_read;
    }

    /**
     * @return int
     */
    public function getNbUnread()
    {
        return $this->nb_unread;
    }

    /**
     * @return boolean
     */
    public function isAutoDownload()
    {
        return $this->auto_download;
    }

    /**
     * @param boolean $auto_download
     */
    public function setAutoDownload($auto_download)
    {
        $this->auto_download = $auto_download;
    }

    /**
     * @return int
     */
    public function getFetchTs()
    {
        return $this->fetch_ts;
    }

    /**
     * @return int
     */
    public function getPubTs()
    {
        return $this->pub_ts;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

}

<?php

namespace alphayax\freebox\api\v4\models\Download\Config;

use alphayax\freebox\utils\Model;

/**
 * Class DownloadConfig
 * @package alphayax\freebox\api\v4\models\Download\Config
 */
class DownloadConfig extends Model
{
    /** @var int : max concurrent download tasks */
    protected $max_downloading_tasks;

    /** @var string : the default path where downloads will be stored (base64 encoded) */
    protected $download_dir;

    /** @var string : special folder that will be monitored. When a new supported file (.nzb, .torrent) is copied in that folder, the task is automatically added to the download queue. (base64 encoded) */
    protected $watch_dir;

    /** @var bool : if set to false, the watch_dir will not be monitored */
    protected $use_watch_dir;

    /** @var DlThrottlingConfig : throttling configuration */
    protected $throttling;

    /** @var DlNewsConfig : newsgroups configuration */
    protected $news;

    /** @var DlBtConfig : bittorrent configuration */
    protected $bt;

    /** @var DlFeedConfig : RSS feed configuration */
    protected $feed;

    /** @var DlBlockListConfig : block list configuration */
    protected $blocklist;

    /**
     * DownloadConfig constructor.
     * @param array $properties_x
     */
    public function __construct(array $properties_x)
    {
        parent::__construct($properties_x);
        $this->initProperty('throttling', DlThrottlingConfig::class);
        $this->initProperty('news', DlNewsConfig::class);
        $this->initProperty('bt', DlBtConfig::class);
        $this->initProperty('feed', DlFeedConfig::class);
        $this->initProperty('blocklist', DlBlockListConfig::class);
    }

    /**
     * @return int
     */
    public function getMaxDownloadingTasks()
    {
        return $this->max_downloading_tasks;
    }

    /**
     * @param int $max_downloading_tasks
     */
    public function setMaxDownloadingTasks($max_downloading_tasks)
    {
        $this->max_downloading_tasks = $max_downloading_tasks;
    }

    /**
     * @return string
     */
    public function getDownloadDir()
    {
        return $this->download_dir;
    }

    /**
     * @param string $download_dir
     */
    public function setDownloadDir($download_dir)
    {
        $this->download_dir = $download_dir;
    }

    /**
     * @return string
     */
    public function getWatchDir()
    {
        return $this->watch_dir;
    }

    /**
     * @param string $watch_dir
     */
    public function setWatchDir($watch_dir)
    {
        $this->watch_dir = $watch_dir;
    }

    /**
     * @return boolean
     */
    public function isUseWatchDir()
    {
        return $this->use_watch_dir;
    }

    /**
     * @param boolean $use_watch_dir
     */
    public function setUseWatchDir($use_watch_dir)
    {
        $this->use_watch_dir = $use_watch_dir;
    }

    /**
     * @return DlThrottlingConfig
     */
    public function getThrottling()
    {
        return $this->throttling;
    }

    /**
     * @param DlThrottlingConfig $throttling
     */
    public function setThrottling(DlThrottlingConfig $throttling)
    {
        $this->throttling = $throttling;
    }

    /**
     * @return DlNewsConfig
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * @param DlNewsConfig $news
     */
    public function setNews(DlNewsConfig $news)
    {
        $this->news = $news;
    }

    /**
     * @return DlBtConfig
     */
    public function getBt()
    {
        return $this->bt;
    }

    /**
     * @param DlBtConfig $bt
     */
    public function setBt(DlBtConfig $bt)
    {
        $this->bt = $bt;
    }

    /**
     * @return DlFeedConfig
     */
    public function getFeed()
    {
        return $this->feed;
    }

    /**
     * @param DlFeedConfig $feed
     */
    public function setFeed(DlFeedConfig $feed)
    {
        $this->feed = $feed;
    }

    /**
     * @return DlBlockListConfig
     */
    public function getBlocklist()
    {
        return $this->blocklist;
    }

    /**
     * @param DlBlockListConfig $blocklist
     */
    public function setBlocklist(DlBlockListConfig $blocklist)
    {
        $this->blocklist = $blocklist;
    }

}

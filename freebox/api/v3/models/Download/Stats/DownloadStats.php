<?php
namespace alphayax\freebox\api\v3\models\Download\Stats;
use alphayax\freebox\api\v3\Model;
use alphayax\freebox\api\v3\models\Download\DlRate;

/**
 * Class Stats
 * @package alphayax\freebox\api\v3\models\Download
 */
class DownloadStats extends Model {

    /** @var  int (Read-only) : total number of tasks */
    protected $nb_tasks;

    /** @var  int (Read-only) : number of stopped tasks */
    protected $nb_tasks_stopped;

    /** @var  int (Read-only) : number of checking tasks */
    protected $nb_tasks_checking;

    /** @var  int (Read-only) : number of queued tasks */
    protected $nb_tasks_queued;

    /** @var  int (Read-only) : number of extracting tasks */
    protected $nb_tasks_extracting;

    /** @var  int (Read-only) : number of done tasks */
    protected $nb_tasks_done;

    /** @var  int (Read-only) : number of repairing tasks */
    protected $nb_tasks_repairing;

    /** @var  int (Read-only) : number of seeding tasks */
    protected $nb_tasks_seeding;

    /** @var  int (Read-only) : number of downloading tasks */
    protected $nb_tasks_downloading;

    /** @var  int (Read-only) : number of error tasks */
    protected $nb_tasks_error;

    /** @var  int (Read-only) : number of stopping tasks */
    protected $nb_tasks_stopping;

    /** @var  int (Read-only) : number of active tasks (checking + queued + extracting + repairing + seeding + downloading) */
    protected $nb_tasks_active;

    /** @var  int (Read-only) : number of RSS feed subscriptions */
    protected $nb_rss;

    /** @var  int (Read-only) : number of unread RSS items */
    protected $nb_rss_items_unread;

    /** @var  int (Read-only) : current receive rate in bytes / second */
    protected $rx_rate;

    /** @var  int (Read-only) : current transmit rate in bytes / second */
    protected $tx_rate;

    /** @var  string (Read-only) : active throttling_mode ( @see DlThrottlingConfig ) */
    protected $throttling_mode;

    /** @var  bool (Read-only) if true, the current throttling mode has been computed using the throttling schedule  if false, the current throttling mode has been manually forced */
    protected $throttling_is_scheduled;

    /** @var  DlRate (Read-only) : current rate for throttling */
    protected $throttling_rate;

    /** @var  NzbConfigStatus (Read-only) : current nzb configuration status */
    protected $nzb_config_status;

    /** @var  bool (Read-only) : is the connection ready */
    protected $conn_ready;

    /** @var  int (Read-only) : number of bittorrent peers */
    protected $nb_peer;

    /** @var  int (Read-only) : number of rules in blocklist */
    protected $blocklist_entries;

    /** @var  int (Read-only) : number of hits in blocklist */
    protected $blocklist_hits;

    /** @var  DhtStats (Read-only) : dht stats */
    protected $dht_stats;

    /**
     * FreeplugNetwork constructor.
     * @param array $properties_x
     */
    public function __construct(array $properties_x){
        parent::__construct( $properties_x);
        $this->initProperty( 'throttling_rate', DlRate::class);
        $this->initProperty( 'nzb_config_status', NzbConfigStatus::class);
        $this->initProperty( 'dht_stats', DhtStats::class);
    }

    /**
     * @return int
     */
    public function getNbTasks() {
        return $this->nb_tasks;
    }

    /**
     * @return int
     */
    public function getNbTasksStopped() {
        return $this->nb_tasks_stopped;
    }

    /**
     * @return int
     */
    public function getNbTasksChecking() {
        return $this->nb_tasks_checking;
    }

    /**
     * @return int
     */
    public function getNbTasksQueued() {
        return $this->nb_tasks_queued;
    }

    /**
     * @return int
     */
    public function getNbTasksExtracting() {
        return $this->nb_tasks_extracting;
    }

    /**
     * @return int
     */
    public function getNbTasksDone() {
        return $this->nb_tasks_done;
    }

    /**
     * @return int
     */
    public function getNbTasksRepairing() {
        return $this->nb_tasks_repairing;
    }

    /**
     * @return int
     */
    public function getNbTasksSeeding() {
        return $this->nb_tasks_seeding;
    }

    /**
     * @return int
     */
    public function getNbTasksDownloading() {
        return $this->nb_tasks_downloading;
    }

    /**
     * @return int
     */
    public function getNbTasksError() {
        return $this->nb_tasks_error;
    }

    /**
     * @return int
     */
    public function getNbTasksStopping() {
        return $this->nb_tasks_stopping;
    }

    /**
     * @return int
     */
    public function getNbTasksActive() {
        return $this->nb_tasks_active;
    }

    /**
     * @return int
     */
    public function getNbRss() {
        return $this->nb_rss;
    }

    /**
     * @return int
     */
    public function getNbRssItemsUnread() {
        return $this->nb_rss_items_unread;
    }

    /**
     * @return int
     */
    public function getRxRate() {
        return $this->rx_rate;
    }

    /**
     * @return int
     */
    public function getTxRate() {
        return $this->tx_rate;
    }

    /**
     * @return string
     */
    public function getThrottlingMode() {
        return $this->throttling_mode;
    }

    /**
     * @return boolean
     */
    public function isThrottlingIsScheduled() {
        return $this->throttling_is_scheduled;
    }

    /**
     * @return DlRate
     */
    public function getThrottlingRate() {
        return $this->throttling_rate;
    }

    /**
     * @return NzbConfigStatus
     */
    public function getNzbConfigStatus() {
        return $this->nzb_config_status;
    }

    /**
     * @return boolean
     */
    public function isConnReady() {
        return $this->conn_ready;
    }

    /**
     * @return int
     */
    public function getNbPeer() {
        return $this->nb_peer;
    }

    /**
     * @return int
     */
    public function getBlocklistEntries() {
        return $this->blocklist_entries;
    }

    /**
     * @return int
     */
    public function getBlocklistHits() {
        return $this->blocklist_hits;
    }

    /**
     * @return DhtStats
     */
    public function getDhtStats() {
        return $this->dht_stats;
    }

}

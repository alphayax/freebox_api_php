<?php
namespace alphayax\freebox\api\v3\models\Download;
use alphayax\freebox\api\v3\Model;

/**
 * Class Tracker
 * @package alphayax\freebox\api\v3\models\Download
 */
class Tracker extends Model {
    
    /** @var string (Read-only) : tracker announce URL */
    protected $announce;

    /** @var bool (Read-only) : true if the tracker is a backup tracker (the downloader won’t connect to this tracker unless the primary tracker fails) */
    protected $is_backup;

    /**
     * @var string (Read-only) : tracker status
     * @see alphayax\freebox\api\v3\symbols\Download\Tracker\Status
     */
    protected $status;

    /** @var int (Read-only) : desired interval between two announces (in seconds) */
    protected $interval;

    /** @var int (Read-only) : minimum interval between two announces (in seconds) */
    protected $min_interval;

    /** @var int (Read-only) : time left before reannounce (in seconds) */
    protected $reannounce_in;

    /** @var int (Read-only) : number of seeders announced on tracker */
    protected $nseeders;

    /** @var int (Read-only) : number of leechers announced on tracker */
    protected $nleechers;

    /** @var bool : is the tracker enabled */
    protected $is_enabled;

    /**
     * @return string
     */
    public function getAnnounce() {
        return $this->announce;
    }

    /**
     * @return boolean
     */
    public function isIsBackup() {
        return $this->is_backup;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getInterval() {
        return $this->interval;
    }

    /**
     * @return int
     */
    public function getMinInterval() {
        return $this->min_interval;
    }

    /**
     * @return int
     */
    public function getReannounceIn() {
        return $this->reannounce_in;
    }

    /**
     * @return int
     */
    public function getNseeders() {
        return $this->nseeders;
    }

    /**
     * @return int
     */
    public function getNleechers() {
        return $this->nleechers;
    }

    /**
     * @return boolean
     */
    public function isIsEnabled() {
        return $this->is_enabled;
    }

    /**
     * @param boolean $is_enabled
     */
    public function setIsEnabled( $is_enabled) {
        $this->is_enabled = $is_enabled;
    }

}

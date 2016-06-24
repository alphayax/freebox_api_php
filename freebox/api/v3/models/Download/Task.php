<?php
namespace alphayax\freebox\api\v3\models\Download;
use alphayax\freebox\utils\Model;

/**
 * Class Task
 * @package alphayax\freebox\api\v3\models\Download
 */
class Task extends Model {

    /** @var int (Read-only) : id */
    protected $id;

    /**
     * @var string (Read-only)
     * @see alphayax\freebox\api\v3\symbols\Download\Task\Type
     */
    protected $type;

    /** @var string (Read-only) */
    protected $name;

    /**
     * @var string
     * @see alphayax\freebox\api\v3\symbols\Download\Task\Status
     */
    protected $status;

    /** @var int (Read-only) : download size (in Bytes) */
    protected $size;

    /** @var int : position in download queue (0 if not queued) */
    protected $queue_pos;

    /**
     * @var string
     * @see alphayax\freebox\api\v3\symbols\Download\Task\IoPriority
     */
    protected $io_priority;

    /** @var int (Read-only) : transmitted bytes (including protocol overhead) */
    protected $tx_bytes;

    /** @var int (Read-only) : received bytes (including protocol overhead) */
    protected $rx_bytes;

    /** @var int (Read-only) : current transmit rate (in byte/s) */
    protected $tx_rate;

    /** @var int (Read-only) : current receive rate (in byte/s) */
    protected $rx_rate;

    /**
     * @var int (Read-only) : transmit percentage (without protocol overhead)
     * To improve precision the value as been scaled by 100 so that a tx_pct of 123 means 1.23%
     */
    protected $tx_pct;

    /**
     * @var int (Read-only) : received percentage (without protocol overhead)
     * To improve precision the value as been scaled by 100 so that a tx_pct of 123 means 1.23%
     */
    protected $rx_pct;

    /** @var string (Read-only) : An error code */
    protected $error;

    /** @var int timestamp (Read-only) : timestamp of the download creation time */
    protected $created_ts;

    /** @var int (Read-only) : estimated remaining download time (in seconds) */
    protected $eta;

    /** @var string (Read-only) : directory where the file(s) will be saved (base64 encoded) */
    protected $download_dir;

    /**
     * @var int (Read-only) Only relevant for bittorrent tasks.
     * Once the transmit ration has been reached the task will stop seeding.
     * The ratio is scaled by 100 to improve resolution.
     * A stop_ratio of 150 means that the task will stop seeding once tx_bytes = 1.5 * rx_bytes.
     */
    protected $stop_ratio;

    /** @var string : (only relevant for nzb) password for extracting downloaded archives */
    protected $archive_password;

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status) {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * @return int
     */
    public function getQueuePos() {
        return $this->queue_pos;
    }

    /**
     * @param int $queue_pos
     */
    public function setQueuePos($queue_pos) {
        $this->queue_pos = $queue_pos;
    }

    /**
     * @return string
     */
    public function getIoPriority() {
        return $this->io_priority;
    }

    /**
     * @param string $io_priority
     */
    public function setIoPriority($io_priority) {
        $this->io_priority = $io_priority;
    }

    /**
     * @return int
     */
    public function getTxBytes() {
        return $this->tx_bytes;
    }

    /**
     * @return int
     */
    public function getRxBytes() {
        return $this->rx_bytes;
    }

    /**
     * @return int
     */
    public function getTxRate() {
        return $this->tx_rate;
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
    public function getTxPct() {
        return $this->tx_pct;
    }

    /**
     * @return int
     */
    public function getRxPct() {
        return $this->rx_pct;
    }

    /**
     * @return string
     */
    public function getError() {
        return $this->error;
    }

    /**
     * @return int
     */
    public function getCreatedTs() {
        return $this->created_ts;
    }

    /**
     * @return int
     */
    public function getEta() {
        return $this->eta;
    }

    /**
     * @return string
     */
    public function getDownloadDir() {
        return $this->download_dir;
    }

    /**
     * @return int
     */
    public function getStopRatio() {
        return $this->stop_ratio;
    }

    /**
     * @return string
     */
    public function getArchivePassword() {
        return $this->archive_password;
    }

    /**
     * @param string $archive_password
     */
    public function setArchivePassword($archive_password) {
        $this->archive_password = $archive_password;
    }

}

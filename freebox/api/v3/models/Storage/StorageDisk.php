<?php
namespace alphayax\freebox\api\v3\models\Storage;
use alphayax\freebox\utils\Model;
use alphayax\freebox\api\v3\symbols;
use alphayax\freebox\api\v3\models;

/**
 * Class StorageDisk
 * @package alphayax\freebox\api\v3\models\Storage
 */
class StorageDisk extends Model {


    /** @var int (Read-only) : the disk id */
    protected $id;

    /**
     * @var string (Read-only)
     * @see symbols\Storage\StorageDisk\Type
     */
    protected $type;

    /**
     * @var string
     * @see symbols\Storage\StorageDisk\State
     */
    protected $state;

    /** @var int (Read-only) : Disk physical connector id */
    protected $connector;

    /** @var int (Read-only) : Disk size (in bytes) */
    protected $total_bytes;

    /**
     * @var int (Read-only) : table_type
     * @see symbols\Storage\StorageDisk\TableType
     */
    protected $table_type;

    /** @var string (Read-only) : Disk model */
    protected $model;

    /** @var string (Read-only) : Disk serial number */
    protected $serial;

    /** @var string (Read-only) : Disk firmware version */
    protected $firmware;

    /** @var int (Read-only) : Disk temperature (when supported) in °C */
    protected $temp;

    /** @var OperationProgress (Read-only) : partition operation progress */
    protected $operation_pct;

    /** @var DiskPartition[] (Read-only) : list of disk partitions */
    protected $partitions;

    /** @var bool (Read-only) : is disk idle (when available) */
    protected $idle;

    /** @var int (Read-only) : disk idle duration (in seconds) (when available) */
    protected $idle_duration;

    /** @var bool (Read-only) : is disk spinning (when available) */
    protected $spinning;

    /** @var int (Read-only) : disk activity duration (in seconds) (when available) */
    protected $active_duration;

    /** @var int (Read-only) : seconds left before disk spin down (in seconds) (when available) */
    protected $time_before_spindown;

    /**
     * StorageDisk constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initPropertyArray( 'partitions', DiskPartition::class);
    }

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return string
     * @see symbols\Storage\StorageDisk\Type
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @return string
     * @see symbols\Storage\StorageDisk\State
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @param string $state
     * @see symbols\Storage\StorageDisk\State
     */
    public function setState( $state) {
        $this->state = $state;
    }

    /**
     * @return int
     */
    public function getConnector() {
        return $this->connector;
    }

    /**
     * @return int
     */
    public function getTotalBytes() {
        return $this->total_bytes;
    }

    /**
     * @return int
     * @see symbols\Storage\StorageDisk\TableType
     */
    public function getTableType() {
        return $this->table_type;
    }

    /**
     * @return string
     */
    public function getModel() {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getSerial() {
        return $this->serial;
    }

    /**
     * @return string
     */
    public function getFirmware() {
        return $this->firmware;
    }

    /**
     * @return int
     */
    public function getTemp() {
        return $this->temp;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\Storage\OperationProgress
     */
    public function getOperationPct() {
        return $this->operation_pct;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\Storage\DiskPartition[] (Read-only)
     */
    public function getPartitions() {
        return $this->partitions;
    }

    /**
     * @return boolean
     */
    public function isIdle() {
        return $this->idle;
    }

    /**
     * @return int
     */
    public function getIdleDuration() {
        return $this->idle_duration;
    }

    /**
     * @return boolean
     */
    public function isSpinning() {
        return $this->spinning;
    }

    /**
     * @return int
     */
    public function getActiveDuration() {
        return $this->active_duration;
    }

    /**
     * @return int
     */
    public function getTimeBeforeSpindown() {
        return $this->time_before_spindown;
    }

}

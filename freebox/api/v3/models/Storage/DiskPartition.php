<?php
namespace alphayax\freebox\api\v3\models\Storage;
use alphayax\freebox\api\v3\Model;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\symbols;

/**
 * Class DiskPartition
 * @package alphayax\freebox\api\v3\models\Storage
 */
class DiskPartition extends Model {

    /** @var int (Read-only) : unique partition id */
    protected $id;

    /** @var int (Read-only) : related disk id */
    protected $disk_id;

    /**
     * @var string
     * @see symbols\Storage\DiskPartition\State
     */
    protected $state;

    /**
     * @var string (Read-only)
     * @see symbols\Storage\DiskPartition\FsType
     */
    protected $fstype;

    /** @var string : partition name */
    protected $label;

    /** @var string (Read-only) : partition mount point */
    protected $path;

    /** @var int (Read-only) : partition size (in bytes) */
    protected $total_bytes;

    /** @var int (Read-only) : partition used space (in bytes) */
    protected $used_bytes;

    /** @var int (Read-only) : partition free space (in bytes) */
    protected $free_bytes;

    /** 
     * @var string (Read-only) : fsck result 
     * @see symbols\Storage\DiskPartition\FsckResult 
     */
    protected $fsck_result;

    /** @var OperationProgress (Read-only) : partition operation progress */
    protected $operation_pct;

    /**
     * DiskPartition constructor.
     * @param array $properties_x
     */
    public function __construct( array $properties_x){
        parent::__construct( $properties_x);
        $this->initProperty( 'operation_pct', OperationProgress::class);
    }

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getDiskId() {
        return $this->disk_id;
    }

    /**
     * @return string
     * @see symbols\Storage\DiskPartition\State
     */
    public function getState() {
        return $this->state;
    }

    /**
     * @param string $state
     * @see symbols\Storage\DiskPartition\State
     */
    public function setState( $state) {
        $this->state = $state;
    }

    /**
     * @return string
     * @see symbols\Storage\DiskPartition\FsType
     */
    public function getFstype() {
        return $this->fstype;
    }

    /**
     * @return string
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel( $label) {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getPath() {
        return base64_decode( $this->path);
    }

    /**
     * @return int
     */
    public function getTotalBytes() {
        return $this->total_bytes;
    }

    /**
     * @return int
     */
    public function getUsedBytes() {
        return $this->used_bytes;
    }

    /**
     * @return int
     */
    public function getFreeBytes() {
        return $this->free_bytes;
    }

    /**
     * @return string
     * @see symbols\Storage\DiskPartition\FsckResult
     */
    public function getFsckResult() {
        return $this->fsck_result;
    }

    /**
     * @return \alphayax\freebox\api\v3\models\Storage\OperationProgress
     */
    public function getOperationPct() {
        return $this->operation_pct;
    }

}

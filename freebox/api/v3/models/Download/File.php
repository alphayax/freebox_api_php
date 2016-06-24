<?php
namespace alphayax\freebox\api\v3\models\Download;
use alphayax\freebox\utils\Model;

/**
 * Class File
 * @package alphayax\freebox\api\v3\models\Download
 */
class File extends Model {

    /** @var string (Read-only) : opaque id */
    protected $id;

    /** @var int (Read-only) : id of the download task */
    protected $task_id;

    /**
     * @var string (Read-only) : file path relative to the download dir
     * @deprecated
     */
    protected $path;

    /** @var string (Read-only) : full filepath on the disk (encoded as in file system api) */
    protected $filepath;

    /** @var string (Read-only) : file name */
    protected $name;

    /** @var string (Read-only) : file mimetype */
    protected $mimetype;

    /** @var int (Read-only) : file size in bytes */
    protected $size;

    /** @var int (Read-only) : received bytes */
    protected $rx;

    /**
     * @var string (Read-only) : file download status
     * @see alphayax\freebox\api\v3\symbols\Download\File\Status
     */
    protected $status;

    /** @var string : file download priority inside the download task */
    protected $priority;

    /**
     * @var string (Read-only) : file error code in case status is error
     * @see alphayax\freebox\api\v3\symbols\Download\File\Error
     */
    protected $error;

    /**
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getTaskId() {
        return $this->task_id;
    }

    /**
     * @return mixed
     * @deprecated
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getFilepath() {
        return base64_decode( $this->filepath);
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
    public function getMimetype() {
        return $this->mimetype;
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
    public function getRx() {
        return $this->rx;
    }

    /**
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getPriority() {
        return $this->priority;
    }

    /**
     * @param string $priority
     */
    public function setPriority( $priority) {
        $this->priority = $priority;
    }

    /**
     * @return string
     */
    public function getError() {
        return $this->error;
    }

}

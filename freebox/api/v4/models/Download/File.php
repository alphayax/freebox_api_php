<?php

namespace alphayax\freebox\api\v4\models\Download;

use alphayax\freebox\utils\Model;

/**
 * Class File
 * @package alphayax\freebox\api\v4\models\Download
 */
class File extends Model
{
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
     * @see \alphayax\freebox\api\v4\symbols\Download\File\Status
     */
    protected $status;


    /** @var string (Read-only) : file error code in case status is error */
    protected $error;

    /**
     * @var string : file download priority inside the download task
     * @see \alphayax\freebox\api\v4\symbols\Download\File\Priority
     */
    protected $priority;

    /**
     * @var string (Read-only) : url to preview downloaded file (only available for bittorrent) as a share link,
     * this url can be use without requiring any form of authentication so that it can be passed as-is to any software.
     */
    protected $preview_url;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     * @return mixed
     * @deprecated
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getFilepath()
    {
        return base64_decode($this->filepath);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getMimetype()
    {
        return $this->mimetype;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return int
     */
    public function getRx()
    {
        return $this->rx;
    }

    /**
     * @return string
     * @see \alphayax\freebox\api\v4\symbols\Download\File\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     * @see \alphayax\freebox\api\v4\symbols\Download\File\Priority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param string $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->preview_url;
    }

}

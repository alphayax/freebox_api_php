<?php
namespace alphayax\freebox\api\v3\models\FileSystem;
use alphayax\freebox\api\v3\Model;

/**
 * Class FileUpload
 * @package alphayax\freebox\api\v3\models\FileSystem
 */
class FileUpload extends Model {

    /** @var string (Read-only) : upload id */
    protected $id;

    /** @var int (Read-only) : Upload file size in bytes */
    protected $size;

    /** @var int (Read-only) : Uploaded bytes */
    protected $uploaded;

    /**
     * @var string enum (Read-only) : upload status can have the following values
     * @see alphayax\freebox\api\v3\symbols\FileSystem\FileUploadStatus
     */
    protected $status;

    /** @var int timestamp (Read-only) : last update of file upload object */
    protected $last_update;

    /** @var string (Read-only) : name of the file uploaded */
    protected $upload_name;


    /** @var string (Read-only) : upload destination directory */
    protected $dirname;

    /**
     * @return string
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @return int
     */
    public function getSize(){
        return $this->size;
    }

    /**
     * @return int
     */
    public function getUploaded(){
        return $this->uploaded;
    }

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\FileSystem\FileUploadStatus
     */
    public function getStatus(){
        return $this->status;
    }

    /**
     * @return int
     */
    public function getLastUpdate(){
        return $this->last_update;
    }

    /**
     * @return string
     */
    public function getUploadName(){
        return $this->upload_name;
    }

    /**
     * @return string
     */
    public function getDirname(){
        return $this->dirname;
    }


}
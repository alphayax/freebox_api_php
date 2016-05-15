<?php
namespace alphayax\freebox\api\v3\models\FileSystem;
use alphayax\freebox\api\v3\Model;

/**
 * Class FileInfo
 * @package alphayax\freebox\api\v3\models\FileSystem
 */
class FileInfo extends Model {

    /** @var string (Read-only) : file path (encoded in base64 as explained in Path Encoding) */
    protected $path;

    /** @var string (Read-only) : file name (in clear text) */
    protected $name;

    /** @var string (Read-only) : file mimetype */
    protected $mimetype;

    /**
     * @var string (Read-only) : The file type
     * @see alphayax\freebox\api\v3\symbols\FileSystem\FileInfoType
     */
    protected $type;

    /** @var int (Read-only) : file size in bytes */
    protected $size;

    /** @var int (Read-only) : file modification timestamp */
    protected $modification;

    /** @var int (Read-only) : display order for natural sort */
    protected $index;

    /** @var boolean (Read-only) : is this file a link */
    protected $link;

    /** @var string (Read-only) : symlink target path
     * (encoded in base64 as explained in Path Encoding)
     * Only present when link is set to true
     */
    protected $target;

    /** @var boolean (Read-only) : should the file be hidden to user */
    protected $hidden;

    /**
     * @var int (Read-only) : number of subfolders
     * Only relevant for dir, only provided if “countSubFolder” parameter is set
     */
    protected $foldercount;

    /**
     * @var int (Read-only) : number of files inside directory
     * Only relevant for dir, only provided if “countSubFolder” parameter is set
     */
    protected $filecount;

    /**
     * @return string
     */
    public function getPath(){
        return base64_decode( $this->path);
    }

    /**
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * @return string
     */
    public function getMimetype(){
        return $this->mimetype;
    }

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\FileSystem\FileInfoType
     */
    public function getType(){
        return $this->type;
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
    public function getModification(){
        return $this->modification;
    }

    /**
     * @return int
     */
    public function getIndex(){
        return $this->index;
    }

    /**
     * @return boolean
     */
    public function isLink(){
        return $this->link;
    }

    /**
     * @return string
     */
    public function getTarget(){
        return base64_decode( $this->target);
    }

    /**
     * @return boolean
     */
    public function isHidden(){
        return $this->hidden;
    }

    /**
     * @return int
     */
    public function getFoldercount(){
        return $this->foldercount;
    }

    /**
     * @return int
     */
    public function getFilecount(){
        return $this->filecount;
    }


}

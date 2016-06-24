<?php
namespace alphayax\freebox\api\v3\models\FileSystem;
use alphayax\freebox\utils\Model;

/**
 * Class FsTask
 * @package alphayax\freebox\api\v3\models\FileSystem
 */
class FsTask extends Model {

    /** @var int (Read-only) : id */
    protected $id;

    /**
     * @var string (Read-only) : The task type
     * @see alphayax\freebox\api\v3\symbols\FileSystem\TaskType
     */
    protected $type;

    /**
     * @var string : The task state
     * @see alphayax\freebox\api\v3\symbols\FileSystem\TaskState
     */
    protected $state;

    /**
     * @var string (Read-only)
     * none	                 : No error
     * archive_read_failed	 : Error reading archive
     * archive_open_failed	 : Error opening archive
     * archive_write_failed	 : Error writing archive
     * chdir_failed	         : Error changing directory
     * dest_is_not_dir	     : The destination is not a directory
     * file_exists	         : File already exists
     * file_not_found	     : File not found
     * mkdir_failed	         : Unable to create directory
     * open_input_failed	 : Error opening input file
     * open_output_failed	 : Error opening output file
     * opendir_failed	     : Error opening directory
     * overwrite_failed	     : Error overwriting file
     * path_too_big	         : Path is too long
     * repair_failed	     : Failed to repair corrupted files
     * rmdir_failed	         : Error removing directory
     * same_file	         : Source and Destination are the same file
     * unlink_failed	     : Error removing file
     * unsupported_file_type : This file type is not supported
     * write_failed	         : Error writing file
     * disk_full	         : Disk is full
     * internal	             : Internal error
     * invalid_format	     : Invalid file format (corrupted ?)
     * incorrect_password	 : Invalid or missing password for extraction
     * permission_denied	 : Permission denied
     * readlink_failed	     : Failed to read the target of a symbolic link
     * symlink_failed	     : Failed to create a symbolic link
     */
    protected $error;

    /** @var int timestamp (Read-only) : task creation timestamp */
    protected $created_ts;

    /** @var int timestamp (Read-only) : task start timestamp */
    protected $started_ts;

    /** @var int timestamp (Read-only) : task end timestamp */
    protected $done_ts;

    /** @var int (Read-only) : task duration in seconds */
    protected $duration;

    /** @var int (Read-only) : task progress in percent (scaled by 100) */
    protected $progress;

    /** @var int (Read-only) : estimated time remaining before the task completion (in seconds) */
    protected $eta;

    /** @var string (Read-only) : current source file (if available) */
    protected $from;

    /** @var string (Read-only) : current destination file (if available) */
    protected $to;

    /** @var int (Read-only) : number of files to process */
    protected $nfiles;

    /** @var int (Read-only) : number of files processed */
    protected $nfiles_done;

    /** @var int (Read-only) : total bytes to process */
    protected $total_bytes;

    /** @var int (Read-only) : number of bytes processed */
    protected $total_bytes_done;

    /** @var int (Read-only) : size of the file currently processed */
    protected $curr_bytes;

    /** @var int (Read-only) : number of bytes processed for the current file */
    protected $curr_bytes_done;

    /** @var int (Read-only) : processing rate in byte/s */
    protected $rate;

    /**
     * @return int
     */
    public function getId(){
        return $this->id;
    }


    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\FileSystem\TaskType
     */
    public function getType(){
        return $this->type;
    }

    /**
     * @return string
     * @see alphayax\freebox\api\v3\symbols\FileSystem\TaskState
     */
    public function getState(){
        return $this->state;
    }

    /**
     * @param string $state
     * @see alphayax\freebox\api\v3\symbols\FileSystem\TaskState
     */
    public function setState( $state){
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getError(){
        return $this->error;
    }

    /**
     * @return int
     */
    public function getCreatedTs(){
        return $this->created_ts;
    }

    /**
     * @return int
     */
    public function getStartedTs(){
        return $this->started_ts;
    }

    /**
     * @return int
     */
    public function getDoneTs(){
        return $this->done_ts;
    }

    /**
     * @return int
     */
    public function getDuration(){
        return $this->duration;
    }

    /**
     * @return int
     */
    public function getProgress(){
        return $this->progress;
    }

    /**
     * @return int
     */
    public function getEta(){
        return $this->eta;
    }

    /**
     * @return string
     */
    public function getFrom(){
        return $this->from;
    }

    /**
     * @return string
     */
    public function getTo(){
        return $this->to;
    }

    /**
     * @return int
     */
    public function getNfiles(){
        return $this->nfiles;
    }

    /**
     * @return int
     */
    public function getNfilesDone(){
        return $this->nfiles_done;
    }

    /**
     * @return int
     */
    public function getTotalBytes(){
        return $this->total_bytes;
    }

    /**
     * @return int
     */
    public function getTotalBytesDone(){
        return $this->total_bytes_done;
    }

    /**
     * @return int
     */
    public function getCurrBytes(){
        return $this->curr_bytes;
    }

    /**
     * @return int
     */
    public function getCurrBytesDone(){
        return $this->curr_bytes_done;
    }

    /**
     * @return int
     */
    public function getRate(){
        return $this->rate;
    }

}

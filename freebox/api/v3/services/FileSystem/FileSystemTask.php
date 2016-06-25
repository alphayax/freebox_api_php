<?php
namespace alphayax\freebox\api\v3\services\FileSystem;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class FileSystemTask
 * @package alphayax\freebox\api\v3\services\FileSystem
 */
class FileSystemTask extends ServiceAuth {

    const API_FS_TASK    = '/api/v3/fs/tasks/';

    /**
     * Retrieve all FS tasks
     * @return models\FileSystem\FsTask[]
     */
    public function getAllTasks(){
        $rest = $this->getService( self::API_FS_TASK);
        $rest->GET();

        return $rest->getResultAsArray( models\FileSystem\FsTask::class);
    }

    /**
     * Retrieve a FS task with the specified id
     * @param int $TaskId
     * @return models\FileSystem\FsTask
     */
    public function getTaskById( $TaskId){
        $rest = $this->getService( self::API_FS_TASK . $TaskId);
        $rest->GET();

        return $rest->getResult( models\FileSystem\FsTask::class);
    }

    /**
     * Delete a FS task
     * @param models\FileSystem\FsTask $FsTask
     * @return bool
     */
    public function deleteTask( models\FileSystem\FsTask $FsTask){
        return $this->deleteTaskById( $FsTask->getId());
    }

    /**
     * Delete a FS task with the specified id
     * @param int $TaskId
     * @return bool
     */
    public function deleteTaskById( $TaskId){
        $rest = $this->getService( self::API_FS_TASK . $TaskId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Update a FS task
     * @param models\FileSystem\FsTask $FsTask
     * @return bool
     */
    public function updateTask( models\FileSystem\FsTask $FsTask){
        $rest = $this->getService( self::API_FS_TASK . $FsTask->getId());
        $rest->PUT( $FsTask);

        return $rest->getSuccess();
    }

}

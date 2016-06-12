<?php
namespace alphayax\freebox\api\v3\services\FileSystem;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;


/**
 * Class FileSystemTask
 * @package alphayax\freebox\api\v3\services\FileSystem
 */
class FileSystemTask extends Service {

    const API_FS_TASK    = '/api/v3/fs/tasks/';

    /**
     * @throws \Exception
     * @return models\FileSystem\FsTask[]
     */
    public function getAllTasks(){
        $rest = $this->getAuthService( self::API_FS_TASK);
        $rest->GET();

        return $rest->getResultAsArray( models\FileSystem\FsTask::class);
    }

    /**
     * @param int $TaskId
     * @return models\FileSystem\FsTask
     */
    public function getTaskById( $TaskId){
        $rest = $this->getAuthService( self::API_FS_TASK . $TaskId);
        $rest->GET();

        return $rest->getResult( models\FileSystem\FsTask::class);
    }

    /**
     * @param models\FileSystem\FsTask $FsTask
     * @return bool
     */
    public function deleteTask( models\FileSystem\FsTask $FsTask){
        return $this->deleteTaskById( $FsTask->getId());
    }

    /**
     * @param int $TaskId
     * @return bool
     */
    public function deleteTaskById( $TaskId){
        $rest = $this->getAuthService( self::API_FS_TASK . $TaskId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * @param models\FileSystem\FsTask $FsTask
     * @return bool
     */
    public function updateTask( models\FileSystem\FsTask $FsTask){
        $rest = $this->getAuthService( self::API_FS_TASK . $FsTask->getId());
        $rest->PUT( $FsTask);

        return $rest->getSuccess();
    }

}

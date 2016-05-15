<?php
namespace alphayax\freebox\api\v3\services\FileSystem;
use alphayax\freebox\api\v3\models\FileSystem\FsTask;
use alphayax\freebox\api\v3\Service;


/**
 * Class FileSystemTask
 * @package alphayax\freebox\api\v3\services\FileSystem
 */
class FileSystemTask extends Service {

    const API_FS_TASK    = '/api/v3/fs/tasks/';

    /**
     * @throws \Exception
     * @return FsTask[]
     */
    public function getAllTasks(){
        $rest = $this->getAuthService( self::API_FS_TASK);
        $rest->GET();

        $FsTask_xs = $rest->getCurlResponse()['result'];
        $FsTasks   = [];
        foreach( $FsTask_xs as $fsTask_x) {
            $FsTasks[] = new FsTask( $fsTask_x);
        }
        return $FsTasks;
    }

    /**
     * @param int $TaskId
     * @return FsTask
     */
    public function getTaskById( $TaskId){
        $rest = $this->getAuthService( self::API_FS_TASK . $TaskId);
        $rest->GET();

        return new FsTask( $rest->getCurlResponse()['result']);
    }

    /**
     * @param FsTask $FsTask
     * @return bool
     */
    public function deleteTask( FsTask $FsTask){
        return $this->deleteTaskById( $FsTask->getId());
    }

    /**
     * @param int $TaskId
     * @return bool
     */
    public function deleteTaskById( $TaskId){
        $rest = $this->getAuthService( self::API_FS_TASK . $TaskId);
        $rest->DELETE();

        return $rest->getCurlResponse()['success'];
    }

    /**
     * @param FsTask $FsTask
     * @return bool
     */
    public function updateTask( FsTask $FsTask){
        $rest = $this->getAuthService( self::API_FS_TASK . $FsTask->getId());
        $rest->PUT( $FsTask->toArray());

        return $rest->getCurlResponse()['success'];
    }

}

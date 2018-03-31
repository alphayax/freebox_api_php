<?php

namespace alphayax\freebox\api\v4\services\FileSystem;

use alphayax\freebox\api\v4\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class FileSystemTask
 * @package alphayax\freebox\api\v4\services\FileSystem
 */
class FileSystemTask extends ServiceAuth
{
    const API_FS_TASK = '/api/v4/fs/tasks/';

    /**
     * Retrieve all FS tasks
     * @return models\FileSystem\FsTask[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getAllTasks()
    {
        $result = $this->callService('GET', self::API_FS_TASK);

        return $result->getModels(models\FileSystem\FsTask::class);
    }

    /**
     * Retrieve a FS task with the specified id
     * @param int $taskId
     * @return models\FileSystem\FsTask
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getTaskById($taskId)
    {
        $result = $this->callService('GET', self::API_FS_TASK . $taskId);

        return $result->getModel(models\FileSystem\FsTask::class);
    }

    /**
     * Delete a FS task
     * @param models\FileSystem\FsTask $FsTask
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function deleteTask(models\FileSystem\FsTask $FsTask)
    {
        return $this->deleteTaskById($FsTask->getId());
    }

    /**
     * Delete a FS task with the specified id
     * @param int $taskId
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function deleteTaskById($taskId)
    {
        $result = $this->callService('DELETE', self::API_FS_TASK . $taskId);

        return $result->getSuccess();
    }

    /**
     * Update a FS task
     * @param models\FileSystem\FsTask $FsTask
     * @return bool
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateTask(models\FileSystem\FsTask $FsTask)
    {
        $result = $this->callService('PUT',self::API_FS_TASK . $FsTask->getId(), $FsTask);

        return $result->getSuccess();
    }

}

<?php

namespace alphayax\freebox\api\v4\services\FileSystem;

use alphayax\freebox\api\v4\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class FileUpload
 * @package alphayax\freebox\api\v4\services\FileSystem
 */
class FileUpload extends ServiceAuth
{
    const API_UPLOAD        = '/api/v4/upload/';
    const API_UPLOAD_SEND   = '/api/v4/upload/%u/send';
    const API_UPLOAD_CANCEL = '/api/v4/upload/%u/cancel';
    const API_UPLOAD_CLEAN  = '/api/v4/upload/clean';

    // TODO : Check how to implement websocket UPLOAD API

    /**
     * Get the list of uploads
     * @return models\FileSystem\FileUpload[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getAll()
    {
        $rest = $this->callService('GET', self::API_UPLOAD);

        return $rest->getModels(models\FileSystem\FileUpload::class);
    }

    /**
     * Track an upload status
     * @param int $FileUploadId
     * @return models\FileSystem\FileUpload
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getFromId($FileUploadId)
    {
        $rest = $this->callService('GET', self::API_UPLOAD . $FileUploadId);

        return $rest->getModel(models\FileSystem\FileUpload::class);
    }

    /**
     * Cancel the given FileUpload closing the connection
     * The upload status must be in_progress
     * @param int $FileUploadId
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function cancelFromId($FileUploadId)
    {
        $Service = sprintf(self::API_UPLOAD_CANCEL, $FileUploadId);
        $rest    = $this->callService('DELETE', $Service);

        return $rest->getSuccess();
    }

    /**
     * Delete the given FileUpload closing the connection if needed
     * @param int $FileUploadId
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function deleteFromId($FileUploadId)
    {
        $rest = $this->callService('DELETE', self::API_UPLOAD . $FileUploadId);

        return $rest->getSuccess();
    }

    /**
     * Deletes all the FileUpload not in_progress
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function cleanTerminated()
    {
        $rest = $this->callService('DELETE', self::API_UPLOAD_CLEAN);

        return $rest->getSuccess();
    }

}

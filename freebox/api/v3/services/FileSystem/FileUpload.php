<?php
namespace alphayax\freebox\api\v3\services\FileSystem;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;


/**
 * Class FileUpload
 * @package alphayax\freebox\api\v3\services\FileSystem
 */
class FileUpload extends Service {

    const API_UPLOAD        = '/api/v3/upload/';
    const API_UPLOAD_SEND   = '/api/v3/upload/%u/send';
    const API_UPLOAD_CANCEL = '/api/v3/upload/%u/cancel';
    const API_UPLOAD_CLEAN  = '/api/v3/upload/clean';

    /**
     * Create a file upload authorization
     * @param string $dirName
     * @param string $FileName
     * @return int The new upload authorization id
     */
    public function createAuthorization( $dirName, $FileName){
        $rest = $this->getAuthService( self::API_UPLOAD);
        $rest->POST([
            'dirname'       => base64_encode( $dirName),
            'upload_name'   => $FileName,
        ]);

        return (int) $rest->getResult()['id'];
    }

    /**
     * Send the content of the FileUpload task
     * @param int    $FileUploadTaskId
     * @param string $fileToUpload_afi
     * @return bool
     */
    public function uploadFile( $FileUploadTaskId, $fileToUpload_afi){
        $Service = sprintf( self::API_UPLOAD_SEND, $FileUploadTaskId);
        $rest = $this->getAuthService( $Service);
        $rest->setContentType_MultipartFormData();
        $rest->POST([
            basename( $fileToUpload_afi) => new \CurlFile( $fileToUpload_afi),
        ]);

        return $rest->getSuccess();
    }

    /**
     * Get the list of uploads
     * @return models\FileSystem\FileUpload[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_UPLOAD);
        $rest->GET();

        return $rest->getResultAsArray( models\FileSystem\FileUpload::class);
    }

    /**
     * Track an upload status
     * @param int $FileUploadId
     * @return models\FileSystem\FileUpload
     */
    public function getFromId( $FileUploadId){
        $rest = $this->getAuthService( self::API_UPLOAD . $FileUploadId);
        $rest->GET();

        return $rest->getResult( models\FileSystem\FileUpload::class);
    }

    /**
     * Cancel the given FileUpload closing the connection
     * The upload status must be in_progress
     * @param int $FileUploadId
     * @return bool
     */
    public function cancelFromId( $FileUploadId){
        $Service = sprintf( self::API_UPLOAD_CANCEL, $FileUploadId);
        $rest = $this->getAuthService( $Service);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Delete the given FileUpload closing the connection if needed
     * @param int $FileUploadId
     * @return bool
     */
    public function deleteFromId( $FileUploadId){
        $rest = $this->getAuthService( self::API_UPLOAD . $FileUploadId);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Deletes all the FileUpload not in_progress
     * @return bool
     */
    public function cleanTerminated(){
        $rest = $this->getAuthService( self::API_UPLOAD_CLEAN);
        $rest->DELETE();

        return $rest->getSuccess();
    }

}

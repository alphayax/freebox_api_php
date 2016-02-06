<?php
namespace alphayax\freebox\api\v3\services\download;
use alphayax\freebox\api\v3\Service;


/**
 * Class Download
 * @package alphayax\freebox\api\v3\services\config
 */
class Download extends Service {

    const API_DOWNLOAD        = '/api/v3/downloads/';
    const API_DOWNLOAD_LOG    = '/api/v3/downloads/%s/log/';
    const API_DOWNLOAD_ERASE  = '/api/v3/downloads/%s/erase/';
    const API_DOWNLOAD_ADD    = '/api/v3/downloads/add/';

    /**
     * Get the current system info
     * @throws \Exception
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_DOWNLOAD);
        $rest->GET();
        return $rest->getCurlResponse()['result'];
    }

    /**
     * Get the current system info
     * @param int $download_id
     * @return
     */
    public function getFromId( $download_id){
        $rest = $this->getAuthService( self::API_DOWNLOAD . $download_id);
        $rest->GET();
        return $rest->getCurlResponse()['result'];
    }

    /**
     * Get the current system info
     * @param int $download_id
     * @return
     */
    public function getLogFromId( $download_id){
        $logService = sprintf( self::API_DOWNLOAD_LOG, $download_id);
        $rest = $this->getAuthService( $logService);
        $rest->GET();
        return $rest->getCurlResponse()['result'];
    }


    /**
     * Delete a download task (conserve data)
     * @param int $download_id
     * @return
     */
    public function deleteFromId( $download_id){
        $rest = $this->getAuthService( self::API_DOWNLOAD . $download_id);
        $rest->DELETE();
        return $rest->getCurlResponse()['result'];
    }

    /**
     * Delete a download task (erase data)
     * @param int $download_id
     * @return
     */
    public function eraseFromId( $download_id){
        $eraseService = sprintf( self::API_DOWNLOAD_ERASE, $download_id);
        $rest = $this->getAuthService( $eraseService);
        $rest->DELETE();
        return $rest->getCurlResponse()['result'];
    }


    /**
     * Delete a download task (erase data)
     * @param int $download_id
     * @param array $data
     * @return
     */
    public function updateFromId( $download_id, $data){
        $eraseService = sprintf( self::API_DOWNLOAD_ERASE, $download_id);
        $rest = $this->getAuthService( $eraseService);
        $rest->PUT( $data);
        return $rest->getCurlResponse()['result'];
    }


}

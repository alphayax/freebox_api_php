<?php
namespace alphayax\freebox\api\v3\services\download;
use alphayax\freebox\api\v3\models;
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
    const API_DOWNLOAD_STATS  = '/api/v3/downloads/stats';

    /**
     * Returns the collection of all Download tasks
     * @throws \Exception
     * @return models\Download\Task[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_DOWNLOAD);
        $rest->GET();

        $DownloadTask_xs = @$rest->getCurlResponse()['result'] ?: [];
        $DownloadTasks   = [];
        foreach( $DownloadTask_xs as $DownloadTask_x) {
            $DownloadTasks[] = new models\Download\Task( $DownloadTask_x);
        }
        return $DownloadTasks;
    }

    /**
     * Returns the Download task with the given id
     * @param int $download_id
     * @return models\Download\Task
     */
    public function getFromId( $download_id){
        $rest = $this->getAuthService( self::API_DOWNLOAD . $download_id);
        $rest->GET();

        return new models\Download\Task( $rest->getCurlResponse()['result']);
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

        return $rest->getCurlResponse()['success'];
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

        return $rest->getCurlResponse()['success'];
    }


    /**
     * Update a download task
     * @param models\Download\Task $downloadTask
     * @return models\Download\Task
     */
    public function update( models\Download\Task $downloadTask){
        $eraseService = sprintf( self::API_DOWNLOAD_ERASE, $downloadTask->getId());
        $rest = $this->getAuthService( $eraseService);
        $rest->PUT( $downloadTask->toArray());

        return new models\Download\Task( $rest->getCurlResponse()['result']);
    }

    /**
     * @param string $download_url
     * @param string $download_dir
     * @param bool|false $recursive
     * @param null $username
     * @param null $password
     * @param null $archive_password
     * @param null $cookies
     * @return int Download Id
     */
    public function addFromUrl( $download_url, $download_dir = null, $recursive = false, $username = null, $password = null, $archive_password = null, $cookies = null){
        $this->addFromUrls( [$download_url], $download_dir, $recursive, $username, $password, $archive_password, $cookies);
    }

    /**
     * @param array $download_urls A list of URL
     * @param string $download_dir The download destination directory (optional: will use the configuration download_dir by default)
     * @param bool $recursive If true the download will be recursive
     * @param string $username Auth username (optional)
     * @param string $password Auth password (optional)
     * @param string $archive_password The password required to extract downloaded content (only relevant for nzb)
     * @param string $cookies The http cookies (to be able to pass session cookies along with url)
     * @return int Download Id
     * @throws \Exception
     */
    public function addFromUrls( $download_urls = [], $download_dir = null, $recursive = false, $username = null, $password = null, $archive_password = null, $cookies = null){
        $params = [];

        if( empty( $download_urls)){
            throw new \Exception( 'At lease one url is needed');
        }
        if( count( $download_urls) == 1){
            $params['download_url'] = $download_urls[0];
        } else {
            $params['download_url_list'] = implode( PHP_EOL, $download_urls);
        }

        if( ! empty( $download_dir)){
            $params['download_dir'] = base64_encode( $download_dir);
        }

        if( ! empty( $recursive)){
            $params['download_dir'] = $recursive;
        }

        if( ! empty( $username)){
            $params['username'] = $username;
            $params['password'] = $password;
        }

        if( ! empty( $archive_password)){
            $params['archive_password'] = $archive_password;
        }

        if( ! empty( $cookies)){
            $params['cookies'] = $cookies;
        }

        $data = http_build_query( $params);

        $rest = $this->getAuthService( self::API_DOWNLOAD_ADD);
        $rest->setContentType_XFormURLEncoded();
        $rest->POST( $data);
        $response = $rest->getCurlResponse();

        return $response['result']['id'];
    }

    /**
     * @param $download_file_rdi
     * @param string $download_dir_rdi
     * @param string $archive_password
     * @return bool
     */
    public function addFromFile( $download_file_rdi, $download_dir_rdi = '', $archive_password = ''){
        $rest = $this->getAuthService( self::API_DOWNLOAD_ADD);
        $rest->setContentType_MultipartFormData();
        $rest->POST([
            'download_file'     => new \CURLFile( $download_file_rdi),
            'download_dir'      => base64_encode( $download_dir_rdi),
            'archive_password'  => $archive_password,
        ]);

        return $rest->getCurlResponse()['result']['id'];
    }



    /**
     * Returns the Download task with the given id
     * @return models\Download\Task
     */
    public function getStats( ){
        $rest = $this->getAuthService( self::API_DOWNLOAD_STATS);
        $rest->GET();

        return new models\Download\Stats\DownloadStats( $rest->getCurlResponse()['result']);
    }

}

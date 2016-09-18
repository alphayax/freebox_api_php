<?php
namespace alphayax\freebox\api\v3\services\download;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class Download
 * @package alphayax\freebox\api\v3\services\config
 */
class Download extends ServiceAuth {

    const API_DOWNLOAD        = '/api/v3/downloads/';
    const API_DOWNLOAD_LOG    = '/api/v3/downloads/%s/log/';
    const API_DOWNLOAD_ERASE  = '/api/v3/downloads/%s/erase/';
    const API_DOWNLOAD_ADD    = '/api/v3/downloads/add/';
    const API_DOWNLOAD_STATS  = '/api/v3/downloads/stats';
    const API_DOWNLOAD_FILES  = '/api/v3/downloads/%u/files';

    /**
     * Returns the collection of all Download tasks
     * @throws \Exception
     * @return models\Download\Task[]
     */
    public function getAll(){
        $rest = $this->getService( self::API_DOWNLOAD);
        $rest->GET();

        return $rest->getResultAsArray( models\Download\Task::class);
    }

    /**
     * Returns the Download task with the given id
     * @param int $download_id
     * @return models\Download\Task
     */
    public function getFromId( $download_id){
        $rest = $this->getService( self::API_DOWNLOAD . $download_id);
        $rest->GET();

        return $rest->getResult( models\Download\Task::class);
    }

    /**
     * Get the current system info
     * @param int $download_id
     * @return string
     */
    public function getLogFromId( $download_id){
        $logService = sprintf( self::API_DOWNLOAD_LOG, $download_id);
        $rest = $this->getService( $logService);
        $rest->GET();

        return $rest->getResult();
    }


    /**
     * Delete a download task (conserve data)
     * @param int $download_id
     * @return bool
     */
    public function deleteFromId( $download_id){
        $rest = $this->getService( self::API_DOWNLOAD . $download_id);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Delete a download task (erase data)
     * @param int $download_id
     * @return bool
     */
    public function eraseFromId( $download_id){
        $eraseService = sprintf( self::API_DOWNLOAD_ERASE, $download_id);
        $rest = $this->getService( $eraseService);
        $rest->DELETE();

        return $rest->getSuccess();
    }


    /**
     * Update a download task
     * @param models\Download\Task $downloadTask
     * @return models\Download\Task
     */
    public function update( models\Download\Task $downloadTask){
        $rest = $this->getService( self::API_DOWNLOAD . $downloadTask->getId());
        $rest->PUT( $downloadTask);

        return $rest->getResult( models\Download\Task::class);
    }

    /**
     * Add a download task with the specified URL
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
     * Add a download task with all the specified URLs
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

        $rest = $this->getService( self::API_DOWNLOAD_ADD);
        $rest->setContentType_XFormURLEncoded();
        $rest->POST( $data);

        return $rest->getResult()['id'];
    }

    /**
     * Add a download task with the specified file (torrent, nzb...)
     * @param $download_file_rdi
     * @param string $download_dir_rdi
     * @param string $archive_password
     * @return int
     */
    public function addFromFile( $download_file_rdi, $download_dir_rdi = '', $archive_password = ''){
        $rest = $this->getService( self::API_DOWNLOAD_ADD);
        $rest->setContentType_MultipartFormData();
        $rest->POST([
            'download_file'     => new \CURLFile( $download_file_rdi),
            'download_dir'      => base64_encode( $download_dir_rdi),
            'archive_password'  => $archive_password,
        ]);

        return $rest->getResult()['id'];
    }

    /**
     * Returns the Download task with the given id
     * @return models\Download\Stats\DownloadStats
     */
    public function getStats(){
        $rest = $this->getService( self::API_DOWNLOAD_STATS);
        $rest->GET();

        return $rest->getResult( models\Download\Stats\DownloadStats::class);
    }

    /**
     * Returns the downloaded files with the given task id
     * @param int $taskId
     * @return models\Download\File[]
     */
    public function getFilesFromId( $taskId){
        $Service = sprintf( self::API_DOWNLOAD_FILES, $taskId);
        $rest = $this->getService( $Service);
        $rest->GET();

        return $rest->getResultAsArray( models\Download\File::class);
    }

    /**
     * Update a download priority
     * @param int $downloadTaskId
     * @param string $FileId
     * @param string $Priority
     * @see alphayax\freebox\api\v3\symbols\Download\File\Priority
     * @return bool
     */
    public function updateFilePriority( $downloadTaskId, $FileId, $Priority){
        $Service = sprintf( self::API_DOWNLOAD_FILES, $downloadTaskId);
        $rest = $this->getService( $Service . DIRECTORY_SEPARATOR . $FileId);
        $rest->PUT([
            'priority'  => $Priority,
        ]);

        return $rest->getSuccess();
    }

}

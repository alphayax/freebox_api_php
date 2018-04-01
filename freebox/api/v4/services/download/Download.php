<?php

namespace alphayax\freebox\api\v4\services\download;

use alphayax\freebox\api\v4\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class Download
 * @package alphayax\freebox\api\v4\services\config
 */
class Download extends ServiceAuth
{

    const API_DOWNLOAD        = '/api/v4/downloads/';
    const API_DOWNLOAD_LOG    = '/api/v4/downloads/%s/log/';
    const API_DOWNLOAD_ERASE  = '/api/v4/downloads/%s/erase/';
    const API_DOWNLOAD_ADD    = '/api/v4/downloads/add/';
    const API_DOWNLOAD_STATS  = '/api/v4/downloads/stats';
    const API_DOWNLOAD_FILES  = '/api/v4/downloads/%u/files';
    const API_DOWNLOAD_PIECES = '/api/v4/downloads/%u/pieces';

    /**
     * Returns the collection of all Download tasks
     * @throws \Exception
     * @return models\Download\Task[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAll()
    {
        $result = $this->callService('GET', self::API_DOWNLOAD);

        return $result->getModels(models\Download\Task::class);
    }

    /**
     * Returns the Download task with the given id
     * @param int $download_id
     * @return models\Download\Task
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getFromId($download_id)
    {
        $result = $this->callService('GET', self::API_DOWNLOAD . $download_id);

        return $result->getModel(models\Download\Task::class);
    }

    /**
     * Delete a download task (conserve data)
     * @param int $download_id
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function deleteFromId($download_id)
    {
        $result = $this->callService('DELETE', self::API_DOWNLOAD . $download_id);

        return $result->getSuccess();
    }

    /**
     * Delete a download task (erase data)
     * @param int $download_id
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function eraseFromId($download_id)
    {
        $eraseService = sprintf(self::API_DOWNLOAD_ERASE, $download_id);
        $rest         = $this->callService('DELETE', $eraseService);

        return $rest->getSuccess();
    }

    /**
     * Update a download task
     * @param models\Download\Task $downloadTask
     * @return models\Download\Task
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function update(models\Download\Task $downloadTask)
    {
        $rest = $this->callService('PUT',self::API_DOWNLOAD . $downloadTask->getId(), $downloadTask);

        return $rest->getModel(models\Download\Task::class);
    }

    /**
     * Get the current system info
     * @param int $download_id
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getLogFromId($download_id)
    {
        $logService = sprintf(self::API_DOWNLOAD_LOG, $download_id);
        $result     = $this->callService('GET', $logService);

        return $result->getResult();
    }

    /**
     * Add a download task with the specified URL
     *
     * You can start a recursive download by setting the recursive parameter. The downloader will then extract links
     * from each downloaded html page and continue downloading files on the same domain and on the same root path.
     *
     * This can be used to download all the files on a directory index.
     * @param string     $download_url Supported URL scheme are http://, ftp://, magnet:
     * @param string     $download_dir
     * @param bool|false $recursive
     * @param null       $username
     * @param null       $password
     * @param null       $archive_password
     * @param null       $cookies
     * @return int Download Id
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addFromUrl(
        $download_url,
        $download_dir = null,
        $recursive = false,
        $username = null,
        $password = null,
        $archive_password = null,
        $cookies = null
    ) {
        return $this->addFromUrls([$download_url], $download_dir, $recursive, $username, $password, $archive_password, $cookies);
    }

    /**
     * Add a download task with all the specified URLs
     * @param array  $download_urls    A list of URL
     * @param string $download_dir     The download destination directory (optional: will use the configuration download_dir by default)
     * @param bool   $recursive        If true the download will be recursive
     * @param string $username         Auth username (optional)
     * @param string $password         Auth password (optional)
     * @param string $archive_password The password required to extract downloaded content (only relevant for nzb)
     * @param string $cookies          The http cookies (to be able to pass session cookies along with url)
     * @return int Download Id
     * @throws \Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addFromUrls(
        $download_urls = [],
        $download_dir = null,
        $recursive = false,
        $username = null,
        $password = null,
        $archive_password = null,
        $cookies = null
    ) {
        $params = [];

        if (empty($download_urls)) {
            throw new \Exception('At lease one url is needed');
        }
        if (count($download_urls) == 1) {
            $params['download_url'] = $download_urls[0];
        } else {
            $params['download_url_list'] = implode(PHP_EOL, $download_urls);
        }

        if ( ! empty($download_dir)) {
            $params['download_dir'] = base64_encode($download_dir);
        }

        if ( ! empty($recursive)) {
            $params['download_dir'] = $recursive;
        }

        if ( ! empty($username)) {
            $params['username'] = $username;
            $params['password'] = $password;
        }

        if ( ! empty($archive_password)) {
            $params['archive_password'] = $archive_password;
        }

        if ( ! empty($cookies)) {
            $params['cookies'] = $cookies;
        }

        $data = http_build_query($params);

        $rest = $this->callServiceViaForm('POST', self::API_DOWNLOAD_ADD, $data);

        return $rest->getResult()['id'];
    }

    /**
     * Add a download task with the specified file (torrent, nzb...)
     * @param        $download_file_rdi
     * @param string $download_dir_rdi
     * @param string $archive_password
     * @return int
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addFromFile($download_file_rdi, $download_dir_rdi = '', $archive_password = '')
    {
        $rest = $this->callServiceViaMultipart('POST', self::API_DOWNLOAD_ADD,[
            'download_file'    => fopen($download_file_rdi, 'r'),
            'download_dir'     => base64_encode($download_dir_rdi),
            'archive_password' => $archive_password,
        ]);

        return $rest->getResult()['id'];
    }

    /**
     * Returns the Download task with the given id
     * @return models\Download\Stats\DownloadStats
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getStats()
    {
        $result = $this->callService('GET', self::API_DOWNLOAD_STATS);

        return $result->getModel(models\Download\Stats\DownloadStats::class);
    }

    /**
     * Returns the downloaded files with the given task id
     * @param int $taskId
     * @return models\Download\File[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getFilesFromId($taskId)
    {
        $Service = sprintf(self::API_DOWNLOAD_FILES, $taskId);
        $rest    = $this->callService('GET', $Service);

        return $rest->getModels(models\Download\File::class);
    }

    /**
     * Update a download priority
     * @param int    $downloadTaskId
     * @param string $FileId
     * @param string $Priority
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     * @see \alphayax\freebox\api\v4\symbols\Download\File\Priority
     */
    public function updateFilePriority($downloadTaskId, $FileId, $Priority)
    {
        $Service = sprintf(self::API_DOWNLOAD_FILES, $downloadTaskId);
        $rest    = $this->callService('PUT',$Service . DIRECTORY_SEPARATOR . $FileId, [
           'priority' => $Priority,
       ]);

        return $rest->getSuccess();
    }

    /**
     * Get the pieces status a given download
     *
     * Each Torrent is split in ‘pieces’ of fixed size.
     * The Download Piece Api allow tracking the download state of each pieces of a Torrent
     *
     * The result value is a string, with each character representing a piece status. Piece status can be:
     * X	piece is complete
     *      piece is currently downloading
     * .	piece is wanted but not downloading yet
     *      piece is not wanted and will not be downloaded
     * /	piece is downloading with high priority as it is needed for file preview
     * U	piece is scheduled with high priority as it is needed for file preview
     *
     * @param $taskId
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getPiecesFromId($taskId)
    {
        $Service = sprintf(self::API_DOWNLOAD_PIECES, $taskId);
        $rest    = $this->callService('GET', $Service);

        return $rest->getResult();
    }
}

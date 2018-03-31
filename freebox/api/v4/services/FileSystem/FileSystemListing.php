<?php

namespace alphayax\freebox\api\v4\services\FileSystem;

use alphayax\freebox\api\v4\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class FileSystemListing
 * @package alphayax\freebox\api\v4\services\FileSystem
 */
class FileSystemListing extends ServiceAuth
{
    const API_FS_LS   = '/api/v4/fs/ls/';
    const API_FS_INFO = '/api/v4/fs/info/';

    /**
     * Get all files in a given directory
     * @param string $DirectoryName
     * @param bool   $onlyFolder     Only list folders
     * @param bool   $countSubFolder Return files and sub-folder count for folders
     * @param bool   $removeHidden   Don’t return hidden files in directory listing
     * @return models\FileSystem\FileInfo[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getFilesFromDirectory(
        $DirectoryName  = '/Disque dur/',
        $onlyFolder     = false,
        $countSubFolder = false,
        $removeHidden   = true
    ) {
        $Directory_b64 = base64_encode($DirectoryName);
        $result = $this->callService('GET', self::API_FS_LS . $Directory_b64 . '?'. http_build_query([
            'onlyFolder'        => $onlyFolder,
            'countSubFolder'    => $countSubFolder,
            'removeHidden'      => $removeHidden,
        ]));

        return $result->getModels(models\FileSystem\FileInfo::class);
    }

    /**
     * Get file information
     * @param string $DirectoryName
     * @return models\FileSystem\FileInfo
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getFileInformation($DirectoryName)
    {
        $directory_b64 = base64_encode($DirectoryName);
        $result        = $this->callService('GET', self::API_FS_INFO . $directory_b64);

        return $result->getModel(models\FileSystem\FileInfo::class);
    }

}

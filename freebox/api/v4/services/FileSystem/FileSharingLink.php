<?php

namespace alphayax\freebox\api\v4\services\FileSystem;

use alphayax\freebox\api\v4\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class FileSharingLink
 * @package alphayax\freebox\api\v4\services\FileSystem
 */
class FileSharingLink extends ServiceAuth
{
    const API_SHARE_LINK = '/api/v4/share_link/';

    /**
     * Retrieve all File Sharing links
     * @return models\FileSystem\ShareLink[]
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAll()
    {
        $result = $this->callService('GET', self::API_SHARE_LINK);

        return $result->getModels(models\FileSystem\ShareLink::class);
    }

    /**
     * Get a file sharing link from his token identifier
     * @param $token
     * @return models\FileSystem\ShareLink
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function getFromToken($token)
    {
        $rest = $this->callService('GET', self::API_SHARE_LINK . $token);

        return $rest->getModel(models\FileSystem\ShareLink::class);
    }

    /**
     * Delete a File Sharing link for his token identifier
     * Deletes the ShareLink task with the given token, if the task was running, stop it.
     * No rollback is done, if a file as already been processed it will be left as is.
     * @param $token
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function deleteFromToken($token)
    {
        $result = $this->callService('DELETE', self::API_SHARE_LINK . $token);

        return $result->getSuccess();
    }

    /**
     * Create a File Sharing link
     * @param string $path
     * @param int    $expire
     * @param string $fullUrl
     * @return models\FileSystem\ShareLink
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function create($path, $expire = 0, $fullUrl = '')
    {
        $Path_b64 = base64_encode($path);
        $expire   = $expire ?: (time() + (60 * 60 * 24)); // If expire is not defined, default is 24h
        $result     = $this->callService('POST', self::API_SHARE_LINK, [
            'path'    => $Path_b64,
            'expire'  => $expire,
            'fullurl' => $fullUrl,
        ]);

        return $result->getModel(models\FileSystem\ShareLink::class);
    }

}

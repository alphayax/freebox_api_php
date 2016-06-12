<?php
namespace alphayax\freebox\api\v3\services\FileSystem;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\Service;


/**
 * Class FileSharingLink
 * @package alphayax\freebox\api\v3\services\FileSystem
 */
class FileSharingLink extends Service {

    const API_SHARE_LINK = '/api/v3/share_link/';

    /**
     * Retrieve all File Sharing links
     * @return models\FileSystem\ShareLink[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_SHARE_LINK);
        $rest->GET();

        return $rest->getResultAsArray( models\FileSystem\ShareLink::class);
    }

    /**
     * Get a file sharing link from his token identifier
     * @param $Token
     * @return models\FileSystem\ShareLink
     */
    public function getFromToken( $Token){
        $rest = $this->getAuthService( self::API_SHARE_LINK . $Token);
        $rest->GET();

        return $rest->getResult( models\FileSystem\ShareLink::class);
    }

    /**
     * Delete a File Sharing link for his token identifier
     * Deletes the ShareLink task with the given token, if the task was running, stop it.
     * No rollback is done, if a file as already been processed it will be left as is.
     * @param $Token
     * @return bool
     */
    public function deleteFromToken( $Token){
        $rest = $this->getAuthService( self::API_SHARE_LINK . $Token);
        $rest->DELETE();

        return $rest->getSuccess();
    }

    /**
     * Create a File Sharing link
     * @param string    $Path
     * @param int       $expire
     * @param string    $fullUrl
     * @return models\FileSystem\ShareLink
     */
    public function create( $Path, $expire = 0, $fullUrl = ''){
        $Path_b64   = base64_encode( $Path);
        $expire     = $expire ?: (time() + (60*60*24)); // If expire is not defined, default is 24h
        $rest = $this->getAuthService( self::API_SHARE_LINK);
        $rest->POST([
            'path'      => $Path_b64,
            'expire'    => $expire,
            'fullurl'   => $fullUrl,
        ]);

        return $rest->getResult( models\FileSystem\ShareLink::class);
    }

}

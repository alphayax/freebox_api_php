<?php
namespace alphayax\freebox\api\v3\services\FileSystem;
use alphayax\freebox\api\v3\models\FileSystem\ShareLink;
use alphayax\freebox\api\v3\Service;


/**
 * Class FileSharingLink
 * @package alphayax\freebox\api\v3\services\FileSystem
 */
class FileSharingLink extends Service {

    const API_SHARE_LINK = '/api/v3/share_link/';

    /**
     * Retrieve a File Sharing link
     * @return ShareLink[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_SHARE_LINK);
        $rest->GET();

        $ApiReturn = $rest->getCurlResponse();
        $FileSharingLinks   = [];
        $FileSharingLink_xs = @$ApiReturn['result'] ?: [];
        foreach( $FileSharingLink_xs as $fileSharingLink_x){
            $FileSharingLinks[] = new ShareLink( $fileSharingLink_x);
        }
        return $FileSharingLinks;
    }

    /**
     * @param $Token
     * @return ShareLink
     */
    public function getFromToken( $Token){
        $rest = $this->getAuthService( self::API_SHARE_LINK . $Token);
        $rest->GET();

        return new ShareLink( $rest->getCurlResponse()['result']);
    }

    /**
     * Delete a File Sharing link
     * Deletes the ShareLink task with the given token, if the task was running, stop it.
     * No rollback is done, if a file as already been processed it will be left as is.
     * @param $Token
     * @return bool
     */
    public function deleteFromToken( $Token){
        $rest = $this->getAuthService( self::API_SHARE_LINK . $Token);
        $rest->DELETE();

        return $rest->getCurlResponse()['success'];
    }

    /**
     * Create a File Sharing link
     * @param string    $Path
     * @param int       $expire
     * @param string    $fullUrl
     * @return ShareLink
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

        return new ShareLink( $rest->getCurlResponse()['result']);
    }

}

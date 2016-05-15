<?php
namespace alphayax\freebox\api\v3\services\FileSystem;
use alphayax\freebox\api\v3\models\FileSystem\FileInfo;
use alphayax\freebox\api\v3\Service;


/**
 * Class FileSystemListing
 * @package alphayax\freebox\api\v3\services\FileSystem
 */
class FileSystemListing extends Service {

    const API_FS_LS    = '/api/v3/fs/ls/';
    const API_FS_INFO  = '/api/v3/fs/info/';

    /**
     * @param string $DirectoryName
     * @param bool $onlyFolder      Only list folders
     * @param bool $countSubFolder  Return files and subfolder count for folders
     * @param bool $removeHidden    Don’t return hidden files in directory listing
     * @return FileInfo[]
     */
    public function getFilesFromDirectory( $DirectoryName = '/Disque dur/', $onlyFolder = true, $countSubFolder = false, $removeHidden = true){
        $Directory_b64 = base64_encode( $DirectoryName);
        $rest = $this->getAuthService( self::API_FS_LS . $Directory_b64);
        $rest->GET([
            'onlyFolder'        => $onlyFolder,
            'countSubFolder'    => $countSubFolder,
            'removeHidden'      => $removeHidden,
        ]);

        $FsTask_xs = $rest->getCurlResponse()['result'];
        $FsTasks   = [];
        foreach( $FsTask_xs as $fsTask_x) {
            $FsTasks[] = new FileInfo( $fsTask_x);
        }
        return $FsTasks;
    }

    /**
     * Get file information
     * @param string $DirectoryName
     * @return FileInfo
     */
    public function getFileInformation( $DirectoryName){
        $Directory_b64 = base64_encode( $DirectoryName);
        $rest = $this->getAuthService( self::API_FS_INFO . $Directory_b64);
        $rest->GET();

        return new FileInfo( $rest->getCurlResponse()['result']);
    }

}

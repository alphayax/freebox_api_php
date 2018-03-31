<?php

namespace alphayax\freebox\api\v4\services\FileSystem;

use alphayax\freebox\api\v4\models;
use alphayax\freebox\utils\ServiceAuth;


/**
 * Class FileSystemOperation
 * @package alphayax\freebox\api\v4\services\FileSystem
 */
class FileSystemOperation extends ServiceAuth
{

    const API_FS_MV        = '/api/v4/fs/mv/';
    const API_FS_CP        = '/api/v4/fs/cp/';
    const API_FS_RM        = '/api/v4/fs/rm/';
    const API_FS_CAT       = '/api/v4/fs/cat/';
    const API_FS_ARCHIVE   = '/api/v4/fs/archive/';
    const API_FS_EXTRACT   = '/api/v4/fs/extract/';
    const API_FS_REPAIR    = '/api/v4/fs/repair/';
    const API_FS_HASH      = '/api/v4/fs/hash/';
    const API_FS_TASK_HASH = '/api/v4/fs/tasks/%u/hash';
    const API_FS_MKDIR     = '/api/v4/fs/mkdir/';
    const API_FS_RENAME    = '/api/v4/fs/rename/';
    const API_DOWNLOAD     = '/api/v4/dl/';

    /**
     * Base64 encode paths
     * @param array $paths
     * @return array
     */
    private function encodePaths(array $paths)
    {
        $paths_b64 = [];
        foreach ($paths as $path) {
            $paths_b64[] = $this->encodePath($path);
        }
        return $paths_b64;
    }

    /**
     * Base64 encode path
     * @param $path
     * @return array
     */
    private function encodePath($path)
    {
        return base64_encode($path);
    }

    /**
     * Move files
     * @param string[] $sourceFiles  : array of file paths
     * @param string   $destination  : destination path
     * @param string   $conflictMode (overwrite, both, recent, skip)
     * @return models\FileSystem\FsTask
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function move(array $sourceFiles, $destination, $conflictMode = 'recent')
    {
        /// Convert all paths in base64
        $destination_b64 = $this->encodePath($destination);
        $source_b64      = $this->encodePaths($sourceFiles);

        $result = $this->callService('POST', self::API_FS_MV, [
            'files' => $source_b64,
            'dst'   => $destination_b64,
            'mode'  => $conflictMode,
        ]);

        return $result->getModel(models\FileSystem\FsTask::class);
    }

    /**
     * Copy files
     * @param string[] $sourceFiles  : array of file paths
     * @param string   $destination  : destination path
     * @param string   $conflictMode (overwrite, both, recent, skip)
     * @return models\FileSystem\FsTask
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function copy(array $sourceFiles, $destination, $conflictMode = 'recent')
    {
        /// Convert all paths in base64
        $destination_b64 = $this->encodePath($destination);
        $source_b64      = $this->encodePaths($sourceFiles);

        $result = $this->callService('POST', self::API_FS_CP, [
            'files' => $source_b64,
            'dst'   => $destination_b64,
            'mode'  => $conflictMode,
        ]);

        return $result->getModel(models\FileSystem\FsTask::class);
    }

    /**
     * Delete files
     * @param string[] $removeFiles
     * @return models\FileSystem\FsTask
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function remove(array $removeFiles = [])
    {
        /// Convert all paths in base64
        $removedFiles_b64 = $this->encodePaths($removeFiles);

        $result = $this->callService('POST', self::API_FS_RM, [
            'files' => $removedFiles_b64,
        ]);

        return $result->getModel(models\FileSystem\FsTask::class);
    }

    /**
     * Concatenate files (Miaw ^^)
     * @param string[] $fileParts      : The list of files to concatenate
     * @param string   $destination    : The destination file
     * @param bool     $isMultiVolumes : Enable multi-volumes mode, it will start at XXX001 and concatenate XXX002, XXX003, ...
     * @param bool     $isToDelete     : Deletes source files
     * @param bool     $isToOverwrite  : Overwrites the destination
     * @param bool     $isToAppend     : Append to the destination
     * @return models\FileSystem\FsTask
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function cat(
        array $fileParts,
        $destination,
        $isMultiVolumes = false,
        $isToDelete = false,
        $isToOverwrite = false,
        $isToAppend = false
    ) {
        /// Convert all paths in base64
        $destination_b64 = $this->encodePath($destination);
        $fileParts_b64   = $this->encodePaths($fileParts);

        $result = $this->callService('POST', self::API_FS_CAT, [
            'files'         => $fileParts_b64,
            'dst'           => $destination_b64,
            'multi_volumes' => $isMultiVolumes,
            'delete_files'  => $isToDelete,
            'append'        => $isToAppend,
            'overwrite'     => $isToOverwrite,
        ]);

        return $result->getModel(models\FileSystem\FsTask::class);
    }

    /**
     * Create an archive
     * @param string[] $fileParts   : The list of files to concatenate
     * @param string   $destination : The destination file
     * @return models\FileSystem\FsTask
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function archive(array $fileParts, $destination)
    {
        /// Convert all paths in base64
        $destination_b64 = $this->encodePath($destination);
        $fileParts_b64   = $this->encodePaths($fileParts);

        $result = $this->callService('POST', self::API_FS_ARCHIVE, [
            'files' => $fileParts_b64,
            'dst'   => $destination_b64,
        ]);

        return $result->getModel(models\FileSystem\FsTask::class);
    }

    /**
     * Extract an archive
     * @param string $source        : The archive file
     * @param string $destination   : The destination folder
     * @param string $password      : The archive password
     * @param bool   $isToDelete    : Delete archive after extraction
     * @param bool   $isToOverwrite : Overwrites the destination
     * @return models\FileSystem\FsTask
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function extract($source, $destination, $password = '', $isToDelete = false, $isToOverwrite = false)
    {
        /// Convert all paths in base64
        $source_b64      = $this->encodePath($source);
        $destination_b64 = $this->encodePath($destination);

        $result = $this->callService('POST', self::API_FS_EXTRACT, [
            'src'            => $source_b64,
            'dst'            => $destination_b64,
            'password'       => $password,
            'delete_archive' => $isToDelete,
            'overwrite'      => $isToOverwrite,
        ]);

        return $result->getModel(models\FileSystem\FsTask::class);
    }

    /**
     * Repair files from a .par2
     * @param string $source     : The .par2 file
     * @param bool   $isToDelete : Delete par2 files after repair
     * @return models\FileSystem\FsTask
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function repair($source, $isToDelete = false)
    {
        /// Convert all paths in base64
        $source_b64 = $this->encodePath($source);

        $result = $this->callService('POST', self::API_FS_REPAIR, [
            'src'            => $source_b64,
            'delete_archive' => $isToDelete,
        ]);

        return $result->getModel(models\FileSystem\FsTask::class);
    }

    /**
     * Hash a file. This operation can take some time. To get the hash value,
     * the returned task must have succeed and be in the state “done”.
     * @param string $source   : The file to hash
     * @param string $hashType : The type of hash (md5, sha1, ...) - Default is md5
     * @return models\FileSystem\FsTask
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function computeHash($source, $hashType = 'md5')
    {
        /// Convert all paths in base64
        $source_b64 = $this->encodePath($source);

        $result = $this->callService('POST', self::API_FS_HASH, [
            'src'       => $source_b64,
            'hash_type' => $hashType,
        ]);

        return $result->getModel(models\FileSystem\FsTask::class);
    }

    /**
     * Get the hash value
     * To get the hash, the task must have succeed and be in the state “done”.
     * @param $fsTaskId
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getHashValue($fsTaskId)
    {
        $service = sprintf(self::API_FS_TASK_HASH, $fsTaskId);

        $result = $this->callService('GET', $service, []);

        return $result->getResult();
    }

    /**
     * Create a directory
     * Contrary to other file system tasks, this operation is done synchronously.
     * Instead of a returning a FsTask a call to this API will only return success status
     * @param string $parentDirectory  : The parent directory path
     * @param string $newDirectoryName : The name of the directory to create
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function createDirectory($parentDirectory, $newDirectoryName)
    {
        $result = $this->callService('POST', self::API_FS_MKDIR, [
            'parent'  => $this->encodePath($parentDirectory),
            'dirname' => $newDirectoryName,
        ]);

        return $result->getSuccess();
    }

    /**
     * Rename a file/folder
     * Contrary to other file system tasks, this operation is done synchronously.
     * Instead of a returning a FsTask a call to this API will only return success status
     * @param string $sourceFilePath : The source file path
     * @param string $newFileName    : The new name of the file (clear text, without path)
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \alphayax\freebox\Exception\FreeboxApiException
     */
    public function rename($sourceFilePath, $newFileName)
    {
        $result = $this->callService('POST', self::API_FS_RENAME, [
            'src' => $this->encodePath($sourceFilePath),
            'dst' => $newFileName,
        ]);

        return $result->getSuccess();
    }

    /**
     * Download a file from the freebox server (return the file content)
     * @param string $sourceFilePath
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function download($sourceFilePath)
    {
        $result = $this->callService('GET', self::API_DOWNLOAD . base64_encode($sourceFilePath));

        return $result->getRaw();
    }

}

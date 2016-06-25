<?php
namespace alphayax\freebox\api\v3\services\Storage;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\api\v3\symbols;
use alphayax\freebox\utils\ServiceAuth;

/**
 * Class Disk
 * @package alphayax\freebox\api\v3\services\Storage
 */
class Disk extends ServiceAuth {

    const API_STORAGE_DISK          = '/api/v3/storage/disk/';
    const API_STORAGE_DISK_FORMAT   = '/api/v3/storage/disk/%u/format/';

    /**
     * Get the list of disks
     * @throws \Exception
     * @return models\Storage\StorageDisk[]
     */
    public function getAll(){
        $rest = $this->getService( self::API_STORAGE_DISK);
        $rest->GET();

        return $rest->getResultAsArray( models\Storage\StorageDisk::class);
    }

    /**
     * Get a given disk info
     * @param $diskId
     * @return \alphayax\freebox\api\v3\models\Storage\StorageDisk
     */
    public function getFromId( $diskId){
        $rest = $this->getService( self::API_STORAGE_DISK . $diskId);
        $rest->GET();

        return $rest->getResult( models\Storage\StorageDisk::class);
    }

    /**
     * Update a disk state
     * @param \alphayax\freebox\api\v3\models\Storage\StorageDisk $storageDisk
     * @return \alphayax\freebox\api\v3\models\Storage\StorageDisk
     */
    public function update( models\Storage\StorageDisk $storageDisk){
        $rest = $this->getService( self::API_STORAGE_DISK . $storageDisk->getId());
        $rest->PUT( $storageDisk);

        return $rest->getResult( models\Storage\StorageDisk::class);
    }

    /**
     * Format the disk with the given id
     * There will be one partition using all the available space on disk. All previous data will be lost.
     * Parameters will be ignored if you format the Freebox internal disk
     * @param \alphayax\freebox\api\v3\models\Storage\StorageDisk $storageDisk
     * @param string $label
     * @param string $fsType
     * @param string $tableType
     * @see symbols\Storage\DiskPartition\FsType
     * @see symbols\Storage\StorageDisk\TableType
     * @return bool
     */
    public function format( models\Storage\StorageDisk $storageDisk, $label, $fsType, $tableType){
        $rest = $this->getService( self::API_STORAGE_DISK . $storageDisk->getId());
        $rest->PUT([
           'label'      => $label,
           'fs_type'    => $fsType,
           'table_type' => $tableType,
        ]);

        return $rest->getSuccess();
    }

}

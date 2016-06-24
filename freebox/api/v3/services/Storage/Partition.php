<?php
namespace alphayax\freebox\api\v3\services\Storage;
use alphayax\freebox\api\v3\models;
use alphayax\freebox\utils\Service;
use alphayax\freebox\api\v3\symbols;

/**
 * Class Partition
 * @package alphayax\freebox\api\v3\services\Storage
 */
class Partition extends Service {

    const API_STORAGE_PARTITION         = '/api/v3/storage/partition/';
    const API_STORAGE_PARTITION_CHECK   = '/api/v3/storage/partition/%u/check/';

    /**
     * Get the list of partitions
     * @throws \Exception
     * @return models\Storage\DiskPartition[]
     */
    public function getAll(){
        $rest = $this->getAuthService( self::API_STORAGE_PARTITION);
        $rest->GET();

        return $rest->getResultAsArray( models\Storage\DiskPartition::class);
    }

    /**
     * Get a given partition info
     * @param $diskId
     * @return \alphayax\freebox\api\v3\models\Storage\DiskPartition
     */
    public function getFromId( $diskId){
        $rest = $this->getAuthService( self::API_STORAGE_PARTITION . $diskId);
        $rest->GET();

        return $rest->getResult( models\Storage\DiskPartition::class);
    }

    /**
     * Checks the partition with the given id
     * *NOTE* once started you can monitor the fsck process getting the partition information
     * @see DiskPartition operation_pct field
     * @param \alphayax\freebox\api\v3\models\Storage\DiskPartition $diskPartition
     * @param string $checkMode "ro" for read only check, "rw" to attempt to repair errors
     * @return bool
     * @see symbols\Storage\DiskPartition\FsType
     * @see symbols\Storage\StorageDisk\TableType
     */
    public function check( models\Storage\DiskPartition $diskPartition, $checkMode = 'ro'){
        $rest = $this->getAuthService( self::API_STORAGE_PARTITION_CHECK . $diskPartition->getId());
        $rest->PUT([
           'checkmode' => $checkMode,
        ]);

        return $rest->getSuccess();
    }

}

<?php
namespace alphayax\freebox\api\v3\symbols\Storage\DiskPartition;

/**
 * Symbol FsType
 * @package alphayax\freebox\api\v3\symbols\Storage\DiskPartition
 * @see alphayax\freebox\api\v3\models\Storage\DiskPartition
 */
interface FsType {

    const NONE     = 'empty';
    const UNKNOWN  = 'unknown';
    const XFS      = 'xfs';
    const EXT4     = 'ext4';
    const VFAT     = 'vfat';
    const NTF      = 'ntf';
    const HF       = 'hf';
    const HFS_PLUS = 'hfsplus';
    const SWAP     = 'swap';
    const EXFAT    = 'exfat';
}

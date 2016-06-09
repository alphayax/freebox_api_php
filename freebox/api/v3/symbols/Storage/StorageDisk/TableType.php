<?php
namespace alphayax\freebox\api\v3\symbols\Storage\StorageDisk;

/**
 * Symbol TableType
 * @package alphayax\freebox\api\v3\symbols\Storage\StorageDisk
 * @see alphayax\freebox\api\v3\models\Storage\StorageDisk
 */
interface TableType {

    const MSDOS       = 'msdos';
    const GPT         = 'gpt';
    const SUPERFLOPPY = 'superfloppy';
    const NONE        = 'empty';
}

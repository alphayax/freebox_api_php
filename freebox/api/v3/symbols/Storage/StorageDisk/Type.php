<?php
namespace alphayax\freebox\api\v3\symbols\Storage\StorageDisk;

/**
 * Symbol Type
 * @package alphayax\freebox\api\v3\symbols\Storage\StorageDisk
 * @see alphayax\freebox\api\v3\models\Storage\StorageDisk
 */
interface Type {

    /** Freebox internal disk */
    const INTERNAL = 'internal';

    /** usb disk */
    const USB = 'usb';

    /** sata disk */
    const SATA = 'sata';
}

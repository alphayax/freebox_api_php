<?php
namespace alphayax\freebox\api\v3\symbols\NetworkShare\AfpConfig;

/**
 * Symbol ServerType
 * @package alphayax\freebox\api\v3\symbols\NetworkShare\AfpConfig
 * @see alphayax\freebox\api\v3\models\NetworkShare\AfpConfig
 */
interface ServerType {

    const POWERBOOK   = 'powerbook';
    const POWERMAC    = 'powermac';
    const MACMINI     = 'macmini';
    const IMAC        = 'imac';
    const MACBOOK     = 'macbook';
    const MACBOOK_PRO = 'macbookpro';
    const MACBOOK_AIR = 'macbookair';
    const MAC_PRO     = 'macpro';
    const APPLE_TV    = 'appletv';
    const AIR_PORT    = 'airport';
    const XSERVE      = 'xserve';
}

<?php

namespace alphayax\freebox\api\v4\symbols\Download\Config\DlBtConfig;

/**
 * Symbol CryptoSupport
 * @package alphayax\freebox\api\v4\symbols\Download\Config\DlBtConfig
 * @see     \alphayax\freebox\api\v4\models\Download\Config\DlBtConfig
 */
interface CryptoSupport
{
    /** will never use bittorrent crypto */
    const UNSUPPORTED = 'unsupported';

    /** will select plain during handshake */
    const ALLOWED = 'allowed';

    /** will select crypto during handshake */
    const PREFERRED = 'preferred';

    /** will allow plain bittorrent */
    const REQUIRED = 'required';
}

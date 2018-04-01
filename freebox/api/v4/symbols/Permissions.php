<?php
namespace alphayax\freebox\api\v4\symbols;

/**
 * Symbol Permissions
 * @package alphayax\freebox\api\v4\symbols
 */
interface Permissions {

    /** Allow modifying the Freebox settings (reading settings is always allowed) */
    const SETTINGS = 'settings';

    /** Access to contact list */
    const CONTACTS = 'contacts';

    /** Access to call logs */
    const CALLS = 'calls';

    /** Access to filesystem */
    const EXPLORER = 'explorer';

    /** Access to downloader */
    const DOWNLOADER = 'downloader';

    /** Access to parental control */
    const PARENTAL = 'parental';

    /** Access personal video recorder */
    const PVR = 'pvr';
}
